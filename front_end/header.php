<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>WEB</title>
    <!-- css -->
    <link rel="stylesheet" href="../assets/css/duyet-front.css">

    <!-- icon -->
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="../assets/plugins/fontawesome/js/fontawesome.min.js">
    <link rel="stylesheet" type="text/css" href="../assets/plugins/fontawesome/css/all.min.css">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&family=Oxygen:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <!-- carousel -->
    <link rel="stylesheet" href="../assets/plugins/OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../assets/plugins/OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css" type="text/css">
    <!-- animate -->
    <link rel="stylesheet" href="../assets/css/animate.css">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../assets/plugins/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    <script src="../assets/js/duyet-front.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed p-0">
    <div id="header-menu" class="container no-padding">
        <div class="col-3 navbar-brand d-flex">
            <div class="logo m-2">
                <a href=""><img src="../assets/img/logo.png" alt="Logo"></a>
            </div>
            <div class="title-logo">
                <span class="m-0">KÍ TÚC XÁ</span>
            </div>
        </div>
        <div class="col-3"></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item"><a class ="nav-link active" aria-current="page" href="main.php">TRANG CHỦ</a></li>
                <li class="nav-item"><a class ="nav-link"  href="#slide-3">GIÁ</a></li>
                <li class="nav-item"><a class ="nav-link"  href="#slide-2">DỊCH VỤ</a></li>
                <li class="nav-item"><a class ="nav-link"  href="">PHÒNG</a></li>
                <li class="nav-item"><a class ="nav-link"  href="#slide-10">LIÊN HỆ</a></li>
                <?php
                session_start();
                include '../config/database.php';
                ?>
                <?php if (empty($_SESSION['username'])) { ?>
                    <li><a href="../back_end/dang_nhap.html"><button class="btn butn navbar">SIGN IN</button></a></li>
                <?php } else {
                    $db = new Database();
                    $usn = $_SESSION['username'];
                    $sql = "SELECT anh_dai_dien FROM client WHERE ten_nguoi_dung = '$usn'";
                    $result = $db->select($sql);


                    if ($result->num_rows == 1) {
                        $user = $result->fetch_assoc();
                        $anh_dai_dien = $user['anh_dai_dien'];
                    } ?>
                    <li>
                        <div class="content-header mr-3">
                            <img class="avatar" src="../assets/img/<?php echo $anh_dai_dien ?>" alt="avatar">
                            <div class="content-avatar-header">
                                <div class="img-info d-flex">
                                    <img class="avatar-info mr-3" src="../assets/img/<?php echo $anh_dai_dien ?>" alt="avatar">
                                    <div class="name-and-quyen">
                                        <span class="name-admin">
                                            <?php echo $_SESSION['username'] ?>
                                        </span>
                                        <span class="quyen">
                                            <?php echo $_SESSION['role'] ?>
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
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
<script src="../assets/js/duyet.js"></script></body>
</html>
