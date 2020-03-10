<html>
 <head>
  <title>Biodata</title>
<link rel="stylesheet" type="text/css" href="csshalamnlogin.css">
 </head>
 </html>
<?php
$npm=$_POST['NPM'];
$Nama=$_POST['Nama'];
$IPK=$_POST['IPK'];
$Tahun=$_POST['Tahun'];

$jurusan=$_POST['jurusan'];
$Tempat=$_POST['Tempat'];
$Tgl=$_POST['Tgl'];
$Bln=$_POST['Bln'];
$Thn=$_POST['Thn'];
$JK=$_POST['JK'];
$alamat=$_POST['alamat'];
if(empty($_POST['NPM'])){
	header('Location:datakosong.php');
}
if(empty($_POST['Nama'])){
	header('Location:datakosong.php');
}
if(empty($_POST['IPK'])){
	header('Location:datakosong.php');
}
if(empty($_POST['Tahun'])){
	header('Location:datakosong.php');
}
if(empty($_POST['jurusan'])){
	header('Location:datakosong.php');
}
if(empty($_POST['Tempat'])){
	header('Location:datakosong.php');
}
if(empty($_POST['alamat'])){
	header('Location:datakosong.php');
}
else{
echo "<center>NPM      : $npm<br>";
echo "<center>Nama     : $Nama<br>";
echo "<center>IPK      : $IPK<br>";
echo "<center>Lama Study    : $Tahun Tahun<br>";
echo "<center>Jurusan  : $jurusan<br>";
echo "<center>Tempat dan Tanggal Lahir : $Tempat, $Tgl/$Bln/$Thn<br>";
echo "<center>Jenis Kelamin : $JK<br>";
echo "<center>Alamat : $alamat<br>";
}
?>