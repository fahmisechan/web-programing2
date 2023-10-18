<!-- Script Books -->
<script>
        $(document).ready(function() {
            $('#book').DataTable({
                ajax: {
					url : '<?php echo site_url('book/getData'); ?>',
					dataSrc:""
				},
				dom: 'Bfrtip',
				buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
                columns: [
                    { data: 'id' },
                    { data: 'title' },
                    { data: 'author' },
                    // { data: 'category_id' },
                    // { data: 'publisher_id' },
                    { data: 'price' },
                    { data: 'stock' },
                    // { data: 'description' },
					{
                        data: null,
                        render: function (data, type, row) {
                            return '<button class="btn btn-danger mr-1" onclick="deleteRowBook(' + row.id + ')">Delete</button><button class="btn btn-secondary" onclick="getRowBook(' + row.id + ')">Edit</button>';
                        }
                    },
                ],
            });
        });

	function deleteRowBook(id) {
		if (confirm("Are you sure you want to delete this row?")) {
			// Make an AJAX request to delete the row
			$.ajax({
				url: '<?php echo site_url('book/delete'); ?>',
				method: 'POST',
				data: { id: id },
				success: function(response) {
					alert('Data berhasil dihapus');
					$('#book').DataTable().ajax.reload();
				}
			});
		}
	}

	function getRowBook(id) {
			// Make an AJAX request to delete the row
			$.ajax({
				url: '<?php echo site_url('book/getDataId/'); ?>',
				method: 'post',
				data: { id: id },
				success: function(response) {
					const data = JSON.parse(response)
					$('#id').val(data.id)
					$('#title').val(data.title)
					$('#author').val(data.author)
					$('#category_id').val(data.category_id)
					$('#publisher_id').val(data.publisher_id)
					$('#stock').val(data.stock)
					$('#price').val(data.price)
					$('#description').val(data.description)
					$('#update').modal('toggle')
				}
			});
	}

</script>

<!-- Script Category -->

<script>
        $(document).ready(function() {
            $('#category').DataTable({
                ajax: {
					url : '<?php echo site_url('category/getData'); ?>',
					dataSrc:""
				},
                columns: [
                    { data: 'id' },
                    { data: 'category' },
                    { data: 'description' },
					{
                        data: null,
                        render: function (data, type, row) {
                            return '<button class="btn btn-danger mr-1" onclick="deleteRowCategory(' + row.id + ')">Delete</button><button class="btn btn-secondary" onclick="getRowCategory(' + row.id + ')">Edit</button>';
                        }
                    },
                ],
            });
        });

	function deleteRowCategory(id) {
		if (confirm("Are you sure you want to delete this row?")) {
			// Make an AJAX request to delete the row
			$.ajax({
				url: '<?php echo site_url('category/delete'); ?>',
				method: 'POST',
				data: { id: id },
				success: function(response) {
					alert('Data berhasil dihapus');
					$('#category').DataTable().ajax.reload();
				}
			});
		}
	}

	function getRowCategory(id) {
			// Make an AJAX request to delete the row
			$.ajax({
				url: '<?php echo site_url('category/getDataId/'); ?>',
				method: 'post',
				data: { id: id },
				success: function(response) {
					const data = JSON.parse(response)
					$('#id').val(data.id)
					$('#field-category').val(data.category)
					$('#description').val(data.description)
					$('#update-category').modal('toggle')
				}
			});
	}

</script>

<!-- Script Publisher -->

<script>
        $(document).ready(function() {
            $('#publisher').DataTable({
                ajax: {
					url : '<?php echo site_url('publisher/getData'); ?>',
					dataSrc:""
				},
                columns: [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'address' },
					{
                        data: null,
                        render: function (data, type, row) {
                            return '<button class="btn btn-danger mr-1" onclick="deleteRowPublisher(' + row.id + ')">Delete</button><button class="btn btn-secondary" onclick="getRowPublisher(' + row.id + ')">Edit</button>';
                        }
                    },
                ],
            });
        });

	function deleteRowPublisher(id) {
		if (confirm("Are you sure you want to delete this row?")) {
			// Make an AJAX request to delete the row
			$.ajax({
				url: '<?php echo site_url('publisher/delete'); ?>',
				method: 'POST',
				data: { id: id },
				success: function(response) {
					alert('Data berhasil dihapus');
					$('#publisher').DataTable().ajax.reload();
				}
			});
		}
	}

	function getRowPublisher(id) {
			// Make an AJAX request to delete the row
			$.ajax({
				url: '<?php echo site_url('publisher/getDataId/'); ?>',
				method: 'post',
				data: { id: id },
				success: function(response) {
					const data = JSON.parse(response)
					$('#id').val(data.id)
					$('#name').val(data.name)
					$('#address').val(data.address)
					$('#update-publisher').modal('toggle')
				}
			});
	}

</script>

<!-- Script User -->

<script>
        $(document).ready(function() {
            $('#user').DataTable({
                ajax: {
					url : '<?php echo site_url('user/getData'); ?>',
					dataSrc:""
				},
                columns: [
                    { data: 'id' },
                    { data: 'username' },
                    { data: 'email' },
                    { data: 'role' },
                    { data: 'image' },
					{
                        data: null,
                        render: function (data, type, row) {
                            return '<button class="btn btn-danger mr-1" onclick="deleteRowUser(' + row.id + ')">Delete</button><button class="btn btn-secondary" onclick="getRowUser(' + row.id + ')">Edit</button>';
                        }
                    },
                ],
            });
        });

	function deleteRowUser(id) {
		if (confirm("Are you sure you want to delete this row?")) {
			// Make an AJAX request to delete the row
			$.ajax({
				url: '<?php echo site_url('user/delete'); ?>',
				method: 'POST',
				data: { id: id },
				success: function(response) {
					alert('Data berhasil dihapus');
					$('#user').DataTable().ajax.reload();
				}
			});
		}
	}

	function getRowUser(id) {
			// Make an AJAX request to delete the row
			$.ajax({
				url: '<?php echo site_url('user/getDataId/'); ?>',
				method: 'post',
				data: { id: id },
				success: function(response) {
					const data = JSON.parse(response)
					$('#id').val(data.id)
					$('#username').val(data.username)
					$('#email').val(data.email)
					$('#role').val(data.role)
					$('#update-user').modal('toggle')
				}
			});
	}

</script>

<!-- Script Voucher -->

<script>
        $(document).ready(function() {
            $('#voucher').DataTable({
                ajax: {
					url : '<?php echo site_url('voucher/getData'); ?>',
					dataSrc:""
				},
                columns: [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'start_date' },
                    { data: 'end_date' },
                    { data: 'amount' },
                    { data: 'discount' },
					{
                        data: null,
                        render: function (data, type, row) {
                            return '<button class="btn btn-danger mr-1" onclick="deleteRowVoucher(' + row.id + ')">Delete</button><button class="btn btn-secondary" onclick="getRowVoucher(' + row.id + ')">Edit</button>';
                        }
                    },
                ],
            });
        });

	function deleteRowVoucher(id) {
		if (confirm("Are you sure you want to delete this row?")) {
			// Make an AJAX request to delete the row
			$.ajax({
				url: '<?php echo site_url('voucher/delete'); ?>',
				method: 'POST',
				data: { id: id },
				success: function(response) {
					alert('Data berhasil dihapus');
					$('#voucher').DataTable().ajax.reload();
				}
			});
		}
	}

	function getRowVoucher(id) {
			// Make an AJAX request to delete the row
			$.ajax({
				url: '<?php echo site_url('voucher/getDataId/'); ?>',
				method: 'post',
				data: { id: id },
				success: function(response) {
					const data = JSON.parse(response)
					$('#id').val(data.id)
					$('#name').val(data.name)
					$('#start_date').val(data.start_date)
					$('#end_date').val(data.end_date)
					$('#amount').val(data.amount)
					$('#discount').val(data.discount)
					$('#update-voucher').modal('toggle')
				}
			});
	}

</script>

<!-- Script Transaction Book -->

<script>
        $(document).ready(function() {
            $('.select2').select2();
		})

		$('#payment').keyup(function (e){
			let total = $('#total').val();
			$('#return').val(e.target.value - total)
		})

		$('#check').click((e) => {
			e.preventDefault();
			let voucher = $('#voucher-name').val();
			$.ajax({
				url: '<?php echo site_url('transactionBook/checkVoucher/'); ?>',
				method: 'post',
				data: { voucher: voucher },
				success: function(response) {
					$('#alert-voucher').text('Selamat Anda mendapatkan diskon')
				},
				error:function(response){
					$('#alert-voucher').text('Diskon tidak ada')
					$('#voucher-name').val('')
				}
			});

		})
</script>

<!-- Script Transaction List -->

<script>
        $(document).ready(function() {
            $('#transaction-list').DataTable({
                ajax: {
					url : '<?php echo site_url('transactionList/getData'); ?>',
					dataSrc:""
				},
                columns: [
                    { data: 'id' },
                    { data: 'code' },
                    { data: 'customer' },
                    { data: 'voucher' },
					{
                        data: null,
                        render: function (data, type, row) {
                            return '<button class="btn btn-danger mr-1" onclick="deleteRowTransactionList(' + row.id + ')">Delete</button><button class="btn btn-secondary" onclick="getRowTransactionList(' + row.id + ')">Edit</button><button class="btn btn-secondary ml-1" onclick="showPrint('+ row.id +')">Print</button>';
                        }
                    },
                ],
            });
        });

	function deleteRowTransactionList(id) {
		if (confirm("Are you sure you want to delete this row?")) {
			// Make an AJAX request to delete the row
			$.ajax({
				url: '<?php echo site_url('transactionList/delete'); ?>',
				method: 'POST',
				data: { id: id },
				success: function(response) {
					alert('Data berhasil dihapus');
					$('#transaction-list').DataTable().ajax.reload();
				}
			});
		}
	}

	function getRowTransactionList(id) {
			// Make an AJAX request to delete the row
			$.ajax({
				url: '<?php echo site_url('transactionList/getDataId/'); ?>',
				method: 'post',
				data: { id: id },
				success: function(response) {
					const data = JSON.parse(response)
					$('#id').val(data.id)
					$('#name').val(data.name)
					$('#start_date').val(data.start_date)
					$('#end_date').val(data.end_date)
					$('#amount').val(data.amount)
					$('#discount').val(data.discount)
					$('#update-voucher').modal('toggle')
				}
			});
	}

	function showPrint(id){
		window.location = "<?php  echo site_url('transactionList/print');?>/"+id;
	}

</script>

