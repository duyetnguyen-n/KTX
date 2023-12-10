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
    $sql = "SELECT * FROM dichvu WHERE id = $id";
    $result = $db->select($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $ten_dv = $row["ten_dv"];
        $gia = $row["gia"];
        $trangthai = $row["trangthai"];
        $ngaytao = $row["ngaytao"];
        $nguoitao = $row["nguoitao"];
        $anh = $row["anh"];
    } else {
        echo "Không tìm thấy dữ liệu.";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $newten_dv = $_POST["ten_dv"];
        $newgia = $_POST["gia"];
        $newtrang_thai = $_POST["trangthai"];
        $newsngay_tao = $_POST["ngaytao"];
        $newnguoi_tao = $_POST["nguoitao"];

        // Xử lý ảnh đại diện mới
        if ($_FILES["anh"]["name"] != "") {
            $anh = $_FILES["anh"]["name"];
            $newanh_dai_dien_tmp = $_FILES["anh"]["tmp_name"];
            move_uploaded_file($newanh_dai_dien_tmp, "../assets/img/$anh");
        } else {
            // Giữ nguyên ảnh đại diện cũ
            $newanh_dai_dien = $anh;
        }

        // Thực hiện câu lệnh SQL sửa phòng
        $sql = "UPDATE dichvu SET 
                    ten_dv='$newten_dv',
                    gia='$newgia', 
                    trangthai='$newtrang_thai', 
                    ngaytao='$newngay_tao', 
                    nguoitao='$newnguoi_tao', 
                    anh='$newanh_dai_dien', 
                    WHERE id='$id'";

        if ($db->update($sql)) {
            echo '<script>alert("Sửa dịch vụ thành công!"); window.location.href = "list-dv.php";</script>';
            exit(); // Đảm bảo dừng thực thi mã nguồn sau khi chuyển hướng
        } else {
            echo '<script>alert("Lỗi khi sửa dịch vụ: ' . $db->getError() . '");</script>';
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
            <form action="sua-dv.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                <!-- ... (your existing form fields) -->
                <div class="row">
                    <div class="col-12 col-md-6 p-2">
                        <label for="ten_dv">Tên dịch vụ</label>
                        <input type="text" id="ten_dv" name="ten_dv" class="form-control" value="<?php echo $ten_dv; ?>" required>
                    </div>
                    <div class="col-12 col-md-6 p-2">
                        <label for="gia">Giá</label>
                        <input type="text" id="gia" name="gia" class="form-control" value="<?php echo $gia; ?>" required>
                    </div>
                    <div class="col-12 col-md-4 p-2">
                        <label for="trangthai">Trạng thái</label>
                        <input type="text" id="trangthai" name="trangthai" class="form-control" value="<?php echo $trangthai; ?>" required>
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
                                <input type="hidden" name="anh_dai_dien_old" value="<?php echo $anh; ?>">
                                <input type="hidden" id="anh_dai_dien_preview" value="<?php echo $anh; ?>">
                                <div class="image-container">
                                    <img id="anh_dai_dien_preview_img" src="../assets/img/<?php echo $anh; ?>" alt="Ảnh đại diện" class="uploaded-image img-thumbnail img-fluid img-responsive"/>
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
</body>
</html>
<?php } ?>