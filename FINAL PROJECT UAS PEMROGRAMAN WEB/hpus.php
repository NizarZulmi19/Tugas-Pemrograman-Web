<?php  
 include("koneksi2.php");  
 if( isset($_POST['id']) )  
 {  
   // ambil id dari query string  
   $id = $_POST['id'];  
   // buat query hapus  
   $sql = "DELETE FROM tabelkelas10 WHERE id=$id";  
   $query = mysqli_query($db, $sql);  
   // apakah query hapus berhasil?  
   if( $query )  
   {  
     header('Location: listsiswa.php');  
   }   
   else   
   {  
     die("gagal menghapus...");  
   }  
 }   
 else   
 {  
   die("akses dilarang...");  
 }  
 ?>  