<?php
    include '../back_end/header-f.php';
?>
<?php
$db = new Database();
$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
// Lấy dữ liệu từ cơ sở dữ liệu
$sqlphong = "SELECT * FROM phong where id = $id";
$resultphong = $db->select($sqlphong);
if ($resultphong->num_rows > 0) {
while ($row = $resultphong->fetch_assoc()) {
?>
    <div id="main-content">
        <div class="page-title">
            <div class="page-title-wrapper" data-stellar-background-ratio="0.5">
                <div class="content container">
                    <h1 class="heading_primary">Chi tiết phòng</h1>
                    <ul class="breadcrumbs">
                        <li class="item"><a href="index.html">Home</a></li>
                        <li class="item"><span class="separator"></span></li>
                        <li class="item"><a href="rooms.html">Phòng</a></li>
                        <li class="item"><span class="separator"></span></li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="site-content container">
            <div class="room-single row">
                <main class="site-main col-sm-12 col-md-9 flex-first">
                    <div class="room-wrapper">
                        <div class="room_gallery clearfix">
                            <div class="owl-carousel">
                                <div class="item h-100">
                                    <img src="../assets/img/<?php echo $row['anh_dai_dien']; ?>" class="img-phong img-fluid img-responsive h-100" alt="<?php echo $row['ten_phong']; ?>">
                                </div>
                                <div class="item h-100">
                                    <img src="../assets/img/<?php echo $row['anh_khac']; ?>" class="img-phong img-fluid img-responsive h-100" alt="<?php echo $row['ten_phong']; ?>">
                                </div>
                            </div>
                            <script>

                                $(".owl-carousel").owlCarousel({
                                    items:1,
                                    loop:true,
                                    margin:10,
                                    autoplay:true,
                                    autoplayTimeout:5000,
                                    autoplayHoverPause:true
                                });

                            </script>
                        </div>
                        <div class="title-share clearfix">
                            <h2 class="title"><?php echo $row['ten_phong']; ?></h2>
                            <div class="social-share">
                                <ul>
                                    <li><a class="link facebook" title="Facebook"
                                           href="https://www.facebook.com/sharer/sharer.php?u=#" rel="nofollow"
                                           onclick="window.open(this.href,this.title,'width=600,height=600,top=200px,left=200px');  return false;"
                                           target="_blank"><i class="fab fa-facebook"></i></a></li>
                                    <li><a class="link twitter" title="Twitter"
                                           href="https://twitter.com/intent/tweet?url=#&amp;text=TheTitleBlog"
                                           rel="nofollow"
                                           onclick="window.open(this.href,this.title,'width=600,height=600,top=200px,left=200px');  return false;"
                                           target="_blank"><i class="fab fa-twitter"></i></a></li>
                                    <li><a class="link google" title="Google" href="https://plus.google.com/share?url=#"
                                           rel="nofollow"
                                           onclick="window.open(this.href,this.title,'width=600,height=600,top=200px,left=200px');  return false;"
                                           target="_blank"><i class="fab fa-google"></i></a>
                                </ul>
                            </div>
                        </div>
                        <div class="room_price">
                            <span class="price_value price_min">$<?php echo $row['gia']; ?></span>
                            <span class="unit">Mon</span>
                        </div>
                        <div class="description">
                            <?php echo $row['mo_ta']; ?>
                        </div>
                        <?php echo $row['noi_dung']; ?>
                    </div>
                </main>
                <aside id="secondary" class="widget-area col-sm-12 col-md-3 sticky-sidebar">
                    <div class="wd wd-book-room">
                        <a href="#" class="book-room">Đặt phòng</a>
                    </div>
                    <div class="wd wd-check-room">
                        <h3 class="title">ĐĂNG KÝ</h3>
                        <form name="search-rooms" class="wd-search-room datepicker"
                              action="process_booking.php?id=<?php echo $row['id']; ?>" method="post">
                            <ul class="form-table">
                                <li class="form-field">
                                    <input type="text" name="check_in_date" id="check_in_date" required
                                           class="check_in_date" placeholder="Check in">
                                </li>
                                <li class="form-field">
                                    <input type="text" name="check_out_date" id="check_out_date" required
                                           class="check_out_date " placeholder="Check out">
                                </li>
                            </ul>
                            <?php
                                if($row['trang_thai']==='Đủ'){

                                }else{?>
                                    <div class="room-submit">
                                        <button class="submit" type="submit">ĐĂNG KÝ PHÒNG</button>
                                    </div>
                               <?php  }
                            ?>
                        </form>
                    </div>
                </aside>
            </div>
        </div>
    </div>

    <footer id="colophon" class="site-footer">
        <div class="footer-top">
            <div class="container">
                <div class="newsletter">
                    <h3>Newsletter</h3>
                    <form method="post" class="form-newsletter">
                        <input type="email" name="EMAIL" placeholder="Enter your Email" required>
                        <button type="submit">SUBSCRIBE</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="widget-text">
                            <div class="footer-location">
                                <img src="../assets/img/logo-f.png" alt>
                                <p>Nếu có bất kì câu hỏi nào, xin hãy liên hệ với chúng tối</p>
                                <ul class="info">
                                    <li><i class="ion-ios-location"></i> <a href="contact.html#sc-google-map">484 Lạch Tray, Đại học Hàng Hải Việt Nam</a></li>
                                    <li><i class="ion-ios-telephone"></i><a href="tel:8812345678">(+88) 12-345-678</a>
                                    </li>
                                    <li><i class="ion-email"></i><a
                                            href="https://html.thimpress.com/cdn-cgi/l/email-protection#bbd8d4d5cfdad8cffbcfd3d2d6cbc9dec8c895d8d4d6"><span
                                            class="__cf_email__"
                                            data-cfemail="e2818d8c96838196a2968a8b8f9290879191cc818d8f">[email&#160;protected]</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="widget-menu">
                            <h3 class="widget-title">Booking</h3>
                            <ul class="menu">
                                <li><a href="#">Phòng</a></li>
                                <li><a href="#">Giải trí</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="widget-menu">
                            <h3 class="widget-title">About Us</h3>
                            <ul class="menu">
                                <li><a href="#">Our Story</a></li>
                                <li><a href="#">Blog & Events</a></li>
                                <li><a href="#">Awards</a></li>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="widget-menu">
                            <h3 class="widget-title">Connect Us</h3>
                            <ul class="list-social">
                                <li><a class="facebook" href="https://www.facebook.com/thimpress">Facebook</a></li>
                                <li><a class="twitter" href="https://www.twitter.com/thimpress">Twitter</a></li>
                                <li><a class="instagram" href="http://www.thimpress.com/">Instagram</a></li>
                                <li><a class="youtube" href="http://www.thimpress.com/">Youtube</a></li>
                                <li><a class="google" href="http://www.thimpress.com/">Google +</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="copyright-content col-sm-12">
                        <p class="copyright-text">© 2018 <a href="#">Sunrise Hotel</a> by <a
                                href="https://thimpress.com/">ThimPress</a>. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<div id="back-to-top">
    <i class="ion-ios-arrow-up" aria-hidden="true"></i>
</div>

<script src="../assets/js/js-front/libs/stellar.min.js"></script>
<script src="../assets/js/js-front/libs/bootstrap.min.js"></script>
<script src="../assets/js/js-front/libs/smoothscroll.min.js"></script>
<script src="../assets/js/js-front/libs/owl.carousel.min.js"></script>
<script src="../assets/js/js-front/libs/jquery.magnific-popup.min.js"></script>
<script src="../assets/js/js-front/libs/theia-sticky-sidebar.min.js"></script>
<script src="../assets/js/js-front/libs/counter-box.min.js"></script>
<script src="../assets/js/js-front/libs/jquery.flexslider-min.js"></script>
<script src="../assets/js/js-front/libs/jquery.thim-content-slider.min.js"></script>
<script src="../assets/js/js-front/libs/gallery.min.js"></script>
<script src="../assets/js/js-front/libs/moment.min.js"></script>
<script src="../assets/js/js-front/libs/jquery-ui.min.js"></script>
<script src="../assets/js/js-front/libs/daterangepicker.min.js"></script>
<script src="../assets/js/js-front/libs/daterangepicker.min-date.min.js"></script>
<script src="../assets/js/js-front/theme-customs.js"></script>
</body>

<!-- Mirrored from html.thimpress.com/hotelwp/room-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2023 07:09:29 GMT -->
</html>

<?php }} ?>