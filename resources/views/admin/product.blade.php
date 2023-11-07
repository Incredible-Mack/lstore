@extends('admin.layout.main')

@section('breadcrumb')
    <x-bread-crumb heading="Dashboard" links='dddd' />
@endsection

@section('maincontent')
    <!-- Navbar -->


    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with default features</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>

                        <th>Product Name</th>
                        <th>Stock</th>
                        <th>SKU</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($products as $product)
                        <tr>

                            <td>{{ $product['product_name'] }} </td>
                            <td>{{ $product['stock'] }}</td>
                            <td>{{ $product['product_id'] }}</td>
                            <td>{{ $product['category'] }}</td>
                            <td>{{ $product['prices'] }}</td>
                            <td><button onclick="window.location.href='edit/{{ $product['product_id'] }}'" class="btn btn-danger"> <i class="fas fa-edit"></i> EDIT</button></td>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
        <!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection

@section('script')
    <!-- DataTables  & ../Plugins -->
    <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../plugins/jszip/jszip.min.js"></script>
    <script src="../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->

    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
