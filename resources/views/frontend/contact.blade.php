@extends('layouts.layout')
@section('content')

    <body class="inner-pages hd-white">
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
                        <h1>Contact Us</h1>
                        <h2><a href="/contact">Home </a> &nbsp;/&nbsp; Contact Us</h2>
                    </div>
                </div>
            </section>
            <!-- END SECTION HEADINGS -->
            <!-- START SECTION CONTACT US -->
            <section class="contact-us">
                <div class="container">
                    <div class="property-location mb-5">
                        <h3>Our Location</h3>
                        <div class="divider-fade"></div>
                        <div id="map-contact" class="contact-map"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <h3 class="mb-4">Contact Us</h3>
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <form id="contactform" class="contact-form" action="{{ route('contact.store') }}"
                                name="contactform" method="post" novalidate>
                                @csrf
                                <div id="success" class="successform">
                                    <p class="alert alert-success font-weight-bold" role="alert">Your message was sent
                                        successfully!</p>
                                </div>
                                <div id="error" class="errorform">
                                    <p>Something went wrong, try refreshing and submitting the form again.</p>
                                </div>
                                <div class="form-group">
                                    <input type="text" required class="form-control input-custom input-full"
                                        name="name" placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="text" required class="form-control input-custom input-full"
                                        name="phone" placeholder="phone">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control input-custom input-full" name="email"
                                        placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <textarea class="form-control textarea-custom input-full" id="ccomment" name="message" required rows="8"
                                        placeholder="Message"></textarea>
                                </div>

                                <button type="submit" id="submit-contact" class="btn btn-primary btn-lg">Submit</button>
                            </form>
                        </div>
                        <div class="col-lg-4 col-md-12 bgc">
                            <div class="call-info">
                                <h3>Contact Details</h3>
                                <p class="mb-5">Please find below contact details and contact us today!</p>
                                <ul>
                                    <li>
                                        <div class="info">
                                            <i class="fa fa-map-marker" aria-hidden="true"></i>
                                            <p class="in-p">95 South Park Ave, USA</p>
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
                                    <li>
                                        <div class="info cll">
                                            <i class="fa fa-clock-o" aria-hidden="true"></i>
                                            <p class="in-p ti">8:00 a.m - 9:00 p.m</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END SECTION CONTACT US -->

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
            <script src="{{ asset('js/map-single.js') }}"></script>
        </div>
        <!-- Wrapper / End -->
    </body>


    <!-- Mirrored from code-theme.com/html/findhouses/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Jul 2022 08:55:21 GMT -->

    </html>
@endsection
