<html>
<head>
<title></title>
</head>
<body>
	<center>
	<h2>INSTA-KILOGRAM</h2>
	<a href="beranda.php"> <img src="home.png" width="50px"></a>
	<a href="add.php"> <img src="add.png" width="50px"></a>
	<a href="profile.php"> <img src="profile.jpg" width="50px"></a>
	<a href="logout.php"> <img src="exit.png" width="50px"></a>

	<?php
					include 'koneksi.php';
					$no=0;
					$query = mysql_query("select * from gallery");
					while ($data=mysql_fetch_array($query)) 
						{$no++;
				?>

				<tr>
					<td style="text-align: center;"> <?php echo $no; ?> </td>
				</tr>
				<tr>
					<td> <?php echo $data['username']; ?> </td>
				</tr>
				<tr>
					<td> <?php echo $data['picture']; ?> </td>
				</tr>
				<tr>
					<td> <?php echo $data['caption']; ?> </td>
				</tr>
				<tr>
					<td><a href="form_update.php?id=<?php echo $data['no']; ?>" >Ubah</a> </td>
					<td><a href="proses_hapus.php?id=<?php echo $data['no']; ?>" >Hapus</a></td>
				</tr>

				<?php } ?>
</center>
</body>
</html>