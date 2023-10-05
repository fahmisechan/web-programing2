<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Categories</h1>
		<button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal"
			data-target="#exampleModal"><i class="fas fa-plus fa-sm text-white-50 mr-2"></i>Create category</button>
	</div>

	<!-- Modal Create -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Create category</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url(). 'category/create'; ?>" method="post">
					<div class="modal-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Category</label>
							<input type="text" class="form-control" name="category" aria-describedby="emailHelp">
						</div>
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Description</label>
							<textarea class="form-control" name="description" rows="3"></textarea>
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
	<div class="modal fade" id="update-category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Update category</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url(). 'category/update'; ?>" method="post">
					<div class="modal-body">
					<input type="text" class="form-control" name="id" id="id" hidden>
						<div class="form-group">
							<label for="exampleInputEmail1">Category</label>
							<input type="text" class="form-control" name="category" aria-describedby="emailHelp" id="field-category">
						</div>
						<div class="form-group">
							<label for="exampleFormControlTextarea1">Description</label>
							<textarea class="form-control" name="description" id="description" rows="3"></textarea>
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

	<table id="category" class="display" style="width:100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>Category</th>
				<th>Description</th>
				<th>Action</th>
			</tr>
		</thead>
	</table>

</div>
