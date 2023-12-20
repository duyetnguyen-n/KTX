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
                                <img src="../assets/img/4.jpg" alt="Kí túc xá">
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
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slide-content">
                            <div class="slide-scale">
                                <img src="../assets/img/4.jpg" alt="Kí túc xá">
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
                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slide-content">
                            <div class="slide-scale">
                                <img src="../assets/img/4.jpg" alt="Kí túc xá">
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
                                <span class="contact-info">Cần giúp đỡ: <span>(+12) 34-567-89</span></span>
                                <button type="submit">Check</button>
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
                                <h3 class="title">Chào mừng bạn đến với kí túc xá Đại học Hàng Hải Việt Nam</h3>
                                <div class="description">
                                    <p>Nơi lý tưởng cho cuộc sống sinh viên sôi động!</p>
                                    <p>Tận hưởng không gian hiện đại, an ninh đảm bảo và cộng đồng đa dạng.</p>
                                </div>
                                <div class="head-button">
                                    <a href="about-us.html" class="more-info">More Info</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="sc-img-box row">
                                <div class="col-sm-6">
                                    <a href="gallery-full-width.html"><img src="../assets/img/55.png" alt></a>
                                </div>
                                <div class="col-sm-6">
                                    <a href="gallery-full-width.html"><img src="../assets/img/55.png" alt></a>
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
                                    <h6 class="title">Kí túc xá của chúng tôi không chỉ là nơi ở, mà là mái nhà thứ hai cho bạn.</h6>
                                    <i class="video-play ion-ios-play"></i>
                                    <span class="text-icon">Play Video</span>
                                </div>
                                <video loop class="full-screen-video" data-autoplay>
                                    <source src="assets/img/vid.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                        </div>
                    </div>

            <div class="group-destination">
                <div class="sc-content-overlay">
                    <div class="container">
                        <div class="empty-space"></div>
                        <div class="sc-heading style-01 text-center">
                            <h3 class="title">Dịch Vụ Nổi Bật</h3>
                            <p class="description">Kí túc xá Đại học Hàng Hải Việt Nam mang đến cho bạn một trải nghiệm sống tiện nghi và hiện đại. Wi-Fi siêu tốc, phòng tập gym, khu vực giải trí và thư viện - tất cả đều sẵn có tại ngôi nhà mới của bạn. Hãy bắt đầu chương mới của cuộc sống sinh viên với chúng tôi!"</p>
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
                                                    <div class="summary">Đây không chỉ là một không gian tập luyện, mà còn là nơi để bạn cải thiện sức khỏe, nâng cao tinh thần và tận hưởng cuộc sống đại học. 
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

            <div class="h1-rooms">
                <div class="sc-content-overlay">
                    <div class="empty-space"></div>
                    <div class="container">
                        <div class="sc-heading style-01 text-center">
                            <h3 class="title">Một sô đề nghị từ chúng tôi</h3>
                            <p class="description">Với phòng ốc hiện đại, internet nhanh chóng và không gian chung đầy sáng tạo, chúng tôi tự hào mang đến cho bạn không chỉ một chỗ ở, mà là một trải nghiệm sống đầy đủ tiện ích.</p>
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
                            <h3 class="heading">Đánh giá</h3>
                            <div class="testimonial-slider" data-itemsvisible="3" data-nav="false">
                                <div class="item">
                                    <div class="content">
                                        <div class="image">
                                            <img src="../assets/img/img-front/blog/sidebar.jpg" alt>
                                        </div>
                                        <div class="d-flex justify-content-center star" >
                                            <i class="fas fa-star mr-1"></i> <i class="fas fa-star mr-1"></i> <i class="fas fa-star mr-1"></i> <i class="fas fa-star mr-1"></i> <i class="fas fa-star mr-1"></i>
                                        </div>
                                        <div class="description">
                                            " Tôi rất hài lòng với kí túc xá này. Phòng ốc thoải mái, sạch sẽ và được trang bị đầy đủ tiện nghi. Cộng đồng ở đây rất thân thiện và đa dạng, tạo nên môi trường sống tốt cho việc học tập và giao lưu."


                                        </div>
                                        <div class="user-info">
                                            <h4 class="name">Như Hà</h4>

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
                            <p class="description">"Sống, học và khám phá cùng chúng tôi tại kí túc xá hiện đại nhất thành phố. Với các tiện ích đẳng cấp, an ninh 24/7 và không gian xanh thoáng đãng, chúng tôi mang đến cho bạn không gian sống tốt nhất để phát triển và thư giãn. Đặt phòng ngay để bắt đầu cuộc phiêu lưu mới của bạn!"

                            </p>
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
                                                <div class="category"><a href="#">Phòng</a></div>

                                                <div class="date d-flex align-items-center"><i class="fas fa-calendar-alt"></i> 19/12/2023
                                                </div>
                                                <div class="summary">Với không gian sáng tạo, tiện nghi tiên tiến và một cộng đồng đa dạng, chúng tôi tạo ra môi trường lý tưởng để bạn phát triển cả về mặt học thuật lẫn cá nhân.
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
                                                <div class="category"><a href="#">Giải trí</a></div>
                                                <h3 class="title"><a href="blog-single.html">Gym</a></h3>
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
                                                <div class="category"><a href="#">Học tập</a></div>
                                                <h3 class="title"><a href="blog-single.html">Thư viện</a></h3>
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
                                                <div class="category"><a href="#">Thư giãn</a></div>
                                                <h3 class="title"><a href="blog-single.html">Bể bơi</a></h3>
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
                                                <div class="category"><a href="#">Cảnh quang</a></div>
                                                <h3 class="title"><a href="blog-single.html">AAA</a></h3>
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
                            <h3 class="title">TỔNG KẾT</h3>
                            <p class="description">Hãy đến và khám phá sự thuận tiện, an ninh và sự ấm áp tại nơi chúng tôi gọi là "nhà".</p>
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
                                        <h4 class="title"><a href="blog-single-gallery.html">Phòng</a></h4>
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
                                        <h4 class="title"><a href="blog-single-gallery.html">Giải trí/a></h4>
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
        <?php
    include 'footer.php';
?>