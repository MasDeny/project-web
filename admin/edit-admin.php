<?php
	require "cekAdmin.php";

	$id = $_GET['id'];

	$sql = "SELECT * FROM petugas WHERE id_petugas = '$id'";
	
	$result = mysqli_query($connection, $sql); 
	$count=mysqli_num_rows($result);

	if($count==1){
		while($row = mysqli_fetch_assoc($result)){

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
	<title>Admin - Edit Admin</title>
</head>
<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">POLIJE Admin</a>
	    </div>
	    <div>
	       	<ul class="nav navbar-nav navbar-right">
        		<li><a href="set.php#menu1">Back</a>
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
			<h3>Edit admin</h3>
			<h5 class="text-info">Petunjuk : Silahkan isi data dengan lengkap dan benar.</h5>
			<form role="form" class="form-horizontal" method="POST">

			  	<div class="form-group">
					<label for="judul">nama :</label><br>
					<input type="text" maxlength="100" name="nama" placeholder="isi nama lengkap" class="form-control" id="nama" value="<?php echo $row['nama']; ?>" required>
				</div>

				<div class="form-group">
					<label for="nip">nip :</label><br>
					<input type="text" maxlength="100" name="nip" placeholder="isi nip" class="form-control" id="nip" value="<?php echo $row['nip']; ?>" required>
				</div>

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
					<input type="text" maxlength="13" name="username" placeholder="isi username" class="form-control" id="username" value="<?php echo $row['username']; ?>" required>
				</div>

				<div class="form-group">
					<label for="password">password :</label><br>
					<input type="text" maxlength="50" name="password" placeholder="isi password" class="form-control" id="password" value="<?php echo $row['password']; ?>" required>
				</div>

<?php
				}
	}

?>			
				<input type="submit" class="btn btn-success" value="Submit" name="editAdmin">
				<a role="button" class="btn btn-default" id="resetButton" href="set.php#menu1">Batalkan</a>

			</form>
		</div>
	</div>

</body>
</html>

<?php

	if(isset($_POST['editAdmin'])){
		//if it is, then proceed to the following

$nama=$_POST['nama'];
$nip=$_POST['Nip'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$username=$_POST['username'];
$password=$_POST['password'];

		//update data to database
		$sql = "UPDATE petugas SET nama='$nama', nip='$nip', jenis_kelamin='$jenis_kelamin', username='$username', password='$password' WHERE id_petugas='$id' ";

		try{
			$result = mysqli_query($connection, $sql);	
		}catch(Exception $errorMessage){
			echo "Error :".$errorMessage;
		}
		

		if($result){
			echo "<script> alert('Data berhasil dimasukkan.');</script>";
			header("Location: set.php#menu1");
		}else{
			echo "<script>alert('Data gagal dimasukkan. Silahkan cek kembali.');</script>";
		}
	}
?>