<?php
require '../function.php';
$mahasiswa = cari($_GET['keyword']);
?>

<table border="1" cellpading="20" cellspacing="1">
  <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>Nama</th>
    <th>Aksi</th>
  </tr>

  <?php if (empty($mahasiswa)) : ?>
    <tr>
      <td colspan="4">
        <p style="color:red; font-style: italic;"> Mahasiswa tidak ditemukan! </p>
      </td>

    </tr>
  <?php endif;  ?>

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