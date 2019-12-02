<?php
include 'koneksi.php';
$ID           =$_POST['id_kategori'];
$nama         =$_POST['name_kategori'];
$sql = "UPDATE kategori SET name_kategori = '$nama' WHERE id_kategori = '$ID'";
mysqli_query($connect,$sql);
header('location:index.php');
?>
