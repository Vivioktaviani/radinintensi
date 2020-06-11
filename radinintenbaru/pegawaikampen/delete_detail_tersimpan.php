<?php
include "../include/connect.php";
include "../include/session.php"; 

$id	 	    = $_GET["id"];
$nip = $_SESSION['nip'];

$sql1 = "SELECT * FROM dokumen WHERE id = $id";
$data1 = mysqli_query($connect, $sql1);
while ($dokumen = mysqli_fetch_array ($data1)){
    $nomor_dokumen = $dokumen['nomor_dokumen'];
	$nama_dokumen = $dokumen['nama_dokumen'];
	$tanggal_dokumen = $dokumen['tanggal_dokumen'];
	$tujuan_dokumen = $dokumen['tujuan_dokumen'];
	$file_dokumen = $dokumen['file_dokumen'];
	$komentar = $dokumen['komentar'];
	$status['status'];

	$sql2 = "INSERT INTO riwayat_pengiriman(tanggal, tujuan, status, komentar, nip, nomor_dokumen, keterangan) VALUES ('$tanggal_dokumen','$tujuan_dokumen','0','-','$nip','$nomor_dokumen','Hapus');";
		mysqli_query($connect, $sql2);
}


$sql = "DELETE FROM dokumen WHERE id = $id";
$data = mysqli_query($connect, $sql);

if ($data) {
	header("location:tersimpan.php?alert=berhasil");
} else {
	header("location:tersimpan.php?alert=gagal");
}
?>