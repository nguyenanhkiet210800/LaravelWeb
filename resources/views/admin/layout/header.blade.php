<!-- Navigation -->
<nav class="navbar navbar-inverse" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Admin Area </a>
    </div>
    <!-- /.navbar-header -->

    <ul class="nav navbar-top-links navbar-right">
        <!-- /.dropdown -->
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
            </a>
            <!-- <ul class="dropdown-menu dropdown-user">
                <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                </li>
                <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="admin/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul> -->

            <ul class="dropdown-menu dropdown-user">
                
                <li><i class="fa fa-user fa-fw"></i>Admin
                </li>
                <li><a href="admin/user/danhsach"><i class="fa fa-gear fa-fw"></i> Settings</a>
                </li>
                <li class="divider"></li>
                <li><a href="admin/logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                </li>
                @if(isset($user_login))
                @endif
            </ul>
            <!-- /.dropdown-user -->
        </li>
        <!-- /.dropdown -->
    </ul>
    <!-- /.navbar-top-links -->
    @include('admin.layout.menu')
    <!-- /.navbar-static-side -->
</nav>
