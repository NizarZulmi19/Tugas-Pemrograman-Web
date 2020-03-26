<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<link rel="stylesheet" type="text/css" href="csspengenalan.css">
	<style type="text/css">
    body {
       background: -webkit-linear-gradient(bottom, #2dbd6e, #a6f77b);
       background-repeat: no-repeat;
}
		 {
        margin:0; 
        padding:0;
    }

    nav {
        margin:auto;
        text-align: center;
        width: 90%;
        font-family: arial;
    } 

    nav ul {
        background:#2dbd6e;
        padding: 0 15px;
        list-style: none;
        position: relative;
        display: inline-table;
        width: 100%;
     }
     nav ul li{
        float:right;
    }

    nav ul li:hover{
        background:#2dbd6e;
    }

    nav ul li:hover a{
        color:#000;
    }

    nav ul li a{
        display: block;
        padding: 25px;
        color: #fff;
        text-decoration: none;
    }
    /*My Style Bruh*/
.tab_container{width:95%;margin:0 auto;padding-top:80px;position:absolute;}
input,section{clear:both;padding-top:15px;display:none}
label{font-weight:700;font-size:15px;display:block;float:left;width:20%;padding:1.5em;color:#757575;cursor:pointer;text-decoration:none;text-align:center;background:#f5f5f5}
#tab1:checked ~ #content1,#tab2:checked ~ #content2,#tab3:checked ~ #content3,#tab4:checked ~ #content4,#tab5:checked ~ #content5{display:block;padding:20px;background:#fff;color:#999;border-bottom:2px solid #f0f0f0}
.tab_container .tab-content p,.tab_container .tab-content h3{-webkit-animation:fadeInScale 0.7s ease-in-out;-moz-animation:fadeInScale 0.7s ease-in-out;animation:fadeInScale 0.7s ease-in-out}
.tab_container .tab-content h3{text-align:center}
.tab_container [id^="tab"]:checked + label{background:#fff;box-shadow:inset 0 3px #09C}
.tab_container [id^="tab"]:checked + label .fa{color:#09C}
label .fa{font-size:1.3em;margin:0 0.4em 0 0;display:inline-block;width:1.28571429em;height:auto;float:none;margin-left:-15px}
}
/*Media query*/
@media only screen and (max-width:900px){
  label span{display:none}
  .tab_container{width:98%}
}
/*Content Animation*/
@keyframes fadeInScale{
  0%{transform:scale(0.9);opacity:0}
  100%{transform:scale(1);opacity:1}
}
.clearfix:before,.clearfix:after{content:" ";display:table}

    .footer{
    width: 104%;
    height: 50px;
    padding-right: 1px;
    padding-left: 1px;
    line-height: 50px;
    background: #2dbd6e;
    color: #fff;
}
h3{
    font-family: sans-serif;
}
	</style>

	<title>HomePage Info Covid-19</title>
</head>
<body>
    

	<nav>
    <ul>
        <img src="health-logo-vector-png-1.png" align="left" height="90">
    	<li><a href="Homepage.php">Home</a></li>
        <li><a href="Penyebaran.php">Penyebaran</a></li>
        <li><a href="PengenalanCovid.php">Pengenalan Covid-19</a></li>
        <li><a href="Pencegahan.php">Cara Pencegahan</a></li>
        <li><a href="Tentang.php">Contact Us</a></li>
    </ul>
</nav>
<div class="tab_container">
<input checked="" id="tab1" name="tabs" type="radio" />
<label for="tab1">
<i class="fa fa-code"></i>Covid 19</label>

<input id="tab2" name="tabs" type="radio" />
<label for="tab2">
<i class="fa fa-pencil-square-o"></i>Corona</label>

<input id="tab3" name="tabs" type="radio" />
<label for="tab3">
<i class="fa fa-bar-chart-o"></i>Flu</label>

<input id="tab4" name="tabs" type="radio" />
<label for="tab4">
<i class="fa fa-folder-open-o"></i>Tentang Covid</label>
<section class="tab-content" id="content1">
<h3>
Covid-19</h3>
<p>WHO mengumumkan Covid-19 menjadi nama resmi dari penyakit yang disebabkan oleh virus Corona yang berasal dari Wuhan, China. Nama tersebut diberikan Dirjen WHO Tedros Adhanom Ghebreyesus di Jenewa, Swiss pada Selasa, 11 Februari 2020.

Singkatan Covid-19 juga memiliki rincian, seperti "co" berarti corona, "vi" mengacu ke virus, "d" untuk diseases, dan 19 merupakan tahun wabah penyakit pertama kali diidentifikasi pada 31 Desember 2019.

Tedros menjelaskan nama tersebut dipilih untuk menghindari stigmatisasi, sebagaimana panduan penamaan virus yang dikeluarkan WHO pada 2015. Nama virus atau penyakit itu tidak akan merujuk pada letak geografis, hewan, individu, atau kelompok orang.

Sebelumnya, WHO memberikan nama sementara untuk virus Corona ini dengan sebutan 2019-nCoV. Sedangkan Komisi Kesehatan Nasional China menyebut sementara Novel Coronavirus Pneumonia (NCP)</p>
<div class="separator" style="clear: both; text-align: center;">
<img  src="Logo.png" height="115" width="100" /></div>
</section>

<section class="tab-content" id="content2">
<h3>
Corona </h3>
WHO menjelaskan coronavirus menjadi bagian dari keluarga besar virus yang menyebabkan penyakit yang terjadi pada hewan ataupun manusia. 

Manusia yang terjangkit virus tersebut akan menunjukkan tanda-tanda penyakit infeksi saluran pernapasan mulai dari flu sampai yang lebih serius, seperti Middle East Respiratory Syndrome (MERS) dan Severe Acute Respiratory Syndrome (SARS) atau sindrom pernapasan akut berat.

Coronavirus sendiri jenis baru yang ditemukan manusia sejak muncul di Wuhan, China pada Desember 2019, dan diberi nama Severe Acute Respiratory Syndrome Coronavirus 2 (SARS-COV2). Sehingga, penyakit ini disebut dengan Coronavirus Disease-2019 (Covid-19).
<div class="separator" style="clear: both; text-align: center;">
<img  src="Logo.png" height="115" width="100" /></div>
</section>

<section class="tab-content" id="content3">
<h3>
Flu</h3>
Suatu infeksi virus umum yang dapat mematikan, terutama di kelompok risiko tinggi.
Flu menyerang paru-paru, hidung, dan tenggorokan. Anak-anak, orang dewasa yang lebih tua, wanita hamil, dan orang dengan penyakit kronis atau sistem kekebalan tubuh lemah berisiko tinggi.
Gejalanya meliputi demam, menggigil, nyeri otot, batuk, pilek, sakit kepala, dan kelelahan.
Flu diobati terutama dengan beristirahat dan cairan untuk membantu tubuh melawan infeksi. Penghilang rasa sakit anti peradagangan yang tersedia bebas dapat membantu meringankan gejala. Vaksin tahunan dapat membantu mencegah flu dan membatasi komplikasinya.
<div class="separator" style="clear: both; text-align: center;">
<img  src="Logo.png" height="115" width="100"/></div>
</section>

<section class="tab-content" id="content4">
<h3>
Tentang Virus Covid-19/Corona</h3><br>
<center><video width="600" height="300" controls autoplay>
  <source src="kokbisa.mp4" type="video/mp4">
</video></section></center>
</a>.</section>
        
<div class="footer"><center>
        Nizar
    </div></center>
</body>
</html>