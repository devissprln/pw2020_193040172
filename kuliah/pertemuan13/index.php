<?php
session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'function.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

//ketika tombol cari diclick
if (isset($_POST['cari'])) {
  $mahasiswa = cari($_POST['keyword']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <a href="logout.php">Logout!</a>
  <h3>Daftar Mahasiswa</h3>
  <a href="tambah.php">Tambah Data mahasiswa</a>
  <br></br>

  <form action="" method="POST">
    <input type="text" name="keyword" size="40" placeholder="masukan keyword pencarian..." autocomplete="off" autofocus class="keyword">
    <button type="submit" name="cari" class="tombol-cari">Cari!</button>
  </form>
  <br>

  <div class="container">

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
    </tr>
  </div>

  <script src="js/script.js"></script>
</body>

</html>