<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- viewport meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Kosdor - korsdor online ordering system">
    <meta name="keywords" content="kosdor, online, buy, product, money, sell">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Kosdor') }}</title>

    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/fontello.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/lnr-icon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('css/trumbowyg.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- endinject -->

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
</head>
<body class="preload home3">
<!--================================
START MENU AREA
=================================-->
<!-- start menu-area -->
<div class="menu-area">
    <!-- start .top-menu-area -->
    <div class="top-menu-area">
        <!-- start .container -->
        <div class="container">
            <!-- start .row -->
        {{--            <div class="row">--}}
        {{--                <!-- start .col-md-3 -->--}}
        {{--                <div class="col-lg-3 col-md-3 col-6 v_middle">--}}
        {{--                    <div class="logo">--}}
        {{--                        <a href="index.html">--}}
        {{--                            <img src="images/logo.png" alt="logo image" class="img-fluid">--}}
        {{--                        </a>--}}
        {{--                    </div>--}}
        {{--                </div>--}}
        {{--                <!-- end /.col-md-3 -->--}}

        {{--                <!-- start .col-md-5 -->--}}
        {{--                <div class="col-lg-8 offset-lg-1 col-md-9 col-6 v_middle">--}}
        {{--                    <!-- start .author-area -->--}}
        {{--                    <div class="author-area">--}}
        {{--                        <a href="signup.html" class="author-area__seller-btn inline">Become a Seller</a>--}}

        {{--                        <div class="author__notification_area">--}}
        {{--                            <ul>--}}
        {{--                                <li class="has_dropdown">--}}
        {{--                                    <div class="icon_wrap">--}}
        {{--                                        <span class="lnr lnr-alarm"></span>--}}
        {{--                                        <span class="notification_count noti">25</span>--}}
        {{--                                    </div>--}}

        {{--                                    <div class="dropdowns notification--dropdown">--}}

        {{--                                        <div class="dropdown_module_header">--}}
        {{--                                            <h4>My Notifications</h4>--}}
        {{--                                            <a href="notification.html">View All</a>--}}
        {{--                                        </div>--}}

        {{--                                        <div class="notifications_module">--}}
        {{--                                            <div class="notification">--}}
        {{--                                                <div class="notification__info">--}}
        {{--                                                    <div class="info_avatar">--}}
        {{--                                                        <img src="images/notification_head.png" alt="">--}}
        {{--                                                    </div>--}}
        {{--                                                    <div class="info">--}}
        {{--                                                        <p>--}}
        {{--                                                            <span>Anderson</span> added to Favourite--}}
        {{--                                                            <a href="#">Mccarther Coffee Shop</a>--}}
        {{--                                                        </p>--}}
        {{--                                                        <p class="time">Just now</p>--}}
        {{--                                                    </div>--}}
        {{--                                                </div>--}}
        {{--                                                <!-- end /.notifications -->--}}

        {{--                                                <div class="notification__icons ">--}}
        {{--                                                    <span class="lnr lnr-heart loved noti_icon"></span>--}}
        {{--                                                </div>--}}
        {{--                                                <!-- end /.notifications -->--}}
        {{--                                            </div>--}}
        {{--                                            <!-- end /.notifications -->--}}

        {{--                                            <div class="notification">--}}
        {{--                                                <div class="notification__info">--}}
        {{--                                                    <div class="info_avatar">--}}
        {{--                                                        <img src="images/notification_head2.png" alt="">--}}
        {{--                                                    </div>--}}
        {{--                                                    <div class="info">--}}
        {{--                                                        <p>--}}
        {{--                                                            <span>Michael</span> commented on--}}
        {{--                                                            <a href="#">MartPlace Extension Bundle</a>--}}
        {{--                                                        </p>--}}
        {{--                                                        <p class="time">Just now</p>--}}
        {{--                                                    </div>--}}
        {{--                                                </div>--}}
        {{--                                                <!-- end /.notifications -->--}}

        {{--                                                <div class="notification__icons ">--}}
        {{--                                                    <span class="lnr lnr-bubble commented noti_icon"></span>--}}
        {{--                                                </div>--}}
        {{--                                                <!-- end /.notifications -->--}}
        {{--                                            </div>--}}
        {{--                                            <!-- end /.notifications -->--}}

        {{--                                            <div class="notification">--}}
        {{--                                                <div class="notification__info">--}}
        {{--                                                    <div class="info_avatar">--}}
        {{--                                                        <img src="images/notification_head3.png" alt="">--}}
        {{--                                                    </div>--}}
        {{--                                                    <div class="info">--}}
        {{--                                                        <p>--}}
        {{--                                                            <span>Khamoka </span>purchased--}}
        {{--                                                            <a href="#"> Visibility Manager Subscriptions</a>--}}
        {{--                                                        </p>--}}
        {{--                                                        <p class="time">Just now</p>--}}
        {{--                                                    </div>--}}
        {{--                                                </div>--}}
        {{--                                                <!-- end /.notifications -->--}}

        {{--                                                <div class="notification__icons ">--}}
        {{--                                                    <span class="lnr lnr-cart purchased noti_icon"></span>--}}
        {{--                                                </div>--}}
        {{--                                                <!-- end /.notifications -->--}}
        {{--                                            </div>--}}
        {{--                                            <!-- end /.notifications -->--}}

        {{--                                            <div class="notification">--}}
        {{--                                                <div class="notification__info">--}}
        {{--                                                    <div class="info_avatar">--}}
        {{--                                                        <img src="images/notification_head4.png" alt="">--}}
        {{--                                                    </div>--}}
        {{--                                                    <div class="info">--}}
        {{--                                                        <p>--}}
        {{--                                                            <span>Anderson</span> added to Favourite--}}
        {{--                                                            <a href="#">Mccarther Coffee Shop</a>--}}
        {{--                                                        </p>--}}
        {{--                                                        <p class="time">Just now</p>--}}
        {{--                                                    </div>--}}
        {{--                                                </div>--}}
        {{--                                                <!-- end /.notifications -->--}}

        {{--                                                <div class="notification__icons ">--}}
        {{--                                                    <span class="lnr lnr-star reviewed noti_icon"></span>--}}
        {{--                                                </div>--}}
        {{--                                                <!-- end /.notifications -->--}}
        {{--                                            </div>--}}
        {{--                                            <!-- end /.notifications -->--}}
        {{--                                        </div>--}}
        {{--                                        <!-- end /.dropdown -->--}}
        {{--                                    </div>--}}
        {{--                                </li>--}}

        {{--                                <li class="has_dropdown">--}}
        {{--                                    <div class="icon_wrap">--}}
        {{--                                        <span class="lnr lnr-envelope"></span>--}}
        {{--                                        <span class="notification_count msg">6</span>--}}
        {{--                                    </div>--}}

        {{--                                    <div class="dropdowns messaging--dropdown">--}}
        {{--                                        <div class="dropdown_module_header">--}}
        {{--                                            <h4>My Messages</h4>--}}
        {{--                                            <a href="message.html">View All</a>--}}
        {{--                                        </div>--}}

        {{--                                        <div class="messages">--}}
        {{--                                            <a href="message.html" class="message recent">--}}
        {{--                                                <div class="message__actions_avatar">--}}
        {{--                                                    <div class="avatar">--}}
        {{--                                                        <img src="images/notification_head4.png" alt="">--}}
        {{--                                                    </div>--}}
        {{--                                                </div>--}}
        {{--                                                <!-- end /.actions -->--}}

        {{--                                                <div class="message_data">--}}
        {{--                                                    <div class="name_time">--}}
        {{--                                                        <div class="name">--}}
        {{--                                                            <p>NukeThemes</p>--}}
        {{--                                                            <span class="lnr lnr-envelope"></span>--}}
        {{--                                                        </div>--}}

        {{--                                                        <span class="time">Just now</span>--}}
        {{--                                                        <p>Hello John Smith! Nunc placerat mi ...</p>--}}
        {{--                                                    </div>--}}
        {{--                                                </div>--}}
        {{--                                                <!-- end /.message_data -->--}}
        {{--                                            </a>--}}
        {{--                                            <!-- end /.message -->--}}

        {{--                                            <a href="message.html" class="message recent">--}}
        {{--                                                <div class="message__actions_avatar">--}}
        {{--                                                    <div class="avatar">--}}
        {{--                                                        <img src="images/notification_head5.png" alt="">--}}
        {{--                                                    </div>--}}
        {{--                                                </div>--}}
        {{--                                                <!-- end /.actions -->--}}

        {{--                                                <div class="message_data">--}}
        {{--                                                    <div class="name_time">--}}
        {{--                                                        <div class="name">--}}
        {{--                                                            <p>Crazy Coder</p>--}}
        {{--                                                            <span class="lnr lnr-envelope"></span>--}}
        {{--                                                        </div>--}}

        {{--                                                        <span class="time">Just now</span>--}}
        {{--                                                        <p>Hi! Nunc placerat mi id nisi interum ...</p>--}}
        {{--                                                    </div>--}}
        {{--                                                </div>--}}
        {{--                                                <!-- end /.message_data -->--}}
        {{--                                            </a>--}}
        {{--                                            <!-- end /.message -->--}}

        {{--                                            <a href="message.html" class="message">--}}
        {{--                                                <div class="message__actions_avatar">--}}
        {{--                                                    <div class="avatar">--}}
        {{--                                                        <img src="images/notification_head6.png" alt="">--}}
        {{--                                                    </div>--}}
        {{--                                                </div>--}}
        {{--                                                <!-- end /.actions -->--}}

        {{--                                                <div class="message_data">--}}
        {{--                                                    <div class="name_time">--}}
        {{--                                                        <div class="name">--}}
        {{--                                                            <p>Hybrid Insane</p>--}}
        {{--                                                        </div>--}}

        {{--                                                        <span class="time">Just now</span>--}}
        {{--                                                        <p>Hi! Nunc placerat mi id nisi interum ...</p>--}}
        {{--                                                    </div>--}}
        {{--                                                </div>--}}
        {{--                                                <!-- end /.message_data -->--}}
        {{--                                            </a>--}}
        {{--                                            <!-- end /.message -->--}}

        {{--                                            <a href="message.html" class="message">--}}
        {{--                                                <div class="message__actions_avatar">--}}
        {{--                                                    <div class="avatar">--}}
        {{--                                                        <img src="images/notification_head3.png" alt="">--}}
        {{--                                                    </div>--}}
        {{--                                                </div>--}}
        {{--                                                <!-- end /.actions -->--}}

        {{--                                                <div class="message_data">--}}
        {{--                                                    <div class="name_time">--}}
        {{--                                                        <div class="name">--}}
        {{--                                                            <p>ThemeXylum</p>--}}
        {{--                                                        </div>--}}

        {{--                                                        <span class="time">Just now</span>--}}
        {{--                                                        <p>Hi! Nunc placerat mi id nisi interum ...</p>--}}
        {{--                                                    </div>--}}
        {{--                                                </div>--}}
        {{--                                                <!-- end /.message_data -->--}}
        {{--                                            </a>--}}
        {{--                                            <!-- end /.message -->--}}

        {{--                                            <a href="message.html" class="message">--}}
        {{--                                                <div class="message__actions_avatar">--}}
        {{--                                                    <div class="avatar">--}}
        {{--                                                        <img src="images/notification_head4.png" alt="">--}}
        {{--                                                    </div>--}}
        {{--                                                </div>--}}
        {{--                                                <!-- end /.actions -->--}}

        {{--                                                <div class="message_data">--}}
        {{--                                                    <div class="name_time">--}}
        {{--                                                        <div class="name">--}}
        {{--                                                            <p>NukeThemes</p>--}}
        {{--                                                            <span class="lnr lnr-envelope"></span>--}}
        {{--                                                        </div>--}}

        {{--                                                        <span class="time">Just now</span>--}}
        {{--                                                        <p>Hello John Smith! Nunc placerat mi ...</p>--}}
        {{--                                                    </div>--}}
        {{--                                                </div>--}}
        {{--                                                <!-- end /.message_data -->--}}
        {{--                                            </a>--}}
        {{--                                            <!-- end /.message -->--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </li>--}}
        {{--                                <li class="has_dropdown">--}}
        {{--                                    <div class="icon_wrap">--}}
        {{--                                        <span class="lnr lnr-cart"></span>--}}
        {{--                                        <span class="notification_count purch">2</span>--}}
        {{--                                    </div>--}}

        {{--                                    <div class="dropdowns dropdown--cart">--}}
        {{--                                        <div class="cart_area">--}}
        {{--                                            <div class="cart_product">--}}
        {{--                                                <div class="product__info">--}}
        {{--                                                    <div class="thumbn">--}}
        {{--                                                        <img src="images/capro1.jpg" alt="cart product thumbnail">--}}
        {{--                                                    </div>--}}

        {{--                                                    <div class="info">--}}
        {{--                                                      <a class="title" href="single-product.html">Finance and--}}
        {{--                                                            Consulting Business Theme</a>--}}
        {{--                                                        <div class="cat">--}}
        {{--                                                            <a href="#">--}}
        {{--                                                                <img src="images/catword.png" alt="">Wordpress</a>--}}
        {{--                                                        </div>--}}
        {{--                                                    </div>--}}
        {{--                                                </div>--}}

        {{--                                                <div class="product__action">--}}
        {{--                                                    <a href="#">--}}
        {{--                                                        <span class="lnr lnr-trash"></span>--}}
        {{--                                                    </a>--}}
        {{--                                                    <p>$60</p>--}}
        {{--                                                </div>--}}
        {{--                                            </div>--}}
        {{--                                            <div class="cart_product">--}}
        {{--                                                <div class="product__info">--}}
        {{--                                                    <div class="thumbn">--}}
        {{--                                                        <img src="images/capro2.jpg" alt="cart product thumbnail">--}}
        {{--                                                    </div>--}}

        {{--                                                    <div class="info">--}}
        {{--                                                        <a class="title" href="single-product.html">Flounce ---}}
        {{--                                                            Multipurpose OpenCart Theme</a>--}}
        {{--                                                        <div class="cat">--}}
        {{--                                                            <a href="#">--}}
        {{--                                                                <img src="images/catword.png" alt="">Wordpress</a>--}}
        {{--                                                        </div>--}}
        {{--                                                    </div>--}}
        {{--                                                </div>--}}

        {{--                                                <div class="product__action">--}}
        {{--                                                    <a href="#">--}}
        {{--                                                        <span class="lnr lnr-trash"></span>--}}
        {{--                                                    </a>--}}
        {{--                                                    <p>$60</p>--}}
        {{--                                                </div>--}}
        {{--                                            </div>--}}
        {{--                                            <div class="total">--}}
        {{--                                                <p>--}}
        {{--                                                    <span>Total :</span>$80</p>--}}
        {{--                                            </div>--}}
        {{--                                            <div class="cart_action">--}}
        {{--                                                <a class="go_cart" href="cart.html">View Cart</a>--}}
        {{--                                                <a class="go_checkout" href="checkout.html">Checkout</a>--}}
        {{--                                            </div>--}}
        {{--                                        </div>--}}
        {{--                                    </div>--}}
        {{--                                </li>--}}
        {{--                            </ul>--}}
        {{--                        </div>--}}
        {{--                        <!--start .author__notification_area -->--}}

        {{--                        <!--start .author-author__info-->--}}
        {{--                        <div class="author-author__info inline has_dropdown">--}}
        {{--                            <div class="author__avatar">--}}
        {{--                                <img src="images/usr_avatar.png" alt="user avatar">--}}

        {{--                            </div>--}}
        {{--                            <div class="autor__info">--}}
        {{--                                <p class="name">--}}
        {{--                                    Jhon Doe--}}
        {{--                                </p>--}}
        {{--                                <p class="ammount">$20.45</p>--}}
        {{--                            </div>--}}

        {{--                            <div class="dropdowns dropdown--author">--}}
        {{--                                <ul>--}}
        {{--                                    <li>--}}
        {{--                                        <a href="author.html">--}}
        {{--                                            <span class="lnr lnr-user"></span>Profile</a>--}}
        {{--                                    </li>--}}
        {{--                                    <li>--}}
        {{--                                        <a href="dashboard.html">--}}
        {{--                                            <span class="lnr lnr-home"></span> Dashboard</a>--}}
        {{--                                    </li>--}}
        {{--                                    <li>--}}
        {{--                                        <a href="dashboard-setting.html">--}}
        {{--                                            <span class="lnr lnr-cog"></span> Setting</a>--}}
        {{--                                    </li>--}}
        {{--                                    <li>--}}
        {{--                                        <a href="cart.html">--}}
        {{--                                            <span class="lnr lnr-cart"></span>Purchases</a>--}}
        {{--                                    </li>--}}
        {{--                                    <li>--}}
        {{--                                        <a href="favourites.html">--}}
        {{--                                            <span class="lnr lnr-heart"></span> Favourite</a>--}}
        {{--                                    </li>--}}
        {{--                                    <li>--}}
        {{--                                        <a href="dashboard-add-credit.html">--}}
        {{--                                            <span class="lnr lnr-dice"></span>Add Credits</a>--}}
        {{--                                    </li>--}}
        {{--                                    <li>--}}
        {{--                                        <a href="dashboard-statement.html">--}}
        {{--                                            <span class="lnr lnr-chart-bars"></span>Sale Statement</a>--}}
        {{--                                    </li>--}}
        {{--                                    <li>--}}
        {{--                                        <a href="dashboard-upload.html">--}}
        {{--                                            <span class="lnr lnr-upload"></span>Upload Item</a>--}}
        {{--                                    </li>--}}
        {{--                                    <li>--}}
        {{--                                        <a href="dashboard-manage-item.html">--}}
        {{--                                            <span class="lnr lnr-book"></span>Manage Item</a>--}}
        {{--                                    </li>--}}
        {{--                                    <li>--}}
        {{--                                        <a href="dashboard-withdrawal.html">--}}
        {{--                                            <span class="lnr lnr-briefcase"></span>Withdrawals</a>--}}
        {{--                                    </li>--}}
        {{--                                    <li>--}}
        {{--                                        <a href="#">--}}
        {{--                                            <span class="lnr lnr-exit"></span>Logout</a>--}}
        {{--                                    </li>--}}
        {{--                                </ul>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                        <!--end /.author-author__info-->--}}
        {{--                    </div>--}}
        {{--                    <!-- end .author-area -->--}}

        {{--                    <!-- author area restructured for mobile -->--}}
        {{--                    <div class="mobile_content ">--}}
        {{--                        <span class="lnr lnr-user menu_icon"></span>--}}

        {{--                        <!-- offcanvas menu -->--}}
        {{--                        <div class="offcanvas-menu closed">--}}
        {{--                            <span class="lnr lnr-cross close_menu"></span>--}}
        {{--                            <div class="author-author__info">--}}
        {{--                                <div class="author__avatar v_middle">--}}
        {{--                                    <img src="images/usr_avatar.png" alt="user avatar">--}}
        {{--                                </div>--}}
        {{--                                <div class="autor__info v_middle">--}}
        {{--                                    <p class="name">--}}
        {{--                                        Jhon Doe--}}
        {{--                                    </p>--}}
        {{--                                    <p class="ammount">$20.45</p>--}}
        {{--                                </div>--}}
        {{--                            </div>--}}
        {{--                            <!--end /.author-author__info-->--}}

        {{--                            <div class="author__notification_area">--}}
        {{--                                <ul>--}}
        {{--                                    <li>--}}
        {{--                                        <a href="notification.html">--}}
        {{--                                            <div class="icon_wrap">--}}
        {{--                                                <span class="lnr lnr-alarm"></span>--}}
        {{--                                                <span class="notification_count noti">25</span>--}}
        {{--                                            </div>--}}
        {{--                                        </a>--}}
        {{--                                    </li>--}}

        {{--                                    <li>--}}
        {{--                                        <a href="message.html">--}}
        {{--                                            <div class="icon_wrap">--}}
        {{--                                                <span class="lnr lnr-envelope"></span>--}}
        {{--                                                <span class="notification_count msg">6</span>--}}
        {{--                                            </div>--}}
        {{--                                        </a>--}}
        {{--                                    </li>--}}

        {{--                                    <li>--}}
        {{--                                        <a href="cart.html">--}}
        {{--                                            <div class="icon_wrap">--}}
        {{--                                                <span class="lnr lnr-cart"></span>--}}
        {{--                                                <span class="notification_count purch">2</span>--}}
        {{--                                            </div>--}}
        {{--                                        </a>--}}
        {{--                                    </li>--}}
        {{--                                </ul>--}}
        {{--                            </div>--}}
        {{--                            <!--start .author__notification_area -->--}}

        {{--                            <div class="dropdowns dropdown--author">--}}
        {{--                                <ul>--}}
        {{--                                    <li>--}}
        {{--                                        <a href="author.html">--}}
        {{--                                            <span class="lnr lnr-user"></span>Profile</a>--}}
        {{--                                    </li>--}}
        {{--                                    <li>--}}
        {{--                                        <a href="dashboard.html">--}}
        {{--                                            <span class="lnr lnr-home"></span> Dashboard</a>--}}
        {{--                                    </li>--}}
        {{--                                    <li>--}}
        {{--                                        <a href="dashboard-setting.html">--}}
        {{--                                            <span class="lnr lnr-cog"></span> Setting</a>--}}
        {{--                                    </li>--}}
        {{--                                    <li>--}}
        {{--                                        <a href="cart.html">--}}
        {{--                                            <span class="lnr lnr-cart"></span>Purchases</a>--}}
        {{--                                    </li>--}}
        {{--                                    <li>--}}
        {{--                                        <a href="favourites.html">--}}
        {{--                                            <span class="lnr lnr-heart"></span> Favourite</a>--}}
        {{--                                    </li>--}}
        {{--                                    <li>--}}
        {{--                                        <a href="dashboard-add-credit.html">--}}
        {{--                                            <span class="lnr lnr-dice"></span>Add Credits</a>--}}
        {{--                                    </li>--}}
        {{--                                    <li>--}}
        {{--                                        <a href="dashboard-statement.html">--}}
        {{--                                            <span class="lnr lnr-chart-bars"></span>Sale Statement</a>--}}
        {{--                                    </li>--}}
        {{--                                    <li>--}}
        {{--                                        <a href="dashboard-upload.html">--}}
        {{--                                            <span class="lnr lnr-upload"></span>Upload Item</a>--}}
        {{--                                    </li>--}}
        {{--                                    <li>--}}
        {{--                                        <a href="dashboard-manage-item.html">--}}
        {{--                                            <span class="lnr lnr-book"></span>Manage Item</a>--}}
        {{--                                    </li>--}}
        {{--                                    <li>--}}
        {{--                                        <a href="dashboard-withdrawal.html">--}}
        {{--                                            <span class="lnr lnr-briefcase"></span>Withdrawals</a>--}}
        {{--                                    </li>--}}
        {{--                                    <li>--}}
        {{--                                        <a href="#">--}}
        {{--                                            <span class="lnr lnr-exit"></span>Logout</a>--}}
        {{--                                    </li>--}}
        {{--                                </ul>--}}
        {{--                            </div>--}}

        {{--                            <div class="text-center">--}}
        {{--                                <a href="signup.html" class="author-area__seller-btn inline">Become a Seller</a>--}}
        {{--                            </div>--}}
        {{--                        </div>--}}
        {{--                    </div>--}}
        {{--                    <!-- end /.mobile_content -->--}}
        {{--                </div>--}}
        {{--                <!-- end /.col-md-5 -->--}}
        {{--            </div>--}}
        <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end  -->

    <!-- start .mainmenu_area -->
    <div class="mainmenu">
        <!-- start .container -->
        <div class="container">
            <!-- start .row-->
            <div class="row">
                <!-- start .col-md-12 -->
                <div class="col-md-12">
                    <div class="navbar-header">
                        <!-- start mainmenu__search -->
                        <div class="mainmenu__search">
                            <form action="#">
                                <div class="searc-wrap">
                                    <input type="text" placeholder="Search product">
                                    <button type="submit" class="search-wrap__btn">
                                        <span class="lnr lnr-magnifier"></span>
                                    </button>
                                </div>
                            </form>
                        </div>
                        <!-- start mainmenu__search -->
                    </div>

                    <nav class="navbar navbar-expand-md navbar-light mainmenu__menu">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                                aria-controls="navbarNav" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li>
                                    <a href="{{ route('home') }}">HOME</a>
                                </li>
                                 <li>
                                    <a href="{{ route('about') }}">about us</a>
                                 </li>
                                <li class="has_dropdown">
                                    <a href="{{ route('products') }}">Agricultural Products</a>
                                    <div class="dropdowns dropdown--menu">
                                        <ul>
                                            <li>
                                                <a onClick="alert('Coming Soon')">Cashew nut supply </a>
                                            </li>
                                            <li>
                                                <a onClick="alert('Coming Soon')">Ginger Supply </a>
                                            </li>
                                              <li>
                                                <a onClick="alert('Coming Soon')">Cocoa Supply </a>
                                            </li> 
                                               <li>
                                                <a onClick="alert('Coming Soon')">Charcoal Supply </a>
                                            </li> 
                                               <li>
                                                <a onClick="alert('Coming Soon')">Sesame Supply </a>
                                            </li> 
                                        </ul>
                                    </div>
                                </li>
                                <li class="has_dropdown">
                                    <a href="#">Consulting</a>
                                    <div class="dropdowns dropdown--menu">



                                        <ul>
                                            <li>
                                                <a onClick="alert('Coming Soon')"> Due Diligence Checks</a>
                                            </li>
                                            <li>
                                                <a onClick="alert('Coming Soon')">Market Research & Feasibility Reports</a>
                                            </li>
                                            <li>
                                                <a onClick="alert('Coming Soon')">Trade Licence Registration</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                             {{--     <li class="has_megamenu">
                                                                       <a onClick="alert('Coming Soon')">Blog</a>
                                                                       <div class="dropdown_megamenu contained">
                                                                           <div class="megamnu_module">
                                                                               <div class="menu_items">
 --}}
                                                {{--                                                <div class="menu_column">--}}
                                                {{--                                                    <ul>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <a href="accordion.html">Accordion</a>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <a href="alert.html">Alert</a>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <a href="brands.html">Brands</a>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <a href="buttons.html">Buttons</a>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <a href="cards.html">Cards</a>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <a href="charts.html">Charts</a>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <a href="content-block.html">Content Block</a>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <a href="dropdowns.html">Drpdowns</a>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                    </ul>--}}

                                                {{--                                                </div>--}}

                                                {{--                                                <div class="menu_column">--}}
                                                {{--                                                    <ul>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <a href="features.html">Features</a>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <a href="footer.html">Footer</a>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <a href="info-box.html">Info Box</a>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <a href="menu.html">Menu</a>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <a href="modal.html">Modal</a>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <a href="pagination.html">Pagination</a>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <a href="peoples.html">Peoples</a>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <a href="products.html">Products</a>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                    </ul>--}}
                                                {{--                                                </div>--}}

                                                {{--                                                <div class="menu_column">--}}
                                                {{--                                                    <ul>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <a href="progressbar.html">Progressbar</a>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <a href="social.html">Social</a>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <a href="tab.html">Tabs</a>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <a href="table.html">Table</a>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <a href="testimonials.html">Testimonials</a>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <a href="timeline.html">Timeline</a>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                        <li>--}}
                                                {{--                                                            <a href="typography.html">Typography</a>--}}
                                                {{--                                                        </li>--}}
                                                {{--                                                    </ul>--}}
                                                {{--                                                </div>--}}
                                       {{--      </div>
                                                                                    </div>
                                                                                </div>
                                                                            </li> --}}

                                <li>
                                    <a href="{{ route('contact') }}">contact</a>
                                </li>
                             {{--       <li>
                                    <a href="{{ route('register') }}">Register</a>
                                </li>  --}}
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                </div>
                <!-- end /.col-md-12 -->
            </div>
            <!-- end /.row-->
        </div>
        <!-- start .container -->
    </div>
    <!-- end /.mainmenu-->
</div>
<!-- end /.menu-area -->
<!--================================
    END MENU AREA
=================================-->
@yield('content')
<!--================================
            START FOOTER AREA
        =================================-->
<footer class="footer-area">
    <div class="footer-big section--padding">
        <!-- start .container -->
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="info-footer">
                        <div class="info__logo">
                            <img src="images/products/logo.jpg" width="220" height="70" alt="footer logo">
                        </div>

                        <ul class="info-contact">
                            <li>
                                <span class="lnr lnr-phone info-icon"></span>
                                <span class="info">Phone: +2348092196793</span>
                            </li>
                            <li>
                                <span class="lnr lnr-envelope info-icon"></span>
                                <span class="info">support@kosdor.com</span>
                            </li>
                            <li>
                                <span class="lnr lnr-map-marker info-icon"></span>
                                <span class="info">Headoffice: 44, Ibrahim Shehu Shema Road Katsina Estate Gwarimpa Abuja</span>
                            </li>
                            <li>
                                <span class="lnr lnr-map-marker info-icon"></span>
                                <span class="info">Branch Office: 479 Ikorodu Road, Ketu Lagos State</span>
                            </li>
                        </ul>
                    </div>
                    <!-- end /.info-footer -->
                </div>
                <!-- end /.col-md-3 -->

                <div class="col-lg-5 col-md-6">
                    <div class="footer-menu">
                        <h4 class="footer-widget-title text--white">Our Company</h4>
                        <ul>
                            <li>
                                <a href="#">How It Work</a>
                            </li>
                            <li>
                                <a href="#">Exporting</a>
                            </li>
                            <li>
                                <a href="#">Importing</a>
                            </li>
                            <li>
                                <a href="#">Selling</a>
                            </li>

                        </ul>
                    </div>
                    <!-- end /.footer-menu -->

                    <div class="footer-menu">
                        <h4 class="footer-widget-title text--white">Quick Links</h4>
                        <ul>
                            <li>
                                <a href="#">Home</a>
                            </li>
                            <li>
                                <a href="#">Products</a>
                            </li>
                            <li>
                                <a href="#">About Us</a>
                            </li>
                            <li>
                                <a href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <!-- end /.footer-menu -->
                </div>
                <!-- end /.col-md-5 -->

                <div class="col-lg-4 col-md-12">
                    <div class="newsletter">
                        <h4 class="footer-widget-title text--white">Newsletter</h4>
                        <p>Subscribe to get the latest news, update and offer information. Don't worry, we won't
                            send spam!</p>
                        <div class="newsletter__form">
                            <form action="#">
                                <div class="field-wrapper">
                                    <input class="relative-field rounded" type="text" placeholder="Enter email">
                                    <button class="btn btn--round" type="submit">Submit</button>
                                </div>
                            </form>
                        </div>

                        <!-- start .social -->
                        <div class="social social--color--filled">
                            <ul>
                                <li>
                                    <a href="https://web.facebook.com/kosdorExportersIntlLtd/?_rdc=1&_rdr">
                                        <span class="fa fa-facebook"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-twitter"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-google-plus"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-pinterest"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-linkedin"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="fa fa-dribbble"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- end /.social -->
                    </div>
                    <!-- end /.newsletter -->
                </div>
                <!-- end /.col-md-4 -->
            </div>
            <!-- end /.row -->
        </div>
        <!-- end /.container -->
    </div>
    <!-- end /.footer-big -->

    <div class="mini-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copyright-text">
                        <p>&copy; 2019
                            <a>Kosdor</a>. All rights reserved.
                        </p>
                    </div>

                    <div class="go_top">
                        <span class="lnr lnr-chevron-up"></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA0C5etf1GVmL_ldVAichWwFFVcDfa1y_c"></script>
<!-- inject:js -->
<script src="{{ asset('js/vendor/jquery/jquery-1.12.3.js') }}"></script>
<script src="{{ asset('js/vendor/jquery/popper.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery/uikit.min.js') }}"></script>
<script src="{{ asset('js/vendor/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/vendor/chart.bundle.min.js') }}"></script>
<script src="{{ asset('js/vendor/grid.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery-ui.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.barrating.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.countdown.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('js/vendor/jquery.easing1.3.js') }}"></script>
<script src="{{ asset('js/vendor/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/vendor/slick.min.js') }}"></script>
<script src="{{ asset('js/vendor/tether.min.js') }}"></script>
<script src="{{ asset('js/vendor/trumbowyg.min.js') }}"></script>
<script src="{{ asset('js/vendor/waypoints.min.js') }}"></script>
<script src="{{ asset('js/dashboard.js') }}"></script>
<script src="{{ asset('js/main.js') }}"></script>
<script src="{{ asset('js/map.js') }}"></script>
</body>
</html>
