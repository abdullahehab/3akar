@extends('admin.layouts.layouts')

@section('title')

    Site Settings

@endsection


@section("header")


@endsection


@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Site Settings</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('/adminpanel')}}">Home</a></li>
                        <li class="breadcrumb-item active"><a href="{{url ('/adminpanel/sitesetting')}}">Edit Site Setting</a>
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
                        <h3 class="card-title">Site Settings</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">

                        <form action="{{url ('/adminpanel/sitesetting')}}" method="post">
                            {{csrf_field()}}

                        @foreach($siteSetting as $setting)

                            <div class="form-group{{ $errors->has($setting->namesetting) ? ' has-error' : '' }}">
                                <label for="name" class="col-md-3 control-label">{{$setting->slug}}</label>

                                <div class="col-md-9">
                                    @if($setting->type == 0)
                                        {!! Form::text($setting->namesetting , $setting->value , ['class' => "form-control"]) !!}
                                    @else
                                        {!! Form::textarea($setting->namesetting , $setting->value , ['class' => "form-control"]) !!}
                                    @endif
                                    @if ($errors->has($setting->namesetting))
                                        <span class="help-block">
                                        <strong>{{ $errors->first($setting->namesetting) }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                        @endforeach

                            <button name="submit" type="submit" class="btn btn-app">
                                <i class="fa fa-save"></i>
                                Save
                            </button>

                        </form>


                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section("footer")


@endsection