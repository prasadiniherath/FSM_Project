<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="img/SPC_CONS.png" alt="SPC Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light"><b>SPC Constructions</b></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
{{--        <div class="user-panel mt-3 pb-3 mb-3 d-flex">--}}
{{--            <div class="image">--}}
{{--                <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">--}}
{{--            </div>--}}
{{--            <div class="info">--}}
{{--                <a href="#" class="d-block">Alexander Pierce</a>--}}
{{--            </div>--}}
{{--        </div>--}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="./User" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Users</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="./Product" class="nav-link">
                        <i class="nav-icon fas fa-shopping-bag"></i>
                        <p>Products</p>
                    </a>
                </li>

{{--                <li class="nav-item">--}}
{{--                <div class="{{ 'User' == request()->path() ? "nav-link active" : ''}}">--}}
{{--                    <a href="./User" class="nav-link">--}}
{{--                        <i class="nav-icon fas fa-chart-line"></i>--}}
{{--                        <p>User</p>--}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                </li>--}}

                <li class="nav-item">
                    <a href="./shop" class="nav-link">
                        <i class="nav-icon fas fa-shopping-cart"></i>
                        <p>Shops</p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="./route" class="nav-link">
                        <i class="nav-icon fas fa-route"></i>
                        <p>Routes</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="./report" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Reports</p>
                    </a>
                </li>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
