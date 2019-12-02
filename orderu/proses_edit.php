<?php
include 'koneksi.php';
$ID =$_POST['id'];
$item =$_POST['item'];
$table_number =$_POST['table_number'];
$qty	  = $_POST['qty'];
	$sqlt ="select price from item where id_item='$item'";
	$result =mysqli_query($connect,$sqlt);
	$row =mysqli_fetch_assoc($result);
	$total=$qty * $row['price'];

$sql = "UPDATE orderu SET item_id ='$item',table_number='$table_number',qty='$qty' ,total='$total' WHERE id = '$ID'" ;
	mysqli_query($connect,$sql);
	header('location:index.php')
?>