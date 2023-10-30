<?php
if (isset($_POST['submit']))
    {      
    include 'koneksi.php';

     $fname=$_POST['fname'];
     $lname=$_POST['lname'];                 
     $email=$_POST['email'];
     $user=$_POST['username'];
     $pass=$_POST['password'];

    $query = mysqli_query($koneksi,"INSERT INTO signin VALUES ('$fname','$lname','$address','$user','$pass')"); 
    }

    if (($fname == "") || ($lname == "") || ($email == "") ||($user == "") || ($pass == "")) {
	echo "<script>alert('Isi Semua Data!'); window.location = 'signup.php';</script>";
}

if (($fname == $fname) || ($lname == $lname) || ($email == $email) ||($user == $username) && ($pass == $password)) {
	echo "<script>alert('Sign Up Berhasil'); window.location = 'login.php';</script>";
}
else {
	echo "<script>alert('Gagal Mendaftar'); window.location = 'signup.php';</script>";
}
?>