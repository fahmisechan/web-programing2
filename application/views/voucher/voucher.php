<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Vouchers</h1>
		<button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal"
			data-target="#exampleModal"><i class="fas fa-plus fa-sm text-white-50 mr-2"></i>Create voucher</button>
	</div>

	<!-- Modal Create -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Create voucher</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url(). 'voucher/create'; ?>" method="post">
					<div class="modal-body">
						<div class="form-group">
							<label for="exampleInputPassword1">Name</label>
							<input type="text" class="form-control" name="name">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Discount</label>
							<input type="number" class="form-control" name="discount" max="100">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Start Date</label>
							<input type="date" class="form-control" name="start_date">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">End Date</label>
							<input type="date" class="form-control" name="end_date">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Amount</label>
							<input type="number" class="form-control" name="amount">
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
	<div class="modal fade" id="update-voucher" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Update voucher</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url(). 'voucher/update'; ?>" method="post">
					<div class="modal-body">
					<input type="text" class="form-control" name="id" id="id" hidden>
						<div class="form-group">
							<label for="exampleInputPassword1">Name</label>
							<input type="text" class="form-control" name="name" id="name">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Discount</label>
							<input type="number" class="form-control" name="discount" id="discount" max="100">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Start Date</label>
							<input type="date" class="form-control" name="start_date" id="start_date">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">End Date</label>
							<input type="date" class="form-control" name="end_date" id="end_date">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Amount</label>
							<input type="number" class="form-control" name="amount" id="amount">
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

	<table id="voucher" class="display" style="width:100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Start Date</th>
				<th>End Date</th>
				<th>Amount</th>
				<th>Discount</th>
				<th>Action</th>
			</tr>
		</thead>
	</table>

</div>
