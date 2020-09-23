<?php
if(!isset($_GET['id'])) {
	header("Location: indexs.php");
	exit;
}

require 'funtions.php';
$id = $_GET['id'];

$brg = query("SELECT * FROM elektronik4 WHERE id = $id")[0];
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>183040041</title>
</head>
<style> 

</style>
<body>
<h1>Detail Film</h1>
   <div class="content">
           <div class="gambar">
                   <p><img src="assets/img/<?= $brg['Foto']; ?>">
           </div>
		<div class="desc">
            <p class="nama"><?= $brg['Barang']; ?></p>
			<p><?= $brg['Unit']; ?></p>
			<p><?= $brg['Harga']; ?>, <?= $brg['Penjualan']; ?></p>
			<p><a href="halaman_user.php">Kembali</a></p>
		</div>
   </div>
</body>
</html>