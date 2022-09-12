@extends('layouts.layout')
@section('content')

    <body class="inner-pages homepage-4 agents hp-6 full hd-white">
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
                        <h2><a href="/">Home </a> <a href="/contact"> &nbsp;/&nbsp; Contact Us</a></h2>
                    </div>
                </div>
            </section>
            <!-- END SECTION HEADINGS -->

            <!-- START SECTION PROPERTIES LISTING -->
            <section class="properties-list featured portfolio blog">
                <div class="container">
                    <section class="headings-2 pt-0 pb-0">
                        <div class="pro-wrapper">
                            <div class="detail-wrapper-body">
                                <div class="listing-title-bar">
                                    <div class="text-heading text-left">
                                        <p><a href="/">Home </a> &nbsp;/&nbsp; <span>Listings</span></p>
                                    </div>
                                    <h3>Grid View</h3>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="headings-2 pt-0">
                        <div class="pro-wrapper">
                            <div class="detail-wrapper-body">
                                <div class="listing-title-bar">
                                    <div class="text-heading text-left">
                                        <p class="font-weight-bold mb-0 mt-3">9 Search results</p>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="cod-pad single detail-wrapper mr-2 mt-0 d-flex justify-content-md-end align-items-center">
                                <div class="input-group border rounded input-group-lg w-auto mr-4">
                                    <label
                                        class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3"
                                        for="inputGroupSelect01"><i
                                            class="fas fa-align-left fs-16 pr-2"></i>Sortby:</label>
                                    <select
                                        class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby"
                                        data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3"
                                        id="inputGroupSelect01" name="sortby">
                                        <option selected>Top Selling</option>
                                        <option value="1">Most Viewed</option>
                                        <option value="2">Price(low to high)</option>
                                        <option value="3">Price(high to low)</option>
                                    </select>
                                </div>
                                <div class="sorting-options">
                                    <a href="/forrent/detail" class="change-view-btn lde"><i
                                            class="fa fa-th-list"></i></a>
                                    <a href="#" class="change-view-btn active-view-btn"><i
                                            class="fa fa-th-large"></i></a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <div class="row">
                        @foreach($properties as $property) 
                        @if($property->types == ["Sale"] || $property->types == ["Sale", "Rent"] || $property->types == ["Sale", "Rental"] || $property->types == ["Sale","Rent","Rental"] )
                        <div class="item col-lg-4 col-md-6 col-xs-12 landscapes sale">
                            <div class="project-single" data-aos="fade-up">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="{{ route('detail.show', $property->id)}}" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button alt sale">For Sale</div>
                                            <div class="homes-price">${{$property->price_sale}}.00/month</div>
                                            <div class="news-item-img">
                                                <img class="img-responsive" src="{{asset('/cover/' . $property->cover) }}" style="height:250px; width:1000px" alt="blog image" >
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="{{ route('detail.show', $property->id)}}">{{$property->name}}</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="{{ route('detail.show', $property->id)}}">
                                            <i class="fa fa-map-marker"></i><span>{{$property->address}}</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix pb-3">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>{{$property->bedroom}} Bedrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>{{$property->bathroom}} Bathrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>{{$property->size}} sq ft</span>
                                        </li>
                                        {{-- <li class="the-icons">
                                            <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                            <span> Garages</span>
                                        </li> --}}
                                    </ul>
                                    <div class="footer">
                                        <a href="/agent">
                                            <img src="/profiles/avatars/{{ $property->agent->avatar }} " alt="author-image"
                                            class="img-circle elevation-2"> Prepare by, {{ $property->agent->name }}
                                        </a>
                                        <span>{{ $property->created_at->diffForHumans() }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                    <nav aria-label="..." class="pt-3">
                        <ul class="pagination mt-0">
                            <p>{!! $properties->links() !!}</p>
                        </ul>
                    </nav>
                </div>
            </section>
            <!-- END SECTION PROPERTIES LISTING -->
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

            <!-- ARCHIVES JS -->
            <script src="js/jquery-3.5.1.min.js"></script>
            <script src="js/rangeSlider.js"></script>
            <script src="js/tether.min.js"></script>
            <script src="js/popper.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/mmenu.min.js"></script>
            <script src="js/mmenu.js"></script>
            <script src="js/aos.js"></script>
            <script src="js/aos2.js"></script>
            <script src="js/smooth-scroll.min.js"></script>
            <script src="js/lightcase.js"></script>
            <script src="js/search.js"></script>
            <script src="js/light.js"></script>
            <script src="js/jquery.magnific-popup.min.js"></script>
            <script src="js/popup.js"></script>
            <script src="js/searched.js"></script>
            <script src="js/ajaxchimp.min.js"></script>
            <script src="js/newsletter.js"></script>
            <script src="js/inner.js"></script>
            <script src="js/color-switcher.js"></script>

            <script>
                $(".dropdown-filter").on('click', function() {

                    $(".explore__form-checkbox-list").toggleClass("filter-block");

                });
            </script>

        </div>
        <!-- Wrapper / End -->
    </body>


    <!-- Mirrored from code-theme.com/html/findhouses/properties-full-grid-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Jul 2022 08:54:58 GMT -->

    </html>
@endsection
