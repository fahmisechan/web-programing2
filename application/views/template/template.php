<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>Web Programing 2</title>
	<!-- Include CSS and JavaScript links from your SB Admin 2 template -->
	<link href="<?= base_url('public/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
	<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
	<link href="<?= base_url('public/css/sb-admin-2.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('public/css/datatable.css') ?>" rel="stylesheet">
	<link href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">	
	<link href="https://cdn.datatables.net/buttons/2.4.2/css/buttons.dataTables.min.css" rel="stylesheet">	
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
					<div class="card p-3 border-left-primary">
						<?= $content ?>
					</div>
				</div>

			</div>

			<?php $this->load->view('template/footer') ?>

		</div>
	</div>

	<!-- Include JavaScript files at the end of the body -->
	<script src="<?= base_url('public/vendor/jquery/jquery.min.js') ?> "></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.flash.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.print.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
	<script src="<?= base_url('public/js/sb-admin-2.min.js') ?>"></script>
	<script src="<?= base_url('public/js/datatable.js') ?>"></script>
    <script src="<?= base_url('public/vendor/bootstrap/js/bootstrap.bundle.min.js') ?> "></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('public/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>
	 <!-- Page level plugins -->
	 <script src="<?= base_url('public/vendor/chart.js/Chart.min.js') ?>"></script>

	<!-- Page level custom scripts -->
	<script src="<?= base_url('public/js/demo/chart-area-demo.js') ?>"></script>
	<script src="<?= base_url('public/js/demo/chart-pie-demo.js') ?>"></script>
	<?php if (isset($script)) { $this->load->view('script'); } ?>

    <!-- Custom scripts for all pages-->
</body>

</html>
