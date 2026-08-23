

<!-- partial -->
<div class="main-panel">
	<div class="selamat-datang">
		<h1>Selamat Datang di User</h1>
	</div>

	<!-- Tabel -->
	<div class="col-lg-12 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Data User</h4>
				<div id="menghilang">
					<?php echo $this->session->flashdata('alert', true) ?>
				</div>
				
				<a class="btn btn-success btn-fw mb-4" href="<?= base_url('user/tambah') ?>"><i class="mdi mdi-account-plus"></i>Tambah User</a>

				<div class="table-responsive table-bordered">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th> # </th>
								<th> Username </th>
								<th> Nama </th>
								<th> Password </th>
								<th> Role </th>
								<th> Aksi </th>
							</tr>
						</thead>
						<tbody>
							<?php $no=1 ?>
							<?php foreach($user as $u) {?>
							<tr>
								<td> <?= $no++; ?> </td>
								<td> <?= $u['username'] ?> </td>
								<td> <?= $u['nama'] ?> </td>
								<td> <?= $u['password'] ?> </td>
								<td> <?= $u['role'] ?> </td>
								<td>
									<a href="<?= base_url('user/hapus/'.$u['id']) ?>" onclick="return confirm('Apakah anda yakin ingin menghapus user ini ?')" class="btn btn-danger">
										<i class="bi bi-trash"></i>
									</a>

									<a href="<?= base_url('user/edit/'.$u['id']) ?>" class="btn btn-warning">
										<i class="bi bi-pencil-square"></i>
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

	