<div class="col-md-3">
    <div class="profile-sidebar">
        <h2 style="margin-left: 20px">
            Advanced Search
        </h2>
        <div  class="profile-usermenu" style="padding: 10px;">
            {!! Form::open(['url' => 'search', 'method' => 'get']) !!}
            <ul class="nav">

                <li class="itemSearch">
                    {!! Form::text('bu_price_from',null, ['class' => 'form-control', 'placeholder' => 'Price From']) !!}
                </li>
                <li class="itemSearch">
                    {!! Form::text('bu_price_to',null, ['class' => 'form-control', 'placeholder' => 'Price To']) !!}
                </li>

                <li class="itemSearch">
                    {!! Form::select('bu_rooms',roomNumber(),null, ['class' => 'form-control', 'placeholder' => 'Number of rooms']) !!}
                </li>

                <li class="itemSearch">
                    {!! Form::select('bu_place',buCountry(),null, ['class' => 'form-control select2', 'placeholder' => 'Country']) !!}
                </li>


                <li class="itemSearch">
                    {!! Form::select('bu_type',buType(),null, ['class' => 'form-control', 'placeholder' => 'Type of Build']) !!}
                </li>

                <li class="itemSearch">
                    {!! Form::select('bu_rent',buRent(),null, ['class' => 'form-control', 'placeholder' => 'Type of Operation']) !!}
                </li>

                <li class="itemSearch">
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



    <br>

<!-- user side bar -->
@if(Auth::user())
    <div class="profile-sidebar">
        <h2 style="margin-left: 20px">
            User Options
        </h2>
        <div class="profile-usermenu">
            <ul class="nav">
                <li>
                    <a href="{{url('showAllBuilding')}}">
                        <i class="glyphicon glyphicon-home"></i>
                        Edit User Info </a>
                </li>
                <li>
                    <a href="{{url('usr/buildShow')}}">
                        <i class="glyphicon glyphicon-user"></i>
                        My Builds </a>
                </li>
                <li>
                    <a href="{{url('user/create/build')}}">
                        <i class="glyphicon glyphicon-ok"></i>
                        Add New Build
                    </a>
                </li>
            </ul>
        </div>
        <!-- END MENU -->
    </div>
@endif   
</div>