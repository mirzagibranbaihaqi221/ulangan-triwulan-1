<html>
	<head>
		<title>tugas database</title>
	</head>
		<body>
			<?php include '../tampilan/tampilan.html'; ?>
			<div id="main">
			<a href="tambah.php">tambah data</a>
			<br>
			<table border="1">
				<tr>
					<td>NO</td>
					<td>NAMA</td>
					<td>TINDAKAN</td>
					
				</tr>
				<?php
				
				include 'koneksi.php';
				$nomor  = 1;
				$sql    = "select * from kategori";
				$result = mysqli_query($connect,$sql);
				if(mysqli_num_rows($result)>0){
					while ($row = mysqli_fetch_assoc($result)){
					echo "
					<tr>
						<td>".$nomor++."</td>
						<td>".$row['name_kategori']."</td>
						<td>
							<a href='edit.php?id=".$row['id_kategori']."'>Edit</a>
							<a href='delete.php?id=".$row['id_kategori']."'onclick='javascript:return confirm(\"anda serius ingin menghapus data ini\")'>Hapus</a>
						</td>
					</tr>
					";
				}
			}
				?>
			</table>
			</div>
		</body>
</html>
