<?php
//Connet To Databases
require 'function.php';
//Tombol Submit mengecek sudah di tekan atau belum
if( isset($_POST["submit"]) ) {
//Pengecekan Berhasil Apa gagal
	if( tambah($_POST) > 0 ) {
		print "
			<script>
				alert('Data Berhasil Ditambahkan!');
				document.location.href = 'index3.php';
			</script>
		";
	} else {
		print "
			<script>
				alert('Data Gagal Ditambahkan!');
				document.location.href = 'index3.php';
			</script>
		";
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Daftar Film</title>
</head>
<body>
	<h2>Tambah Daftar barang</h2>
		<form method="post" action="">
			<ul>
				<li>
				<label for="Masukan nama barang">Masukan nama barang : </label> 
				<br>
				<input type="text" name="Barang" required>
				</li>
				
				<br>
				
				<li>
				<label for="Masukan Unit">Masukan Unit :</label>
				<br>
				<input type="text" name="Unit" required>
				</li>
				
				<br>
				
				<li>
				<label for="Masukan Harga">Masukan Harga:</label>	 
				<br>
				<input type="text" name="Harga" required>
				</li>
				
				<br>
				
				<li>
				<label for="Masukan Penjualan">Masukan Penjualan :</label>	 
				<br>	 
				<input type="text" name="Penjualan" required>
				</li>
				
				<br>
				
				<li>
				<label for="Masukan Foto">Masukan Foto :</label>		 
				<br>
				<input type="text" name="Foto" required>
				</li>
				
				<br>
				
				<td>
					<button type="submit" name="submit">Tambah Data Barang!</button>
				</td>
			</ul>
		</form>
	
	
	
	
</body>
</html>