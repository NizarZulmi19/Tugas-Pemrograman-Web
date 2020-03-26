<!DOCTYPE html>
<html>
<head>
	<title></title>
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
    height: 50px;
    padding-left: 10px;
    line-height: 50px;
    background: #2dbd6e;
    color: #fff;
}
.kecil{font-size:10px}
a{color:#3498db}
a:hover{color:#2980b9}
input[type=text]{margin:5px auto 15px;padding:10px;color:#444;width:300px}
fieldset{border:1px solid #ccc;width:50%;margin-left:auto;margin-right:auto;margin-top:10px;}
input[type=submit]{color:#FFF;padding:0 20px;margin:10px 0 5px;cursor:pointer;background-color:#333;border:0;height:30px}
.tanggal{float:right;font-size:12px}
input[type=submit]:hover{background-color:#444}
input[type=submit]:active{position:relative;top:2px}
</style>
</head>
<body>
	<nav>
    <ul>
        <img src="health-logo-vector-png-1.png" align="left" height="90">
    	<li><a href="Homepage.php">Home</a></li>
        <li><a href="#">Penyebaran</a></li>
        <li><a href="PengenalanCovid.php">Pengenalan Covid-19</a></li>
        <li><a href="#">Cara Pencegahan</a></li>
        <li><a href="Tentang.php">Contact Us</a></li>
    </ul>
</nav>
<fieldset>
<legend>Form Data Diri</legend>
<form method="post" action="post.php">
    Nama : <input type="text" name="nama" /><br />
    Alamat : <input type="text" name="alamat" /><br />
    Keluhan: <textarea cols="90" rows="10" name="pesan"></textarea>
    <input type="submit" value="Kirim" />
  </form>

<br><br><br><br><br><div class="footer"><center>
        Nizar
    </div></center>
</form></td></p></form></fieldset></body></html>