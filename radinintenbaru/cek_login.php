<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include './include/connect.php';
 
// menangkap data yang dikirim dari form login
$nip = $_POST['nip'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($connect,"select * from pegawai where nip='$nip' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
	$data = mysqli_fetch_assoc($login);
 
	// cek jika user login sebagai admin
	if($data['role']=="kepala bandara"){
 
		// buat session login dan username
		$_SESSION['nip'] = $nip;
		$_SESSION['role'] = "kepala bandara";
		// alihkan ke halaman dashboard admin
		header("location:kepalabandara/home.php");
	
	}else if($data['role']=="kepala koordinator"){
		// buat session login dan username
		$_SESSION['nip'] = $nip;
		$_SESSION['role'] = "kepala koordinator";
		// alihkan ke halaman dashboard pegawai
		header("location:kepalastaff/home.php");
		
 
	// cek jika user login sebagai pegawai
	}else if($data['role']=="pegawai kampen"){
		// buat session login dan username
		$_SESSION['nip'] = $nip;
		$_SESSION['role'] = "pegawai kampen";
		// alihkan ke halaman dashboard pegawai
		header("location:pegawaikampen/home.php");
 
	// cek jika user login sebagai pengurus
	}else{
 
		// alihkan ke halaman login kembali
		header("location:login.php?pesan=gagal");
	}	
}else{
	header("location:login.php?pesan=gagal");
}
 
?>