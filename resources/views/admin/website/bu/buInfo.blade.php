@extends('layouts.app')

@section('title')

    Build {{ $buInfo->bu_name }}

@endsection

@section('header')

    {!! Html::style('custom/buall.css') !!}
    <style>
        .itemSearch{
            margin-bottom: 10px;
        }
        .breadcrumb{
            background-color: white;
        }
    </style>

@endsection

@section('content')

    <div class="container">
        <div class="row profile">


            @include('admin.website.bu.sideBar')



            <div class="col-md-9">

                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li ><a href="{{ url('showAllBuilding') }}">All Builds</a></li>
                    <li ><a href="{{ url('singleBuilding/'.$buInfo->id) }}">{{ $buInfo->bu_name }}</a></li>
                </ol>

                <div class="profile-content">


            </div>
        </div>
    </div>
    <br>
    <br>


@endsection
