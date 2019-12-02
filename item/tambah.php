<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH</title>
</head>
<body>
	<form action="proses_tambah.php" method="POST">
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
		PRICE : <br>
		<input type="text" name="price"><br>
		STATUS : <br>
		<input type="radio" name="status" value="1">aktif
		<input type="radio" name="status" value="0">tidak aktif<br>
		<input type="submit" name="submit">
	</form>
</body>
</html>