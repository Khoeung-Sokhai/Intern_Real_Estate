
@extends('layouts.layout')
@section('content')
@if (Auth::check())
    <body class="inner-pages sin-1 homepage-4 hd-white">
        <!-- Wrapper -->
        <div id="wrapper">
            
            <div class="clearfix"></div>
            <!-- Header Container / End -->
            <!-- END SECTION HEADINGS -->

            <!-- START SECTION PROPERTIES LISTING -->
            <section class="single-proper blog details">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 col-md-12 blog-pots">
                            <div class="row">
                                <div class="col-md-12">
                                    <section class="headings-2 pt-0">
                                        <div class="pro-wrapper">
                                            <div class="detail-wrapper-body">
                                                <div class="listing-title-bar ">

                                                    <h3>{{ $data->name }}  </h3>
                                                    @foreach($data->types as  $type)
                                                    @if($type == 'Rent')
                                                        <span class="mrg-l-5 category-tag bg-warning" style="font-size: 15px; color:white; ">  
                                                            {{ $type }}
                                                        </span>
                                                    @elseif($type == 'Sale')
                                                        <span class="mrg-l-5 category-tag bg-danger" style="font-size: 15px; color:white; " > 
                                                            {{ $type }}
                                                        </span>
                                                    @elseif($type == 'Rental')
                                                        <span class="mrg-l-5 category-tag bg-primary" style="font-size: 15px; color:white;" > 
                                                            {{ $type }}
                                                        </span>
                                                    @endif
                                                    @endforeach
                                                   
                                                    <div class="mt-1">
                                                        <a href="#listing-location" class="listing-address">
                                                            <i
                                                                class="fa fa-map-marker pr-2 ti-location-pin mrg-r-5"></i>{{ $data->address }}
                                                        </a>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                
                                            </div>
                                            <div class="detail-wrapper mr-2">
                                                    <div class="listing-title-bar">
                                                    <h3 class="ml-2">Prices</h3>
                                                        @if($data->types == ["Sale"] || $data->types == ["Sale", "Rental"] || $data->types == ["Sale", "Rent"] || $data->types == ["Sale","Rent","Rental"])
                                                       
                                                        <span class="category-tag bg-danger" style="font-size: 15px; color:white; " > 
                                                            ${{ $data->price_Sale }}
                                                        </span>
                                                           
                                                        @endif
                                                        @if($data->types == ["Rent"] || $data->types == ["Sale", "Rent"] || $data->types == ["Rent", "Rental"] || $data->types == ["Sale","Rent","Rental"])                                   
                                                        
                                                        <span class="category-tag bg-warning" style="font-size: 15px; color:white; ">  
                                                            ${{ $data->price_Rent }}
                                                        </span>
                                                        @endif
                                                        @if($data->types == ["Rental"] || $data->types == ["Sale", "Rental"] || $data->types == ["Rent", "Rental"] || $data->types == ["Sale","Rent","Rental"])
                                                      
                                                        <span class="category-tag bg-primary" style="font-size: 15px; color:white;" > 
                                                            ${{ $data->price_Rental }}
                                                        </span>
                                                        @endif
                                                    
                                                    
                                                    </div>
                                                
                                            </div>
                                            
                                            
                                        </div>
                                    </section>
                                    <!-- main slider carousel items -->
                                    <div id="listingDetailsSlider" class="carousel listing-details-sliders slide mb-30">
                                        <h5 class="mb-4">Gallery</h5>
                                        <div class="carousel-inner">
                                            <div class="active item carousel-item" data-slide-number="0">
                                                <img src="{{ asset('/cover/' . $data->cover) }}" class="img-fluid"
                                                    alt="listing-small" style="width:1000px; height:500px">
                                            </div>
                                            @foreach ($data->images as $key => $img)
                                                <div class=" item carousel-item" data-slide-number="{{ ++$key }}">



                                                    <img src="{{ asset('/property/' . $img->image) }}"
                                                        style="width:1000px; height:500px" class="img-fluid"
                                                        alt="listing-small">


                                                </div>
                                            @endforeach


                                        </div>
                                        <!-- main slider carousel nav controls -->
                                        <ul class="carousel-indicators smail-listing list-inline">
                                            <li class="list-inline-item active">
                                                <a id="carousel-selector-0" class="selected" data-slide-to="0"
                                                    data-target="#listingDetailsSlider">
                                                    <img src="{{ asset('/cover/' . $data->cover) }}"
                                                        style="width:200px; height:120px" class="img-fluid"
                                                        alt="listing-small">
                                                </a>
                                            </li>
                                            @foreach ($data->images as $key => $img)
                                                <li class="list-inline-item ">
                                                    <a id="carousel-selector-{{ $key + 2 }}" class="selected"
                                                        data-slide-to="{{ ++$key }}"
                                                        data-target="#listingDetailsSlider">

                                                        <img src="{{ asset('/property/' . $img->image) }}"
                                                            style="width:200px; height:120px" class="img-fluid"
                                                            alt="listing-small">

                                                    </a>
                                                </li>
                                            @endforeach

                                        </ul><a class="carousel-control left" href="#listingDetailsSlider" data-slide="prev">
                                            <i class="fa fa-angle-left"  style="color:white; "></i>
                                        </a>
                                        <a class="carousel-control right" href="#listingDetailsSlider" data-slide="next">
                                            <i class="fa fa-angle-right" style="color:white; "></i>
                                        </a>
                                        <!-- main slider carousel items -->
                                    </div>
                                    <div class="single homes-content details mb-30">
                                        <!-- title -->
                                        <h5 class="mb-4">Prices</h5>
                                        <ul class="homes-list clearfix">
                                            
                                            @if($data->types == ["Rent"] || $data->types == ["Sale", "Rent"] || $data->types == ["Rent", "Rental"] || $data->types == ["Sale","Rent","Rental"])                                   
                                            <li>
                                                <span class="font-weight-bold mr-1">Price For Rent:</span> 
                                            
                                                <span class="det">${{ $data->price_Rent }}</span>
                                            </li>
                                            @endif
        
                                            @if($data->types == ["Sale"] || $data->types == ["Sale", "Rental"] || $data->types == ["Sale", "Rent"] || $data->types == ["Sale","Rent","Rental"])
                                            <li>
                                                <span class="font-weight-bold mr-1">Price For Sale:</span> 
                                               
                                                <span class="det">${{ $data->price_Sale }}</span>
                                            </li> 
                                            @endif
        
                                            @if($data->types == ["Rental"] || $data->types == ["Sale", "Rental"] || $data->types == ["Rent", "Rental"] || $data->types == ["Sale","Rent","Rental"])
                                            <li>
                                                <span class="font-weight-bold mr-1">Price For Rental:</span> 
                                               
                                                <span class="det">${{ $data->price_Rental }}</span>
                                            </li> 
                                            @endif
                                        </ul>
                                        <!-- title -->
                                        <h5 class="mt-5">Properties Type</h5>
                                        <!-- cars List -->
                                        <ul class="homes-list clearfix">
                                            <span class="font-weight-bold mr-1">Property Types:</span> 
                                               
                                            
                                                {{-- <i class="fa fa-check-square" aria-hidden="true"></i> --}}
                                                @foreach($data->types as  $type)
                                                @if($type == 'Rent')
                                                <span class="badge badge-success bg-warning" style="font-size: 15px; color:white; " > 
                                                    {{ $type }}
                                                </span>
                                                 @elseif($type == 'Sale')
                                                <span class="badge badge-success bg-danger" style="font-size: 15px; color:white; " > 
                                                    {{ $type }}
                                                </span>
                                                 @elseif($type == 'Rental')
                                                <span class="badge badge-success bg-primary" style="font-size: 15px; color:white;" > 
                                                    {{ $type }}
                                                </span>
                                                @endif
                                                @endforeach
                                               
                                         
                                        </ul>
                                    </div>
        
                                
                                    <div class="blog-info details mb-30">
                                        <h5 class="mb-4">Description</h5>
                                        <p class="mb-3">{{ $data->description }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="single homes-content details mb-30">
                                <!-- title -->
                                <h5 class="mb-4">Property Details</h5>
                                <ul class="homes-list clearfix">
                                    <li>
                                        <span class="font-weight-bold mr-1">Rooms:</span>
                                        <span class="det">{{ $data->bedroom }}</span>
                                    </li>
                                    <li>
                                        <span class="font-weight-bold mr-1">Bedrooms:</span>
                                        <span class="det">{{ $data->bedroom }}</span>
                                    </li>
                                    <li>
                                        <span class="font-weight-bold mr-1">Bath:</span>
                                        <span class="det">{{ $data->bathroom }}</span>
                                    </li>
                                    <li>
                                        <span class="font-weight-bold mr-1">Size:</span>
                                        <span class="det">{{ $data->size }} </span>
                                    </li>
                                    
                                    <li>
                                        <span class="font-weight-bold mr-1">Year Built:</span>
                                        <span class="det">{{ $data->created_at->todatestring() }}</span>
                                    </li>
                                   
                                </ul>
                                <!-- title -->
                                <h5 class="mt-5">Amenities</h5>
                                <!-- cars List -->
                                <ul class="homes-list clearfix">
                                   
                                        {{-- <i class="fa fa-check-square" aria-hidden="true"></i> --}}
                                        
                                        <span>{{ $data->amenity }}</span>
                                 
                                </ul>
                            </div>



                            <!-- Star Reviews -->

                            <!-- End Reviews -->
                            <!-- Star Add Review -->

                            <!-- End Add Review -->
                        </div>
                        <aside class="col-lg-4 col-md-12 car">
                            <div class="single widget">
                                <!-- End: Schedule a Tour -->
                                <!-- end author-verified-badge -->
                                <div class="sidebar ">
                                    <div class="widget-boxed mt-33 mt-5">
                                        <div class="widget-boxed-header">
                                            <h4>Agent Information</h4>
                                        </div>
                                        <div class="widget-boxed-body">
                                            <div class="sidebar-widget author-widget2">
                                                <div class="author-box clearfix">
                                                    <img src="/profiles/avatars/{{ $data->agent->avatar }}"
                                                        alt="author-image" class="author__img">
                                                    <h4 class="author__title">{{ $data->agent->name }}</h4>
                                                    <p class="author__meta">Agent of Property</p>
            
                                                    
                                                </div>
                                                <ul class="author__contact">
                                                    
                                                    <li><span class="la la-phone"><i class="fa fa-phone"
                                                                aria-hidden="true"></i></span><a href="#">+855 {{ $data->agent->phone }}</a></li>
                                                    <li><span class="la la-envelope-o"><i class="fa fa-envelope"
                                                                aria-hidden="true"></i></span><a
                                                            href="#">{{ $data->agent->email }}</a></li>
                                                </ul>
                                                <div class="agent-contact-form-sidebar">
                                                    <h4>Request Inquiry</h4>
                                                    <form id="contactform" class="contact-form"
                                                        action="{{ route('detail.store', $data->agent->id ) }}" name="contactform"
                                                        method="post" novalidate>
                                                        @csrf
                                                        <div id="success" class="successform">
                                                            <p class="alert alert-success font-weight-bold"
                                                                role="alert">Your message was sent
                                                                successfully!</p>
                                                        </div>
                                                        <div id="error" class="errorform">
                                                            <p>Something went wrong, try refreshing and submitting the form
                                                                again.</p>
                                                        </div>
                                                       
                                                        
                                                    
                                                        
                                                        @auth()
                                                        <div class="form-group">
                                                            <input type="text" hidden value="{{ Auth::user()->id }}"
                                                                class="form-control input-custom input-full"
                                                                name="agent_id" placeholder="Name">
                                                        </div>
                                                        @endauth
                                                        
                                                        <div class="form-group">
                                                            <input type="text" required
                                                                class="form-control input-custom input-full"
                                                                name="name" placeholder="Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" required
                                                                class="form-control input-custom input-full"
                                                                name="phone" placeholder="phone">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email"
                                                                class="form-control input-custom input-full"
                                                                name="email" placeholder="Email">
                                                        </div>
                                                        <div class="form-group">
                                                            <textarea class="form-control textarea-custom input-full" id="ccomment" name="message" required rows="8"
                                                                placeholder="Message"></textarea>
                                                        </div>

                                                        <button type="submit" id="submit-contact"
                                                            class="btn btn-primary btn-lg">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </aside>
                    </div>
                    <!-- START SIMILAR PROPERTIES -->

                    <!-- END SIMILAR PROPERTIES -->
                </div>
            </section>
            <!-- END SECTION PROPERTIES LISTING -->

            @else
            @include('auth.login')
           
            <!--register form -->

            <!--register form end -->

            <!-- Date Dropper Script-->
            <script>
                $('#reservation-date').dateDropper();
            </script>
            <!-- Time Dropper Script-->
            <script>
                this.$('#reservation-time').timeDropper({
                    setCurrentTime: false,
                    meridians: true,
                    primaryColor: "#e8212a",
                    borderColor: "#e8212a",
                    minutesInterval: '15'
                });
            </script>

            <script>
                $(document).ready(function() {
                    $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
                        disableOn: 700,
                        type: 'iframe',
                        mainClass: 'mfp-fade',
                        removalDelay: 160,
                        preloader: false,
                        fixedContentPos: false
                    });
                });
            </script>

            <script>
                $('.slick-carousel').each(function() {
                    var slider = $(this);
                    $(this).slick({
                        infinite: true,
                        dots: false,
                        arrows: false,
                        centerMode: true,
                        centerPadding: '0'
                    });

                    $(this).closest('.slick-slider-area').find('.slick-prev').on("click", function() {
                        slider.slick('slickPrev');
                    });
                    $(this).closest('.slick-slider-area').find('.slick-next').on("click", function() {
                        slider.slick('slickNext');
                    });
                });
            </script>

        </div>
        <!-- Wrapper / End -->
    </body>
@endif

    <!-- Mirrored from code-theme.com/html/findhouses/single-property-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 31 Jul 2022 08:55:08 GMT -->
@endsection

