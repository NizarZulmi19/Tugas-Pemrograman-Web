<html>
<head>
<meta http-equiv="refresh" content="3; url=PengenalanCovid.php">
	<link rel="stylesheet" type="text/css" href="cssHomepage.css">
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
    .footer{
    width: 100%;
    height: 50px;
    padding-left: 10px;
    line-height: 50px;
    background: #2dbd6e;
    color: #fff;
}
	</style>
	<nav>
    <ul>

    	<li><a href="Homepage.php">Home</a></li>
        <li><a href="#">Penyebaran</a></li>
        <li><a href="PengenalanCovid.php">Pengenalan Covid-19</a></li>
        <li><a href="Pencegahan.php">Cara Pencegahan</a></li>
        <li><a href="Tentang.php">Contact Us</a></li>
    </ul>
    <img src="health-logo-vector-png-1.png">
</nav>
<?php
  include "Koneksinya.php";
  $name  = $_REQUEST['nama'];
  $alm  = $_REQUEST['alamat'];
  $psn  = $_REQUEST['pesan'];

  $mysqli  = "INSERT INTO input_data (nama, alamat, keluhan) VALUES ('$name','$alm','$psn')";
  $result  = mysqli_query($conn, $mysqli);
  if ($result) {
    echo "<center>Input berhasil</center>";
  } else {
    echo "Input gagal";
  }
  mysqli_close($conn);
?>