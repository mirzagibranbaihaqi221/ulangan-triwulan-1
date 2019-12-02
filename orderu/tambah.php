<!DOCTYPE html>
<html>
<head>
	<title>TAMBAH</title>
</head>
<body>
	<form action="proses_tambah.php" method="POST">
		<select name="item">
			<?php
			include 'koneksi.php';
			$sql ='select * from item';
			$result=mysqli_query($connect,$sql);
			while ($row = mysqli_fetch_assoc($result)) {
				?>
				<option value="<?php echo $row['id_item']?>">
					<?php echo $row['name']?>
				</option>
				<?php
			}
			?>
		</select><br>
		TABLE NUMBER : <br>
		<input type="text" name="table_number"><br>
		QTY : <br>
		<input type="text" name="qty"><br>
		<input type="submit" name="submit" >
	</form>
</body>
</html>