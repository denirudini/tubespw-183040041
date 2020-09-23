  <?php
require 'funtions.php';
 $film = query("SELECT * FROM elektronik4");


if( isset($_POST["cari"]) ) {
	$elektro = cari($_POST["keyword"]);
}

if (isset($_POST['submit'])) {
	if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
		header("location: index.php");
		exit;
	} else {
		$nValid = true;
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lat6a_183040041</title>
</head>
	<style>
		.container {
			border: 1px solid black;
			text-align: center;
			font-size: 20px;
			background-color : aquamarine;
			margin-left: 600px;
            margin-right: 600px;
		}
		.content {
			
		}
		.gambar {
			
		}
		
		.login {
			width: 60px;
			height: 20px;
			background-color: salmon;
			border-radius: 20px;
			text-align: center;
			margin: auto;
		}
	</style>
<body bgcolor="yellow">
	<center><h2>Daftar Film Terpuler di Indonesia</h2></center>
	<form action="" method="post">
		<div class="login">
		<center><a href="Login_admin.php">Login</a></center>
		</div>
		<br><br>
		<center><input type="text" name="keyword" size="45" autofocus placeholder="Masukan keyword pencarian film..." autocomplete="off">
		<button type="submit" name="cari">Cari!</button></center>
	</form>
	<br>
 <div class="container">
 			<?php foreach ($elektro as $brg) : ?>
        <div class="content">
           <div class="gambar">
                   <p><img src="assets/img/<?= $brg['Foto']; ?>">
           </div>
            <p class="nama">
				<a href="profile.php?id=<?= $brg['id']; ?>"><?= $brg['Barang']; ?></a>
			</p>
			<p><?= $brg['Unit']; ?></p>
			<?php endforeach; ?>
        </div>
 </div>
</body>
</html>