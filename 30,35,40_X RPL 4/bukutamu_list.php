<html>
	<head> <title>Daftar Buku Tamu</title> </head>
	<body>
	<h2>Daftar Tamu pada Database Kami:</h2>
	<HR>
<?php
include_once("koneksi.php");

$sqlstr = "SELECT *FROM bukutamu";
$hasil = mysqli_query($connect,$sqlstr);
$row = mysqli_num_rows($hasil);
if($row){
	
		while($tamu = mysqli_fetch_assoc($hasil)){
			
			echo"Di simpan pada tanggal: ". $tamu['tanggal'];
			echo"<br>";
			echo"<b>Nama:</b> " . $tamu['nama'];
			echo"<br>";
			echo"<b>Email:</b> " . $tamu['email'];
			echo"<br>";
			echo"<b>Komentar: </b> " . $tamu['komentar'];
			echo"<HR>";
		}
	}else{
		echo "Data tidak ada";
	}	
?>
    <a href="bukutamu_form.php">Isi Buku Tamu lagi.?</a>
    </body>
    </html>