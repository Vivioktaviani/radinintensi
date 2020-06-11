<?php

include "../include/connect.php";

$nomor_dokumen	= $_GET["nomor_dokumen"];

$querydokumen = mysqli_query($connect, "SELECT * FROM dokumen WHERE nomor_dokumen='$nomor_dokumen'");
if($querydokumen == false){
	die ("Terjadi Kesalahan : ". mysqli_error($connect));
}
while($dokumen = mysqli_fetch_array($querydokumen)){

?>
	<script src="../assets/plugins/daterangepicker/moment.min.js"></script>
	<script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
	
	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		  $('#Tanggal_Lahir2').daterangepicker({
			  singleDatePicker: true,
			  showDropdowns: true,
			  format: 'YYYY-MM-DD'
		  });
      });
    </script>
	<!-- Modal Popup Pasien Edit -->
		<div id="ModalEditPasien" class="modal fade" tabindex="-1" role="dialog"></div>

<!-- Modal Popup Pasien -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Dokumen</h4>
					</div>
					<div class="modal-body">
						<form action="pasien_edit.php" name="modal_popup" enctype="multipart/form-data" method="POST">
						<br>
                  <form action="surat_act.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nomor Dokumen:</label>
				<input type="text" class="form-control" placeholder="Masukkan Nomor Dokumen" name="nomor_dokumen" required="required">
			</div>
			<div class="form-group">
				<label>Nama Dokumen :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama Dokumen" name="nama_dokumen" required="required">
			</div>

            <div class="form-group">
				<label>Tanggal Dokumen :</label>
                <input type="date" id="datepickerdokumen" class="form-control" placeholder="Masukkan Tanggal Dokumen" name="tanggal_dokumen" required="required" />
            </div>
            
        <div class="form-group">
        <label>Ditujukkan : </label>
          <select class="form-control" name="tujuan_dokumen">
            <option value="Kepala Bandara">Kepala Bandara</option>
            <option value="Kepala Koordinator">Kepala Koordinator</option>
          </select>
        </div>
            

        <div class="form-group">
				<label>File Dokumen :</label>
				<input type="file" name="foto" required="required">
				<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p>
			</div>			
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
        </form>
			
			
<?php
			}

?>