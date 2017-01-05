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

	<title>Admin - List Buku</title>
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
	            <li><a href="tambah-buku.php">Tambah Buku</a></li>
	            <li class="active"><a href="daftar-buku.php">Daftar Buku</a></li> 
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
			<h1>List Buku</h1>
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

		<button type="button" id="search" class="btn btn-primary btn-block">Pencarian</button>

		<!-- form pencarian buku -->

			<div class="well well-lg" id="searchBox">
				<h2 class="text-center">Pencarian Buku</h2>
				<div class="text-center">
					<form role="form" method="GET">
						<select name="category">
							<option value="judul">Judul buku</option>
							<option value="pengarang">Pengarang</option>
							<option value="penerbit">Penerbit</option>
							<option value="subyek">Subyek</option>
							<option value="thn_terbit">Tahun terbit</option>
							<option value="isbn">ISBN</option>
						</select>
						<input type="text" placeholder="Masukkan kata kunci" name="keyword">
						<input type="submit" name="search" value="cari" class="btn btn-info">
					</form>
				</div>
			</div>

			<table class="table table-hover table-bordered">
				<tr>
					<th>No.</th>
					<th>Judul</th>
					<th>Pengarang</th>
					<th>Penerbit</th>
					<th>Subyek</th>
					<th>Tahun terbit</th>
					<th>Deskripsi Fisik</th>
					<th>ISBN</th>
					<th>Action</th>
				</tr>
<?php
		
	if(isset($_GET['category'])&&isset($_GET['keyword'])){
		$category = $_GET['category'];
		$keyword = $_GET['keyword'];

		//search for data in table buku where category contains keyword
		$sql = "SELECT * FROM buku WHERE $category LIKE '%$keyword%'";
		$result = mysqli_query($connection, $sql); 
		
		$count=mysqli_num_rows($result);	
	}else{
		$sql = "SELECT * FROM buku;";
		$result = mysqli_query($connection, $sql); 
		
		$count=mysqli_num_rows($result);	
	}


	if($count>0){
		$number = 1;	
		
		echo "<p>$count data ditampilkan.<p>";
		
		while($row = mysqli_fetch_assoc($result)) {
			$id = $row["id_buku"];
	        echo "<tr> <td>" . $number. "</td><td> " . 
	        $row["judul"]. "</td><td> " .
	        $row["pengarang"]."</td><td>".
	        $row["penerbit"]."</td><td>".
	        $row["subyek"]."</td><td>".
	        $row["thn_terbit"]."</td><td>".
	        $row["deskripsi_fisik"]."</td><td>".
	        $row["isbn"]."</td><td>".
	        
	        "<a href='edit-buku.php?id=$id' role='button' class='btn btn-info btn-sm'>Edit</a>".
	        "<a href='delete-buku.php?id=$id' role='button' class='btn btn-danger btn-sm'>Hapus</a></td></tr>";
	        

	        $number++;

		}
		
	}else{
		echo "Maaf, tidak ditemukan data yang cocok.";
		
	}
?>
			</table>
		</div>
	</div>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		
		//hide the div when document first ready
		$("#searchBox").hide();	
		$("#search").click(function(){
			$("#searchBox").toggle("medium");
		});
	});
</script>