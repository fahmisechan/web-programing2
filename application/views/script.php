<!-- Script Books -->
<script>
        $(document).ready(function() {
            $('#book').DataTable({
                ajax: {
					url : '<?php echo site_url('book/getData'); ?>',
					dataSrc:""
				},
                columns: [
                    { data: 'id' },
                    { data: 'title' },
                    { data: 'author' },
                    { data: 'description' },
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
					$('#title').val(data.title)
					$('#id').val(data.id)
					$('#author').val(data.author)
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
