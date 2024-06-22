<?php
	include "koneksi.php";
	session_start();

	$id = $_GET['id_peserta'];

	$query = mysqli_query($koneksi, "delete from tb_peserta where id_peserta='$id'");
	if($query) {
		$_SESSION['pesan'] = "Data telah dihapus.";
		header("location:data_pendaftar.php");
	}
?>