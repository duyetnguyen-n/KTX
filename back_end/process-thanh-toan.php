<?php
session_start();

include '../config/database.php';
$db = new Database();

$id = isset($_GET['id']) ? $_GET['id'] : '';

$checknguoidung = "SELECT ten_nguoi_dung FROM client WHERE id_client='$id'";
$rschecknguoidung = $db->select($checknguoidung);
$rsc = $rschecknguoidung->fetch_assoc();

if ($rsc) {
    $ten_nguoi_dung = $rsc['ten_nguoi_dung'];

    $sqlInsertPhong = "INSERT INTO phong_da_dang_ky (tendangnhap, idphong, tu_ngay, den_ngay, ngay_tao, anh_dai_dien)
        SELECT tendangnhap, idphong, tu_ngay, den_ngay, ngay_tao, anh_dai_dien FROM dang_ky_phong WHERE tendangnhap='$ten_nguoi_dung'";
    $db->insert($sqlInsertPhong);

    $sqlDeletePhong = "DELETE FROM dang_ky_phong WHERE tendangnhap='$ten_nguoi_dung'";
    $db->delete($sqlDeletePhong);

    $sqlInsertDichVu = "INSERT INTO dich_vu_da_dang_ky (tendangnhap, id_dichvu, ngay_dang_ky, nguoi_tao, ngay_tao)
        SELECT tendangnhap, id_dichvu, ngay_dang_ky, nguoi_tao, ngay_tao FROM dang_ky_dich_vu WHERE tendangnhap='$ten_nguoi_dung'";
    $db->insert($sqlInsertDichVu);

    $sqlDeleteDichVu = "DELETE FROM dang_ky_dich_vu WHERE tendangnhap='$ten_nguoi_dung'";
    $db->delete($sqlDeleteDichVu);

    $sqlInsertTrangThietBi = "INSERT INTO trang_thiet_bi_da_dang_ky (tendangnhap, ma_trang_thiet_bi, ngay_dang_ky, nguoi_tao, ngay_tao)
        SELECT tendangnhap, ma_trang_thiet_bi, ngay_dang_ky, nguoi_tao, ngay_tao FROM dang_ky_trang_thiet_bi WHERE tendangnhap='$ten_nguoi_dung'";
    $db->insert($sqlInsertTrangThietBi);

    $sqlDeleteTrangThietBi = "DELETE FROM dang_ky_trang_thiet_bi WHERE tendangnhap='$ten_nguoi_dung'";
    $db->delete($sqlDeleteTrangThietBi);

    $sqlInsertThanhToan = "INSERT INTO thanh_toan (tendangnhap, ngay_thanh_toan, tong_so_tien, phuong_thuc_thanh_toan, trang_thai, nguoi_tao, ngay_tao)
        SELECT tendangnhap, ngay_thanh_toan, tong_so_tien, phuong_thuc_thanh_toan, trang_thai, nguoi_tao, ngay_tao FROM thanh_toan_demo WHERE tendangnhap='$ten_nguoi_dung'";
    $db->insert($sqlInsertThanhToan);

    $sqlDeleteThanhToan = "DELETE FROM thanh_toan_demo WHERE tendangnhap='$ten_nguoi_dung'";
    $db->delete($sqlDeleteThanhToan);

    echo '<script>alert("Thanh toán thành công.");</script>';
    header("location: list-pay.php?id={$id}");
    exit();
} else {
    echo '<script>alert("Không tìm thấy thông tin người dùng.");</script>';
}
?>
