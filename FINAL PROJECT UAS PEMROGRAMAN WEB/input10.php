<?php
$server = "localhost";
$username = "root";
$password = "";
$namadb = "fpweb";

$conn = mysqli_connect($server,$username,$password)or die("Gagal Input");
$con = mysqli_select_db($conn,$namadb);

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

$sql = mysqli_query($conn,"INSERT INTO tabelkelas10 (semester,nama,agama,pkn,bhsindo,matematika,bhsing,senibudaya,penjas,catatanwali,sakit,izin,tanpaket,hasil) VALUES ('$semester','$nama','$agama','$pkn','$bhsindo','$matematika', '$bhsing','$senibudaya','$penjas','$catatanwali','$sakit','$izin','$tanpaket','$hasil')");
if ($sql) {
	echo "<script>alert('Data Sukses Dimasukkan')</script>";
	echo "<script>location.href='listsiswa.php'</script>";
}else{
	echo "<script>alert('Cek Kembali Data Anda')</script>";
}

?>