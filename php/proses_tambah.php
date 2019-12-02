<?php
include 'koneksi.php';
$nama = $_POST['name_kategori'];


$sql = "insert into kategori (name_kategori)
values ('$nama')";
mysqli_query($connect,$sql);
header('location:index.php');
?>