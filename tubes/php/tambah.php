<?php

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {

  $data = [
    'id'                => $_POST['id'],
    'gambar'            => $_POST['gambar'],
    'jenis_makanan'     => $_POST['jenis_makanan'],
    'kelompok_makanan'  => $_POST['kelompok_makanan'],
    'kategori'          => $_POST['kategori'],
    'harga'             => $_POST['harga']
  ];

  if (tambah($data) > 0) {
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

  <title>Admin | Tambah</title>
</head>

<body class="bg-primary">

  <div class="container col-6 mt-5">

    <form action="" method="POST">
      <div class="form-group">
        <div class="card rounded-0">
          <div class="card-header text-center">
            <h3>Form Tambah Data Makanan</h3>
          </div>
          <div class="card-body">
            <form action="" method="POST">
              <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" class="form-control rounded-0" id="gambar" autofocus required>
              </div>
              <div class="form-group">
                <label for="jenis_makanan">Jenis Makanan</label>
                <input type="text" name="jenis_makanan" class="form-control rounded-0" id="jenis_makanan">
              </div>
              <div class="form-group">
                <label for="kelompok_makanan">Kelompok Makanan</label>
                <input type="text" name="kelompok_makanan" class="form-control rounded-0" id="kelompok_makanan">
              </div>
              <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" class="form-control rounded-0" id="kategori">
              </div>
              <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" class="form-control rounded-0" id="harga">
              </div>
              <button type="submit" name="tambah" class="btn btn-primary float-right rounded-0 mt-n2">Tambah</button>
              <a href="<?= "admin.php" ?>" class="btn btn-light float-right rounded-0 mt-n2 mr-4">Kembali</a>
            </form>
          </div>
    </form>

  </div>

</body>

</html>