<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ url('assets/img/dp.png') }}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li class="active">
                <a href="{{ url('/admin/dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span> </i>
                </a>
            </li>

            <li>
                <a href="{{ url('/admin/title') }}">
                    <i class="fa fa-th"></i> <span>Landing Page</span>
                </a>
            </li>

            <li>
                <a href="{{ url('/admin/backgrounds') }}">
                    <i class="fa fa-image"></i> <span>Backgrounds</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-pie-chart"></i>
                    <span>Polls</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/poll/optionpolls') }}"><i class="fa fa-circle-o"></i> Option Polls</a></li>
                    <li><a href="{{ url('/admin/poll/leaderpoll') }}"><i class="fa fa-circle-o"></i> Leader Poll</a></li>
                    <li><a href="{{ url('/admin/poll/edit') }}"><i class="fa fa-circle-o"></i> Edit Polls</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file"></i>
                    <span>Feedbacks</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('/admin/feedback/general') }}">
                            <i class="fa fa-circle-o"></i> General
                        </a>
                    </li>
                    <li><a href="{{ url('/admin/feedback/location') }}">
                            <i class="fa fa-circle-o"></i> Location
                        </a>
                    </li>
                    <li><a href="{{ url('/admin/feedback/project') }}">
                            <i class="fa fa-circle-o"></i> Project
                        </a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="{{ url('/admin/contact') }}">
                    <i class="fa fa-phone"></i> <span>Contact Info</span>
                </a>
            </li>

            <li>
                <a href="{{ url('/admin/about') }}">
                    <i class="fa fa-users"></i> <span>About</span>
                </a>
            </li>

            <li>
                <a href="{{ url('/admin/categories') }}">
                    <i class="fa fa-cubes"></i> <span>Categories</span>
                </a>
            </li>

            <li>
                <a href="{{ url('/admin/users') }}">
                    <i class="fa fa-users"></i> <span>Users</span>
                </a>
            </li>

            <li>
                <a href="{{ url('/admin/messages') }}">
                    <i class="fa fa-envelope"></i> <span>Messages</span>
                </a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-book"></i>
                    <span>Blog</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/blog/add') }}"><i class="fa fa-circle-o"></i> Add Post</a></li>
                    <li><a href="{{ url('/admin/blog') }}"><i class="fa fa-circle-o"></i> Manage Posts</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-image"></i>
                    <span>Image Feed</span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('admin/imageFeed/add') }}"><i class="fa fa-circle-o"></i> Add Image</a></li>
                    <li><a href="{{ url('/admin/imageFeed') }}"><i class="fa fa-circle-o"></i> Manage Images</a></li>
                </ul>
            </li>

            <li>
                <a href="{{ url('admin/faq') }}">
                    <i class="fa fa-bookmark"></i> <span>FAQ</span>
                </a>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>