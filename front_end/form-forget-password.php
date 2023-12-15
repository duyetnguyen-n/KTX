
<?php
// forgot-password.php

session_start();
include '../config/database.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
//require 'PHPMailer/src/OAuth.php';
//require 'PHPMailer/src/POP3.php';

// Đường dẫn đến thư mục chứa PHPMailer

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["mail"];
    $db = new Database();
    $sql = "SELECT * FROM client WHERE email = '$email'";
    $result = $db->select($sql);

    if ($result->num_rows == 1) {
        $user = $result->fetch_assoc();

        // Tạo token và lưu vào cơ sở dữ liệu
        $resetToken = md5(uniqid(rand(), true));
        $sqlUpdateToken = "UPDATE client SET reset_token = '$resetToken' WHERE email = '$email'";
        $db->query($sqlUpdateToken);

        // Gửi email chứa đường link đặt lại mật khẩu cùng với token
        $resetLink = "http://localhost/KTX_BTL/front_end/reset-password.php?token=$resetToken";

        // Sử dụng PHPMailer để gửi email
        $mail = new PHPMailer(true);

        try {

            // Cấu hình Gmail SMTP
//            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'duyet85723@st.vimaru.edu.vn';
            $mail->Password   = 'jklm2662002';
            $mail->SMTPSecure = 'tls';
            $mail->Port       = 587;
            $mail->SMTPOptions = array(
                'ssl' => array(
                    'verify_peer'       => false,
                    'verify_peer_name'  => false,
                    'allow_self_signed' => true
                )
            );

            // Cấu hình gửi email
            $mail->setFrom('duyet85723@st.vimaru.edu.vn', 'Forgot Password');
            $mail->addAddress($email, 'Recipient Name');

            $mail->isHTML(true);
            $mail->Subject = 'Reset Password';
            $mail->Body    = "Click the link below to reset your password:\n$resetLink";

            $mail->send();
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;

            echo '<script>
alert("An email has been sent with instructions to reset your password. Please check your email.");
window.location.href = "https://mail.google.com/mail/u/0/#inbox";

</script>';
        } catch (Exception $e) {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;
            echo '<pre>' . print_r($mail->ErrorInfo, true) . '</pre>';
            echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "<p class='text-danger'>Email not found.</p>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../assets/css/duyet.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Forgot Password</h3>
                </div>
                <div class="card-body">
                    <form action="form-forget-password.php" method="post">
                        <div class="form-group">
                            <label for="mail">Enter your email:</label>
                            <input type="email" id="mail" name="mail" class="form-control" required>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-primary">Reset Password</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap JS and Popper.js -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<!-- Add your custom JavaScript links here -->
</body>
</html>
