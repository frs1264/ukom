<?php
	include "koneksi.php";
	session_start();

	$Kd_skema 		= $_POST['Kd_skema'];
	$Nm_peserta 		= $_POST['Nm_peserta'];
	$Jekel 	= $_POST['Jekel'];
	$alamat 	= $_POST['alamat'];
	$No_hp = $_POST['No_hp'];
	

	$query = mysqli_query($koneksi,"insert into tb_peserta value('','$Kd_skema','$Nm_peserta','$Jekel','$alamat','$No_hp')");

	if($query){
		$_SESSION['pesan'] = "Pendaftaran berhasil, Anda akan dihubungi oleh Admin";
		header("location:form_reg.php");
	}


?>