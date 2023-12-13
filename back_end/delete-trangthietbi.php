<?php
include '../config/database.php'; // Import file database.php
 ?>
    <?php
    $db = new Database();
    $id = $_GET['id'];

// Xóa dữ liệu từ cơ sở dữ liệu
    $sql = "DELETE FROM trangthietbi WHERE id='". $_GET['id'] ."'";

    if ($db->delete($sql) === TRUE) {
        header("Location: list-trangthietbi.php");
    } else {
        echo "Lỗi: " . $sql . "<br>" . $db->getError();
    }
    ?>  
    