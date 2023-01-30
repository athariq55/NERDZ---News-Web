<?php

$username = $_POST['username'];
$password = $_POST['password'];
 
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

// menyeleksi data admin dengan username dan password yang sesuai
$sql1 = "SELECT * FROM akun WHERE username='$username' and pass='$password'";
$cek1 = $conn->query($sql1);
 
if($cek1 > 0){
	$_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
	header("location:admin.php");
}else{
	header("location:login.php?pesan=gagal");
}
?>