<?php include("config.php"); ?>  
 <head> 
 <title>SMA TADIKA MESRA</title> 
   <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">  
   <script type="text/javascript" src="../js/jquery.js"></script>  
   <script type="text/javascript" src="../js/bootstrap.js"></script>  
   <link rel="stylesheet" type="text/css" href="../cssfooter.css">
 </head>  
 <body>
  <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="#">
        <img src="../image/pngocean.com.png" alt="logo" style="width:40px;">
      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="../halamantatausaha.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../galery.php">Profil</a>
            </li>
      
      </li>
      <li class="nav-item">
              <a class="nav-link" href="form-daftar.php">Input Data Siswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="data-list-siswa.php">Seluruh List Siswa SMA Tadika Mesra</a>
            </li>
          </ul>
          
      <a href="../index.php" class="btn btn-outline-danger">Logout</a>
        </div>
      </nav>
    </header></body>
    <br><br><br><br>

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
       <th>Tindakan</th>  
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
       echo "<td>";  
       echo "<a href='form-edit.php?id=".$siswa['id']."' class='btn btn-info'>Edit</a> | ";  
         echo "<a href='proses-hapus.php?id=".$siswa['id']."' class='btn btn-danger'>Hapus</a>  ";  
       echo "</td>";  
       echo "</tr>";  
     }  
     ?>  
   </tbody>  
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
       <th>Tindakan</th>  
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
       echo "<td>";  
       echo "<a href='form-edit.php?id=".$siswa['id']."' class='btn btn-info'>Edit</a> | ";  
       echo "<a href='proses-hapus11.php?id=".$siswa['id']."' class='btn btn-danger'>Hapus</a>  ";    
       echo "</td>";  
       echo "</tr>";  
     }  
     ?>  
   </tbody>  
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
       <th>Tindakan</th>  
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
       echo "<td>";  
       echo "<a href='form-edit.php?id=".$siswa['id']."' class='btn btn-info'>Edit</a> | ";  
       echo "<a href='proses-hapus11.php?id=".$siswa['id']."' class='btn btn-danger'>Hapus</a>  ";    
       echo "</td>";  
       echo "</tr>";  
     }  
     ?>  
   </tbody>  
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