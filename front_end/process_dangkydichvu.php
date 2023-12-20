<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
session_start();
include '../config/database.php';
$db = new Database();
$usn = $_SESSION['username'];
?>

<?php


// Kiểm tra xem form đã được submit chưa
if (isset($_POST['submit_dangkydichvu'])) {

    // Lấy dữ liệu từ form
    $tendangnhap = $usn;
    $id_dichvu = $_POST['id_dichvu'];
    $ngay_dang_ky = $_POST['ngay_dang_ky'];
    $nguoi_tao = $usn; // Thay bằng tên người tạo thực tế

    // Kiểm tra xem người dùng đã đăng ký dịch vụ này chưa
    $sql_check = "SELECT * FROM dang_ky_dich_vu WHERE tendangnhap = '$tendangnhap' AND id_dichvu = $id_dichvu";
    $result_check = $db->select($sql_check);

    if ($result_check->num_rows == 0) {
        // Chưa đăng ký, thêm mới vào cơ sở dữ liệu
        $sql_insert = "INSERT INTO dang_ky_dich_vu (tendangnhap, id_dichvu, ngay_dang_ky, nguoi_tao) 
                       VALUES ('$tendangnhap', $id_dichvu, '$ngay_dang_ky', '$nguoi_tao')";

        if ($db->insert($sql_insert)) {
            echo '<script>alert("Đăng ký thành công!"); window.location.href = "blog.php";</script>';
            exit(); // Đảm bảo dừng thực thi mã nguồn sau khi chuyển hướng
        } else {
            // Lỗi khi thực hiện truy vấn
            echo "Đã có lỗi xảy ra khi đăng ký dịch vụ.";
        }
    } else {
        echo '<script>alert("Bạn đã đăng ký dịch vụ này trước đó."); window.location.href = "blog.php";</script>';
        // Người dùng đã đăng ký rồi
    }
}
?>
