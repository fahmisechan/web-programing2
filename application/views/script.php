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
                            return '<button class="btn btn-danger mr-1" onclick="deleteRow(' + row.id + ')">Delete</button><button class="btn btn-secondary" onclick="getRow(' + row.id + ')">Edit</button>';
                        }
                    },
                ],
            });
        });

	function deleteRow(id) {
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

	function getRow(id) {
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
