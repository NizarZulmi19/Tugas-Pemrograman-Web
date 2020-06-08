<?php include("koneksi2.php"); ?>  
 <?php   
      mysqli_query($db, "delete from tabelkelas10 where id = ".$_GET['id']);   
      if ($db) {
	echo "<script>alert('Berhasil Dihapus')</script>";
	echo "<script>location.href='listsiswa.php'</script>";
}else{
	echo "<script>alert('Gagal Menghapus')</script>";
}
 ?>  