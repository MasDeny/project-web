<?php
	include 'cekAdmin.php';
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
	<title>Notifikasi penghapusan buku</title>
</head>
<body>

	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">POLIJE Admin</a>
	    </div>
	    <div>
	       	<ul class="nav navbar-nav navbar-right">
        		<li><a href="daftar-buku.php">Back</a>
        		</li>
        	</ul>	    	
	    </div>
	  </div>
	</nav>


	<div class="container">
		<div class="well well-lg">
<?php
	$id= $_GET['id'];

	$sql = "DELETE FROM buku WHERE id_buku = '$id'";
	$result = mysqli_query($connection, $sql); 
	if($result){
		echo "<p class='alert alert-success'>Buku berhasil dihapus!</p>";
	}else{
		echo "<p class='alert alert-warning'>Buku masih dipinjam dan tidak dapat dihapus.</p>";
	}

?>
			<a href="daftar-buku.php" class="btn btn-info">Back</a>
		</div>
	</div>
</body>
</html>
