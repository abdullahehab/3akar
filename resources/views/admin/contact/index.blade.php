@extends('admin.layouts.layouts')

@section('title')

    Message Control

@endsection


@section("header")

    <!-- DataTables -->
    {!!  Html::style('admin/plugins/datatables/dataTables.bootstrap4.css') !!}

@endsection






@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Message Control</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('/adminpanel')}}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{url ('/adminpanel/contactUs')}}">Message Control</a>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Message Table</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="data" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>created_at</th>
                                <th>Status</th>
                                <th>Message type</th>
                                <th>Options</th>
                            </tr>
                            </thead>
                            <tbody>

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>created_at</th>
                                <th>Status</th>
                                <th>Message type</th>
                                <th>Options</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
                
                <!-- /.card -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

@endsection






@section('footer')

    <!-- DataTables -->
    {{Html::script('admin/plugins/datatables/jquery.dataTables.min.js')}}
    {{Html::script('admin/plugins/datatables/dataTables.bootstrap4.min.js')}}


    <script>


        var table = $('#data').DataTable({
           processing: true,
           serverSide: true,
           ajax: "/adminpanel/contactUs/data",
            columns:[
                {data: 'id',name: 'id'},
                {data: 'contact_name',name: 'contact_name'},
                {data: 'contact_email',name: 'contact_email'},
                {data: 'created_at',name: 'created_at'},
                {data: 'view',name: 'view'},
                {data: 'contact_type',name: 'contact_type'},
                {data: 'action',name: 'action',orderable: false, searchable: false }

            ],

            "stateSave": false,
            'responsive': true,
            'order': [[0, 'desc']],
            'pagingType': "full_numbers",
            'aLengthMenu': [
                [20, 50, 100, 200, -1],
                [20, 50, 100, 200, "All"]
            ],
            iDisplayLength: 25,
            fixedHeader: true,

            'oTableTools': {
               'aButtons': [

                   {
                       'eExtends': 'csv',
                       'sButtonText': 'Excel File',
                       'sCharSet': 'utf16le'
                   },
                   {
                       'eExtends': 'copy',
                       'sButtonText': 'Copy information'
                   },
                   {
                       'eExtends': 'print',
                       'sButtonText': 'print',
                       'sCharSet': 'visible'
                   }

               ],

                "sSwfPath": "{{Request::root()}}}/admin/customize/copy_csv_xls.swf"


        }

        });







    </script>

@endsection
