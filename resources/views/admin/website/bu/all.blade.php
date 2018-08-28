@extends('layouts.app')

@section('title')

    All Builds

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
                    <li class="breadcrumb-item">Result</li>
                    @if(isset($array))
                        @if(!empty($array))
                            @foreach($array as $key => $value)
                                <li class="breadcrumb-item">
                                    {{searchNameFiled()[$key]}} =
                                        @if($key == 'bu_rent')
                                            {{ buRent()[$value] }}
                                        @elseif($key == 'bu_type')
                                            {{ buType()[$value] }}
                                        @elseif($key == 'bu_place')
                                            {{ buCountry()[$value] }}
                                        @else
                                        {{$value}}
                                        @endif
                                </li>
                            @endforeach
                        @endif
                     @endif
                </ol>

                <div class="profile-content">

                    @include('admin.website.bu.shareFile',[ 'bu' => $buAll] )

                    <div class="text-center">
                        {{ $buAll->appends(Request::except('page'))->links() }}
                    </div>

                </div>
            </div>
        </div>
    </div>
    <br>
    <br>

    
@endsection
