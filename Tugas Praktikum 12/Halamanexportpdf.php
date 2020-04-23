<!DOCTYPE html>
<html>
<head>
	<title>Export PDF</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>  
   <script type="text/javascript" src="js/bootstrap.js"></script> 
</head>
<body>
	
	<div class="jumbotron text-center" style="padding-top: 20%; padding-bottom: 15%; background-color: #FFF">  
           <h1>Export Data Anda Ke PDF</h1>  
           <h3>Pendaftaran Siswa Baru</h3>  
           <div class="row">            
                <div class="container col-md-3">  
                     <div class="row">  
                          <div class="col-md-6">                      
                              <a href="Exportpdf.php" class="btn btn-success" onclick="klik()" >Export!</a>
                                    </div>  

                               <a href="Halamanawal.php" class="btn btn-success" >Homepage</a> 
                               
                          </div>  
                          </div>  
                     </div>  
                </div>  
           </div>  
      </div>  
	<script>
	function klik(){
		swal ("Selamat!", "Data Anda Telah di Export ke PDF", "success")
	}</script>
	<header>  
     </header> 
  </body>
</html>