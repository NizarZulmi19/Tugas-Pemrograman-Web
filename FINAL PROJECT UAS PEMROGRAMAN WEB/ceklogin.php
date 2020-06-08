<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['level']=="admin"){
 
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";
		// alihkan ke halaman dashboard admin
		header("location:listsiswa.php");
 
	// cek jika user login sebagai pegawai
	}else if($data['level']=="murid"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "murid";
		// alihkan ke halaman dashboard pegawai
		header("location:halamanmurid.php");
	}else if($data['level']=="guru10"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "guru10";
		// alihkan ke halaman dashboard pegawai
		header("location:listsiswa.php");	
	}else if($data['level']=="guru11"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "guru11";
		// alihkan ke halaman dashboard pegawai
		header("location:listsiswa11.php");
	}else if($data['level']=="guru12"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "guru12";
		// alihkan ke halaman dashboard pegawai
		header("location:listsiswa12.php");
	}else if($data['level']=="tatausaha"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "tatausaha";
		// alihkan ke halaman dashboard pegawai
		header("location:halamantatausaha.php");
	}else if($data['level']=="murid11"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "murid11";
		// alihkan ke halaman dashboard pegawai
		header("location:halamanmurid11.php");
	}else if($data['level']=="murid12"){
		// buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "murid12";
		// alihkan ke halaman dashboard pegawai
		header("location:halamanmurid12.php");
    }
	else{
 
		// alihkan ke halaman login kembali
		header("location:loginguru7.php?pesan=gagal");
	}	
}else{
	header("location:loginguru7.php?pesan=gagal");
}
 
?>