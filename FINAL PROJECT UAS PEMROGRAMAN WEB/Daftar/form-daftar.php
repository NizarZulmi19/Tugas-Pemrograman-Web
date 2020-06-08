<!DOCTYPE html>
<html>
<head>
    <title>SMA TADIKA MESRA</title>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../jquery-3.4.1.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../cssfooter.css">
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
              <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../galery.php">Profil</a>
            </li>
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
      
          </ul>
          
      <a href="../loginguru7.php" class="btn btn-outline-danger">Login</a>
        </div>
      </nav>
    </header><br><br><br><br>
 
    <form method="POST" action="proses-pendaftaran.php">  
<center>
<div class="container">
    <div class="col-lg-4 col-lg-offset-4 col-sm-6 col-sm-offset-2">
        <h1 style="text-align: center;">Daftarkan Diri Anda </h1>
        <br/><br/><br/>
        <div class="thumbnail">
            <form role="form" id="formInput">
             


<div class="form-group form-group-lg has-feedback">
 <label for="nama">Nama</label>
 <input type="text" name="nama" id="nama" class="form-control textbox">
 <i class="form-control-feedback"></i>
 <span class="text-warning" ></span>
 </div>

<div class="form-group form-group-lg has-feedback">
 <label for="user">Username</label>
 <input type="text" name="username" id="username" class="form-control textbox">
 <i class="form-control-feedback"></i>
 <span class="text-warning" ></span>
 </div>

<div class="form-group form-group-lg has-feedback">
 <label for="pass">Password</label>
 <input type="text" name="password" id="password" class="form-control textbox">
 <i class="form-control-feedback"></i>
 <span class="text-warning" ></span>
 </div>

<div class ="container">
<div class="form-group form-group-lg has-feedback">
 <label for="level">Level</label>
 <label for="level">*Level Merupakan Tingkatan Anda Pada Sekolah ini</label>

 <select class="form-control" id="level" name="level"> 
                        <option></option>   
                      <option value="guru10">guru10</option>
                      <option value="guru11">guru11</option>
                      <option value="guru12">guru12</option>  
                      <option value="murid">murid</option>
                      <option value="murid11">murid11</option>
                      <option value="murid12">murid12</option>
                      
                    </select>  
<label for="level">*untuk Level Guru dan Murid silahkan pilih sesuai kelas anda</label>
 </div>

<button type="submit" name="btn-simpan" class="btn btn-primary btn-block">Simpan</button>
</form></center>
 </div>
 </div>
</div>
<<footer class="new_footer_area bg_color">
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