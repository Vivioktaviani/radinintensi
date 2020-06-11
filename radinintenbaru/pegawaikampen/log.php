<?php

function write_mysql_log($message, $db)
{
  // Check database connection
  if( ($db instanceof MySQLi) == false) {
    return array(status => false, message => 'MySQL connection is invalid');
  }
 
  // Get Nomor induk pegawai
  if( ($nip = $_SERVER['NIP']) == '') {
    $nip = "NIP_UNKNOWN";
  }
 
  // Get Tujuan
  if( ($tujuan = $_SERVER['TUJUAN']) == '') {
    $tujuan = "TUJUAN_UNKNOWN";
  }
  
  // Get Nomor dokumen
  if( ($nomor_dokumen = $_SERVER['NOMOR_DOKUMEN']) == '') {
    $nomor_dokumen = "NOMOR_DOKUMEN_UNKNOWN";
  }
  
  // Get Tanggal dokumen
  if( ($tanggal_dokumen = $_SERVER['TANGGAL_DOKUMEN']) == '') {
    $tanggal_dokumen = "TANGGAL_DOKUMEN_UNKNOWN";
  }
  
  // Get Komentar
  if( ($komentar = $_SERVER['KOMENTAR']) == '') {
    $komentar = "KOMENTAR_UNKNOWN";
  }
 
  // Escape values
  $nip 	       		= $db->escape_string($nip);
  $nomor_dokumen 	= $db->escape_string($nomor_dokumen);
  $tanggal_dokumen 	= $db->escape_string($tanggal_dokumen);
  $tanggal_dokumen 	= $db->escape_string($tanggal_dokumen);
  $komentar 		= $db->escape_string($komentar);
  
 
  // Construct query
  $sql = "INSERT INTO riwayat_pengiriman (nip, tujuan, nomor_dokumen, tanggal_dokumen, komentar) VALUES('$nip', '$tujuan','$nomor_dokumen','$tanggal_dokumen','$komentar')";
 
  // Execute query and save data
  $result = $db->query($sql);
 
  if($result) {
    return array(status => true);  
  }
  else {
    return array(status => false, message => 'Unable to write to the database');
  }
}