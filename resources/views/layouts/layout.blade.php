<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>RealEstate</title>
    <link rel="icon" href="http://realestate.cc/images/logo.png" type="image/x-icon">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- navbar -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <link rel="stylesheet" href="css/jquery-ui.css">

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800,%20700"
        rel="stylesheet">

    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontawesome-5-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

    <!-- LEAFLET MAP -->
    <link rel="stylesheet" href="{{ asset('css/leaflet.css') }}">
    <link rel="stylesheet" href="{{ asset('css/leaflet-gesture-handling.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/leaflet.markercluster.css') }}">
    <link rel="stylesheet" href="{{ asset('css/leaflet.markercluster.default.css') }}">

    <!-- ARCHIVES CSS -->
    <link rel="stylesheet" href="{{ asset('css/search.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/aos2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lightcase.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" id="color" href="{{ asset('css/colors/dark-orange.css') }}">
    <link rel="stylesheet" id="color" href="{{ asset('css/default.css') }}">
    <link rel="stylesheet" href="css/maps.css">
    <link rel="stylesheet" id="color" href="{{ asset('css/colors/pink.css') }}">

    <!-- Scripts -->
    {{-- @vite(['resources/sass/app.scss', 'resources/js/app.js']) --}}

</head>

<body class="inner-pages homepage-4 agents hp-6 full hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container">
            <!-- Header -->
            <div id="header">
                <div class="container container-header">
                    <!-- Left Side Content -->
                    <div class="left-side">
                        <!-- Logo -->
                        <div id="logo">
                            <a href="/"><img src="{{ asset('images/logo.png') }}" alt=""></a>
                        </div>
                        <!-- Mobile Navigation -->
                        <div class="mmenu-trigger">
                            <button class="hamburger hamburger--collapse" type="button">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                        <!-- Main Navigation -->
                        <nav id="navigation" class="style-1">
                            <ul id="responsive">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="/mainproperty">Property</a>
                                    <ul>
                                        <li><a href="/propertyRent">For Rent</a></li>
                                        <li><a href="/propertySale">For Sale</a></li>
                                        <li><a href="/propertyRental">Vacation Rental</a></li>
                                    </ul>
                                </li>
                                <li><a href="/blog">Blog</a></li>
                                <li><a href="/agent">Agent</a></li>
                               @auth()                   
                                @if (Auth::user()->type == 'manager')
                                    <li><a href="/manager/home">CRM</a></li>
                              
                                @elseif (Auth::user()->type == 'admin')
                                    <li><a href="/admin">CRM</a></li>
                                @endif
                                @endauth
                                <li><a href="/contact">Contact</a></li>
                                @guest
                                    @if (Route::has('login'))
                                        <li class="d-none d-xl-none d-block d-lg-block"><a
                                                href="{{ route('login') }}">Sign In</a></li>
                                    @endif
                                @endguest
                            </ul>
                        </nav>
                        <!-- Main Navigation / End -->
                    </div>
                    <!-- Left Side Content / End -->
                    <!-- Authentication Links -->
                    @guest
                        @if (Route::has('login'))
                            <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
                                <!-- Header Widget -->
                                <div class="header-widget sign-in">
                                    <div class="show-reg-form modal-open"><a href="{{ route('login') }}">Sign In</a>
                                    </div>
                                </div>
                                <!-- Header Widget / End -->
                            </div>
                        @endif
                    @else
                        {{-- <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li> --}}
                        @auth
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif

                            <div class="header-user-menu user-menu add">
                                <div class="header-user-name">
                                    <span>
                                        <img src="/profiles/avatars/{{ Auth::user()->avatar }}" alt="author-image"
                                            class="author__img">
                                    </span>
                                    {{ Auth::user()->name ? Auth::user()->name : '  ' }}
                                </div>
                                <ul>
                                    <li><a href="/editprofile"> Edit profile</a></li>
                                    <li><a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                      document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </div>
                        @endauth
                        <!-- Right Side Content / End -->
                    @endguest
                </div>
            </div>

            <!-- Header / End -->

        </header>
        <!--register form -->
        <div class="login-and-register-form modal">
            <div class="main-overlay"></div>
            <div class="main-register-holder">
                <div class="main-register fl-wrap">
                    <div class="close-reg"><i class="fa fa-times"></i></div>
                    <h3>Welcome to <span>Real<strong>Estate</strong></span></h3>
                    <div id="tabs-container">
                        <ul class="tabs-menu">
                            <li class="current"><a href="#tab-1">Login</a></li>
                            <li><a href="#tab-2">Register</a></li>
                        </ul>
                        <div class="tab">
                            <div id="tab-1" class="tab-contents">
                                <div class="custom-form">
                                    <form method="post" name="registerform" action="{{ route('login') }}">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>{{ __('Email Address') }}</label>
                                            <input id="email" type="email" onClick="this.select()"
                                                class="
                                            @error('email') is-invalid @enderror"
                                                name="email" value="{{ old('email') }}" required
                                                autocomplete="email" autofocus placeholder="Email">
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('Password') }}</label>
                                            <input id="password" type="password" onClick="this.select()"
                                                class="
                                            @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password"
                                                placeholder="Password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <button type="submit" data-dismiss="modal"
                                            class="log-submit-btn">{{ __('Login') }}</button>
                                        <div class="clearfix"></div>
                                        <div class="filter-tags">
                                            <div class="checkboxes float-left">
                                                <div class="filter-tags-wrap">
                                                    <input id="check-a" type="checkbox" name="check"
                                                        {{ old('remember') ? 'checked' : '' }}>
                                                    <label for="check-a"
                                                        class="form-check-label">{{ __('Remember Me') }}</label>
                                                </div>
                                            </div>
                                        </div>
                                        @if (Route::has('password.request'))
                                            <div class="lost_password">
                                                <a
                                                    href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                            </div>
                                        @endif
                                    </form>
                                </div>
                            </div>
                            <div class="tab">
                                <div id="tab-2" class="tab-contents">
                                    <div class="custom-form">
                                        <form method="POST" name="registerform" class="main-register-form"
                                            action="{{ route('register') }}" id="main-register-form2">
                                            {{ csrf_field() }}
                                            <div class="form-group">
                                                <label>{{ __('Name') }}</label>
                                                <input id="name" type="text"
                                                    class=" @error('name') is-invalid @enderror"
                                                    onClick="this.select()" name="name"
                                                    value="{{ old('name') }}" required autocomplete="name"
                                                    autofocus placeholder="Name">
                                                @error('name')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>{{ __('Email Address') }}</label>
                                                <input id="email" type="email"
                                                    class="@error('email') is-invalid @enderror"
                                                    onClick="this.select()" name="email"
                                                    value="{{ old('email') }}" required autocomplete="email"
                                                    placeholder="Email">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>{{ __('Phone Number') }}</label>
                                                <input id="phone" type="text"
                                                    class=" @error('phone') is-invalid @enderror"
                                                    onClick="this.select()" name="phone"
                                                    value="{{ old('phone') }}" required autocomplete="phone"
                                                    placeholder="Phone Number">
                                                @error('phone')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>{{ __('Password') }}</label>
                                                <input id="password" type="password"
                                                    class="@error('password') is-invalid @enderror"
                                                    onClick="this.select()" name="password" required
                                                    autocomplete="new-password" placeholder="Password">

                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <label>{{ __('Confirm Password') }}</label>
                                                <input id="password-confirm" type="password"
                                                    onClick="this.select()"name="password_confirmation" required
                                                    autocomplete="new-password" placeholder="Comfirm Password">
                                            </div>
                                            <button type="submit" class="log-submit-btn">
                                                {{ __('Register') }}
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--register form end -->
        <script>
            $(".confirm").on("submit", function() {
                return confirm("Do you want to save the data?");
            });
        </script>
        <div class="clearfix"></div>
        <!-- Header Container / End -->
        <!-- ARCHIVES JS -->

        <script src="{{ asset('js/jquery-3.5.1.min.js') }}"></script>
        <script src="{{ asset('js/popper.min.js') }}"></script>
        <script src="{{ asset('js/jquery-ui.js') }}"></script>
        <script src="{{ asset('js/leaflet.js') }}"></script>
        <script src="{{ asset('js/leaflet-gesture-handling.min.js') }}"></script>
        <script src="{{ asset('js/leaflet-providers.js') }}"></script>
        <script src="{{ asset('js/leaflet.markercluster.js') }}"></script>
        <script src="{{ asset('js/tether.min.js') }}"></script>
        <script src="{{ asset('js/moment.js') }}"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('js/mmenu.min.js') }}"></script>
        <script src="{{ asset('js/mmenu.js') }}"></script>
        <script src="{{ asset('js/map-style2.js') }}"></script>
        <script src="{{ asset('js/map4.js') }}"></script>
        <script src="{{ asset('js/aos.js') }}"></script>
        <script src="{{ asset('js/aos2.js') }}"></script>
        <script src="{{ asset('js/nice-select.js') }}"></script>
        <script src="{{ asset('js/slick.min.js') }}"></script>
        <script src="{{ asset('js/fitvids.js') }}"></script>
        <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('js/typed.min.js') }}"></script>
        <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('js/counterup.js') }}"></script>
        <script src="{{ asset('js/inner.js') }}"></script>
        <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
        <script src="{{ asset('js/smooth-scroll.min.js') }}"></script>
        <script src="{{ asset('js/lightcase.js') }}"></script>
        <script src="{{ asset('js/owl.carousel.js') }}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('js/ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('js/newsletter.js') }}"></script>
        <script src="{{ asset('js/jquery.form.js') }}"></script>
        <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
        <script src="{{ asset('js/forms.js') }}"></script>
        <script src="{{ asset('js/forms-2.js') }}"></script>
        <script src="{{ asset('js/color-switcher.js') }}"></script>
        <script>
            $(document).ready(function() {
                // show the alert
                $(".alert").fadeTo(4000, 500).slideUp(500, function() {
                    $(".alert").alert('close');
                });
            });
        </script>


        @yield('content')


        <!-- START FOOTER -->
        <footer class="first-footer">
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-5 col-md-6">
                            <div class="netabout">
                                <a href="/" class="logo">
                                    <img src="{{ asset('images/logo.png') }}" alt="netcom">
                                </a>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum incidunt architecto
                                    soluta laboriosam, perspiciatis, aspernatur officiis esse.</p>
                            </div>
                            <div class="contactus">
                                <ul>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p class="in-p">95 South Park Avenue, USA</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                            <p class="in-p">+456 875 369 208</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-envelope" aria-hidden="true"></i>
                                            <p class="in-p ti">support@findhouses.com</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="navigation">
                                <h3>Navigation</h3>
                                <div class="nav-footer">
                                    <ul>
                                        <li><a href="/">Home One</a></li>
                                        <li><a href="/propertyRent">Rent property</a></li>
                                        <li><a href="/propertySale">Sale Property</a></li>
                                        <li><a href="/propertyRental"> Rental Property</a></li>


                                    </ul>
                                    <ul class="nav-right">
                                        <li><a href="/agent">Agents Details</a></li>
                                        <li><a href="/aboutus">About Us</a></li>
                                        <li><a href="/blog">Blog Default</a></li>
                                        <li class="no-mgb"><a href="/contact">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="newsletters">
                                <h3>Newsletters</h3>
                                <p>Sign Up for Our Newsletter to get Latest Updates and Offers. Subscribe to receive
                                    news in your inbox.</p>
                            </div>
                            <form class="bloq-email mailchimp form-inline" method="post">
                                <label for="subscribeEmail" class="error"></label>
                                <div class="email">
                                    <input type="email" id="subscribeEmail" name="EMAIL"
                                        placeholder="Enter Your Email">
                                    <input type="submit" value="Subscribe">
                                    <p class="subscription-success"></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="second-footer">
                <div class="container">
                    <p>REAL ESTATE COMPANY</p>
                    <ul class="netsocials">


                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </footer>

        <a data-scroll href="#wrapper" class="go-up"><i class="fa fa-angle-double-up" aria-hidden="true"></i></a>
        <!-- END FOOTER -->
    </div>
</body>

</html>
