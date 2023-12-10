
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
    $id = $_POST["id"];
    $ten_dv = $_POST["ten_dv"];
    $gia = $_POST["gia"];
    $trangthai = $_POST["trangthai"];
 
    $nguoitao = $_SESSION['username'];

      // Xử lý ảnh đại diện
      $anh = $_FILES["anh"]["name"];
      $anh_dai_dien_tmp = $_FILES["anh"]["tmp_name"];
      move_uploaded_file($anh_dai_dien_tmp, "../assets/img/$anh");

        // Thực hiện câu lệnh SQL thêm dịch vụ
        $sql = "INSERT INTO dichvu (id,ten_dv,gia,trangthai, anh, nguoitao)
    VALUES ('$id', '$ten_dv', '$gia', '$trangthai','$anh', '$nguoitao')";

    if ($db->insert($sql)) {
        echo '<script>alert("Thêm dịch vụ thành công!"); window.location.href = "list-dv.php";</script>';
        exit(); // Đảm bảo dừng thực thi mã nguồn sau khi chuyển hướng
    } else {
        echo '<script>alert("Lỗi khi thêm dịch vụ: ' . $db->getError() . '");</script>';    }
    }
    ?>
    <div class="col-md-9">
        <div class="col-12 container-content">
            <div class="header-content pb-3">
                <div class="title-content">
                    <h3 class="m-0 strong">Thêm dịch vụ</h3>
             
                </div>
            </div>
            <div class="content-add-room col-12">
                <form action="them-dv.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                   
                        <div class="col-12 col-md-6 p-2">
                            <label for="ten_dv">Tên dịch vụ</label>
                            <input type="text" id="ten_dv" name="ten_dv" class="form-control" required>
                        </div>
                       
                        <div class="col-12 col-md-4 p-2">
                            <label for="gia">Giá dịch vụ</label>
                            <input type="text" id="gia" name="gia" class="form-control" required>
                        </div>

                        <div class="col-12 col-md-4 p-2">
                            <label for="trangthai">Trạng thái</label>
                            <input type="text" id="trangthai" name="trangthai" class="form-control" required>
                        </div>

                      
                        
                        <div class="col-12 p-2">
                            <label>Ảnh đại diện:</label>
                            <div class="flex-container">
                                <!-- Trong HTML -->
                                <div class="drag-area-1 drag-area w-full rounded-2xl border-2 border-dashed items-center">
                                    <header class="text-lg text-black-50">Kéo Thả</header>
                                    <span class="my-3 text-sm text-black-50">hoặc</span>
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
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
        <script src="https://cdn.ckeditor.com/4.16.2/full/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'mo_ta' );
            CKEDITOR.replace( 'noi_dung' );
        </script>
    </body>
    </html>
<?php } ?>

