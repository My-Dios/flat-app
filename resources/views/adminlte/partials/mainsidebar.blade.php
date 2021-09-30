<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="img-circle">
                <img src="{{asset('images/icon/flaticon.png')}}" class="" alt="User Image">
            </div>
            <div class="info">
                <a href="/admin" class="d-block">Admin FLAT UIN Jakarta</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->

                {{-- START Home Database --}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home Database
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="/admin" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Post Data Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/flatjumbotrons/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Create Billboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/flattestimonies/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Create Testimony</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- END Home Database --}}

                {{-- START Course Database --}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-book"></i>
                        <p>
                            Course Database
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Post Data Course</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Create Course</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- END Course Database --}}

                {{-- START News Database --}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            News Database
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview" style="display: none;">
                        <li class="nav-item">
                            <a href="/adminnews" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Post Data News</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/flatnews/create" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Create News</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- END News Database --}}

            </ul>
        </nav>
    </div>
</aside>

{{-- Backup --}}
{{-- <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="img-circle">
                <img src="{{asset('images/icon/flaticon.png')}}" class="" alt="User Image">
            </div>
            <div class="info">
                <a href="/admin" class="d-block">Admin FLAT UIN Jakarta</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview">
                    <a href="/admin" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Post Data
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/flatnews/create" class="nav-link">
                        <i class="nav-icon fas fa-newspaper"></i>
                        <p>
                            Create News
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            Create Course
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/flatjumbotrons/create" class="nav-link">
                        <i class="nav-icon fas fa-chalkboard"></i>
                        <p>
                            Create Billboard
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</aside> --}}

