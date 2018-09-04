@extends('layouts.app')

@section("title")

    Welcome Page

@endsection

@section('header')

    {{ Html::style('home/css/reset.css') }}
    {{ Html::style('home/css/style.css') }}
    {{ Html::script('home/js/modernizr.js') }}

{{--
    <link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
    <link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
    <script src="js/modernizr.js"></script> <!-- Modernizr -->
--}}

@endsection

@section("content")
    <div class="banner text-center">
        <div class="container">
            <div class="banner-info">
                <h1> Welcome to {{ getSetting() }}</h1>

                {!! Form::open(['url' => 'search', 'method' => 'get']) !!}
                        <div class="row">
                            <div class="col-lg-3">
                                {!! Form::text('bu_price_from',null, ['class' => 'form-control', 'placeholder' => 'Price From']) !!}
                            </div>
                            <div class="col-lg-3">
                                {!! Form::text('bu_price_to',null, ['class' => 'form-control', 'placeholder' => 'Price To']) !!}
                            </div>
                            <div class="col-lg-3">
                                {!! Form::select('bu_rooms',roomNumber(),null, ['class' => 'form-control', 'placeholder' => 'Number of rooms']) !!}
                            </div>

                            <div class="col-lg-3">
                                {!! Form::select('bu_type',buType(),null, ['class' => 'form-control', 'placeholder' => 'Type of Build']) !!}
                            </div>
                        </div>
                     <br>
                        <div class="row">
                            <div class="col-lg-3">
                                {!! Form::submit('search', ['class' => 'btn', 'style' => 'width:100%']) !!}
                            </div>
                            <div class="col-lg-3">
                                {!! Form::select('bu_place',buCountry(),null, ['class' => 'form-control select2', 'placeholder' => 'Country']) !!}
                            </div>
                            <div class="col-lg-3">
                                {!! Form::select('bu_rent',buRent(),null, ['class' => 'form-control', 'placeholder' => 'Type of Operation']) !!}
                            </div>
                            <div class="col-lg-3">
                                {!! Form::text('bu_square',null, ['class' => 'form-control', 'placeholder' => 'Square of Build']) !!}
                            </div>

                        </div>
                {!! form::close() !!}
            </div>
                <a class="banner_btn" href="{{ url('/showAllBuilding') }}">More</a>
        </div>
    </div>


    <div class="main">

        <ul class="cd-items cd-container">
            <li class="cd-item">
                <img src="home/img/item-1.jpg" alt="Item Preview">
                <a href="#0" class="cd-trigger">Quick View</a>
            </li> <!-- cd-item -->

            <li class="cd-item">
                <img src="home/img/item-1.jpg" alt="Item Preview">
                <a href="#0" class="cd-trigger">Quick View</a>
            </li> <!-- cd-item -->

            <li class="cd-item">
                <img src="home/img/item-1.jpg" alt="Item Preview">
                <a href="#0" class="cd-trigger">Quick View</a>
            </li> <!-- cd-item -->

            <li class="cd-item">
                <img src="home/img/item-1.jpg" alt="Item Preview">
                <a href="#0" class="cd-trigger">Quick View</a>
            </li> <!-- cd-item -->

            <li class="cd-item">
                <img src="home/img/item-1.jpg" alt="Item Preview">
                <a href="#0" class="cd-trigger">Quick View</a>
            </li> <!-- cd-item -->

            <li class="cd-item">
                <img src="home/img/item-1.jpg" alt="Item Preview">
                <a href="#0" class="cd-trigger">Quick View</a>
            </li> <!-- cd-item -->

            <li class="cd-item">
                <img src="home/img/item-1.jpg" alt="Item Preview">
                <a href="#0" class="cd-trigger">Quick View</a>
            </li> <!-- cd-item -->

            <li class="cd-item">
                <img src="home/img/item-1.jpg" alt="Item Preview">
                <a href="#0" class="cd-trigger">Quick View</a>
            </li> <!-- cd-item -->

            <li class="cd-item">
                <img src="home/img/item-1.jpg" alt="Item Preview">
                <a href="#0" class="cd-trigger">Quick View</a>
            </li> <!-- cd-item -->

            <li class="cd-item">
                <img src="home/img/item-1.jpg" alt="Item Preview">
                <a href="#0" class="cd-trigger">Quick View</a>
            </li> <!-- cd-item -->

            <li class="cd-item">
                <img src="home/img/item-1.jpg" alt="Item Preview">
                <a href="#0" class="cd-trigger">Quick View</a>
            </li> <!-- cd-item -->

            <li class="cd-item">
                <img src="home/img/item-1.jpg" alt="Item Preview">
                <a href="#0" class="cd-trigger">Quick View</a>
            </li> <!-- cd-item -->
        </ul> <!-- cd-items -->

        <div class="cd-quick-view">
            <div class="cd-slider-wrapper">
                <ul class="cd-slider">
                    <li class="selected"><img src="home/img/item-1.jpg" alt="Product 1"></li>
                    <li><img src="home/img/item-2.jpg" alt="Product 2"></li>
                    <li><img src="home/img/item-3.jpg" alt="Product 3"></li>
                </ul> <!-- cd-slider -->

                <ul class="cd-slider-navigation">
                    <li><a class="cd-next" href="#0">Prev</a></li>
                    <li><a class="cd-prev" href="#0">Next</a></li>
                </ul> <!-- cd-slider-navigation -->
            </div> <!-- cd-slider-wrapper -->

            <div class="cd-item-info">
                <h2>Produt Title</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia, omnis illo iste ratione. Numquam eveniet quo, ullam itaque expedita impedit. Eveniet, asperiores amet iste repellendus similique reiciendis, maxime laborum praesentium.</p>

                <ul class="cd-item-action">
                    <li><button class="add-to-cart">Add to cart</button></li>
                    <li><a href="#0">Learn more</a></li>
                </ul> <!-- cd-item-action -->
            </div> <!-- cd-item-info -->
            <a href="#0" class="cd-close">Close</a>
        </div> <!-- cd-quick-view -->

    </div>
@endsection

@section('footer')

    {{ Html::script('home/js/jquery-2.1.1.js') }}
    {{ Html::script('home/js/velocity.min.js') }}
    {{ Html::script('home/js/main.js') }}
{{--
    <script src="{{ Request::root() }}/home/js/jquery-2.1.1.js"></script>
    <script src="js/velocity.min.js"></script>
    <script src="js/main.js"></script> <!-- Resource jQuery -->--}}
@endsection