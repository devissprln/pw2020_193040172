<?php
// menghubungkan dengan file php lainnya
require 'function.php';

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
      background-color: #00FFFF;
    }
  </style>
</head>

<body>
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
            <a href=""><button>Ubah</button></a>
            <a href=""><button>Hapus</button></a>
          </td>
          <td><img width="100px" src="../assets/img/<?= $bk["gambar"]; ?>"></td>
          <td><?= $bk["jenis_makanan"] ?></td>
          <td><?= $bk["kelompok_makanan"] ?></td>
          <td><?= $bk["kategori"] ?></td>
          <td><?= $bk["harga"] ?></td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</body>

</html>