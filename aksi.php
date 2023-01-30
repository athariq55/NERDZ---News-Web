<?php

$id = $_POST['id_news'];
$judul = $_POST['judul'];
$tanggal = $_POST['tanggal'];
$jenis = $_POST['jenis'];
$isi = $_POST['isi'];
$penulis = $_POST['penulis'];

$foto_tmp = $_FILES['gambar']['tmp_name'];
$foto_nama_file = $_FILES['gambar']['name'];


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webberita";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($foto_nama_file) {
    //Maka bagaimana
    //Upload/memindahkan foto ke lokasi permanen
    move_uploaded_file($foto_tmp, 'images/' . $foto_nama_file);

    //Perintah insert data
    $sql = "INSERT INTO databerita (id_news, judul, tanggal, gambar, jenis, isi, penulis)
					VALUES('$id', '$judul', '$tanggal', '$foto_nama_file', '$jenis', '$isi', '$penulis')";
    //Jika foto tidak ada
	
} else {
    //Maka bagaimana
    $sql1 = "INSERT INTO databerita (id_news, judul, tanggal, jenis, isi, penulis)
					VALUES('$id', '$judul', '$tanggal', '$jenis', '$isi', '$penulis')";
}

//eksekusi query
$conn->query($sql);

header("location:tambahdata.php");
?>