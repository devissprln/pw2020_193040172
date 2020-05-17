<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$makanan = query("SELECT * FROM makanan");
?>

<!DOCTYPE html>
<html>

<head>
  <title>Latihan 5c</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<div class="container">

  <body class="body">
    <h2 align="center">Jenis Makanan</h2>

    <?php foreach ($makanan as $mkn) : ?>
      <p class="jenis_makanan">
        <a class="p" href="php/detail.php?id= <?= $mkn['id'] ?>">
          <?= $mkn['jenis_makanan'] ?>
        </a>


      </p>
    <?php endforeach; ?>


</div>
</body>

</html>