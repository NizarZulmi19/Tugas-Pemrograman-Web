<?php
include("KonekTugas1.php");
$ID=$_POST['ID_BT'];
$NAMA=$_POST['NAMA'];
$EMAIL = $_POST['EMAIL'];
$ISI = $_POST['ISI'];
$sql="insert into buku_tamu(ID_BT,NAMA,EMAIL,ISI) values ('$ID','$NAMA','$EMAIL','$ISI')";
mysqli_query($koneksi,$sql) or die (mysqli_error());
header('location:BukuTamu.php');
?>