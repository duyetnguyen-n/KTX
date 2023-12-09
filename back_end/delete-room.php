<?php
session_start();

include '../config/database.php'; // Import file database.php

if(empty($_SESSION['username']) || empty($_SESSION['password'])){
    var_dump($_SESSION['username']);
    header("location: dang_nhap.php");
} else{ ?>
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
<?php } ?>