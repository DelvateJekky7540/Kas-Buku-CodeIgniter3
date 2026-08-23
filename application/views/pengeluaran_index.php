<!-- partial -->
<div class="main-panel">
	<div class="selamat-datang">
		<h1>Selamat Datang di Pengeluaran</h1>
	</div>

	<!-- Tabel -->
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Data Pengeluaran</h4>
				<div id="menghilang">
					<?php echo $this->session->flashdata('alert', true) ?>
				</div>

				<!-- Button trigger modal -->
				<button type="button" class="btn btn-success mb-4" data-toggle="modal" data-target="#exampleModal">
					<i class="bi bi-dash-square"></i>Tambah Pengeluaran
				</button>

				<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
					aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Tambah Pengeluaran</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<form class="forms-sample" method="post" action="<?= base_url('pengeluaran/simpan') ?>">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Keterangan</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" name="keterangan">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Nominal</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" name="nominal">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Tanggal</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" name="tanggal">
                                        </div>
                                    </div>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
							</div>
						</div>
					</div>
				</div>

				<div class="table-responsive table-bordered">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th> # </th>
								<th> Keterangan </th>

                                <?php if($this->session->userdata('role')=='Admin{') { ?>
								<th> Username </th>
                                <?php } ?>

								<th> Nominal </th>
								<th> Tanggal </th>
								<th> Aksi </th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1 ?>
							<?php foreach($pengeluaran as $pe) {?>
							<tr>
								<td> <?= $no++; ?> </td>
								<td> <?= $pe['keterangan'] ?> </td>

                                <?php if($this->session->userdata('role')=='Admin{') { ?>
								<td> <?= $pe['username'] ?> </td>
                                <?php } ?>

								<td align="right">Rp. <?= number_format($pe['nominal']) ;?> </td>
								<td> <?= $pe['tanggal'] ?> </td>
								<td>
									<a href="<?= base_url('pengeluaran/hapus/'.$pe['id_transaksi']) ?>"
										onclick="return confirm('Apakah anda yakin ingin menghapus transaksi ini ?')"
										class="btn btn-danger">
										<i class="bi bi-trash"></i>
									</a>
								</td>
							</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
