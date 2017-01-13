<?php
	require "cekAdmin.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Admin - List petugas</title>
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/style.css">
		<script src="../js/jquery.js"></script>
		<script src="../js/bootstrap.min.js"></script>
		<script src="../js/style.js"></script>
	</head>
	<body>
		<form method="post" action="">
			<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand" href="index.php">POLIJE Admin</a>
					</div>
					<div>
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php">HOME</a></li>
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
									<li><a href="../../logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>
									<li><a href="set.php"><span class="glyphicon glyphicon-cog"></span> Setting</a></li>
								</ul>
							</li>
						</ul>
						
					</div>
				</div>
			</nav>
			<div class="container">
				
				<ul class="nav nav-tabs">
					<li class="active"><a data-toggle="tab" href="#home">Tambah Admin</a></li>
					
					<li><a data-toggle="tab" href="#menu1">Edit Admin</a></li>
					
					
					
				</ul>
				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
						<h3>Tambah Admin</h3>
						<div class="form-group">
							<label for="nama">Nama lengkap :</label><br>
							<input type="text" maxlength="50" name="nama" placeholder="Masukkan nama lengkap" class="form-control" id="nama" required>
						</div>
						<div class="form-group">
							<label for="Nip">NIP :</label><br>
							<input type="text" maxlength="50" name="nip" placeholder="Masukkan NIP" class="form-control" id="Nip" required>
						</div>
						<div class="form-group">
							<label for="jenis_kelamin">Jenis kelamin :</label><br>
							<select name="jenis_kelamin" class="form-control">
								<option value="L">Laki-laki</option>
								<option value="P">Perempuan</option>
							</select>
						</div>
						<div class="form-group">
							<label for="username">username :</label><br>
							<input type="text" maxlength="50" name="username" placeholder="username" class="form-control" id="username" required>
						</div>
						<div class="form-group">
							<label for="password">password :</label><br>
							<input type="password" maxlength="50" name="password" placeholder="password" class="form-control" id="password" required>
						</div>
						<input type="submit" class="btn btn-success" value="Submit" name="insert">
					</div>
					<div id="menu1" class="tab-pane fade ">
						<h3>Edit Admin</h3>
						<table class="table table-hover table-bordered">
							<tr>
								<th>No.</th>
								<th>Nama</th>
								<th>NIP</th>
								<th>Jenis kelamin</th>
								<th>Username</th>
								<th>Password</th>
								<th>Action</th>
							</tr>
							
							
							<?php
							$sql =  "select * from petugas
							order by id_petugas;";
									$result = mysqli_query($connection, $sql);
										$count=mysqli_num_rows($result);
								if($count>0){
										$number = 1;
									
									echo "<p>$count data ditampilkan.<p>";
										
										while($row = mysqli_fetch_assoc($result)) {
											$id = $row["id_petugas"];
									echo "<tr> <td>" . $number. "</td><td> " .
								$row["nama"]. "</td><td> " .
							$row["nip"]."</td><td>".
						$row["jenis_kelamin"]."</td><td>".
					$row["username"]."</td><td>".
				$row["password"]."</td><td>".
				
				"<a href='edit-admin.php?id=$id' role='button' class='btn btn-info btn-sm'>Edit</a>".
				"<a href='hapus-admin.php?id=$id' role='button' class='btn btn-danger btn-sm'>Hapus</a></td></tr>";
				
				$number++;
						
				}
				}else{
					echo "Maaf, tidak ditemukan data yang cocok.";
					
				}
			?>
		</table>
	</div>
</div>

<?php
	//first check if post insertpetugas has value
	if(isset($_POST['insert'])){
		//if it is, then proceed to the following
		$nama = $_POST["nama"];
		$nip = $_POST["nip"];
		$jenis_kelamin = $_POST["jenis_kelamin"];
		$username= $_POST["username"];
		$Password = $_POST["password"];
		// $tgl_masuk = $tgl_masuk["tgl_masuk"];
		$sql = "INSERT INTO petugas (nama, nip, jenis_kelamin, username, password) VALUES ('$nama', '$nip', '$jenis_kelamin', '$username', '$Password');";
		
		$result = mysqli_query($connection, $sql);
		
	
?>
</form>
<script type="text/javascript">
	var notif = document.getElementById("notif");
	var show = "<div class='alert alert-success'><p><strong>Sukses!</strong> Data berhasil masuk.</p>";
	show+="<p><a href='set.php' class='btn btn-success'> Lihat semua admin.</a></p></div>";
	notif.innerHTML = show;
</script>
<?php
		}else{
			//if inserting data fails, show error notification
?>
<script type="text/javascript">
	var notif = document.getElementById("notif");
	var show = "<div class='alert alert-warning'><p><strong>Gagal!</strong> Terjadi kesalahan. Data tidak berhasil masuk.</p>";
	show+="<a href='set.php'>Lihat semua admin.</a>";
	notif.innerHTML = show;
</script>
</div>
<script>
	$('#password').password();
</script>
</body>
</html>
<?php
		}
?>