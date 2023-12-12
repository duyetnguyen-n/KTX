<?php
session_start();
if(empty($_SESSION['username'])){
    var_dump($_SESSION['username']);
    header("location: dang_nhap.html");
} else{ ?>
    <?php
    include 'header.php';
    include 'side-bar.php';
    ?>
        <div class="col-md-9">
            <div class="col-12 container-content">
                <div class="header-content pb-3">
                    <div class="title-content">
                        <h3 class="m-0 strong">Danh sách khu vực</h3>
                        <div class="span">Quản lý khu vực của bạn!</div>
                    </div>
                    <a href="add-kv.php" class="button-add">
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
<!--                                    <span><img src="../assets/img/closes.svg" alt="img"></span>-->
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
                        // Lấy dữ liệu từ cơ sở dữ liệu
                        $sql = "SELECT * FROM khuvuc";
                        $result = $db->select($sql);
                        ?>
                        <?php if ($result->num_rows > 0) { ?>
                            <table class="table-data">
                                <tr>
                                    <th>
                                        <input type="checkbox" name="check_all">
                                    </th>
                                  
                                    <th>Tên khu vực</th>
                                    <th>Ngày tạo</th>
                                    <th>Người tạo</th>
                                    <th>Thao Tác</th>
                                </tr>
                                <!--    Hiển thị dữ liệu từ cơ sở dữ liệu-->
                                <?php while ($row = $result->fetch_assoc()) { ?>
                                    <tr>
                                        <td><input type="checkbox" name="check_daughter"></td>
                                        <td class="d-flex align-items-center"><img class="img-fluid img-responsive mr-2" height="10" width="10" src="../assets/img/<?php echo $row['anh']; ?>" alt="Dich vu ki tuc xa"> <?php echo $row['tenkhu']; ?></td>
                                        <td><?php echo $row['ngaytao']; ?></td>
                                        <td><?php echo $row['nguoitao'] ?></td>
                                        <td class="d-flex thao-tac">
                                            <a class="me-3" href="../front_end/dichvu-detail.php?id=<?php echo $row['id'];?>">
                                                <img src="../assets/img/eye.svg" alt="img" class="img-fluid">
                                            </a>
                                            <a class="me-3" href="edit-kv.php?id=<?php echo $row['id']; ?>">
                                                <img src="../assets/img/edit.svg" alt="img" class="img-fluid icon-edit">
                                            </a>
                                            <a class="confirm-text" href="delete-kv.php?id=<?php echo $row['id']; ?>">
                                                <img src="../assets/img/delete.svg" alt="img" class="img-fluid">
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </table>
                        <?php } else {
                            echo "Không có dữ liệu.";
                        } ?>
                        <?php
                        ?>
                    </div>
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
        });
    </script>
    </body>
    </html>

<?php } ?>