{{-- <div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__wobble" src="{{asset('backend/dist/img/AdminLTELogo.png')}}" alt="AdminLTELogo" height="60" width="60">
</div> --}}
<nav class="main-header navbar navbar-expand navbar-primary">
  <!-- Left navbar links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" data-widget="pushmenu" href="#" role="button" style="color:#fff"><i class="fas fa-bars"></i></a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="/" class="nav-link text-white">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
      <a href="/contact" class="nav-link text-white"style="color:#fff">Contact</a>
    </li>
  </ul>

  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->
    

    <!-- Messages Dropdown Menu -->
    
    <!-- Notifications Dropdown Menu -->
    
    <li class="nav-item">
      <a href="/editprofile">
        <div class="user-panel mt-3 pb-3 d-flex">
            <div class="image">
                <img src="/profiles/avatars/{{ Auth::user()->avatar }}" alt="author-image"
                    class="img-circle elevation-2">
            </div>
    </a>
    <div class="info">
        <a href="/editprofile" class="d-block text-white">{{ auth()->user()->name }}</a>
    </div>
      <a class="nav-link text-white" data-widget="fullscreen" href="#" role="button">
        <i class="fas fa-expand-arrows-alt"></i>
      </a>
    </li>
    
  </ul>
</nav>