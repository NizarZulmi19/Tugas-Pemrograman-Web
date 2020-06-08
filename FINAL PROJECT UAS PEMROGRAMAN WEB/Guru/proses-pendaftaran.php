<?php  
 include("config.php");  
 $name = $_GET['name'];  
 $address = $_GET['address'];  
 $gender = $_GET['gender'];  
 $religion = $_GET['religion'];  
 $school = $_GET['school'];  
 $sql = "INSERT INTO tabelguru (nama, alamat, jeniskelamin, agama, nomortelp) VALUE('$name', '$address', '$gender', '$religion', '$school')";  
 $query = mysqli_query($db,$sql);  
 if( $query )   
 {  
   // kalau berhasil alihkan ke halaman index.php dengan status=sukses  
   echo "Sukses insert data";   
 }   
 else   
 {  
   // kalau gagal alihkan ke halaman indek.php dengan status=gagal  
   echo "Gagal insert data";  
 }  
 ?>  