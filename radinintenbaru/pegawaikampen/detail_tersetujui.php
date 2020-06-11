<thead>
					<tr>
						<th>No</th>
                        <th>Nomor Dokumen</th>
						<th>Nama Dokumen</th>
						<th>Tanggal Dokumen</th>
						<th>File Dokumen</th>
						<th>Tujuan Dokumen</th>
						<th>Komentar</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
                    <?php
                        $no=0; //variable no
						$querydokumen = mysqli_query ($connect, "SELECT id,nomor_dokumen, nama_dokumen, tanggal_dokumen, file_dokumen, tujuan_dokumen, komentar FROM dokumen WHERE status=1");
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
									<td>$dokumen[tujuan_dokumen]</td>
									<td>$dokumen[komentar]</td>
									<td>$dokumen[status]</td>
									<td><a href='$dokumen[file_dokumen]' class='btn btn-info' dokumen='$dokumen[nomor_dokumen]'>Detail</a></td>

									<td><a href='#' class='btn btn-danger' onClick='confirm_delete(\"delete_detail_tersimpan.php?id=$dokumen[id]\")'>Hapus !</a></td>
								</tr>";
						}
					?>
				</tbody>