<?php
include "../include/connect.php";
include "../include/session.php"; 

$id = $_GET['id'];
	$querydokumen = mysqli_query ($connect, "SELECT * FROM dokumen WHERE id = '$id'");
		if($querydokumen == false){
			die ("Terjadi Kesalahan : ". mysqli_error($connect));
		} while ($dokumen = mysqli_fetch_array ($querydokumen)){
			
?>





<!DOCTYPE html>
<html>
<head>
	<title>Edit Document</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../assets/bootstrap/bootstrap.min.css">
</head>
<body>
	 <div class="container">
				  <h1> Form Edit Laporan Bulanan</h1>
                  <br>
				  
				  
				  
				  
                  <form action="edit_action.php" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label>Nomor Dokumen:</label>
				<input type="hidden" value="<?=$dokumen[id];?>" name="id">
				<input type="text" class="form-control" placeholder="Masukkan Nomor Dokumen" name="nomor_dokumen" value="<?= $dokumen[nomor_dokumen]; ?>" required="required">
			</div>
			<div class="form-group">
				<label>Nama Dokumen :</label>
				<input type="text" class="form-control" placeholder="Masukkan Nama Dokumen" name="nama_dokumen" value="<?= $dokumen[nama_dokumen]; ?>" required="required">
			</div>

            <div class="form-group">
				<label>Tanggal Dokumen :</label>
                <input type="date" id="datepickerdokumen" class="form-control" placeholder="Masukkan Tanggal Dokumen" name="tanggal_dokumen"value="<?= $dokumen[tanggal_dokumen]; ?>"  required="required" />
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
				<p style="color: red">Ekstensi yang diperbolehkan hanya |.pdf  |.jpg  |.docx|</p>
			</div>			
			<input type="submit" name="" value="Simpan" class="btn btn-primary">
			<tr> <a href="home.php" class="btn btn-danger"><b>Batalkan</a> </tr>
        </form>
		

		
		
		
		
		
		
		
		
		
		
		
		
		
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
	<marquee behavior="alternate"><i>Telitilah Sebelum Anda Menginputkan Laporan</i></marquee> 
	
	<script>
        $('#datepickerdokumen').datepicker({
            uiLibrary: 'bootstrap4'
        });

        $('#datepickerdokumen').datepicker({
            uiLibrary: 'bootstrap4'
        });
        
</script>

<script>
    $(document).ready(function(){
        setDatePicker()
        setDateRangePicker(".startdate", ".enddate")
        setMonthPicker()
        setYearPicker()
        setYearRangePicker(".startyear", ".endyear")
    })
    </script>
 <center>
				<a class="link" href="">Copy Right 2020 (Margareta Oktaviani) - All Right Reserverd</a>
			</center>
</body>
</html>

		
		<?php }?>