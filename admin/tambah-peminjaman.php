<?php
	require "cekAdmin.php";
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <script src="../js/jquery.js"></script>
  <script src="../js/bootstrap.min.js"></script>
	<title>Admin - Peminjaman</title>
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
	            <li class="active"><a href="tambah-peminjaman.php">Pinjam - Kembali</a></li>
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
			<h2 class="text-center">Peminjaman dan Pengembalian</h2>
			<div class="well well-md">
				<h3 class="text-center">Peminjaman</h3>
				<form role="form" class="form-horizontal" method="POST">

				  	<div class="form-group">
						<label for="id_anggota">NIM/NIP peminjam:</label><br>
						<input type="text" maxlength="30" name="id_anggota" placeholder="NIM / NIP" class="form-control" id="id_anggota" required>
					</div>

					<div class="form-group">
						<label for="id_buku">ISBN buku :</label><br>
						<input type="text" maxlength="13" name="id_buku" placeholder="ISBN buku" class="form-control" id="id_buku" required>
					</div>

					<div class="form-group">
						<label for="tgl_pinjam">Tanggal pinjam :</label><br>
						<input type="date" maxlength="30" name="tgl_pinjam" placeholder="Tanggal pinjam" class="form-control" id="tgl_pinjam" required>
					</div>

					<div class="form-group">
						<label for="tgl_pinjam">Tanggal kembali :</label><br>
						<input type="date" maxlength="30" name="tgl_kembali" placeholder="Tanggal kembali" class="form-control" id="tgl_kembali" required>
   					</div>

					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Submit" name="insertPeminjaman">
					</div>

				</form>


			</div>
			<div class="well well-md">
				<h3 class="text-center">Pengembalian</h3>

				<!-- first, show all books borrowed by the member by entering the member id -->
				<form role="form" class="form-horizontal" method="POST">

					<div class="form-group">
						<label for="id_anggota">NIM/NIP peminjam</label>
						<input type="text" maxlength="30" name="id_anggota" placeholder="NIM / NIP" class="form-control" id="id_anggota" required>
					</div>
					
					<div class="form-group">
						<input type="submit" class="btn btn-success" value="Lihat peminjaman" name="viewPeminjaman">
					</div>					

				</form>
			</div>
		

<?php
	//first check if post insertPeminjaman has value
	if(isset($_POST['insertPeminjaman'])){
		
		//catch error that may be created in the query process
		
			//if it is, then proceed to the following
			$id_anggota = $_POST["id_anggota"];
			$id_buku = $_POST["id_buku"];
			$tgl_pinjam = $_POST["tgl_pinjam"];
			$tgl_kembali = $_POST["tgl_kembali"];
			$id_petugas = $_SESSION["nip"];

			$sql = "INSERT INTO peminjaman (id_anggota, id_buku, tgl_pinjam, tgl_kembali, id_petugas) VALUES ('$id_anggota', '$id_buku', '$tgl_pinjam', '$tgl_kembali', '$id_petugas');";
			
			$result = mysqli_query($connection, $sql); 	

		if($result){
?>

<script type="text/javascript">

	var notif = document.getElementById("notif");

	var show = "<div class='alert alert-success'><p><strong>Sukses!</strong> Data berhasil masuk.</p>";
	show+="<strong></strong>";
	show+="<p><a href='daftar-peminjaman.php' class='btn btn-success'> Lihat semua data peminjaman.</a></p></div>";
	notif.innerHTML = show;
</script>

<?php
		}else{
		//if inserting data fails, show error notification	
?>

<script type="text/javascript">
	var notif = document.getElementById("notif");
	var show = "<div class='alert alert-warning'><p><strong>Gagal!</strong> Terjadi kesalahan. Data tidak berhasil masuk.</p>";
	
	show += "<a href='daftar-peminjaman.php' class='btn btn-warning'>Lihat data semua peminjaman.</a>";
	notif.innerHTML = show;
</script>

<?php
		}
	}else if(isset($_POST['viewPeminjaman'])){
		//if it is, then proceed to the following
		$id_anggota = $_POST['id_anggota'];

		$sql = "SELECT * FROM buku b, anggota a, peminjaman p WHERE b.isbn = p.id_buku AND a.nim_nip = p.id_anggota AND p.id_anggota =  '$id_anggota'";

		$result = mysqli_query($connection, $sql);

		if($result){
			$count = mysqli_num_rows($result);		
		}else{
			die("Maaf, tidak ditemukan data yang cocok.");
		}
?>

		<div class="well well-lg">
			<table class="table table-hover table-bordered">
				<tr>
					<th>No.</th>
					<th>ISBN</th>
					<th>Judul buku</th>
					<th>Tanggal pinjam</th>
					<th>Tanggal kembali</th>
					<th>Keterangan</th>
					<th>Action</th>
				</tr>
<?php
	
		if($count>0){
			$number = 1;	
			
			echo "<p>$count buku telah dipinjam oleh anggota bernomor $id_anggota.<p>";
			
			while($row = mysqli_fetch_assoc($result)) {
				if(!isset($row["kembali"])){
					$status = "belum kembali";
					//$buttonStatus is to decide whether the button is clickable or not
					//it is clickable if the book is not yet returned
					$buttonStatus = "active";
		        }else{
		        	$status = "dikembalikan ".$row["kembali"];
		        	//it is unclickable if the book is already returned
		        	$buttonStatus = "disabled";
		        }

				$id = $row["id_peminjaman"];
		        echo "<tr> <td>" . $number. "</td><td> " . 
		        $row["isbn"]."</td><td>".
		        $row["judul"]. "</td><td> " .
		        $row["tgl_pinjam"]. "</td><td> " . 
		        $row["tgl_kembali"]. "</td><td> " .
		        $status. "</td><td> ".
		        //buttonStatus is used here as a parameter if the button is clickable or not
		        "<a href='kembali-page.php?id=$id' role='button' class='btn btn-primary $buttonStatus btn-sm'>Kembalikan</a></td></tr>";
				$number++;
			}
			
		}
	}
?>
			</table>
		</div>
	</div>
	
</body>
</html>

<script type="text/javascript">
	//source code : modified from http://jsfiddle.net/7LXPq/93/
	$(document).ready( function() {

		//create object Date
    	var now = new Date();
 		var day = ("0" + now.getDate()).slice(-2);
    	var month = ("0" + (now.getMonth() + 1)).slice(-2);
    	day = parseInt(day);

    	//default date is today
    	var today = now.getFullYear()+"-"+(month)+"-"+(day) ;

    	//set default date to tgl_pinjam
		$('#tgl_kembali').val(today);

		//date to return book is a week after it's borrowed
		//so the default is today + 7
		var returnLoan = now.getFullYear()+"-"+(month)+"-"+(day+7);
		//set default date to tgl_kembali
		$('#tgl_pinjam').val(returnLoan);

	});

</script>