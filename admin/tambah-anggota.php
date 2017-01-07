<?php
	require "cekAdmin.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin - Tambah Anggota</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
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
	        <li class="dropdown active">
	       		<a class="dropdown-toggle" data-toggle="dropdown" href="#">ANGGOTA<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li class="active"><a href="tambah-anggota.php">Tambah Anggota</a></li>
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
			<h3>Tambah Anggota</h3>
			<h5 class="text-info">Petunjuk : Silahkan isi data dengan lengkap dan benar.</h5>
			<form role="form" class="form-horizontal" method="POST">

			  	<div class="form-group">
					<label for="nama">Nama lengkap :</label><br>
					<input type="text" maxlength="50" name="nama" placeholder="Nama lengkap" class="form-control" id="nama" required>
				</div>

				<div class="form-group">
					<label for="nim_nip">NIM/NIP :</label><br>
					<input type="text" maxlength="30" name="nim_nip" placeholder="NIM (untuk mahasiswa) / NIP (untuk pengajar)" class="form-control" id="nim_nip" required>
				</div>

				<div class="form-group">
					<label for="jenis_kelamin">Jenis kelamin :</label><br>
					<select name="jenis_kelamin" class="form-control">
						<option value="L">Laki-laki</option>
						<option value="P">Perempuan</option>
					</select>
				</div>

				<div class="form-group">
					<label for="status">Status :</label><br>
					<select name="status" class="form-control">
						<option value="Mahasiswa">Mahasiswa</option>
						<option value="Dosen">Dosen</option>
						<option value="Lainnya">Lainnya</option>
					</select>
				</div>
				<div class="form-group">
					<label for="Program Studi">Program Studi:</label><br>
					<select name="Prodi" class="form-control">
						<option value="Teknik Informatika">Teknik Informatika</option>
						<option value="Teknik Komputer">Teknik Komputer</option>
						<option value="Manajemen Informatika">Manajemen Informatika</option>
						<option value="Rekamedis">Rekamedis</option>
						<option value="Gizi Klinik">Gizi Klinik</option>
						<option value="Manajemen Agroindustri">Manajemen Agroindustri</option>
						<option value="Manajemen Agribisnis">Manajemen Agribisnis</option>
						<option value="Teknik Industri Pangan">Teknik Industri Pangan</option>
						<option value="Teknologi Pertanian">Teknologi Pertanian</option>
					</select>
				</div>
				
				<input type="submit" class="btn btn-success" value="Submit" name="insertAnggota">
			
			</form>

		</div>
	</div>

</body>
</html>

<?php
	//first check if post insertAnggota has value
	if(isset($_POST['insertAnggota'])){
		//if it is, then proceed to the following
		$nama = $_POST["nama"];
		$nim_nip = $_POST["nim_nip"];
		$jenis_kelamin = $_POST["jenis_kelamin"];
		$status= $_POST["status"];
		$Prodi = $_POST["Prodi"];
		// $tgl_masuk = $tgl_masuk["tgl_masuk"];

		$sql = "INSERT INTO anggota (nama, nim_nip, jenis_kelamin, status, prodi) VALUES ('$nama', '$nim_nip', '$jenis_kelamin', '$status', '$Prodi');";
		
		$result = mysqli_query($connection, $sql); 

		if($result){
?>

<script type="text/javascript">
	var notif = document.getElementById("notif");

	var show = "<div class='alert alert-success'><p><strong>Sukses!</strong> Data berhasil masuk.</p>";
	show+="<p><a href='daftar-anggota.php' class='btn btn-success'> Lihat semua anggota.</a></p></div>";
	notif.innerHTML = show;
</script>

<?php
		}else{
		//if inserting data fails, show error notification	
?>

<script type="text/javascript">
	var notif = document.getElementById("notif");
	var show = "<div class='alert alert-warning'><p><strong>Gagal!</strong> Terjadi kesalahan. Data tidak berhasil masuk.</p>";
	show+="<a href='daftar-anggota.php'>Lihat semua anggota.</a>";
	notif.innerHTML = show;
</script>
	</div>
</body>
</html>

<?php
		}
	}
?>