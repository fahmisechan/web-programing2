<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Users</h1>
		<button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal"
			data-target="#exampleModal"><i class="fas fa-plus fa-sm text-white-50 mr-2"></i>Create User</button>
	</div>

	<!-- Modal Create -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Create User</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url(). 'book/create'; ?>" method="post">
					<div class="modal-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Username</label>
							<input type="text" class="form-control" name="username" aria-describedby="emailHelp">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Password</label>
							<input type="password" class="form-control" name="password">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Email</label>
							<input type="text" class="form-control" name="email">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Role</label>
							<select class="custom-select" name="role">
									<option value="admin">Admin</option>
									<option value="user">User</option>
							</select>
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
	<div class="modal fade" id="update-user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Update User</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url(). 'book/update'; ?>" method="post">
					<div class="modal-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Username</label>
							<input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Email</label>
							<input type="text" class="form-control" id="email" name="email">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Role</label>
							<select class="custom-select" name="role" id="role">
									<option value="admin">Admin</option>
									<option value="user">User</option>
							</select>
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

	<table id="user" class="display" style="width:100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>Username</th>
				<th>Email</th>
				<th>Role</th>
				<th>Image</th>
				<th>Action</th>
			</tr>
		</thead>
	</table>

</div>
