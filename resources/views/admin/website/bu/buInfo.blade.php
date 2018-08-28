@extends('layouts.app')

@section('title')

    Build {{ $buInfo->bu_name }}

@endsection

@section('header')

    {!! Html::style('custom/buall.css') !!}
    {!! Html::style('custom/sidebar.css') !!}
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

                    <h1>
                        {{ $buInfo->bu_name }}
                    </h1>
                    <hr>

                    <div class="btn-group" role="group">
                        <a href="{{ url('/search/?bu_price='.$buInfo->bu_price) }}" class="btn btn-default">
                            Price : {{ $buInfo->bu_price }}
                        </a>
                        <a href="{{ url('/search/?bu_square='.$buInfo->bu_square) }}" class="btn btn-default">
                            Square : {{ $buInfo->bu_square }}
                        </a>

                        <a href="{{ url('/search/?bu_place='.$buInfo->bu_place) }}" class="btn btn-default">
                            Country : {{ buCountry()[$buInfo->bu_place] }}
                        </a>

                        <a href="{{ url('/search/?bu_rooms='.$buInfo->bu_rooms) }}" class="btn btn-default">
                            Number Of Rooms : {{ $buInfo->bu_rooms }}
                        </a>

                        <a href="{{ url('/search/?bu_rent='.$buInfo->bu_rent) }}" class="btn btn-default">
                            Type Of Operation : {{ buRent()[$buInfo->bu_rent] }}
                        </a>

                        <a href="{{ url('/search/?bu_type='.$buInfo->bu_type) }}" class="btn btn-default">
                            Type Of Build : {{ buType()[$buInfo->bu_type] }}
                        </a>
                    </div>
                    <hr>
                    <p>
                        {!!  nl2br($buInfo->bu_large_dis) !!}
                    </p>





            </div>

                <br>

                {{-- Return Related Buids in rent and type --}}
                <div class="profile-content">
                    <h3>Related Builds</h3>
                    @include('admin.website.bu.shareFile', ['bu' => $same_rent])
                    @include('admin.website.bu.shareFile', ['bu' => $same_type])
                </div>
        </div>
    </div>
        <br>
        <br>
    </div>

@endsection
