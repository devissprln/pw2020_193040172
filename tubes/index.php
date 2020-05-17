<?php

// Menghubungkan dengan file php lainnya
require 'php/functions.php';
$makanan = query("SELECT * FROM makanan");

// Ketika tombol cari diclick
if (isset($_POST['cari'])) {
  $makanan = cari($_POST['keyword']);
}

// if (isset($_GET['cari'])) {
//   $keyword = $_GET['keyword'];
//   $makanan = query("SELECT * FROM makanan WHERE
//                 jenis_makanan LIKE '%$keyword%' OR
//                 kelompok_makanan LIKE '%$keyword%' OR
//                 kategori LIKE '%$keyword%' OR
//                 harga LIKE '%$keyword%' ");
// } else {
//   $makanan = query("SELECT * FROM makanan");
// }


?>

<!DOCTYPE html>
<html>

<head>
  <title>Jenis Makanan</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css">

</head>


<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-primary">
    <a class="navbar-brand text-light" href="">Jenis Makanan</a>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        </li>
      </ul>
      <a style="text-decoration:none;" class="nav-link text-light text-left" href="php/login.php">
        Login
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
            <input type="text" class="form-control rounded-0 keyword" name="keyword" placeholder="Masukan keyword">
          </div>
          <button type="submit" name="cari" class="btn btn-primary rounded-0 mb-2 tombol-cari">Cari</button>
        </form>

        <!-- Tabel -->
        <table class="table table-bordered mt-3">
          <thead class="bg-primary text-light">
            <tr>
              <th class="text-center" scope="col">#</th>
              <th class="text-left" scope="col">Nama Makanan</th>
              <th class="text-center" scope="col">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php $no = 1; ?>
            <?php foreach ($makanan as $mkn) : ?>
              <tr>
                <td class="text-center" scope="row"><?= $no++ ?></td>
                <td class="text-left"><?= $mkn['jenis_makanan'] ?></td>
                <td class="text-center"><a href="php/detail.php?id= <?= $mkn['id'] ?>" class="btn btn-outline-info rounded-0">Detail</a></td>
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

<!-- Script -->
<script src="js/script.js"></script>

</html>