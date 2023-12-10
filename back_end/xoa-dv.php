<?php
include '../config/database.php'; // Import file database.php
 ?>
    <?php
    $db = new Database();
    $id = $_GET['id'];

// Xóa dữ liệu từ cơ sở dữ liệu
    $sql = "DELETE FROM dichvu WHERE id=$id";

    if ($db->delete($sql) === TRUE) {
        header("Location: list-dv.php");
    } else {
        echo "Lỗi: " . $sql . "<br>" . $db->getError();
    }
    ?>  