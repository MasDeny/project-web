
<?php
  include ("cek.php");
?>

<!DOCTYPE html>
<html>
<head>
  

  <title>PERPOL - Homepage</title>
  
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <script src="jquery/jquery-1.11.2.min.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
  <style type="text/css">

    /*to make the background image responsive and cover the page*/
    body{
      background-size: cover;
    }
  </style>

</head>
<body background="image/bg_lary.png">

  <!-- navigation bar -->
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.php">Perpustakaan POLIJE</a>
      </div>
      <div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="">Home</a></li>
          <li><a href="search.php">Daftar Buku</a></li>
          <li><a href="about.php">About</a></li>

        </ul>
      <ul class="nav navbar-nav navbar-right">

      <a href="login-page.php">
        <button type="button" class="btn btn-primary btn-md">
        <span class="glyphicon glyphicon-log-in"></span> Login Admin
        </button>
      </a>
      
       </ul>
      </div>
    </div>
  </nav>
	
	<div class="container">
		<!-- body text -->
		<div class="jumbotron">
			<img src="image/logo-box.png" width="550"height="140">
<h1 class="page-header">Selamat Datang di Perpustakaan POLIJE</h1>
      <p>PERPOL atau <strong>Perpustakaan POLIJE</strong> adalah layanan perpustakaan pusat Politeknik Negeri Jember yang ditujukan untuk mempermudah admin perpustakaan POLIJE.</p>
      <p>Untuk melakukan registrasi keanggotaan dan peminjaman serta pengembalian buku, kunjungi perpustakaan kami pada 
      hari kerja. Pencarian buku dapat dilakukan di bawah ini.</p>
    </div>
    
		<!-- form pencarian buku -->
		<div class="well well-lg text-center">
			<h2 class="text-info">Pencarian Buku</h2>

			<form role="form" action="search.php" class="form-horizontal" method="GET">
				
				<select name="category">
					<option value="judul">Judul buku</option>
					<option value="pengarang">Pengarang</option>
					<option value="penerbit">Penerbit</option>
					<option value="subyek">Subyek</option>
					<option value="thn_terbit">Tahun terbit</option>
					<option value="isbn">ISBN</option>
				</select>

				<input type="text" placeholder="Masukkan kata kunci" name="keyword" required>
				<input type="submit" name="search" value="cari" class="btn btn-info">
					
			</form>
			
		</div>
	</div>
</body>
</html>
