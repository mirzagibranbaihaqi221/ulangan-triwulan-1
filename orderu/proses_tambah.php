<?php
	include 'koneksi.php';
	$item = $_POST['item'];
	$table_number	  = $_POST['table_number'];
	$qty	  = $_POST['qty'];
	$sqlt ="select price from item where id_item='$item'";
	$result =mysqli_query($connect,$sqlt);
	$row =mysqli_fetch_assoc($result);
	$total=$qty * $row['price'];

	$sql ="insert into orderu (item_id,table_number,qty,total) values ('$item','$table_number','$qty','$total')";
	mysqli_query($connect,$sql);
	header('location:index.php')
?>