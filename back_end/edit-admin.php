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
    $sql = "SELECT * FROM client WHERE id_client = $id";
    $result = $db->select($sql);
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        $ma_sinh_vien = $row["ma_sinh_vien"];
        $ten_nguoi_dung = $row["ten_nguoi_dung"];
        $ho_ten = $row["ho_ten"];
        $mat_khau = $row["mat_khau"];

        $email = $row["email"];
        $so_dien_thoai = $row["so_dien_thoai"];
        $trang_thai= $row["trang_thai"];
        $anh_dai_dien = $row['anh_dai_dien'];

    } else {
        echo "Không tìm thấy dữ liệu.";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $newma_sinh_vien = $_POST["ma_sinh_vien"];
        $newten_nguoi_dung= $_POST["ten_nguoi_dung"];
        $newho_ten = $_POST["ho_ten"];
        $newmat_khau = $_POST["mat_khau"];
        $newemail = $_POST["email"];
        $newso_dien_thoai = $_POST["so_dien_thoai"];
        $newtrang_thai= $_POST["trang_thai"];

        // Xử lý ảnh đại diện mới
        if ($_FILES["anh_dai_dien"]["name"] != "") {
            $newanh_dai_dien = $_FILES["anh_dai_dien"]["name"];
            $newanh_dai_dien_tmp = $_FILES["anh_dai_dien"]["tmp_name"];
            move_uploaded_file($newanh_dai_dien_tmp, "../assets/img/$newanh_dai_dien");
        } else {
            // Giữ nguyên ảnh đại diện cũ
            $newanh_dai_dien = $anh_dai_dien;
        }
        $hashed_password = password_hash($newmat_khau, PASSWORD_DEFAULT);

        // ... (your existing code)

        // Thực hiện câu lệnh SQL sửa phòng
        $sql = "UPDATE client SET 
                    ma_sinh_vien='$newma_sinh_vien',
                    ten_nguoi_dung='$newten_nguoi_dung', 
                    ho_ten='$newho_ten', 
                    mat_khau='$hashed_password', 
                    email='$newemail', 
                    so_dien_thoai='$newso_dien_thoai', 
                    trang_thai='$newtrang_thai', 
                    anh_dai_dien='$newanh_dai_dien'
                    
                    WHERE id_client=$id";

        if ($db->update($sql)) {
            echo '<script>alert("Sửa tài khoản thành công!"); window.location.href = "list-user.php";</script>';
            exit(); // Đảm bảo dừng thực thi mã nguồn sau khi chuyển hướng
        } else {
            echo '<script>alert("Lỗi khi sửa tài khoản' . $db->getError() . '");</script>';
        }
    }?>


    <div class="col-md-9">
        <div class="col-12 container-content">
            <div class="header-content pb-3">
                <div class="title-content">
                    <h3 class="m-0 strong">Sửa sinh viên</h3>
                    <div class="span">Quản lý sinh viên</div>
                </div>
            </div>
            <div class="content-add-room col-12">
                <form action="edit-admin.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data">
                    <!-- ... (your existing form fields) -->
                    <div class="row">
                        <div class="col-12 col-md-6 p-2">
                            <label for="ma_sinh_vien">Mã sinh viên</label>
                            <input type="text" id="ma_sinh_vien" name="ma_sinh_vien" class="form-control" value="<?php echo $ma_sinh_vien; ?>" required>
                        </div>
                        <div class="col-12 col-md-6 p-2">
                            <label for="ten_nguoi_dung">Tên người dùng</label>
                            <input type="text" id="ten_nguoi_dung" name="ten_nguoi_dung" class="form-control" value="<?php echo $ten_nguoi_dung; ?>" required>
                        </div>
                        <div class="col-12 col-md-4 p-2">
                            <label for="ho_ten">Họ tên</label>
                            <input type="text" id="ho_ten" name="ho_ten" class="form-control" value="<?php echo $ho_ten; ?>" required>
                        </div>
                        <div class="col-12 col-md-4 p-2">
                            <label for="mat_khau">Mật khẩu</label>
                            <input type="password" id="mat_khau" name="mat_khau" class="form-control" value="<?php echo $mat_khau; ?>" required>
                        </div>
                        <div class="col-12 col-md-4 p-2">
                            <label for="trang_thai">Trạng thái:</label>
                            <select id="trang_thai" name="trang_thai" class="form-control" required>
                                <option value="san_sang" <?php echo ($trang_thai == 'sắn sàng') ? 'selected' : ''; ?>>sẵn sàng</option>
                                <option value="bi_khoa" <?php echo ($trang_thai == 'bị khóa') ? 'selected' : ''; ?>>bị khóa</option>
                            </select>
                        </div>
                        <div class="col-12 col-md-6 p-2">
                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" class="form-control" value ="<?php echo $email; ?>" required>

                        </div>
                        <div class="col-12 col-md-6 p-2">
                            <label for="so_dien_thoai">Số điện thoại</label>
                            <input type="text" id="so_dien_thoai" name="so_dien_thoai" class="form-control" value ="<?php echo $so_dien_thoai; ?>" required>
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