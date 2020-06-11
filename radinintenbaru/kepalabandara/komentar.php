<?php

include "../include/connect.php";
include "../include/session.php"; 

$id = $_POST['id'];



?>





<!DOCTYPE html>
<html>
<head>
<title> <h2>Form Isi Komentar Dokumen</h2> </title>

<form method="post" action="proses_komentar.php">

<div id="comment_form">
    

    <div>
		<input type="hidden" value="<?=$id;?>" name="id">
		<select name="status">
		<option value="1">OK</option>
		<option value="0">TIDAK</option>
		</select>
        <textarea rows="10" name="komentar" placeholder="Comment here.."></textarea>
    </div>
    <div>
        <input type="submit" name="submit" value="Add Comment">
    </div>
	

</div>

</form>

    </html>
	</head>