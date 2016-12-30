<?php
	include "cek.php";
?>

<!DOCTYPE html>
<html>
<head>

	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style type="text/css">
  	
  </style>

		/*to make the background image responsive and cover the page*/
		body{
			background-size: cover;
		}
	</style>

	<title>Login Page</title>
</head>

<body background="img/bg_lary.jpg">

	<!-- navigation bar -->
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">Perpustakaan POLIJE</a>
	    </div>
	    <div>
	      <ul class="nav navbar-nav">
	        <li><a href="index.php">Home</a></li>
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
		<div class="well well-md"> 
			<h3>Login Admin Perpustakaan POLIJE</h3>
			<p class="text-info">Silahkan login dengan memasukkan username beserta password.</p>
	    	<form role="form" action="login.php" method="POST">
		        <div class="col-xs-3">
		        	<input type="text" name="fUsername" class="form-control" placeholder="USERNAME" required>
		        </div>
		        <br>
		        <br>
		        <div class="col-xs-3">
		        	<input type="password" name="fPassword" class="form-control" placeholder="PASSWORD" required>
		        </div>
		       	<br>
		       	<br>
		       	<p class="text-danger">
		       		<?php

		       			if(isset($_SESSION['error'])){
		       				unset($_SESSION['error']); 
		       				echo "Username dan password yang Anda masukkan tidak sesuai.";
		       			}
	       						       			
		       		?>
		       	</p>
		    
		    	<div class="col-xs-3">
		        	<input class="btn btn-info" type="submit" value="Login">
		        </div>
			</form>
			<br>
			<br>
			<div class="text-center">
				<p class="text-warning">Bukan admin? Silahkan kembali.</p>
				<a href="index.php"><button class="btn btn-default"><span class="glyphicon glyphicon-home"></span> Home</button></a>
				<h5>Copyright 2016</p>
			</div>
		</div>
	</div>
</body>
</html>