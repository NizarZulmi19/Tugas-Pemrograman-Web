<?php
$server = "localhost";
$username = "root";
$password = "";
$namadb = "fpweb";

$conn = mysqli_connect($server,$username,$password)or die("Gagal Input");
$con = mysqli_select_db($conn,$namadb);

$nama 		= $_POST['nama'];
$username 			= $_POST['username'];
$password 			= $_POST['password'];
$level 			= $_POST['level'];


$sql = mysqli_query($conn,"INSERT INTO user (nama,username,password,level) VALUES ('$nama','$username','$password','$level')");
if ($sql) {
	echo "<script>alert('Data Sukses Dimasukkan')</script>";
	echo "<script>location.href='../loginguru7.php'</script>";
}else{
	echo "<script>alert('Cek Kembali Data Anda')</script>";
}

?>