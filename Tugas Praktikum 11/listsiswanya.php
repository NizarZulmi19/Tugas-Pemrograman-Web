<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <header>  
     <h3 class="jumbotron text-center">Siswa yang sudah mendaftar</h3> 
     <h6 class="header text-center">Gunakan Ctrl+F untuk mencari Nama Anda</h6><br></br> 
   </header> 
<nav class="text-center">  
     <a href="Form Siswa.php" class="btn btn-success">[+] Tambah Baru</a><br></br>
     <a href="Halamanexport.php" class="btn btn-success">[+] Export Data Anda ke Excel</a><br></br>
</body>
</html>
 
 <head>  
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">  
   <script type="text/javascript" src="js/jquery.js"></script>  
   <script type="text/javascript" src="js/bootstrap.js"></script>  
 </head>  
 <div class="table-responsive">  
 <table class="table table-bordered table-hover">  
   <thead>  
     <tr>  
      <th>NO</th> 
       <th>Nama</th>  
       <th>Jenis Kelamin</th>  
       <th>NISN</th>  
       <th>NIK</th>  
       <th>Tempat Lahir</th>  
       <th>Tanggal Lahir</th>  
       <th>No Akta</th>
       <th>Agama</th> 
       <th>Kewarganegaraan</th>
       <th>NamaNegara</th>  
       <th>Kebutuhan Khusus</th>  
       <th>Alamat</th>  
       <th>RT</th>  
       <th>RW</th>  
       <th>Dusun</th>  
       <th>Kelurahan</th>
       <th>Kecamatan</th>  
       <th>Kode Pos</th>  
       <th>Lintang</th>  
       <th>Bujur</th>  
       <th>Tinggal Di</th>  
       <th>Transportasi</th>  
       <th>KKS</th>  
       <th>Anak Ke</th>
       <th>Penerima KPS</th>  
         <th>Nomor KPS</th> 
     </tr>  
   </thead>  
   <tbody>  
 </tbody>  
     <?php include "koneksi.php"; 

$sql="SELECT * from siswa order by nama;"; 

$qry=mysqli_query($koneksi, $sql) or die(mysqli_error()); 


$no=0; 
while($hasil=mysqli_fetch_row($qry)){ 
echo "
<tr>
<td>$no</td> 
<td>$hasil[1]</td> 
<td>$hasil[2]</td> 
<td>$hasil[3]</td> 
<td>$hasil[4]</td> 
<td>$hasil[5]</td> 
<td>$hasil[6]</td> 
<td>$hasil[7]</td> 
<td>$hasil[8]</td>
<td>$hasil[9]</td> 
<td>$hasil[10]</td> 
<td>$hasil[11]</td> 
<td>$hasil[12]</td> 
<td>$hasil[13]</td> 
<td>$hasil[14]</td> 
<td>$hasil[15]</td> 
<td>$hasil[16]</td>
<td>$hasil[17]</td> 
<td>$hasil[18]</td> 
<td>$hasil[19]</td> 
<td>$hasil[20]</td> 
<td>$hasil[21]</td> 
<td>$hasil[22]</td> 
<td>$hasil[23]</td> 
<td>$hasil[24]</td>
<td>$hasil[25]</td>  

</tr>"; 
$no++; 
} 
echo "</table>"; 
       
?> 

   </tbody>  
 </table>  
 