
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="ilmu-detil.blogspot.com">
	<title>LineChart </title>
	<!-- Bagian css -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/ilmudetil.css">
	
	<script src="assets/js/jquery-1.10.1.min.js"></script>
	<script type="text/javascript">
		$(function () {
			var chart;
			$(document).ready(function() {
				$.getJSON("dataline.php", function(json) {
				
					chart = new Highcharts.Chart({
						chart: {
							renderTo: 'mygraph',
							type: 'line'
							
						},
						title: {
							text: 'Statistik Data Covid 19 '
							
						},
						subtitle: {
							text: '(10 Negara)'
						
						},
						xAxis: {
							categories: ['US', 'SPAIN', 'ITALY', 'FRENCC', 'UK', 'GERMANY', 'TURKEY', 'RUSSIA', 'IRAN', 'CHINA']
						},
						yAxis: {
							title: {
								text: 'Jumlah Data'
							},
							plotLines: [{
								value: 0,
								width: 1,
								color: '#808080'
							}]
						},
						tooltip: {
							formatter: function() {
									return '<b>'+ this.series.name +'</b><br/>'+
									this.x +': '+ this.y;
							}
						},
						legend: {
							layout: 'vertical',
							align: 'right',
							verticalAlign: 'top',
							x: -10,
							y: 120,
							borderWidth: 0
						},
						series: json
					});
				});
			
			});
			
		});
		</script>
	<script src="assets/js/highcharts.js"></script>
	<script src="assets/js/exporting.js"></script>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">  
   <script type="text/javascript" src="jquery-3.4.1.min.js"></script>  
   <script type="text/javascript" src="js/bootstrap.js"></script> <br></br>
  <center> <a href="Homepagecovid.php" class="btn btn-success">HOME </a> 
</head>
<body>

	<center><div class="container">
		
				<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
			</button>
			
		</div>
		
			</ul>
		</div>
	</div>
</nav>
</br></br></br></br>
<!--- Bagian Judul-->	
<center><div class="container" style="margin-top:20px">
	<div class="col-md-10">
		<div class="panel panel-primary">
			<div class="panel-heading">Data Line Chart Covid</div>
				<div class="panel-body">
					<div id ="mygraph"></div>
				</div>
		</div>
	</div>
</div>
<script src="assets/js/highcharts.js"></script>
<script src="assets/js/jquery-1.10.1.min.js"></script>

</body>
</html>
