<?php 
include 'set.php';
$id_petugas=$_POST['id_petugas'];
$nama=$_POST['nama'];
$nip=$_POST['Nip'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$username=$_POST['username'];
$password=$_POST['password'];


mysql_query("update petugas set nama='$nama', nip='$nip', jenis_kelamin='$jenis_kelamin', username='$username', password='$password' where id='$id'");


?>