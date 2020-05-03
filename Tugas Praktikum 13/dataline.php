<?php
$con=mysqli_connect("localhost","root","","web");

if (!$con) {
  die('Could not connect: ' . mysql_error());
}



$query = mysqli_query($con,"SELECT total_cases FROM statistikcovid");
$rows = array();
$rows['name'] = 'Total Kasus';
while($tmp= mysqli_fetch_array($query)) {
    $rows['data'][] = $tmp['total_cases'];
}


$query = mysqli_query($con,"SELECT new_cases FROM statistikcovid");
$rows1 = array();
$rows1['name'] = 'Kasus Baru';
while($tmp = mysqli_fetch_array($query)) {
    $rows1['data'][] = $tmp['new_cases'];
}


$query = mysqli_query($con,"SELECT total_deaths FROM statistikcovid");
$rows2 = array();
$rows2['name'] = 'Total Meninggal';
while($tmp = mysqli_fetch_array($query)) {
    $rows2['data'][] = $tmp['total_deaths'];
}

$query = mysqli_query($con,"SELECT new_death FROM statistikcovid");
$rows3 = array();
$rows3['name'] = 'Baru Meninggal';
while($tmp = mysqli_fetch_array($query)) {
    $rows3['data'][] = $tmp['new_death'];
}
$query = mysqli_query($con,"SELECT total_recovered FROM statistikcovid");
$rows4 = array();
$rows4['name'] = 'Total Sembuh';
while($tmp = mysqli_fetch_array($query)) {
    $rows4['data'][] = $tmp['total_recovered'];
}

$query = mysqli_query($con,"SELECT active_cases FROM statistikcovid");
$rows5 = array();
$rows5['name'] = 'Kasus Aktif';
while($tmp = mysqli_fetch_array($query)) {
    $rows5['data'][] = $tmp['active_cases'];
}

$result = array();
array_push($result,$rows);
array_push($result,$rows1);
array_push($result,$rows2);
array_push($result,$rows3);
array_push($result,$rows4);
array_push($result,$rows5);


print json_encode($result, JSON_NUMERIC_CHECK);

mysqli_close($con);
?> 
