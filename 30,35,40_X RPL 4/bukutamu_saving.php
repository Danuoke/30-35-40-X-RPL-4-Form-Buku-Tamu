<?php
	include 'koneksi.php';
	
		
		$tanggal = date("d M Y H:m:s");
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$komentar = $_POST['komentar'];
		
		$query = "INSERT INTO bukutamu(tanggal,nama,email,komentar) VALUES ('$tanggal','$nama','$email','$komentar')";
		
		$hasil = mysqli_query($connect, $query);
		$num = mysqli_affected_rows($connect);
		
		if($num > 0){
			echo "<b>Inilah data-data yang tadi anda simpan</b>";
			echo "<br>";
			echo "<hr>";
			echo "$tanggal";
			echo "<br>";
			echo "Nama : $nama";
			echo "<br>";
			echo "Email : $email";
			echo "<br>";
			echo "Komentar : $komentar";
			echo "<hr>";
			echo "Data berhasil disimpan ke database";
			
		}else{
			echo "Data gagal disimpan ke database";
		}
?>
<html>
<body>
	<b><a href="bukutamu_list.php">Lihat List Data</a></b>
</body>
</html>