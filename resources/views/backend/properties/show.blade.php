@extends('backend.layouts.app')
@section('content')
    <div class="content-wrapper " style="height: 1005px;">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h4 class="m-0 ">SHOW PROPERTY </h4>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <div class="pd-wrap mt-3">
            <div class="container">

                <div class="row">
                    <div class="col-md-6">
                        <div id="slider" class="owl-carousel product-slider " >
                            <div class="item text-center">
                                <img src="{{ asset('/cover/' . $property->cover) }}" class="rounded img-responsive" alt=""
                                    srcset="">
                            </div>

                            {{-- <div class="item">
                                <img src="https://i.ytimg.com/vi/PJ_zomNMK_s/maxresdefault.jpg" />
                            </div>

                            <div class="item">
                                <img
                                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQI6nUmObt62eDkqNSmIvCN_KkQExtbpJmUbVx_eTh_Y3v3r-Jw" />
                            </div> --}}
                            @foreach ($property->images as $img)
                            <div class="item text-center">
                                <img src="{{ asset('/property/' . $img->image) }}" class="rounded img-responsive" alt=""
                                    srcset="">
                            </div>
                             @endforeach
                        </div>
                        <div id="thumb" class="owl-carousel product-thumb">
                            <div class="item text-center">
                                <img src="{{ asset('/cover/' . $property->cover) }}" class=" rounded img-responsive" alt=""
                                    srcset="">
                            </div>
                            @foreach ($property->images as $img)
                                <div class="item text-center">
                                    <img src="{{ asset('/property/' . $img->image) }}" class=" rounded img-responsive" alt=""
                                        srcset="">
                                </div>
                            @endforeach


                            {{-- <div class="item">
                                    <img src="{{ asset('/cover/' . $property->cover) }}" class="img-responsive" alt=""
                                        srcset="">
                                </div> --}}

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-dtl">
                            <div class="product-info">
                                <div class="product-name">{{ $property->name }}</div>
                                <div class="reviews-counter">
                                    <div class="rate">
                                        <li class="fa fa-map-marker"></li> {{ $property->address }}
                                    </div>
                                </div>
                                <div class="product-price-discount"><span>${{ $property->price_sale }}.00</span>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                    incididunt ut
                                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                    ullamco
                                    laboris nisi ut aliquip ex ea commodo consequat.</p>

                                <div class="row mb-4">
                                    <div class="col-md-12 mb-3">
                                        <strong for="size">PROPERTY</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span for="size">Bedrooms</span>
                                        <div class="reviews-counter">
                                            <strong class="rate">{{ $property->bedroom }}</strong>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <span for="color">Bathrooms</span>
                                        <div class="reviews-counter">
                                            <strong class="rate">{{ $property->bathroom }}</strong>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <span for="color">Size</span>
                                        <div class="reviews-counter">
                                            <strong class="rate">{{ $property->size }} Square</strong>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-md-12 mb-3">
                                        <strong for="size">AMENITY</strong>
                                    </div>
                                    <div class="col-md-4">
                                        <span for="size">Pool</span>
                                        <div class="reviews-counter">
                                            <strong class="rate">Yes</strong>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <span for="color">Parking</span>
                                        <div class="reviews-counter">
                                            <strong class="rate">Yes</strong>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <span for="color">Internet</span>
                                        <div class="reviews-counter">
                                            <strong class="rate">Yes</strong>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="product-count">
                                <label for="size">Quantity</label>
                                <form action="#" class="display-flex">
                                    <div class="qtyminus">-</div>
                                    <input type="text" name="quantity" value="1" class="qty">
                                    <div class="qtyplus">+</div>
                                </form>
                                <a href="#" class="round-black-btn">Add to Cart</a>
                            </div> --}}
                            </div>
                        </div>
                    </div>
                    <div class="product-info-tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="description-tab" data-toggle="tab" href="#description"
                                    role="tab" aria-controls="description" aria-selected="true">Description</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="description" role="tabpanel"
                                aria-labelledby="description-tab">
                                {{ $property->description }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
