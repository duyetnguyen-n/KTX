<?php
// Bắt đầu hoặc khôi phục session
session_start();

// Hủy bỏ tất cả các biến session
$_SESSION = array();

// Hủy bỏ cookie session nếu có
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Hủy bỏ session
session_destroy();

header("Location: dang_nhap.html");
exit(); // Kết thúc chương trình sau khi chuyển hướng
?>
