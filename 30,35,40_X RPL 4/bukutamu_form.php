<html>
	<head>
		<title> Buku tamu PHP dan MySQL </title>
	</head>
	<body>
		<h2> Formulir Buku tamu </h2>
		<hr>
	<form method="post" action="bukutamu_saving.php">
		<table width="494" border="0" cellpading="0" cellpading="0">
		<tr>
			<td width = "78"> Nama </td>
			<td width = "10"> : </td>
			<td width = "406"><input name="nama" type="text" size="25" maxlength="50"></td>
		</tr>
		<tr>
			<td> Email </td>
			<td> : </td>
			<td><input name="email" type="text" size="25" maxlength="50"></td>
		</tr>
		<tr>
			<td> Komentar </td>
			<td> : </td>
			<td><textarea name="komentar" cols="27" rows="5"></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" value = "kirim"></td>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
		</table>
	<hr>
	</form>
	</body>
</html>