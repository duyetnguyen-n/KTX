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
    $id = $_GET['id'];

    // Lấy dữ liệu từ cơ sở dữ liệu
    $sql = "SELECT * FROM phong WHERE id = $id";
    $result = $db->select($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $ten_phong = $row["ten_phong"];
        $mo_ta = $row["mo_ta"];
        $noi_dung = $row["noi_dung"];
        $suc_chua = $row["suc_chua"];
        $id_tang = $row["id_tang"];
        $gia = $row["gia"];
        $trang_thai = $row["trang_thai"];
        $nguoi_tao = $row['nguoi_tao'];
        $anh_dai_dien = $row['anh_dai_dien'];
        $anh_khac = $row['anh_khac'];
    } else {
        echo "Không tìm thấy dữ liệu.";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $newten_phong = $_POST["ten_phong"];
        $newmo_ta = $_POST["mo_ta"];
        $newnoi_dung = $_POST["noi_dung"];
        $newsuc_chua = $_POST["suc_chua"];
        $newid_tang = $_POST["id_tang"];
        $newgia = $_POST["gia"];
        $newtrang_thai = $_POST["trang_thai"];
        $newnguoi_tao = $_SESSION['username'];

        // Xử lý ảnh đại diện mới
        if ($_FILES["anh_dai_dien"]["name"] != "") {
            $newanh_dai_dien = $_FILES["anh_dai_dien"]["name"];
            $newanh_dai_dien_tmp = $_FILES["anh_dai_dien"]["tmp_name"];
            move_uploaded_file($newanh_dai_dien_tmp, "../assets/img/$newanh_dai_dien");
        } else {
            // Giữ nguyên ảnh đại diện cũ
            $newanh_dai_dien = $anh_dai_dien;
        }

        // Xử lý ảnh khác mới
        if ($_FILES["anh_khac"]["name"] != "") {
            $newanh_khac = $_FILES["anh_khac"]["name"];
            $newanh_khac_tmp = $_FILES["anh_khac"]["tmp_name"];
            move_uploaded_file($newanh_khac_tmp, "../assets/img/$newanh_khac");
        } else {
            // Giữ nguyên ảnh khác cũ
            $newanh_khac = $anh_khac;
        }

        // ... (your existing code)

        // Thực hiện câu lệnh SQL sửa phòng
        $sql = "UPDATE phong SET 
                    ten_phong='$newten_phong',
                    mo_ta='$newmo_ta', 
                    noi_dung='$newnoi_dung', 
                    suc_chua='$newsuc_chua', 
                    id_tang='$newid_tang', 
                    gia='$newgia', 
                    trang_thai='$newtrang_thai', 
                    nguoi_tao='$newnguoi_tao', 
                    anh_dai_dien='$newanh_dai_dien', 
                    anh_khac='$newanh_khac'
                    WHERE id='$id'";

        if ($db->update($sql)) {
            echo '<script>alert("Sửa phòng thành công!"); window.location.href = "list-room.php";</script>';
            exit(); // Đảm bảo dừng thực thi mã nguồn sau khi chuyển hướng
        } else {
            echo '<script>alert("Lỗi khi sửa phòng: ' . $db->getError() . '");</script>';
        }
    }?>


<div class="col-md-9">
    <div class="col-12 container-content">
        <div class="header-content pb-3">
            <div class="title-content">
                <h3 class="m-0 strong">Edit Room</h3>
                <div class="span">Manage your room</div>
            </div>
        </div>
        <div class="content-add-room col-12">
            <form action="edit-room.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                <!-- ... (your existing form fields) -->
                <div class="row">
                    <div class="col-12 col-md-6 p-2">
                        <label for="ten_phong">Tên phòng:</label>
                        <input type="text" id="ten_phong" name="ten_phong" class="form-control" value="<?php echo $ten_phong; ?>" required>
                    </div>
                    <div class="col-12 col-md-6 p-2">
                        <label for="gia">Giá:</label>
                        <input type="text" id="gia" name="gia" class="form-control" value="<?php echo $gia; ?>" required>
                    </div>
                    <div class="col-12 col-md-4 p-2">
                        <label for="suc_chua">Sức chứa:</label>
                        <input type="text" id="suc_chua" name="suc_chua" class="form-control" value="<?php echo $suc_chua; ?>" required>
                    </div>
                    <div class="col-12 col-md-4 p-2">
                        <label for="id_tang">Tầng:</label>
                        <input type="text" id="id_tang" name="id_tang" class="form-control" value="<?php echo $id_tang; ?>" required>
                    </div>
                    <div class="col-12 col-md-4 p-2">
                        <label for="trang_thai">Trạng thái:</label>
                        <input type="text" id="trang_thai" name="trang_thai" class="form-control" value="<?php echo $trang_thai; ?>" required>
                    </div>
                    <div class="col-12 p-2">
                        <label for="mo_ta">Mô tả:</label>
                        <textarea type="text" id="mo_ta" name="mo_ta" class="form-control"><?php echo $mo_ta; ?></textarea>
                    </div>
                    <div class="col-12 p-2">
                        <label for="noi_dung">Nội dung:</label>
                        <textarea type="text" id="noi_dung" name="noi_dung" class="form-control"><?php echo $noi_dung; ?></textarea>
                    </div>
                    <!-- Images 1 area -->
                    <div class="col-12 p-2">
                        <label>Ảnh đại diện:</label>
                        <div class="flex-container">
                            <div class="drag-area-1 drag-area w-full rounded-2xl border-2 border-dashed items-center">
                                <header class="text-lg text-black-50">Kéo và Thả để Tải ảnh lên</header>
                                <span class="my-3 text-sm text-black-50">Hoặc</span>
                                <div class="but-add-image">Chọn ảnh</div>
                                <input type="file" name="anh_dai_dien" hidden>
                                <input type="hidden" name="anh_dai_dien_old" value="<?php echo $anh_dai_dien; ?>">
                                <input type="hidden" id="anh_dai_dien_preview" value="<?php echo $anh_dai_dien; ?>">
                                <div class="image-container">
                                    <img id="anh_dai_dien_preview_img" src="../assets/img/<?php echo $anh_dai_dien; ?>" alt="Ảnh đại diện" class="uploaded-image img-thumbnail img-fluid img-responsive"/>
                                    <div class="remove-image" onclick="removeImage(this)">-</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Images 2 area -->
                    <div class="col-12 p-2">
                        <label for="anh_khac">Ảnh khác:</label>
                        <div class="flex-container">
                            <div class="drag-area-2 drag-area w-full rounded-2xl border-2 border-dashed items-center">
                                <header class="text-lg text-black-50">Kéo và Thả để Tải ảnh lên</header>
                                <span class="my-3 text-sm text-black-50">Hoặc</span>
                                <div class="but-add-image">Chọn ảnh</div>
                                <input type="file" name="anh_khac" hidden>
                                <input type="hidden" name="anh_khac_old" value="<?php echo $anh_khac; ?>">
                                <input type="hidden" id="anh_khac_preview" value="<?php echo $anh_khac; ?>">
                                <div class="image-container">
                                    <img id="anh_khac_preview_img" src="../assets/img/<?php echo $anh_khac; ?>" alt="Ảnh khac" class="uploaded-image img-thumbnail img-fluid img-responsive"/>
                                    <div class="remove-image" onclick="removeImage(this)">-</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12">
                        <input class="but-add mr-2" type="submit" value="Cập nhật">
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