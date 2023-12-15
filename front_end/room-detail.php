<?php include 'header.php'?>
<?php

$id = $_GET['id'];
// Lấy dữ liệu từ cơ sở dữ liệu
$sqlphong = "SELECT * FROM phong where id = $id";
$resultphong = $db->select($sqlphong);
if ($resultphong->num_rows > 0) {
while ($row = $resultphong->fetch_assoc()) {
?>

<div class="title-phong">
    <div class="img-title">
        <img src="../assets/img/<?php echo $row['anh_khac']; ?>" alt="img" class="img-fluid background-title-phong">

    </div>
    <div class="content-title-header text-center">
        <h3 class="big-text p-3 title-room">
            ROOM DETAIL
        </h3>
        <div class="breadcrumbs">
            <a href="main.php">Home</a> <span> -> </span><a href="rooms.php"> Rooms </a> <span> -> </span> <a
                    href="room-detail.php"> Detail room</a>
        </div>
    </div>
</div>
<div id="detail-phong" class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-8 bg-white p-0 mt-5 content-detail">
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
                <div class="main-content px-4">
                    <div class="name-phone">
                        <h1><?php echo $row['ten_phong']; ?></h1>
                    </div>
                    <div class="thongtin d-flex">
                        <span class="mr-3"><?php echo $row['nguoi_tao']; ?></span>
                        <span id="real-time"></span>
                    </div>
                    <div class="price-phone">
                        <h2><?php echo $row['price']; ?></h2>
                    </div>
                    <button class="but-resister">
                        <p class="m-0">Đăng Ký</p>
                    </button>
                    <div class="detail-phone">
                        <?php echo $row['noi_dung']; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3 mt-5 p-0">
                <h2>Tìm Kiếm</h2>
                <div class="tim-kiem">
                    <div class="row">
                        <div class="col-8 pr-0">
                            <input type="text" placeholder="Tìm kiếm" class="form-control p-4" id="search" name="search">
                        </div>
                        <div class="col-4 pl-0">
                            <div class="container-icon bg-danger text-center">
                                <i class="fa fa-search"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-lien-he p-4 my-5">
                    <h3 class="text-center pb-3">Liên Hệ</h3>
                    <div class="form text-center">
                        <input type="text" placeholder="Họ Tên" class="hvt input-form-sidebar mb-3" name="hvt">
                        <input type="text" placeholder="Nội Dung" class="noi-dung input-form-sidebar mb-3" name="noidung">
                        <input type="submit" class="butn but-lien-he" >
                    </div>
                </div>
                <h3 class="my-3">Những phòng liên quan</h3>
                <div class="phong-relative">

                    <?php
                    $sqlphonglienquan = "SELECT * FROM phong";
                    $resultphonglienquan = $db->select($sqlphonglienquan);
                    // Số lượng khối cần hiển thị
                    $blocksToShow = 3;
                    $blockCount = 0;

                    if ($resultphonglienquan->num_rows > 0) {
                        while ($row = $resultphonglienquan->fetch_assoc()) {
                            if ($blockCount >= $blocksToShow) {
                                break;
                            }
                            // Tăng biến đếm
                            $blockCount++;
                            ?>
                            <div class="row mb-3">
                                <div class="img-avatar col-5">
                                    <img src="../assets/img/<?php echo $row['anh_dai_dien']; ?>" class="img-phong-rel img-fluid h-100" alt="<?php echo $row['ten_phong']; ?>">
                                </div>
                                <div class="col-7 d-flex align-items-center p-0">
                                    <h2><?php echo $row['ten_phong']; ?></h2>
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
    <div class="form-dang-ky-phong">
        <p class="text-center my-3">Đăng ký phòng</p>
        <div class="text-center">
            <input class="input-dkp form-control mb-2" type="date" id="from" name="from" required>
        </div>
        <div class="text-center">
            <input class="input-dkp form-control mb-2" type="date" id="to" name="to" required>
        </div>
        <div class="text-center">
            <input class="input-signup form-control mb-2" type="password" id="mat-khau" name="mat-khau" placeholder="Mật khẩu" required>
        </div>
        <div class="text-center">
            <input class="input-signup form-control mb-2" type="text" id="hvt" name="hvt" placeholder="Họ và tên" required>
        </div>
        <div class="text-center">
            <input class="input-signup form-control mb-2" type="text" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="text-center">
            <input class="input-signup form-control mb-2" type="number" id="sdt" name="sdt" placeholder="Số điện thoại" required>
        </div>
    </div>
</body>
    <script>
        function updateTime() {
            var now = new Date();
            var hours = now.getHours();
            var minutes = now.getMinutes();
            var seconds = now.getSeconds();

            // Định dạng giờ, phút, giây thành chuỗi với định dạng hh:mm:ss
            var timeString = hours.toString().padStart(2, '0') + ':' +
                minutes.toString().padStart(2, '0') + ':' +
                seconds.toString().padStart(2, '0');

            // Hiển thị thời gian trong phần tử có id là "real-time"
            document.getElementById('real-time').innerHTML = timeString;
        }

        // Gọi hàm updateTime mỗi giây (1000 milliseconds)


        // Chạy hàm updateTime lần đầu tiên để hiển thị thời gian ngay khi trang được load
        updateTime();
    </script>
</html>
<?php } }?>