<?php
session_start();

include '../config/database.php'; // Import file database.php
// Khởi tạo đối tượng Database
$db = new Database();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ma_sinh_vien = $_POST["msv"];
    $ten_tai_khoan = $_POST["ten-tai-khoan"];
    $mat_khau = $_POST["mat-khau"];
    $ho_va_ten = $_POST["hvt"];
    $email = $_POST["email"];
    $so_dien_thoai = $_POST["sdt"];
    // Xử lý ảnh đại diện
    $anh_dai_dien = $_FILES["anh_dai_dien"]["name"];
    $anh_dai_dien_tmp = $_FILES["anh_dai_dien"]["tmp_name"];
    move_uploaded_file($anh_dai_dien_tmp, "../assets/img/$anh_dai_dien");

    // Thực hiện câu lệnh SQL thêm phòng
    $sql = "INSERT INTO client (ma_sinh_vien, ten_nguoi_dung, mat_khau, ho_ten, email, so_dien_thoai, trang_thai, anh_dai_dien)
            VALUES ('$ma_sinh_vien', '$ten_tai_khoan', '$mat_khau', '$ho_va_ten', '$email', '$so_dien_thoai', 'sẵn sàng', '$anh_dai_dien')";

    if ($db->insert($sql)) {
        echo '<script>alert("Đăng ký tài khoản thành công!"); window.location.href = "../back_end/dang_nhap.html";</script>';
        exit(); // Đảm bảo dừng thực thi mã nguồn sau khi chuyển hướng
    } else {
        echo '<script>alert("Lỗi khi đăng ký: ' . $db->getError() . '");</script>';    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WEB</title>
    <!--    css-->
    <link rel="stylesheet" href="../assets/css/duyet.css">
    <!--    icon-->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome/js/fontawesome.min.js">
    <link rel="stylesheet" type="text/css" href="../assets/plugins/fontawesome/css/all.min.css">
    <!--    font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <!--    bootstrap-->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!--    carousel-->
    <link rel="stylesheet" href="../assets/plugins/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/plugins/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" type="text/css">
    <!--    ........-->
    <!--    animate-->
    <link rel="stylesheet" href="../assets/css/animate.css">
    <!--    jquery-->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../assets/plugins/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../assets/js/duyet-front.js"></script>

</head>
<body id="body-dang-ky">
<!-- Start Preloader -->
<div id="preload-block">
    <div class="square-block"></div>
</div>
<!-- Preloader End -->
<div class="container-fluid drk-bg">
    <form class="signup" action="form-dang-ky.php" method="post">
        <div class="row">
            <div class="area-left col-4 d-flex align-items-center">
                <div class="a">
                    <h2 class="text-center">KÍ TÚC XÁ</h2>
                    <p class="text-center mb-5">Đăng ký tài khoản</p>
                    <a href="" class="mb-3">
                        <div class="fb d-flex mb-4">
                            <i class="fab fa-facebook-f mr-2"></i>
                            <span>Signin with facebook</span>
                        </div>
                    </a>
                    <a href="" class="mb-3">
                        <div class="tw d-flex mb-4">
                            <i class="fab fa-twitter mr-2"></i>
                            <span>Signin with Twitter</span>
                        </div>
                    </a>
                    <a href="">
                        <div class="gg d-flex">
                            <i class="fab fa-google mr-2"></i>
                            <span>Signin with Google</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="col-8 area-right">
                <p class="text-center my-3">Đăng ký tài khoản</p>
                <div class="text-center">
                    <input class="input-signup form-control mb-2" type="text" id="msv" name="msv" placeholder="Mã sinh viên" required>
                </div>
                <div class="text-center">
                    <input class="input-signup form-control mb-2" type="text" id="ten-tai-khoan" name="ten-tai-khoan" placeholder="Tên tài khoản" required>
                </div>
                <div class="text-center">
                    <input class="input-signup form-control mb-2" type="password" id="mat-khau" name="mat-khau" placeholder="Mật khẩu" required>
                </div>
                <div class="text-center">
                    <input class="input-signup form-control mb-2" type="text" id="hvt" name="hvt" placeholder="Họ và tên" required>
                </div>
                <div class="text-center">
                    <input class="input-signup form-control mb-2" type="text" id="email" name="email" placeholder="Email" required>
                </div>
                <div class="text-center">
                    <input class="input-signup form-control mb-2" type="number" id="sdt" name="sdt" placeholder="Số điện thoại" required>
                </div>
                <div class="col-12 p-2">
                    <label>Ảnh đại diện:</label>
                    <div class="flex-container">
                        <!-- Trong HTML -->
                        <div class="drag-area-1 drag-area w-full rounded-2xl border-2 border-dashed items-center">
                            <header class="text-lg text-black-50">Kéo và Thả để Tải ảnh lên</header>
                            <span class="my-3 text-sm text-black-50">Hoặc</span>
                            <div class="but-add-image">Chọn ảnh</div>
                            <input type="file" name="anh_dai_dien" hidden>
                            <div class="remove-image" onclick="removeImage(this)">-</div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <input type="submit" value="Đăng Ký" class="btn butn-signup">
                </div>
            </div>
        </div>
    </form>
</div>
<script src="../assets/js/area-image.js"></script>
</body>
</html>
