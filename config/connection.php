<<<<<<< HEAD

<?php
	$server = "localhost";
	$username = "root";
	$password = "";
=======
<?php
	$server = "localhost";
	$username = "root";
	$password = "123";
>>>>>>> 5dbdf5335f459091a6cb6edef9814b0a20cb4959
	$database = "perpustakaan";

	$connection = mysqli_connect($server, $username, $password, $database);

	if(!$connection){
		die("Maaf, gagal tersambung dengan database!");
	}
	
?>