<html>
<head>
<title>Buku Tamu</title>
<style>
body{background : #FFA500; font-family:'Comic Sans Ms';font-size:18px;margin:0}
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
<fieldset>
<legend>Buku Tamu</legend>
<form action="Method.php" method="post">
<p>ID TAMU     :
<td><input placeholder="Masukkan ID Tamu Anda" type="text" align="center" name="ID_BT" required/>
</p>
<p>Nama Lengkap :
<input placeholder="Nama lengkap anda" type="text" align="center" name="NAMA" required/>
</p>
<p>Email (opsional) :
<input placeholder="Masukkan Email" type="text" align="center" name="EMAIL"/>
</p>

<p>Pesan:
<textarea placeholder="Ketikan suatu pesan anda" cols="90" rows="10" name="ISI" required></textarea>
</p>

<p>
<input type="submit" value="Simpan"/>
</p>
</form>
<!-- <?php
include("KonekTugas1.php");
$query=mysqli_query($koneksi,'select * from buku_tamu');
while($data=mysqli_fetch_array($query))
{
$ID = $data['ID_BT'];
$NAMA= $data['NAMA'];
$EMAIL = $data['EMAIL'];
$ISI = $data['ISI'];

echo "

";}
?> -->
</fieldset>
</body>
</html>