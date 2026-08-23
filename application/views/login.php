<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Login</title>
	<?php require_once('layout/_css.php') ?>
</head>

<body>
	<div class="container-scroller">
		<div class="container-fluid page-body-wrapper full-page-wrapper">
			<div class="row w-100 m-0">
				<div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
					<div class="card col-lg-4 mx-auto">
						<div class="card-body px-5 py-5">
							<h3 class="card-title text-left mb-3">Login</h3>
							<form action="<?= base_url('auth/login') ?>" method="post">
								<div class="form-group">
									<label>Username *</label>
									<input type="text" class="form-control" placeholder="Username" name="username">
								</div>
								<div class="form-group">
									<label>Password *</label>
									<input type="password" class="form-control" placeholder="Password" name="password">
								</div>

								<div class="text-center">
									<button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
								</div>
                                <div id="menghilang">
                                    <?php echo $this->session->flashdata('alert', true) ?>
                                </div>
							</form>
						</div>
					</div>
				</div>
				<!-- content-wrapper ends -->
			</div>
			<!-- row ends -->
		</div>
		<!-- page-body-wrapper ends -->
	</div>
	<!-- container-scroller -->
	<?php require_once('layout/js.php') ?>
</body>

</html>
