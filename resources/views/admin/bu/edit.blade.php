@extends('admin.layouts.layouts')

@section('title')

    Edit
    {{$bu->bu_name}}
     Info

@endsection


@section("header")

    {!! Html::style('custom/select2/css/select2.css') !!}

@endsection


@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit {{$bu->bu_name}} Info</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('/adminpanel')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url ('/adminpanel/bu')}}">Immovables Control</a>
                        <li class="breadcrumb-item active"><a href="{{url ('/adminpanel/bu/'.$bu->id.'/edit')}}">
                                Edit
                                {{$bu->bu_name}}
                                Info
                            </a>
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
                        <h3 class="card-title">Edit Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        {!! Form::model($bu ,['route' => ['bu.update' , $bu->id] ,'method' =>'PATCH', 'files' => true]) !!}
                            @include('admin.bu.form')
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection

@section("footer")

    {!! Html::script('custom/select2/js/select2.js') !!}
    <script type="text/javascript">

        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.select2').select2();
        });

    </script>



@endsection