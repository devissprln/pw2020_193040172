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
  <title>Document</title>
  <link rel="stylesheet" href="../css/style.css">
</head>

<body>
  <div class="container">
    <h1 align="center">PROFILE MAKANAN</h1>
    <img width="100px" src="../assets/img/<?= $makanan["gambar"] ?>" alt="">
  </div>
  <div class="laukpauk">
    <p><?= $makanan['gambar'] ?></p>
    <p><?= $makanan["jenis_makanan"] ?></p>
    <p><?= $makanan["kelompok_makanan"] ?></p>
    <p><?= $makanan["kategori"] ?></p>
    <p><?= $makanan["harga"] ?></p>
  </div>

  <div class="clear"></div>

  <button class="back"><a href="../index.php">Kembali</a></button>
  </div>
</body>

</html>