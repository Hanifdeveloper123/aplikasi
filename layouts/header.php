<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>aplikasi pengaduan masyarakat</title>
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
      <link rel="stylesheet" type="text/css" href="http://localhost:8080/aplikasi/assets/css/bootstrap.min.css">
</head>
<body>
  <!-- Navbar content -->
<nav class="navbar navbar-expand-lg justify-content-end navbar-dark bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Aplikasi pengaduan masyarakat</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <?php
        session_start();
        if ($_SESSION['login']=='admin') {?>
                    <a class="nav-link" href="index.php?page=pengaduan">Data pengaduan</a>
                                    <a class="nav-link" href="../config/aksi_logout.php">keluar</a>



        <?php }else if ($_SESSION['login']=='petugas'){?>
                              <a class="nav-link" href="index.php?page=pengaduan">Data pengaduan</a>
                                              <a class="nav-link" href="../config/aksi_logout.php">keluar</a>



       <?php }else{?>
                <a class="nav-link" href="../config/aksi_logout.php">keluar</a>


       <?php }?>
            



      </ul>
    </div>
  </div>
</nav>