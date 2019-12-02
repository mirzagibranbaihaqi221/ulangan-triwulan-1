<?php
include 'koneksi.php';
$ID =$_POST['id'];
$kategori =$_POST['kategori'];
$name =$_POST['name'];
$price =$_POST['price'];
$status =$_POST['status'];

$sql = "UPDATE item SET kategori_id ='$kategori',name='$name',price='$price',status='$status' WHERE id_item = '$ID'" ;
	mysqli_query($connect,$sql);
	header('location:index.php')
?>