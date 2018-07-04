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
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            Marcus Doe
                        </div>
                        <div class="profile-usertitle-job">
                            Developer
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    <!-- SIDEBAR BUTTONS -->
                    <div class="profile-userbuttons">
                        <button type="button" class="btn btn-success btn-sm">Follow</button>
                        <button type="button" class="btn btn-danger btn-sm">Message</button>
                    </div>
                    <!-- END SIDEBAR BUTTONS -->
                    <!-- SIDEBAR MENU -->
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
