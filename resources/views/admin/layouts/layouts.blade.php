<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{getSetting()}} Admin Panel | @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Font Awesome -->
    {{Html::style('admin/plugins/font-awesome/css/font-awesome.min.css')}}
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    {{Html::style('admin/dist/css/adminlte.min.css')}}
    <!-- iCheck -->
    {{Html::style('admin/plugins/iCheck/flat/blue.css')}}
    <!-- Morris chart -->
    {{Html::style('admin/plugins/morris/morris.css')}}
    <!-- jvectormap -->
    {{Html::style('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.css')}}
    <!-- Date Picker -->
    {{Html::style('admin/plugins/datepicker/datepicker3.css')}}
    <!-- Daterange picker -->
    {{Html::style('admin/plugins/daterangepicker/daterangepicker-bs3.css')}} <link rel="stylesheet" href="">
    <!-- bootstrap wysihtml5 - text editor -->
    {{Html::style('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css')}}<link rel="stylesheet" href="">
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    @yield('header')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{url('/')}}" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="{{url('/adminpanel/sitesetting')}}" class="nav-link">Site Setting</a>
            </li>
        </ul>

        <!-- SEARCH FORM -->
        <form class="form-inline ml-3">
            <div class="input-group input-group-sm">
                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
        </form>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">
            <!-- Messages Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fa fa-comments-o"></i>
                    <span class="badge badge-danger navbar-badge">
                        {{ countUnReadMessage() }}
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">You Have {{ countUnReadMessage() }} Messages Un Read</span>
                    @if(countUnReadMessage() != 0)
                        @foreach(unReadMessage() as $keyMessage => $message)
                    <a href="{{ url('adminpanel/contactUs/'.$message->id.'/edit') }}" class="dropdown-item">
                        <!-- Message Start -->
                            <div class="media">
                                <img src="/userImage/{{Auth::user()->avatar}}" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                                    <div class="media-body">
                                        <h3 class="dropdown-item-title">
                                                {{ $message->contact_name }}
                                                <span class="float-right text-sm text-danger"><i class="fa fa-star"></i></span>
                                        </h3>
                                        <p class="text-sm">{{ str_limit($message->contact_message, 20) }}</p>
                                        <p class="text-sm text-muted"><i class="fa fa-clock-o mr-1"></i>{{ $message->created_at }}</p>
                                    </div>
                            </div>
                        <!-- Message End -->
                    </a>
                        @endforeach
                    @else
                        <a href="" class="dropdown-item">
                            <div class="media">
                                No Message To Show
                            </div>
                        </a>
                    @endif

                    <div class="dropdown-divider"></div>

                    <a href="{{ url('adminpanel/contactUs') }}" class="dropdown-item dropdown-footer">See All Messages</a>
                </div>
            </li>
            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell-o"></i>
                    <span class="badge badge-warning navbar-badge">15</span>
                </a>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                    <span class="dropdown-item dropdown-header">15 Notifications</span>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-envelope mr-2"></i> 4 new messages
                        <span class="float-right text-muted text-sm">3 mins</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-users mr-2"></i> 8 friend requests
                        <span class="float-right text-muted text-sm">12 hours</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">
                        <i class="fa fa-file mr-2"></i> 3 new reports
                        <span class="float-right text-muted text-sm">2 days</span>
                    </a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#"><i
                            class="fa fa-th-large"></i></a>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{url('adminpanel')}}" class="brand-link">
            <img src="../../../../admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                 style="opacity: .8">
            <span class="brand-text font-weight-light">Admin Panel</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebanav-item has-treeviewr">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/userImage/{{Auth::user()->avatar}}" class="img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="{{ url('profile') }}" class="d-block">{{Auth::user()->name}}</a>
                </div>
            </div>

        @include('admin.layouts.nav')

        </div>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        @yield("content")
    </div>



    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-2018 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
            <b>Version</b> 3.0.0-alpha
        </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->


    <!-- jQuery -->
    {{Html::script('admin/plugins/jquery/jquery.min.js')}}
    <!-- jQuery UI 1.11.4 -->
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    {{Html::script('admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    {{Html::script('admin/plugins/morris/morris.min.js')}}
    <!-- Sparkline -->
    {{Html::script('admin/plugins/sparkline/jquery.sparkline.min.js')}}
    <!-- jvectormap -->
    {{Html::script('admin/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}
    {{Html::script('admin/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}
    <!-- jQuery Knob Chart -->
    {{Html::script('admin/plugins/knob/jquery.knob.js')}}
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    {{Html::script('admin/plugins/daterangepicker/daterangepicker.js')}}
    <!-- datepicker -->
    {{Html::script('admin/plugins/datepicker/bootstrap-datepicker.js')}}
    <!-- Bootstrap WYSIHTML5 -->
    {{Html::script('admin/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js')}}
    <!-- Slimscroll -->
    {{Html::script('admin/plugins/slimScroll/jquery.slimscroll.min.js')}}
    <!-- FastClick -->
    {{Html::script('admin/plugins/fastclick/fastclick.js')}}
    <!-- AdminLTE App -->
    {{Html::script('admin/dist/js/adminlte.js')}}
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    {{Html::script('admin/dist/js/pages/dashboard.js')}}
    <!-- AdminLTE for demo purposes -->
    {{Html::script('admin/dist/js/demo.js')}}
{!! Html::script('https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js') !!}
@include('sweetalert::alert')
@yield('footer')
</body>
</html>
