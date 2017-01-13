<?php 
require ("cekAdmin.php");

?>
<h3><span class="glyphicon glyphicon-briefcase"></span>  Edit admin</h3>
<a class="btn" href="set.php"><span class="glyphicon glyphicon-arrow-left"></span>  Kembali</a>
<?php
$id_brg=mysql_real_escape_string($_GET['id']);
$det=mysql_query("select * from petugas where id='$id_brg'")or die(mysql_error());
while($d=mysql_fetch_array($det)){
?>					
	<form action="update.php" method="post">
		<table class="table">
			<tr>
				<td></td>
				<td><input type="hidden" name="id" value="<?php echo $d['id'] ?>"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" class="form-control" name="nama" value="<?php echo $d['nama'] ?>"></td>
			</tr>
			<tr>
				<td>nip</td>
				<td><input type="text" class="form-control" name="nip" value="<?php echo $d['nip'] ?>"></td>
			</tr>
			<tr>
				<td>jenis_kelamin</td>
				<td><input type="text" class="form-control" name="jenis_kelamin" value="<?php echo $d['jenis_kelamin'] ?>"></td>
			</tr>
			<tr>
				<td>username</td>
				<td><input type="text" class="form-control" name="username" value="<?php echo $d['username'] ?>"></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="text" class="form-control" name="password" value="<?php echo $d['password'] ?>"></td>
			</tr>
			
			<tr>
				<td></td>
				<td><input type="submit" class="btn btn-info" value="Simpan"></td>
			</tr>
		</table>
	</form>
	<?php 
}
?>
