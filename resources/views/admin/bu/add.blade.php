@extends('admin.layouts.layouts')

@section('title')

    Add new Immovables


@endsection


@section("header")


@endsection


@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Immovables</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('/adminpanel')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url ('/adminpanel/bu')}}">Immovables Control</a>
                        <li class="breadcrumb-item active"><a href="{{url ('/adminpanel/bu/create')}}">Add New Immovables</a>
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
                        <h3 class="card-title">New Immovables Form</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                            {!! Form::open(['url' => url('/adminpanel/bu') ,'method' =>'post']) !!}
                              @include('admin.bu.form')
                            {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section("footer")


@endsection