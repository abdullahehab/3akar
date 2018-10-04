@extends('layouts.app')

@section("title")

    Welcome Page

@endsection

@section('header')

    {{ Html::style('home/css/reset.css') }}
    {{ Html::style('home/css/style.css') }}
    {{ Html::script('home/js/modernizr.js') }}
    {{Html::style('custom/select2/css/select2.css') }}


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
                <a class="banner_btn" href="{{ url('/user/create/build') }}">Add New Build For Free</a>
        </div>
    </div>


    <div class="main">

        <ul class="cd-items cd-container">
            @foreach(\App\bu::where('bu_status' , 1)->get() as $bu)
                <li class="cd-item">
                    <img src="/bu_image/{{$bu->bu_image}}" alt="{{ $bu->bu_name }}">
                    <a href="#0" data-id="{{ $bu->id }}" class="cd-trigger">Quick View</a>
                </li> <!-- cd-item -->
            @endforeach
        </ul> <!-- cd-items -->

        <div class="cd-quick-view">
            <div class="cd-slider-wrapper">
                <ul class="cd-slider">
                    <img src=""  class="imageBox" alt="Product 1">
                </ul> <!-- cd-slider -->

            </div> <!-- cd-slider-wrapper -->

            <div class="cd-item-info">
                <h2 class="titleBox"></h2>
                <p class="disBox"></p>

                <ul class="cd-item-action">
                    <li><a href="" class="add-to-cart priceBox"></a></li>
                    <li><a href="#0" class="moreBox">Learn more</a></li>
                </ul> <!-- cd-item-action -->
            </div> <!-- cd-item-info -->
            <a href="#0" class="cd-close">Close</a>
        </div> <!-- cd-quick-view -->

        {{--

          <div class="cd-quick-view">
              <div class="cd-slider-wrapper">
                  <ul class="cd-slider">
                      <li class="selected"><img src="" class="imageBox" alt="Product 1"></li>
                  </ul> <!-- cd-slider -->
              </div> <!-- cd-slider-wrapper -->
          </div>


              <div class="cd-item-info">
                  <h2 class="titleBox"></h2>
                  <p class="disBox"></p>

                  <ul class="cd-item-action">
                      <li><a href="" class="add-to-cart priceBox"></a></li>
                      <li><a href="" class="moreBox">Read more</a></li>
                  </ul> <!-- cd-item-action -->
              </div> <!-- cd-item-info -->
              <a href="#0" class="cd-close">Close</a>
      </div>--}}

    </div>
@endsection

@section('footer')

    {{ Html::script('home/js/jquery-2.1.1.js') }}
    {{ Html::script('home/js/velocity.min.js') }}
    {{ Html::script('home/js/main.js') }}
    {!! Html::script('custom/select2/js/select2.js') !!}
    <script>
        function urlHome(){
            return '{{ Request::root() }}';
        }

        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>

@endsection