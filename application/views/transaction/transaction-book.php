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
			<th scope="col">Qty</th>
			<th scope="col">Price</th>
			<th scope="col">Action</th>
		</tr>
	</thead>
	<tbody>
		<?php 
		$item_number = 0;
		foreach ($this->cart->contents() as $index => $item): $item_number++;?>
		<tr>
			<td><?php echo $item_number; ?></td>
			<td><?php echo $item['name']; ?></td>
			<td><?php echo $item['qty']; ?></td>
			<td><?php echo $item['price'].' / pcs'; ?></td>
			<td><a href="<?php echo base_url('transactionBook/remove/' . $item['rowid']); ?>">Remove</a></td>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>
<hr>
<form action="<?php echo base_url(). 'transactionBook/create'; ?>" method="post">
<div class="row">
	<div class="col-sm-3">
		<div class="form-group">
			<label for="exampleInputPassword1">Total</label>
			<input type="number" class="form-control" name="total" id="total" readonly value="<?php echo $this->cart->total() ?>">
		</div>
	</div>
	<div class="col-sm-3">
		<div class="form-group">
			<label for="exampleInputPassword1">Payment</label>
			<input type="number" class="form-control" name="payment" id="payment" required>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="form-group">
			<label for="exampleInputPassword1">Return</label>
			<input type="number" class="form-control" name="return"  id="return" readonly>
		</div>
	</div>
	<div class="col-sm-3">
		<div class="form-group">
			<label for="exampleInputPassword1">Customer</label>
			<input type="text" class="form-control" name="customer" required>
		</div>
	</div>
	<div class="col-sm-5">
		<div class="form-group">
			<label>Voucher</label>
			<input type="text" class="form-control" name="voucher" id="voucher-name">
			<p class="mt-1" id="alert-voucher"></p>
		</div>
	</div>
	<div class="col-sm-2">
		<div class="form-group">
			<button class="btn btn-primary mt-4" id="check">Check</button>
		</div>
	</div>
</div>
	<button class="btn btn-primary" type="submit">Submit</button>
</div>
</form>
