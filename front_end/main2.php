<?php
    include '../back_end/header-f.php';
?>
<!--    <img src="../assets/img/img-front/slides/h1-slider1.jpg" alt="a">-->
    <div id="main-content" class="main-content">
        <div id="home-main-content" class="home-main-content home-1">
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
                                            <div class="intro-text row1-slide1">
                                                <h2 class="big-text h2-in-slide1 text-color-white">Kí túc xá với hiệu suất cao</h2>
                                            </div>
                                            <div class="intro-text row2-slide1 my-3">
                                                <p class="p-row2-slide1 text-color-white">Chúng tôi cam kết mang lại không gian sống chất lượng cao và dịch vụ tận tâm cho sinh viên.</p>
                                            </div>
                                            <div class="row btn-in-slide1">
                                                <button class="btn butn text-and-border-color-white design-but1-slide1 mx-2">BẮT ĐẦU NGAY</button>
                                                <button class="btn butn text-and-border-color-blue design-but2-slide1">LIÊN HỆ CHÚNG TÔI</button>
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
                                            <div class="intro-text row1-slide1">
                                                <h2 class="big-text h2-in-slide1 text-color-white">Dịch vụ tận tâm cho sinh viên</h2>
                                            </div>
                                            <div class="intro-text row2-slide1 my-3">
                                                <p class="p-row2-slide1 text-color-white">Chúng tôi mang lại không gian sống an ninh, sạch sẽ và tiện nghi cho sự học tập và nghỉ ngơi của sinh viên.</p>
                                            </div>
                                            <div class="row btn-in-slide1">
                                                <button class="btn butn text-and-border-color-white design-but1-slide1 mx-2">BẮT ĐẦU NGAY</button>
                                                <button class="btn butn text-and-border-color-blue design-but2-slide1">LIÊN HỆ CHÚNG TÔI</button>
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
                                            <div class="intro-text row1-slide1">
                                                <h2 class="big-text h2-in-slide1 text-color-white">Đồng hành cùng hành trình học tập</h2>
                                            </div>
                                            <div class="intro-text row2-slide1 my-3">
                                                <p class="p-row2-slide1 text-color-white">Chúng tôi hỗ trợ sinh viên trong mọi khía cạnh của cuộc sống học đường, để họ có thể tập trung vào hành trình học tập của mình.</p>
                                            </div>
                                            <div class="row btn-in-slide1">
                                                <button class="btn butn text-and-border-color-white design-but1-slide1 mx-2">BẮT ĐẦU NGAY</button>
                                                <button class="btn butn text-and-border-color-blue design-but2-slide1">LIÊN HỆ CHÚNG TÔI</button>
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
                        items: 1,
                        loop: true,
                        margin: 10,
                        autoplay: true,
                        autoplayTimeout: 5000,
                        autoplayHoverPause: true
                    });
                </script>
            </div>
            <div class="container">
                <div class="sc-hb-rooms-search style-01">
                    <div class="hotel-booking-search style-01">
                        <form action="https://html.thimpress.com/hotelwp/rooms-search.html" class="hb-search-form">
                            <ul class="hb-form-table">
                                <li><input type="text" id="multidate" class="multidate" value data-date-min="6"/></li>
                                <li class="hb-form-field hb-form-check-in">
                                    <div class="label">Check-In</div>
                                    <div class="hb-form-field-input hb_input_field">
                                        <input type="text" id="day" class="day" value style="width: 68px;"/>
                                        <input id="month" class="month" type="text" value/>
                                        <input type="hidden" name="check_in_date" id="check_in_date"
                                               class="check-date hasDatepicker" value/>
                                    </div>
                                </li>
                                <li class="hb-form-field hb-form-check-out">
                                    <div class="label">Check-Out</div>
                                    <div class="hb-form-field-input hb_input_field">
                                        <input type="text" id="day2" class="day" value style="width: 83px;"/>
                                        <input id="month2" class="month" type="text" value/>
                                        <input type="hidden" name="check_out_date" id="check_out_date"
                                               class="check-date hasDatepicker" value/>
                                    </div>
                                </li>
                                <li class="hb-form-field hb-form-number">
                                    <div class="label">Number</div>
                                    <div id="guests" class="hb-form-field-input hb_input_field">
                                        <input type="text" id="number" class="day" value="01"/>
                                        <input class="month" type="text" value="Guests"/>
                                    </div>
                                    <div class="hb-form-field-list">
                                        <div class="hb-form-field-input hb-guest-field">
                                            <select name="adults_capacity" tabindex="-1" aria-hidden="true">
                                                <option value="47">1</option>
                                                <option value="45">2</option>
                                                <option value="56">3</option>
                                                <option value="57">4</option>
                                                <option value="58">5</option>
                                                <option value="59">6</option>
                                                <option value="60">7</option>
                                                <option value="61">8</option>
                                                <option value="62">9</option>
                                            </select>
                                            <span class="name">Guests</span>
                                            <span class="number-icons goUp"><i class="ion-plus"></i></span>
                                            <span class="number-icons goDown"><i class="ion-minus"></i></span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <p class="hb-submit">
                                <span class="contact-info">Need Help: <span>(+12) 34-567-89</span></span>
                                <button type="submit">Check Availability</button>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="empty-space"></div>
            <div class="h1-introduce">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="sc-heading style-02">
                                <h3 class="title">Comfort are perfectly combined here</h3>
                                <div class="description">
                                    <p>This charming private 19th century mansion, which originally belonged to the
                                        family, has been completely renovated with care & passion while respecting the
                                        spirit of place.</p>
                                    <p>Divo Hotel surrounded herself by a team of French artisans to create a
                                        sophisticated place in a refined.</p>
                                </div>
                                <div class="head-button">
                                    <a href="about-us.html" class="more-info">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="sc-img-box row">
                                <div class="col-sm-6">
                                    <a href="gallery-full-width.html"><img src="../assets/img/img-front/home/h1-img1.jpg" alt></a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="gallery-full-width.html"><img src="../assets/img/img-front/home/h1-img2.jpg" alt></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="empty-space"></div>
            <div class="h1-video rectangle-overlay">
                <div class="sc-video">
                    <div class="background-video">
                        <div class="cover-image"></div>
                        <div class="content container">
                            <h3 class="title">Summer is here. Get ready <br> to enjoy it!</h3>
                            <i class="video-play ion-ios-play"></i>
                            <span class="text-icon">Play Video</span>
                        </div>
                        <video loop class="full-screen-video" data-autoplay>
                            <source src="../assets/img/img-front/home/hotel.mp4" type="video/mp4">
                        </video>
                    </div>
                </div>
            <div class="group-destination">
                <div class="sc-content-overlay">
                    <div class="container">
                        <div class="empty-space"></div>
                        <div class="sc-heading style-01 text-center">
                            <h3 class="title">Dịch Vụ Nổi Bật</h3>
                            <p class="description">For anything that brings people together to celebrate an occasion, we
                                create truly memorable experiences that you will cherish forever</p>
                        </div>
                        <div class="sc-posts style-01 auto-height">
                            <div class="item row">
                                <?php
                                $db = new Database();
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
                                        <div class="post col-sm-6 col-md-4">
                                            <div class="inner">
                                                <div class="thumbnail">
                                                    <a href="blog-single.html"><img src="../assets/img/<?php echo $row['anh']; ?>" alt="img" class=""></a>
                                                </div>
                                                <div class="content">
                                                    <h3 class="title"><a href="blog-single.html"><?php echo $row['ten_dv']; ?></a></h3>
                                                    <div class="short-text">Start from <span class="gia">$<?php echo $row['gia']; ?></div>
                                                    <div class="summary">Dịch vụ của chúng tôi quá là oke rồi tôi có thể
                                                        đảm bảo điều ấy nếu bạn có thể tìm thấy chỗ nào oke hơn bảo
                                                        tôi hoàn tiền .
                                                    </div>
                                                    <a href="blog-single.html" class="read-more">More Info</a>
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
            </div>
            <div class="h1-banner">
                <div class="sc-content-overlay">
                    <div class="container rectangle-overlay">
                        <div class="sc-box style-01 text-center">
                            <h3 class="title">Get up to 20% off on your next
                                <br> travel</h3>
                            <p class="description">Choose the package you would like to offer to your clients and
                                <br> send us an inquiry using the contact form.</p>
                            <div class="button-box"><a href="#" class="btn-box">Get it now</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="h1-rooms">
                <div class="sc-content-overlay">
                    <div class="empty-space"></div>
                    <div class="container">
                        <div class="sc-heading style-01 text-center">
                            <h3 class="title">Awesome Offer</h3>
                            <p class="description">For anything that brings people together to celebrate an occasion, we
                                create truly memorable experiences that you will cherish forever</p>
                        </div>
                        <div class="sc-rooms style-01">
                            <div class="rooms-content layout-grid style-01">
                                <div class="row">
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
                                            <div class="room col-sm-4 clearfix">
                                                <div class="room-item">
                                                    <div class="room-media">
                                                        <a href="room-single.php?id=<?php echo $row['id']; ?>"><img src="../assets/img/<?php echo $row['anh_dai_dien']; ?>" alt="img" class="img-fluid"></a>
                                                    </div>
                                                    <div class="room-summary">
                                                        <h3 class="room-title">
                                                            <a href="room-single.php?id=<?php echo $row['id']; ?>"><?php echo $row['ten_phong']; ?></a>
                                                        </h3>
                                                        <div class="room-price">From: <span class="price">$<?php echo $row['gia']; ?></span></div>
                                                        <p class="room-description">
                                                            <?php
                                                            if (mb_strlen($row['mo_ta'], 'UTF-8') > 100) {
                                                                $mo_ta = mb_substr($row['mo_ta'], 0, 100, 'UTF-8') . '...';
                                                            }
                                                            echo $mo_ta;
                                                            ?>
                                                        </p>
                                                        <div class="room-meta clearfix">
                                                            <div class="comment-count">1 Reviews</div>
                                                            <div class="rating"><span class="star"></span>(5/5)</div>
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
                    <div class="empty-space"></div>
                </div>
            </div>
            <div class="h1-bg-testimonial">
                <div class="sc-content-overlay">
                    <div class="container rectangle-overlay">
                        <div class="sc-testimonials style-01">
                            <h3 class="heading">Comments from our happy <br> Guests</h3>
                            <div class="testimonial-slider" data-itemsvisible="3" data-nav="false">
                                <div class="item">
                                    <div class="content">
                                        <div class="image">
                                            <img src="../assets/img/img-front/blog/sidebar.jpg" alt>
                                        </div>
                                        <div class="rating-star"></div>
                                        <div class="description">
                                            " Conversations can be a tricky business. Sometimes, decoding what is said
                                            with what is meant is difficult at best. However, communication is a
                                            necessary tool in today’s world. "
                                        </div>
                                        <div class="user-info">
                                            <h4 class="name">Bobby Tom</h4>
                                            <div class="regency">Manager</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="group-destination">
                <div class="sc-content-overlay">
                    <div class="container">
                        <div class="empty-space"></div>
                        <div class="sc-heading style-01 text-center">
                            <h3 class="title">Latest News</h3>
                            <p class="description">For anything that brings people together to celebrate an occasion, we
                                create truly memorable experiences that you will cherish forever</p>
                        </div>
                        <div class="sc-posts style-01">
                            <div class="row">
                                <div class="item-first col-sm-12 col-md-6">
                                    <div class="post col-sm-12 col-md-12">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="blog-single.html"><img src="../assets/img/img-front/gallery/img-4.jpg" alt></a>
                                            </div>
                                            <div class="content">
                                                <div class="category"><a href="#">Hotel - Travel</a></div>
                                                <h3 class="title"><a href="blog-single.html"> Futurethon – Explore the
                                                    future</a></h3>
                                                <div class="date"><i class="ion-android-calendar"></i>15 July, 2018
                                                </div>
                                                <div class="summary">We continuously strive to enhance our living and
                                                    working environments. The environments we live in today are almost
                                                    unrecognisable from those that existed.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item col-sm-12 col-md-6">
                                    <div class="post col-sm-6 col-md-6">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="blog-single.html"><img src="../assets/img/img-front/gallery/img-5.jpg" alt></a>
                                            </div>
                                            <div class="content">
                                                <div class="category"><a href="#">Hotel</a></div>
                                                <h3 class="title"><a href="blog-single.html">Beach</a></h3>
                                                <div class="summary">We continuously strive to enhance our living...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post col-sm-6 col-md-6">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="blog-single.html"><img src="../assets/img/img-front/gallery/img-7.jpg" alt></a>
                                            </div>
                                            <div class="content">
                                                <div class="category"><a href="#">Relax</a></div>
                                                <h3 class="title"><a href="blog-single.html">Spa</a></h3>
                                                <div class="summary">We continuously strive to enhance our living...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post col-sm-6 col-md-6">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="blog-single.html"><img src="../assets/img/img-front/gallery/img-6.jpg" alt></a>
                                            </div>
                                            <div class="content">
                                                <div class="category"><a href="#">Hotel</a></div>
                                                <h3 class="title"><a href="blog-single.html">Pool</a></h3>
                                                <div class="summary">We continuously strive to enhance our living...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post col-sm-6 col-md-6">
                                        <div class="inner">
                                            <div class="thumbnail">
                                                <a href="blog-single.html"><img src="../assets/img/img-front/gallery/img-9.jpg" alt></a>
                                            </div>
                                            <div class="content">
                                                <div class="category"><a href="#">Hotel</a></div>
                                                <h3 class="title"><a href="blog-single.html">Outdoor</a></h3>
                                                <div class="summary">We continuously strive to enhance our living...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="empty-space"></div>
                        <div class="sc-heading style-01 text-center">
                            <h3 class="title">Our Gallery</h3>
                            <p class="description">For anything that brings people together to celebrate an occasion, we
                                create truly memorable experiences that you will cherish forever</p>
                        </div>
                        <div class="sc-gallery style-01">
                            <div class="gallery-slider owl-carousel owl-theme">
                                <div class="item">
                                    <div class="gallery">
                                        <a href="#gallery-1" class="btn-gallery"><img src="../assets/img/img-front/gallery/img-6.jpg"
                                                                                      alt></a>
                                        <div id="gallery-1" class="hidden">
                                            <a href="../assets/img/img-front/gallery/img-10.jpg"><img src="../assets/img/img-front/gallery/img-10.jpg"
                                                                                     alt></a>
                                            <a href="../assets/img/img-front/gallery/img-6.jpg"><img src="../assets/img/img-front/gallery/img-6.jpg" alt></a>
                                            <a href="../assets/img/img-front/gallery/img-11.jpg"><img src="../assets/img/img-front/gallery/img-11.jpg"
                                                                                     alt></a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="blog-single-gallery.html">Rooms</a></h4>
                                        <span class="count">3 photos</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gallery">
                                        <div class="gallery">
                                            <a href="#gallery-2" class="btn-gallery"><img src="../assets/img/img-front/gallery/img-7.jpg"
                                                                                          alt></a>
                                            <div id="gallery-2" class="hidden">
                                                <a href="../assets/img/img-front/gallery/img-2.jpg"><img src="../assets/img/img-front/gallery/img-2.jpg"
                                                                                        alt></a>
                                                <a href="../assets/img/img-front/gallery/img-7.jpg"><img src="../assets/img/img-front/gallery/img-7.jpg"
                                                                                        alt></a>
                                                <a href="../assets/img/img-front/gallery/img-8.jpg"><img src="../assets/img/img-front/gallery/img-8.jpg"
                                                                                        alt></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="blog-single-gallery.html">Restaurant</a></h4>
                                        <span class="count">3 photos</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gallery">
                                        <a href="#gallery-3" class="btn-gallery"><img src="../assets/img/img-front/gallery/img-9.jpg"
                                                                                      alt></a>
                                        <div id="gallery-3" class="hidden">
                                            <a href="../assets/img/img-front/gallery/img-12.jpg"><img src="../assets/img/img-front/gallery/img-12.jpg"
                                                                                     alt></a>
                                            <a href="../assets/img/img-front/gallery/img-1.jpg"><img src="../assets/img/img-front/gallery/img-1.jpg" alt></a>
                                            <a href="../assets/img/img-front/gallery/img-9.jpg"><img src="../assets/img/img-front/gallery/img-9.jpg" alt></a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="blog-single-gallery.html">Pool</a></h4>
                                        <span class="count">3 photos</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gallery">
                                        <a href="#gallery-4" class="btn-gallery"><img src="../assets/img/img-front/gallery/img-13.jpg"
                                                                                      alt></a>
                                        <div id="gallery-4" class="hidden">
                                            <a href="../assets/img/img-front/gallery/img-14.jpg"><img src="../assets/img/img-front/gallery/img-14.jpg"
                                                                                     alt></a>
                                            <a href="../assets/img/img-front/gallery/img-7.jpg"><img src="../assets/img/img-front/gallery/img-7.jpg" alt></a>
                                            <a href="../assets/img/img-front/gallery/img-13.jpg"><img src="../assets/img/img-front/gallery/img-13.jpg"
                                                                                     alt></a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="blog-single-gallery.html">Activities</a></h4>
                                        <span class="count">3 photos</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gallery">
                                        <a href="#gallery-5" class="btn-gallery"><img src="../assets/img/img-front/gallery/img-1.jpg"
                                                                                      alt></a>
                                        <div id="gallery-5" class="hidden">
                                            <a href="../assets/img/img-front/gallery/img-12.jpg"><img src="../assets/img/img-front/gallery/img-12.jpg"
                                                                                     alt></a>
                                            <a href="../assets/img/img-front/gallery/img-1.jpg"><img src="../assets/img/img-front/gallery/img-1.jpg" alt></a>
                                            <a href="../assets/img/img-front/gallery/img-9.jpg"><img src="../assets/img/img-front/gallery/img-9.jpg" alt></a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="blog-single-gallery.html">Beach</a></h4>
                                        <span class="count">3 photos</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gallery">
                                        <a href="#gallery-7" class="btn-gallery"><img src="../assets/img/img-front/gallery/img-3.jpg"
                                                                                      alt></a>
                                        <div id="gallery-6" class="hidden">
                                            <a href="../assets/img/img-front/gallery/img-4.jpg"><img src="../assets/img/img-front/gallery/img-4.jpg" alt></a>
                                            <a href="../assets/img/img-front/gallery/img-7.jpg"><img src="../assets/img/img-front/gallery/img-7.jpg" alt></a>
                                            <a href="../assets/img/img-front/gallery/img-3.jpg"><img src="../assets/img/img-front/gallery/img-3.jpg" alt></a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="blog-single-gallery.html">Spa</a></h4>
                                        <span class="count">3 photos</span>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="gallery">
                                        <a href="#gallery-7" class="btn-gallery"><img src="../assets/img/img-front/gallery/img-14.jpg"
                                                                                      alt></a>
                                        <div id="gallery-7" class="hidden">
                                            <a href="../assets/img/img-front/gallery/img-13.jpg"><img src="../assets/img/img-front/gallery/img-13.jpg"
                                                                                     alt></a>
                                            <a href="../assets/img/img-front/gallery/img-14.jpg"><img src="../assets/img/img-front/gallery/img-14.jpg"
                                                                                     alt></a>
                                            <a href="../assets/img/img-front/gallery/img-12.jpg"><img src="../assets/img/img-front/gallery/img-12.jpg"
                                                                                     alt></a>
                                        </div>
                                    </div>
                                    <div class="content">
                                        <h4 class="title"><a href="blog-single-gallery.html">Outdoor</a></h4>
                                        <span class="count">3 photos</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="empty-space"></div>
                    </div>
                </div>
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
                                <p>You have questions regarding our services? Contact us, we will be happy to help you
                                    out!</p>
                                <ul class="info">
                                    <li><i class="ion-ios-location"></i> <span>123 Camino Ramon, Suite 500 San Ramon, United Kingdom</span>
                                    </li>
                                    <li><i class="ion-ios-telephone"></i><a href="tel:8812345678">(+88) 12-345-678</a>
                                    </li>
                                    <li><i class="ion-email"></i><a
                                            href="https://html.thimpress.com/cdn-cgi/l/email-protection#b3d0dcddc7d2d0c7f3c7dbdadec3c1d6c0c09dd0dcde"><span
                                            class="__cf_email__"
                                            data-cfemail="cba8a4a5bfaaa8bf8bbfa3a2a6bbb9aeb8b8e5a8a4a6">[email&#160;protected]</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="widget-menu">
                            <h3 class="widget-title">Booking</h3>
                            <ul class="menu">
                                <li><a href="#">Rooms & Suites</a></li>
                                <li><a href="#">Restaurant</a></li>
                                <li><a href="#">Spa & Fitness</a></li>
                                <li><a href="#">Shop</a></li>
                                <li><a href="#">Gallery</a></li>
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

<script src="../assets/js/js-front/libs/bootstrap.min.js"></script>
<script src="../assets/js/js-front/libs/smoothscroll.min.js"></script>
<script src="../assets/js/js-front/libs/owl.carousel.min.js"></script>
<script src="../assets/js/js-front/libs/jquery.magnific-popup.min.js"></script>
<script src="../assets/js/js-front/libs/theia-sticky-sidebar.min.js"></script>
<script src="../assets/js/js-front/libs/counter-box.min.js"></script>
<script src="../assets/js/js-front/libs/stellar.min.js"></script>
<script src="../assets/js/js-front/libs/moment.min.js"></script>
<script src="../assets/js/js-front/libs/jquery-ui.min.js"></script>
<script src="../assets/js/js-front/libs/daterangepicker.min.js"></script>
<script src="../assets/js/js-front/libs/daterangepicker.min-date.min.js"></script>
<script src="../assets/js/js-front/libs/jquery.thim-content-slider.min.js"></script>
<script src="../assets/js/js-front/theme-customs.js"></script>

<script src="../assets/js/js-front/libs/revolution/jquery.themepunch.tools.min.js"></script>
<script src="../assets/js/js-front/libs/revolution/jquery.themepunch.revolution.min.js"></script>

<script src="../assets/js/js-front/libs/revolution/extensions/revolution.extension.actions.min.js"></script>
<script src="../assets/js/js-front/libs/revolution/extensions/revolution.extension.carousel.min.js"></script>
<script src="../assets/js/js-front/libs/revolution/extensions/revolution.extension.kenburn.min.js"></script>
<script src="../assets/js/js-front/libs/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="../assets/js/js-front/libs/revolution/extensions/revolution.extension.migration.min.js"></script>
<script src="../assets/js/js-front/libs/revolution/extensions/revolution.extension.navigation.min.js"></script>
<script src="../assets/js/js-front/libs/revolution/extensions/revolution.extension.parallax.min.js"></script>
<script src="../assets/js/js-front/libs/revolution/extensions/revolution.extension.slideanims.min.js"></script>
<script src="../assets/js/js-front/libs/revolution/extensions/revolution.extension.video.min.js"></script>


<script>function setREVStartSize(e) {
    try {
        e.c = jQuery(e.c);
        var i = jQuery(window).width(), t = 9999, r = 0, n = 0, l = 0, f = 0, s = 0, h = 0;
        if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
            f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
        }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
            var u = (e.c.width(), jQuery(window).height());
            if (void 0 != e.fullScreenOffsetContainer) {
                var c = e.fullScreenOffsetContainer.split(",");
                if (c) jQuery.each(c, function (e, i) {
                    u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= jQuery(window).height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
            }
            f = u
        } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
        e.c.closest(".rev_slider_wrapper").css({height: f})
    } catch (d) {
        console.log("Failure at Presize of Slider:" + d)
    }
};</script>
<script>
    var revapi4,
        tpj;
    (function () {
        if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded", onLoad); else onLoad();

        function onLoad() {
            if (tpj === undefined) {
                tpj = jQuery;
                if ("off" == "on") tpj.noConflict();
            }
            if (tpj("#rev_slider_4_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_4_1");
            } else {
                revapi4 = tpj("#rev_slider_4_1").show().revolution({
                    sliderType: "standard",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        arrows: {
                            style: "zeus",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            tmp: '<div class="tp-title-wrap">  	<div class="tp-arr-imgholder"></div> </div>',
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 30,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 20,
                                v_offset: 0
                            }
                        }
                        ,
                        bullets: {
                            enable: true,
                            hide_onmobile: false,
                            style: "hermes",
                            hide_onleave: false,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 100,
                            space: 10,
                            tmp: ''
                        }
                    },
                    viewPort: {
                        enable: true,
                        outof: "wait",
                        visible_area: "80%",
                        presize: false
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1024, 778, 480],
                    gridheight: [672, 600, 500, 400],
                    lazyType: "none",
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
            ;
            /* END OF revapi call */

        };
        /* END OF ON LOAD FUNCTION */
    }());
    /* END OF WRAPPING FUNCTION */
</script>
<script>
    var d = new Date();
    document.getElementById("day").setAttribute('value', (d.getDate()) + '.');
    document.getElementById("month").setAttribute('value', format_month());
    document.getElementById("multidate").setAttribute('value', format_full());

    document.getElementById("day2").setAttribute('value', (d.getDate() + 1) + '.');
    document.getElementById("month2").setAttribute('value', format_month());

    function format_full() {
        var months = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'September', 'November', 'December'];
        return months[d.getMonth()] + ' ' + d.getDate() + ', ' + d.getFullYear();
    }

    function format_month() {
        var months = ['Jan', 'Feb', 'March', 'April', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        return months[d.getMonth()] + '. ' + d.getFullYear();
    }

</script>
</body>

<!-- Mirrored from html.thimpress.com/hotelwp/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2023 07:08:34 GMT -->
</html>