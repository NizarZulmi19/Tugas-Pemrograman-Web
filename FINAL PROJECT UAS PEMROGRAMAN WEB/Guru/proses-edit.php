<?php  
 include("config.php");  
 $id = $_GET['id'];  
 $name = $_GET['name'];  
 $address = $_GET['address'];  
 $gender = $_GET['gender'];  
 $religion = $_GET['religion'];  
 $school = $_GET['school'];  
   // buat query update  
   $sql = "UPDATE tabelguru SET nama='$name', alamat='$address', jeniskelamin='$gender', agama='$religion', nomortelp='$school' WHERE id=$id";  
   $query = mysqli_query($db, $sql);  
   // apakah query update berhasil?  
   if( $query ) {  
     // kalau berhasil alihkan ke halaman list-siswa.php  
     echo "Sukses update data";  
   } else {  
     // kalau gagal tampilkan pesan  
     echo "Gagal update data";  
   }  
 ?>  