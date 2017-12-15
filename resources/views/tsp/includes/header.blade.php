<header class="main-header">

    <!-- Logo -->
    <a href="{{ url('/home') }}" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>TSP </b>Panel</span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Messages: style can be found in dropdown.less-->
                <li class="dropdown messages-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="label label-success"></span>
                    </a>
                </li>
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>
                        <span class="label label-warning"></span>
                    </a>
                </li>
                <!-- Tasks: style can be found in dropdown.less -->
                <li class="dropdown tasks-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-flag-o"></i>
                        <span class="label label-danger"></span>
                    </a>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        {{--<img src="{{ asset('/msg-person-imgs') }}/IMG_8955.JPG" class="user-image" alt="User Image">--}}
                        @if(Auth::user()->email=='jasim@gmail.com')
                            <img src="{{ asset('/stuff-images') }}/IMG_8955.JPG" class="user-image"  alt="User Image">
                        @elseif(Auth::user()->email=='robin@gmail.com')
                            <img src="{{ asset('/stuff-images') }}/robin.jpg" class="user-image"  alt="User Image">
                        @elseif(Auth::user()->email=='jahid@gmail.com')
                            <img src="{{ asset('/stuff-images') }}/jahid.jpg" class="user-image"  alt="User Image">
                        @elseif(Auth::user()->email=='arafat@gmail.com')
                            <img src="{{ asset('/stuff-images') }}/arafat.jpg" class="user-image"  alt="User Image">
                        @else
                            <img src="{{ asset('/stuff-images') }}/noImage.jpg" class="user-image"  alt="User Image">
                        @endif
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            @if(Auth::user()->email=='jasim@gmail.com')
                                 <img src="{{ asset('/stuff-images') }}/IMG_8955.JPG" class="img-circle" alt="User Image">
                            @elseif(Auth::user()->email=='robin@gmail.com')
                                <img src="{{ asset('/stuff-images') }}/robin.jpg" class="img-circle" alt="User Image">
                            @elseif(Auth::user()->email=='jahid@gmail.com')
                                <img src="{{ asset('/stuff-images') }}/jahid.jpg" class="img-circle" alt="User Image">
                            @elseif(Auth::user()->email=='arafat@gmail.com')
                                <img src="{{ asset('/stuff-images') }}/arafat.jpg" class="img-circle" alt="User Image">
                            @else
                                <img src="{{ asset('/stuff-images') }}/noImage.jpg" class="img-circle" alt="User Image">
                            @endif
                            <p>
                                {{ Auth::user()->name }}
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="{{ url('/tsp-user-profile/'.Auth::user()->id) }}" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="btn btn-default btn-flat">Sign out</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li>
            </ul>
        </div>

    </nav>
</header>

