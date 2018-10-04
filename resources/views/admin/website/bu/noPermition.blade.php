@extends('layouts.app')

@section('title')

    This Builds wait Permission

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
                    <li><a href="{{ url('/showAllBuilding') }}">All Building</a></li>
                    <li><a href="{{ url('/showAllBuilding/'.$buInfo->id) }}">{{ $buInfo->bu_name }}</a></li>
            
                </ol>

                <div class="profile-content">

                    <div class="alert alert-gander">
                        This Builds wait Permission To Share Online
                    </div>



                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    
@endsection
