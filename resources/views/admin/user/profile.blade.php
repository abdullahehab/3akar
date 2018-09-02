@extends('layouts.app')

@section('title')

    Profile page

@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <h2 class="panel-heading">{{$user->name}} Profile</h2>
                    <div class="panel-body">
                        <img src="/userImage/{{$user->avatar}}" style="width:150px; height: 150px; float: left; border-radius: 50%; margin-right: 25px" alt="Profile photo">
                        <h2 class="col-md-4">{{$user->name}}</h2>

                        {!! Form::open(['url' => url('/profile') ,'method' =>'post' , 'files' => true]) !!}

                        <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
                            <div class="col-md-6">
                                {!! Form::file('avatar' , null , ['class' => "form-control"]) !!}

                                @if ($errors->has('avatar'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('avatar') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-1 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    submit
                                </button>
                            </div>
                        </div>


                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
