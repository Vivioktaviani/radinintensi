<thead>
					<tr>
						<th>No</th>
                        <th>Nomor Dokumen</th>
						<th>Nama Dokumen</th>
						<th>Tanggal Dokumen</th>
						<th>File Dokumen</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
                    <?php
                        $no=0; //variable no
						$querydokumen = mysqli_query ($connect, "SELECT nomor_dokumen, nama_dokumen, tanggal_dokumen, file_dokumen FROM dokumen");
						if($querydokumen == false){
							die ("Terjadi Kesalahan : ". mysqli_error($connect));
						}
						while ($dokumen = mysqli_fetch_array ($querydokumen)){
                            $no++;
							
							echo "
                                <tr>
									<td>$no</td>
                                    <td>$dokumen[nomor_dokumen]</td>
									<td>$dokumen[nama_dokumen]</td>
									<td>$dokumen[tanggal_dokumen]</td>
									<td>$dokumen[file_dokumen]</td>
									<td>
										<a href='#' class='open_modal_detail btn btn-info' nomor_dokumen='$dokumen[nomor_dokumen]'>Detail</a>
										
									</td>
								</tr>";
						}
					?>
				</tbody>