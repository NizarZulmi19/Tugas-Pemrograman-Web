<?php include("koneksi2.php"); ?>  
 <head> 
 <title>SMA TADIKA MESRA</title> 
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
              <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="galery.php">Profil</a>
            </li>
      <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              INFO INFO SEKOLAH SMA TADIKA MESRA
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="listsemua.php">Data Nama Seluruh Siswa</a>
              
              
              <a class="dropdown-item" href="Guru/listsemuaguru.php">List Guru</a>
              
              
            </div>
      </li>
          </ul>
          
          <a href="loginguru7.php" class="btn btn-outline-success mr-3">Login</a>
      <a href="Daftar/form-daftar.php" class="btn btn-outline-danger">Daftar</a>
        </div>
      </nav>
    </header>
    <div class="jumbotron text-center" style="padding-top: 10%; padding-bottom: 10%;">  
           <h1>Selamat Datang Warga</h1>  
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
  <div class="jumbotron text-center" style="padding-top: 10%; padding-bottom: 10%;">  
           <h1>Nama Siswa Kelas 10</h1>  
           <h3>Sekolah Menengah Atas Tadika Mesra</h3>  
           <div class="row">            
                <div class="container col-md-3">  
                     <div class="row">  
                            
                          </div>  
                     </div>  
                </div>  
           </div>  
      </div>  
   <thead>  
     <tr>  
       <th>No</th>
       <th>Nama Siswa</th>
        <th>Alamat Siswa</th>   
       <th>Jenis Kelamin</th>  
       <th>Agama</th>  
       <th>Kelas Siswa</th>  
        
       
     </tr>  
   </thead>  
   <tbody>  
 </tbody>  

     <?php  
     $sql = "SELECT * FROM tabelsiswa10";  
     $query = mysqli_query($db, $sql);  
     while($siswa = mysqli_fetch_array($query)){  
       echo "<tr>";  
       echo "<td>".$siswa['id']."</td>";
       echo "<td>".$siswa['nama']."</td>";  
       echo "<td>".$siswa['alamat']."</td>";   
       echo "<td>".$siswa['jeniskelamin']."</td>";
       echo "<td>".$siswa['agama']."</td>";
       echo "<td>".$siswa['kelas']."</td>"; 
       
       
       
       
       echo "</td>";  
       echo "</tr>";  
     }  
     ?>  
   </tbody>  
    <nav class="text-center">  
     
   </nav> 
   <br>
 </table>  
 <p>Total: <?php echo mysqli_num_rows($query) ?></p> 

 <div class="table-responsive">  
 <table class="table table-bordered table-hover"> 
 <div class="jumbotron text-center" style="padding-top: 10%; padding-bottom: 10%;">  
           <h1>Nama Siswa Kelas 11</h1>  
           <h3>Sekolah Menengah Atas Tadika Mesra</h3>  
           <div class="row">            
                <div class="container col-md-3">  
                     <div class="row">  
                            
                          </div>  
                     </div>  
                </div>  
           </div>  
      </div>   
   <thead>  
     <tr>  
       <th>No</th>
       <th>Nama Siswa</th>
        <th>Alamat Siswa</th>   
       <th>Jenis Kelamin</th>  
       <th>Agama</th>  
       <th>Kelas Siswa</th>  
        
       
     </tr>  
   </thead>  
   <tbody>  
 </tbody>  

     <?php  
     $sql = "SELECT * FROM tabelsiswa11";  
     $query = mysqli_query($db, $sql);  
     while($siswa = mysqli_fetch_array($query)){  
       echo "<tr>";  
       echo "<td>".$siswa['id']."</td>";
       echo "<td>".$siswa['nama']."</td>";  
       echo "<td>".$siswa['alamat']."</td>";   
       echo "<td>".$siswa['jeniskelamin']."</td>";
       echo "<td>".$siswa['agama']."</td>";
       echo "<td>".$siswa['kelas']."</td>"; 
       
       
       
       
       echo "</td>";  
       echo "</tr>";  
     }  
     ?>  
   </tbody>  
    <nav class="text-center">  
     
   </nav> 
   <br>
 </table>  
 <p>Total: <?php echo mysqli_num_rows($query) ?></p> 

 <div class="table-responsive">  
 <table class="table table-bordered table-hover">  
  <div class="jumbotron text-center" style="padding-top: 10%; padding-bottom: 10%;">  
           <h1>Nama Siswa Kelas 12</h1>  
           <h3>Sekolah Menengah Atas Tadika Mesra</h3>  
           <div class="row">            
                <div class="container col-md-3">  
                     <div class="row">  
                            
                          </div>  
                     </div>  
                </div>  
           </div>  
      </div>  
   <thead>  
     <tr>  
       <th>No</th>
       <th>Nama Siswa</th>
        <th>Alamat Siswa</th>   
       <th>Jenis Kelamin</th>  
       <th>Agama</th>  
       <th>Kelas Siswa</th>  
        <th>Email Siswa</th>  
       
     </tr>  
   </thead>  
   <tbody>  
 </tbody>  

     <?php  
     $sql = "SELECT * FROM tabelsiswa12";  
     $query = mysqli_query($db, $sql);  
     while($siswa = mysqli_fetch_array($query)){  
       echo "<tr>";  
       echo "<td>".$siswa['id']."</td>";
       echo "<td>".$siswa['nama']."</td>";  
       echo "<td>".$siswa['alamat']."</td>";   
       echo "<td>".$siswa['jeniskelamin']."</td>";
       echo "<td>".$siswa['agama']."</td>";
       echo "<td>".$siswa['kelas']."</td>"; 
       
       
       
       
       echo "</td>";  
       echo "</tr>";  
     }  
     ?>  
   </tbody>  
    <nav class="text-center">  
     
   </nav> 
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