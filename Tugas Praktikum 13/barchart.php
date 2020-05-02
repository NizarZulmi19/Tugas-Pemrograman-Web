<?php
include('koneksi.php');
$country = mysqli_query($koneksi,"select * from statistikcovid");
while($row = mysqli_fetch_array($country)){
$negara[] = $row['country'];
	
	$query = mysqli_query($koneksi,"select * from statistikcovid where country='".$row['country']."'");
	$row = $query->fetch_array();
	$total_cases[] = $row['total_cases'];
	$new_cases[] = $row['new_cases'];
	$total_death[] = $row['total_deaths'];
	$new_death[] = $row['new_death'];
	$total_recovered[] = $row['total_recovered'];
	$active_cases[] = $row['active_cases'];
	
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Membuat Grafik Menggunakan Chart JS</title>
	<script type="text/javascript" src="Chart.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">  
   <script type="text/javascript" src="jquery-3.4.1.min.js"></script>  
   <script type="text/javascript" src="js/bootstrap.js"></script> <br></br>
  <center> <a href="Homepagecovid.php" class="btn btn-success">HOME </a> 
 
</head>
<body>
	<div style="width:80%; height: 800px">
		<canvas id="myChart"></canvas>
	</div>
 
	<script>
		var ctx = document.getElementById("myChart");
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($negara); ?>,
				datasets: [{ 
        			data: <?php echo json_encode($total_cases); ?>,
					label: 'Total Cases',
        			backgroundColor: 'rgba(255, 99, 100, 1)',
				},{
					data: <?php echo json_encode($new_cases); ?>,
					label: 'New Cases',
        			backgroundColor: 'rgba(255, 162, 235, 1)',
				
				},{
					data: <?php echo json_encode($total_death); ?>,
					label: 'Total Death',
        			backgroundColor: 'rgba(255, 150, 86, 1)',
					
				},{
					data: <?php echo json_encode($new_death); ?>,
					label: 'New Death',
        			backgroundColor: 'rgba(127, 255, 212, 1)',
					
				},{
					data: <?php echo json_encode($total_recovered); ?>,
					label: 'Total Recovered',
        			backgroundColor: 'rgba(90, 191, 255, 1)',
					
				},{
					data: <?php echo json_encode($active_cases); ?>,
					label: 'Active Cases',
        			backgroundColor: 'rgba(112, 255, 144, 1)',
					
				}
			]
			},
			options: {
    title: {
      display: true,
      text: 'Statistik Data Covid 19 di 10 Negara'
    }
  }
});
	</script>
</body>
</html>