<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Barang</h1>
		<button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal"
			data-target="#exampleModal"><i class="fas fa-plus fa-sm text-white-50 mr-2"></i>Create barang</button>
	</div>

	<!-- Modal Create -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Create barang</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url(). 'barang/create'; ?>" method="post">
					<div class="modal-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Kode Barang</label>
							<input type="text" class="form-control" value="<?php echo $kd; ?>" disabled>
							<input type="text" class="form-control" name="kode_barang" aria-describedby="emailHelp" value="<?php echo $kd; ?>" hidden>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Nama Barang</label>
							<input type="text" class="form-control" name="nama_barang" aria-describedby="emailHelp">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Harga Barang</label>
							<input type="number" class="form-control" name="harga_barang" aria-describedby="emailHelp">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Stok</label>
							<input type="number" class="form-control" name="stok" aria-describedby="emailHelp">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button class="btn btn-primary" type="submit">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal Update -->
	<div class="modal fade" id="update-barang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Update barang</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url(). 'barang/update'; ?>" method="post">
					<div class="modal-body">
					<input type="text" class="form-control" name="id" id="id" hidden>
						<div class="form-group">
							<label for="exampleInputEmail1">Kode Barang</label>
							<input type="text" class="form-control" name="kode_barang" aria-describedby="emailHelp" id="kode_barang" disabled>
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Nama Barang</label>
							<input type="text" class="form-control" name="nama_barang" aria-describedby="emailHelp" id="nama_barang">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Harga Barang</label>
							<input type="number" class="form-control" name="harga_barang" aria-describedby="emailHelp" id="harga_barang">
						</div>
						<div class="form-group">
							<label for="exampleInputEmail1">Stok</label>
							<input type="number" class="form-control" name="stok" aria-describedby="emailHelp" id="stok">
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						<button class="btn btn-primary" type="submit">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<table id="barang" class="display" style="width:100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>Kode Barang</th>
				<th>Nama Barang</th>
				<th>Harga Barang</th>
				<th>Stok</th>
				<th>Action</th>
			</tr>
		</thead>
	</table>

</div>
