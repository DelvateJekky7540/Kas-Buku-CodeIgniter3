<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>KasBuku</title>
    <?php require_once('_css.php') ;?>
</head>

<body>
	<div class="container-scroller">
		<!-- partial:partials/_sidebar.html -->
		<?php require_once('_sidebar.php') ;?>

		<!-- partial -->
		<div class="container-fluid page-body-wrapper">
			<!-- partial:partials/_navbar.html -->
			<?php require_once('_nav.php') ;?>

			<!-- partial -->
			<div class="main-panel">
				<!-- content -->
                <div class="content-wrapper selamat-datang">
                    <?= $contents; ?>
                </div>
				<!-- content-wrapper ends -->

				<!-- partial:partials/_footer.html -->
				<?php require_once('_footer.php') ;?>
				<!-- partial -->
			</div>
			<!-- main-panel ends -->
		</div>
		<!-- page-body-wrapper ends -->

	</div>
	<!-- container-scroller -->

	<!-- js -->
	<?php require_once('_js.php') ;?>
</body>

</html>
