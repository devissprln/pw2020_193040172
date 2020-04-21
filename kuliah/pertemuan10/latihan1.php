<?php
//koneksi ke DB & Pilih Database
$conn = mysqli_connect('localhost', 'root', '', 'pw_193040172');

//Querry isi tabel mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

//ubah data ke dalam array
// $row = mysqli_fetc_row('$result'); //array numerik
// $row = mysqli_fetc_assoc('$result'); //array associative
// $row = mysql_fetc_array('$result');//keduanya
$rows =  [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}


//tampung ke variable mahasiswa
$mahasiswa = $rows;

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