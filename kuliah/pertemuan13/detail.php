<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

require 'function.php';

//ambil id dari url
$id = $_GET['id'];

//query mahasiswa berdasarkan id 
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>
  <ul>
    <li><img src="img/<?= $mhs['gambar']; ?>" width="200px"></li>
    <li>Nrp : <?= $mhs['nrp']; ?></li>
    <li>Nama : <?= $mhs['nama']; ?></li>
    <li>Email : <?= $mhs['email']; ?></li>
    <li>Jurusan : <?= $mhs['jurusan']; ?></li>
    <li><a href="ubah.php?id=<?= $mhs['id']; ?>">Ubah </a> | <a href="hapus.php?id=<?= $mhs['id']; ?>" onclick="return confirm('apakah anda yakin ?');">Hapus</a></li>
    <li><a href="index.php">Kembali ke daftar Mahasiswa</a></li>
  </ul>
</body>

</html>