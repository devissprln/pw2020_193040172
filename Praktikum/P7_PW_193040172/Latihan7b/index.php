<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

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
<html>

<head>
  <title>latihan7b</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<body>
  <div id="page-wrap">
    <div class="content">
      <div class="container">
        <h2 align="center">Jenis Makanan</h2>

        <form action="" method="GET">
          <input type="text" name="keyword" size="20" autocomplete="off" autofocus>
          <button type="submit" name="cari" style="width: auto">Cari</button>
        </form>

        <?php if (empty($makanan)) : ?>
          <tr>
            <td colspan="7">
              <p style="color: red; font-style:italic">Data tidak ditemukan !!</p>
            </td>
          </tr>
        <?php endif; ?>

        <?php foreach ($makanan as $mkn) : ?>
          <p class="jenis_makanan">
            <a class="p" href="php/detail.php?id= <?= $mkn['id'] ?>">
              <?= $mkn['jenis_makanan'] ?>
            </a>


          </p>
        <?php endforeach; ?>


      </div>
    </div>

    <a href="php/login.php">
      <button type="">
        Masuk ke halaman admin
      </button>
    </a>
</body>


</html>