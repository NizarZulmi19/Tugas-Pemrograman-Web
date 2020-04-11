<?php
include"koneksi.php";
?>
<?php

mysqli_connect($servername,$username,$password) or die(mysqli_error());
	mysqli_select_db ($koneksi,$dbname) or die(mysqli_error());

$nama 			= $_POST['nama'];
$jenis 			= $_POST['jenis'];
$nisn 			= $_POST['nisn'];


$sql="insert siswa set nama='$nama', jenis='$jenis', nisn='$nisn'";
mysqli_query($koneksi, $sql) or die (mysqli_error());

header("location:Form Siswa.php");
?>