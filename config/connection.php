<?php
	$server = "localhost";
	$username = "root";
	$password = "123";
	$database = "perpustakaan";

	$connection = mysqli_connect($server, $username, $password, $database);

	if(!$connection){
		die("Maaf, gagal tersambung dengan database!");
	}
	
?>