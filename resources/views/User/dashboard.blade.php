
@extends('layouts.layout')
@section('content')
    <div class="banner">
    <div class="banner_background" style="background-image:url({{asset('resources/admin/images/banner_background.jpg')}})"></div>
    <div class="container fill_height">
        <div class="row fill_height">
            <div class="banner_product_image"><img src="{{asset('resources/admin/images/banner_product.png')}}" alt=""></div>
            <div class="col-lg-5 offset-lg-4 fill_height">
                <div class="banner_content">
                    <h1 class="banner_text">new era of smartphones</h1>
                    <div class="banner_price"><span>Rs.530</span>Rs.460</div>
                    <div class="banner_product_name">Apple Iphone 6s</div>
                    <div class="button banner_button"><a href="#">Shop Now</a></div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="deals_featured">
    <div class="container">
        <div class="row">
            <div class="col d-flex flex-lg-row flex-column align-items-center justify-content-start">

                <!-- Deals -->

                <div class="deals">
                    <div class="deals_title">Deals of the Week</div>
                    <div class="deals_slider_container">

                        <!-- Deals Slider -->
                        <div class="owl-carousel owl-theme deals_slider">

                            <!-- Deals Item -->
                            <div class="owl-item deals_item">
                                <div class="deals_image"><img src="{{asset('resources/admin/images/deals.png')}}" alt=""></div>
                                <div class="deals_content">
                                    <div class="deals_info_line d-flex flex-row justify-content-start">
                                        <div class="deals_item_category"><a href="#">Headphones</a></div>
                                        <div class="deals_item_price_a ml-auto">Rs.300</div>
                                    </div>
                                    <div class="deals_info_line d-flex flex-row justify-content-start">
                                        <div class="deals_item_name">Beoplay H7</div>
                                        <div class="deals_item_price ml-auto">$225</div>
                                    </div>
                                    <div class="available">
                                        <div class="available_line d-flex flex-row justify-content-start">
                                            <div class="available_title">Available: <span>6</span></div>
                                            <div class="sold_title ml-auto">Already sold: <span>28</span></div>
                                        </div>
                                        <div class="available_bar"><span style="width:17%"></span></div>
                                    </div>
                                    <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                        <div class="deals_timer_title_container">
                                            <div class="deals_timer_title">Hurry Up</div>
                                            <div class="deals_timer_subtitle">Offer ends in:</div>
                                        </div>
                                        <div class="deals_timer_content ml-auto">
                                            <div class="deals_timer_box clearfix" data-target-time="">
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer1_hr" class="deals_timer_hr"></div>
                                                    <span>hours</span>
                                                </div>
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer1_min" class="deals_timer_min"></div>
                                                    <span>mins</span>
                                                </div>
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer1_sec" class="deals_timer_sec"></div>
                                                    <span>secs</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Deals Item -->
                            <div class="owl-item deals_item">
                                <div class="deals_image"><img src="images/deals.png" alt=""></div>
                                <div class="deals_content">
                                    <div class="deals_info_line d-flex flex-row justify-content-start">
                                        <div class="deals_item_category"><a href="#">Headphones</a></div>
                                        <div class="deals_item_price_a ml-auto">$300</div>
                                    </div>
                                    <div class="deals_info_line d-flex flex-row justify-content-start">
                                        <div class="deals_item_name">Beoplay H7</div>
                                        <div class="deals_item_price ml-auto">$225</div>
                                    </div>
                                    <div class="available">
                                        <div class="available_line d-flex flex-row justify-content-start">
                                            <div class="available_title">Available: <span>6</span></div>
                                            <div class="sold_title ml-auto">Already sold: <span>28</span></div>
                                        </div>
                                        <div class="available_bar"><span style="width:17%"></span></div>
                                    </div>
                                    <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                        <div class="deals_timer_title_container">
                                            <div class="deals_timer_title">Hurry Up</div>
                                            <div class="deals_timer_subtitle">Offer ends in:</div>
                                        </div>
                                        <div class="deals_timer_content ml-auto">
                                            <div class="deals_timer_box clearfix" data-target-time="">
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer2_hr" class="deals_timer_hr"></div>
                                                    <span>hours</span>
                                                </div>
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer2_min" class="deals_timer_min"></div>
                                                    <span>mins</span>
                                                </div>
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer2_sec" class="deals_timer_sec"></div>
                                                    <span>secs</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Deals Item -->
                            <div class="owl-item deals_item">
                                <div class="deals_image"><img src="images/deals.png" alt=""></div>
                                <div class="deals_content">
                                    <div class="deals_info_line d-flex flex-row justify-content-start">
                                        <div class="deals_item_category"><a href="#">Headphones</a></div>
                                        <div class="deals_item_price_a ml-auto">$300</div>
                                    </div>
                                    <div class="deals_info_line d-flex flex-row justify-content-start">
                                        <div class="deals_item_name">Beoplay H7</div>
                                        <div class="deals_item_price ml-auto">$225</div>
                                    </div>
                                    <div class="available">
                                        <div class="available_line d-flex flex-row justify-content-start">
                                            <div class="available_title">Available: <span>6</span></div>
                                            <div class="sold_title ml-auto">Already sold: <span>28</span></div>
                                        </div>
                                        <div class="available_bar"><span style="width:17%"></span></div>
                                    </div>
                                    <div class="deals_timer d-flex flex-row align-items-center justify-content-start">
                                        <div class="deals_timer_title_container">
                                            <div class="deals_timer_title">Hurry Up</div>
                                            <div class="deals_timer_subtitle">Offer ends in:</div>
                                        </div>
                                        <div class="deals_timer_content ml-auto">
                                            <div class="deals_timer_box clearfix" data-target-time="">
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer3_hr" class="deals_timer_hr"></div>
                                                    <span>hours</span>
                                                </div>
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer3_min" class="deals_timer_min"></div>
                                                    <span>mins</span>
                                                </div>
                                                <div class="deals_timer_unit">
                                                    <div id="deals_timer3_sec" class="deals_timer_sec"></div>
                                                    <span>secs</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                    <div class="deals_slider_nav_container">
                        <div class="deals_slider_prev deals_slider_nav"><i class="fas fa-chevron-left ml-auto"></i></div>
                        <div class="deals_slider_next deals_slider_nav"><i class="fas fa-chevron-right ml-auto"></i></div>
                    </div>
                </div>

                <!-- Featured -->
                <div class="featured">
                    <div class="tabbed_container">
                        <div class="tabs">
                            <ul class="clearfix">
                                <li class="active">Featured</li>
                                {{-- <a href="{{route('user.create')}}">Add Items</a> --}}
                            </ul>
                            <div class="tabs_line"><span></span></div>
                        </div>

                        <!-- Product Panel -->
                        @foreach($db as $user)

                        <div class="product_panel panel active">
                            <div class="featured_slider slider">

                                <!-- Slider Item -->
                                <div class="featured_slider_item">
                                    <div class="border_active"></div>
                                    <div class="product_item d-flex flex-column align-items-center justify-content-center text-center">
                                        <div class="product_image d-flex flex-column align-items-center justify-content-center">
                                                {{-- <img src="{{$user->image_path}}" alt=""> --}}
                                                @if($user->images)
                                        <img src="{{asset('uploads/admin/'.$user->images)}}" alt="img" style="width:100px; height:100px">
                                        @else
                                        <span>Image not found</span>
                                    @endif
                                        </div>
                                        <div class="product_content">
                                            @if(!empty($user->product))
                                                <div class="product_price">{{$user->product}}</div>
                                            @endif

                                            @if(!empty($user->price))
                                                <div class="product_name"><div><a href="product.html">{{$user->price}}</a></div></div>
                                            @endif

                                            <div class="product_extras">
                                                <div class="product_color">
                                                </div>
                                                <button class="product_cart_button">Add to Cart</button>
                                            </div>
                                        </div>
                                        <div class="product_fav"><i class="fas fa-heart"></i></div>
                                        <ul class="product_marks">
                                            <li class="product_mark product_discount"></li>
                                            @if(!empty($user->tag))
                                                <li class="product_mark product_new">{{$user->tag}}</li>
                                            @endif
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>

            </div>
        </div>
    </div>
    </div>


@endsection
