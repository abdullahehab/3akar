<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>

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

    <title>3akar | @yield("title")</title>

    @yield("header")

</head>
<body>
    <div class="header">
        <div class="container"> <a class="navbar-brand" href="{{url('/')}}"><i class="fa fa-paper-plane"></i> ONE</a>
            <div class="menu"> <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /> </a>
                <ul class="nav" id="nav">
                    <li class="current"><a href="{{url('home')}}">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <!-- Authentication Links -->
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
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
                            @endguest
                    <div class="clear"></div>
                </ul>
            </div>
        </div>
    </div>


    @yield('content')

    <div class="footer">
        <div class="footer_bottom">
            <div class="follow-us"> <a class="fa fa-facebook social-icon" href="#"></a> <a class="fa fa-twitter social-icon" href="#"></a> <a class="fa fa-linkedin social-icon" href="#"></a> <a class="fa fa-google-plus social-icon" href="#"></a> </div>
            <div class="copy">
                <p>Copyright &copy; 2015 Company Name. Design by <a href="http://www.templategarden.com" rel="nofollow">TemplateGarden</a></p>
            </div>
        </div>
    </div>


    @yield("footer ")
    <!-- Scripts -->
    {{Html::script('website/js/app.js')}}
    {{Html::script('website/js/bootstrap.min.js')}}
    {{Html::script('website/js/jquery.flexslider.js')}}
    {{Html::script('website/js/responsive-nav.js')}}
</body>
</html>
