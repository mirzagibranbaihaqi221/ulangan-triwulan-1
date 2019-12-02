<?php
include 'koneksi.php';
$ID  = $_GET['id'];

$sql = "DELETE FROM item WHERE id_item ='$ID'";
mysqli_query($connect,$sql);
header('location:index.php');
?>
