</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>

<script type="text/javascript">
    window.setTimeout(function() {
        $(".alert").fadeTo(5000, 1000).slideUp(500, function() {
            $(this).remove();
        });
    });
    $(document).ready(function() {
        $('#id').DataTable({
            "language": {
                "decimal": "",
                "emptyTable": "Tidak ada data",
                "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                "infoEmpty": "Menampilkan 0 to 0 of 0 data",
                "infoFiltered": "(Filter dari _MAX_ total data)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Menampilan _MENU_ perhalaman",
                "loadingRecords": "Loading...",
                "processing": "",
                "search": "Pencarian:",
                "zeroRecords": "Data tidak ada",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Selanjutnya",
                    "previous": "Sebelumnya"
                },
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                }
            }
        });
    });
    $(document).ready(function() {
        $('#absen').DataTable({
            "language": {
                "decimal": "",
                "emptyTable": "Tidak ada data",
                "info": "Menampilkan _START_ sampai _END_ dari _TOTAL_ data",
                "infoEmpty": "Menampilkan 0 to 0 of 0 data",
                "infoFiltered": "(Filter dari _MAX_ total data)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Menampilan _MENU_ perhalaman",
                "loadingRecords": "Loading...",
                "processing": "",
                "search": "Pencarian:",
                "zeroRecords": "Data tidak ada",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Selanjutnya",
                    "previous": "Sebelumnya"
                },
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                }
            }
        });
    });
</script>

</html>