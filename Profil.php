<?php
if(!isset($_GET['id'])) {
	header("Location: index3.php");
	exit;
}

require 'function.php';
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
   <div class="content">
           <div class="gambar">
                   <p><img src="../Tugas3/assets/img/<?= $brg['Foto']; ?>">
           </div>
		<div class="desc">
            <p class="nama"><?= $brg['Barang']; ?></p>
			<p><?= $brg['Unit']; ?></p>
			<p><?= $brg['Harga']; ?>, <?= $brg['Penjualan']; ?></p>
			<p><a href="user.php">Kembali</a></p>
		</div>
   </div>
</body>
</html>