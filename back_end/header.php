<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KTX</title>
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/duyet.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome/js/fontawesome.min.js">
    <link rel="stylesheet" type="text/css" href="../assets/plugins/fontawesome/css/all.min.css">
    <script src="../assets/js/jquery.slimscroll.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../assets/js/duyet.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<header id="header">
    <div class="header-left">
        <div class="arrow-right">
            <i class="fas fa-chevron-right"></i>
        </div>
        <div class="title-logo">
            <span class="m-0">TRƯỜNG ĐẠI HỌC HÀNG HẢI VIỆT NAM</span>
            <span class="m-0">VIETNAM MARITIME UNIVERSITY</span>
        </div>
    </div>
    <div class="header-right">
        <div class="content-header search mr-3">
            <img class="search" src="../assets/img/search.svg" alt="tìm kiếm">
        </div>
        <div class="content-header notification mr-3">
            <img class="notification" src="../assets/img/notification-bing.svg" alt="thông báo">
        </div>
        <div class="content-header mr-3">
            <img class="avatar" src="../assets/img/Facebook-Avatar_3.png" alt="avatar">
            <div class="content-avatar-header">
                <div class="img-info d-flex">
                    <img class="avatar mr-3" src="../assets/img/Facebook-Avatar_3.png" alt="avatar">
                    <div class="name-and-quyen">
                        <span class="name-admin">
                        <?php session_start();echo $_SESSION['username'] ?>
                        </span>
                        <span class="quyen">
                        <?php session_start();echo $_SESSION['role'] ?>
                        </span>
                    </div>
                </div>
                <div class="profile-and-setting">
                    <div class="profile d-flex">
                        <i class="fas fa-user mr-2"></i>
                        <a href="main.php" class="content-item">My profile</a>
                    </div>
                    <div class="profile d-flex">
                        <i class="fas fa-cog mr-2"></i>
                        <a href="main.php" class="content-item">Settings</a>
                    </div>
                </div>
                <div class="profile log-out d-flex">
                    <i class="fas fa-sign-out-alt mr-2 text-danger"></i>
                    <a href="log-out.php" class="content-item text-danger">Log-out</a>
                </div>
            </div>
        </div>
    </div>
</header>
