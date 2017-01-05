<?php
	require ("cekAdmin.php");
?>

<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
	<title>Admin - Homepage</title>

</head>
<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="#">POLIJE Admin</a>
	    </div>
	    <div>
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">HOME</a></li>
	        <li class="dropdown">
	          <a class="dropdown-toggle" data-toggle="dropdown" href="#">PEMINJAMAN<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="tambah-peminjaman.php">Pinjam - Kembali</a></li>
	            <li><a href="daftar-peminjaman.php">Daftar Peminjaman</a></li>  
	          </ul>
	        </li>
	        <li class="dropdown">
	       		<a class="dropdown-toggle" data-toggle="dropdown" href="#">ANGGOTA<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="tambah-anggota.php">Tambah Anggota</a></li>
	            <li><a href="daftar-anggota.php">Daftar Anggota</a></li>  
	          </ul>
	        </li> 
	        <li class="dropdown">
	        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">BUKU<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="tambah-buku.php">Tambah Buku</a></li>
	            <li><a href="daftar-buku.php">Daftar Buku</a></li> 
	          </ul>
	        </li> 
	      </ul>
	    	<ul class="nav navbar-nav navbar-right">
        		<li class="dropdown">
        			<a class="dropdown-toggle" data-toggle="dropdown">
        				<span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION["username"]; ?> <span class="caret"></span>
        			</a> 
        			<ul class="dropdown-menu">
        				<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
						<li><a href="set.php"><span class="glyphicon-fast-backward"></span>Sething</a></li>
        			</ul>
        		</li>
        	</ul>
	    	
	    </div>
	  </div>
	</nav>


	<div class="container">
		<div class="well well-lg">
		<div class="jumbotron">
			<?php
				echo "<h2>Hello, ".$_SESSION["nama"]."!</h2>";
				echo "<p>Anda memiliki hak akses admin ke database perpustakaan ini.</p>";
			?>
			
			
		</div>
		<div class="well well-md">
			<h4>Petunjuk penggunaan aplikasi:</h4>
			<p>1. Pilih "Peminjaman -> Pinjam - Kembali" untuk melakukan input peminjaman dan pengembalian buku.</p>
			<p>2. Pilih "Peminjaman -> Daftar Peminjaman" untuk melihat daftar peminjaman dan pengembalian buku.</p>
			<p>3. Pilih "Anggota -> Tambah Anggota" untuk melakukan input anggota baru.</p>
			<p>4. Pilih "Anggota -> Daftar Anggota" untuk melihat daftar anggota.</p>
			<p>5. Pilih "Buku -> Tambah Buku" untuk melakukan input buku baru.</p>
			<p>6. Pilih "Buku -> Daftar Buku" untuk melihat daftar buku.</p>
			<p>7. Pilih "Logout" untuk keluar dari sesi aplikasi.</p>
			
		</div>
		<a href="logout.php"><button class="btn btn-danger btn-sm"> <span class="glyphicon glyphicon-log-out"></span> Logout</button></a>
		</div>
	</div>

</body>
</html>