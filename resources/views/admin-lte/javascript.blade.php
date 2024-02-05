<!-- jQuery -->
<script src="/adminlte/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="/adminlte/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/adminlte/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/adminlte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/adminlte/plugins/jszip/jszip.min.js"></script>
<script src="/adminlte/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/adminlte/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/adminlte/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/adminlte/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- SweetAlert2 -->
<script src="/adminlte/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- Toastr -->
<script src="/adminlte/plugins/toastr/toastr.min.js"></script>
<!-- AdminLTE App -->
<script src="/adminlte/dist/js/adminlte.js"></script>
<script>
    $(function() {
        var x = $('#index1').DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "columnDefs": [{
                "searchable": false,
                "orderable": false,
                "targets": 0
            }],
            "order": [],
            dom: "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            "buttons": [{
                    extend: 'copyHtml5',
                    filename: 'Download',
                    footer: true,
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6],
                        orthogonal: 'export',
                    },
                },
                {
                    extend: 'excelHtml5',
                    filename: 'Download',
                    footer: true,
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6],
                        orthogonal: 'export'
                    },
                },
                {
                    extend: 'csvHtml5',
                    filename: 'Download',
                    footer: true,
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6],
                        orthogonal: 'export'
                    },
                },
                {
                    extend: 'pdfHtml5',
                    filename: 'Download',
                    footer: true,
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6],
                        orthogonal: 'export',
                        modifier: {
                            orientation: 'landscape'
                        },
                    },
                }, 'colvis'
            ],
        });

        x.on('order.dt search.dt', function() {
            x.column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function(cell, j) {
                cell.innerHTML = j + 1;
            }).buttons().container().appendTo('#index1_wrapper .col-md-6:eq(0)');
        }).draw();

        var x1 = $('#index2').DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "columnDefs": [{
                "searchable": false,
                "orderable": false,
                "targets": 0
            }],
            "order": [],
            dom: "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            "buttons": [{
                    extend: 'copyHtml5',
                    filename: 'Download',
                    footer: true,
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6, 7],
                        orthogonal: 'export',
                    },
                },
                {
                    extend: 'excelHtml5',
                    filename: 'Download',
                    footer: true,
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6, 7],
                        orthogonal: 'export'
                    },
                },
                {
                    extend: 'csvHtml5',
                    filename: 'Download',
                    footer: true,
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6, 7],
                        orthogonal: 'export'
                    },
                },
                {
                    extend: 'pdfHtml5',
                    filename: 'Download',
                    footer: true,
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6, 7],
                        orthogonal: 'export',
                        modifier: {
                            orientation: 'landscape'
                        },
                    },
                }, 'colvis'
            ],
        });

        x1.on('order.dt search.dt', function() {
            x1.column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function(cell, j) {
                cell.innerHTML = j + 1;
            }).buttons().container().appendTo('#index2_wrapper .col-md-6:eq(0)');
        }).draw();

        var x2 = $('#index3').DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "columnDefs": [{
                "searchable": false,
                "orderable": false,
                "targets": 0
            }],
            "order": [],
            dom: "<'row'<'col-sm-12 col-md-6'l><'col-sm-12 col-md-6'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
            "buttons": [{
                    extend: 'copyHtml5',
                    filename: 'Download',
                    footer: true,
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6, 7, 8, 9],
                        orthogonal: 'export',
                    },
                },
                {
                    extend: 'excelHtml5',
                    filename: 'Download',
                    footer: true,
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6, 7, 8, 9],
                        orthogonal: 'export'
                    },
                },
                {
                    extend: 'csvHtml5',
                    filename: 'Download',
                    footer: true,
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6, 7, 8, 9],
                        orthogonal: 'export'
                    },
                },
                {
                    extend: 'pdfHtml5',
                    filename: 'Download',
                    footer: true,
                    exportOptions: {
                        columns: [1, 2, 3, 4, 5, 6, 7, 8, 9],
                        orthogonal: 'export',
                        modifier: {
                            orientation: 'landscape'
                        },
                    },
                }, 'colvis'
            ],
        });

        x2.on('order.dt search.dt', function() {
            x2.column(0, {
                search: 'applied',
                order: 'applied'
            }).nodes().each(function(cell, j) {
                cell.innerHTML = j + 1;
            }).buttons().container().appendTo('#index3_wrapper .col-md-6:eq(0)');
        }).draw();

        $('#example2').DataTable({
            "paging": false,
            "lengthChange": true,
            "searching": false,
            "ordering": false,
            "info": false,
            "autoWidth": false,
            "responsive": true,
        });
    });

    function gethclock() {
        const d = new Date();
        weekdayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        var dateString = d.getDate() + ' ' + monthNames[d.getMonth()] + ' ' + d.getFullYear() + ' - ' +
            ('00' + d.getHours()).slice(-2) + ':' + ('00' + d.getMinutes()).slice(-2) + ':' + ('00' + d.getSeconds())
            .slice(-
                2);
        document.getElementById('hclock').innerHTML = dateString;
        setTimeout(gethclock, 1000);
    }
    gethclock();
</script>
