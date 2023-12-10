<?php
include '../config/database.php'; // Import file database.php
 ?>
    <?php
    $db = new Database();
    $id = $_GET['id'];

// Xóa dữ liệu từ cơ sở dữ liệu
    $sql = "DELETE FROM phong WHERE id=$id";

    if ($db->delete($sql) === TRUE) {
        header("Location: list-room.php");
    } else {
        echo "Lỗi: " . $sql . "<br>" . $db->getError();
    }
    ?>