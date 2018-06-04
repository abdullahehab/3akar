@extends('admin.layouts.layouts')

@section('title')

    Edit
    {{$uesr->name}}
     Info

@endsection


@section("header")


@endsection


@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit {{$uesr->name}} Info</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('/adminpanel')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url ('/adminpanel/users')}}">Users Control</a>
                        <li class="breadcrumb-item active"><a href="{{url ('/adminpanel/users/'.$user->id.'/edit')}}">
                                Edit
                                {{$uesr->name}}
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

                        <form class="form-horizontal" method="POST" action="{{ url('/adminpanel/users') }}">
                            @include('admin.user.form')
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section("footer")


@endsection