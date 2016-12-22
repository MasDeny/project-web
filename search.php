<?php
	include "cek.php";

	//if category and keyword already have values (which means user accessed it through search box in index page
	//then proceed the following by showing ONLY what user requests	
	if(isset($_GET['category'])||isset($_GET['keyword'])){
		$category = $_GET['category'];
		$keyword = $_GET['keyword'];

		//search for data in table buku where category contains keyword
		$sql = "SELECT * FROM buku WHERE $category LIKE '%$keyword%'";
		$result = mysqli_query($connection, $sql); 
		
		$count=mysqli_num_rows($result);

	//if category and keyword are still null (which means user accessed it through navbar)
	//then proceed the following by showing all data stored in database		
	}else{
		$sql = "SELECT * FROM buku;";
		$result = mysqli_query($connection, $sql); 
		
		$count=mysqli_num_rows($result);	
	}
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>UNSLA - Pencarian</title>

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
<body background="img/bg_lib.jpg">
<!-- navigation bar -->
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">UNS Library Automation</a>
	    </div>
	    <div>
	      <ul class="nav navbar-nav">
	        <li><a href="index.php">Home</a></li>
	        <li class="active"><a href="">Daftar Buku</a></li>
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
		<div class="well well-lg" style="background: white">
		<h1 class="page-header">Pencarian Buku</h1>
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
			</tr>


<?php

	if($count>0){
		$number = 1;	
		
		echo "<p class='text-info'>Ditemukan $count data cocok dengan keyword yang Anda masukkan<p>";
		
		while($row = mysqli_fetch_assoc($result)) {
	        echo "<tr> <td>" . $number. "</td><td> " . 
	        $row["judul"]. "</td><td> " .
	        $row["pengarang"]."</td><td>".
	        $row["penerbit"]."</td><td>".
	        $row["subyek"]."</td><td>".
	        $row["thn_terbit"]."</td><td>".
	        $row["deskripsi_fisik"]."</td><td>".
	        $row["isbn"]."</td></tr>";
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
