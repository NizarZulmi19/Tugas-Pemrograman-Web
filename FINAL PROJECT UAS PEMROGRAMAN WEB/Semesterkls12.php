<?php include("koneksi2.php"); ?>  
 <head>  
   <link rel="stylesheet" type="text/css" href="css/bootstrap.css">  
   <script type="text/javascript" src="js/jquery.js"></script>  
   <script type="text/javascript" src="js/bootstrap.js"></script>  
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/sweetalert/sweetalert.css">
        <script type="text/javascript" src="assets/sweetalert/sweetalert.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <link rel="stylesheet" type="text/css" href="cssfooter.css">
 </head>  
 <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">
        <img src="image/pngocean.com.png" alt="logo" style="width:40px;">
      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="halamanmurid12.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="galery.php">Profil</a>
            </li>
      
      
          </ul>
          
      <a href="index.php" class="btn btn-outline-danger">Logout</a>
        </div>
      </nav>
    </header>
    <div class="jumbotron text-center" style="padding-top: 10%; padding-bottom: 10%;">  
           <h1>Prestasi Kamu Selama Semester 1</h1>  
           <h3>Sekolah Menengah Atas Tadika Mesra</h3>  
           <div class="row">            
                <div class="container col-md-3">  
                     <div class="row">  
                            
                          </div>  
                     </div>  
                </div>  
           </div>  
      </div>  
 <div class="table-responsive">  
 <table class="table table-bordered table-hover">  
  <center><a href="halamanmurid12.php" class="btn btn-outline-success">Kembali</a></center>
   <thead>  
     <tr>  
       <th>No</th>
       <th>Semester</th>
        <th>Nama Siswa</th>
        <th>Nilai Agama</th>   
       <th>Nilai PKN</th>  
       <th>Nilai Bhs Indonesia</th>  
       <th>Nilai Matematika</th>  
       <th>Nilai Bhs Inggris</th>  
       <th>Nilai Seni Budaya</th>  
       <th>Nilai Penjas</th>  
       <th>Catatan Wali</th>
       <th>Sakit</th>
       <th>Izin</th>
       <th>Tanpa Keterangan</th>
       <th>Hasil</th>
       
     </tr>  
   </thead>  
   <tbody>  
 </tbody>  
     <?php  
     $sql = "SELECT * FROM tabelkelas12 where semester='1' && nama='' ";  
     $query = mysqli_query($db, $sql);  
     while($siswa = mysqli_fetch_array($query)){  
       echo "<tr>";  
       echo "<td>".$siswa['id']."</td>";  
       echo "<td>".$siswa['semester']."</td>";   
       echo "<td>".$siswa['nama']."</td>";
       echo "<td>".$siswa['agama']."</td>";
       echo "<td>".$siswa['pkn']."</td>"; 
       echo "<td>".$siswa['bhsindo']."</td>";  
       echo "<td>".$siswa['matematika']."</td>";  
       echo "<td>".$siswa['bhsing']."</td>";  
       echo "<td>".$siswa['senibudaya']."</td>";   
      echo "<td>".$siswa['penjas']."</td>"; 
      echo "<td>".$siswa['catatanwali']."</td>"; 
      echo "<td>".$siswa['sakit']."</td>"; 
      echo "<td>".$siswa['izin']."</td>"; 
      echo "<td>".$siswa['tanpaket']."</td>"; 
      echo "<td>".$siswa['hasil']."</td>"; 
       
          
       echo "</td>";  
       echo "</tr>";  
     }  
     ?>  
   </tbody>  
   
   <br>
 </table>  
 <p>Total: <?php echo mysqli_num_rows($query) ?></p>  

 <div class="jumbotron text-center" style="padding-top: 10%; padding-bottom: 10%;">  
           <h1>Prestasi Kamu Selama Semester 2</h1>  
           <h3>Sekolah Menengah Atas Tadika Mesra</h3>  
           <div class="row">            
                <div class="container col-md-3">  
                     <div class="row">  
                            
                          </div>  
                     </div>  
                </div>  
           </div>  
      </div>  
 <div class="table-responsive">  
 <table class="table table-bordered table-hover">  
  
   <thead>  
     <tr>  
       <th>No</th>
       <th>Semester</th>
        <th>Nama Siswa</th>
        <th>Nilai Agama</th>   
       <th>Nilai PKN</th>  
       <th>Nilai Bhs Indonesia</th>  
       <th>Nilai Matematika</th>  
       <th>Nilai Bhs Inggris</th>  
       <th>Nilai Seni Budaya</th>  
       <th>Nilai Penjas</th>  
       <th>Catatan Wali</th>
       <th>Sakit</th>
       <th>Izin</th>
       <th>Tanpa Keterangan</th>
       <th>Hasil</th>
       
     </tr>  
   </thead>  
   <tbody>  
 </tbody>  
     <?php  
    $sql = "SELECT * FROM tabelkelas12 where semester='1' && nama='' "; 
     $query = mysqli_query($db, $sql);  
     while($siswa = mysqli_fetch_array($query)){  
       echo "<tr>";  
       echo "<td>".$siswa['id']."</td>";  
       echo "<td>".$siswa['semester']."</td>";   
       echo "<td>".$siswa['nama']."</td>";
       echo "<td>".$siswa['agama']."</td>";
       echo "<td>".$siswa['pkn']."</td>"; 
       echo "<td>".$siswa['bhsindo']."</td>";  
       echo "<td>".$siswa['matematika']."</td>";  
       echo "<td>".$siswa['bhsing']."</td>";  
       echo "<td>".$siswa['senibudaya']."</td>";   
      echo "<td>".$siswa['penjas']."</td>"; 
      echo "<td>".$siswa['catatanwali']."</td>"; 
      echo "<td>".$siswa['sakit']."</td>"; 
      echo "<td>".$siswa['izin']."</td>"; 
      echo "<td>".$siswa['tanpaket']."</td>"; 
      echo "<td>".$siswa['hasil']."</td>"; 
       
          
       echo "</td>";  
       echo "</tr>";  
     }  
     ?>  
   </tbody>  
   
   <br>
 </table>  
 <p>Total: <?php echo mysqli_num_rows($query) ?></p>  

<div class="jumbotron text-center" style="padding-top: 10%; padding-bottom: 10%;">  
           <h1>Prestasi Kamu Selama Semester 3</h1>  
           <h3>Sekolah Menengah Atas Tadika Mesra</h3>  
           <div class="row">            
                <div class="container col-md-3">  
                     <div class="row">  
                            
                          </div>  
                     </div>  
                </div>  
           </div>  
      </div>  
<div class="table-responsive">  
 <table class="table table-bordered table-hover">  
  
   <thead>  
     <tr>  
       <th>No</th>
       <th>Semester</th>
        <th>Nama Siswa</th>
        <th>Nilai Agama</th>   
       <th>Nilai PKN</th>  
       <th>Nilai Bhs Indonesia</th>  
       <th>Nilai Matematika</th>  
       <th>Nilai Bhs Inggris</th>  
       <th>Nilai Seni Budaya</th>  
       <th>Nilai Penjas</th>  
       <th>Catatan Wali</th>
       <th>Sakit</th>
       <th>Izin</th>
       <th>Tanpa Keterangan</th>
       <th>Hasil</th>
       
     </tr>  
   </thead>  
   <tbody>  
 </tbody>  

     <?php  
     $sql = "SELECT * FROM tabelkelas12 where semester='1' && nama='' ";  
     $query = mysqli_query($db, $sql);  
     while($siswa = mysqli_fetch_array($query)){  
       echo "<tr>";  
       echo "<td>".$siswa['id']."</td>";  
       echo "<td>".$siswa['semester']."</td>";   
       echo "<td>".$siswa['nama']."</td>";
       echo "<td>".$siswa['agama']."</td>";
       echo "<td>".$siswa['pkn']."</td>"; 
       echo "<td>".$siswa['bhsindo']."</td>";  
       echo "<td>".$siswa['matematika']."</td>";  
       echo "<td>".$siswa['bhsing']."</td>";  
       echo "<td>".$siswa['senibudaya']."</td>";   
      echo "<td>".$siswa['penjas']."</td>"; 
      echo "<td>".$siswa['catatanwali']."</td>"; 
      echo "<td>".$siswa['sakit']."</td>"; 
      echo "<td>".$siswa['izin']."</td>"; 
      echo "<td>".$siswa['tanpaket']."</td>"; 
      echo "<td>".$siswa['hasil']."</td>"; 
       
          
       echo "</td>";  
       echo "</tr>";  
     }  
     ?>  
   </tbody>  
   
   <br>
 </table>  
 <p>Total: <?php echo mysqli_num_rows($query) ?></p>  

<div class="jumbotron text-center" style="padding-top: 10%; padding-bottom: 10%;">  
           <h1>Prestasi Kamu Selama Semester 4</h1>  
           <h3>Sekolah Menengah Atas Tadika Mesra</h3>  
           <div class="row">            
                <div class="container col-md-3">  
                     <div class="row">  
                            
                          </div>  
                     </div>  
                </div>  
           </div>  
      </div>  
 <div class="table-responsive">  
 <table class="table table-bordered table-hover">  
  
   <thead>  
     <tr>  
       <th>No</th>
       <th>Semester</th>
        <th>Nama Siswa</th>
        <th>Nilai Agama</th>   
       <th>Nilai PKN</th>  
       <th>Nilai Bhs Indonesia</th>  
       <th>Nilai Matematika</th>  
       <th>Nilai Bhs Inggris</th>  
       <th>Nilai Seni Budaya</th>  
       <th>Nilai Penjas</th>  
       <th>Catatan Wali</th>
       <th>Sakit</th>
       <th>Izin</th>
       <th>Tanpa Keterangan</th>
       <th>Hasil</th>
       
     </tr>  
   </thead>  
   <tbody>  
 </tbody>  
     <?php  
     $sql = "SELECT * FROM tabelkelas12 where semester='1' && nama='' ";   
     $query = mysqli_query($db, $sql);  
     while($siswa = mysqli_fetch_array($query)){  
       echo "<tr>";  
       echo "<td>".$siswa['id']."</td>";  
       echo "<td>".$siswa['semester']."</td>";   
       echo "<td>".$siswa['nama']."</td>";
       echo "<td>".$siswa['agama']."</td>";
       echo "<td>".$siswa['pkn']."</td>"; 
       echo "<td>".$siswa['bhsindo']."</td>";  
       echo "<td>".$siswa['matematika']."</td>";  
       echo "<td>".$siswa['bhsing']."</td>";  
       echo "<td>".$siswa['senibudaya']."</td>";   
      echo "<td>".$siswa['penjas']."</td>"; 
      echo "<td>".$siswa['catatanwali']."</td>"; 
      echo "<td>".$siswa['sakit']."</td>"; 
      echo "<td>".$siswa['izin']."</td>"; 
      echo "<td>".$siswa['tanpaket']."</td>"; 
      echo "<td>".$siswa['hasil']."</td>"; 
       
          
       echo "</td>";  
       echo "</tr>";  
     }  
     ?>  
   </tbody>  
   
   <br>
 </table>  
 <p>Total: <?php echo mysqli_num_rows($query) ?></p>  


<div class="jumbotron text-center" style="padding-top: 10%; padding-bottom: 10%;">  
           <h1>Prestasi Kamu Selama Semester 5</h1>  
           <h3>Sekolah Menengah Atas Tadika Mesra</h3>  
           <div class="row">            
                <div class="container col-md-3">  
                     <div class="row">  
                            
                          </div>  
                     </div>  
                </div>  
           </div>  
      </div>  
 <div class="table-responsive">  
 <table class="table table-bordered table-hover">  
 
   <thead>  
     <tr>  
       <th>No</th>
       <th>Semester</th>
        <th>Nama Siswa</th>
        <th>Nilai Agama</th>   
       <th>Nilai PKN</th>  
       <th>Nilai Bhs Indonesia</th>  
       <th>Nilai Matematika</th>  
       <th>Nilai Bhs Inggris</th>  
       <th>Nilai Seni Budaya</th>  
       <th>Nilai Penjas</th>  
       <th>Catatan Wali</th>
       <th>Sakit</th>
       <th>Izin</th>
       <th>Tanpa Keterangan</th>
       <th>Hasil</th>
       
     </tr>  
   </thead>  
   <tbody>  
 </tbody>  
     <?php  
     $sql = "SELECT * FROM tabelkelas12 where semester='1' && nama='' ";  
     $query = mysqli_query($db, $sql);  
     while($siswa = mysqli_fetch_array($query)){  
       echo "<tr>";  
       echo "<td>".$siswa['id']."</td>";  
       echo "<td>".$siswa['semester']."</td>";   
       echo "<td>".$siswa['nama']."</td>";
       echo "<td>".$siswa['agama']."</td>";
       echo "<td>".$siswa['pkn']."</td>"; 
       echo "<td>".$siswa['bhsindo']."</td>";  
       echo "<td>".$siswa['matematika']."</td>";  
       echo "<td>".$siswa['bhsing']."</td>";  
       echo "<td>".$siswa['senibudaya']."</td>";   
      echo "<td>".$siswa['penjas']."</td>"; 
      echo "<td>".$siswa['catatanwali']."</td>"; 
      echo "<td>".$siswa['sakit']."</td>"; 
      echo "<td>".$siswa['izin']."</td>"; 
      echo "<td>".$siswa['tanpaket']."</td>"; 
      echo "<td>".$siswa['hasil']."</td>"; 
       
          
       echo "</td>";  
       echo "</tr>";  
     }  
     ?>  
   </tbody>  
   
   <br>
 </table>  
 <p>Total: <?php echo mysqli_num_rows($query) ?></p>  
 <footer class="new_footer_area bg_color">
            <div class="new_footer_top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">HALLO Mahasiswa </h3>
                                <p>UPN "Veteran Jawa Timur"</p>
                                <form action="#" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                                    <input type="text" name="EMAIL" class="form-control memail" placeholder="Email">
                                    <button class="btn btn_get btn_get_two" type="submit">Subscribe</button>
                                    <p class="mchimp-errmessage" style="display: none;"></p>
                                    <p class="mchimp-sucmessage" style="display: none;"></p>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Builder</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="#">Ananda Lakunti Ardiatama  (18082010010)</a></li>
                                    <li><a href="#">Muhammad Nizar Zulmi      (18082010013)</a></li>
                                    
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Team Solutions</h3>
                                <div class="f_social_icon">
                                    <a href="#" class="fab fa-facebook"></a>
                                    <a href="#" class="fab fa-twitter"></a>
                                    <a href="#" class="fab fa-linkedin"></a>
                                    <a href="#" class="fab fa-pinterest"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bg">
                    <div class="footer_bg_one"></div>
                    <div class="footer_bg_two"></div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-sm-7">
                            <p class="mb-0 f_400">© Nizar Dan Lakunti </p>
                        </div>
                        <div class="col-lg-6 col-sm-5 text-right">
                            <p>Made with <i class="icon_heart"></i> in <a href="#">Nizar Lakunti</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>