<?php
// menghubungkan dengan file php lainnya
require 'php/functions.php';

// melakukan query
$makanan = query("SELECT * FROM makanan");
?>

<!DOCTYPE html>
<html>

<head>
  <title>Latihan 6E</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<body>
  <div id="page-wrap">
    <div class="content">
      <div class="container">
        <h2 align="center">Jenis Makanan</h2>

        <?php foreach ($makanan as $mkn) : ?>
          <p class="jenis_makanan">
            <a class="p" href="php/detail.php?id= <?= $mkn['id'] ?>">
              <?= $mkn['jenis_makanan'] ?>
            </a>


          </p>
        <?php endforeach; ?>


      </div>
    </div>
</body>

</html>