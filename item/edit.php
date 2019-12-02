<html>
	<head>
		<title>mengedit data</title>
	</head>
	<body>
		<?php
		include 'koneksi.php';
		$ID  		=$_GET['id'];
		$sql    ="select * from item where id_item = '$ID'";
		$result =mysqli_query($connect,$sql);
		$row=mysqli_fetch_assoc($result);
		?>
		<form action="proses_edit.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID;?>">
			<select name="kategori">
			<?php
			include 'koneksi.php';
			$sql ='select * from kategori';
			$result=mysqli_query($connect,$sql);
			while ($row = mysqli_fetch_assoc($result)) {
				?>
				<option value="<?php echo $row['id_kategori']?>">
					<?php echo $row['name_kategori']?>
				</option>
				<?php
			}
			?>
		</select><br>
		NAME : <br>
		<input type="text" name="name"><br>
		Price : <br>
		<input type="text" name="price"><br>
		STATUS : <br>
		<input type="radio" name="status" value="1">aktif
		<input type="radio" name="status" value="0">tidak aktif<br>
		<input type="submit" name="submit">
		</form>
	</body>
</html>
