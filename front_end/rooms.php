<?php
include '../back_end/header-f.php';
?>

<div id="main-content">
    <div class="page-title">
        <div class="page-title-wrapper" data-stellar-background-ratio="0.5">
            <div class="content container">
                <h1 class="heading_primary">Rooms</h1>
                <ul class="breadcrumbs">
                    <li class="item"><a href="index.html">Home</a></li>
                    <li class="item"><span class="separator"></span></li>
                    <li class="item active">Rooms</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="site-content container">
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
                <ul class="loop-pagination">
                    <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
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