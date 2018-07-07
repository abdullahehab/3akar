@extends('layouts.app')

@section('title')

    All Real Estate

@endsection

@section('header')

    {!! Html::style('custom/buall.css') !!}

@endsection

@section('content')

    <div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                  <h2 style="margin-left: 20px">
                      Website Options
                  </h2>
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li class="active">
                                <a href="{{url('showAllBuilding')}}">
                                    <i class="glyphicon glyphicon-home"></i>
                                    All Buildings </a>
                            </li>
                            <li>
                                <a href="{{url('forRentOrSale/1')}}">
                                    <i class="glyphicon glyphicon-user"></i>
                                    for Rent </a>
                            </li>
                            <li>
                                <a href="{{url('forRentOrSale/0')}}">
                                    <i class="glyphicon glyphicon-ok"></i>
                                    For Sale
                                </a>
                            </li>
                            <li>
                                <a href="{{url('type/0')}}">
                                    <i class="glyphicon glyphicon-flag"></i>
                                    Flats
                                </a>
                            </li>
                            <li>
                                <a href="{{url('type/2')}}">
                                    <i class="glyphicon glyphicon-flag"></i>
                                    Chalets
                                </a>
                            </li>
                            <li>
                                <a href="{{url('type/1')}}">
                                    <i class="glyphicon glyphicon-flag"></i>
                                    villa </a>
                            </li>

                        </ul>
                    </div>
                    <!-- END MENU -->
                </div>
            </div>

            <div class="col-md-9">
                <div class="profile-content">

                    @include('admin.website.bu.shareFile',[ 'bu' => $buAll] )

                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    
@endsection
