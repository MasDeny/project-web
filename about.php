<?php
	include ("cek.php");
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
</head>
<body background="img/bg_lib.jpg">
<!-- navigation bar -->
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">Perpustakaan Polije</a>
	    </div>
	    <div>
	      <ul class="nav navbar-nav">
	        <li><a href="index.php">Home</a></li>
	        <li><a href="search.php">Daftar Buku</a></li>
	        <li class="active"><a href="">About</a></li>

	      </ul>
		  <ul class="nav navbar-nav navbar-right">

			<a href="login-page.php">
				<button type="button" class="btn btn-primary btn-lg">
				<span class="glyphicon glyphicon-log-in"></span> Login Admin
				</button>
			</a>
		  
	     </ul>
	    </div>
	  </div>
	</nav>

	<div class="container">
		<!-- body text -->
		<div class="jumbotron" style="background: white">
	
			<h1 class="page-header">About Us</h1>
			<p>PerpusPOL adalah sistem informasi Perpustakaan yang terintegrasi, meliputi katalog buku secara online dan inventori perpustakaan. <br> 
			Dibuatnya aplikasi web ini untuk mempermudah admin perpustakaan polije untuk melayani pengembalian dan peminjaman buku dan katalog yang ada di perpustakaan POLIJE</p>
			<br>
			<div class="alert alert-warning">
			<p><strong>DISCLAIMER : </strong></p>
			<p>Aplikasi web ini <strong>bukan situs sebenarnya</strong>. Aplikasi ini dibuat oleh mahasiswa Program Studi Manajemen 
			tugas mata kuliah Pemrograman Web</p>
			</div>
			<div class="alert alert-success">
			<p><b>Nama Kelompok : </b>
			<br>Ullyn Prastiwi (E3115)
			<br>Gitariani (E3115)
			<br>Ahmad Maftuh Habibi(E3115)
			<br>Deny Prayantoro (E31150678)</p>
			</div>
		</div>
	</div>
</body>
</html>