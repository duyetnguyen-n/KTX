<?php
session_start();

include '../config/database.php';
$db = new Database();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $client_query = "SELECT * FROM client WHERE ten_nguoi_dung = '$username'";
    $result_client = $db->select($client_query);

    if ($result_client) {
        $row = mysqli_fetch_assoc($result_client);
        $hashed_password = $row['mat_khau'];
        $account_status = $row['trang_thai'];

        if (password_verify($password, $hashed_password)) {
            $_SESSION['username'] = $row['ten_nguoi_dung'];
            $_SESSION['role'] = $row['quyen'];

            if ($account_status == 'sẵn sàng') {
                $role = $row['quyen'];

                if ($role == 'admin') {
                    header("Location: main.php");
                    exit();
                } else {
                    header("Location: ../front_end/main2.php");
                    exit();
                }
            } else {
                // Tài khoản không ở trạng thái sẵn sàng
                echo "Tài khoản của bạn không ở trạng thái sẵn sàng.";
                exit();
            }
        } else {
            // Mật khẩu không đúng
            echo "Mật khẩu không đúng.";
            exit();
        }
    } else {
        // Kiểm tra lỗi SQL
        echo "Lỗi SQL: " . $db->getError(); // Thay vào phương thức thực tế để lấy thông tin lỗi.
        exit();
    }
}
?>
