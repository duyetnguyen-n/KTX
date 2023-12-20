<?php
session_start();

if (empty($_SESSION['username'])) {
    var_dump($_SESSION['username']);
    header("location: dang_nhap.html");
} else {
    include 'header.php';
    include 'side-bar.php';
    ?>
    <div class="col-md-9 main-content">
        <div class="col-12 container-content">
            <div class="header-content pb-3">
                <div class="title-content">
                    <h3 class="m-0 strong">Danh sách thanh toán</h3>
                    <div class="span">Quản lý thanh toán!</div>
                </div>
                <a href="add-rooms.php" class="button-add">
                    <i class="fas fa-plus"></i>
                    <span>Thêm mới</span>
                </a>
            </div>
            <div class="content-add-room col-12">
                <?php
                include '../config/database.php';
                ?>
                <div class="table-top d-flex justify-content-between mb-4">
                    <div class="search-set d-flex align-items-center mr-2">
                        <div class="search-path mr-3">
                            <a class="btn btn-filter" id="filter_search">
                                <img src="../assets/img/filter.svg" alt="img">
                            </a>
                        </div>
                        <div class="search-input">
                            <a class="btn btn-searchset"><img src="../assets/img/search-white.svg" alt="img"></a>
                            <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                <label>
                                    <input type="search" id="searchInput" class="form-control form-control-sm" placeholder="Search..." aria-controls="DataTables_Table_0">
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="wordset d-flex align-items-center">
                        <ul class="d-flex">
                            <li class="mr-2">
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="pdf" aria-label="pdf"><img src="../assets/img/pdf.svg" alt="img"></a>
                            </li>
                            <li class="mr-2">
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="excel" aria-label="excel"><img src="../assets/img/excel.svg" alt="img"></a>
                            </li>
                            <li class="mr-2">
                                <a data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="print" aria-label="print"><img src="../assets/img/printer.svg" alt="img"></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="contents">
                    <?php

                        $db = new Database();
                        $sqlthanhtoan = "SELECT * FROM thanh_toan";
                        $resultthanhtoan = $db->select($sqlthanhtoan);
                        ?>

                        <?php if ($resultthanhtoan->num_rows > 0) { ?>
                            <table class="table-data">
                                <tr>
                                    <th><input type="checkbox" name="check_all"></th>
                                    <th>Khách hàng</th>
                                    <th>Ngày thanh toán</th>
                                    <th>Tổng tiền</th>
                                    <th>Phương thức</th>
                                    <th>Trạng thái</th>
                                    <th>Người tạo</th>
                                    <th>Thao Tác</th>
                                </tr>

                                <?php while ($row = $resultthanhtoan->fetch_assoc()) {
                                    $user = $row['tendangnhap'];
                                    $checknguoidung = "SELECT * FROM client WHERE ten_nguoi_dung='{$user}'";
                                    $rschecknguoidung = $db->select($checknguoidung);
                                    $rsc = $rschecknguoidung->fetch_assoc();
                                    $anh_dai_dien = $rsc['anh_dai_dien'];
                                    ?>

                                    <tr>
                                        <td><input type="checkbox" name="check_daughter"></td>
                                        <td class="d-flex align-items-center">
                                            <img class="img-fluid img-responsive mr-2" height="10" width="10" src="../assets/img/<?php echo $rsc['anh_dai_dien']; ?>" alt="Phong ki tuc xa">
                                            <?php echo $row['tendangnhap']; ?>
                                        </td>
                                        <td><?php echo $row['ngay_thanh_toan']; ?></td>
                                        <td><?php echo $row['tong_so_tien']; ?></td>
                                        <td>
                                            <?php if ($row['phuong_thuc_thanh_toan'] === "Paid") { ?>
                                                <div class="boxs-paid">
                                                    <?php echo $row['phuong_thuc_thanh_toan']; ?>
                                                </div>
                                            <?php } else if ($row['phuong_thuc_thanh_toan'] === "Loan") { ?>
                                                <div class="boxs-loan">
                                                    <?php echo $row['phuong_thuc_thanh_toan']; ?>
                                                </div>
                                            <?php } else { ?>
                                                <div class="boxs-due">
                                                    <?php echo $row['phuong_thuc_thanh_toan']; ?>
                                                </div>
                                            <?php } ?>

                                        </td>
                                        <td>
                                            <?php if ($row['trang_thai'] === "Pending") { ?>
                                                <div class="boxs-pending">
                                                    <?php echo $row['trang_thai']; ?>
                                                </div>
                                            <?php } else { ?>
                                                <div class="boxs-completed">
                                                    <?php echo $row['trang_thai']; ?>
                                                </div>
                                            <?php } ?>

                                        </td>
                                        <td><?php echo $row['nguoi_tao']; ?></td>
                                        <td class="d-flex thao-tac">
                                            <a class="me-3 d-flex align-items-center" href="process-thanh-toan.php?id=<?php echo $id; ?>">
                                                <img src="../assets/img/eye.svg" alt="img" class="img-fluid">
                                            </a>
                                            <a class="me-3" href="edit-room.php?id=<?php echo $row['id']; ?>">
                                                <img src="../assets/img/edit.svg" alt="img" class="img-fluid icon-edit">
                                            </a>
                                            <a class="confirm-text" href="delete-paid.php?id=<?php echo $row['id']; ?>">
                                                <img src="../assets/img/delete.svg" alt="img" class="img-fluid">
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        <?php } else {
                            echo "Không có dữ liệu.";
                        } ?>
                </div>
            </div>
        </div>
    </div>

    <!-- Thêm mã JavaScript cho tìm kiếm -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Lấy tham chiếu đến ô input tìm kiếm
            var searchInput = document.getElementById('searchInput');

            // Lắng nghe sự kiện khi giá trị của ô input thay đổi
            searchInput.addEventListener('input', function () {
                // Lấy giá trị tìm kiếm từ ô input
                var searchValue = searchInput.value.toLowerCase();

                // Lấy danh sách các dòng trong bảng
                var rows = document.querySelectorAll('.table-data tr');

                // Lặp qua từng dòng và ẩn hiện dựa trên kết quả tìm kiếm
                rows.forEach(function (row) {
                    var rowData = row.textContent.toLowerCase();
                    if (rowData.includes(searchValue)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });

            // Thay đổi chiều cao của main content khi cửa sổ thay đổi kích thước
            $(window).resize(function () {
                var windowHeight = $(window).height();
                $('.main-content').css('height', windowHeight + 'px');
            });

            // Kích thước ban đầu của main content
            var initialHeight = $(window).height();
            $('.main-content').css('height', initialHeight + 'px');
        });
    </script>
    </body>
    </html>

<?php } ?>
