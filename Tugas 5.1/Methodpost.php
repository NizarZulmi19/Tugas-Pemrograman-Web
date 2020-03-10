<html>
<head>
	<meta http-equiv="refresh" content="2; url=http://localhost/Pemrograman%20web/Praktikum%205%20PhP/Tugas%205.1/Tugas%20no%203.php">
	<link rel="stylesheet" type="text/css" href="csshalamnlogin.css">
</head>
<?php 
if(empty($_POST['nama'])){
	header('Location:datakosong.php');
}
elseif (empty($_POST['Email'])) {
	header('Location:datakosong.php');
}
else
{
	echo "<center>Nama : ".$_POST['nama']."<center><br>";
	echo "<center>Email : ".$_POST['Email']."<center><br>";
	date_default_timezone_set('Asia/jakarta');
	echo date("l-d-m-y, g:i:s a"); 
}


 ?>