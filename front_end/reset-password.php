<?php
// reset-password.php

session_start();
include '../config/database.php';

// Kiểm tra xem token có tồn tại trong URL không
if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Kiểm tra xem token có hợp lệ không
    $db = new Database();
    $sql = "SELECT * FROM client WHERE reset_token = '$token'";
    $result = $db->select($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        // Kiểm tra xem người dùng đã gửi mẫu đặt lại mật khẩu chưa
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $newPassword = $_POST['new_password'];

            // Cập nhật mật khẩu mới và xoá token đã sử dụng
            $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);
            $sqlUpdatePassword = "UPDATE client SET mat_khau = '$hashedPassword', reset_token = NULL WHERE reset_token = '$token'";
            $db->query($sqlUpdatePassword);

            echo "Mật khẩu đã được đặt lại thành công!";
            exit();
        }
    } else {
        echo "Token không hợp lệ!";
        exit();
    }
} else {
    echo "Token không tồn tại!";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Add your additional CSS links here -->
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form {
            max-width: 400px;
            margin: 0 auto;
        }

        label {
            font-weight: bold;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<div class="container">
    <h2 class="text-center mb-4">Reset Password</h2>
    <form method="post">
        <div class="form-group">
            <label for="new_password">Enter your new password:</label>
            <input type="password" id="new_password" name="new_password" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Reset Password</button>
    </form>
</div>
<!-- Bootstrap JS and additional JavaScript links -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<!-- Add your additional JavaScript links here -->
</body>
</html>
