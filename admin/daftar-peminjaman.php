<?php
	include "cekAdmin.php";
?>

<!DOCTYPE html>
<html>
<head>    
	<link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
	<title>Admin - List Peminjaman</title>
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
	        <li class="dropdown active">
	          <a class="dropdown-toggle" data-toggle="dropdown" href="#">PEMINJAMAN<span class="caret"></span></a>
	          <ul class="dropdown-menu">
	            <li><a href="tambah-peminjaman.php">Pinjam - Kembali</a></li>
	            <li class="active"><a href="daftar-peminjaman.php">Daftar Peminjaman</a></li>  
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
        			</ul>
        		</li>
        	</ul>	    	
	    </div>
	  </div>
	</nav>


	<div class="container">
		<div class="well well-lg">
			<h1>Daftar Peminjaman Buku</h1>
			<div class="well well-sm">
				<p>Petunjuk</p>
				<p>1. Klik pencarian dan masukkan keyword untuk mencari</p>
				<p>2. Klik edit untuk mengedit</p>
				<p>3. Klik hapus untuk menghapus</p>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="well well-lg" style="background: white">
		</div>
		<div class="well well-lg" style="background: white">
			<table class="table table-hover table-bordered">
				<tr>
					<th>No.</th>
					<th>NIM/NIP peminjam</th>
					<th>Nama peminjam</th>
					<th>Judul buku</th>
					<th>ISBN buku</th>
					<th>Tanggal pinjam</th>
					<th>Tanggal harus kembali</th>
					<th>Tanggal kembali</th>
					
				</tr>

<?php
	//create query to select all attributes from the three tables using foreign key 
	$sql = "SELECT * FROM buku b, anggota a, peminjaman p WHERE b.isbn = p.id_buku AND a.nim_nip = p.id_anggota";
	$result = mysqli_query($connection, $sql);
	
	if(!$result){
		die("No result found");
	}else{
		$count=mysqli_num_rows($result);	
	}

	if($count>0){
		$number = 1;	
		
		echo "<p>$count data ditampilkan.<p>";
		
		while($row = mysqli_fetch_assoc($result)) {
			$id = $row["id_peminjaman"];
			if(!isset($row["kembali"])){
				//if row kembali is empty, set status to 'belum kembali'
				$status = "belum kembali";
	        }else{
	        	//if row kembali already has value, set status to row kembali value
	        	$status = ($row["kembali"]);
	        }
	        echo "<tr> <td>" . $number. "</td><td> ". 
	        $row["id_anggota"]."</td><td>".
	        $row["nama"]."</td><td>".
	        $row["judul"]."</td><td>".
	        $row["id_buku"]."</td><td>".
	        $row["tgl_pinjam"]."</td><td>".
	        $row["tgl_kembali"]."</td><td>".
	        $status."</td></tr>";
	        
	   
	        $number++;
	    }
	}
?>
	
			</table>
		</div>
	</div>
</body>
</html>


