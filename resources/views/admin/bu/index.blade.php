@extends('admin.layouts.layouts')

@section('title')

    Immovables Control

@endsection


@section("header")

    <!-- DataTables -->
    {{Html::style('admin/plugins/datatables/dataTables.bootstrap4.css')}}

@endsection






@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Immovables table</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('/adminpanel')}}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{url ('/adminpanel/bu')}}">Immovables Control</a>
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
                        <h3 class="card-title">Hover Data Table</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Immovables Name</th>
                                <th>Price</th>
                                <th>Type</th>
                                <th>created_at</th>
                                <th>Status</th>
                                <th>Options</th>
                            </tr>
                            </thead>
                            <tbody>

                           {{--
                           @foreach($users as $userInfo)
                            <tr>
                                <td>{{$userInfo->id}}</td>
                                <td>{{$userInfo->name}}</td>
                                <td>{{$userInfo->email}}</td>
                                <td>{{$userInfo->created_at}}</td>
                                <td>{{$userInfo->updated_at}}</td>
                                <td>{{$userInfo->admin == 1 ? "admin" : "user"}}</td>
                                <td>
                                    <a href="{{url('adminpanel/users/'.$userInfo->id.'/edit')}}" class="btn btn-info" role="button">Edit</a>
                                    <a href="{{url('adminpanel/users/'.$userInfo->id.'/delete')}}" class="btn btn-danger" role="button">Delete</a>
                                </td>

                            </tr>
                            @endforeach
                           --}}

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Immovables Name</th>
                                <th>Price</th>
                                <th>Type</th>
                                <th>created_at</th>
                                <th>Status</th>
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

        var table = $('#example2').DataTable({
           processing: true,
           serverSide: true,
           ajax: "/adminpanel/bu/data",
            columns:[
                {data: 'id',name: 'id'},
                {data: 'bu_name',name: 'bu_name'},
                {data: 'bu_price',name: 'bu_price'},
                {data: 'bu_type',name: 'bu_type'},
                {data: 'created_at',name: 'created_at'},
                {data: 'bu_status',name: 'bu_status'},
                {data: 'control',name: ''}

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