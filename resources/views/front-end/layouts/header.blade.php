<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Web Development & Designing - Digital Marketing-Grayfe</title>
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="Want to grow your <b>Business</b>? <b>Develop</b> your Website by Grayfe company we have best <b>Professional</b> Developer in Lahore Pakistan.">
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/bootstrap.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/owl.carousel.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/owl.theme.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/font-awesome.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/animate.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/magnific-popup.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/settings.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/icons.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/preset.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/theme.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/responsive.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('front-end/css/presets/color1.css') }}" id="colorChange"/>
    <!-- End Include All CSS -->

    <!-- Favicon Icon -->
    <link rel="icon"  type="image/png" href="#">
</head>
<body>
<!-- Preloading -->
<div class="preloader text-center">
    <div class="la-ball-circus la-2x">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- Preloading -->

<!-- Header 01 -->
<header class="header_01" id="header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-sm-3 col-md-3">
                <div class="logo">
                    <a href="index.html"><img src="{{ asset('front-end/images/logo.png') }}" alt=""/></a>
                </div>
            </div>
            <div class="col-lg-8 col-sm-7 col-md-7">
                <nav class="mainmenu text-center">
                    <ul>
                        <li class="menu-item-has-children">
                            <a href="{{ route('home') }}">home</a>
                            <!--<ul class="sub-menu">
                                <li><a href="index.html">Home 01</a></li>
                                <li><a href="index2.html">Home 02</a></li>
                                <li><a href="index3.html">Home 03</a></li>
                            </ul>-->
                        </li>
                        <li><a href="{{ route('about') }}">About</a></li>
                        <li class="menu-item-has-children"><a href="{{ route('services') }}">Services</a>
                            <!--<ul class="sub-menu">
                                <li><a href="service_detail.html">Service Detail</a></li>
                            </ul>-->
                        </li>
                        <li class="menu-item-has-children"><a href="{{ route('portfolio') }}">Portfolio</a>
                            <!--<ul class="sub-menu">
                                <li><a href="portfolio_detail.html">Portfolio Detail</a></li>
                            </ul>-->
                        </li>
                        <!--<li class="menu-item-has-children"><a href="#">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">Blog v1</a></li>
                                <li><a href="blog2.html">Blog v2</a></li>
                                <li><a href="blog3.html">Blog v3</a></li>
                                <li><a href="blog_single.html">Blog Single</a></li>
                            </ul>
                        </li>-->
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-2 col-sm-2 col-md-2">
                <div class="navigator text-right">
                    <a class="search searchToggler" href="javascript:void(0);"><i class="mei-magnifying-glass"></i></a>
                    <a href="javascript:void(0);" class="menu mobilemenu hidden-sm hidden-md hidden-lg hidden-xs"><i class="mei-menu"></i></a>
                    <a id="open-overlay-nav" class="menu hamburger" href="javascript:void(0);"><i class="mei-menu"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header 01 -->

<!-- Search From -->
<div class="searchFixed popupBG">
    <div class="container-fluid">
        <a href="" id="sfCloser" class="sfCloser"></a>
        <div class="searchForms">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <form method="post" action="#">
                            <input type="text" name="s" class="searchField" placeholder="Search here..."/>
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Search From -->

<!-- PopUP Menu -->
<div class="popup popup__menu">
    <a href="" id="close-popup" class="close-popup"></a>
    <div class="container mobileContainer">
        <div class="row">
            <div class="col-lg-12 text-left">
                <div class="logo2">
                    <a href="index.html"><img src="{{ asset('front-end/images/logo.png') }}" alt=""></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="popup-inner">
                    <div class="dl-menu__wrap dl-menuwrapper">
                        <ul class="dl-menu dl-menuopen">
                            <li><a href="{{ route('home') }}">home</a></li>
                            <li><a href="{{ route('about') }}">About</a></li>
                            <li><a href="{{ route('services') }}">services</a></li>
                            <li><a href="{{ route('portfolio') }}">Portfolio</a></li>
                            <!--<li class="menu-item-has-children">
                                <a href="javascript:void(0);">Blog</a>
                                <ul class="dl-submenu">
                                    <li><a href="blog.html">Blog v1</a></li>
                                    <li><a href="blog2.html">Blog v2</a></li>
                                    <li><a href="blog3.html">Blog v3</a></li>
                                    <li><a href="blog_single.html">Blog Single</a></li>
                                </ul>
                            </li>-->
                            <li><a href="{{ route('contact') }}">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-6 col-xs-12 text-left">
                <ul class="footer__contacts text-left">
                    <li>Phone: 666 888 000</li>
                    <li>Email: needhelp@meipaly.com</li>
                    <li>Address: 66 Broklyn Street, New York United States of America</li>
                </ul>
            </div>
            <div class="col-lg-6 col-sm-6 col-xs-12 col-xs-12">
                <div class="popUp_social text-right">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                        <li><a href="#"><i class="fa fa-facebook-square"></i>Facebook</a></li>
                        <li><a href="#"><i class="fa fa-youtube-play"></i>Youtube</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PopUP Menu -->
