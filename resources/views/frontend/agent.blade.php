@extends('layouts.layout')
@section('content')

    <body class="inner-pages hd-white about">
        <!-- Wrapper -->
        <div id="wrapper">
            <!-- START SECTION HEADINGS -->
            <!-- Header Container
            ================================================== -->
            <div class="clearfix"></div>
            <!-- Header Container / End -->

            <section class="headings">
                <div class="text-heading text-center">
                    <div class="container">
                        <h1>About Our Company</h1>
                        <h2><a href="/">Home </a> &nbsp;/&nbsp; About Us</h2>
                    </div>
                </div>
            </section>
            <!-- END SECTION HEADINGS -->

            <!-- START SECTION WHY CHOOSE US -->
            <section class="how-it-works bg-white-2">
                <div class="container">
                    <div class="sec-title">
                        <h2><span>Why </span>Choose Us</h2>
                        <p>We provide full service at every step.</p>
                    </div>
                    <div class="row service-1">
                        <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                            <div class="serv-flex">
                                <div class="art-1 img-13">
                                    <img src="images/icons/icon-4.svg" alt="">
                                    <h3>Wide Renge Of Properties</h3>
                                </div>
                                <div class="service-text-p">
                                    <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur
                                        debits adipisicing lacus consectetur Business Directory.</p>
                                </div>
                            </div>
                        </article>
                        <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                            <div class="serv-flex">
                                <div class="art-1 img-14">
                                    <img src="images/icons/icon-5.svg" alt="">
                                    <h3>Trusted by thousands</h3>
                                </div>
                                <div class="service-text-p">
                                    <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur
                                        debits adipisicing lacus consectetur Business Directory.</p>
                                </div>
                            </div>
                        </article>
                        <article class="col-lg-4 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up">
                            <div class="serv-flex arrow">
                                <div class="art-1 img-15">
                                    <img src="images/icons/icon-6.svg" alt="">
                                    <h3>Financing made easy</h3>
                                </div>
                                <div class="service-text-p">
                                    <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur
                                        debits adipisicing lacus consectetur Business Directory.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <!-- END SECTION WHY CHOOSE US -->

            <!-- START SECTION COUNTER UP -->
            <section class="counterup">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-xs-12">
                            <div class="countr">
                                <i class="fa fa-home" aria-hidden="true"></i>
                                <div class="count-me">
                                    <p class="counter text-left">300</p>
                                    <h3>Sold Houses</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xs-12">
                            <div class="countr">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                <div class="count-me">
                                    <p class="counter text-left">400</p>
                                    <h3>Daily Listings</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xs-12">
                            <div class="countr mb-0">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <div class="count-me">
                                    <p class="counter text-left">250</p>
                                    <h3>Expert Agents</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-xs-12">
                            <div class="countr mb-0 last">
                                <i class="fa fa-trophy" aria-hidden="true"></i>
                                <div class="count-me">
                                    <p class="counter text-left">200</p>
                                    <h3>Won Awars</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END SECTION COUNTER UP -->

            <!-- START SECTION AGENTS -->
            <section class="team">
                <div class="container">
                    <div class="sec-title">
                        <h2><span>Our </span>Team</h2>
                        <p>We provide full service at every step.</p>
                    </div>
                    <div class="row team-all">
                        @foreach ($users as $user)
                            @if ($user->type == 'manager')
                                <div class="col-lg-3 col-md-6 team-pro">
                                    <div class="team-wrap">
                                        <div class="team-img">
                                            <img src="/profiles/avatars/{{ $user->avatar }}" alt="author-image"
                                                class="img-circle elevation-2">
                                        </div>
                                        <div class="team-content">
                                            <div class="team-info">
                                                <h3>{{ $user->name }}</h3>
                                                
                                                <div> Phone: +855 {{ $user->phone }} </div>
                                               
                                                <div>Email: {{ $user->email }} </div>
                                                <div class="team-socials">
                                                    <ul>
                                                        <li>
                                                            <a href="https://www.facebook.com/people/%E1%9E%81%E1%9E%BF%E1%9E%84-%E1%9E%9F%E1%9E%BB%E1%9E%81%E1%9F%83/100026212359394/" title="facebook"><i class="fa fa-facebook"
                                                                    aria-hidden="true"></i></a>
                                                            <a href="#" title="twitter"><i class="fa fa-twitter"
                                                                    aria-hidden="true"></i></a>
                                                            <a href="#" title="instagran"><i class="fa fa-instagram"
                                                                    aria-hidden="true"></i></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </section>
            <!-- END SECTION AGENTS -->

            <!-- STAR SECTION PARTNERS -->
            <div class="partners bg-white-2">
                <div class="container">
                    <div class="sec-title">
                        <h2><span>Our </span>Partners</h2>
                        <p>The Companies That Represent Us.</p>
                    </div>
                    <div class="owl-carousel style2">
                        <div class="owl-item"><img src="images/partners/11.jpg" alt=""></div>
                        <div class="owl-item"><img src="images/partners/12.jpg" alt=""></div>
                        <div class="owl-item"><img src="images/partners/13.jpg" alt=""></div>
                        <div class="owl-item"><img src="images/partners/14.jpg" alt=""></div>
                        <div class="owl-item"><img src="images/partners/15.jpg" alt=""></div>
                        <div class="owl-item"><img src="images/partners/16.jpg" alt=""></div>
                        <div class="owl-item"><img src="images/partners/17.jpg" alt=""></div>
                        <div class="owl-item"><img src="images/partners/11.jpg" alt=""></div>
                        <div class="owl-item"><img src="images/partners/12.jpg" alt=""></div>
                        <div class="owl-item"><img src="images/partners/13.jpg" alt=""></div>
                    </div>
                </div>
            </div>
            <!-- END SECTION PARTNERS -->
            <!--register form -->
            <div class="login-and-register-form modal">
                <div class="main-overlay"></div>
                <div class="main-register-holder">
                    <div class="main-register fl-wrap">
                        <div class="close-reg"><i class="fa fa-times"></i></div>
                        <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
                        <div class="soc-log fl-wrap">
                            <p>Login</p>
                            <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with
                                Facebook</a>
                            <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                        </div>
                        <div class="log-separator fl-wrap"><span>Or</span></div>
                        <div id="tabs-container">
                            <ul class="tabs-menu">
                                <li class="current"><a href="#tab-1">Login</a></li>
                                <li><a href="#tab-2">Register</a></li>
                            </ul>
                            <div class="tab">
                                <div id="tab-1" class="tab-contents">
                                    <div class="custom-form">
                                        <form method="post" name="registerform">
                                            <label>Username or Email Address * </label>
                                            <input name="email" type="text" onClick="this.select()" value="">
                                            <label>Password * </label>
                                            <input name="password" type="password" onClick="this.select()"
                                                value="">
                                            <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                            <div class="clearfix"></div>
                                            <div class="filter-tags">
                                                <input id="check-a" type="checkbox" name="check">
                                                <label for="check-a">Remember me</label>
                                            </div>
                                        </form>
                                        <div class="lost_password">
                                            <a href="#">Lost Your Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div id="tab-2" class="tab-contents">
                                        <div class="custom-form">
                                            <form method="post" name="registerform" class="main-register-form"
                                                id="main-register-form2">
                                                <label>First Name * </label>
                                                <input name="name" type="text" onClick="this.select()"
                                                    value="">
                                                <label>Second Name *</label>
                                                <input name="name2" type="text" onClick="this.select()"
                                                    value="">
                                                <label>Email Address *</label>
                                                <input name="email" type="text" onClick="this.select()"
                                                    value="">
                                                <label>Password *</label>
                                                <input name="password" type="password" onClick="this.select()"
                                                    value="">
                                                <button type="submit"
                                                    class="log-submit-btn"><span>Register</span></button>
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
                $('.style1').owlCarousel({
                    loop: true,
                    margin: 10,
                    autoplay: false,
                    autoplayTimeout: 5000,
                    responsive: {
                        0: {
                            items: 1
                        },
                        400: {
                            items: 1,
                            margin: 20
                        },
                        500: {
                            items: 1,
                            margin: 20
                        },
                        768: {
                            items: 1,
                            margin: 20
                        },
                        991: {
                            items: 1,
                            margin: 20
                        },
                        1000: {
                            items: 1,
                            margin: 20
                        }
                    }
                });
            </script>
            <script>
                $('.style2').owlCarousel({
                    loop: true,
                    margin: 0,
                    dots: false,
                    autoWidth: false,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    responsive: {
                        0: {
                            items: 2,
                            margin: 20
                        },
                        400: {
                            items: 2,
                            margin: 20
                        },
                        500: {
                            items: 3,
                            margin: 20
                        },
                        768: {
                            items: 4,
                            margin: 20
                        },
                        992: {
                            items: 5,
                            margin: 20
                        },
                        1000: {
                            items: 6,
                            margin: 20
                        }
                    }
                });
            </script>

        </div>
        <!-- Wrapper / End -->
    </body>

    <!-- Mirrored from code-theme.com/html/findhouses/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Jul 2022 08:55:18 GMT -->

    </html>
@endsection
