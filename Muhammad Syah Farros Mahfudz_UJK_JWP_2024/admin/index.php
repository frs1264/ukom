<html>
	<head>
		<title>form login</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1>FORM LOGIN</h1>
		
		<div class="kotak_login">
			<div class="tulisan_login">
				<p>SILAHKAN MASUKAN USERNAME DAN PASSWORD</p>
			</div>
		<form action="aksi_login.php" method="post">
			<label for="username">USERNAME</label>
			<input type="text" name="username" class="form_input" required>
			<br>
			<label for="password">PASSWORD</label>
			<input type="password" name="password" class="form_input" required>
			<br>
			<input type="submit" value="LOGIN" class="tombol_login">
		</form>
		</div>
	</body>
</html>