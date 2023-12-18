




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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $ma_sinh_vien = $_POST["ma_sinh_vien"];
        $ten_tai_khoan = $_POST["ten_nguoi_dung"];
        $ho_va_ten = $_POST["ho_ten"];
        $mat_khau = $_POST["mat_khau"];
        
        $email = $_POST["email"];
        $so_dien_thoai = $_POST["so_dien_thoai"];

        // Xử lý ảnh đại diện
        $anh_dai_dien = $_FILES["anh_dai_dien"]["name"];
        $anh_dai_dien_tmp = $_FILES["anh_dai_dien"]["tmp_name"];
        move_uploaded_file($anh_dai_dien_tmp, "../assets/img/$anh_dai_dien");

        $hashed_password = password_hash($mat_khau, PASSWORD_DEFAULT);

        // Thực hiện câu lệnh SQL thêm phòng
        $sql = "INSERT INTO client (ma_sinh_vien, ten_nguoi_dung, mat_khau, ho_ten, email, so_dien_thoai, trang_thai, anh_dai_dien)
            VALUES ('$ma_sinh_vien', '$ten_tai_khoan', '$hashed_password', '$ho_va_ten', '$email', '$so_dien_thoai', 'sẵn sàng', '$anh_dai_dien')";

    if ($db->insert($sql)) {
        echo '<script>alert("Thêm sinh viên thành công!"); window.location.href = "list-sv.php";</script>';

        exit(); // Đảm bảo dừng thực thi mã nguồn sau khi chuyển hướng
    } else {
        echo '<script>alert("Lỗi khi thêm sinh viên ' . $db->getError() . '");</script>';    }
    }
    ?>
    <div class="col-md-9">
        <div class="col-12 container-content">
            <div class="header-content pb-3">
            <div class="title-content">
                    <h3 class="m-0 strong">Thêm khách hàng</h3>
                    <div class="span">Quản lý khách hàng</div>
                </div>
            </div>
            <div class="content-add-room col-12">
                <form action="add-sv.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                    <div class="col-12 col-md-6 p-2">
                            <label for="ma_sinh_vien">Mã sinh viên</label>
                            <input type="text" id="ma_sinh_vien" name="ma_sinh_vien" class="form-control" required>
                        </div>
                        <div class="col-12 p-2">
                            <label for="ten_nguoi_dung">Tên người dùng</label>
                            <input type="text" id="ten_nguoi_dung" name="ten_nguoi_dung" class="form-control"required>
                        </div>
                        <div class="col-12 p-2">
                            <label for="ho_ten">Họ tên</label>
                            <input type="text" id="ho_ten" name="ho_ten" class="form-control"required>
                        </div>
                        <div class="col-12 col-md-4 p-2">
                            <label for="mat_khau">Mật khẩu</label>
                            <input type="text" id="mat_khau" name="mat_khau" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-6 p-2">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" class="form-control" required>
                        </div>
                        
                        <div class="col-12 col-md-4 p-2">
                            <label for="so_dien_thoai">Số điện thoại</label>
                            <input type="text" id="so_dien_thoai" name="so_dien_thoai" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-4 p-2">
                            <label for="trang_thai">Trạng thái</label>
                            <input type="text" id="trang_thai" name="trang_thai" class="form-control">
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
                       
                        <div class="col-12">
                            <input class="but-add mr-2" type="submit" value="Thêm">
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
<?php } ?>

