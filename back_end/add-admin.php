
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
        $username = $_POST["username"];
        $password = $_POST["password"];

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $check='select '
        // Thực hiện câu lệnh SQL thêm phòng
        $sql = "INSERT INTO login (username, password, role, status)
            VALUES ('$username', '$hashed_password', 'admin', '1')";

        echo "SQL: " . $sql . "<br>"; // In ra câu lệnh SQL để kiểm tra

        if ($db->insert($sql)) {
            echo '<script>alert("Thêm tài khoản admin thành công!"); window.location.href = "list-user.php";</script>';
            exit(); // Đảm bảo dừng thực thi mã nguồn sau khi chuyển hướng
        } else {
            echo '<script>alert("Lỗi khi thêm tài khoản admin ' . $db->getError() . '");</script>';
        }
    }
?>
<!-- Rest of your HTML code -->

    <div class="col-md-9">
        <div class="col-12 container-content">
            <div class="header-content pb-3">
                <div class="title-content">
                    <h3 class="m-0 strong">Thêm admin</h3>
                    <div class="span">Quản lý admin</div>
                </div>
            </div>
            <div class="content-add-room col-12">
                <form action="add-admin.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 col-md-6 p-2">
                            <label for="username">Tên tài khoản</label>
                            <input type="text" id="username" name="username" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-6 p-2">
                            <label for="password">Mật Khẩu</label>
                            <input type="text" id="password" name="password" class="form-control"required>
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

    </body>
    </html>
<?php } ?>

