<?php
	include 'koneksi.php';
	$kategori = $_POST['kategori'];
	$name	  = $_POST['name'];
	$price	  = $_POST['price'];
	$status   = $_POST['status'];
	$sql ="insert into item (kategori_id,name,price,status) values ('$kategori','$name','$price','$status')";
	mysqli_query($connect,$sql);
	header('location:index.php')
?>