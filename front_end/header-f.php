<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.thimpress.com/hotelwp/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2023 07:07:43 GMT -->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>HOSTEL</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../assets/img/img-front/icons/favicon.png">

    <link rel="stylesheet" type="text/css" href="../assets/css/css-front/libs/revolution/settings.css">
    <link rel="stylesheet" href="../assets/css/css-front/style.css">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="../assets/plugins/OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
</head>
<body class="demo-1 home">
<!--<div id="preloading">-->
<!--<div class="loading-icon">-->
<!--<div class="sk-folding-cube">-->
<!--<div class="sk-cube1 sk-cube"></div>-->
<!--<div class="sk-cube2 sk-cube"></div>-->
<!--<div class="sk-cube4 sk-cube"></div>-->
<!--<div class="sk-cube3 sk-cube"></div>-->
<!--</div>-->
</div>
</div>

<div id="wrapper-container" class="content-pusher">
    <div class="overlay-close-menu"></div>

    <header id="masthead" class="header-default affix-top sticky-header ">
        <div class="row">
            <div class="header-menu col-sm-12 tm-table">
                <div class="menu-mobile-effect navbar-toggle" data-effect="mobile-effect">
                    <div class="icon-wrap">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </div>
                </div>
                <div class="width-logo sm-logo table-cell text-center">
                    <a href="index.html" class="no-sticky-logo" title="Hotel HTML Template">
                        <img class="logo" src="../assets/img/logo-f.png" alt>
                        <img class="mobile-logo" src="../assets/img/logo-f.png" alt>
                    </a>
                    <a href="index.html" class="sticky-logo">
                        <img src="../assets/img/logo-f.png" alt>
                    </a>
                </div>
                <div class="width-navigation navigation table-cell">
                    <div class="top-toolbar clearfix">
                        <div class="toolbar-info pull-left col-sm-4">
                            <i class="ion-ios-telephone"></i> <span class="label">Need help? Call us now:</span>
                            <a class="value" href="tel:+88123456789"> (+88) 12 345 6789</a>
                        </div>
                        <div class="toolbar-right pull-right col-sm-8">
                            <div class="weather">
                                Today: <img src="../assets/img/img-front/icons/weather.png" alt>
                                <span class="temperature">28°C</span>
                            </div>
                            <ul class="top-menu">
                                <li class="menu-item"><a href="shop.html">Our Story</a></li>
                                <li class="menu-item"><a href="blog.html">News & Awards</a></li>
                                <li class="menu-item"><a href="gallery.html">Gallery</a></li>
                            </ul>

                        </div>
                    </div>
                    <ul class="nav main-menu">
                        <li class="menu-item has-children">
                            <a href="index.html">Home</a>

                        </li>
                        <li class="menu-item has-children">
                            <a href="rooms.html">Rooms</a>

                        </li>
                        <li class="menu-item has-children">
                            <a href="blog.html">Blog</a>
                        </li>
                        <li class="menu-item has-children">
                            <a href="events.html">Events</a>

                        </li>
                        <li class="menu-item has-children">
                            <a href="#">Features</a>
                        </li>
                        <li class="menu-item"><a href="contact.html">Contact</a></li>
                    </ul>
                    <div class="header-right">
                        <?php
                        session_start();
                        include '../config/database.php';
                        ?>

                        <?php if (empty($_SESSION['username'])) { ?>
                            <a href="../back_end/dang_nhap.html" class="btn-book">SIGN IN</a>
                        <?php } else {
                            $db = new Database();
                            $usn = $_SESSION['username'];

                            // Lấy thông tin người dùng từ cơ sở dữ liệu
                            $sql = "SELECT anh_dai_dien, mat_khau FROM client WHERE ten_nguoi_dung = '$usn'";
                            $result = $db->select($sql);

                            if ($result->num_rows == 1) {
                                $user = $result->fetch_assoc();
                                $anh_dai_dien = $user['anh_dai_dien'];

                                // Hiển thị thông tin người dùng nếu mật khẩu hợp lệ
                                if (password_verify($user['mat_khau'], $_SESSION['hashed_password'])) {
                                    ?>
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
                                    <?php
                                }
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav class="visible-xs mobile-menu-container mobile-effect" itemscope
         itemtype="http://schema.org/SiteNavigationElement">
        <div class="inner-off-canvas">
            <div class="menu-mobile-effect navbar-toggle">Close <i class="fa fa-times"></i></div>
            <ul class="nav main-menu">
                <li class="menu-item has-children">
                    <a href="index.html">Home</a>
                </li>
                <li class="menu-item has-children">
                    <a href="rooms.html">Rooms</a>
                </li>
                <li class="menu-item has-children">
                    <a href="blog.html">Blog</a>
                </li>
                <li class="menu-item has-children">
                    <a href="events.html">Events</a>
                </li>
                <li class="menu-item has-children">
                    <a href="#">Features</a>
                </li>
                <li class="menu-item has-children"><a href="gallery.html">Gallery</a>
                </li>
                <li class="menu-item"><a href="contact.html">Contact</a></li>
            </ul>
        </div>
    </nav>