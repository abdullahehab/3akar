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
                      Advanced Search
                  </h2>
                    <div  class="profile-usermenu" style="padding: 10px;">
                        {!! Form::open(['url' => 'search', 'action' => 'post']) !!}
                            <ul class="nav">
                                <li>
                                    {!! Form::text('bu_price',null, ['class' => 'form-control', 'placeholder' => 'price of build']) !!}
                                </li>

                                <li>
                                    {!! Form::select('bu_rooms',roomNumber(),null, ['class' => 'form-control', 'placeholder' => 'Number of rooms']) !!}
                                </li>

                                <li>
                                    {!! Form::select('bu_type',buType(),null, ['class' => 'form-control', 'placeholder' => 'Type of Build']) !!}
                                </li>

                                <li>
                                    {!! Form::select('bu_rent',buRent(),null, ['class' => 'form-control', 'placeholder' => 'Type of Operation']) !!}
                                </li>

                                <li>
                                    {!! Form::text('bu_square',null, ['class' => 'form-control', 'placeholder' => 'Square of Build']) !!}
                                </li>

                                <li>
                                    {!! Form::submit('search', ['class' => 'banner_btn']) !!}
                                </li>

                            </ul>
                        {!! form::close() !!}
                    </div>
                    <!-- END MENU -->
                </div>

                <br> {{-- Break line between two forms--}}


                <div class="profile-sidebar">
                    <h2 style="margin-left: 20px">
                        Website Options
                    </h2>
                    <div class="profile-usermenu">
                        <ul class="nav">
                            <li>
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

                    <div class="text-center">
                        @if(!isset($search))
                        {{ $buAll->appends(Request::except('page'))->links() }}
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    
@endsection
