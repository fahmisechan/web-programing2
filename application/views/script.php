<script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                ajax: {
					url : '<?php echo site_url('book/getData'); ?>',
					dataSrc:""
				},
                columns: [
                    { data: 'id' },
                    { data: 'title' },
                    { data: 'author' },
                ],
            });
        });
    </script>
