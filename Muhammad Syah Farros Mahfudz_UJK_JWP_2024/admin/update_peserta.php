 <?php
	include "koneksi.php";
	session_start();

    $id_peserta = $_POST['id_peserta'];
	$Kd_skema 		= $_POST['Kd_skema'];
	$Nm_peserta 		= $_POST['Nm_peserta'];
	$Jekel 	= $_POST['Jekel'];
	$alamat 	= $_POST['alamat'];
	$No_hp = $_POST['No_hp'];
	

	$query = mysqli_query($koneksi," update tb_peserta set Kd_skema='$Kd_skema', Nm_peserta='$Nm_peserta',Jekel='$Jekel',alamat='$alamat',No_hp='$No_hp' where id_peserta='$id_peserta'");

if($query){
		$_SESSION['pesan'] = "Pendaftaran berhasil di update";
		header("location:data_pendaftar.php");
	}


?>