@extends('admin.layouts.layouts')

@section('title')

    Edit
    {{$contactUs->contact_name}}
    Message

@endsection


@section("header")


@endsection


@section('content')

    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit {{$contactUs->contact_name}} Info</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url ('/adminpanel')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url ('/adminpanel/contactUs')}}">Message Control</a>
                        <li class="breadcrumb-item active"><a href="{{url ('/adminpanel/contactUs/'.$contactUs->id.'/edit')}}">
                                Edit
                                {{$contactUs->contact_name}}
                                Message
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

                        {!! Form::model($contactUs ,['route' => ['contactUs.update' , $contactUs->id] ,'method' =>'PATCH']) !!}
                            @include('admin.contact.form')
                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section("footer")


@endsection