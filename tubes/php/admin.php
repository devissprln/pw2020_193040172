<?php

session_start();

if (!isset($_SESSION['username'])) {
  header("Location: login.php");
  exit;
}

// menghubungkan dengan file php lainnya
require 'functions.php';

if (isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $makanan = query("SELECT * FROM makanan WHERE
              jenis_makanan LIKE '%$keyword%' OR
              kelompok_makanan LIKE '%$keyword%' OR
              kategori LIKE '%$keyword%' OR
              harga LIKE '%$keyword%' ");
} else {
  $makanan = query("SELECT * FROM makanan");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Admin | Dashboard</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">

</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand text-light" href="admin.php">Daftar Makanan</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        </li>
      </ul>
      <a style="text-decoration:none;" class="nav-link text-light text-left" href="tambah.php">
        Tambah Data
      </a>
      <a style="text-decoration:none;" class="nav-link text-light text-left" href="logout.php">
        Logout
      </a>
    </div>
  </nav>

  <!-- Container -->
  <div class="container">
    <div class="mt-4">

      <!-- Sub judul -->
      <h1 class="text-center">Jenis Makanan</h1>

      <div class="table-responsive">

        <!-- Pencarian -->
        <form class="form-inline" action="" method="GET">
          <div class="form-group mr-2 mb-2">
            <input type="text" class="form-control rounded-0" name="keyword" placeholder="Masukan keyword">
          </div>
          <button type="submit" name="cari" class="btn btn-primary rounded-0 mb-2">Cari</button>
        </form>

        <!-- Tabel -->
        <table class="table table-bordered mt-3">
          <thead class="bg-primary text-light">
            <tr>
              <th class="text-center" scope="col">#</th>
              <th class="text-center" scope="col">OPSI</th>
              <th class="text-center" scope="col">GAMBAR</th>
              <th class="text-center" scope="col">JENIS MAKANAN</th>
              <th class="text-center" scope="col">KELOMPOK MAKANAN</th>
              <th class="text-center" scope="col">KATEGORI</th>
              <th class="text-center" scope="col">HARGA</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($makanan as $mkn) : ?>
              <tr>
                <td class="text-center" scope="row"><?= $no++ ?></td>
                <td class="text-center">
                  <a class="btn btn-outline-primary rounded-0" href="ubah.php?id=<?= $mkn['id'] ?>">Ubah</a>
                  <a class="btn btn-outline-primary rounded-0" href="hapus.php?id=<?= $mkn['id'] ?>" onclick="return confirm('Hapus Data??')">Hapus</a>
                </td>
                <td class="text-center"><img src="../assets/img/<?= $mkn['gambar'] ?>" alt="gambar" width="70px" height="70px"></td>
                <td class="text-center"><?= $mkn['jenis_makanan'] ?></td>
                <td class="text-center"><?= $mkn['kelompok_makanan'] ?></td>
                <td class="text-center"><?= $mkn['kategori'] ?></td>
                <td class="text-center">Rp. <?= $mkn['harga'] ?></td>
              </tr>
            <?php endforeach ?>
            <?php if (empty($makanan)) : ?>
              <tr>
                <td colspan="3">
                  <h5 class="text-center">Data tidak ditemukan!!</h5>
                </td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>

</body>

</html>