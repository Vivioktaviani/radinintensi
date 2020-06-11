<thead>
					<tr>
						<th>No</th>
                        <th><center>Nomor Dokumen</th></center>
						<th><center>Nama Dokumen</th></center>
						<th><center>Tanggal Dokumen</th></center>
						<th><center>Tujuan Dokumen</th></center>
						<th><center>File Dokumen</th></center>
						<th><center>Komentar</th></center>
						<th><center>Status</th></center>
						<th><center>Aksi</th></center>
					</tr>
				</thead>
				<tbody>
                    <?php
                        $no=0; //variable no
						$querydokumen = mysqli_query ($connect, "SELECT * FROM dokumen");
						if($querydokumen == false){
							die ("Terjadi Kesalahan : ". mysqli_error($connect));
						}
						while ($dokumen = mysqli_fetch_array ($querydokumen)){
                            $no++;
							
							if ($dokumen[status] == 1) {
								$pr_status = "Tervalidasi";
							} else {
								$pr_status = "Belum Tervalidasi";
							}
								
						?>	
                                <tr>
									<td><?=$no;?></td>
                                    <td><?=$dokumen[nomor_dokumen];?></td>
									<td><?=$dokumen[nama_dokumen];?></td>
									<td><?=$dokumen[tanggal_dokumen];?></td>
									<td><?=$dokumen[tujuan_dokumen];?></td>
									<td><?=$dokumen[file_dokumen];?></td>
									<td><?=$dokumen[komentar];?></td>
									<td><?=$pr_status;?></td>
									<td><a href='<?=$dokumen[file_dokumen];?>' class='open_modal_detail btn btn-info' dokumen='<?=$dokumen[nomor_dokumen];?>'>Detail</a></td>
									<td><a href='form_edit.php?id=<?=$dokumen[id];?>' class='open_modal_detail btn btn-warning' dokumen='<?=$dokumen[nomor_dokumen];?>'>Edit</a></td>
					
								</tr>	
						<?php }?>
				</tbody>