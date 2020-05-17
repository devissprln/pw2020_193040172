<?php
require 'functions.php';

$id = $_GET['id'];
$mkn = query("SELECT * FROM makanan WHERE id = $id")[0];


// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('Data berhasil diubah!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "<script>
            alert('Data gagal diubah!');
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
  <h3>Form Ubah Data Barang</h3>
  <form action="" method="POST">
    <input type="hidden" name="id" id="id" value="<?= $mkn['id']; ?>">
    <ul>
      <li>
        <label for="gambar">gambar</label><br>
        <input type="text" name="gambar" id="gambar" required value="<?= $mkn['gambar']; ?>"><br><br>
      </li>
      <li>
        <label for="jenis_makanan">Jenis Makanan</label><br>
        <input type="text" name="jenis makanan" id="jenis makanan" required value="<?= $mkn['jenis_makanan']; ?>"><br><br>
      </li>
      <li>
        <label for=" kelompok_makanan">Kelompok Makanan</label><br>
        <input type="text" name="kelompok makanan" id="kelompok makanan" required value="<?= $mkn['kelompok_makanan']; ?>"><br><br>
      </li>
      <li>
        <label for=" kategori">Kategori</label><br>
        <input type="text" name="kategori" id="kategori" required value="<?= $mkn['kategori']; ?>"><br><br>
      </li>
      <li>
        <label for=" harga">Harga</label><br>
        <input type="text" name="harga" id="harga" required value="<?= $mkn['harga']; ?>"><br><br>
      </li>
      <br>
      <button type=" submit" name="ubah">Ubah Data!</button>
      <button type="submit">
        <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
      </button>
    </ul>
  </form>
</body>

</html>