<!DOCTYPE html>
<html>
<head>
	<title>Export Excel</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>  
   <script type="text/javascript" src="js/bootstrap.js"></script> 
</head>
<body>
	<div class="jumbotron text-center" style="padding-top: 20%; padding-bottom: 15%; background-color: #FFF">  
           <h1>Data Anda Telah Di Export</h1>  
           <h3>Kembali Ke Halaman Awal</h3>  
           <div class="row">            
                <div class="container col-md-3">  
                     <div class="row">  
                          <div class="col-md-10">                      
                                    </div>            
                               <a href="Halamanawal.php" class="btn btn-success" align="center" >Homepage</a>          
                          </div>  </div>  </div>  </div>  </div> </div>  
	<script>
	function klik(){
		swal ("Selamat!", "Data Anda Telah di Export ke Excel", "success")
	}</script>
	<header>  
     </header> 
   </body>
</html>
<?php
include('koneksieport.php');
require 'vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet->getActiveSheet();
$sheet->setCellValue('A1', 'No');
$sheet->setCellValue('B1', 'Nama');
$sheet->setCellValue('C1', 'Jenis Kelamin');
$sheet->setCellValue('D1', 'NISN');
$sheet->setCellValue('E1', 'NIK');
$sheet->setCellValue('F1', 'Tempat Lahir');
$sheet->setCellValue('G1', 'Tanggal');
$sheet->setCellValue('H1', 'No.Akta');
$sheet->setCellValue('I1', 'Agama');
$sheet->setCellValue('J1', 'Nama Negara');
$sheet->setCellValue('K1', 'Nama Negara');
$sheet->setCellValue('L1', 'Kebutuhan kusus');
$sheet->setCellValue('M1', 'Alamat');
$sheet->setCellValue('N1', 'Rt');
$sheet->setCellValue('O1', 'Rw');
$sheet->setCellValue('P1', 'Dusun');
$sheet->setCellValue('Q1', 'Kelurahan');
$sheet->setCellValue('R1', 'Kecamatan');
$sheet->setCellValue('S1', 'Kode Pos');
$sheet->setCellValue('T1', 'Lintang');
$sheet->setCellValue('U1', 'Bujur');
$sheet->setCellValue('V1', 'Tinggal');
$sheet->setCellValue('W1', 'Transpor');
$sheet->setCellValue('X1', 'KKS');
$sheet->setCellValue('Y1', 'Anak Ke');
$sheet->setCellValue('Z1', 'Penerima Kps');
$sheet->setCellValue('AA1', 'No. Kps');
$query = mysqli_query($koneksi,"select * from Siswa");
$i = 2;
$no = 1;
while($row = mysqli_fetch_array($query))
{
	$sheet->setCellValue('A'.$i, $no++);
	$sheet->setCellValue('B'.$i, $row['nama']);
	$sheet->setCellValue('C'.$i, $row['jenis']);
	$sheet->setCellValue('D'.$i, $row['nisn']);
	$sheet->setCellValue('E'.$i, $row['nik']);
	$sheet->setCellValue('F'.$i, $row['tempatlahir']);
	$sheet->setCellValue('G'.$i, $row['tanggal']);
	$sheet->setCellValue('H'.$i, $row['noakta']);
	$sheet->setCellValue('I'.$i, $row['agama']);
	$sheet->setCellValue('J'.$i, $row['negara']);
	$sheet->setCellValue('K'.$i, $row['Namanegara']);
	$sheet->setCellValue('L'.$i, $row['kebutuhan']);
	$sheet->setCellValue('M'.$i, $row['alamat']);
	$sheet->setCellValue('N'.$i, $row['rt']);
	$sheet->setCellValue('O'.$i, $row['rw']);
	$sheet->setCellValue('P'.$i, $row['dusun']);
	$sheet->setCellValue('Q'.$i, $row['kelurahan']);
	$sheet->setCellValue('R'.$i, $row['kecamatan']);
	$sheet->setCellValue('S'.$i, $row['kodepos']);
	$sheet->setCellValue('T'.$i, $row['lintang']);
	$sheet->setCellValue('U'.$i, $row['bujur']);
	$sheet->setCellValue('V'.$i, $row['tinggal']);
	$sheet->setCellValue('W'.$i, $row['transpor']);
	$sheet->setCellValue('X'.$i, $row['kks']);
	$sheet->setCellValue('Y'.$i, $row['anakke']);
	$sheet->setCellValue('Z'.$i, $row['penerimakps']);
	$sheet->setCellValue('AA'.$i, $row['nokps']);		
	$i++;
}

$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
$i = $i - 1;
$sheet->getStyle('A1:AA'.$i)->applyFromArray($styleArray);


$writer = new Xlsx($spreadsheet);
$writer->save('Pendataan Siswa Baru (Report).xlsx');
?>

