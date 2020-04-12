<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>  
   <script type="text/javascript" src="js/bootstrap.js"></script> 

<style>
	.warning {color:#FF0000;}
	
</style>
	<title></title>
</head>
<body>
	<script>
	function klik(){
		swal ("Yupp", "Terimakasih Telah Mendaftar", "success")
	}
</script>
	<header>  
           <h3 class="jumbotron text-center">Formulir Pendaftaran Siswa Baru</h3>  
      </header>  
<?php
include"koneksi.php";
?>
<?php
$error_nama ="";
$erorr_jenis="";
$error_nisn="";
$error_nik="";
$error_tempatlahir="";
$error_tanggallahir="";
$error_noakta ="";
$error_agama="";
$error_negara="";
$error_asing="";
$error_kebutuhankhusus="";
$error_alamat="";
$error_rt="";
$error_rw ="";
$error_dusun="";
$erorr_kelurahan="";
$error_kecamatan="";
$error_kodepos="";
$error_lintang="";
$error_bujur ="";
$error_tinggal="";
$erorr_transpor="";
$error_kks="";
$error_anakke="";
$error_penerimakps="";
$error_nokps="";


$nama="";
$jenis="";
$nisn="";
$nik="";
$tempatlahir="";
$tanggallahir="";
$noakta="";
$agama="";
$negara="";
$asing="";
$kebutuhankhusus="";
$alamat="";
$rt="";
$rw="";
$dusun="";
$kelurahan="";
$kecamatan="";
$kodepos="";
$lintang="";
$bujur="";
$tinggal="";
$transpor="";
$kks="";
$anakke="";
$penerimakps="";
$nokps="";


if($_SERVER["REQUEST_METHOD"] == "POST") {
	if(empty($_POST["nama"])){
			$error_nama = "Nama tidak boleh kosong";
		} else{
			$nama = cek_input($_POST["nama"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$nama)){
				$error_nama = "Input Hanya boleh huruf dan spasi";
			}
		}

		if(!isset($_POST['jenis'])){ 
        $erorr_jenis = "Pilih Salah Satu";
		} else{ 
			$jenis = cek_input($_POST["jenis"]);
			if (!filter_var($jenis)){
				$erorr_jenis = "";
			}
		}
		if(empty($_POST["nisn"])){
			$error_nisn = "NISN tidak boleh kosong";
		} else{ 
			$nisn = cek_input($_POST["nisn"]);
			if (!is_numeric($nisn)){
				$error_nisn = "NISN hanya boleh angka";
			}
		}
		
		if(empty($_POST["nik"])){
			$error_nik = "NIK tidak boleh kosong";
		} else{ 
			$nik = cek_input($_POST["nik"]);
			if (!is_numeric($nik)){
				$error_nik = "NIK Hanya Boleh Angka";
			}
		}
		
		if(empty($_POST["tempatlahir"])){
			$error_tempatlahir = "Isi Tempat Lahir Anda";
		} else{
			$tempatlahir = cek_input($_POST["tempatlahir"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$tempatlahir)){
				$error_tempatlahir = "Input Hanya boleh huruf dan spasi";
			}
		}
		
		//if(empty($_POST["web"])){
			//$error_web = "Website tidak boleh kosong";
		//} else{ 
		//	$web = cek_input($_POST["web"]);
		//	if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=_|!:,.;]*[-q-z0-9+&@#\/%=_|]/i",$web)){
		//		$error_web = "URL tidak valid";
		//	}
	//	}
		
		if(empty($_POST["tanggallahir"])){
			$error_tanggallahir = "Tanggal Lahir Anda tidak boleh kosong";
		} else{ 
			$tanggallahir = cek_input($_POST["tanggallahir"]);
			if (!preg_match("/^[-a-zA-Z0-9 .]+$/",$tanggallahir)){
				$error_tanggallahir = " Hanya boleh menggunakan angka dan Simbol";
			}
		}
		
		if(empty($_POST["noakta"])){
			$error_noakta = "Nomor Akta Anda tidak boleh kosong";
		} else{ 
			$noakta = cek_input($_POST["noakta"]);
			if (!is_numeric($noakta)){
				$error_noakta = " Hanya boleh menggunakan angka";
			}
		}

		if(empty($_POST["agama"])){
			$error_agama = "Agama Anda";
		} else{
			$agama = cek_input($_POST["agama"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$agama)){
				$error_agama = "Input Hanya boleh huruf dan spasi";
			}
		}
		if(!isset($_POST["negara"])){
			$error_negara = "Pilih Salah Satu";
		} else{ 
			$negara = cek_input($_POST["negara"]);
			if (!filter_var($negara)){
				$error_negara = "";
			}
		}
		if(empty($_POST["asing"])){
			$error_asing = "Masukkan asal Negara";
		} else{
			$asing = cek_input($_POST["asing"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$asing)){
				$error_asing = "Input Hanya boleh huruf dan spasi";
			}
		}
		if(!isset($_POST["kebutuhankhusus"])){
			$error_kebutuhankhusus = "Pilih Salah Satu";
		} else{ 
			$kebutuhankhusus = cek_input($_POST["kebutuhankhusus"]);
			if (!filter_var($kebutuhankhusus)){
				$error_kebutuhankhusus = "";
			}
		}
		if(empty($_POST["alamat"])){
			$error_alamat = "Masukkan Alamat Anda";
		} else{
			$alamat = cek_input($_POST["alamat"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$alamat)){
				$error_alamat = "Input Hanya boleh huruf dan spasi";
			}
		}
		if(empty($_POST["rt"])){
			$error_rt = "Rt anda tidak boleh Kosong";
		} else{ 
			$rt = cek_input($_POST["rt"]);
			if (!is_numeric($rt)){
				$error_rt = " Hanya boleh menggunakan angka";
			}
		}
		if(empty($_POST["rw"])){
			$error_rw = "Rw anda tidak boleh Kosong";
		} else{ 
			$rw = cek_input($_POST["rw"]);
			if (!is_numeric($rw)){
				$error_rw = " Hanya boleh menggunakan angka";
			}
		}
		if(empty($_POST["dusun"])){
			$error_dusun = "Masukkan Dusun";
		} else{
			$dusun = cek_input($_POST["dusun"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$dusun)){
				$error_dusun = "Input Hanya boleh huruf dan spasi";
			}
		}
		if(empty($_POST["kelurahan"])){
			$erorr_kelurahan = "Masukkan kelurahan Anda";
		} else{
			$kelurahan = cek_input($_POST["kelurahan"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$kelurahan)){
				$erorr_kelurahan = "Input Hanya boleh huruf dan spasi";
			}
		}
		if(empty($_POST["kecamatan"])){
			$error_kecamatan = "Masukkan kecamatan Anda";
		} else{
			$kecamatan = cek_input($_POST["kecamatan"]);
			if (!preg_match("/^[a-zA-Z ]*$/",$kecamatan)){
				$error_kecamatan = "Input Hanya boleh huruf dan spasi";
			}
		}
		if(empty($_POST["kodepos"])){
			$error_kodepos = "Kode Pos tidak boleh kosong";
		} else{ 
			$kodepos = cek_input($_POST["kodepos"]);
			if (!is_numeric($kodepos)){
				$error_kodepos = " Hanya boleh menggunakan angka";
			}
		}
		if(empty($_POST["lintang"])){
			$error_lintang = "Lintang";
		} else{
			$lintang = cek_input($_POST["lintang"]);
			if (!preg_match("/^[a-zA-Z0-9 ]*$/",$lintang)){
				$error_lintang = "Input Hanya boleh huruf Angka dan Simbol";
			}
		}
		if(empty($_POST["bujur"])){
			$error_bujur = "Bujur";
		} else{
			$bujur = cek_input($_POST["bujur"]);
			if (!preg_match("/^[a-zA-Z0-9 ]*$/",$kelurahan)){
				$error_bujur = "Input Hanya boleh huruf dan spasi";
			}
		}
		if(!isset($_POST["tinggal"])){
			$error_tinggal = "Pilih Salah Satu";
		} else{ 
			$tinggal = cek_input($_POST["tinggal"]);
			if (!filter_var($tinggal)){
				$error_tinggal = "Pilih Salah Satu";
			}
		}
		if(!isset($_POST["transpor"])){
			$erorr_transpor = "Pilih Salah Satu";
		} else{ 
			$transpor = cek_input($_POST["transpor"]);
			if (!filter_var($transpor)){
				$erorr_transpor = "Pilih Salah Satu";
			}
		}
		if(empty($_POST["kks"])){
			$error_kks = "KKS anda tidak boleh Kosong";
		} else{ 
			$kks = cek_input($_POST["kks"]);
			if (!is_numeric($kks)){
				$error_kks = " Hanya boleh menggunakan angka";
			}
		}
		if(!isset($_POST["anakke"])){
			$error_anakke = "Pilih Salah Satu";
		} else{ 
			$anakke = cek_input($_POST["anakke"]);
			if (!filter_var($anakke)){
				$error_anakke = "Pilih Salah Satu";
			}
		}
		if(!isset($_POST['penerimakps'])){ 
        $error_penerimakps = "Pilih Salah Satu";
		} else{ 
			$penerimakps = cek_input($_POST["penerimakps"]);
			if (!filter_var($penerimakps)){
				$error_penerimakps = "";
			}
		}
		if(empty($_POST["nokps"])){
			$error_nokps = "ISI Apabila anda Penerima";
		} else{ 
			$nokps = cek_input($_POST["nokps"]);
			if (!is_numeric($nokps)){
				$nokps = " Hanya boleh menggunakan angka";
			}
	}
	}
	mysqli_connect($servername,$username,$password) or die(mysqli_error());
	mysqli_select_db ($koneksi,$dbname) or die(mysqli_error());
	
	$sql="insert siswa set nama='$nama', jenis='$jenis', nisn='$nisn', nik='$nik', tempatlahir='$tempatlahir', tanggal='$tanggallahir', noakta='$noakta', agama='$agama', negara='$negara', Namanegara='$asing', kebutuhan='$kebutuhankhusus', alamat='$alamat', rt='$rt', rw='$rw', dusun='$dusun', kecamatan='$kecamatan', kelurahan='$kelurahan', kodepos='$kodepos', lintang='$lintang', bujur='$bujur', tinggal='$tinggal', transpor='$transpor', kks='$kks', anakke='$anakke', penerimakps='$penerimakps', nokps='$nokps'";
	mysqli_query($koneksi, $sql) or die (mysqli_error());
	
	function cek_input($data){
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
		
	?>
	<div class="row">
	<div class="col-md-7">
	<div class="card">
<div class="card-header">
	<div class="card-body ">
		<div class="card-footer">
	<?php
date_default_timezone_set('Asia/jakarta');
echo date("m-F-y, g:i:s a"); ?>
	<label for="card-header" class="col-md-6">Tanggal Saat ini</label>
	FORM SISWA 

</div>
<form method="post">
<div class="card-body">
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
	<div class="form-group row">
	<label for="nama" class="col-sm-2 col-form-label">Nama</label>
	<div class="col-sm-10">
		<input type="text" name="nama" class="form-control <?php echo ($error_nama !="" ? "is-invalid" : ""); ?>" id="nama" placeholder="" value="<?php echo $nama;?>"><span class="warning"><?php echo $error_nama; ?></span>
		</div>
	</div>
	
	
	<div class="radio">
		<label for="jenis" class="col-sm-2 col-form-label">Jenis Kelamin</label>
		<input type='radio' name="jenis" class="radio <?php echo ($erorr_jenis !="" ? "is-invalid" : ""); ?>" id="jenis"  value="Laki-Laki"<?php echo $jenis;?>">Laki-Laki<span class="warning"><?php echo $erorr_jenis; ?></span>
		<input type='radio' name="jenis" class="radio <?php echo ($erorr_jenis !="" ? "is-invalid" : ""); ?>" id="jenis"  value="Perempuan"<?php echo $jenis;?>">Perempuan<span class="warning"><?php echo $erorr_jenis; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="nisn" class="col-sm-2 col-form-label">NISN</label>
		<div class="col-sm-10">
	<input type="text" name="nisn" class="form-control <?php echo ($error_nisn !="" ? "is-invalid" : ""); ?>" id="nisn" placeholder="NISN" value="<?php echo $nisn;?>"><span class="warning"><?php echo $error_nisn; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="nik" class="col-sm-2 col-form-label">NIK</label>
		<div class="col-sm-10">
	<input type="text" name="nik" class="form-control <?php echo ($error_nik !="" ? "is-invalid" : ""); ?>" id="nik" placeholder="NIK" value="<?php echo $nik;?>"><span class="warning"><?php echo $error_nik; ?></span>
		</div>
	</div>


	<div class="form-group row">
		<label for="tempatlahir" class="col-sm-2 col-form-label">Tempat Lahir</label>
		<div class="col-sm-10">
	<input type="text" name="tempatlahir" class="form-control <?php echo ($error_tempatlahir !="" ? "is-invalid" : ""); ?>" id="tempatlahir" placeholder="Tempat Lahir Anda" value="<?php echo $tempatlahir;?>"><span class="warning"><?php echo $error_tempatlahir; ?></span>
		</div>
	</div>


	<div class="form-group row">
		<label for="tanggallahir" class="col-sm-2 col-form-label">Tanggal Lahir Anda</label>
		<div class="col-sm-10">
	<input type="text" name="tanggallahir" class="form-control <?php echo ($error_tanggallahir !="" ? "is-invalid" : ""); ?>" id="tanggallahir" placeholder="Masukkan Tanggal " value="<?php echo $tanggallahir;?>"></textarea><span class="warning"><?php echo $error_tanggallahir; ?></span>
		</div>
		</div>

	<div class="form-group row">
		<label for="noakta" class="col-sm-2 col-form-label">Nomor Akta</label>
		<div class="col-sm-10">
	<input type="text" name="noakta" class="form-control <?php echo ($error_noakta !="" ? "is-invalid" : ""); ?>" id="noakta" placeholder="Masukkan No.Akta" value="<?php echo $noakta;?>"></textarea><span class="warning"><?php echo $error_noakta; ?></span>
		</div>
	</div>

<div class="form-group row">
		<label for="agama" class="col-sm-2 col-form-label">Agama Anda</label>
		<div class="col-sm-10">
	<input type="text" name="agama" class="form-control <?php echo ($error_agama !="" ? "is-invalid" : ""); ?>" id="agama" placeholder="Masukkan Agama Anda" value="<?php echo $agama;?>"><span class="warning"><?php echo $error_agama; ?></span>
		</div>
	</div>

	<div class="radio">
		<label for="negara" class="col-sm-2 col-form-label">Kewarga negaraan</label>
		<input type='radio' name="negara" class="radio <?php echo ($error_negara !="" ? "is-invalid" : ""); ?>" id="negara"  value="WNI"<?php echo $negara;?>">WNI<span class="warning"><?php echo $error_negara; ?></span>

		<input type='radio' name="negara" class="radio <?php echo ($error_negara !="" ? "is-invalid" : ""); ?>" id="negara"  value="Asing"<?php echo $negara;?>">Asing<span class="warning"><?php echo $error_negara; ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label for="agama" class="col-sm-2 col-form-label"></label>
		<div class="col-sm-10">
	<input type="text" name="asing" class="form-control <?php echo ($error_asing !="" ? "is-invalid" : ""); ?>" id="asing" placeholder="Asal Negara Anda" value="<?php echo $asing;?>"><span class="warning"><?php echo $error_asing; ?></span>
		</div>
	</div>
	<div class="card-body">
	<div class="radio">
		<label for="kebutuhankhusus" class="col-sm-2 col-form-label">Kebutuhan Khusus</label>
		<input type='radio' name="kebutuhankhusus" class="radio <?php echo ($error_negara !="" ? "is-invalid" : ""); ?>" id="kebutuhankhusus"  value="IYA"<?php echo $kebutuhankhusus;?>">IYA<span class="warning"><?php echo $error_kebutuhankhusus; ?></span>

		<input type='radio' name="kebutuhankhusus" class="radio <?php echo ($error_negara !="" ? "is-invalid" : ""); ?>" id="negara"  value="TIDAK"<?php echo $kebutuhankhusus;?>">TIDAK<span class="warning"><?php echo $error_kebutuhankhusus; ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label for="alamat" class="col-sm-2 col-form-label">Alamat Anda</label>
		<div class="col-sm-10">
	<input type="text" name="alamat" class="form-control <?php echo ($error_alamat !="" ? "is-invalid" : ""); ?>" id="alamat" placeholder="Masukkan Alamat" value="<?php echo $alamat;?>"></textarea><span class="warning"><?php echo $error_alamat; ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label for="rt,rw" class="col-sm-2 col-form-label">RT/RW </label>
		<div class="col-sm-2">
	<input type="text" name="rt" class="form-control <?php echo ($error_rt !="" ? "is-invalid" : ""); ?>" id="rt" placeholder="Masukkan RT" value="<?php echo $rt;?>"></textarea><span class="warning"><?php echo $error_rt; ?></span>
		</div>
		<div class="col-sm-2">
	<input type="text" name="rw" class="form-control <?php echo ($error_rw !="" ? "is-invalid" : ""); ?>" id="rw" placeholder="Masukkan RW" value="<?php echo $rw;?>"></textarea><span class="warning"><?php echo $error_rw; ?></span>
		</div>
	</div>
	<div class="form-group row">
		<label for="dusun,kecamatan,kelurahan" class="col-sm-2 col-form-label">Dusun / Kecamatan / Kelurahan </label>
		<div class="col-sm-3">
	<input type="text" name="dusun" class="form-control <?php echo ($error_dusun !="" ? "is-invalid" : ""); ?>" id="dusun" placeholder="Masukkan Dusun" value="<?php echo $dusun;?>"></textarea><span class="warning"><?php echo $error_dusun; ?></span>
		</div>
		<div class="col-sm-3">
	<input type="text" name="kecamatan" class="form-control <?php echo ($error_kecamatan !="" ? "is-invalid" : ""); ?>" id="kecamatan" placeholder="Masukkan Kecamatan" value="<?php echo $kecamatan;?>"></textarea><span class="warning"><?php echo $error_kecamatan; ?></span>
		</div>
		<div class="col-sm-3">
	<input type="text" name="kelurahan" class="form-control <?php echo ($erorr_kelurahan !="" ? "is-invalid" : ""); ?>" id="kelurahan" placeholder="Masukkan kelurahan" value="<?php echo $kelurahan;?>"></textarea><span class="warning"><?php echo $erorr_kelurahan; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="kodepos" class="col-sm-2 col-form-label">Kode Pos Anda</label>
		<div class="col-sm-4">
	<input type="text" name="kodepos" class="form-control <?php echo ($error_kodepos !="" ? "is-invalid" : ""); ?>" id="kodepos" placeholder="Masukkan Kode Pos" value="<?php echo $kodepos;?>"></textarea><span class="warning"><?php echo $error_kodepos; ?></span>
		</div>
	</div>
	
	<div class="form-group row">
		<label for="lintang,bujur" class="col-sm-2 col-form-label">Lintang / Bujur </label>
		<div class="col-sm-4">
	<input type="text" name="lintang" class="form-control <?php echo ($error_lintang !="" ? "is-invalid" : ""); ?>" id="lintang" placeholder="Masukkan Lintang" value="<?php echo $lintang;?>"></textarea><span class="warning"><?php echo $error_lintang; ?></span>
		</div>
		<div class="col-sm-4">
	<input type="text" name="bujur" class="form-control <?php echo ($error_bujur !="" ? "is-invalid" : ""); ?>" id="bujur" placeholder="Masukkan Bujur" value="<?php echo $bujur;?>"></textarea><span class="warning"><?php echo $error_bujur; ?></span>
		</div>
	</div>

	<div class="form-group row">
		<label for="tinggal" class="col-sm-2 col-form-label">Tempat Tinggal</label>
		<div class="col-sm-4">
	<select name="tinggal" class="form-control <?php echo ($error_tinggal !="" ? "is-invalid" : ""); ?>" id="tinggal" placeholder="" value="<?php echo $tinggal;?>"></textarea><span class="warning"><?php echo $error_tinggal; ?><option value="">Tempat Tinggal</option>
  <option value="Rumah Sendiri">Rumah Sendiri</option>
  <option value="Kontrakan">Kontrakan</option>
  <option value="KOS">KOS</option>
  <option value="Apartement">Apartement</option>
</select></span>
		</div>
	</div>

<div class="form-group row">
		<label for="transpor" class="col-sm-2 col-form-label">Transportasi</label>
		<div class="col-sm-4">
	<select name="transpor" class="form-control <?php echo ($erorr_transpor !="" ? "is-invalid" : ""); ?>" id="transpor" placeholder="" value="<?php echo $transpor;?>"></textarea><span class="warning"><?php echo $erorr_transpor; ?><option value="">Transportasi Anda</option>
  <option value="Sepeda Motor">Sepeda Motor</option>
  <option value="Mobil">Mobil</option>
  <option value="Sepeda Ontel">Sepeda Ontel</option>
  <option value="Jalan Kaki">Jalan Kaki</option>
  <option value="Transportasi Umum">Transportasi Umum</option>
</select></span>
		</div>
	</div>

<div class="form-group row">
		<label for="kks" class="col-sm-2 col-form-label">Nomor KKS (Kartu Keluarga Sejahtera)</label>
		<div class="col-sm-5">
	<input type="text" name="kks" class="form-control <?php echo ($error_kks !="" ? "is-invalid" : ""); ?>" id="kks" placeholder="Masukkan KKS" value="<?php echo $kks;?>"></textarea><span class="warning"><?php echo $error_kks; ?></span>
		</div>
	</div>

<div class="form-group row">
		<label for="anakke" class="col-sm-2 col-form-label">Anak Ke</label>
		<div class="col-sm-4">
	<select name="anakke" class="form-control <?php echo ($error_anakke !="" ? "is-invalid" : ""); ?>" id="anakke" placeholder="" value="<?php echo $anakke;?>"></textarea><span class="warning"><?php echo $error_anakke; ?><option value="">Anak Ke</option>
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
</select></span>
		</div>
	</div>

<div class="radio">
		<label for="penerimakps" class="col-sm-2 col-form-label">Penerima Kps</label>
		<input type='radio' name="penerimakps" class="radio <?php echo ($penerimakps !="" ? "is-invalid" : ""); ?>" id="penerimakps"  value="IYA"<?php echo $penerimakps;?>">IYA<span class="warning"><?php echo $error_penerimakps; ?></span>

		<input type='radio' name="penerimakps" class="radio <?php echo ($penerimakps !="" ? "is-invalid" : ""); ?>" id="penerimakps"  value="TIDAK"<?php echo $penerimakps;?>">TIDAK<span class="warning"><?php echo $error_penerimakps; ?></span>
		</div>
	</div>
<div class="card-body">
<div class="form-group row">
		<label for="nokps" class="col-sm-2 col-form-label">Nomor KPS (Apabila Anda Menerima)</label>
		<div class="col-sm-5">
	<input type="text" name="nokps" class="form-control <?php echo ($nokps !="" ? "is-invalid" : ""); ?>" id="nokps" placeholder="Masukkan NO.KPS" value="<?php echo $error_nokps;?>"></textarea><span class="warning"><?php echo $error_nokps; ?></span>
		</div>
	</div>

	<br>
	<div class="form-group row">
		<div class="col-sm-10">
			<center> 
				<button type ="submit" name="kirim" class="btn btn-primary" onclick="klik()"> Daftarkan Anda </button>
				
				<a href="Halamanawal.php" class="btn btn-success">[+] Kembali Untuk Cek data</a>
			<br></br>
			
		</div>
	</div>

	
		
</form>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>
<!--<?php



//echo "Nama = ".$nama;
//echo "<br>";
//echo "Jenis = ".$jenis;
//echo "<br>";
//echo "nisn = ".$nisn;
//echo "<br>";
//echo "Telp = ".$telp;
//echo "<br>";
//echo "Pesan = ".$pesan;
//echo "<br>";
?>
