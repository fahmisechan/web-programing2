<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Publisher</h1>
		<button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal"
			data-target="#exampleModal"><i class="fas fa-plus fa-sm text-white-50 mr-2"></i>Create publisher</button>
	</div>

	<!-- Modal Create -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Create publisher</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url(). 'publisher/create'; ?>" method="post">
					<div class="modal-body">
						<div class="form-group">
							<label for="exampleInputPassword1">Name</label>
							<input type="text" class="form-control" name="name">
						</div>
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Address</label>
							<textarea class="form-control" name="address" rows="3"></textarea>
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
	<div class="modal fade" id="update-publisher" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Update publisher</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url(). 'publisher/update'; ?>" method="post">
					<div class="modal-body">
					<input type="text" class="form-control" name="id" id="id" hidden>
						<div class="form-group">
							<label for="exampleInputPassword1">Name</label>
							<input type="text" class="form-control" name="name" id="name">
						</div>
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Address</label>
							<textarea class="form-control" name="address" id="address" rows="3"></textarea>
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

	<table id="publisher" class="display" style="width:100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Address</th>
				<th>Action</th>
			</tr>
		</thead>
	</table>

</div>
