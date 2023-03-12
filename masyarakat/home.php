

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h1 style="text-align: center; margin-top: 15px; font-size: 30px;"> Selamat datang <?php echo $_SESSION['nama'] ?></h1>
			<div id="card">
				<div id="card-content">
					<div id="card-title">
						<div class="underline-title"></div>
					</div>
					<form method="POST" class="form" enctype="multipart/form-data">
						<label for="user-email" style="padding-top:13px">
							&nbsp;Judul Laporan
						</label>
						<input type="text" name="judul_laporan" class="form-control" placeholder="masukkan judul laporan" required>
						<div class="form-border"></div>
						<label for="user-password" style="padding-top:22px">&nbsp;Isi laporan </label>
						<textarea class="form-control" name="isi_laporan" placeholder="masukkan isi laporan" required></textarea>
						<div class="form-border"></div>
						<label for="user-password" style="padding-top:22px">&nbsp;foto </label>
						<input type="file" name="foto" class="form-control" required>
						<div class="form-border"></div>
						<button type="submit" name="kirim" class="btn btn_warning">KIRIM</button>
					</form>
					<?php
					include '../config/koneksi.php';
					$tanggal = date("Y-m-d");
					if (isset($_POST['kirim'])) {
						$nik = $_SESSION['nik'];
						$judul_laporan = $_POST['judul_laporan'];
						$isi_laporan = $_POST['isi_laporan'];
						$status = 0;
						$foto = $_FILES['foto']['name'];
						$tmp = $_FILES['foto']['tmp_name'];
						$lokasi = '../assets/img/';
						$nama_foto =rand(0,999).'-'.$foto;


						move_uploaded_file($tmp,$lokasi.$nama_foto);
						$query = mysqli_query($koneksi, "INSERT INTO pengaduan VALUES ('','$tanggal','$nik','$judul_laporan','$isi_laporan','$nama_foto','$status')");
						echo " <script>
						alert('data berhasil di kirim');
						window.location='index.php';
						</script>
						";

							}

					?>
				</div>
			</div>
		</div>
	</div>

</div>
<div class="row">
	<div class="col-md-8 mt-3"></div>
	<div class="row">
		<div class="col-md-12">
			<div id="card">
				<div id="card-content">
					<div id="card-title">
						<h1 style="font-size: 20px; margin-left: 120px; margin-top: 30px;">FORM PENGADUAN</h1>
						<div class="underline-title">
								<table class="table table-striped" style=" margin-bottom: 100px;">
									<thead>
										<tr>
											<th>NO</th>
											<th>JUDUL</th>
											<th>ISI</th>
											<th>FOTO</th>
											<th>STATUS</th>
											<th>AKSI</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$no = 1;
										$nik = $_SESSION['nik'];
										$query = mysqli_query($koneksi,"SELECT * FROM pengaduan WHERE $nik='$nik' ORDER BY id_pengaduan DESC");
										while ($data= mysqli_fetch_array($query)) {?>
											<tr>
												<td><?php echo $no++;?></td>
												<td><?php echo $data['judul_laporan'];?></td>
												<td><?php echo $data['isi_laporan'];?></td>
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
												</td>
												<td>
<button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#hapusmodal<?=$data['id_pengaduan'] ?>">
hapus
</button>

<!-- Modal hapus-->
<div class="modal fade" id="hapusmodal<?=$data['id_pengaduan'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Hapus data</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="editdata.php" method="POST">
      	<input type="hidden" name="id_pengaduan" value="<?php echo $data['id_pengaduan'] ?>">
      <div class="modal-body">
        apakah anda yakin ingin menghapus data <br> <?php echo $data['judul_laporan'] ?>
              </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger" name="hapus_pengaduan">hapus</button>
      </div>
            </form>

    </div>
  </div>
</div>
</div>
												</td>
											</tr>
										<?php } ?>


										<tr>

										</tr>
									</tbody>
								</table>
						</div>
					</div>
				</div>
			</div>
		</div>
