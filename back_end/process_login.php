<?php
// Kết nối đến cơ sở dữ liệu
include '../config/database.php';

function checkLogin($username, $password)
{
    $db = new Database();

    // Kiểm tra trong bảng client
    $sqlClient = "SELECT * FROM client WHERE ten_nguoi_dung = '$username' AND mat_khau = '$password' AND ma_sinh_vien IS NOT NULL AND trang_thai = 'sẵn sàng'";
    $resultClient = $db->select($sqlClient);

    if ($resultClient->num_rows == 1) {
        $user = $resultClient->fetch_assoc();
        return ['username' => $user['ten_nguoi_dung'], 'role' => 'client'];
    }

    // Kiểm tra trong bảng admin
    $sqlAdmin = "SELECT * FROM login WHERE username = '$username' AND password = '$password'";
    $resultAdmin = $db->select($sqlAdmin);

    if ($resultAdmin->num_rows == 1) {
        $user = $resultAdmin->fetch_assoc();
        return ['username' => $user['username'], 'role' => 'admin'];
    }

    return null;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = checkLogin($username, $password);

    if ($user !== null) {
        session_start();
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $user['role'];

        if ($user['role'] == 'admin') {
            header("Location: main.php");
            exit();
        } elseif ($user['role'] == 'client') {
            header("Location: ../front_end/main.php");
            exit();
        }
    } else {
        echo "Đăng nhập không thành công";
    }
}
?>
