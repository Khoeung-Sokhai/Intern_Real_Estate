@extends('layouts.layout')
@section('content')
<body class="th-18">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <div class="clearfix"></div>
        <!-- Header Container / End -->
        <!-- STAR HEADER IMAGE -->
        <section class="header-image home-18 d-flex align-items-center" id="slider">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6" data-aos="fade-right">
                        <div class="left wow fadeInLeft">
                            <h1>The best way to find your dream home</h1>
                            <p>With over 400,000 active listings, FindHouses has the largest inventory of apartments in
                                the United States..</p>
                            <a href="submit-property.html" class="btn-white">Get Started</a>
                        </div>
                    </div>
                    <div class="col-lg-6 google-maps home-18" data-aos="fade-left">
                        <div class="filter">
                            <div class="filter-toggle d-lg-none d-sm-flex"><i class="fa fa-search"></i>
                                <h6>START SEARCHING</h6>
                            </div>
                            <form method="get">
                                <div class="filter-item">
                                    <label>Property Status</label>
                                    <select name="property-status">
                                        <option value="">Any Status</option>
                                        <option value="for-sale">For Sale</option>
                                        <option value="for-rent">For Rent</option>
                                        <option value="sold">Sold</option>
                                    </select>
                                </div>
                                <div class="filter-item">
                                    <label>Location</label>
                                    <select name="property-type">
                                        <option value="">Any Location</option>
                                        <option value="family-house">New York</option>
                                        <option value="apartment">Los Angeles</option>
                                        <option value="condo">Chicago</option>
                                        <option value="condo">Philadelphia</option>
                                        <option value="condo">San Francisco</option>
                                    </select>
                                </div>
                               <div class="filter-item mb-3">
                                    <label>Price</label>
                                    <input type="text" disabled class="slider_amount m-t-lg-30 m-t-xs-0 m-t-sm-10 mb-3">
                                    <div class="slider-range mt-2"></div>
                                </div>
                                <div class="filter-item filter-half mt-3">
                                    <label>Beds</label>
                                    <select name="beds" id="property-beds">
                                        <option value="">Any</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <div class="filter-item filter-half filter-half-last mt-3">
                                    <label>Baths</label>
                                    <select name="baths" id="property-baths">
                                        <option value="">Any</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                <div class="clear"></div>
                                <div class="filter-item"> 
                                    <div class="clear"></div>
                                </div>
                                <div class="filter-item">
                                    <label class="label-submit p-0 m-0">Submit</label>
                                    <br />
                                    <input type="submit" class="button alt mb-0" value="SEARCH PROPERTY" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END HEADER IMAGE -->

        <!-- START SECTION PROPERTIES FOR SALE -->
        <section class="recently portfolio bg-white-1 home18">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Properties </span>For Sale</h2>
                    <p>Find your dream home from our Sale added properties.</p>
                </div>
                <div class="portfolio col-xl-12">
                    <div class="slick-lancers">
                        @foreach($properties as $key => $property)
                        @if($property->types == ["Sale"] || $property->types == ["Sale", "Rent"] || $property->types == ["Sale", "Rental"] || $property->types == ["Sale","Rent","Rental"] )
                       
                        <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                            <div class="landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4><a href="{{ route('detail.show', $property->id)}}" >View Property</a><span
                                                    class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="{{ route('detail.show', $property->id)}}" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button alt sale">For Sale</div>
                                                <div class="news-item-img">
                                                    <img class="img-responsive" src="{{asset('/cover/' . $property->cover) }}" style="height:250px; width:1000px" alt="blog image" >
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <!-- homes content -->
                                    <div class="homes-content">
                                        <!-- homes address -->
                                        <h3><a href="/detail">{{$property->name}}</a></h3>
                                        <p class="homes-address mb-3">
                                            <a href="/detail">
                                                <i class="fa fa-map-marker"></i><span>{{$property->address}}</span>
                                            </a>
                                        </p>
                                        <!-- homes List -->
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span>{{$property->bedroom}} Bedrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span>{{$property->bathroom}} Bathrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span>{{$property->size}} sq ft</span>
                                            </li>
                                        </ul>
                                        <!-- Price -->
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                                <a href="/detail">$ {{$property->price_sale}}.00</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>
                                        </div>
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
                        </div>
                        @endif
                    @endforeach
        </section>
        <!-- END SECTION PROPERTIES FOR SALE -->

        <!-- START SECTION PROPERTIES FOR RENT -->
        <section class="recently portfolio home18 bg-white-2">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Properties </span>For Rent</h2>
                    <p>Find your dream home from our Rent added properties.</p>
                </div>
                <div class="portfolio col-xl-12">
                    <div class="slick-lancers">
                        @foreach($properties as $key => $property)
                        @if($property->types == ["Rent"] || $property->types == ["Sale", "Rent"] || $property->types == ["Rent", "Rental"] || $property->types == ["Sale","Rent","Rental"] )
                        <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                            <div class="landscapes">
                                <div class="project-single">
                                    <div class="project-inner project-head">
                                        <div class="project-bottom">
                                            <h4><a href="{{ route('detail.show', $property->id)}}" >View Property</a><span
                                                    class="category">Real Estate</span></h4>
                                        </div>
                                        <div class="homes">
                                            <!-- homes img -->
                                            <a href="{{ route('detail.show', $property->id)}}" class="homes-img">
                                                <div class="homes-tag button alt featured">Featured</div>
                                                <div class="homes-tag button sale rent">For Rent</div>
                                                <div class="homes-price">Family Home</div>
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
                                        <ul class="homes-list clearfix">
                                            <li>
                                                <i class="fa fa-bed" aria-hidden="true"></i>
                                                <span>{{$property->bedroom}} Bedrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-bath" aria-hidden="true"></i>
                                                <span>{{$property->bathroom}} Bathrooms</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-object-group" aria-hidden="true"></i>
                                                <span>{{$property->size}} sq ft</span>
                                            </li>
                                        </ul>
                                        <!-- Price -->
                                        <div class="price-properties">
                                            <h3 class="title mt-3">
                                                <a href="{{ route('detail.show', $property->id)}}">$ {{$property->price_rent}}.00</a>
                                            </h3>
                                            <div class="compare">
                                                <a href="#" title="Share">
                                                    <i class="fas fa-share-alt"></i>
                                                </a>
                                                <a href="#" title="Favorites">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>
                                        </div>
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
                        </div>
                        @endif
                        @endforeach
        </section>
        <!-- END SECTION PROPERTIES FOR RENT -->

        <!-- START SECTION WHY CHOOSE US -->
        <section class="how-it-works bg-white-1 home18">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Why </span>Choose Us</h2>
                    <p>We provide full service at every step.</p>
                </div>
                <div class="row service-1">
                    <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="150">
                        <div class="serv-flex">
                            <div class="art-1 img-13">
                                <img src="images/icons/icon-1.svg" alt="">
                                <h3>Wide Renge Of Properties</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici
                                    consectetur debits adipisicing lacus consectetur Business Directory.</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="250">
                        <div class="serv-flex">
                            <div class="art-1 img-14">
                                <img src="images/icons/icon-2.svg" alt="">
                                <h3>Trusted by thousands</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici
                                    consectetur debits adipisicing lacus consectetur Business Directory.</p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up"
                        data-aos-delay="350">
                        <div class="serv-flex arrow">
                            <div class="art-1 img-15">
                                <img src="images/icons/icon-3.svg" alt="">
                                <h3>24/7 support</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici
                                    consectetur debits adipisicing lacus consectetur Business Directory.</p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- END SECTION WHY CHOOSE US -->

        <!-- START SECTION TOP LOCATIONS -->
        <section class="visited-cities bg-white-2 home18">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Most Popular </span>Places</h2>
                    <p>We provide full service at every step.</p>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    </div>
                    <div class="col-lg-6 col-md-6 pr-1" data-aos="fade-right">
                        <!-- Image Box -->
                        <a href="listing-details.html" class="img-box hover-effect">
                            <img src="images/popular-places/7.jpg" class="img-responsive" alt="">
                            <!-- Badge -->
                            <div class="img-box-content visible">
                                <h4 class="mb-2">Phnom Penh</h4>
                                <span>{{ $phnom_penh }} Properties</span>
                                <ul class="starts text-center mt-2">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 pr-1" data-aos="fade-left">
                        <!-- Image Box -->
                        <a href="listing-details.html" class="img-box hover-effect">
                            <img src="images/popular-places/8.jpg" class="img-responsive" alt="">
                            <div class="img-box-content visible">
                                <h4 class="mb-2">Sihano</h4>
                                <span> {{ $sihano }}Properties</span>
                                <ul class="starts text-center mt-2">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-half"></i>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 pr" data-aos="fade-left">
                        <!-- Image Box -->
                        <a href="listing-details.html" class="img-box hover-effect">
                            <img src="images/popular-places/9.jpg" class="img-responsive" alt="">
                            <div class="img-box-content visible">
                                <h4 class="mb-2">Siem reab </h4>
                                <span>{{ $siem_reab }} Properties</span>
                                <ul class="starts text-center mt-2">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 pr-1" data-aos="fade-right">
                        <!-- Image Box -->
                        <a href="listing-details.html" class="img-box no-mb mi x3 hover-effect">
                            <img src="images/popular-places/10.jpg" class="img-responsive" alt="">
                            <div class="img-box-content visible">
                                <h4 class="mb-2">Batambang</h4>
                                <span>{{ $bat_dambang }} Properties</span>
                                <ul class="starts text-center mt-2">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-half"></i>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 pr-1" data-aos="fade-right">
                        <!-- Image Box -->
                        <a href="listing-details.html" class="img-box no-mb mi x3 hover-effect">
                            <img src="images/popular-places/11.jpg" class="img-responsive" alt="">
                            <div class="img-box-content visible">
                                <h4 class="mb-2">Kompongcham</h4>
                                <span>{{ $kompongcham }} Properties</span>
                                <ul class="starts text-center mt-2">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-6 col-md-6 pr" data-aos="fade-left">
                        <!-- Image Box -->
                        <a href="listing-details.html" class="img-box san no-mb x3 hover-effect">
                            <img src="images/popular-places/5.jpg" class="img-responsive" alt="">
                            <div class="img-box-content visible">
                                <h4 class="mb-2">Kompot </h4>
                                <span>{{ $kompot }} Properties</span>
                                <ul class="starts text-center mt-2">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star-half"></i>
                                    </li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION TOP LOCATIONS -->

        

        <!-- START SECTION BLOG -->
        <section class="blog-section bg-white-2 home18">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Tips & </span>Articles</h2>
                    <p>Grow your appraisal and real estate career with tips.</p>
                </div>
                <div class="news-wrap">
                    <div class="row">
                        <div class="col-xl-4 col-md-6 col-xs-12">
                            <div class="news-item" data-aos="fade-up" data-aos-delay="150">
                                <a href="blog-details.html" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="images/blog/b-1.jpg" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="blog-details.html">
                                        <h3>Explore The World</h3>
                                    </a>
                                    <div class="dates">
                                        <span class="date">April 11, 2020 &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i>
                                                <span>306</span>
                                            </li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span>
                                            </li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr big-news">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet,
                                            consectetur.</p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="blog-details.html" class="news-link">Read more...</a>
                                        <div class="admin">
                                            <p>By, Karl Smith</p>
                                            <img src="images/testimonials/ts-6.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-xs-12">
                            <div class="news-item" data-aos="fade-up" data-aos-delay="250">
                                <a href="blog-details.html" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="images/blog/b-2.jpg" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="blog-details.html">
                                        <h3>Find Good Places</h3>
                                    </a>
                                    <div class="dates">
                                        <span class="date">May 20, 2020 &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i>
                                                <span>306</span>
                                            </li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span>
                                            </li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr big-news">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet,
                                            consectetur.</p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="blog-details.html" class="news-link">Read more...</a>
                                        <div class="admin">
                                            <p>By, Lis Jhonson</p>
                                            <img src="images/testimonials/ts-5.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-xs-12">
                            <div class="news-item no-mb" data-aos="fade-up" data-aos-delay="350">
                                <a href="blog-details.html" class="news-img-link">
                                    <div class="news-item-img">
                                        <img class="img-responsive" src="images/blog/b-3.jpg" alt="blog image">
                                    </div>
                                </a>
                                <div class="news-item-text">
                                    <a href="blog-details.html">
                                        <h3>All Places In Town</h3>
                                    </a>
                                    <div class="dates">
                                        <span class="date">Jun 30, 2020 &nbsp;/</span>
                                        <ul class="action-list pl-0">
                                            <li class="action-item pl-2"><i class="fa fa-heart"></i>
                                                <span>306</span>
                                            </li>
                                            <li class="action-item"><i class="fa fa-comment"></i> <span>34</span>
                                            </li>
                                            <li class="action-item"><i class="fa fa-share-alt"></i> <span>122</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="news-item-descr big-news">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua ipsum dolor sit amet,
                                            consectetur.</p>
                                    </div>
                                    <div class="news-item-bottom">
                                        <a href="blog-details.html" class="news-link">Read more...</a>
                                        <div class="admin">
                                            <p>By, Ted Willians</p>
                                            <img src="images/testimonials/ts-4.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION BLOG -->

        <!-- STAR SECTION PARTNERS -->
        <div class="partners bg-white-1">
            <div class="container">
                <div class="owl-carousel style2">
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/11.jpg" alt="">
                    </div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/12.jpg" alt="">
                    </div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/13.jpg" alt="">
                    </div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/14.jpg" alt="">
                    </div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/15.jpg" alt="">
                    </div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/16.jpg" alt="">
                    </div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/17.jpg" alt="">
                    </div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/11.jpg" alt="">
                    </div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/12.jpg" alt="">
                    </div>
                    <div class="owl-item" data-aos="fade-up"><img src="images/partners/13.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <!-- END SECTION PARTNERS -->

        <!-- START PRELOADER -->
        <div id="preloader">
            <div id="status">
                <div class="status-mes"></div>
            </div>
        </div>
        <!-- END PRELOADER -->

        
        <script>
            $(window).on('scroll load', function() {
                $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
            });
        </script>

        <script>
            $('.slick-lancers').slick({
                infinite: false,
                slidesToShow: 3,
                slidesToScroll: 1,
                dots: true,
                arrows: true,
                adaptiveHeight: true,
                responsive: [{
                    breakpoint: 1292,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 993,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        dots: true,
                        arrows: false
                    }
                }, {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false
                    }
                }]
            });
        </script>

        <!-- Slider Revolution scripts -->
        <script src="revolution/js/jquery.themepunch.tools.min.js"></script>
        <script src="revolution/js/jquery.themepunch.revolution.min.js"></script>

        <!-- MAIN JS -->
        <script src="js/script.js"></script>

    </div>
    <!-- Wrapper / End -->
</body>
@endsection