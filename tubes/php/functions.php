<?php

// Function untuk melakukan koneksi ke database
function koneksi()
{
	$conn = mysqli_connect("localhost", "root", "") or die("koneksi ke DB gagal");
	mysqli_select_db($conn, "tubes_193040172") or die("Database salah!");

	return $conn;
}

// Function untuk melakukakan query ke database
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

	$query = "INSERT INTO makanan VALUES(null, '$gambar', '$jenis', '$kelompok', '$kategori', '$harga');";
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

	$query = 	"UPDATE makanan SET 
				gambar = '$gambar',
				jenis_makanan = '$jenis',
				kelompok_makanan = '$kelompok',
				kategori = '$kategori',
				harga = '$harga'

				WHERE id = '$id'";

	mysqli_query($conn, $query);
	return mysqli_affected_rows($conn);
}

function registrasi($data)
{
	$conn = koneksi();
	$username = strtolower(stripcslashes($data["username"]));
	$password = mysqli_real_escape_string($conn, $data["password"]);

	$result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

	if (mysqli_fetch_assoc($result)) {
		echo "<script>alert('Username sudah digunakan');</script>";
		return false;
	}

	$password = password_hash($password, PASSWORD_DEFAULT);

	$query_tambah = "INSERT INTO user VALUES (null,'$username','$password')";
	mysqli_query($conn, $query_tambah);

	// return mysqli_affected_rows($conn);

	echo "<script>alert('User berhasil dibuat, silahkan login!');</script>";
}

function cari($keyword)
{
	$conn = koneksi();

	$query = "SELECT * FROM makanan
            WHERE 
            jenis_makanan LIKE '%$keyword%'";

	$result = mysqli_query($conn, $query);

	$rows =  [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}

	return $rows;
}
