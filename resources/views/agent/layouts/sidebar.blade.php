<aside class="main-sidebar sidebar-primary-primary elevation-4 bg-dark">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link text-center text-white">
        <span class="brand-text font-weight-bold" >MANAGER</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        
        <!-- SidebarSearch Form --> 
            <!-- Sidebar Menu -->
        
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                    data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                    <li class="nav-item">
                        <a href="/manager/home" style="color:#fff" class="nav-link">
                            <i class="nav-icon bi bi-speedometer2"></i>
                            <p>
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
                        <a href="#" class="nav-link">
                            <i class="nav-icon bi bi-code-square text-white"></i>
                            <p class="text-white">
                                Type Property
                                <i class="right fas fa-angle-left text-white mt-2"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="/manager/posts" class="nav-link">
                                    <i class="far fa-circle nav-icon text-white"></i>
                                    <p class="text-white">
                                        All Property
                
                                    </p>
                
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="/manager/rents" class="nav-link">
                                    <i class="far fa-circle nav-icon text-white"></i>
                                    <p class="text-white">For Rent</p>
                                </a>
                            </li>
        
        
                            <li class="nav-item">
                                <a href="/manager/sales" class="nav-link">
                                    <i class="far fa-circle nav-icon text-white"></i>
                                    <p class="text-white">For Sale</p>
                                </a>
                            </li>
        
                            <li class="nav-item">
                                <a href="/manager/rentals" class="nav-link">
                                    <i class="far fa-circle nav-icon text-white"></i>
                                    <p class="text-white">Vacation Rental</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="/manager/contacts" style="color:#fff" class="nav-link">
                            <i class="nav-icon bi bi-envelope"></i>
                            <p>
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
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
