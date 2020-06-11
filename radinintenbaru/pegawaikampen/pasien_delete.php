<?php

include "../include/connect.php";
include "../include/session.php"; 

$nomor_dokumen = $_GET['nomor_dokumen'];

// mysqli_query($connect, "DELETE FROM user WHERE id_user='$id_user'");

// header("Location: users.php");
if($delete = mysqli_query ($connect, "DELETE FROM dokumen WHERE nomor_dokumen='$nomor_dokumen'")){
	header("Location: tersetujui.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($connect));

?>