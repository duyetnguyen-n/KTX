<?php
include '../back_end/header-f.php';
?>

<div id="main-content">
    <div class="page-title">
        <div class="page-title-wrapper" data-stellar-background-ratio="0.5">
            <div class="content container">
                <h1 class="heading_primary">Services</h1>
                <ul class="breadcrumbs">
                    <li class="item"><a href="main2.html">Home</a></li>
                    <li class="item"><span class="separator"></span></li>
                    <li class="item active">Services</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="site-content container">
        <div class="blog-content layout-grid">
            <div class="row">
                <?php
                    // Lấy dữ liệu từ cơ sở dữ liệu
                    $sqldichvu = "SELECT * FROM dichvu";
                    $resultdichvu = $db->select($sqldichvu);
                ?>

                <?php
                    // Hiển thị dữ liệu dịch vụ
                    if ($resultdichvu->num_rows > 0) {
                while ($row = $resultdichvu->fetch_assoc()) {
                ?>
                <article class="post col-sm-4 clearfix">
                    <div class="post-content">
                        <div class="post-media">
                            <a href="service-single.php?id=<?php echo $row['id']; ?>">
                                <img src="../assets/img/<?php echo $row['anh']; ?>" alt="<?php echo $row['ten_dv']; ?>">
                            </a>
                        </div>
                        <div class="post-summary">
                            <h2 class="post-title">
                                <a href="service-single.php?id=<?php echo $row['id']; ?>"><?php echo $row['ten_dv']; ?></a>
                            </h2>
                            <p class="post-description"><?php echo $row['trangthai']; ?></p>
                            <div class="post-meta">
                                <span class="price">$<?php echo $row['gia']; ?></span>
                            </div>
                            <a href="service-single.php?id=<?php echo $row['id']; ?>" class="btn-icon">Read more</a>
                        </div>
                    </div>
                </article>
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

<?php
include 'footer.php';
?>