@extends('layouts.master')

@section('content')

    <!--================================
        START HERO AREA
    =================================-->
    <section class="hero-area hero--2 bgimage">
        <div class="bg_image_holder">
            <img src="images/products/ant-rozetsky-460461-unsplash_1000_563_80.jpg" alt="">
        </div>

        <!-- start hero-content -->
        <div class="hero-content">
            <!-- start .contact_wrapper -->
            <div class="content-wrapper">
                <!-- start .container -->
                <div class="container">
                    <!-- start row -->
                    <div class="row">
                        <!-- start col-md-12 -->
                        <div class="col-md-6">
                            <div class="hero__content__title">
                                <h1>
                                    Order Farm Products Online with ease now on kosdor
                                </h1>
                                <p class="tagline">Kosdor is an online e-commerce system which take care of the stress
                                    of exporting and importing of goods.</p>
                            </div>
                            <!-- start .hero__btn-area-->
                            <div class="hero__btn-area">
                                <a href="#" class="btn btn--round btn--lg">View All Products</a>
                                <a href="#" class="btn btn--round btn--lg">Popular Products</a>
                            </div>
                            <!-- end .hero__btn-area-->
                        </div>
                        <!-- end /.col-md-12 -->
                    </div>
                    <!-- end /.row -->
                </div>
                <!-- end /.container -->
            </div>
            <!-- end .contact_wrapper -->
        </div>
        <!-- end hero-content -->

        <!--start search-area -->
        <div class="search-area">
            <!-- start .container -->
            <div class="container">
                <!-- start .container -->
                <div class="row">
                    <!-- start .col-sm-12 -->
                    <div class="col-sm-12">
                        <!-- start .search_box -->
                        <div class="search_box">
                            <form action="#">
                                <input type="text" class="text_field" placeholder="Search your products...">
                                <div class="search__select select-wrap">
                                    <select name="category" class="select--field" id="cat">
                                        <option value="">All Categories</option>
                                        <option value="">Food</option>
                                        <option value="">Cloth</option>
                                        <option value="">Fruits</option>
                                        <option value="">Gadgets</option>
                                        <option value="">Chemicals</option>
                                    </select>
                                    <span class="lnr lnr-chevron-down"></span>
                                </div>
                                <button onclick="alert('Coming Soon')" class="search-btn btn--lg">Search Now</button>
                            </form>
                        </div>
                        <!-- end ./search_box -->
                    </div>
                    <!-- end /.col-sm-12 -->
                </div>
                <!-- end /.row -->
            </div>
            <!-- end /.container -->
        </div>
        <!--start /.search-area -->
    </section>
    <!--================================
        END HERO AREA
    =================================-->


    <!--================================
        START PRODUCTS AREA
    =================================-->
    <section class="products section--padding">
        <!-- start container -->
        <div class="container">
            <!-- start row -->
            <div class="row">
                <!-- start col-md-12 -->
                <div class="col-md-12">
                    <div class="product-title-area">
                        <div class="product__title">
                            <h2>Newest Release Products</h2>
                        </div>

                    </div>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row -->

            <!-- start .row -->
            <div class="row">
                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .single-product -->
                    <div class="product product--card product--card3">

                        <div class="product__thumbnail">
                            <img src="images/products/green-jackfruit-growing-in-fruit-garden-is-product-agriculture-of-DWAJ5J.jpg"
                                 width="320px" height="270px" alt="Product Image">
                            <div class="prod_btn">
                                <a onclick="alert('Coming Soon')" class="transparent btn--sm btn--round">More Info</a>
                                <a onclick="alert('Coming Soon')" class="transparent btn--sm btn--round">Order Now</a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a onclick="alert('Coming Soon')" class="product_title">
                                <h4>Jack Fruits </h4>
                            </a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img"
                                         src="images/products/green-jackfruit-growing-in-fruit-garden-is-product-agriculture-of-DWAJ5J.jpg"
                                         width="320px" height="270px" alt="author image">
                                    <p>
                                        <a onclick="alert('Coming Soon')">Jack Fruits</a>
                                    </p>
                                </li>
                                <li class="product_cat">
                                    <a onclick="alert('Coming Soon')">
                                        <span class="lnr lnr-book"></span>Order</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>Price: #500</span>
                            </div>
                            <div class="sell">
                                <p>
                                    <a onclick="alert('Coming Soon')" class="transparent btn--sm btn--round">Order Now</a>
                                </p>
                            </div>
                        </div>
                        <!-- end /.product-purchase -->
                    </div>
                    <!-- end /.single-product -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .single-product -->
                    <div class="product product--card product--card3">

                        <div class="product__thumbnail">
                            <img src="images/products/Agriculture-Product-Stocks-3.jpg" width="320px" height="270px"
                                 alt="Product Image">
                            <div class="prod_btn">
                                <a onclick="alert('Coming Soon')" class="transparent btn--sm btn--round">More Info</a>
                                <a onclick="alert('Coming Soon')" class="transparent btn--sm btn--round">Order Now</a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a onclick="alert('Coming Soon')" class="product_title">
                                <h4>Mega pack</h4>
                            </a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="images/products/Agriculture-Product-Stocks-3.jpg"
                                         width="320px" height="270px" alt="author image">
                                    <p>
                                        <a onclick="alert('Coming Soon')">Mega pack product: tomato,carrot beans</a>
                                    </p>
                                </li>
                                <li class="product_cat">
                                    <a onclick="alert('Coming Soon')">
                                        <span class="lnr lnr-book"></span>Order</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>Price: #2,000</span>
                            </div>
                            <div class="sell">
                                <p>
                                    <a onclick="alert('Coming Soon')" class="transparent btn--sm btn--round">Order Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end /.single-product -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .single-product -->
                    <div class="product product--card product--card3">

                        <div class="product__thumbnail">
                            <img src="images/products/613nhzdnP8L._SY550_.jpg" width="320px" height="270px"
                                 alt="Product Image">
                            <div class="prod_btn">
                                <a onclick="alert('Coming Soon')" class="transparent btn--sm btn--round">More Info</a>
                                <a onclick="alert('Coming Soon')" class="transparent btn--sm btn--round">Order Now</a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a onclick="alert('Coming Soon')" class="product_title">
                                <h4>AGRI82 </h4>
                            </a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="images/products/613nhzdnP8L._SY550_.jpg" width="320px"
                                         height="270px" alt="author image">
                                    <p>
                                        <a onclick="alert('Coming Soon')">AGRI82</a>
                                    </p>
                                </li>
                                <li class="product_cat">
                                    <a onclick="alert('Coming Soon')">
                                        <span class="lnr lnr-book"></span>Order</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>Price: #500</span>
                            </div>
                            <div class="sell">
                                <p>
                                    <a onclick="alert('Coming Soon')" class="transparent btn--sm btn--round">Order Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end /.single-product -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .single-product -->
                    <div class="product product--card product--card3">

                        <div class="product__thumbnail">
                            <img src="images/products/images(14).jpg" width="320px" height="270px" alt="Product Image">
                            <div class="prod_btn">
                                <a onclick="alert('Coming Soon')" class="transparent btn--sm btn--round">More Info</a>
                                <a onclick="alert('Coming Soon')" class="transparent btn--sm btn--round">Order Now</a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a onclick="alert('Coming Soon')" class="product_title">
                                <h4>Maize</h4>
                            </a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="images/products/images(14).jpg" width="320px"
                                         height="270px" alt="author image">
                                    <p>
                                        <a href="#">Maize</a>
                                    </p>
                                </li>
                                <li class="product_cat">
                                    <a onclick="alert('Coming Soon')">
                                        <span class="lnr lnr-book"></span>Order</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>Price: #500</span>
                            </div>
                            <div class="sell">
                                <p>
                                    <a onclick="alert('Coming Soon')" class="transparent btn--sm btn--round">Order Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end /.single-product -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .single-product -->
                    <div class="product product--card product--card3">
                        <div class="product__thumbnail">
                            <img src="images/products/ppp.jpeg" width="320px" height="270px" alt="Product Image">
                            <div class="prod_btn">
                                <a href="{{ route('about') }}" class="transparent btn--sm btn--round">More Info</a>
                                <a onclick="alert('Coming Soon')" class="transparent btn--sm btn--round">Order Now</a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a onclick="alert('Coming Soon')" class="product_title">
                                <h4>Bift-Intact</h4>
                            </a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="images/products/ppp.jpeg" width="320px" height="270px"
                                         alt="author image">
                                    <p>
                                        <a href="#">Bift-Intact </a>
                                    </p>
                                </li>
                                <li class="product_cat">
                                    <a onclick="alert('Coming Soon')">
                                        <span class="lnr lnr-book"></span>Order</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>Price: #5,000</span>
                            </div>
                            <div class="sell">
                                <p>
                                    <a onclick="alert('Coming Soon')" class="transparent btn--sm btn--round">Order Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end /.single-product -->
                </div>
                <!-- end /.col-md-4 -->

                <!-- start .col-md-4 -->
                <div class="col-lg-4 col-md-6">
                    <!-- start .single-product -->
                    <div class="product product--card product--card3">

                        <div class="product__thumbnail">
                            <img src="images/products/download.jpg" with="320px" height="270px" alt="Product Image">
                            <div class="prod_btn">
                                <a onclick="alert('Coming Soon')" class="transparent btn--sm btn--round">More Info</a>
                                <a onclick="alert('Coming Soon')" class="transparent btn--sm btn--round">Order Now</a>
                            </div>
                            <!-- end /.prod_btn -->
                        </div>
                        <!-- end /.product__thumbnail -->

                        <div class="product-desc">
                            <a onclick="alert('Coming Soon')" class="product_title">
                                <h4>Active-80</h4>
                            </a>
                            <ul class="titlebtm">
                                <li>
                                    <img class="auth-img" src="images/products/download.jpg" with="320px" height="270px"
                                         alt="author image">
                                    <p>
                                        <a onclick="alert('Coming Soon')">Active-80</a>
                                    </p>
                                </li>
                                <li class="product_cat">
                                    <a onclick="alert('Coming Soon')">
                                        <span class="lnr lnr-book"></span>Order</a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.product-desc -->

                        <div class="product-purchase">
                            <div class="price_love">
                                <span>Price: #800</span>
                            </div>
                            <div class="sell">
                                <p>
                                    <a onclick="alert('Coming Soon')" class="transparent btn--sm btn--round">Order Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- end /.single-product -->
                </div>
                <!-- end /.col-md-4 -->
            </div>

            <!-- start .row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="more-product">
                        <a onclick="alert('Coming Soon')" class="btn btn--lg btn--round">All New Products</a>
                    </div>
                </div>
                <!-- end ./col-md-12 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </section>
    <!--================================
        END PRODUCTS AREA
    =================================-->


    <!--================================
        START CALL TO ACTION AREA
    =================================-->
    <section class="call-to-action bgimage">
        <div class="bg_image_holder">
            <img src="images/products/16.jpg" alt="">
        </div>
        <div class="container content_above">
            <div class="row">
                <div class="col-md-12">
                    <div class="call-to-wrap">
                        <h1 class="text--white">Ready for advance in agriculture ?</h1>
                        <h4 class="text--white">Kosdor is here to bring it down to your doorstep</h4>
                        <a href="#" class="btn btn--lg btn--round btn--white callto-action-btn">Join Us Today</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================================
        END CALL TO ACTION AREA
    =================================-->
@endsection
