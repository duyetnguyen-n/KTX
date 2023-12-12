
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
    $tenkhu = $_POST["tenkhu"];
    $ngaytao = $_POST["ngaytao"];
    $nguoitao = $_SESSION['username'];
    // Xử lý ảnh đại diện
    $anh_dai_dien = $_FILES["anh"]["name"];
    $anh_dai_dien_tmp = $_FILES["anh"]["tmp_name"];
    move_uploaded_file($anh_dai_dien_tmp, "../assets/img/$anh");



        // Thực hiện câu lệnh SQL thêm phòng
        $sql = "INSERT INTO khuvuc (tenkhu, ngaytao, nguoitao, anh)
    VALUES ('$tenkhu', '$ngaytao', '$nguoitao', 'anh')";

    if ($db->insert($sql)) {
        echo '<script>alert("Thêm khu vực thành công!"); window.location.href = "list-kv.php";</script>';
        exit(); // Đảm bảo dừng thực thi mã nguồn sau khi chuyển hướng
    } else {
        echo '<script>alert("Lỗi khi thêm khu vực: ' . $db->getError() . '");</script>';    }
    }
    ?>
    <div class="col-md-9">
        <div class="col-12 container-content">
            <div class="header-content pb-3">
                <div class="title-content">
                    <h3 class="m-0 strong">Thêm khu vực</h3>
                    <div class="span">Quản lý khu vực của bạn</div>
                </div>
            </div>
            <div class="content-add-room col-12">
                <form action="add-kv.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 col-md-6 p-2">
                            <label for="tenkhu">Tên khu</label>
                            <input type="text" id="tenkhu" name="tenkhu" class="form-control" required>
                        </div>
                       
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

