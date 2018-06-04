@extends('admin.layouts.layouts')

@section('title')

    Add new User

@endsection


@section("header")


@endsection


@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add User</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('/adminpanel')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url ('/adminpanel/users')}}">Users Control</a>
                        <li class="breadcrumb-item active"><a href="{{url ('/adminpanel/users/create')}}">Add user</a>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

@endsection

@section("footer")


@endsection