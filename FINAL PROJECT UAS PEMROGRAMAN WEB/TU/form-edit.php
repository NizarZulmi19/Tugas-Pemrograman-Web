<?php  
 include("config.php");  
 // kalau tidak ada id di query string  
 if( !isset($_GET['id']) ){  
   header('Location: list-siswa.php');  
 }  
 //ambil id dari query string  
 $id = $_GET['id'];  
 // buat query untuk ambil data dari database  
 $sql = "SELECT * FROM calon_siswa WHERE id=$id";  
 ?>  
 <head>  
   <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">  
   <script type="text/javascript" src="../js/jquery.js"></script>  
   <script type="text/javascript" src="../js/bootstrap.js"></script>  
   <link rel="stylesheet" type="text/css" href="../cssfooter.css">
 </head>  
 <script type="text/javascript">  
     function updateData(){  
       var name = document.getElementById("nama").value;  
       var address = document.getElementById("alamat").value;  
       var gender;  
       if(document.getElementById("jkel_l").checked)  
       {  
         gender = "Laki-laki";  
       }  
       else  
       {  
         gender = "Perempuan";  
       }  
       var religion = document.getElementById("agama").value;  
       var school = document.getElementById("kelas").value;  
       if(window.XMLHttpRequest)  
       {  
         xmlhttp = new XMLHttpRequest();  
       }  
       else  
       {  
         xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");  
       }  
       xmlhttp.onreadystatechange=function(){  
         if(this.readyState==4 && this.status==200)  
         {  
           alert(this.responseText);  
           if(this.responseText == "sukses") {  
             alert('Simpan berhasil');   
           }  
           
         }  
       }  
       xmlhttp.open("GET","proses-edit.php?id=" + <?php echo $id;?> + "&name=" + name + "&address=" + address + "&gender=" + gender + "&religion=" + religion + "&school=" + school, true);  
       xmlhttp.send();  
     }  
 </script>  
 <!DOCTYPE html>  
 <html>  
 <head>  
   <title>SMA TADIKA MESRA</title>
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="assets/sweetalert/sweetalert.css">
        <script type="text/javascript" src="assets/sweetalert/sweetalert.min.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
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
      
      <li class="nav-item">
              <a class="nav-link" href="form-daftar.php">Input Data Siswa</a>
            </li>
           <li class="nav-item">
              <a class="nav-link" href="data-list-siswa.php">Seluruh List Siswa SMA Tadika Mesra</a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Cari" aria-label="Cari">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
      </form>
      <a href="../index.php" class="btn btn-outline-danger">Logout</a>
        </div>
      </nav>
    </header>
   <header>  <br><br>
     <h3 class="jumbotron text-center">Formulir Edit Siswa</h3>  
   </header>  
 <div class="container">  
   <form action="proses-edit.php">  
       <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />  
       <div class="row">      
         <div class="form-group col-md-8">        
           <label for="nama">Nama: </label>  
           <input type="text" class="form-control" id="nama" placeholder="Nama Lengkap.." />  
         </div>  
       </div>  
       <div class="row">      
         <div class="form-group col-md-8">        
           <label for="alamat">Alamat: </label>  
           <textarea class="form-control" id="alamat"></textarea>  
         </div>  
       </div>  
       Jenis Kelamin:  
       <div class="form-check">  
         <input class="form-check-input" type="radio" name="jeniskelamin" id="jkel_l" value="laki-laki">  
         <label for="jkel_l">Laki-laki</label>  
       </div>  
       <div class="form-check">        
         <input class="form-check-input" type="radio" name="jeniskelamin" id="jkel_p" value="perempuan">  
         <label for="jkel_p">Perempuan</label>  
       </div>  
       <div class="row">      
         <div class="form-group col-md-8">      
           <label for="agama">Agama: </label>  
           <select class="form-control" id="agama">  
             <option>Islam</option>  
             <option>Kristen</option>  
             <option>Hindu</option>  
             <option>Budha</option>  
             <option>Atheis</option>  
           </select>  
         </div>  
       </div>  
       <div class="row">      
         <div class="form-group col-md-8">        
           <label for="sekolah_asal">Kelas Siswa </label>  
           <input class="form-control" type="text" id="kelas" placeholder="Kelas" />  
         </div>  
       </div>  
       <div class="form-group">      
         <input type="button" class="btn btn-success" value="Update" name="update" onclick="updateData()" />  
       </div>  
   </form>  

 </div>
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
 </body>  
 </html>  