<?php
include('koneksi.php');
$country = mysqli_query($koneksi,"select * from country");
while($row = mysqli_fetch_array($country)){
$negara[] = $row['country'];
	
	$query = mysqli_query($koneksi,"select sum(total_cases) as total, sum(new_cases) as new, sum(total_death) as total_death, sum(new_death) as new_death, sum(total_recovered) as recovered, sum(active_cases) as active from cases");
	$row = 	$query->fetch_array();
	$total_cases = $row['total'];
	$new_cases = $row['new'];
	$total_death = $row['total_death'];
	$new_death = $row['new_death'];
	$total_recovered = $row['recovered'];
	$active_cases = $row['active'];
	
}
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>donat</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">  
   <script type="text/javascript" src="jquery-3.4.1.min.js"></script>  
   <script type="text/javascript" src="js/bootstrap.js"></script> <br></br>
  <center> <a href="Homepagecovid.php" class="btn btn-success">HOME </a> 
	<style>
		.warning {color: #ffa500;}
		.container {
			padding-top: 25px;
		}
				
	</style>
	<title>Membuat Grafik Menggunakan Chart JS</title>
	<script type="text/javascript" src="Chart.js"></script>
</head>
<body>
	
	<div class="container rounded shadow bg-white ">
	<div class="card ">
				<div class="card-header bg-info text-white shadow sticky-top" align="center">
					<p class="h4">Statistik Penyebaran Covid 19 di 10 Negara</p>
				</div>
		
			<div class="card-body">
				<div class="col-sm container">
					<div style="width:100%; height:100%">
						<canvas id="myChart"></canvas>
					</div>
				</div>
		</div>
	<script>
		var ctx = document.getElementById("myChart");
		var myChart = new Chart(ctx, {
			type: 'doughnut',
			data: {
				labels: ['Total Cases','New Cases','Total Death', 'New Death', 'Total Recovered', 'Active Cases'],
				datasets: [{ 
					data: [<?php 
						echo json_encode($total_cases); 
						echo ', '; 
						echo json_encode($new_cases); 
						echo ', '; 
						echo json_encode($total_death);
						echo ', '; 
						echo json_encode($new_death); 
						echo ', '; 
						echo json_encode($total_recovered);
						echo ', '; 
						echo json_encode($active_cases);
						   ?>],
					label: 'Total Cases', 
        			backgroundColor:[ 
						'rgba(255, 100, 132, 1)',
						'rgba(54, 162, 235, 1)',
						'rgba(255, 206, 200, 1)',
						'rgba(127, 95, 212, 1)',
						'rgba(0, 191, 36, 1)',
						'rgba(112, 128, 144, 1)'
					]
				}
			]
			},
			options: {
				
    title: {
      display: true,
      text: 'Total cases Covid-19 in the World'
    }
  }
});
	</script>
</body>
</html>