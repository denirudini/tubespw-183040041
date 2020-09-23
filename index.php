 <?php
//Connect To Databases => funtions
require 'funtions.php';
//Query data Tabel Film
$elektro = query("SELECT * FROM elektronik4");


if( isset($_POST["cari"]) ) {
	$elektro = cari($_POST["keyword"]);
}
 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Daftar Barang</title>
</head>
<body> 
	<h2 align="center">Daftar Data Barang Elektronik</h2>
	
	<center><button><a href="tambah.php">Tambahkan Barang</a></button></center>
		<br><br>
	<center><button type="submit"><a href="halaman_user.php">Logout</a></button></center>
	<br>
	<form action="" method="post">
		<center><input type="text" name="keyword" size="45" autofocus placeholder="Masukan keyword pencarian..." autocomplete="off">
		<button type="submit" name="cari">Cari!</button></center>
	</form>
	<br>
	<table align="center" border="1"  cellspacing="0" cellpadding="10">
			<tr>
				<th>no.</th>
				<th>Barang</th>
				<th>Unit</th>
				<th>Harga</th>
				<th>Penjualan</th>
				<th>Foto</th>
			</tr>
			<?php $i = 1; ?>	
				<?php foreach($elektro as $brg) : ?>
			<tr>
				<td><?= $i++; ?></td>
				<td><a href="ubah.php?id=<?= $brg["id"]; ?> ">Ubah</a> | 
					<a href="hapus.php?id=<?= $brg["id"]; ?>" onClick="return confirm('Yakin akan dihapus?')">Hapus</a>
				</td>
				<td><img src="assets/img/<?= $brg['Foto']; ?>"></td>
				<td><?= $brg['Barang']; ?></td>
				<td><?= $brg['Unit']; ?></td>
				<td><?= $brg['Harga']; ?></td>
				<td><?= $brg['Penjualan']; ?></td>
			</tr>
				<?php endforeach; ?>
	</table>
	
	
</body>
</html> 