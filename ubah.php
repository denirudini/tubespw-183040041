<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login_admin.php");
	
	exit;
}
//Connet To Databases
require 'funtions.php';

//Ambil data dari ULR

$id = $_GET["id"];
//Query berdasarkan ID


$film = query("SELECT * FROM daftar_film WHERE id = $id")[0];

//Tombol Submit mengecek sudah di tekan atau belum
if( isset($_POST["submit"]) ) {
//Pengecekan Berhasil Apa gagal di ubah
	if( ubah($_POST) > 0 ) {
		print "
			<script>
				alert('Data Berhasil Diubah!');
				document.location.href = 'halaman_admin.php';
			</script> 
		";
	} else {
		print "
			<script>
				alert('Data Gagal Diubah!'); 
				document.location.href = 'halaman_admin.php';
			</script>
		";
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Ubah Daftar Film</title>
	<link href="../../css/bootstrap-4.0.0.css" rel="stylesheet">
	  
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h3 align="center">Ubah Daftar Film</h3>
			  <br>
            <form method="post" action="" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?= $film["id"]; ?>">
			<input type="hidden" name="gambarLama" value="<?= $film["foto"]; ?>">
				
			  <div class="form-label-group">
                <input type="tel" id="judul_film"  name="judul_film" class="form-control" placeholder="Masukan Judul Film..." required autofocus value="<?= $film["judul_film"]; ?>">
                <label for="judul_film">Masukan Judul Film...</label>
              </div>

			  <div class="form-label-group">
                <input type="tel" id="sutradara"  name="sutradara" class="form-control" placeholder="Masukan Sutradara..." required autofocus value="<?= $film["sutradara"]; ?>">
                <label for="sutradara">Masukan Sutradara...</label>
              </div>
				
			   <div class="form-label-group">
                <input type="tel" id="genre"  name="genre" class="form-control" placeholder=">Masukan Genre..." required autofocus value="<?= $film["genre"]; ?>">
                <label for="genre">Masukan Genre...</label>
              </div>
				
				<div class="form-label-group">
                <input type="tel" id="produser"  name="produser" class="form-control" placeholder="EMasukan Produser..." required autofocus value="<?= $film["produser"]; ?>">
                <label for="produser">Masukan Produser...</label>
              </div>
		
				<img src="../assets/img/<?= $film["foto"]; ?>" width="125" height="186">
				<p></p>
                <input type="file" name="foto" id="foto" placeholder="Masukan Photo..." autofocus>
              <p></p>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit">Ubah Data Film</button>
			</form>
          </div>
        </div>
      </div>
    </div>
	</div>
 <script src="../../js/popper.min.js"></script>
 <script src="../../js/bootstrap-4.0.0.js"></script>	
</body>
</html>