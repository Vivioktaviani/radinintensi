<?php 

include "../include/connect.php";
include "../include/session.php"; 

$id	 	    = $_POST["id"];
$nip = $_SESSION['nip'];
$nomor_dokumen	 	    = $_POST["nomor_dokumen"];
$nama_dokumen	 	    = $_POST["nama_dokumen"];
$tanggal_dokumen	 	= date('Y-m-d',strtotime($_POST["tanggal_dokumen"]));
$tujuan_dokumen	 	    = $_POST["tujuan_dokumen"];
$komentar				= $_POST["komentar"];
 
$rand 	  = rand();
$ekstensi =  array('jpeg', 'jpg', 'png', 'pdf', '.doc', '.docx'); //filter ekstensi file yang diperbolehkan
$filename = $_FILES['foto']['name'];
$ukuran   = $_FILES['foto']['size'];
$ext 	  = pathinfo($filename, PATHINFO_EXTENSION);


if(!in_array($ext,$ekstensi) ) {
	header("location:home.php?alert=gagal_ekstensi");
}else{	
	if($ukuran < 8000000){		
		$path = "file_dokumen/".$rand.'_'.$filename;
		move_uploaded_file($_FILES['foto']['tmp_name'], $path);
		
		$sql = "UPDATE dokumen SET nomor_dokumen='$nomor_dokumen',nama_dokumen='$nama_dokumen',tanggal_dokumen='$tanggal_dokumen',tujuan_dokumen='$tujuan_dokumen',file_dokumen='$path' WHERE id='$id'";

		mysqli_query($connect, $sql);
		
		header("location:home.php?alert=berhasil");

		$sql2 = "INSERT INTO riwayat_pengiriman(tanggal, tujuan, status, komentar, nip, nomor_dokumen, keterangan) VALUES ('$tanggal_dokumen','$tujuan_dokumen','0','-','$nip','$nomor_dokumen','Ubah');";
		mysqli_query($connect, $sql2);

	}else{
		header("location:home.php?alert=gagal_ukuran");
	}
}