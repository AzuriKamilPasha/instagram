<!DOCTYPE html>
<html>
<head>
	<title>ADD PHOTOS/VIDEOS</title>
</head>
<body>
	<CENTER>
	<H2>UPLOAD PHOTO?</H2>
	<table>
		<form method="POST" action="prosesadd.php" enctype="multipart/form-data">
			<tr>
				<td><input type="file" name="file"></td>
			</tr>
			<TR>
				<td><textarea name="caption"></textarea> </td>
			</TR>
			<tr>
				<td><input type="submit" name="submit"></td>
			</tr>
		</form>
	</table>
	</CENTER>
</body>
</html>