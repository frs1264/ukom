<?php

	$koneksi = mysqli_connect("localhost","root","","db_ukom");

	if (!$koneksi) {
		# code...
		die("koneksi gagal: " . mysqli_connect_error());
	}
	
?>