<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="csslogin.css">
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
    height: 90px;
    padding-left: 10px;
    line-height: 70px;
    background: #2dbd6e;
    color: #fff;
}
    </style>

    <title>HomePage</title>
</head>
<script language="Javascript">
    function pesan(){
        alert ("Silahkan Isi Form Login Di Bawah Ini")
    }
</script>
<body onload=pesan()></body>
<body>
    <?php 
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            echo "<center>Login gagal! username dan password salah!";
        }else if($_GET['pesan'] == "logout"){
            echo "Anda telah berhasil logout";
        }else if($_GET['pesan'] == "belum_login"){
            echo "Anda harus login untuk mengakses halaman admin";
        }
    }
    ?>
    <form method="POST" action="Pengecekan.php">
    <center><h1 class="text-h1"> SILAHKAH LOGIN</h1></center>
    <div class="body">
        <table class="table">
    <tr>
        <th><i class="fa fa-user-o awesome"></i></th>
        <th><input type="text" name="username" class="input" placeholder="Username"></th>
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