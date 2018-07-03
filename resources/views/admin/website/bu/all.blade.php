@extends('layouts.app')

@section('title')

    All Real Estate

@endsection

@section('header')

    {!! Html::style('custom/buall.css') !!}

@endsection

@section('content')

    <div class="container">

           @include('admin.website.bu.shareFile',[ 'bu' => $buAll] )
    </div>
@endsection
