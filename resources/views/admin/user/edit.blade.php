@extends('admin.layouts.layouts')

@section('title')

    Edit
    {{$userEdit->name}}
     Info

@endsection


@section("header")


@endsection


@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit {{$userEdit->name}} Info</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('/adminpanel')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url ('/adminpanel/users')}}">Users Control</a>
                        <li class="breadcrumb-item active"><a href="{{url ('/adminpanel/users/'.$userEdit->id.'/edit')}}">
                                Edit
                                {{$userEdit->name}}
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

                        {!! Form::model($userEdit ,['route' => ['users.update' , $userEdit->id] ,'method' =>'PATCH']) !!}
                            @include('admin.user.form')
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--Change password section --}}
    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Change Password</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        {!! Form::open(['url' => url('adminpanel/user/changepassword/') ,'method' =>'post']) !!}

                        <input type="hidden" value="{{$userEdit->id}}" name="userID">

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    change password
                                </button>
                            </div>
                        </div>
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section("footer")


@endsection