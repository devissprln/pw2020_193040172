<?php
// menghubungkan dengan file php lainnya
require 'functions.php';

// melakukan query
$makanan = query("SELECT * FROM makanan");

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