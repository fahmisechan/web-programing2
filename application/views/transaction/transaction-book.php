<div class="container-fluid">

	<!-- Page Heading -->
	<div class="d-sm-flex align-items-center justify-content-between mb-4">
		<h1 class="h3 mb-0 text-gray-800">Transaction Book</h1>
	</div>

	<?php
		if($this->session->flashdata('message')){ // Jika ada
			echo '<div class="alert alert-danger mt-3">'.$this->session->flashdata('message').'</div>'; // Tampilkan pesannya
		}
	?>

	<div class="row">
		<div class="col-sm-12">
			<form action="<?php echo base_url(). 'transactionBook/addToCart'; ?>" method="post">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="exampleInputPassword1">Select Book</label>
							<select class="custom-select select2" name="book_id">
								<?php foreach ($book as $value) { ?>
								<option value="<?php echo $value->id; ?>"><?php echo $value->title; ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="form-group">
							<label for="exampleInputPassword1">Amount</label>
							<input type="number" class="form-control" name="amount">
						</div>
					</div>
					<div class="col-sm-2">
						<button class="btn btn-primary mt-4" type="submit">Add to cart</button>
					</div>
			</form>
		</div>
	</div>
</div>
<h5><strong>Cart</strong></h5>
<table class="table">
	<thead>
		<tr>
			<th scope="col">id</th>
			<th scope="col">Name</th>
			<th scope="col">Amount</th>
			<th scope="col">Price</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($this->cart->contents() as $index => $item): ?>
		<tr>
			<td><?php echo $item['id']; ?></td>
			<td><?php echo $item['name']; ?></td>
			<td><?php echo $item['qty']; ?></td>
			<td><?php echo $item['price']; ?></td>
			<td><a href="<?php echo base_url('transactionBook/remove/' . $item['rowid']); ?>">Remove</a></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<hr>
<div class="row">
	<div class="col-sm-3">
		<div class="form-group">
			<label for="exampleInputPassword1">Total</label>
			<input type="number" class="form-control" name="amount" id="total" readonly value="<?php echo $this->cart->total() ?>">
		</div>
	</div>
	<div class="col-sm-3">
		<div class="form-group">
			<label for="exampleInputPassword1">Payment</label>
			<input type="number" class="form-control" name="payment" id="payment">
		</div>
	</div>
	<div class="col-sm-3">
		<div class="form-group">
			<label for="exampleInputPassword1">Return</label>
			<input type="number" class="form-control" name="return"  id="return">
		</div>
	</div>
	<div class="col-sm-3">
		<div class="form-group">
			<label for="exampleInputPassword1">Customer</label>
			<input type="text" class="form-control" name="customer">
		</div>
	</div>
	<div class="col-sm-5">
		<div class="form-group">
			<label>Voucher</label>
			<input type="text" class="form-control" name="voucher" id="voucher-name">
		</div>
	</div>
	<div class="col-sm-2">
		<div class="form-group">
			<button class="btn btn-primary mt-4">Check</button>
		</div>
	</div>
</div>
	<button class="btn btn-primary mt-4" type="submit">Submit</button>
</div>
