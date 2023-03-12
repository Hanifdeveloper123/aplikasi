<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div id="card-reg">
    <div id="card-content">
      <div id="card-title">
        <h2>REGISTRASI</h2>
        <div class="underline-title"></div>
      </div>
      <form method="POST" class="form">
        <label for="nik" style="padding-top:13px">
            &nbsp;NIK
          </label>
        <input id="user-nik" class="form-content" type="number" name="nik" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="nama-lengkap" style="padding-top:13px">
            &nbsp;NAMA LENGKAP
          </label>
        <input id="user-nama" class="form-content" type="text" name="nama" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="user-email" style="padding-top:13px">
            &nbsp;USERNAME
          </label>
        <input id="user-username" class="form-content" type="text" name="username" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="user-email" style="padding-top:13px">
            &nbsp;PASSWORD
          </label>
        <input id="password" class="form-content" type="password" name="password" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="user-password" style="padding-top:22px">&nbsp;TELEPON
          </label>
        <input id="user-telepon" class="form-content" type="number" name="telp" required />
        <div class="form-border"></div>
        <input id="submit-btn" type="submit" name="kirim" value="DAFTAR" />
      </form>
    </div>
  </div>
</body>

</html>
<?php
include 'config/koneksi.php';
if (isset($_POST['kirim'])) {
  $nik = $_POST['nik'];
  $nama = $_POST['nama'];
  $username = $_POST['username'];
  $password = ($_POST['password']);
  $telp = $_POST['telp'];
  $level = 'masyarakat';



  $query = mysqli_query($koneksi, "INSERT INTO masyarakat VALUES('$nik','$nama','$username','$password','$telp','$level')");


  if ($query) {
header('location:index.php?page=login');  
}
}
?>