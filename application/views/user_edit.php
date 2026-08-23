<?php foreach($user as $u){ ?>
<div class="main-panel">
	<div class="col-md-6 grid-margin stretch-card">
		<div class="card">
			<div class="card-body">
				<h1 class="card-title">Edit User</h1>

				<form class="forms-sample" method="post" action="<?= base_url('user/update') ?>">
					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Username</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" placeholder="Username" name="username" value="<?= $u['username'] ?>" readonly>
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Nama</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" placeholder="Nama" name="nama" value="<?= $u['nama'] ?>">
						</div>
					</div>

					<div class="form-group row">
						<label class="col-sm-3 col-form-label">Role</label>
						<div class="col-sm-9">
							<select class="form-control" name="role">
								<option value="User" <?php if($u['role']=='User'){echo "selected" ;} ?>>User</option>
								<option value="Admin" <?php if($u['role']=='Admin'){echo "selected" ;} ?>>Admin</option>
							</select>
						</div>
					</div>

                    <input type="hidden" name="id" value="<?= $u['id'] ?>">

					<button type="submit" class="btn btn-primary mr-2">Simpan</button>
					<a href="<?= base_url('user') ?>" class="btn btn-dark">Kembali</a>
				</form>
			</div>
		</div>
	</div>
</div>
<?php } ?>