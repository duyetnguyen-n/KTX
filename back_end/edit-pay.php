<?php
session_start();

include '../config/database.php'; // Import file database.php

// Khởi tạo đối tượng Database
$db = new Database();

if (empty($_SESSION['username'])) {
    header("location: dang_nhap.html");
    exit();
} else {
    include 'header.php';
    include 'side-bar.php';
    $id = isset($_GET['id']) ? $_GET['id'] : ''; // Lấy id từ URL

    // Lấy dữ liệu từ cơ sở dữ liệu
    $sql = "SELECT * FROM thanh_toan_demo WHERE id = $id";
    $result = $db->select($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        $tendangnhap = $row["tendangnhap"];
        $ngay_thanh_toan = $row["ngay_thanh_toan"];
        $tong_so_tien = $row["tong_so_tien"];
        $phuong_thuc_thanh_toan = $row["phuong_thuc_thanh_toan"];
        $trang_thai = $row["trang_thai"];
        $nguoi_tao = $row["nguoi_tao"];
        $ngay_tao = $row["ngay_tao"];

        $checknguoidung = "SELECT * FROM client WHERE ten_nguoi_dung='$tendangnhap'";
        $rschecknguoidung = $db->select($checknguoidung);
        $rsc = $rschecknguoidung->fetch_assoc();
        $id_nguoi_dung = $rsc['id_client'];
    } else {
        echo "Không tìm thấy dữ liệu.";
        exit(); // Dừng thực thi nếu không tìm thấy dữ liệu
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $newtendangnhap = $_POST["tendangnhap"];
        $newngay_thanh_toan = $_POST["ngay_thanh_toan"];
        $newtong_so_tien = $_POST["tong_so_tien"];
        $newphuong_thuc_thanh_toan = $_POST["phuong_thuc_thanh_toan"];
        $newtrang_thai = $_POST["trang_thai"];
        $newnguoi_tao = $_SESSION['username'];

        // Thực hiện câu lệnh SQL sửa thanh toán demo
        $sql = "UPDATE thanh_toan_demo SET 
                    tendangnhap='$newtendangnhap', 
                    ngay_thanh_toan='$newngay_thanh_toan', 
                    tong_so_tien='$newtong_so_tien', 
                    phuong_thuc_thanh_toan='$newphuong_thuc_thanh_toan', 
                    trang_thai='$newtrang_thai', 
                    nguoi_tao='$newnguoi_tao'
                    
                    WHERE id=$id";

        if ($db->update($sql)) {
            echo '<script>alert("Sửa thanh toán demo thành công!"); window.location.href = "list-pay.php?id=' . $id_nguoi_dung . '";</script>';

            exit(); // Đảm bảo dừng thực thi mã nguồn sau khi chuyển hướng
        } else {
            echo '<script>alert("Lỗi khi sửa thanh toán demo' . $db->getError() . '");</script>';
        }
    }
}
?>
<!-- Continue your HTML content here -->



<div class="col-md-9">
        <div class="col-12 container-content">
            <div class="header-content pb-3">
                <div class="title-content">
                    <h3 class="m-0 strong">Sửa thanh toán demo</h3>
                    <div class="span">Quản lý thanh toán demo</div>
                </div>
            </div>
            <div class="content-add-room col-12">
                <form action="edit-pay.php?id=<?php echo $id; ?>" method="post">
                    <div class="row">
                        <div class="col-12 col-md-6 p-2">
                            <label for="tendangnhap">Tên đăng nhập</label>
                            <input type="text" id="tendangnhap" name="tendangnhap" class="form-control" value="<?php echo $tendangnhap; ?>" required>
                        </div>
                        <div class="col-12 col-md-6 p-2">
                            <label for="ngay_thanh_toan">Ngày thanh toán</label>
                            <input type="date" id="ngay_thanh_toan" name="ngay_thanh_toan" class="form-control" value="<?php echo $ngay_thanh_toan; ?>" required>
                        </div>
                        <div class="col-12 col-md-6 p-2">
                            <label for="tong_so_tien">Tổng số tiền</label>
                            <input type="text" id="tong_so_tien" name="tong_so_tien" class="form-control" value="<?php echo $tong_so_tien; ?>" required>
                        </div>
                        <div class="col-12 col-md-6 p-2">
                            <label for="phuong_thuc_thanh_toan">Phương thức thanh toán</label>
                            <input type="text" id="phuong_thuc_thanh_toan" name="phuong_thuc_thanh_toan" class="form-control" value="<?php echo $phuong_thuc_thanh_toan; ?>" required>
                        </div>
                        <div class="col-12 col-md-6 p-2">
                            <label for="trang_thai">Trạng thái</label>
                            <input type="text" id="trang_thai" name="trang_thai" class="form-control" value="<?php echo $trang_thai; ?>" required>
                        </div>
                        <!-- Các trường thông tin khác tương ứng với cơ sở dữ liệu -->

                        <div class="col-12">
                            <input class="but-add mr-2" type="submit" value="Cập nhật">
                            <input class="but-cancel" type="button" value="Hủy">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../assets/js/area-image.js"></script>

    </body>
    </html>