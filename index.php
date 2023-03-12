<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>aplikasi pengaduan masyarakat</title>
	    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
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
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=registrasi">Daftar akun</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php?page=login">Login</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

	<footer class="footer py-2 bg-light fixed-bottom">
	<div class="footer">
		<p class="text-center"> haca development</p>
	</div>
	</footer>

	<?php
	if ((isset($_GET['page']))) {
		$page=$_GET['page'];

		switch ($page) {
			case 'login':
				include 'login.php';
				break;
				case 'registrasi':
					include 'registrasi.php';
				break;
			
			default:
				echo "halaman tidak tersedia";
				break;
		}
	}else {
		include 'home.php';
	}

	?>



</body>
</html>