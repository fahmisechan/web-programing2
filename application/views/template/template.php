<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Your Dashboard</title>
	<!-- Include CSS and JavaScript links from your SB Admin 2 template -->
	<link href="<?= base_url('public/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
	<link href="<?= base_url('public/css/sb-admin-2.min.css') ?>" rel="stylesheet">
</head>

<body id="page-top">
	<div id="wrapper">
		<?php $this->load->view('template/sidebar') ?>

		<!-- Include page-specific content here -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- Main Content -->
			<div id="content">

               	<?php $this->load->view('template/navbar') ?>

				<!-- Begin Page Content -->
				<div class="container-fluid">

					<div class="card p-3">
						<?= $content ?>
					</div>

				</div>
				<!-- /.container-fluid -->

			</div>

			<!-- Footer -->
			<?php $this->load->view('template/footer') ?>
			<!-- End of Footer -->

		</div>
	</div>

	<!-- Include JavaScript files at the end of the body -->
	<script src="<?= base_url('public/js/sb-admin-2.min.js') ?>"></script>
	<script src="<?= base_url('public/vendor/jquery/jquery.min.js') ?> "></script>
    <script src="<?= base_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js') ?> "></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
</body>

</html>
