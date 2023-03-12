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
  <div id="card">
    <div id="card-content">
      <div id="card-title">
        <h2>LOGIN</h2>
        <div class="underline-title"></div>
      </div>
      <form action="config/aksi_Login.php" method="POST" class="form">
        <label for="user-email" style="padding-top:13px">
          &nbsp;Username
        </label>
        <input id="user-email" class="form-content" type="text" name="username" autocomplete="on" required />
        <div class="form-border"></div>
        <label for="user-password" style="padding-top:22px">&nbsp;login sebagai
        </label>
        <div class="form-border"></div>
        <select class="form-select" name="level">
          <option></option>
          <option value="masyarakat">masyarakat</option>
          <option value="petugas">petugas</option>
        </select>
        <label for="user-password" style="padding-top:22px">&nbsp;password

        </label>
        <input id="user-password" class="form-content" type="password" name="password" required />
        <div class="form-border"></div>
        <input id="submit-btn" type="submit"  value="LOGIN" /> 
       <!-- <button type="submit" id="submit-btn">Login</button>-->
        <a href="index.php?page=registrasi" id="signup">Don't have account yet?</a>
      </form>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  Swal.fire('silahka login masukkan username dan password anda')

</script>
</body>

</html>