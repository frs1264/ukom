<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tambah Pendaftaran Sertifikasi</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
  	<a class="navbar-brand" href="#">
    </a>
    <a class="navbar-brand" href="#">Tambah Pendaftaran Sertifikasi</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="form_reg.php">Pendaftaran</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Tentang</a>
        </li>
        
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      FORMULIR PENDAFTARAN SERTIFIKASI
    </div>
    <?php 
      if (isset($_SESSION['pesan'])) {
        ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <strong>
              <?php echo $_SESSION['pesan']; ?>
          </strong> 
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php 
        session_destroy();
            }
    ?>
      <div class="card-body">
        <form action="aksi_reg.php" method="post">
        <div class="mb-3">
          <label for="Kd_skema" class="form-label">Kode Skema</label>
          <input type="text" name="Kd_skema" class="form-control" id="Kd_skema" required>
        </div>
        <div class="mb-3">
          <label for="Nm_peserta" class="form-label">Nama Peserta</label>
          <input type="text" name="Nm_peserta" class="form-control" id="Nm_peserta">
        </div>
        <div class="mb-3">
          <label for="Jekel" class="form-label">Jenis Kelamin</label>
          <input type="text" name="Jekel" class="form-control" id="Jekel">
        </div>
        <div class="mb-3">
          <label for="alamat" class="form-label">Alamat</label>
          <input type="text" name="alamat" class="form-control" id="alamat">
        </div>
        <div class="mb-3">
          <label for="No_hp" class="form-label">Nomor Hp</label>
          <input type="text" name="No_hp" class="form-control" id="No_hp">
        </div>
        <input type="submit" value="Simpan" class="btn btn-primary">
        </form>
      </div>
    </div>
</div>