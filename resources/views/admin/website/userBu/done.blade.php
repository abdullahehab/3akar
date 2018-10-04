@extends('layouts.app')

@section('title')

    Build Added Successfully

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
                    <li class="breadcrumb-item active"><a href="#">Build Added Successfully</a></li>
                </ol>

                <div class="profile-content">
                    <div class="alter alter-success">
                        <b>
                            Build Added
                        </b>
                        Successfully
                    </div>


                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    
@endsection
