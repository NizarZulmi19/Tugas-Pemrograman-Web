<?php include("config.php"); ?>  
 <?php   
      mysqli_query($db, "delete from tabelsiswa11 where id = ".$_GET['id']);   
if ($db) {
	echo "<script>alert('Berhasil Dihapus')</script>";
	echo "<script>location.href='data-list-siswa.php'</script>";
}
 ?>  