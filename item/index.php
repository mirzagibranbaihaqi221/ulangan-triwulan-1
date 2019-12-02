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
					<td>KATEGORI</td>
					<td>NAME</td>
					<td>PRICE</td>
					<td>STATUS</td>
					<td>TINDAKAN</td>
				</tr>
				<?php
				include 'koneksi.php';
				function tambah($id,$koneksi){
					$sql ="select * from kategori where id_kategori='$id'";
					$result =mysqli_query($koneksi,$sql);
					$row = mysqli_fetch_assoc($result);
					return $row ['name_kategori'];
				}
				function status($id){
					if($id){return "aktif";}else{return "tidak aktif";}
				}
				$nomor  = 1;
				$sql    = "select * from item";
				$result = mysqli_query($connect,$sql);
				if(mysqli_num_rows($result)>0){
					while ($row = mysqli_fetch_assoc($result)){
					echo "
					<tr>
						<td>".$nomor++."</td>
						<td>".tambah($row['kategori_id'],$connect)."</td>
						<td>".$row['name']."</td>
						<td>".$row['price']."</td>
						<td>".status($row['status']). "</td>
						<td>
							<a href='edit.php?id=".$row['id_item']."'>Edit</a>
							<a href='delete.php?id=".$row['id_item']."'onclick='javascript:return confirm(\"anda serius ingin menghapus data ini\")'>Hapus</a>
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
