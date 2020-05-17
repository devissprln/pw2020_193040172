<?php
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
  <title>Document</title>
  <style>
    body {
      background-color: lightgray;
    }
  </style>
</head>

<body>

  <div class="add">
    <a href="tambah.php">Tambah Data</a>
  </div>
  <br>

  <form action="" method="GET">
    <input type="text" name="keyword" size="30px" placeholder="Masukkan keyword pencarian ..." autocomplete="off" autofocus>
    <button type="submit" name="cari">Cari!</button>
  </form>
  <br>

  <div class="container">

    <table border="1" cellpadding="10" cellspacing="0">
      <tr>
        <th>ID</th>
        <th>OPSI</th>
        <th>GAMBAR</th>
        <th>JENIS MAKANAN</th>
        <th>KELOMPOK MAKANAN</th>
        <th>KATEGORI</th>
        <th>HARGA</th>
      </tr>
      <?php if (empty($makanan)) : ?>
        <tr>
          <td colspan="7">
            <h1>Data Tidak Ditemukan</h1>
          </td>
        </tr>
      <?php endif; ?>


      <?php $i = 1;
      foreach ($makanan as $mkn) :
      ?>
        <tr>
          <td><?= $i; ?></td>
          <td>
            <a href="ubah.php?id=<?= $mkn['id'] ?>"><button>Ubah</button></a>
            <a href="hapus.php?id=<?= $mkn['id'] ?>" onclick="return confirm('Hapus Data??')"><button>Hapus</button></a>
          </td>
          <td><img width="100px" src="../assets/img/<?= $mkn["gambar"]; ?>"></td>
          <td><?= $mkn["jenis_makanan"] ?></td>
          <td><?= $mkn["kelompok_makanan"] ?></td>
          <td><?= $mkn["kategori"] ?></td>
          <td><?= $mkn["harga"] ?></td>
        </tr>
        <?php $i++; ?>
      <?php endforeach; ?>

    </table>
  </div>
</body>

</html>