<?php
include('koneksi.php');
$covid = mysqli_query($koneksi,"select * from tb_negara");
while($row = mysqli_fetch_array($covid)){
	$covid_19[] = $row['nama'];
	
	$query = mysqli_query($koneksi,"select sum(total_case) as total_case from tb_case where id_negara='".$row['id_negara']."'");
	$row = $query->fetch_array();
	$covid_192020[] = $row['total_case'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Membuat Grafik Menggunakan Chart JS</title>
	<script type="text/javascript" src="rchart/Chart.js"></script>
</head>
<body>
	<div style="width: 800px;height: 800px">
		<canvas id="myChart"></canvas>
	</div>


	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($covid_19); ?>,
				datasets: [{
					label: 'Grafik Covid Dunia',
					data: <?php echo json_encode($covid_192020); ?>,
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255,99,132,1)',
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
</body>
</html>