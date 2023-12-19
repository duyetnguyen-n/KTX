<?php
session_start();

include '../config/database.php';
$db = new Database();
$tongtienphong = 0;
$tongtiendichvu = 0;
$tongtientrangthietbi = 0;

$id = isset($_GET['id']) ? $_GET['id'] : ''; // Lấy id từ URL
$checknguoidung = "SELECT ten_nguoi_dung FROM client WHERE id_client='$id'";
$rschecknguoidung = $db->select($checknguoidung);
$rsc = $rschecknguoidung->fetch_assoc();

if ($rsc) { // Kiểm tra xem tên người dùng có tồn tại hay không
    $ten_nguoi_dung = $rsc['ten_nguoi_dung'];

    // Lấy tổng tiền phòng
    $sqlPhong = "SELECT dp.*, p.* FROM dang_ky_phong dp
            INNER JOIN phong p ON dp.idphong = p.id
            WHERE dp.tendangnhap='$ten_nguoi_dung'";
        $resultPhong = $db->select($sqlPhong);

    if ($resultPhong->num_rows > 0) {
        while ($row = $resultPhong->fetch_assoc()) {
            $tuNgay = new DateTime($row['tu_ngay']);
            $denNgay = new DateTime($row['den_ngay']);
            $soNgayThue = $tuNgay->diff($denNgay)->days;

            $tongtienphong = $tongtienphong + ($soNgayThue/30 * $row['gia']);
            $tongtienphong = round($tongtienphong,2);
        }
    }

    // Lấy tổng tiền dịch vụ
    $sqlDichVu = "SELECT dv.*, d.* FROM dang_ky_dich_vu dv
                  INNER JOIN dichvu d ON dv.id_dichvu = d.id
                  where dv.tendangnhap='$ten_nguoi_dung'";
    $resultDichVu = $db->select($sqlDichVu);

    if ($resultDichVu->num_rows > 0) {
        while ($row = $resultDichVu->fetch_assoc()) {
            $tongtiendichvu = $tongtiendichvu + $row['gia'];
        }
    }

    // Lấy tổng tiền trang thiết bị
    $sqlTrangThietBi = "SELECT tb.*, ttb.* FROM dang_ky_trang_thiet_bi tb
                        INNER JOIN trangthietbi ttb ON tb.ma_trang_thiet_bi = ttb.MaTrangThietBi
                        WHERE tb.tendangnhap='$ten_nguoi_dung'";
    $resultTrangThietBi = $db->select($sqlTrangThietBi);

    if ($resultTrangThietBi->num_rows > 0) {
        while ($row = $resultTrangThietBi->fetch_assoc()) {
            $tongtientrangthietbi = $tongtientrangthietbi + $row['gia'];
        }
    }

    // Tính tổng cộng
    $user = $_SESSION['username'];
    $tong = $tongtienphong + $tongtiendichvu + $tongtientrangthietbi;

    // Thực hiện câu lệnh SQL thêm thanh toán
    $insert = "INSERT INTO thanh_toan_demo (tendangnhap, ngay_thanh_toan, tong_so_tien, phuong_thuc_thanh_toan, trang_thai, nguoi_tao, ngay_tao)
    VALUES ('$ten_nguoi_dung', '9999/10/10', '$tong', 'Loan', 'Pending', '$user', NOW())";

    if ($db->insert($insert)) {
        header("location: list-pay.php?id={$id}");
        exit();
    } else {
        echo '<script>alert("Lỗi khi thêm thanh toán ' . $db->getError() . '");</script>';
    }
} else {
    echo '<script>alert("Không tìm thấy thông tin người dùng.");</script>';
}

