<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$makanan = query("SELECT * FROM makanan");
?>

<!DOCTYPE html>
<html>

<head>
  <title>Latihan 5B</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="body">
  <h2>Daftar Makanan</h2>

  <div class="container">
    <table border="1" cellspacing="3" cellpadding="10">
      <tr bgcolor="darkblue" align="center">
        <td><b>id</b></td>
        <td><b>Gambar</b></td>
        <td><b>Jenis Makanan</b></td>
        <td><b>Kelompok Makanan</b></td>
        <td><b>Kategori</b></td>
        <td><b>Harga</b></td>
      </tr>

      <?php $i = 1 ?>
      <?php foreach ($makanan as $mkn) : ?>
        <tr>
          <td><?= $i ?></td>
          <td><img class="img" src="assets/img/<?= $mkn["gambar"]; ?>"></td>
          <td><?= $mkn["jenis_makanan"] ?></td>
          <td><?= $mkn["kelompok_makanan"] ?></td>
          <td><?= $mkn["kategori"] ?></td>
          <td><?= $mkn["harga"] ?></td>
        </tr>
        <?php $i++ ?>
      <?php endforeach; ?>

    </table>
  </div>
</body>

</html>