<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                    Site Setting
                    <i class="right fa fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('/adminpanel/sitesetting')}}" class="nav-link active">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Main Settings</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index2.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Dashboard v2</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./index3.html" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Dashboard v3</p>
                    </a>
                </li>
            </ul>
        </li>

    </ul>
</nav>
<!-- /.sidebar-menu -->




{{--- User nav bar --}}

<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                    Users Control
                    <i class="right fa fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('/adminpanel/users')}}" class="nav-link active">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>View all users</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/adminpanel/users/create')}}" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Add new user</p>
                    </a>
                </li>

            </ul>
        </li>

    </ul>
</nav>
<!-- /.sidebar-menu -->





{{--- bu nav bar --}}

<!-- Sidebar Menu -->
<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
                <i class="nav-icon fa fa-dashboard"></i>
                <p>
                    Builds Control
                    <i class="right fa fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{url('/adminpanel/bu')}}" class="nav-link active">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>View all Builds</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('/adminpanel/bu/create')}}" class="nav-link">
                        <i class="fa fa-circle-o nav-icon"></i>
                        <p>Add new Builds</p>
                    </a>
                </li>

            </ul>
        </li>

    </ul>
</nav>
<!-- /.sidebar-menu -->