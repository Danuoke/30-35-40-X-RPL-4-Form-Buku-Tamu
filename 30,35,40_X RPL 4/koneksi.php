<?php
	$host = "localhost";
	$db = "mydata";
	$uname = "root";
	$pass = "";
	
	$connect = mysqli_connect($host,$uname,$pass,$db);
	
	if(!$connect){
		echo "Gagal Koneksi ke Database";
	}else{
		echo "Koneksi berhasil<br>";
	}
?>
