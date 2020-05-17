<?php
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil ditambahkan!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data gagal ditambahkan!');
            document.location.href = 'admin.php';
          </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h3>Form Tambah Data Barang</h3>
  <form action="" method="POST">
    <ul>
      <li>
        <label for="gambar">gambar</label><br>
        <input type="text" name="gambar" id="gambar" required><br><br>
      </li>
      <li>
        <label for="jenis_makanan">Jenis Makanan</label><br>
        <input type="text" name="jenis makanan" id="jenis makanan" required><br><br>
      </li>
      <li>
        <label for="kelompok_makanan">Kelompok Makanan</label><br>
        <input type="text" name="kelompok makanan" id="kelompok makanan" required><br><br>
      </li>
      <li>
        <label for="kategori">Kategori</label><br>
        <input type="text" name="kategori" id="kategori" required><br><br>
      </li>
      <li>
        <label for="harga">Harga</label><br>
        <input type="text" name="harga" id="harga" required><br><br>
      </li>
      <br>
      <button type="submit" name="tambah">Tambah Data!</button>
      <button type="submit">
        <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>