@extends('layouts.app')

@section('title')

    {{ $user->name }}}'s Buildings

@endsection

@section('header')

    {!! Html::style('custom/buall.css') !!}
    {{--{!! Html::style('custom/test.css') !!}--}}
    {!! Html::style('custom/sidebar.css') !!}

    <style>
        .itemSearch{
            margin-bottom: 10px;
        }
        .breadcrumb{
            background-color: white;
        }

        .text-justify {
            margin-bottom: 10px;
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
                    <li><a href="{{ url('/showAllBuilding') }}">All Building</a></li>
                    <li class="active"><a href="#">{{ $user->name }}}'s Buildings</a></li>
          
                </ol>

                <div class="profile-content">

                    @include('admin.website.bu.shareFile',[ 'bu' => $bu] )

                    <div class="text-center">
                        {{ $bu->appends(Request::except('page'))->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    
@endsection
