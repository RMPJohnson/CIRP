@auth
<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">

                <div class="dropdown profile-element text-center">
                    <img alt="image" height="50" class="rounded-circle" src="{!! asset('images/user/'.auth()->user()->profile->picture) !!}">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="block m-t-xs font-bold">Welcome {{auth()->user()->name}}</span>
                        <span class="text-muted text-xs block">{{ auth()->user()->roles->pluck('name')[0] ?? '' }} <b class="caret"></b></span>
                    </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a class="dropdown-item" href="{{ route('profile') }}">Profile</a></li>
                        <li><a class="dropdown-item" href="{{ route('change-password') }}">Change Password</a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                    </ul>
                </div>

                <div class="logo-element">
                    D-D+
                </div>
            </li>
            <li>
                <a href="{{ route('dashboard') }}"><i class="fa fa-diamond"></i> <span class="nav-label">Dashboards</span></a>
            </li>

                @role('Master')
                <li {{ (request()->is('administrator/users*')) ? 'class=active' : '' }}>
                    <a href="#" aria-expanded="false"><i class="fa fa-users"></i> <span class="nav-label">Users Management</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse" aria-expanded="false">
                        <li><a href="{{ route('users.index') }}"><i class="fa fa-user"></i> Users</a></li>
                        <li><a href="{{ route('permissions.index') }}"><i class="fa fa-key"></i> Permissions</a></li>
                        <li><a href="{{ route('roles.index') }}"><i class="fa fa-gavel"></i> Roles</a></li>
                    </ul>
                </li>
                @endrole

            <li {{ (request()->is('administrator/brokers*')) ? 'class=active' : '' }}>
                <a href="#" aria-expanded="false"><i class="fa fa-briefcase"></i> <span class="nav-label">Brokers</span><span class="fa arrow"></span></a>
                <ul class="nav nav-second-level collapse" aria-expanded="false">
                    <li><a href="form_basic.html"><i class="fa fa-briefcase"></i> Brokers</a></li>
                    <li><a href="form_advanced.html"><i class="fa fa-barcode"></i> Insurance Products</a></li>
                    <li><a href="form_advanced.html"><i class="fa fa-question-circle"></i> Questionnaire</a></li>
                    <li><a href="form_advanced.html"><i class="fa fa-tags"></i> Risk Tag </a></li>
                </ul>
            </li>

            <li>
                <a href="{{ route('dashboard') }}"><i class="fa fa-angellist"></i> <span class="nav-label">Agents</span></a>
            </li>
            <li>
                <a href="{{ route('dashboard') }}"><i class="fa fa-user-circle"></i> <span class="nav-label">Customers</span></a>
            </li>
            <li>
                <a href="{{ route('dashboard') }}"><i class="fa fa-bar-chart"></i> <span class="nav-label">Reports</span></a>
            </li>
        </ul>
    </div>
</nav>
@endauth
