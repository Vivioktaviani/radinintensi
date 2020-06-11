<?php 
include "../include/connect.php";
include "../include/session.php"; 

$id = $_POST['id'];
$komentar = $_POST['komentar'];
$status = $_POST['status'];

$sql = "UPDATE dokumen SET komentar='$komentar', status = '$status' WHERE id='$id';";

$data = mysqli_query($connect, $sql);

if ($data){
	header("location:home.php?alert=berhasil");
}

else {
	echo "gagal";
}
?>