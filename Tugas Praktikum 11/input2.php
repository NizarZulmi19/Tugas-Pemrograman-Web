<?php
include('koneksi.php');
?>
<?php
//akses file secara langsung tanpa melalui form tidak diperbolehkan
if(isset($_POST['kirim'])==""){
 echo "Akses data gagal";
}
//Cek data jika data kosong
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(empty($_POST["nama"])){
 echo "Data yang dikirimkan kosong";
}elseif(!preg_match("/^[a-zA-Z]*$/",$_POST["nama"])){
echo "Data tidak sesuai ketentuan, masukan hanya alphabet saja";
}elseif (strlen($_POST["nama"]) > 50) {
echo "Data <b>$limit</b> Tidak boleh lebih dari 50 karakter";
}else{
//ketika kondisi benar terpenuhi
 echo "Input kamu benar<br/>";
 $nama=test_input($_POST["nama"]);
 $nama=mysqli_escape_string($koneksi,$nama);
 //bisa jalankan query atau menyimpan variabel untuk dijalankan nanti setelah validasi berikutny
$sql="insert siswa set nama='$nama', jenis='$jenis', nisn='$nisn'";
mysqli_query($koneksi, $sql) or die (mysqli_error());
if(!$nama){
  echo "Gagal menyimpan data=".mysqli_error();
}else{
  echo "Berhasil Menyimpan data";
}
}
//jika ingin melanjutkan percabangan gunakan if(empty) tanpa request method disisni seperti contoh pertama


}
function test_input($value) {
  $data = trim($value);
  $data = stripslashes($value);
  $data = htmlspecialchars($value);
  return $data;
}
?>
