@extends('admin.layouts.layouts')

@section('title')

    user Control

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
                    <h1>Users table</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('/adminpanel')}}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{url ('/adminpanel/users')}}">Users Control</a>
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>created_at</th>
                                <th>updated_at</th>
                                <th>Role</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($user as $userInfo)
                            <tr>
                                <td>{{$userInfo->id}}</td>
                                <td>{{$userInfo->name}}</td>
                                <td>{{$userInfo->email}}</td>
                                <td>{{$userInfo->created_at}}</td>
                                <td>{{$userInfo->updated_at}}</td>
                                <td>{{$userInfo->admin == 1 ? "admin" : "user"}}</td>
                                <td><a href="{{url('adminpanel/users/'.$userInfo->id.'/edit')}}" class="btn btn-info" role="button">Edit</a></td>
                                <td><a href="{{url('adminpanel/users/'.$userInfo->id.'/delete')}}" class="btn btn-danger" role="button">Edit</a></td>
                            </tr>

                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Rendering engine</th>
                                <th>Browser</th>
                                <th>Platform(s)</th>
                                <th>Engine version</th>
                                <th>CSS grade</th>
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
        $(function(){
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": true,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
        });

    </script>

@endsection
