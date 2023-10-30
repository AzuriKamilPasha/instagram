<?php

$host = "localhost";
$username = "root";
$password = "";
$db = "instagram";
$koneksi = new mysqli ($host,$username,$password,$db);

if(mysqli_connect_error()){
	echo "Database tidak terhubung";
	}

?>