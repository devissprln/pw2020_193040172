<?php

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data gagal ditambahkan!');
            document.location.href = 'admin.php';
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">

  <title>Document</title>
</head>

<body class="bg-primary">

  <div class="container col-6 mt-5">>



    <form action="" method="POST">
      <div class="form-group">
        <div class="card rounded-0">
          <div class="card-header text-center">
            <h3>Form Tambah Data Makanan</h3>
          </div>
          <div class="card-body">
            <form action="" method="POST">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" class="form-control rounded-0" id="username" autofocus required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control rounded-0" id="password">
              </div>
              <div class="form-group form-check">
                <input type="checkbox" name="remember" class="form-check-input" id="remember">
                <label class="form-check-label" for="remember">Remember me</label>
              </div>
              <button type="submit" name="submit" class="btn btn-primary float-right rounded-0 mt-n2">Login</button>
            </form>
            <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
          </div>
    </form>

</body>

</html>