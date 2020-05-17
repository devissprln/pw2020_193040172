<?php
//function untuk melakukan koneksi ke database
function koneksi()
{
	$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
	mysqli_select_db($conn, "tubes_193040172") or die("Database salah!");

	return $conn;
}

//function untuk melakukakan query ke database
function query($sql)
{
	$conn = koneksi();
	$result = mysqli_query($conn, "$sql");

	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data)
{
	$conn = koneksi();

	$gambar = htmlspecialchars($data['gambar']);
	$jenis = htmlspecialchars($data['jenis_makanan']);
	$kelompok = htmlspecialchars($data['kelompok_makanan']);
	$kategori = htmlspecialchars($data['kategori']);
	$harga = htmlspecialchars($data['harga']);


	$query = "INSERT INTO
                  makanan
                VALUES
                ('', '$gambar', '$jenis', '$kelompok', '$kategori', '$harga');
      
      ";
	mysqli_query($conn, $query);
	echo mysqli_error($conn);
	return mysqli_affected_rows($conn);
}

function hapus($id)
{
	$conn = koneksi();

	mysqli_query($conn, "DELETE FROM makanan WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function ubah($data)
{
	$conn = koneksi();

	$id = $data['id'];
	$gambar = htmlspecialchars($data['gambar']);
	$jenis = htmlspecialchars($data['jenis_makanan']);
	$kelompok = htmlspecialchars($data['kelompok_makanan']);
	$kategori = htmlspecialchars($data['kategori']);
	$harga = htmlspecialchars($data['harga']);


	$query = "UPDATE
              makanan
            SET
            gambar = '$gambar',
						jenis_makanan = '$jenis',
						kelompok_makanan = '$kelompok',
						kategori = '$kategori',
						harga = '$harga'
						
						WHERE id = '$id'
						";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}
