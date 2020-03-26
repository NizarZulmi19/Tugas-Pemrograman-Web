<!DOCTYPE html>
<html>
<head>

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

	<title>HomePage Info Covid-19</title>
</head>
<script language="Javascript">
    function pesan(){
        alert ("Silahkan Isi Form Login Di Bawah Ini")
    }
</script>
<body onload=pesan()></body>
<body>
	<nav>
    <ul>
    	<li><a href="Homepage.php">Home</a></li>
        <li><a href="Penyebaran.php">Penyebaran</a></li>
        <li><a href="PengenalanCovid.php">Pengenalan Covid-19</a></li>
        <li><a href="Pencegahan.php">Cara Pencegahan</a></li>
        <li><a href="Tentang.php">Contact Us</a></li>
    </ul>
    <img src="health-logo-vector-png-1.png">
</nav>
	<form method="POST" action="InputHomepage.php">
    <center><h1 class="text-h1"> SILAHKAH LOGIN</h1></center>
	<div class="body">
		<table class="table">
	<tr>
		<th><i class="fa fa-user-o awesome"></i></th>
		<th><input type="email" name="email" class="input" placeholder="Username"></th>
	</tr>
	<tr>
		<th><i class="fa fa-lock awesome"></i></th>
		<th><input type="password" name="password" class="input" placeholder="password">
		</th></tr></table>
		<button value="button">LOGIN</button>

	</div>
	<div class="footer"><center>
        Nizar
    </div></center>
</body>
</html>