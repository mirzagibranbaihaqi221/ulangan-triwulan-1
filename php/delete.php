<?php
include 'koneksi.php';
$ID  = $_GET['id'];

$sql = "DELETE FROM kategori WHERE id_kategori ='$ID'";
mysqli_query($connect,$sql);
header('location:index.php');
?>
