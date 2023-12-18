<?php
session_start();
include '../config/database.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $check_in_date = $_POST['check_in_date'];
    $check_out_date = $_POST['check_out_date'];
    $idphong = $_GET['id']; // Lấy id phòng từ tham số URL

    // Kiểm tra người dùng đã đăng nhập hay chưa
    if (empty($_SESSION['username'])) {
        // Chuyển hướng đến trang đăng nhập nếu chưa đăng nhập
        header("Location: ../back_end/dang_nhap.html");
        exit();
    }

    $tendangnhap = $_SESSION['username'];

    // Lấy thông tin phòng, bao gồm cả ảnh đại diện
    $db = new Database();
    $sql_phong = "SELECT * FROM phong WHERE id = $idphong";
    $result_phong = $db->select($sql_phong);

    if ($result_phong->num_rows > 0) {
        $row_phong = $result_phong->fetch_assoc();
        $anh_dai_dien_phong = $row_phong['anh_dai_dien'];

        // Chuyển định dạng ngày đến và ngày đi
        $tu_ngay = DateTime::createFromFormat('d/m/Y', $_POST['check_in_date']);
        $den_ngay = DateTime::createFromFormat('d/m/Y', $_POST['check_out_date']);

        // Kiểm tra ngày đi không được trước ngày đến
        if ($tu_ngay >= $den_ngay) {
            echo '<script>alert("Ngày đi phải sau ngày đến!"); window.location.href = "trang_chu.php";</script>';
            exit();
        }

        // Chuyển định dạng ngày thành chuỗi MySQL
        $tu_ngay_formatted = $tu_ngay->format('Y-m-d');
        $den_ngay_formatted = $den_ngay->format('Y-m-d');

        // Kiểm tra nếu phòng đã đăng ký
        $sql_check_registered = "SELECT * FROM dang_ky_phong WHERE idphong = '$idphong'";
        $result_check_registered = $db->select($sql_check_registered);

        if ($result_check_registered->num_rows > 0) {
            // Nếu đã đăng ký, kiểm tra xem có quá thời gian đến ngày hay không
            $row_check_registered = $result_check_registered->fetch_assoc();
            $ngay_den = DateTime::createFromFormat('Y-m-d', $row_check_registered['den_ngay']);
            $ngay_hien_tai = new DateTime();

            if ($ngay_den >= $ngay_hien_tai) {
                // Phòng đã đăng ký và chưa hết hạn, hiển thị thông báo
                echo '<script>alert("Phòng đã được đăng ký!"); window.location.href = "trang_chu.php";</script>';
                exit();
            }
        }

        // Thêm thông tin đăng ký phòng vào cơ sở dữ liệu
        $sql_dang_ky_phong = "INSERT INTO dang_ky_phong (tendangnhap, idphong, tu_ngay, den_ngay, anh_dai_dien) VALUES ('$tendangnhap', '$idphong', '$tu_ngay_formatted', '$den_ngay_formatted', '$anh_dai_dien_phong')";
        $result_dang_ky_phong = $db->insert($sql_dang_ky_phong);

        if ($result_dang_ky_phong) {
            echo '<script>alert("Đã đăng ký phòng thành công!"); window.location.href = "main2.php";</script>';
            // Đăng ký thành công, có thể thêm các xử lý khác hoặc chuyển hướng đến trang khác
            exit();
        } else {
            // Xử lý lỗi, có thể chuyển hướng đến trang lỗi hoặc hiển thị thông báo
            echo "Đã xảy ra lỗi khi đăng ký phòng: " . $db->getError();
        }
    } else {
        // Xử lý lỗi nếu không tìm thấy thông tin phòng
        echo "Không tìm thấy thông tin phòng.";
    }
}
?>
