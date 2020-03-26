<html>
<head>
	<link rel="stylesheet" type="text/css" href="cssHomepage.css">
	<meta charset="8">
<script type="text/javascript "src="jquery-3.4.1.min.js"></script>
	<script>
		$(document).ready(function(){
		
		$("#tombol_sembunyi").click(function(){
		$("#box").fadeOut();
		
	})
		$("#tombol_tampil").click(function(){
		$("#box").show();
	})
});

</script>
<style type="text/css">
#box{
	width:1330px;
	height: 950px;
	background-image: url(Peta.jpg);
	border:2px solid green;
	padding-top: 40px;
}
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
        font-family: sans-serif;
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
h2{
	font-family: sans-serif;
}

	</style>

</style>
</head>
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
<center><font color="white"><h2>Berikut Peta Persebaran Covid-19</h2></center>
<center><button id="tombol_sembunyi">Sembunyikan</button>
<button id="tombol_tampil">Tampilkan</button>
<div id="box"></div>



</body>

</html>