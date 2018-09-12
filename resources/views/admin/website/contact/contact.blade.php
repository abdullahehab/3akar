@extends('layouts.app')

@section('title')

    Contact Us

@endsection

@section('header')

    {!! Html::style('custom/buall.css') !!}

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
    <br>
    <br>
    <div class="container">
        <h1>Contact Us</h1>
        <div class="row">
            <div class="col-md-8">
                <div class="well well-sm">
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Name</label>
                                    <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                                </div>
                                <div class="form-group">
                                    <label for="email">
                                        Email Address</label>
                                    <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" value="{{ \Illuminate\Support\Facades\Auth::user() ? Auth::user()->email : '' }}" required="required" /></div>
                                </div>
                                <div class="form-group">
                                    <label for="subject">
                                        Subject</label>
                                    <select id="subject" name="subject" class="form-control" required="required">
                                        @foreach(contact() as $key => $value)
                                            <option value="{{ $key }}" >{{ $value }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">
                                        Message</label>
                                    <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                              placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                    Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <form>
                    <legend><span class="fa fa-outdoor"></span> Our office</legend>
                    <address>
                        Address : {{ getSetting('address') }}
                        <br>
                        Phone : {{ getSetting('mobile') }}
                    </address>
                    <address>
                        <strong>{{ getSetting() }}</strong><br>
                        <a href="mailto:#">{{  getSetting('email')  }}</a>
                    </address>
                </form>
            </div>
        </div>
    </div>

@endsection


