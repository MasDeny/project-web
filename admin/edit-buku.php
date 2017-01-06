<?php
	require "cekAdmin.php";

	$id = $_GET['id'];

	$sql = "SELECT * FROM buku WHERE id_buku = '$id'";
	
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
	<title>Admin - Edit Buku</title>
</head>
<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="index.php">POLIJE Admin</a>
	    </div>
	    <div>
	       	<ul class="nav navbar-nav navbar-right">
        		<li><a href="daftar-buku.php">Back</a>
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
			<h3>Edit Buku</h3>
			<h5 class="text-info">Petunjuk : Silahkan isi data dengan lengkap dan benar.</h5>
			<form role="form" class="form-horizontal" method="POST">

			  	<div class="form-group">
					<label for="judul">Judul buku :</label><br>
					<input type="text" maxlength="100" name="judul" placeholder="Judul buku" class="form-control" id="judul" value="<?php echo $row['judul']; ?>" required>
				</div>

				<div class="form-group">
					<label for="pengarang">Pengarang :</label><br>
					<input type="text" maxlength="100" name="pengarang" placeholder="Pengarang (jika lebih dari satu, pisahkan dengan koma)" class="form-control" id="pengarang" value="<?php echo $row['pengarang']; ?>" required>
				</div>

				<div class="form-group">
					<label for="subyek">Subyek :</label><br>
					<input type="text" maxlength="50" name="subyek" placeholder="Subyek (referensi, fiksi, biografi, kesehatan, komputer, pendidikan, dll)" class="form-control" id="subyek" value="<?php echo $row['subyek']; ?>" required>
				</div>

				<div class="form-group">
					<label for="isbn">ISBN (13) :</label><br>
					<input type="text" maxlength="13" name="isbn" placeholder="ISBN" class="form-control" id="isbn" value="<?php echo $row['isbn']; ?>" required>
				</div>

				<div class="form-group">
					<label for="penerbit">Penerbit :</label><br>
					<input type="text" maxlength="50" name="penerbit" placeholder="Penerbit" class="form-control" id="penerbit" value="<?php echo $row['penerbit']; ?>" required>
				</div>

				<div class="form-group">
					<label for="thn_terbit">Tahun terbit :</label><br>
					<input type="text" maxlength="4" name="thn_terbit" placeholder="Tahun terbit" class="form-control" id="thn_terbit" value="<?php echo $row['thn_terbit']; ?>" required>
				</div>

				<div class="form-group">
					<label for="deskripsi_fisik">Deskripsi Fisik :</label><br>
					<input type="text" maxlength="100" name="deskripsi_fisik" placeholder="Deskripsi fisik (ketebalan, edisi, keadaan, dll)" class="form-control" id="deskripsi_fisik" value="<?php echo $row['deskripsi_fisik']; ?>">
				</div>

<?php
				}
	}

?>			
				<input type="submit" class="btn btn-success" value="Submit" name="editBuku">
				<a role="button" class="btn btn-default" id="resetButton" href="daftar-buku.php">Batalkan</a>

			</form>
		</div>
	</div>

</body>
</html>

<?php

	if(isset($_POST['editBuku'])){
		//if it is, then proceed to the following

		$judul = $_POST['judul'];
		$pengarang = $_POST['pengarang'];
		$penerbit = $_POST['penerbit'];
		$thn_terbit = $_POST['thn_terbit'];
		$deskripsi_fisik = $_POST['deskripsi_fisik'];
		$isbn = $_POST['isbn'];
		$subyek = $_POST['subyek'];

		//update data to database
		$sql = "UPDATE buku SET judul='$judul', pengarang='$pengarang', penerbit='$penerbit', thn_terbit='$thn_terbit', deskripsi_fisik='$deskripsi_fisik', isbn='$isbn', subyek='$subyek' WHERE id_buku='$id' ";

		try{
			$result = mysqli_query($connection, $sql);	
		}catch(Exception $errorMessage){
			echo "Error :".$errorMessage;
		}
		

		if($result){
			echo "<script> alert('Data berhasil dimasukkan.');</script>";
			header("Location: daftar-buku.php");
		}else{
			echo "<script>alert('Data gagal dimasukkan. Silahkan cek kembali.');</script>";
		}
	}
?>