<?php
include "../include/connect.php";


$nomor_dokumen	 	    = $_POST["nomor_dokumen"];
$nama_dokumen	 	    = $_POST["nama_dokumen"];
$tanggal_dokumen	 	= date('Y-m-d',strtotime($_POST["tanggal_dokumen"]));
$tujuan_dokumen	 	    = $_POST["tujuan_dokumen"];
$komentar				= $_POST["komentar"];

 

if ($edit = mysqli_query($connect, "UPDATE dokumen SET nomor_dokumen='$nomor_dokumen', nama_dokumen='$nama_dokumen', tanggal_dokumen='$tanggal_dokumen', tujuan_dokumen='$tujuan_dokumen' komentar='$komentar', WHERE nomor_dokumen='$nomor_dokumen'")){
		header("Location: home.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($connect));

?>