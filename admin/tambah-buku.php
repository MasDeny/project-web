<?php
	require "cekAdmin.php";
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
	<script src="../jquery/jquery-1.11.2.min.js"></script>
	<script src="../bootstrap/js/bootstrap.js"></script>
	<title>Admin - Tambah Buku</title>
</head>
<body>

	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">POLIJE Admin</a>
	    </div>
	    <div>
	      <ul class="nav navbar-nav">
	        <li><a href="index.php">HOME</a></li>
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
	        <li class="dropdown active">
	        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">BUKU<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li class="active"><a href="tambah-buku.php">Tambah Buku</a></li>
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
        			</ul>
        		</li>
        	</ul>	    	
	    </div>
	  </div>
	</nav>


	<div class="container">
		<div class="well well-md" id="notif">
			<!-- Message is show here -->
		</div>
		<div class="well well-lg">
			<h3>Tambah Buku</h3>
			<h5 class="text-info">Petunjuk : Silahkan isi data dengan lengkap dan benar.</h5>
			<form role="form" class="form-horizontal" method="POST">

			  	<div class="form-group">
					<label for="judul">Judul buku :</label><br>
					<input type="text" maxlength="100" name="judul" placeholder="Judul buku" class="form-control" id="judul" required>
				</div>

				<div class="form-group">
					<label for="pengarang">Pengarang :</label><br>
					<input type="text" maxlength="100" name="pengarang" placeholder="Pengarang (jika lebih dari satu, pisahkan dengan koma)" class="form-control" id="pengarang" required>
				</div>

				<div class="form-group">
					<label for="subyek">Subyek :</label><br>
					<input type="text" maxlength="50" name="subyek" placeholder="Subyek (referensi, fiksi, biografi, kesehatan, komputer, pendidikan, dll)" class="form-control" id="subyek" required>
				</div>

				<div class="form-group">
					<label for="isbn">ISBN (13) :</label><br>
					<input type="text" maxlength="13" name="isbn" placeholder="ISBN" class="form-control" id="isbn" required>
				</div>

				<div class="form-group">
					<label for="penerbit">Penerbit :</label><br>
					<input type="text" maxlength="50" name="penerbit" placeholder="Penerbit" class="form-control" id="penerbit" required>
				</div>

				<div class="form-group">
					<label for="thn_terbit">Tahun terbit :</label><br>
					<input type="text" maxlength="4" name="thn_terbit" placeholder="Tahun terbit" class="form-control" id="thn_terbit" required>
				</div>

				<div class="form-group">
					<label for="deskripsi_fisik">Deskripsi Fisik :</label><br>
					<input type="text" maxlength="100" name="deskripsi_fisik" placeholder="Deskripsi fisik (ketebalan, edisi, keadaan, dll)" class="form-control" id="deskripsi_fisik">
				</div>
			
					<input type="submit" class="btn btn-success" value="Submit" name="insertBuku">
			
			</form>

		</div>
		
<?php
	//first check if post insertBuku has value
	if(isset($_POST['insertBuku'])){
		//if it is, then proceed to the following

		$judul = $_POST['judul'];
		$pengarang = $_POST['pengarang'];
		$penerbit = $_POST['penerbit'];
		$thn_terbit = $_POST['thn_terbit'];
		$deskripsi_fisik = $_POST['deskripsi_fisik'];
		$isbn = $_POST['isbn'];
		$subyek = $_POST['subyek'];

		//insert the following data to database

		$sql = "INSERT INTO buku (judul, pengarang, penerbit, thn_terbit, deskripsi_fisik, isbn, subyek) VALUES ('$judul', '$pengarang', '$penerbit', '$thn_terbit', '$deskripsi_fisik', '$isbn', '$subyek')";
		$result = mysqli_query($connection, $sql); 
		
		if($result){
			//if inserting data succeeds, show notification in modal box
?>
<script type="text/javascript">
	var notif = document.getElementById("notif");

	var show = "<div class='alert alert-success'><p><strong>Sukses!</strong> Data berhasil masuk.</p>";
	show+="<p><a href='daftar-buku.php' class='btn btn-success'> Lihat semua buku.</a></p></div>";
	notif.innerHTML = show;
</script>
		
<?php
		}else{
		//if inserting data fails, show error notification	
?>

<script type="text/javascript">
	var notif = document.getElementById("notif");
	var show = "<div class='alert alert-warning'><p><strong>Gagal!</strong> Terjadi kesalahan. Data tidak berhasil masuk.</p>";
	show+="<a href='daftar-buku.php'>Lihat semua buku.</a>";
	notif.innerHTML = show;
</script>
	</div>
</body>
</html>

<?php
		}
	}
?>
