
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
    $ten_phong = $_POST["ten_phong"];
    $mo_ta = $_POST["mo_ta"];
    $noi_dung = $_POST["noi_dung"];
    $suc_chua = $_POST["suc_chua"];
    $id_tang = $_POST["id_tang"];
    $gia = $_POST["gia"];
    $trang_thai = $_POST["trang_thai"];
    $nguoi_tao = $_SESSION['username'];
    // Xử lý ảnh đại diện
    $anh_dai_dien = $_FILES["anh_dai_dien"]["name"];
    $anh_dai_dien_tmp = $_FILES["anh_dai_dien"]["tmp_name"];
    move_uploaded_file($anh_dai_dien_tmp, "../assets/img/$anh_dai_dien");

    // Xử lý ảnh khác
    $anh_khac = $_FILES["anh_khac"]["name"];
    $anh_khac_tmp = $_FILES["anh_khac"]["tmp_name"];
    move_uploaded_file($anh_khac_tmp, "../assets/img/$anh_khac");

        // Thực hiện câu lệnh SQL thêm phòng
        $sql = "INSERT INTO phong (ten_phong, mo_ta, noi_dung, suc_chua, id_tang, gia, trang_thai, nguoi_tao, anh_dai_dien, anh_khac)
    VALUES ('$ten_phong', '$mo_ta', '$noi_dung', '$suc_chua', '$id_tang', '$gia', '$trang_thai','$nguoi_tao', '$anh_dai_dien', '$anh_khac')";

    if ($db->insert($sql)) {
        echo '<script>alert("Thêm phòng thành công!"); window.location.href = "list-room.php";</script>';
        exit(); // Đảm bảo dừng thực thi mã nguồn sau khi chuyển hướng
    } else {
        echo '<script>alert("Lỗi khi thêm phòng: ' . $db->getError() . '");</script>';    }
    }
    ?>
    <div class="col-md-9">
        <div class="col-12 container-content">
            <div class="header-content pb-3">
                <div class="title-content">
                    <h3 class="m-0 strong">Add Rooms</h3>
                    <div class="span">Manage your rooms</div>
                </div>
            </div>
            <div class="content-add-room col-12">
                <form action="add-rooms.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 col-md-6 p-2">
                            <label for="ten_phong">Tên phòng:</label>
                            <input type="text" id="ten_phong" name="ten_phong" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-6 p-2">
                            <label for="gia">Giá:</label>
                            <input type="text" id="gia" name="gia" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-4 p-2">
                            <label for="suc_chua">Sức chứa:</label>
                            <input type="text" id="suc_chua" name="suc_chua" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-4 p-2">
                            <label for="id_tang">Tầng:</label>
                            <input type="text" id="id_tang" name="id_tang" class="form-control" required>
                        </div>
                        <div class="col-12 col-md-4 p-2">
                            <label for="trang_thai">Trạng thái:</label>
                            <input type="text" id="trang_thai" name="trang_thai" class="form-control" required>
                        </div>
                        <div class="col-12 p-2">
                            <label for="mo_ta">Mô tả:</label>
                            <textarea type="text" id="mo_ta" name="mo_ta" class="form-control"></textarea>
                        </div>
                        <div class="col-12 p-2">
                            <label for="noi_dung">Nội dung:</label>
                            <textarea type="text" id="noi_dung" name="noi_dung" class="form-control"></textarea>
                        </div>
                        <div class="col-12 p-2">
                            <label>Ảnh đại diện:</label>
                            <div class="flex-container">
                                <!-- Trong HTML -->
                                <div class="drag-area-1 drag-area w-full rounded-2xl border-2 border-dashed items-center">
                                    <header class="text-lg text-black-50">Kéo và Thả để Tải ảnh lên</header>
                                    <span class="my-3 text-sm text-black-50">Hoặc</span>
                                    <div class="but-add-image">Chọn ảnh</div>
                                    <input type="file" name="anh_dai_dien" hidden>
                                    <div class="remove-image" onclick="removeImage(this)">-</div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 p-2">
                            <label for="anh_khac">Ảnh khác:</label>
                            <div class="flex-container">
                                <!-- Trong HTML -->
                                <div class="drag-area-2 drag-area w-full rounded-2xl border-2 border-dashed items-center">
                                    <header class="text-lg text-black-50">Kéo và Thả để Tải ảnh lên</header>
                                    <span class="my-3 text-sm text-black-50">Hoặc</span>
                                    <div class="but-add-image">Chọn ảnh</div>
                                    <input type="file" name="anh_khac" hidden>
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
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'mo_ta' );
            CKEDITOR.replace( 'noi_dung' );
        </script>
    </body>
    </html>
<?php } ?>

