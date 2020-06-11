<thead>
					<tr>
						<th>No</th>
                        <th>NIP Pegawai</th>
						<th>Mengirim Ke</th>
						<th>Nomor Dokumen Yang Dikirim</th>
						<th>Tanggal Pengiriman</th>
						<th>Komentar Kiriman</th>
						<th>Aksi Yang Terjadi</th>
					</tr>
				</thead>
				<tbody>
                    <?php
                        $no=0; //variable no
						$queryriwayat_pengiriman = mysqli_query ($connect, "SELECT nip, tujuan, nomor_dokumen, tanggal, komentar, keterangan FROM riwayat_pengiriman");
						if($queryriwayat_pengiriman == false){
							die ("Terjadi Kesalahan : ". mysqli_error($connect));
						}
						while ($riwayat_pengiriman = mysqli_fetch_array ($queryriwayat_pengiriman)){
                            $no++;
							
							echo "
                                <tr>
									<td>$no</td>
                                    <td>$riwayat_pengiriman[nip]</td>
									<td>$riwayat_pengiriman[tujuan]</td>
									<td>$riwayat_pengiriman[nomor_dokumen]</td>
									<td>$riwayat_pengiriman[tanggal]</td>
									<td>$riwayat_pengiriman[komentar]</td>
									<td>$riwayat_pengiriman[keterangan]</td>
								</tr>";
						}
					?>
				</tbody>