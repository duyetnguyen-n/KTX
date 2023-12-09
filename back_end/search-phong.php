<?php
session_start();
if(empty($_SESSION['username']) || empty($_SESSION['password'])){
    var_dump($_SESSION['username']);
    header("location: dang_nhap.php");
} else{ ?>
    <?php
    $db = new Database();


// Lấy giá trị từ POST
    $searchTerm = $_POST['searchTerm'];

// Tạo câu truy vấn SQL
    $sql = "SELECT * FROM phong WHERE id = '$searchTerm'";

// Thực hiện truy vấn
    $result = $db->select($sql);

    if ($result->num_rows > 0) {?>
        <table class="table-data">
            <tr>
                <th>
                    <input type="checkbox" name="check_all">
                </th>
                <th>Tên Phòng</th>
                <th>Giá</th>
                <th>Sức Chứa</th>
                <th>Tầng</th>
                <th>Trạng Thái</th>
                <th>Tạo Bởi</th>
                <th>Thao Tác</th>
            </tr>
            <!--    Hiển thị dữ liệu từ cơ sở dữ liệu-->
            <?php while ($row = $result->fetch_assoc()) { ?>
                <tr>
                    <td><input type="checkbox" name="check_daughter"></td>
                    <td class="d-flex align-items-center"><img class="img-fluid img-responsive mr-2" height="10" width="10" src="../assets/img/<?php echo $row['anh_dai_dien']; ?>" alt="Phong ki tuc xa"> <?php echo $row['ten_phong']; ?></td>
                    <td><?php echo $row['gia']; ?><span>VND</span></td>
                    <td><?php echo $row['suc_chua']; ?></td>
                    <td><span class="mr-1">Tầng</span><?php echo $row['id_tang']; ?></td>
                    <td><?php echo $row['trang_thai']; ?></td>
                    <td><?php echo $row['nguoi_tao'] ?></td>
                    <td class="d-flex thao-tac">
                        <a class="me-3" href="../front_end/room-detail.php?id=<?php echo $row['id'];?>">
                            <img src="../assets/img/eye.svg" alt="img" class="img-fluid">
                        </a>
                        <a class="me-3" href="edit-room.php?id=<?php echo $row['id']; ?>">
                            <img src="../assets/img/edit.svg" alt="img" class="img-fluid icon-edit">
                        </a>
                        <a class="confirm-text" href="delete-room.php?id=<?php echo $row['id']; ?>">
                            <img src="../assets/img/delete.svg" alt="img" class="img-fluid">
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </table>
        <?php
    } else {
        echo "Không có dữ liệu.";
    }

    ?>
<?php } ?>