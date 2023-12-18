<?php
include '../back_end/header-f.php';
?>


<?php



$tendangnhap = $_SESSION['username'];

// Lấy thông tin phòng, bao gồm cả ảnh đại diện
$db = new Database();

// Lấy thông tin từ các bảng
$sqlPhong = "SELECT dp.*, p.* FROM dang_ky_phong dp
             INNER JOIN phong p ON dp.idphong = p.id
             WHERE dp.tendangnhap='$tendangnhap'";
$resultPhong = $db->select($sqlPhong);


$sqlDichVu = "SELECT dv.*, d.ten_dv FROM dang_ky_dich_vu dv
              INNER JOIN dichvu d ON dv.id_dichvu = d.id
              WHERE dv.tendangnhap='$tendangnhap'";
$resultDichVu = $db->select($sqlDichVu);


$sqlTrangThietBi = "SELECT tb.*, ttb.TenTrangThietBi FROM dang_ky_trang_thiet_bi tb
                   INNER JOIN trangthietbi ttb ON tb.ma_trang_thiet_bi = ttb.MaTrangThietBi
                   WHERE tb.tendangnhap='$tendangnhap'";
$resultTrangThietBi = $db->select($sqlTrangThietBi);


// Thực hiện các thao tác hiển thị dữ liệu trên trang web
?>



<div id="main-content">
    <div class="page-title">
        <div class="page-title-wrapper" data-stellar-background-ratio="0.5">
            <div class="content container">
                <h1 class="heading_primary">Payment</h1>
                <ul class="breadcrumbs">
                    <li class="item"><a href="index.html">Home</a></li>
                    <li class="item"><span class="separator"></span></li>
                    <li class="item active">PAYMENT</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="site-content container">
        <h1>Thông tin thanh toán</h1>

        <div id="phong">
            <h2>Phòng</h2>
            <!-- Thông tin về các phòng -->
            <?php
            if ($resultPhong->num_rows > 0) {
                while($phong = $resultPhong->fetch_assoc()){
                ?>
                    <div class="boxs-thanh-toan">
                        <div class="row">
                            <div class="col-4 col-md-3">
                                <img src="../assets/img/<?php echo $phong['anh_dai_dien'];?>" alt="img">
                            </div>
                            <div class="col-8 col-md-9 d-flex align-items-center">
                                <div class="row">
                                    <div class="col-8 content-center">
                                        <h2><?php echo $phong['ten_phong'];?></h2>
                                        <span><?php echo $phong['ngay_tao'];?></span>
                                        <p>
                                            <?php
                                            if (mb_strlen($phong['mo_ta'], 'UTF-8') > 100) {
                                                $mo_ta = mb_substr($phong['mo_ta'], 0, 100, 'UTF-8') . '...';
                                            }
                                            echo $mo_ta;
                                            ?>
                                        </p>
                                    </div>
                                    <div class="col-4 content-right d-flex align-items-center">
                                        <div class="content">
                                            <h2 class="gia">$<?php echo $phong['gia'];?></h2>
                                            <span><?php echo $phong['tu_ngay'];?> --></span><span><?php echo $phong['den_ngay'];?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            } else {
                echo "<p>Không có phòng nào được đăng ký</p>";
            }
            ?>
        </div>

        <div id="dichVu">
            <h2>Dịch Vụ</h2>
            <!-- Thông tin về các dịch vụ đăng ký -->
            <?php
            if ($resultDichVu->num_rows > 0) {
                while ($row = $resultDichVu->fetch_assoc()) {?>
                    <div class="boxs-thanh-toan">
                        <div class="row">
                            <div class="col-4 col-md-3">
                                <img src="../assets/img/<?php echo $row['anh_dai_dien'];?>" alt="img">
                            </div>
                            <div class="col-8 col-md-9 d-flex align-items-center">
                                <div class="row">
                                    <div class="col-8 content-center">
                                        <h2><?php echo $row['ten_dv'];?></h2>
                                        <span><?php echo $row['ngay_dang_ky'];?></span>
                                        <p>
                                            Dịch vụ của chúng tôi quá là oke rồi tôi có thể
                                            đảm bảo điều ấy nếu bạn có thể tìm thấy chỗ nào oke hơn bảo
                                            tôi hoàn tiền .
                                        </p>
                                    </div>
                                    <div class="col-4 content-right d-flex align-items-center">
                                        <div class="content">
                                            <h2 class="gia">$<?php echo $row['gia'];?></h2>
                                            <span><?php echo $phong['ngay_tao'];?> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            } else {
                echo "<p>Không có dịch vụ nào được đăng ký</p>";
            }
            ?>
        </div>

        <div id="trangThietBi">
            <h2>Trang Thiết Bị</h2>
            <!-- Thông tin về các trang thiết bị đăng ký -->
            <?php
            if ($resultTrangThietBi->num_rows > 0) {
                while ($row = $resultTrangThietBi->fetch_assoc()) {?>
                    <div class="boxs-thanh-toan">
                        <div class="row">
                            <div class="col-4 col-md-3">
                                <img src="../assets/img/<?php echo $row['AnhTrangThietBi'];?>" alt="img">
                            </div>
                            <div class="col-8 col-md-9 d-flex align-items-center">
                                <div class="row">
                                    <div class="col-8 content-center">
                                        <h2><?php echo $row['TenTrangThietBi'];?></h2>
                                        <span><?php echo $row[''];?></span>
                                        <p>
                                            Dịch vụ của chúng tôi quá là oke rồi tôi có thể
                                            đảm bảo điều ấy nếu bạn có thể tìm thấy chỗ nào oke hơn bảo
                                            tôi hoàn tiền .
                                        </p>
                                    </div>
                                    <div class="col-4 content-right d-flex align-items-center">
                                        <div class="content">
                                            <h2 class="gia">$<?php echo $row['gia'];?></h2>
                                            <span><?php echo $phong['ngay_tao'];?> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }
            } else {
                echo "<p>Không có trang thiết bị nào được đăng ký</p>";
            }
            ?>
        </div>
    </div>
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
</html>


