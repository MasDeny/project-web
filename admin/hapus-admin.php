<?php
	include 'cekAdmin.php';
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<script src="../jquery/jquery-1.11.2.min.js"></script>
	<script src="../bootstrap/js/bootstrap.js"></script>
	<title>Notifikasi penghapusan admin</title>
</head>
<body>

	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">POLIJE Admin</a>
	    </div>
	    <div>
	       	<ul class="nav navbar-nav navbar-right">
        		<li><a href="set.php">Back</a>
        		</li>
        	</ul>	    	
	    </div>
	  </div>
	</nav>


	<div class="container">
		<div class="well well-lg">
<?php
	$id= $_GET['id'];

	$sql = "DELETE FROM petugas WHERE id_petugas = '$id'";
	$result = mysqli_query($connection, $sql); 
	if($result){
		echo "<p class='alert alert-success'>Buku berhasil dihapus!</p>";
	}else{
		echo "<p class='alert alert-warning'>Buku masih dipinjam dan tidak dapat dihapus.</p>";
	}

?>
			<a href="set.php" class="btn btn-info">Back</a>
		</div>
	</div>
</body>
</html>
