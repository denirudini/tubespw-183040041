  <?php
require 'function.php';
 $elektro = query("SELECT * FROM elektronik4");

 if( isset($_POST['cari'])) {
 	$elektro = cari($_POST['keyword']);
 }
 if(isset($_POST['submit'])) {
 	if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
 		header("location: index3.php");
 		exit;
 	}else{
 		$nValid = true;
 	}
 }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>183040055</title>
</head>
	<style>
		.container {
			text-align: center;
		}
		.content {
			
		}
		.gambar {
			
			
		}
	</style>
<body bgcolor="yellow">
	<center><h2>Daftar Barang Elektronik</h2></center>
	<form action="" method="post">
		<div class="Login">
          <center><a href="Login_admin.php">Login sebagai admin</a></center>
            </div>
            <br><br>
            <center><input type="text" name="keyword" size="45" autofocus placeholder="Masukan keyword pencarian Barang" autocomplete="off">
            <button type="submit" name="cari">Cari</button></center>
	</form>
	<br>
 <div class="container">
 			<?php foreach ($elektro as $brg) : ?>
        <div class="content">
           <div class="gambar">
                   <p><img src="../Tugas3/assets/img/<?= $brg['Foto']; ?>">
           </div>
            <p class="nama">
				<a href="Profil.php?id=<?= $brg['id']; ?>"><?= $brg['Barang']; ?></a>
			</p>
			<p><?= $brg['Unit']; ?></p>
			<?php endforeach; ?>
        </div>
 </div>
</body>
</html>