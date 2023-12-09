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

</body>
</html>

<?php } ?>