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

  <table border="1" cellpading="20" cellspacing="1">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>NRP</th>
      <th>Nama</th>
      <th>EMail</th>
      <th>Jurusan</th>
      <th>Aksi</th>
      <?= $i = 1; ?>
      <?php foreach ($mahasiswa as $mhs) : ?>
    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $mhs['gambar']; ?>  " width="60px"></td>
      <td><?= $mhs['nrp']; ?></td>
      <td><?= $mhs['nama']; ?></td>
      <td><?= $mhs['email']; ?></td>
      <td><?= $mhs['jurusan']; ?></td>
      <td>
        <a href=""> ubah </a> <a href=""> hapus </ a>
      </td>

    </tr>
  <?php endforeach; ?>
  </tr>
  </table>

</body>

</html>