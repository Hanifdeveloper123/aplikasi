<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<div class="container">
<div class="row">
	<div class="col-md-10 mt-3"></div>
	<div class="row">
		<div class="col-md-14">
			<div id="card">
				<div id="card-content">
					<div id="card-title">
						<h1 style="font-size: 20px; margin-left: 120px; margin-top: 30px;">DATA PENGADUAN</h1>
						<div class="underline-title">
							<form method="post" class="form">
								<table class="table table-striped" style=" margin-bottom: 100px;">
									<thead>
										<tr>
											<th>NO</th>
											<th>TANGGAL</th>
											<th>NAMA</th>
											<th>JUDUL</th>
											<th>LAPORAN</th>
											<th>FOTO</th>
											<th>STATUS</th>
											<th>AKSI</th>
										</tr>
									</thead>
									<tbody>

										<?php
										include '../config/koneksi.php';
										$no = 1;
										$query = mysqli_query($koneksi, "SELECT a.*,b.* FROM pengaduan a INNER JOIN masyarakat b ON a.nik=b.nik ORDER BY id_pengaduan DESC");
										while ($data = mysqli_fetch_array($query)) {?>





										<tr>
											<td><?php echo $no++; ?></td>
											<td><?php echo $data['tgl_pengaduan']?></td>
											<td><?php echo $data['nama']?></td>
											<td><?php echo $data['judul_laporan']?></td>
											<td><?php echo $data['isi_laporan']?></td>
											<td><img src="../assets/img/<?php echo $data['foto']?>" width="100"></td>
											<td>
												<?php
													if ($data['status']=='proses') {
														echo "<span class='badge bg-warning'>proses</span>";

														// code...
													}else if ($data['status']=='proses') {
														echo "<span class='badge bg-success'>menunggu</span>";
												    }else {
												    	echo "<span class='badge bg-danger'>selesai</span>";
												    }

													?>
											<td>
												<a href="" class="btn btn_primary" style="background: orange; color: white;">VERIVIKASI</a>
												<a href="" class="btn btn_success" style="background: green; color: white;">TANGGAPI</a>
												<a href="" class="btn btn_danger" style="background: red; color: white;">HAPUS</a>
											</td>
										</tr>
									<?php } ?>
                                	</tbody>
								</table>
							</form>
						</div>
					</div>
				</div>
</div>