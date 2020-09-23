 <?php
//Connect To Databases => funtions
require 'function.php';
//Query data Tabel Film
$elektro = query("SELECT * FROM elektronik4");
 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Daftar barang</title>
</head>
<body> 
	<h2 align="center">Daftar Barang Terlaris</h2>
	
	<center><button><a href="tambah.php">Tambahkan Data Barang</a></button></center>
		<br><br>
	
	<form action="" method="post">
		<center><input type="text" name="keyword" size="45" autofocus placeholder="Masukan keyword pencarian..." autocomplete="off">
		<button type="submit" name="cari">Cari!</button></center>
	</form>
	<br>
	<table align="center" border="1"  cellspacing="0" cellpadding="10">
			<tr>
				<th>#</th>
				<th>Opsi</th>
				<th>Foto</th>
				<th>Barang</th>
				<th>Unit</th>
				<th>Harga</th>
				<th>Penjualan</th>
			</tr>
			<?php $i = 1; ?>	
				<?php foreach($elektro as $b) : ?>
			<tr>
				<td><?= $i++; ?></td>
				<td><a href="ubah.php?id=<?= $b["id"]; ?> ">Ubah</a> | 
					<a href="hapus.php?id=<?= $b["id"]; ?>" onClick="return confirm('Yakin akan dihapus?')">Hapus</a>
				</td>
				<td><img src="../Tugas3/assets/img/<?= $b['Foto']; ?>"></td>
				<td><?= $b['Barang']; ?></td>
				<td><?= $b['Unit']; ?></td>
				<td><?= $b['Harga']; ?></td>
				<td><?= $b['Penjualan']; ?></td>
			</tr>
				<?php endforeach; ?>
	</table>
	
	
</body>
</html> 