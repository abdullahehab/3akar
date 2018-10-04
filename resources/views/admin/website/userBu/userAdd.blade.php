@extends('layouts.app')

@section('title')

    Add New Build

@endsection

@section('header')

    {!! Html::style('custom/buall.css') !!}
    {{--{!! Html::style('custom/test.css') !!}--}}
    {!! Html::style('custom/sidebar.css') !!}
@endsection

@section('content')

    <div class="container">
        <div class="row profile">


           @include('admin.website.bu.sideBar')



            <div class="col-md-9">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item">Result</li>
                    <li class="breadcrumb-item"><a href="{{ url('/user/create/build') }}">Add New Build</a></li>
                </ol>

                <div class="profile-content">


                    {!! Form::open( ['url' => '/user/create/build' , 'method' => 'post', 'files' => 'true'] ) !!}
                    @include('admin.bu.form', ['user' => 1])
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    
@endsection
