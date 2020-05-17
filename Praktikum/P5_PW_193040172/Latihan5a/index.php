<?php
//melakukan koneksi ke database
$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
//memilih database
mysqli_select_db($conn, "tubes_193040172") or die("Database salah!");
//query mengambil objek dari tabel didalam database
$result = mysqli_query($conn, "SELECT * FROM makanan");
?>

<!DOCTYPE html>
<html>

<head>
  <title>Latihan 5A </title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body class="body">
  <h2>Daftar Makanan</h2>

  <div class="container">
    <table border="1" cellspacing="3" cellpadding="10">
      <tr bgcolor="darkblue" align="center">
        <td><b>id</b></td>
        <td><b>Gambar</b></td>
        <td><b>Jenis Makanan</b></td>
        <td><b>Kelompok Makanan</b></td>
        <td><b>Kategori</b></td>
        <td><b>Harga</b></td>
      </tr>

      <?php $i = 1 ?>
      <?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
          <td><?= $row["id"]; ?></td>
          <td><img class="img" src="assets/img/<?= $row["gambar"]; ?>"></td>
          <td><?= $row["jenis_makanan"] ?></td>
          <td><?= $row["kelompok_makanan"] ?></td>
          <td><?= $row["kategori"] ?></td>
          <td><?= $row["harga"] ?></td>
        </tr>
        <?php $i++ ?>
      <?php endwhile; ?>

    </table>
  </div>
</body>

</html>