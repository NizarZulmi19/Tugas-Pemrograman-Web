<!DOCTYPE html>
<html>
<head>
    <title>SMA TADIKA MESRA</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="cssfooter.css">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


</head>
<body>
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
              <a class="nav-link" href="halamanguru11.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="galery.php">Profil</a>
            </li>
     <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
              
            </div>
      </li>
      <li class="nav-item">
              <a class="nav-link" href="inputdatasiswa11.php">Input Nilai Siswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="listsiswa11.php">Lihat List Siswa Kelas Anda</a>
            </li>
          </ul>
          
      <a href="index.php" class="btn btn-outline-danger">Logout</a>
        </div>
      </nav>
    </header><br><br><br><br>
     <form method="POST" action="input11.php">  
<div class="container">
    <div class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-2">
        <h1 style="text-align: center;">Input Penilaian Siswa</h1>
        <br/><br/><br/>
        <div class="thumbnail">
            <form role="form" id="formInput">
             
<div class ="container">
<div class="form-group form-group-lg has-feedback">
 <label for="semester">Semester</label>
 <select class="form-control" id="semester" name="semester"> 
                        <option></option>   
                      <option value="1">1</option>  
                      <option value="2">2</option>  
                      <option value="3">3</option>  
                      <option value="4">4</option>  
                      <option value="5">5</option> 
                      <option value="">6</option>  
                      <option value="7">7</option>>7</option> 
                    <option value="8">8</option>
                    </select>  

 </div>

<div class="form-group form-group-lg has-feedback">
 <label for="nilai">Nama</label>
 <input type="text" name="nama" id="nama" class="form-control textbox">
 <i class="form-control-feedback"></i>
 <span class="text-warning" ></span>
 </div>

<div class="form-group form-group-lg has-feedback">
 <label for="niali">Nilai Agama</label>
 <input type="text" name="agama" id="agama" class="form-control textbox">
 <i class="form-control-feedback"></i>
 <span class="text-warning" ></span>
 </div>

<div class="form-group form-group-lg has-feedback">
 <label for="nilai">Nilai Pkn</label>
 <input type="text" name="pkn" id="pkn" class="form-control textbox">
 <i class="form-control-feedback"></i>
 <span class="text-warning" ></span>
 </div>

<div class="form-group form-group-lg has-feedback">
 <label for="nilai">Nilai Bhs Indonesia</label>
 <input type="text" name="bhsindo" id="bhsindo" class="form-control textbox">
 <i class="form-control-feedback"></i>
 <span class="text-warning" ></span>
 </div>

<div class="form-group form-group-lg has-feedback">
 <label for="nilai">Nilai Matematika</label>
 <input type="text" name="matematika" id="matematika" class="form-control textbox">
 <i class="form-control-feedback"></i>
 <span class="text-warning" ></span>
 </div>

 <div class="form-group form-group-lg has-feedback">
 <label for="nilai">Nilai Bhs Inggris</label>
 <input type="text" name="bhsing" id="bhsing" class="form-control textbox">
 <i class="form-control-feedback"></i>
 <span class="text-warning" ></span>
 </div>

 <div class="form-group form-group-lg has-feedback">
 <label for="nilai">Nilai Seni Budaya</label>
 <input type="text" name="senibudaya" id="senibudaya" class="form-control textbox">
 <i class="form-control-feedback"></i>
 <span class="text-warning" ></span>
 </div>

 <div class="form-group form-group-lg has-feedback">
 <label for="nilai">Nilai Penjas</label>
 <input type="text" name="penjas" id="penjas" class="form-control textbox">
 <i class="form-control-feedback"></i>
 <span class="text-warning" ></span>
 </div>

 <div class="form-group form-group-lg has-feedback">
 <label for="nilai">Catatan Wali</label>
 <textarea  name="catatanwali" id="catatanwali" class="form-control textbox">
 </textarea>
 <span class="text-warning" ></span>
 <i class="form-control-feedback"></i>
 </div>

 <div class="form-group form-group-lg has-feedback">
 <label for="sakit">Sakit</label>
 <input type="text" name="sakit" id="sakit" class="form-control textbox">
 <i class="form-control-feedback"></i>
 <span class="text-warning" ></span>
 </div>

 <div class="form-group form-group-lg has-feedback">
 <label for="izin">Izin</label>
 <input type="text" name="izin" id="izin" class="form-control textbox">
 <i class="form-control-feedback"></i>
 <span class="text-warning" ></span>
 </div>

 <div class="form-group form-group-lg has-feedback">
 <label for="tanpaket">Tanpa Keterangan</label>
 <input type="text" name="tanpaket" id="tanpaket" class="form-control textbox">
 <i class="form-control-feedback"></i>
 <span class="text-warning" ></span>
 </div>

 <div class="form-group form-group-lg has-feedback">
 <label for="hasil">Hasil</label>
 <input type="text" name="hasil" id="hasil" class="form-control textbox">
 <i class="form-control-feedback"></i>
 <span class="text-warning" ></span>
 </div>

<button type="submit" name="btn-simpan" class="btn btn-primary btn-block">Simpan</button>
<a class="nav-link" href=".php">Perbaharui Data</a>

</form>
 </div>
 </div>
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