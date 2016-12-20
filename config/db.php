<?php
	$host = "localhost";	//nama host
	$user = "root";	//username phpMyAdmin
	$pass = "123";	//password phpMyAdmin
	$name = "perpustakaan";	//nama database

$koneksi = mysqli_connect($host, $user, $pass) or die("Koneksi ke database gagal!");
mysql_select_db($name, $koneksi) or die("Tidak ada database yang dipilih!");
?>