<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
@session_start();
if(empty($_SESSION['role'])){
         echo '<script language="javascript">
                     window.alert("ERROR! Anda Harus Login Terlebih Dahulu");
                     window.location.href="../login.php";
                   </script>';
         die();
     } else {

     } 
?>