<?php include 'header.php'?>
<!-- Start Preloader -->
<div id="preload-block">
    <div class="square-block"></div>
</div>
<!-- Preloader End -->
    <div id="slide">
        <div class="owl-carousel">
            <div class="item">
                <div class="slide-content">
                    <div class="slide-scale">
                        <img src="../assets/img/slide1.jpg" alt="Kí túc xá">
                    </div>
                    <div class="slide-back">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-12 col1-in-slide1">
                                    <div class ="intro-text row1-slide1">
                                        <h2 class="big-text h2-in-slide1 text-color-white">High Performance in</br>
                                            Wide Area is Our Gurantee.</h2>
                                    </div>
                                    <div class ="intro-text row2-slide1 my-3">
                                        <p class ="p-row2-slide1 text-color-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </br>
                                            tempor incididunt ut labore et dolore.
                                        </p>
                                    </div>
                                    <div class ="row btn-in-slide1">
                                        <button class ="btn butn text-and-border-color-white design-but1-slide1 mx-2">START NOW</button>
                                        <button class ="btn butn text-and-border-color-blue design-but2-slide1">CONTACT US</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 img-slide1">
                                    <img class="col-12" src="../assets/img/2.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide-content">
                    <div class="slide-scale">
                        <img src="../assets/img/slide2.jpeg" alt="Kí túc xá">
                    </div>
                    <div class="slide-back">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-12 col1-in-slide1">
                                    <div class ="intro-text row1-slide1">
                                        <h2 class="big-text h2-in-slide1 text-color-white">High Performance in</br>
                                            Wide Area is Our Gurantee.</h2>
                                    </div>
                                    <div class ="intro-text row2-slide1 my-3">
                                        <p class ="p-row2-slide1 text-color-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </br>
                                            tempor incididunt ut labore et dolore.
                                        </p>
                                    </div>
                                    <div class ="row btn-in-slide1">
                                        <button class ="btn butn text-and-border-color-white design-but1-slide1 mx-2">START NOW</button>
                                        <button class ="btn butn text-and-border-color-blue design-but2-slide1">CONTACT US</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 img-slide1">
                                    <img class="col-12" src="../assets/img/2.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slide-content">
                    <div class="slide-scale">
                        <img src="../assets/img/slide3.jpeg" alt="Kí túc xá">
                    </div>
                    <div class="slide-back">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6 col-12 col1-in-slide1">
                                    <div class ="intro-text row1-slide1">
                                        <h2 class="big-text h2-in-slide1 text-color-white">High Performance in</br>
                                            Wide Area is Our Gurantee.</h2>
                                    </div>
                                    <div class ="intro-text row2-slide1 my-3">
                                        <p class ="p-row2-slide1 text-color-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod </br>
                                            tempor incididunt ut labore et dolore.
                                        </p>
                                    </div>
                                    <div class ="row btn-in-slide1">
                                        <button class ="btn butn text-and-border-color-white design-but1-slide1 mx-2">START NOW</button>
                                        <button class ="btn butn text-and-border-color-blue design-but2-slide1">CONTACT US</button>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 img-slide1">
                                    <img class="col-12" src="../assets/img/2.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <div id="slide-2" >
        <div class="container">
            <div class = "in-container-slide2">
                <div class="column-word">
                    <div class ="row1 text-center my-3">
                        <h2 class="big-text">Các Dịch Vụ Nổi Bật</h2>
                    </div>
                    <div class ="row2 text-center">
                        <p class ="small-text p-row2 no-margin">Kí túc xá chúng tôi cam kết đem đến sự phục vụ là tốt nhất trên thị trường
                        </p>
                        <p class ="small-text p-row2">thị trường nơi nào tốt hơn hoàn tiền.</p>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $sqldichvu = "SELECT * FROM dichvu";
                    $resultdichvu = $db->select($sqldichvu);
                    // Số lượng khối cần hiển thị
                    $blocksToShow = 8;
                    $blockCount = 0;

                    if ($resultdichvu->num_rows > 0) {
                        while ($row = $resultdichvu->fetch_assoc()) {
                            if ($blockCount >= $blocksToShow) {
                                break;
                            }
                            // Tăng biến đếm
                            $blockCount++;
                            ?>
                            <div class ="col-lg-3 col-sm-6 col-12 space-padding-bottom">
                                <div class="box boxs1 dichvu">
                                    <div class="column-in-boxs1">
                                        <div class="row1-in-columnboxs2 text-center">
                                            <img src="../assets/img/<?php echo $row['anh']; ?>" alt="img" class="img-fluid img-thumbnail">
                                        </div>
                                        <div class="row2-in-columnboxs2 px-4 my-3">
                                            <h4 class="normal-text tendichvu strong"><?php echo $row['ten_dv']; ?></h4>
                                            <span class="normal-text">Giá: </span><span class="gia">$<?php echo $row['gia']; ?></span>
                                            <p class="small-text">
                                            <p class ="small-text no-margin">Dịch vụ của chúng tôi quá là oke rồi tôi có thể đảm bảo điều ấy nếu bạn có thể tìm thấy chỗ nào oke hơn bảo tôi hoàn tiền .</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <?php
                        }
                    }
                    ?>
                </div>
            </div>

        </div>
    </div>
    <div id="slide-3">
        <div class="container pb-5">
            <div class = "in-container-slide3">
                <div class="column-word text-center">
                    <div class ="row1-slide3">
                        <h2 class="big-text">Chọn Phòng Mà Bạn Thích Nhất</h2>
                    </div>
                    <div class ="row2 text-center">
                        <p class ="small-text p-row2 no-margin">Kí túc xá chúng tôi cam kết đem đến sự phục vụ là tốt nhất trên thị trường
                        </p>
                        <p class ="small-text p-row2">thị trường nơi nào tốt hơn hoàn tiền.</p>
                    </div>
                </div>
                <div class="column-shape-slide3">
                    <div class ="row">
                        <div class="col-12 col-sm-6 col-lg-4 space-padding-bottom">
                            <div class="box boxs2">
                                <div class="column-in-boxs2">
                                    <div class="row-in-columnboxs2">
                                        <h4 class="h4 normal-text text-center">Phòng 2 người</h4>
                                        <div class ="row-2-in-boxs2 text-center">
                                            <span class="super-big-text-blue">$25</span><span class ="small-text">/tháng</span>
                                        </div>
                                        <div>
                                            <p class="small-text text-center">1 phòng ngủ</p>
                                        </div>
                                        <div>
                                            <p class="small-text text-center">Phòng rộng 50 m2</p>
                                        </div>
                                        <div>
                                            <p class="small-text text-center">1 nhà vệ sinh riêng</p>
                                        </div>
                                        <div>
                                            <p class="small-text text-center">1 phòng tắm</p>
                                        </div>
                                        <div>
                                            <p class="small-text text-center">Không khí thoáng đãng</p>
                                        </div>
                                        <div>
                                            <p class="small-text text-center">Nội thất tự mua</p>
                                        </div>
                                        <div class="text-center">
                                            <button class ="btn butn trial my-3">XEM THÊM</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 space-padding-bottom">
                            <div class="box boxs2-special">
                                <div class="column-in-boxs2">
                                    <div class="row-in-columnboxs2">
                                        <h4 class="h4 normal-text text-center">Phòng 4 người</h4>
                                        <div class ="row-2-in-boxs2 text-center">
                                            <span class="super-big-text-blue">$15</span><span class ="small-text">/tháng</span>
                                        </div>
                                        <div>
                                            <p class="small-text text-center">2 phòng ngủ</p>
                                        </div>
                                        <div>
                                            <p class="small-text text-center">Phòng rộng 100 m2</p>
                                        </div>
                                        <div>
                                            <p class="small-text text-center">2 nhà vệ sinh riêng</p>
                                        </div>
                                        <div>
                                            <p class="small-text text-center">2 phòng tắm</p>
                                        </div>
                                        <div>
                                            <p class="small-text text-center">Không khí thoáng đãng</p>
                                        </div>
                                        <div>
                                            <p class="small-text text-center">Nội thất tự mua</p>
                                        </div>
                                        <div class="text-center">
                                            <button class ="btn butn trial-special my-3">XEM THÊM</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-lg-4 space-padding-bottom">
                            <div class="box boxs2">
                                <div class="column-in-boxs2">
                                    <div class="row-in-columnboxs2">
                                        <h4 class="h4 normal-text text-center">Phòng 8 người</h4>
                                        <div class ="row-2-in-boxs2 text-center">
                                            <span class="super-big-text-blue">$10</span><span class ="small-text">/tháng</span>
                                        </div>
                                        <div>
                                            <p class="small-text text-center">8 giường</p>
                                        </div>
                                        <div>
                                            <p class="small-text text-center">Phòng rộng 50 m2</p>
                                        </div>
                                        <div>
                                            <p class="small-text text-center">1 nhà vệ sinh chung</p>
                                        </div>
                                        <div>
                                            <p class="small-text text-center">1 phòng tắm chung</p>
                                        </div>
                                        <div>
                                            <p class="small-text text-center">Không thở được</p>
                                        </div>
                                        <div>
                                            <p class="small-text text-center">Nội thất tự mua</p>
                                        </div>
                                        <div class="text-center">
                                            <button class ="btn butn trial my-3">XEM THÊM</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="slide-4">
        <div class ="container">
            <div class="row py-5">
                <div class="col-lg-9 col-xs-12">
                    <div class ="column1-in-row-slide4">
                        <h2 class="text-color-white">Giải Pháp Tốt Nhất Cho Những Học Sinh, Sinh Viên Nghèo</h2>
                        <p class="small-text text-color-white">Cam kết giá cả tốt nhất thị truường tìm thấy chỗ nào tốt hơn hoàn tiền.</p>
                    </div>
                </div>
                <div class ="col-lg-3 col-xs-12 btn-column-center">
                    <button class="btn butn text-and-border-color-white get-it-on">XEM NGAY</button>
                </div>
            </div>
        </div>
    </div>
<div id="slide-5">
    <div class="container pb-5">
        <div class = "in-container-slide5">
            <div class="column-word text-center">
                <div class ="row1-slide5">
                    <h2 class="big-text">Xem Qua Một Số Phòng</h2>
                </div>
                <div class ="row2-slide5">
                    <p class ="small-text no-margin">Phòng cực đẹp không đẹp không lấy tiền tìm thấy chỗ nào có
                    </p>
                    <p class ="small-text no-margin">phòng đẹp hơn hoàn tiền.</p>
                </div>
            </div>
            <div class="column-shape-slide5">
                <div class ="row">
                    <?php
                    // Lấy dữ liệu từ cơ sở dữ liệu
                    $sqlphong = "SELECT * FROM phong";
                    $resultphong = $db->select($sqlphong);
                    ?>

                    <?php
                    // Số lượng khối cần hiển thị
                    $blocksToShow = 3;
                    $blockCount = 0;

                    if ($resultphong->num_rows > 0) {
                        while ($row = $resultphong->fetch_assoc()) {
                            if ($blockCount >= $blocksToShow) {
                                break;
                            }
                            // Tăng biến đếm
                            $blockCount++;
                            ?>
                            <div class="col-12 col-sm-6 col-lg-4 space-padding-bottom">
                                <a href="room-detail.php?id=<?php echo $row['id']; ?>">
                                    <div class="box boxs3 phong">
                                        <div class="column-in-boxs2">
                                            <div class="row1-in-columnboxs2 text-center">
                                                <img src="../assets/img/<?php echo $row['anh_dai_dien']; ?>" alt="img" class="img-fluid">
                                            </div>
                                            <div class="row2-in-columnboxs2 px-4 my-3">
                                                <h4 class="normal-text tenphong strong"><?php echo $row['ten_phong']; ?></h4>
                                                <span class="normal-text">Giá: </span><span class="gia">$<?php echo $row['gia']; ?></span>
                                                <p class="small-text">
                                                    <?php
                                                    if (mb_strlen($row['mo_ta'], 'UTF-8') > 100) {
                                                        $mo_ta = mb_substr($row['mo_ta'], 0, 100, 'UTF-8') . '...';
                                                    }
                                                    echo $mo_ta;
                                                    ?>
                                                </p>
                                            </div>
                                            <div class="row3-in-columnboxs2 d-flex justify-content-between px-4">
                                                <p class="small-text">
                                                    Xem Thêm
                                                </p>
                                                <ul class="star no-padding">
                                                    <li><ic class="fa fa-star"></ic></li>
                                                    <li><ic class="fa fa-star"></ic></li>
                                                    <li><ic class="fa fa-star"></ic></li>
                                                    <li><ic class="fa fa-star"></ic></li>
                                                    <li><ic class="fa fa-star"></ic></li>
                                                    <li>(5/5)</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <?php
                        }
                    }
                    ?>


                </div>
            </div>
        </div>
    </div>
</div>
    <div id="slide-6">
        <div class="container pb-5">
            <div class = "in-container-slide6">
                <div class="column-word text-center">
                    <div class ="row1-slide6">
                        <h2 class="big-text">What Customers Say About Us</h2>
                    </div>
                    <div class ="row2-slide6">
                        <p class ="small-text no-margin">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        </p>
                        <p class ="small-text no-margin">incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="slide">
                    <div class="owl-carousel">
                        <div class="item p-4">
                            <div class="px-4 pb-3">
                                <div class="box boxs4 row">
                                    <div class="col-3 col-md-2 no-padding">
                                        <div class="img-boxs4">
                                            <img src="../assets/img/avt1.jpg" alt="img avata" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-9 col-md-10 pr-0">
                                        <div class="column2-in-boxs4">
                                            <h4>Nguyễn Thế Duyệt</h4>
                                            <ul class="star no-padding">
                                                <li><ic class="fa fa-star"></ic></li>
                                                <li><ic class="fa fa-star"></ic></li>
                                                <li><ic class="fa fa-star"></ic></li>
                                                <li><ic class="fa fa-star"></ic></li>
                                                <li><ic class="fa fa-star"></ic></li>
                                            </ul>
                                            <p class ="small-text">" Kí túc xá này thật là tuyệt vời tôi đã trải nghiệm được rất nhiều những điều mới lạ từ kí túc xá này sẽ còn đăng ký nữa."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item p-4">
                            <div class="px-4 pb-3">
                                <div class="box boxs4 row">
                                    <div class="col-3 col-md-2 no-padding">
                                        <div class="img-boxs4">
                                            <img src="../assets/img/Facebook-Avatar_3.png" alt="img avata" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-9 col-md-10 pr-0">
                                        <div class="column2-in-boxs4">
                                            <h4>Nguyễn Thị Như Hà</h4>
                                            <ul class="star no-padding">
                                                <li><ic class="fa fa-star"></ic></li>
                                                <li><ic class="fa fa-star"></ic></li>
                                                <li><ic class="fa fa-star"></ic></li>
                                                <li><ic class="fa fa-star"></ic></li>
                                                <li><ic class="fa fa-star"></ic></li>
                                            </ul>
                                            <p class ="small-text">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item p-4">
                            <div class="px-4 pb-3">
                                <div class="box boxs4 row">
                                    <div class="col-3 col-md-2 no-padding">
                                        <div class="img-boxs4">
                                            <img src="../assets/img/avt1.jpg" alt="img avata" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-9 col-md-10 pr-0">
                                        <div class="column2-in-boxs4">
                                            <h4>Mr. Jonathon Doe</h4>
                                            <ul class="star no-padding">
                                                <li><ic class="fa fa-star"></ic></li>
                                                <li><ic class="fa fa-star"></ic></li>
                                                <li><ic class="fa fa-star"></ic></li>
                                                <li><ic class="fa fa-star"></ic></li>
                                                <li><ic class="fa fa-star"></ic></li>
                                            </ul>
                                            <p class ="small-text">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item p-4">
                            <div class="px-4 pb-3">
                                <div class="box boxs4 row">
                                    <div class="col-3 col-md-2 no-padding">
                                        <div class="img-boxs4 ">
                                            <img src="../assets/img/avt1.jpg" alt="img avata" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-9 col-md-10 pr-0">
                                        <div class="column2-in-boxs4">
                                            <h4>Mr. Jonathon Doe</h4>
                                            <ul class="star no-padding">
                                                <li><ic class="fa fa-star"></ic></li>
                                                <li><ic class="fa fa-star"></ic></li>
                                                <li><ic class="fa fa-star"></ic></li>
                                                <li><ic class="fa fa-star"></ic></li>
                                                <li><ic class="fa fa-star"></ic></li>
                                            </ul>
                                            <p class ="small-text">"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam."</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        $(".owl-carousel").owlCarousel({
                            // loop:true,
                            margin:10,
                            // autoplay:true,
                            autoplayTimeout:5000,
                            autoplayHoverPause:true,
                            responsiveClass:true,
                            responsive:{
                                0:{
                                    items:1,
                                    nav:true
                                },
                                1200:{
                                    items:2,
                                    nav:false
                                },
                            }
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
<div id="slide-8">
    <div class ="container">
        <div class="column-word text-center">
            <div class ="row1-slide8">
                <h2 class="big-text text-white">Stay Up to date, Subscribe Our Newsletter</h2>
            </div>
            <div class ="row2-slide8">
                <span class ="small-text no-margin font-weight-bold text-white">Subscribe </span><span class="small-text no-margin text-color-white">to our Newsletter. We'll send email notifications everytime</br>we release new Theme.</span>
            </div>
        </div>
        <div class="row3-in-slide8 pb-5">
            <div class="row pl-5">
                <div class="col-8 text-right no-padding"><input type="email" class="form-control in" id="email-slide8" placeholder="Email Address"></div>
                <div class="col text-left no-padding"><button class="btn butn text-and-border-color-blue btn-in-slide8 px-5" type="submit">Subcride!</button></div>
            </div>
        </div>
    </div>
</div>

    <div id="slide-7">
        <div class="container pb-5">
            <div class = "in-container-slide7">
                <div class="column-word text-center">
                    <div class ="row1-slide7">
                        <h2 class="big-text">Khách Hàng Đánh Giá Gì Về Chúng Tôi</h2>
                    </div>
                    <div class ="row2-slide7">
                        <p class ="small-text no-margin">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                        </p>
                        <p class ="small-text no-margin">incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-12 col-lg-4 pb-4">
                        <div class="box boxs5 no-padding">
                            <div class ="boxs5-head py-5 ">
                                <div class="col-12 text-center py-3">
                                    <ic class="hero-icon lnr lnr-laptop-phone"></ic>
                                </div>
                            </div>
                            <div class="boxs5-body p-4">
                                <div class="row2-in-boxs5">
                                    <div class="row1-in-row2 text-center py-2">
                                        <h4>cPanel Included</h4>
                                    </div>
                                    <div class="row2-in-row2">
                                        <p class ="p-in-boxs1 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 pb-4">
                        <div class="box boxs5 no-padding">
                            <div class ="boxs5-head py-5 ">
                                <div class="col-12 text-center py-3">
                                    <ic class="hero-icon lnr lnr-rocket"></ic>
                                </div>
                            </div>
                            <div class="boxs5-body p-4">
                                <div class="row2-in-boxs5">
                                    <div class="row1-in-row2 text-center py-2">
                                        <h4>Super Fast Speed</h4>
                                    </div>
                                    <div class="row2-in-row2">
                                        <p class ="p-in-boxs1 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-4 pb-4">
                        <div class="box boxs5 no-padding">
                            <div class ="boxs5-head py-5 ">
                                <div class="col-12 text-center py-3">
                                    <ic class="hero-icon lnr lnr-lock"></ic>
                                </div>
                            </div>
                            <div class="boxs5-body p-4">
                                <div class="row2-in-boxs5">
                                    <div class="row1-in-row2 text-center py-2">
                                        <h4>Highly Secured</h4>
                                    </div>
                                    <div class="row2-in-row2">
                                        <p class ="p-in-boxs1 text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="slide-10">
        <div class="container pb-5">
            <div class="column-word text-center">
                <div class ="row1-slide10">
                    <h2 class="big-text">Contact Us</h2>
                </div>
                <div class ="row2-slide10">
                    <p class ="small-text no-margin">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                    </p>
                    <p class ="small-text no-margin">incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <form class="col-12 col-lg-6 container1-slide10 text-center pt-4 no-padding">
                    <div class="form-group">
                        <input type="text" id="name" class="form-control in" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" class="form-control in" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" id="subject" class="form-control in" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control in text-mes" id="message" rows="3" cols="3" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group text-right pr-5 mr-2">
                        <button class="btn butn text-and-border-color-blue" type="submit" id="send-messenge">SEND MESSAGE</button>
                    </div>
                </form>
                <div class="col-12 col-lg-4 container2-slide10 py-5">
                    <div class="row">
                        <div class="col-2 li-slide10">
                            <div class="img-li-slide10">
                                <i class="lnr lnr-home icon-blue"></i>
                            </div>
                        </div>
                        <div class="col-10 li-slide10">
                            <p class="address">
                                1502 N Elm St, Fairmont, MN</br>
                                56031 United States</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 li-slide10">
                            <div class="img-li-slide10">
                                <i class="lnr lnr-phone icon-blue"></i>
                            </div>
                        </div>
                        <div class="col-10 li-slide10">
                            <a href="tel:0982753267">
                                <p class="address text-color-black">
                                    +00 123-456-789</br>
                                    +00 123-456-789</p>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 li-slide10">
                            <div class="img-li-slide10">
                                <i class="lnr lnr-location icon-blue"></i>
                            </div>
                        </div>
                        <div class="col-10 li-slide10">
                            <a href="mailto:nguyentheduyet.mtp@gmail.com">
                                <p class="address text-color-black">
                                    email@yourdomain.com</br>
                                    email@yourdomain.com</p>
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-2 li-slide10">
                            <div class="img-li-slide10">
                                <i class="lnr lnr-earth icon-blue"></i>
                            </div>
                        </div>
                        <div class="col-10 li-slide10">
                            <p class="address">
                                www.yourdomain.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="slide-11">
        <div class="container py-4">
            <div class="row">
                <div class="col-6">
                    <p class="p-col1-slide11">
                        © 2018 Copyright CodersPoint
                    </p>
                </div>
                <div class="col-6">
                    <div class="row justify-content-end ">
                        <p class="small-text mr-3">Follow Us</p>
                        <a href="https://www.facebook.com/"><i class="small-text fa fa-facebook mr-3"></i></a>
                        <a href="https://twitter.com/i/flow/login?redirect_after_login=%2F"><i class="small-text fa fa-twitter mr-3"></i></a>
                        <a href=""><i class="small-text fa fa-google mr-3"></i></a>
                        <a href=""><i class="small-text fa fa-youtube mr-3"></i></a>
                        <a href=""><i class="small-text fa fa-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>