<?php

include 'koneksi.php';

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($koneksi, "SELECT * FROM signin WHERE username = '$username' AND password = '$password'");

if (($username == "") || ($password == "")) {
	echo "<script>alert('Isi Username dan Password!'); window.location = 'login.php';</script>";
}

if (($username == $username) && ($password == $password)) {
	session_start();
	$_SESSION['username'] = $username; //simpan var dalam server, kalo close dari browser, var gabakal ilang
	$_SESSION['password'] = $password;

	echo "<script>alert('Login Berhasil'); window.location = 'beranda.php';</script>";
}
else {
	echo "<script>alert('Gagal Login'); window.location = 'login.php';</script>";
}
?>