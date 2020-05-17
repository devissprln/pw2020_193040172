<?php

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];
$mkn = query("SELECT * FROM makanan WHERE id = $id")[0];


// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {

  $data = [
    'id'                => $_POST['id'],
    'gambar'            => $_POST['gambar'],
    'jenis_makanan'     => $_POST['jenis_makanan'],
    'kelompok_makanan'  => $_POST['kelompok_makanan'],
    'kategori'          => $_POST['kategori'],
    'harga'             => $_POST['harga']
  ];

  if (ubah($data) > 0) {
    echo "<script>
            alert('Data berhasil diubah!');
            document.location.href = 'admin.php';
          </script>";
  } else {

    echo "<script>
            alert('Data gagal diubah!');
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
  <title>Admin | Ubah</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">

</head>

<body class="bg-primary">

  <div class="container col-6 mt-5">

    <form action="" method="POST">
      <input type="hidden" name="id" id="id" value="<?= $mkn['id']; ?>">
      <div class="form-group">
        <div class="card rounded-0">
          <div class="card-header text-center">
            <h3>Form Ubah Data Makanan</h3>
          </div>
          <div class="card-body">
            <form action="" method="POST">
              <div class="form-group">
                <label for="gambar">Gambar</label>
                <input type="text" name="gambar" class="form-control rounded-0" id="gambar" value="<?= $mkn['gambar'] ?>" autofocus required>
              </div>
              <div class="form-group">
                <label for="jenis_makanan">Jenis Makanan</label>
                <input type="text" name="jenis_makanan" class="form-control rounded-0" id="jenis_makanan" value="<?= $mkn['jenis_makanan'] ?>">
              </div>
              <div class="form-group">
                <label for="kelompok_makanan">Kelompok Makanan</label>
                <input type="text" name="kelompok_makanan" class="form-control rounded-0" id="kelompok_makanan" value="<?= $mkn['kelompok_makanan'] ?>">
              </div>
              <div class="form-group">
                <label for="kategori">Kategori</label>
                <input type="text" name="kategori" class="form-control rounded-0" id="kategori" value="<?= $mkn['kategori'] ?>">
              </div>
              <div class="form-group">
                <label for="harga">Harga</label>
                <input type="text" name="harga" class="form-control rounded-0" id="harga" value="<?= $mkn['harga'] ?>">
              </div>
              <button type="submit" name="ubah" class="btn btn-primary float-right rounded-0 mt-n2">Ubah</button>
              <a href="<?= "admin.php" ?>" class="btn btn-light float-right rounded-0 mt-n2 mr-4">Kembali</a>
            </form>
          </div>
    </form>

  </div>

</body>

</html>