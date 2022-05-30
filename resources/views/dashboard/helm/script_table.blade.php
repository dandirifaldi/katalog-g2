    <!-- DataTables  & Plugins -->
    <script src="{{asset('template')}}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{asset('template')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{asset('template')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{asset('template')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{asset('template')}}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{asset('template')}}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{asset('template')}}/plugins/jszip/jszip.min.js"></script>
    <script src="{{asset('template')}}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{asset('template')}}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{asset('template')}}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{asset('template')}}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{asset('template')}}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
    $(function () {
        $('#1').DataTable({
        "paging": true,"lengthChange": false,"searching": true,"ordering": false,"info": true,"autoWidth": false,"responsive": false,
        "buttons":["print","colvis"]
        }).buttons().container().appendTo('#1_wrapper .col-md-6:eq(0)');
        $('#2').DataTable({
        "paging": true,"lengthChange": false,"searching": true,"ordering": false,"info": true,"autoWidth": false,"responsive": false,
        "buttons":["print"]
        }).buttons().container().appendTo('#2_wrapper .col-md-6:eq(0)');
    });
</script>
    <!-- bs-custom-file-input -->
    <script src="{{asset('template')}}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function () {
        bsCustomFileInput.init();
        });
    </script>