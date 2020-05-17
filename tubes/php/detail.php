<?php

// Mengecek apakah ada id yang dikirimkan
// jika tidak ada maka akan dikembalikan ke index.php
if (!isset($_GET['id'])) {
  header("location: ../index.php");
}

require 'functions.php';

// Mengambil id dari url
$id = $_GET['id'];

// Melakukan query dengan parameter id yang diambil dari url
$makanan = query("SELECT * FROM makanan WHERE id = $id")[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Detail</title>

  <!-- Bootstrap -->
  <link rel="stylesheet" type="text/css" href="../assets/bootstrap/css/bootstrap.min.css">

</head>

<body>

  <div class="container mt-5">
    <div class="card m-auto shadow rounded-0" style="width: 18rem;">
      <img src="../assets/img/<?= $makanan['gambar'] ?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?= $makanan['jenis_makanan'] ?></h5>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><?= $makanan['kelompok_makanan'] ?></li>
        <li class="list-group-item">Kategori : <?= $makanan['kategori'] ?></li>
        <li class="list-group-item">Rp.<?= $makanan['harga'] ?></li>
      </ul>
      <div class="card-body">
        <a href="../index.php" class="card-link">Kembali</a>
      </div>
    </div>
  </div>

</body>

</html>