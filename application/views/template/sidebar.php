<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

	<!-- Sidebar - Brand -->
	<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
		<div class="sidebar-brand-icon rotate-n-15">
			<i class="fas fa-laugh-wink"></i>
		</div>
		<div class="sidebar-brand-text mx-3">Toko Buku</div>
	</a>

	<!-- Divider -->
	<hr class="sidebar-divider my-0">

	<!-- Nav Item - Dashboard -->
	<li class="nav-item <?php if($this->uri->segment(1)=="dashboard") {echo "active";}?> ">
		<a class="nav-link" href="<?= site_url('dashboard') ?>">
			<i class="fas fa-fw fa-tachometer-alt"></i>
			<span>Dashboard</span></a>
	</li>

		<!-- Divider -->
		<hr class="sidebar-divider">

		<!-- Heading -->
		<div class="sidebar-heading">
			Transaction
		</div>

		<li class="nav-item <?php if($this->uri->segment(1)=="transactionBook") {echo "active";}?> ">
		<a class="nav-link" href="<?= site_url('transactionBook') ?>">
			<i class="fas fa-fw fa-receipt"></i>
			<span>Transaction Book</span></a>
		</li>

		<li class="nav-item <?php if($this->uri->segment(1)=="transactionList") {echo "active";}?> ">
		<a class="nav-link" href="<?= site_url('transactionList') ?>">
			<i class="fas fa-fw fa-list"></i>
			<span>Transaction List</span></a>
		</li>

	<!-- Heading -->
	<div class="sidebar-heading <?php if($this->session->userdata('role') != 'admin') { echo "d-none"; } ?>">
		Master
	</div>

	<!-- Nav Item - Charts -->
	<li class="nav-item <?php if($this->uri->segment(1)=="barang") {echo "active";} if($this->session->userdata('role') != 'admin') { echo "d-none"; }?> ">
		<a class="nav-link" href="<?= site_url('barang') ?>">
			<i class="fas fa-fw fa-item"></i>
			<span>Barang</span></a>
	</li>

	<li class="nav-item <?php if($this->uri->segment(1)=="book") {echo "active";} if($this->session->userdata('role') != 'admin') { echo "d-none"; }?> ">
		<a class="nav-link" href="<?= site_url('book') ?>">
			<i class="fas fa-fw fa-book"></i>
			<span>Books</span></a>
	</li>

	<li class="nav-item <?php if($this->uri->segment(1)=="category") {echo "active";} if($this->session->userdata('role') != 'admin') { echo "d-none"; }?> ">
		<a class="nav-link" href="<?= site_url('category') ?>">
			<i class="fas fa-fw fa-layer-group"></i>
			<span>Categories</span></a>
	</li>

	<li class="nav-item <?php if($this->uri->segment(1)=="publisher") {echo "active";} if($this->session->userdata('role') != 'admin') { echo "d-none"; }?> ">
		<a class="nav-link" href="<?= site_url('publisher') ?>">
			<i class="fas fa-fw fa-building"></i>
			<span>Publisher</span></a>
	</li>

	<li class="nav-item <?php if($this->uri->segment(1)=="voucher") {echo "active";} if($this->session->userdata('role') != 'admin') { echo "d-none"; }?> ">
		<a class="nav-link" href="<?= site_url('voucher') ?>">
			<i class="fas fa-fw fa-credit-card"></i>
			<span>Voucher</span></a>
	</li>

	<li class="nav-item <?php if($this->uri->segment(1)=="user") {echo "active";} if($this->session->userdata('role') != 'admin') { echo "d-none"; }?> ">
		<a class="nav-link" href="<?= site_url('user') ?>">
			<i class="fas fa-fw fa-users"></i>
			<span>Users</span></a>
	</li>

	<!-- Nav Item - Tables -->
	<!-- <li class="nav-item">
		<a class="nav-link" href="tables.html">
			<i class="fas fa-fw fa-table"></i>
			<span>Tables</span></a>
	</li> -->

	<div class="sidebar-heading <?php if($this->session->userdata('role') != 'admin') { echo "d-none"; } ?>">
		Report
	</div>

	<li class="nav-item <?php if($this->uri->segment(1)=="report") {echo "active";} if($this->session->userdata('role') != 'admin') { echo "d-none"; }?> ">
		<a class="nav-link" href="<?= site_url('report') ?>">
			<i class="fas fa-fw fa-chart-line"></i>
			<span>Report</span></a>
	</li>

	<!-- Sidebar Toggler (Sidebar) -->
	<div class="text-center d-none d-md-inline">
		<button class="rounded-circle border-0" id="sidebarToggle"></button>
	</div>

</ul>
