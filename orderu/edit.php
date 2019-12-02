<html>
	<head>
		<title>mengedit data</title>
	</head>
	<body>
		<?php
		include 'koneksi.php';
		$ID  		=$_GET['id'];
		$sql    ="select * from orderu where id = '$ID'";
		$result =mysqli_query($connect,$sql);
		$row=mysqli_fetch_assoc($result);
		?>
		<form action="proses_edit.php" method="POST">
			<input type="hidden" name="id" value="<?php echo $ID;?>">
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
		<input type="submit" name="submit">
		</form>
	</body>
</html>
