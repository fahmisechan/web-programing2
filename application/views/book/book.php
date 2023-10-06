<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Books</h1>
		<button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" data-toggle="modal"
			data-target="#exampleModal"><i class="fas fa-plus fa-sm text-white-50 mr-2"></i>Create Book</button>
	</div>

	<!-- Modal Create -->
	<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Create Book</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url(). 'book/create'; ?>" method="post">
					<div class="modal-body">
						<div class="form-group">
							<label for="exampleInputEmail1">Title</label>
							<input type="text" class="form-control" name="title" aria-describedby="emailHelp">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Author</label>
							<input type="text" class="form-control" name="author">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Category</label>
							<select class="custom-select" name="category_id">
								<?php foreach ($category as $value) { ?>
									<option value="<?php echo $value->id; ?>"><?php echo $value->category; ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Publisher</label>
							<select class="custom-select" name="publisher_id">
								<?php foreach ($publisher as $value) { ?>
									<option value="<?php echo $value->id; ?>">
										<?php echo $value->name; ?>
									</option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Stock</label>
							<input type="number" class="form-control" name="stock">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Price</label>
							<input type="number" class="form-control" name="price">
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
	<div class="modal fade" id="update" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Update Book</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?php echo base_url(). 'book/update'; ?>" method="post">
					<div class="modal-body">
					<input type="text" class="form-control" name="id" id="id" hidden>
						<div class="form-group">
							<label for="exampleInputEmail1">Title</label>
							<input type="text" class="form-control" name="title" id="title"
								aria-describedby="emailHelp">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Author</label>
							<input type="text" class="form-control" name="author" id="author">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Category</label>
							<select class="custom-select" name="category_id" id="category_id">
								<?php foreach ($category as $value) { ?>
									<option value="<?php echo $value->id; ?>">
										<?php echo $value->category; ?>
									</option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Publisher</label>
							<select class="custom-select" name="publisher_id" id="publisher_id">
								<?php foreach ($publisher as $value) { ?>
									<option value="<?php echo $value->id; ?>">
										<?php echo $value->name; ?>
									</option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Stock</label>
							<input type="number" class="form-control" name="stock" id="stock">
						</div>
						<div class="form-group">
							<label for="exampleInputPassword1">Price</label>
							<input type="number" class="form-control" name="price" id="price">
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

	<table id="book" class="display" style="width:100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Author</th>
				<!-- <th>Category</th> -->
				<!-- <th>Publisher</th> -->
				<th>Price</th>
				<th>Stock</th>
				<!-- <th>Description</th> -->
				<th>Action</th>
			</tr>
		</thead>
	</table>

</div>
