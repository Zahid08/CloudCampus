<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
{{--                <img src="{{ asset('/msg-person-imgs') }}/IMG_8955.JPG" class="img-circle" alt="User Image">--}}
                @if(Auth::user()->email=='jasim@gmail.com')
                    <img src="{{ asset('/stuff-images') }}/IMG_8955.JPG" class="img-circle"  alt="User Image">
                @elseif(Auth::user()->email=='robin@gmail.com')
                    <img src="{{ asset('/stuff-images') }}/robin.jpg" class="img-circle"  alt="User Image">
                @elseif(Auth::user()->email=='jahid@gmail.com')
                    <img src="{{ asset('/stuff-images') }}/jahid.jpg" class="img-circle"  alt="User Image">
                @elseif(Auth::user()->email=='arafat@gmail.com')
                    <img src="{{ asset('/stuff-images') }}/arafat.jpg" class="img-circle"  alt="User Image">
                @else
                    <img src="{{ asset('/stuff-images') }}/noImage.jpg" class="img-circle"  alt="User Image">
                @endif

            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active treeview menu-open">
                <a href="{{ url('/tsp/home') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/blog/blog') }}">
                    <i class="fa fa-edit"></i>
                    <span>Blogs</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/blog/comment') }}">
                    <i class="fa fa-edit"></i>
                    <span>Comments</span>
                </a>
            </li>


        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

