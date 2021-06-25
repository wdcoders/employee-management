<div class="be-sidebar">
    <div class="be-sidebar-header"></div>
    <div class="be-sidebar-navbar">
        <ul class="be-sidebar-navbar-nav">
            <li>
                <a href="{{ route('home') }}">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                    </p>
                </a>
            </li>
            <li>
                <a href="/employees">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        Employee
                    </p>
                </a>
            </li>
            <li>
                <a href="#SystemSettings" data-toggle="collapse" aria-expanded="false" aria-controls="SystemSettings">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        System Settings
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="be-sidebar-dropdown collapse" id="SystemSettings">
                    <li>
                        <a href="{{ route('countries.index') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Country</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('states.index') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>State</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('cities.index') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>City</p>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('departments.index') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Department</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#UserSettings" data-toggle="collapse" aria-expanded="false" aria-controls="UserSettings">
                    <i class="nav-icon fas fa-book"></i>
                    <p>
                        User Settings
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="be-sidebar-dropdown collapse" id="UserSettings">
                    <li>
                        <a href="{{ route('users.index') }}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>User</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Role</p>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Permission</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
