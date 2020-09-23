<?php
//Connect To Databases
$conn = mysqli_connect('localhost', 'root', '', 'pw_183040055');

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}



function tambah($data) {
	global $conn;
	
	$brg = htmlspecialchars($data["Barang"]);
	$unt = htmlspecialchars($data["Unit"]);
	$hrg = htmlspecialchars($data["Harga"]);
	$jual = htmlspecialchars($data["Penjualan"]);
	$photo = htmlspecialchars($data["Foto"]);
	
	// Query insert data 
	$query = "INSERT INTO elektronik4 VALUES 
				('', '$brg', '$unt', '$hrg', '$jual', '$photo')
			 ";
	mysqli_query($conn, $query);
	
	return mysqli_affected_rows($conn);
}



function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM elektronik4 WHERE id = $id");
	
	return mysqli_affected_rows($conn);
}


function ubah($data) {
	global $conn;
	
	$id = $data["id"];
	$brg = htmlspecialchars($data["Barang"]);
	$unt = htmlspecialchars($data["Unit"]);
	$hrg = htmlspecialchars($data["Harga"]);
	$jual = htmlspecialchars($data["Penjualan"]);
	$photo = htmlspecialchars($data["Foto"]);
	
	// Query insert data 
	$query = "UPDATE elektronik4 SET 
				Barang = '$brg',
				Unit = '$unt',
				Harga = '$hrg',
				penjualan = '$jual',
				Foto = '$photo'
			 WHERE id = $id
			 ";
	mysqli_query($conn, $query);
	
	return mysqli_affected_rows($conn);
}

function cari($keyword) {
	$query = "SELECT * FROM elektronik4 WHERE
				Barang LIKE '%$keyword%' OR
				Unit LIKE '%$keyword%' OR
				Harga LIKE '%$keyword%' OR
				Penjualan LIKE '%$keyword%'
			";
	return query($query);
}








?>
