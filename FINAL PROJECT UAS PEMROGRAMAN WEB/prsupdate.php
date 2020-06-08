<?php
include_once('koneksi2.php');

$id 			= $_POST['id'];
$semester 		= $_POST['semester'];
$nama 			= $_POST['nama'];
$agama 			= $_POST['agama'];
$pkn 			= $_POST['pkn'];
$bhsindo 		= $_POST['bhsindo'];
$matematika 	= $_POST['matematika'];
$bhsing 		= $_POST['bhsing'];
$senibudaya 	= $_POST['senibudaya'];
$penjas 		= $_POST['penjas'];
$catatanwali 	= $_POST['catatanwali'];
$sakit 			= $_POST['sakit'];
$izin 			= $_POST['izin'];
$tanpaket 		= $_POST['tanpaket'];
$hasil 			= $_POST['hasil'];

 $conn = "UPDATE tabelkelas10 SET semester='$semester', nama='$nama', agama='$agama', pkn='$pkn', bhsindo='$bhsindo', matematika='$matematika', bhsing='$bhsing', senibudaya='$senibudaya', penjas ='$penjas', catatanwali='$catatanwali', sakit='$sakit', izin='$izin', tanpaket='$tanpaket', hasil='$hasil' WHERE id=$id";

 
// mengalihkan halaman kembali ke index.php
header("location:halamanupdate10.php");
 
?>