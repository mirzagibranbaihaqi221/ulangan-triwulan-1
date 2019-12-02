<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>
	<?php include '../tampilan/tampilan.html'; ?>
	<div id="main">
<a href="tambah.php">tambah data</a>
			<br>
			<table border="1">
				<tr>
					<td>NO</td>
					<td>TABLE NUMBER</td>
					<td>ITEM</td>
					<td>QTY</td>
					<td>TOTAL</td>
					<td>DISKON</td>
					<td>AFTER DISKON</td>
					<td>TINDAKAN</td>
				</tr>
				<?php
				
				include 'koneksi.php';
				function tambah($id,$koneksi){
					$sql ="select * from item where id_item='$id'";
					$result =mysqli_query($koneksi,$sql);
					$row = mysqli_fetch_assoc($result);
					return $row ['name'];
				}
				$nomor  = 1;
				$sql    = "select * from orderu";
				$result = mysqli_query($connect,$sql);
				if(mysqli_num_rows($result)>0){
					while ($row = mysqli_fetch_assoc($result)){
					echo "
					<tr>
						<td>".$nomor++."</td>
						<td>".$row['table_number']."</td>
						<td>".tambah($row['item_id'],$connect)."</td>
						<td>".$row['qty']."</td>
						<td>".$row['total']."</td>
						<td>".(($row['total']>100000)?'20%':'-')."</td>
						<td>".diskon($row['total'])."</td>
						<td>
							<a href='edit.php?id=".$row['id']."'>Edit</a>
							<a href='delete.php?id=".$row['id']."'onclick='javascript:return confirm(\"anda serius ingin menghapus data ini\")'>Hapus</a>
						</td>
					</tr>
					";
				}
			}
			function diskon($d){
				$diskon=$d*20/100;
				$diskon2=$d-$diskon;
				if ($d>100000) {
					return $diskon2;
				}
				else{
					return $d;
				}
			}
				?>
			
			</table>
			
</div>
</body>
</html>