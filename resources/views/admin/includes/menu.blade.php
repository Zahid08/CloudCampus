<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ asset('/msg-person-imgs') }}/IMG_8955.JPG" class="img-circle" alt="User Image">
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
                <a href="{{ url('/home') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i>
                    <span>Basic Setting</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/course/add-course') }}"><i class="fa fa-circle-o text-red"></i>Course Setting</a></li>
                    <li><a href="{{ url('/subject/subject') }}"><i class="fa fa-circle-o text-aqua"></i>Subject Setting</a></li>
                    <li><a href="{{ url('/department/department') }}"><i class="fa fa-circle-o text-aqua"></i>Department Setting</a></li>
                    <li><a href="{{ url('/designation/designation') }}"><i class="fa fa-circle-o text-aqua"></i>Designation Setting</a></li>
                    <li><a href="{{ url('/category/category') }}"><i class="fa fa-circle-o text-aqua"></i>Category Setting</a></li>
                    <li><a href="{{ url('/occupation/occupation') }}"><i class="fa fa-circle-o text-aqua"></i>Occupation Setting</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i>
                    <span>User Setting</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/profile/user') }}"><i class="fa fa-circle-o text-red"></i>Profile Verify</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-edit"></i>
                    <span>Notice</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/file-notice/add-notice') }}"><i class="fa fa-circle-o text-aqua"></i>Add Notice</a></li>
                    <li><a href="{{ url('/manage-file-notice/manage-notice') }}"><i class="fa fa-circle-o text-red"></i>Manage Notice</a></li>
                </ul>
            </li>
            <li>
                <a href="{{ url('/employee/employee') }}">
                    <i class="fa fa-edit"></i>
                    <span>Employees</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/gallery/gallery') }}">
                    <i class="fa fa-edit"></i>
                    <span>Gallery</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/blog/admin-blog') }}">
                    <i class="fa fa-edit"></i>
                    <span>Blogs</span>
                </a>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope"></i>
                    <span>Messages Setting</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/message/message') }}"><i class="fa fa-circle-o text-aqua"></i>Create Messages</a></li>
                    <li><a href="{{ url('/message/user-messages') }}"><i class="fa fa-circle-o text-aqua"></i>Guest Messages</a></li>
                </ul>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

