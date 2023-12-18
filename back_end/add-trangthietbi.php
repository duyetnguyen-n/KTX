
<?php
    session_start();

    include '../config/database.php'; // Import file database.php

    // Khởi tạo đối tượng Database
    $db = new Database();

    if (empty($_SESSION['username'])) {
    header("location: dang_nhap.html");
    exit();
    } else {
    include 'header.php';
    include 'side-bar.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ten = $_POST["ten"];
    $maloaitrangthietbi = $_POST["maloaitrangthietbi"];
    $gia = $_POST["gia"];
    $anh = $_POST["anh"];
    // Xử lý ảnh đại diện
    $anh = $_FILES["anh"]["name"];
    $anh_dai_dien_tmp = $_FILES["anh"]["tmp_name"];
    move_uploaded_file($anh_dai_dien_tmp, "../assets/img/$anh");

        // Thực hiện câu lệnh SQL thêm tầng
        $sql = "INSERT INTO trangthietbi (ten, maloaitrangthietbi, gia, anh)
    VALUES ('$ten','$maloaitrangthietbi', '$gia','$anh')";

    if ($db->insert($sql)) {
        echo '<script>alert("Thêm loại trang thiết bị thành công!"); window.location.href = "list-trangthietbi.php";</script>';
        exit(); // Đảm bảo dừng thực thi mã nguồn sau khi chuyển hướng
    } else {
        echo '<script>alert("Lỗi khi thêm trang thiết bị: ' . $db->getError() . '");</script>';    }
    }
    ?>
    <div class="col-md-9">
        <div class="col-12 container-content">
            <div class="header-content pb-3">
                <div class="title-content">
                    <h3 class="m-0 strong">Thêm thiết bị</h3>
                    <div class="span">Quản lý thiết bị của bạn!</div>
                </div>
            </div>
            <div class="content-add-room col-12">
                <form action="add-loaitrangthietbi.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 col-md-6 p-2">
                            <label for="ten">Tên thiết bị</label>
                            <input type="text" id="ten" name="ten" class="form-control" required>
                        </div>

                        <div class="col-12 col-md-6 p-2">
                            <label for="gia">Giá</label>
                            <input type="text" id="gia" name="gia" class="form-control" required>
                        </div>

                        <div class="col-12 col-md-6 p-2">
                            <label for="maloaitrangthietbi"></label>
                            <select id="maloaitrangthietbi" name="maloaitrangthietbi" class="form-control" required>
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
                                <option value="san_sang" <?php echo ($trang_thai == 'sắn sàng') ? 'selected' : ''; ?>>sẵn sàng</option>
                                <option value="bi_khoa" <?php echo ($trang_thai == 'bị khóa') ? 'selected' : ''; ?>>bị khóa</option>
                            </select>                        </div>

                        <div class="col-12 p-2">
                            <label>Ảnh đại diện</label>
                            <div class="flex-container">
                                <!-- Trong HTML -->
                                <div class="drag-area-1 drag-area w-full rounded-2xl border-2 border-dashed items-center">
                                    <header class="text-lg text-black-50">Kéo và Thả để Tải ảnh lên</header>
                                    <span class="my-3 text-sm text-black-50">Hoặc</span>
                                    <div class="but-add-image">Chọn ảnh</div>
                                    <input type="file" name="anh" hidden>
                                    <div class="remove-image" onclick="removeImage(this)">-</div>
                                </div>
                            </div>
                        </div>
                      
                        <div class="col-12">
                            <input class="but-add mr-2" type="submit" value="Thêm">
                            <input class="but-cancel" type="button" value="Hủy">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="../assets/js/area-image.js"></script>
     
    </body>
    </html>
<?php } ?>

