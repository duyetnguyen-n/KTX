<?php
// Kết nối đến cơ sở dữ liệu
include '../config/database.php';

function checkLogin($username, $password)
{
    $db = new Database();
    $sql = "SELECT * FROM login WHERE username = '$username' AND password = '$password' AND status = 1";
    $result = $db->select($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        return $user;
    } else {
        return null;
    }
}

function checkUserRole($username)
{
    $db = new Database();
    $sql = "SELECT role FROM login WHERE username = '$username'";
    $result = $db->select($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();
        return $user['role'];
    } else {
        return null;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $user = checkLogin($username, $password);

    if ($user !== null) {
        session_start();
        $_SESSION['username'] = $user['username'];
        $_SESSION['role'] = $role = checkUserRole($user['username']);

        if ($role == 'admin') {
            header("Location: main.php");
            exit(); // Kết thúc chương trình sau khi chuyển hướng
        } elseif ($role == 'client') {
            header("Location: ../front_end/main.php");
            exit(); // Kết thúc chương trình sau khi chuyển hướng
        }
    } else {
        echo "Đăng nhập không thành công";
    }
}

?>
