<aside class="main-sidebar sidebar-primary-primary elevation-4 bg-primary">
    <a href="/home" class="brand-link text-center">
        <span class="brand-text font-weight-bold">ADMIN</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar" >
        <!-- Sidebar user panel (optional) -->
        {{-- <a href="/editprofile">
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="/profiles/avatars/{{ Auth::user()->avatar }}" alt="author-image"
                        class="img-circle elevation-2">
                </div>
        </a>
        <div class="info">
            <a href="/editprofile" class="d-block text-white">{{ auth()->user()->name }}</a>
        </div> --}}
    

    <!-- SidebarSearch Form -->
    <!-- Sidebar Menu -->

    <nav class="mt-2" >
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
                <a href="/admin/dashboard" class="nav-link">
                    <i class="nav-icon bi bi-speedometer2 text-white"></i>
                    <p class="text-white">
                        Dashboard
                    </p>
                </a>
            </li>

            {{-- <li class="nav-item {{ 'widget' == request()->path() ? 'active' : '' }}">
                        <a href="/admin/widget" class="nav-link ">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                New
                                <span class="right badge badge-danger">New</span>
                            </p>
                        </a>
                    </li> --}}
            {{-- <li class="nav-item">
                        <a href="/admin/page" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Page
                            </p>
                        </a>
                    </li> --}}
            <li class="nav-item">
                <a href="/admin/users" class="nav-link">
                    <i class="nav-icon bi bi-people text-white"></i>
                    <p class="text-white">
                        User Management
                    </p>
                </a>
            </li>
            
           

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon bi bi-code-square text-white"></i>
                    <p class="text-white">
                        Type Property
                        <i class="right fas fa-angle-left text-white"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="/admin/properties" class="nav-link">
                            <i class="far fa-circle nav-icon text-white"></i>
                            <p class="text-white">
                                All Property
        
                            </p>
        
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="/admin/rents" class="nav-link">
                            <i class="far fa-circle nav-icon text-white"></i>
                            <p class="text-white">For Rent</p>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="/admin/sales" class="nav-link">
                            <i class="far fa-circle nav-icon text-white"></i>
                            <p class="text-white">For Sale</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="/admin/rentals" class="nav-link">
                            <i class="far fa-circle nav-icon text-white"></i>
                            <p class="text-white">Vacation Rental</p>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="/admin/contactAdmins" class="nav-link">
                    <i class="nav-icon bi bi-envelope-plus text-white"></i>
                    <p class="text-white">
                        Contact Us
                    </p>
                </a>
            </li>
            <li class="nav-item" >
                <a href="/admin/amenities" class="nav-link"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"
                    style="margin-top:60px;">
                    <i class=" nav-icon bi bi-box-arrow-left text-white" ></i>
                    <p>
                        <button class="btn btn-primary btn-info btn-sm-5 ml-1 pl-5 pr-5">{{ __('Logout') }}</button>
                    </p>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
            {{-- <li class="nav-item">
                        <a href="/admin/table" class="nav-link">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Table Data
                            </p>
                        </a>
                    </li> --}}


        </ul>
    </nav>
</div>
    <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>