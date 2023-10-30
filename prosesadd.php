<?php

include "koneksi.php";

$caption = $_POST['caption'];
$nama_file = $_FILES['file']['name'];
$ukuran_file = $_FILES['file']['size'];
$tipe_file = $_FILES['file']['type'];
$tmp = $_FILES['file']['tmp_name'];
$path = "images/".$nama_file;
if($tipe_file == "image/jpeg"||$tipe_file ==  "image/png"){
	if(ukuran_file<= 1000000){
		if(move_uploaded_file($tmp, $path)){
			$query = "INSERT INTO gallery(nama,ukuran,tipe,caption) VALUES ('$nama_file','$ukuran_file','$tipe_file"','$caption')";
			$sql = mysql_query($koneksi,$query);
			if($sql){ header("location:beranda.php");}
			else{echo "Maaf terjadi kesalahan saat mencoba untuk menyimpan data ke database"; echo "<br><a href='add.php';>Kembali ke form upload</a>";}
		}
		else{echo "Gambar gagal diupload"; echo "<br><a href='add.php';>Kembali ke form upload</a>";}
	}
	else{echo "Ukuran gambar melebihi kapasitas!"; echo "<br><a href='add.php';>Kembali ke form upload</a>";}
}
else{echo "Tipe gambar yang diuload harus jpg/png!"; echo "<br><a href='add.php';>Kembali ke form upload</a>";} 

if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak
  // Proses simpan ke Database
  $query = "INSERT INTO gallery VALUES('$caption','$fotobaru')";
  $sql = mysqli_query($connect, $query); // Eksekusi/ Jalankan query dari variabel $query
  if($sql){ // Cek jika proses simpan ke database sukses atau tidak
    // Jika Sukses, Lakukan :
    header("location: beranda.php"); // Redirect ke halaman index.php
  }else{
    // Jika Gagal, Lakukan :
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='add.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='add.php'>Kembali Ke Form</a>";
}
?>