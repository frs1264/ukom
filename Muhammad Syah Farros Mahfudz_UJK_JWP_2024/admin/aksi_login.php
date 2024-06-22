<?php 
	include 'koneksi.php';
	session_start();

	$username = $_POST['username'];
	$password = md5($_POST['password']);

	$query = mysqli_query($koneksi, "select * from tb_user where username='$username' and password='$password'");
	
	if ($query->num_rows > 0) {
		# code...
		$row = mysqli_fetch_assoc($query);
		$_SESSION['username'] = $row['username'];
		header("location:data_pendaftar.php");
		exit();
	}else{
		echo "<script>alert('USERNAME ATAU PASSWORD ANDA SALAH, SILAHKAN COBA LAGI!')</script>";
	}
?>