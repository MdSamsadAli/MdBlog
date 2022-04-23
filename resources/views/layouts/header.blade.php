<header class="header">

    <!-- Top Bar -->

    <div class="top_bar">
        <div class="container">
            <div class="row">
                <div class="col d-flex flex-row">
                    <div class="top_bar_contact_item"><div class="top_bar_icon">
                    </div>Namaskar! for personalized shopping experience please <strong style="text-decoration: underline;">login</strong> or <strong style="text-decoration: underline;">register a new account</strong></div>
                    <div class="top_bar_content ml-auto">
                        <div class="top_bar_user">
                            <div class="user_icon"><img src="images/user.svg" alt=""></div>
                            <div><a href="#">Register</a></div>
                            <div><a href="#">Sign in</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Main -->

    <div class="header_main">
        <div class="container">
            <div class="row">

                <!-- Logo -->
                <div class="col-lg-2 col-sm-3 col-3 order-1">
                    <div class="logo_container">
                        <div class="logo"><a href="#">VEGA</a></div>
                    </div>
                </div>

                <!-- Search -->
                <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                    <div class="header_search">
                        <div class="header_search_content">
                            <div class="header_search_form_container">
                                <form action="#" class="header_search_form clearfix">
                                    <input type="search" required="required" class="header_search_input" placeholder="Search for products...">
                                    <div class="custom_dropdown">
                                        <div class="custom_dropdown_list">
                                            <span class="custom_dropdown_placeholder clc">All Categories</span>
                                            <i class="fas fa-chevron-down"></i>
                                            <ul class="custom_list clc">
                                                <li><a class="clc" href="#">All Categories</a></li>
                                                <li><a class="clc" href="#">Computers</a></li>
                                                <li><a class="clc" href="#">Laptops</a></li>
                                                <li><a class="clc" href="#">Cameras</a></li>
                                                <li><a class="clc" href="#">Hardware</a></li>
                                                <li><a class="clc" href="#">Smartphones</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <button type="submit" class="header_search_button trans_300" value="Submit"><img src="images/search.png" alt=""></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Wishlist -->
                <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                    <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                        <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                            <div class="wishlist_icon"><img src="images/heart.png" alt=""></div>
                            <div class="wishlist_content">
                                <div class="wishlist_text"><a href="#">Wishlist</a></div>
                                <div class="wishlist_count">115</div>
                            </div>
                        </div>

                        <!-- Cart -->
                        <div class="cart">
                            <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                <div class="cart_icon">
                                    <img src="images/cart.png" alt="">
                                    <div class="cart_count"><span>10</span></div>
                                </div>
                                <div class="cart_content">
                                    {{-- <div class="cart_text"><a href="{{route('dashboard.cart')}}">Cart</a></div> --}}
                                    <div class="cart_price">Rs.85</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation -->

    <nav class="main_nav">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="main_nav_content d-flex flex-row">

                        <!-- Categories Menu -->

                        <div class="cat_menu_container">
                            <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                <div class="cat_burger"><span></span><span></span><span></span></div>
                                <div class="cat_menu_text">categories</div>
                            </div>

                            <ul class="cat_menu">
                                <li><a href="computers_laptops.html">Computers & Laptops<i class="fas fa-chevron-right ml-auto"></i></a></li>
                                <li><a href="#">Cameras & Photos<i class="fas fa-chevron-right"></i></a></li>
                                <li><a href="Smartphone_Tablet.html">Smartphones & Tablets<i class="fas fa-chevron-right"></i></a></li>
                                <li><a href="#">TV & Audio<i class="fas fa-chevron-right"></i></a></li>
                                <li><a href="#">Gadgets<i class="fas fa-chevron-right"></i></a></li>
                                <li><a href="#">Car Electronics<i class="fas fa-chevron-right"></i></a></li>
                                <li><a href="#">Video Games & Consoles<i class="fas fa-chevron-right"></i></a></li>
                                <li><a href="#">Accessories<i class="fas fa-chevron-right"></i></a></li>
                            </ul>
                        </div>

                        <!-- Main Nav Menu -->

                        <div class="main_nav_menu ml-auto">
                            <ul class="standard_dropdown main_nav_dropdown">
                                {{-- <li><a href="{{route('user.index')}}">Home<i class="fas fa-chevron-down"></i></a></li> --}}

                                <li class="hassubs">
                                    <a href="#">Electronics & Applications<i class="fas fa-chevron-down"></i></a>
                                    <ul>
                                        <li>
                                            <a href="computers_laptops.hmtl">Computers & Laptops<i class="fas fa-chevron-down"></i></a>
                                        </li>
                                        <li>
                                            <a href="computers_laptops.hmtl">Computers & Laptops<i class="fas fa-chevron-down"></i></a>
                                        </li>
                                        <li>
                                            <a href="computers_laptops.hmtl">Computers & Laptops<i class="fas fa-chevron-down"></i></a>
                                        </li>


                                    </ul>
                                </li>

                                <li><a href="computers_laptops.hmtl">Home Applience<i class="fas fa-chevron-down"></i></a></li>

                                <li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
                                <li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
