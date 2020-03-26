<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="cssHomepage.css">
	<meta http-equiv="refresh" content="3; url=FormDataDiri.php">
	<style type="text/css">
		 body {
            height: 100%;
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
        width: 100%;
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
    height: 900px;
    padding-left: 10px;
    line-height: 50px;
    background: #2dbd6e;
    color: #fff;
}
</style>
</head>
<body>
	<nav>
    <ul>

    	<li><a href="Homepage.php">Home</a></li>
        <li><a href="#">Penyebaran</a></li>
        <li><a href="PengenalanCovid.php">Pengenalan Covid-19</a></li>
        <li><a href="#">Cara Pencegahan</a></li>
        <li><a href="Tentang.php">Contact Us</a></li>
    </ul>
    <img src="health-logo-vector-png-1.png">
</nav>

<?php
if (empty($_POST['email'])) {
    header("emailpasskosong.php");

}if (empty($_POST['password'])) {
    header("Location:emailpasskosong.php");

}
else {
    echo "<center>Email :".$_POST['email']."</center><br>";
}
{
    echo "<center>Password :".$_POST['password']."</center><br>";
}
?>
 <div class="footer"><center>
        Nizar
    </div></center>
</body>
</html>