<html>
	<head>
		<title>mengedit data</title>
	</head>
	<body>
		<?php
		include 'koneksi.php';
		$ID  		=$_GET['id'];
		$sql    ="select * from kategori where id_kategori = '$ID'";
		$result =mysqli_query($connect,$sql);
		$row =mysqli_fetch_assoc($result);
		?>
		<form action="proses_edit.php" method="POST">
			<input type="hidden" name="id_kategori" value="<?php echo $ID;?>">
			NAMA : <br>
			<input type="text" name="name_kategori" value="<?php echo $row['name_kategori']?>">
			<br>
			<input type="submit" value="submit">
		</form>
	</body>
</html>
