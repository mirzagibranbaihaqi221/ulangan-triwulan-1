<?php 
$servername = "localhost";
	$username   = "root";
	$password   = "1234";
	$dbname     = "point_of_sale";
	
	$connect = mysqli_connect($servername,$username,$password,$dbname);
	
	if (!$connect){
		die("connection failed: " . mysqli_connect_error());
	}

 ?>