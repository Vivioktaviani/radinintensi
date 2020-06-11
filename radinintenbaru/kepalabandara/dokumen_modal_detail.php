<?php

include "../include/connect.php";

$no= $_GET["no"];

$no = mysqli_query($connect, "SELECT * FROM dokumen WHERE nomor_dokumen='$nomor_dokumen'");
if($no== false){
	die ("Terjadi Kesalahan : ". mysqli_error($connect));
}
while($no = mysqli_fetch_array($no)){

?>
	<script src="../assets/plugins/daterangepicker/moment.min.js"></script>
	<script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
	
	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		  $('#tanggal_dokumen').daterangepicker({
			  singleDatePicker: true,
			  showDropdowns: true,
			  format: 'YYYY-MM-DD'
		  });
      });
		</script>
		
		
	<!-- Modal Popup Pasien Detail -->
		<div id="ModalDetailPasien" class="modal fade" tabindex="-1" role="dialog"></div>

<!-- Modal Popup Pasien -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Detail Surat Tersetujui</h4>
					</div>
					<div class="modal-body">
						<form action="pasien_detail.php" name="modal_popup" enctype="multipart/form-data" method="POST">
						<div class="form-group">
								<label>Nomor Dokumen</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class=""></i>
										</div>
										<input name="nomor_dokumen" type="text" class="form-control" value="<?php echo $no["nomor_dokumen"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Nama Dokumen</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class=""></i>
										</div>
										<input name="nama_dokumen" type="text" class="form-control" value="<?php echo $no["nama_dokumen"]; ?>" readonly />
									</div>
					
							<div class="form-group">
								<label>Tanggal Dokumen</label>
									<div class="input-group">
										<div class="input-group-addon">
										</div>
										<input name="tanggal_dokumen" type="text" class="form-control" value="<?php echo $no["tanggal_dokumen"]; ?>" readonly/>
									</div>
							</div>

							<div class="form-group">
								<label>File Dokumen</label>
									<div class="input-group">
										<div class="input-group-addon">
										</div>
										<input name="file_dokumen" type="text" class="form-control" value="<?php echo $no["file_dokumen"]; ?>" readonly/>
									</div>
							</div>

									<div class="modal-footer">
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
<?php
			}

?>