<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

    <style>

        .elevation-2 {
            box-shadow: 0 3px 6px rgba(0,0,0,.16), 0 3px 6px rgba(0,0,0,.23);
            width: 2.1rem;
            height: auto;
        }
    </style>

    @yield("header")

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"></title>
    {{Html::style('website/css/bootstrap.min.css')}}
    <link href="" rel="stylesheet" />
    {{Html::style('website/css/flexslider.css')}}
    <link href="" rel="stylesheet" />
    {{Html::style('website/css/style.css')}}
    <link href="" rel="stylesheet" />
    {{Html::style('website/css/font-awesome.min.css')}}
    <link rel="stylesheet" href="">
    {{Html::script('website/js/jquery.min.js')}}
    <script src=""></script>
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>

    <title> {{getSetting()}} | @yield("title")</title>

    {{-- Select2 --}}
    {!! Html::style('custom/select2/css/select2.css') !!}



</head>
<body>
    <div class="header">
        <div class="container"> <a class="navbar-brand" href="{{url('/')}}"><i class="fa fa-paper-plane"></i> ONE</a>
            <div class="menu"> <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /> </a>
                <ul class="nav" id="nav">
                    <li class="current"><a href="{{url('home')}}">Home</a></li>
                    {{-- Call isUser Directive to check user is login --}}
                    @isUser
                    <li><a href="{{url('showAllBuilding')}}">All Buildings</a></li>
                    @endif

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                            For Rent <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            @foreach(buType() as $keyType => $type)
                            <li style="width: 100%">
                                <a href="{{ url('/search?bu_rent=1&bu_type='.$keyType) }}">
                                    {{ $type  }}
                                </a>

                            </li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                            For Sale <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu">
                            @foreach(buType() as $keyType => $type)
                                <li style="width: 100%">
                                    <a href="{{ url('/search?bu_rent=0&bu_type='.$keyType) }}">
                                        {{ $type  }}
                                    </a>

                                </li>
                            @endforeach
                        </ul>
                    </li>

                    <li><a href="contact.html">Contact Us</a></li>
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else

                        <a href="{{ url('/profile') }}"><img src="/userImage/{{Auth::user()->avatar}}" class="img-circle elevation-2" alt="User Image"></a>
                        <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ url('/profile') }}" class="fa fa-btn fa-user">
                                            Profile
                                        </a>
                                        <a href="{{ route('logout') }}" class="fa fa-btn fa-sign-out"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>

                         {{-- Call directive is admin--}}
                            @isAdmin
                            <li><a href="{{url('adminpanel')}}" target="_blank">admin panel</a></li>
                            @endif
                    @endguest


                    <div class="clear"></div>
                </ul>
            </div>
        </div>
    </div>


    @yield('content')

    <div class="footer">
        <div class="footer_bottom">
            <div class="follow-us">
                <a class="fa fa-facebook social-icon" href="{{getSetting('facebook')}}"></a>
                <a class="fa fa-twitter social-icon" href="{{getSetting('twitter')}}"></a>
                <a class="fa fa-linkedin social-icon" href="#"></a>
                <a class="fa fa-youtube social-icon" href="{{getSetting('youtube')}}"></a> </div>
            <div class="copy">
                <p>Copyright &copy; 2015 Company Name. Design by <a href="http://www.templategarden.com" rel="nofollow">TemplateGarden</a></p>
            </div>
        </div>
    </div>



    <!-- Scripts -->
    {{Html::script('website/js/app.js')}}
    {{Html::script('website/js/bootstrap.min.js')}}
    {{Html::script('website/js/jquery.flexslider.js')}}
    {{Html::script('website/js/responsive-nav.js')}}
    {{--Select2 --}}
    {!! Html::script('custom/select2/js/select2.js') !!}
    @yield("footer")
    <script type="text/javascript">

        // In your Javascript (external .js resource or <script> tag)
        $(document).ready(function() {
            $('.select2').select2();
        });

    </script>
</body>
</html>
