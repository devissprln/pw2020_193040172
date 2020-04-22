<?php
require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>
  <a href="tambah.php">Tambah Data mahasiswa</a>
  <br></br>

  <table border="1" cellpading="20" cellspacing="1">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nama</th>
      <th>Aksi</th>

      <?php $i = 1;
      foreach ($mahasiswa as $mhs) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $mhs['gambar']; ?>  " width="60px"></td>
      <td><?= $mhs['nama']; ?></td>
      <td>
        <a href="detail.php?id=<?= $mhs['id']; ?>"> lihat detail </a>
      </td>

    </tr>
  <?php endforeach; ?>
  </table>
  </tr>
</body>

</html>