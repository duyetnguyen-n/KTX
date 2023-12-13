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
    /* $maloaitrangthietbi = ; */

    // Lấy dữ liệu từ cơ sở dữ liệu
    $sql = "SELECT * FROM loaitrangthietbi WHERE maloaitrangthietbi = '". $_GET['id'] ."'";
    $result = $db->select($sql);
    /* if ($result->num_rows > 0) { */
        $row = $result->fetch_assoc();
        $tenloaitrangthietbi = $row["tenloaitrangthietbi"];
        $soluong = $row["soluong"];
        $ngaytao = $row["ngaytao"];
        $nguoitao = $row["nguoitao"];
        $anh = $row["anh"];
    /* } else {
        echo "Không tìm thấy dữ liệu.";
    } */

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $newtenloaitrangthietbi = $_POST["tenloaitrangthietbi"];

        // Xử lý ảnh đại diện mới
        if ($_FILES["anh"]["name"] != "") {
            $newanh = $_FILES["anh"]["name"];
            $newanh_tmp = $_FILES["anh"]["tmp_name"];
            move_uploaded_file($newanh_tmp, "../assets/img/$newanh");
        } else {
            // Giữ nguyên ảnh đại diện cũ
            $newanh = $anh;
        }

        // Thực hiện câu lệnh SQL sửa dịch vụ
        $sql = "UPDATE loaitrangthietbi SET 
            tenloaitrangthietbi='$newtenloaitrangthietbi',
            soluong='$newsoluong', 
            anh='$newanh'
            WHERE maloaitrangthietbi='$maloaitrangthietbi'";

        if ($db->update($sql)) {
            echo '<script>alert("Sửa loại trang thiết bị thành công!"); window.location.href = "list-loaitrangthietbi.php";</script>';
            exit(); // Đảm bảo dừng thực thi mã nguồn sau khi chuyển hướng
        } else {
            echo '<script>alert("Lỗi khi sửa loại thiết bị: ' . $db->getError() . '");</script>';
        }
    } ?>

    <div class="col-md-9">
        <div class="col-12 container-content">
            <div class="header-content pb-3">
                <div class="title-content">
                    <h3 class="m-0 strong">Chỉnh sửa trang thiết bị</h3>
                    <div class="span">Quản lý loại trang thiết bị của bạn</div>
                </div>
            </div>
            <div class="content-add-room col-12">
                <form action="edit-loaitrangthietbi.php?id=<?php echo $maloaitrangthietbi; ?>" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-12 col-md-6 p-2">
                            <label for="tenloaitrangthietbi">Tên loại trang thiết bị</label>
                            <input type="text" id="tenloaitrangthietbi" name="tenloaitrangthietbi" class="form-control" value="<?php echo $tenloaitrangthietbi; ?>" required>
                        </div>
                        <div class="col-12 col-md-6 p-2">
                            <label for="soluong">Số lượng</label>
                            <input type="text" id="soluong" name="soluong" class="form-control" value="<?php echo $soluong; ?>" required>
                        </div>
                        
                        <div class="col-12 p-2">
                            <label>Ảnh đại diện:</label>
                            <div class="flex-container">
                                <div class="drag-area-1 drag-area w-full rounded-2xl border-2 border-dashed items-center">
                                    <header class="text-lg text-black-50">Kéo và Thả để Tải ảnh lên</header>
                                    <span class="my-3 text-sm text-black-50">Hoặc</span>
                                    <div class="but-add-image">Chọn ảnh</div>
                                    <input type="file" name="anh" hidden>
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
