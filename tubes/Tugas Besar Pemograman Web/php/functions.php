<?php

// Function untuk melakukan koneksi ke database
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

function upload()
{
	$nama_file = $_FILES['gambar']['name'];
	$tipe_file = $_FILES['gambar']['type'];
	$ukuran_file = $_FILES['gambar']['size'];
	$error = $_FILES['gambar']['error'];
	$tmp_file = $_FILES['gambar']['tmp_name'];

	// ketika tidak ada gambar yang dipilih
	if ($error == 4) {
		//   echo "<script>
		//     alert('pilih gambar terlebih dahulu!');
		//     </script>";
		return 'nophoto.jpg';
	}
	// cek ekstensi file
	$daftar_gambar = ['jpg', 'jpeg', 'png'];
	$ekstensi_file = explode('.', $nama_file);
	$ekstensi_file = strtolower(end($ekstensi_file));
	if (!in_array($ekstensi_file, $daftar_gambar)) {
		echo "<script>
          alert('yang anda pilih bukan gambar!');
        </script>";
		return false;
	}

	// cek type file
	if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
		echo "<script>
          alert('bukan gambar!');
        </script>";
		return false;
	}
	// cek ukuran file
	// maksimal 5Mb == 5000000
	if ($ukuran_file > 5000000) {
		echo "<script>
          alert('ukuran terlalu besar!');
        </script>";
		return false;
	}
	// lolos pengecekan
	// siap upload file
	// generate nama file baru
	$nama_file_baru = uniqid();
	$nama_file_baru .= '.';
	$nama_file_baru .= $ekstensi_file;
	move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

	return $nama_file_baru;
}


function tambah($data)
{
	$conn = koneksi();

	// $gambar = htmlspecialchars($data['gambar']);
	$jenis = htmlspecialchars($data['jenis_makanan']);
	$kelompok = htmlspecialchars($data['kelompok_makanan']);
	$kategori = htmlspecialchars($data['kategori']);
	$harga = htmlspecialchars($data['harga']);

	$gambar = upload();
	if (!$gambar) {
		return false;
	}


	$query = "INSERT INTO makanan VALUES('', '$gambar', '$jenis', '$kelompok', '$kategori', '$harga');";
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
	$gambar = htmlspecialchars($data['display']);
	$jenis = htmlspecialchars($data['judul']);
	$kelompok = htmlspecialchars($data['pengarang']);
	$kategori = htmlspecialchars($data['penerbit']);
	$harga = htmlspecialchars($data['harga']);

	$gambar_lama = htmlspecialchars($data['gambar_lama']);

	$gambar = upload();
	if (!$gambar) {
		return false;
	}

	if ($gambar == 'nophoto.jpg') {
		$gambar = $gambar_lama;
	}

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
