<?php

require 'function.php';

$id = $_GET["id"];


if( hapus($id) > 0 ) {
		print "
			<script>
				alert('Data Berhasil dihapus!');
				document.location.href = 'index3.php';
			</script>
		";
	} else {
		print "
			<script>
				alert('Data Gagal dihapus!');
				document.location.href = 'index3.php';
			</script>
		";
}

?>