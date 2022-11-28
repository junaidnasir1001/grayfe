@extends('front-end.layouts.main')
@section('main-content')

        <!-- Page Banner -->
        <section class="pageBanner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content text-center">
                            <h4><a href="#">home</a> - Services</h4>
                            <h2>Services</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Banner -->

        <!-- Services Section -->
        <!--<section class="service_section_2 commonSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="icon_box_2 text-center">
                            <h3>Modren Design</h3>
                            <p>
                                Phaseus sit amet tristique lorem ipsum is simply free text ligua donec culis leo sus cipit.
                            </p>
                            <div class="iconWrap">
                                <i class="mei-settings"></i>
                            </div>
                            <a href="service_detail.html">discover more</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="icon_box_2 text-center">
                            <h3>Digital products</h3>
                            <p>
                                Phaseus sit amet tristique lorem ipsum is simply free text ligua donec culis leo sus cipit.
                            </p>
                            <div class="iconWrap">
                                <i class="mei-pie-chart"></i>
                            </div>
                            <a href="service_detail.html">discover more</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="icon_box_2 text-center">
                            <h3>Marketing Strategy</h3>
                            <p>
                                Phaseus sit amet tristique lorem ipsum is simply free text ligua donec culis leo sus cipit.
                            </p>
                            <div class="iconWrap">
                                <i class="mei-transfer"></i>
                            </div>
                            <a href="service_detail.html">discover more</a>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Services Section -->

        <!-- Services Section -->
        <!--<section class="service_section commonSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4 class="sub_title red_color">Services we are offering</h4>
                        <h2 class="sec_title white">We design digital products that<br> help grow businesses.</h2>
                        <p class="sec_desc color_aaa">
                            We are committed to providing our customers with exceptional service<br> while offering our employees the best training.
                        </p>
                    </div>
                </div>
                <div class="row custom_column">
                    <div class="col-lg-3 col-sm-4 col-md-3">
                        <a href="service_detail.html" class="icon_box_1 text-center">
                            <div class="flipper">
                                <div class="front">
                                    <i class="mei-web-design"></i>
                                    <h3>Website Development</h3>
                                </div>
                                <div class="back">
                                    <i class="mei-web-design"></i>
                                    <h3>Website Development</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-md-3">
                        <a href="service_detail.html" class="icon_box_1 text-center">
                            <div class="flipper">
                                <div class="front">
                                    <i class="mei-computer-graphic"></i>
                                    <h3>Graphic Designing</h3>
                                </div>
                                <div class="back">
                                    <i class="mei-computer-graphic"></i>
                                    <h3>Graphic Designing</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-md-3">
                        <a href="service_detail.html" class="icon_box_1 text-center">
                            <div class="flipper">
                                <div class="front">
                                    <i class="mei-development-1"></i>
                                    <h3>Digital Marketing</h3>
                                </div>
                                <div class="back">
                                    <i class="mei-development-1"></i>
                                    <h3>Digital Marketing</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-md-3">
                        <a href="service_detail.html" class="icon_box_1 text-center">
                            <div class="flipper">
                                <div class="front">
                                    <i class="mei-development"></i>
                                    <h3>SEo & Content Writing</h3>
                                </div>
                                <div class="back">
                                    <i class="mei-development"></i>
                                    <h3>SEo & Content Writing</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-4 col-md-3">
                        <a href="service_detail.html" class="icon_box_1 text-center">
                            <div class="flipper">
                                <div class="front">
                                    <i class="mei-app-development"></i>
                                    <h3>App Development</h3>
                                </div>
                                <div class="back">
                                    <i class="mei-app-development"></i>
                                    <h3>App Development</h3>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Services Section -->

        <!-- what we Do Section -->
        <section class="commonSection what_wedo_2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4 class="sub_title">what we do</h4>
                        <h2 class="sec_title">Let’s create something</h2>
                        <p class="sec_desc">
                            Grayfe deliver real business value through software development services<br> engagement models, and next gen technologies.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="single_wedo">
                            <img src="{{ asset('front-end/images/service/services.png') }}" alt=""/>
                            <div class="overlay_wedo">
                                <a href="#">Web Development</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="single_wedo">
                            <img src="{{ asset('front-end/images/service/services1.png') }}" alt=""/>
                            <div class="overlay_wedo">
                                <a href="#">Graphic Designing</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="single_wedo">
                            <img src="{{ asset('front-end/images/service/service2.png') }}" alt=""/>
                            <div class="overlay_wedo">
                                <a href="#">Digital Marketing</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- what we Do Section -->

        <!-- FunFact Section -->
        <!--<section class="commonSection funfact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6 col-md-3 noPadding BR">
                        <div class="singlefunfact text-center">
                            <h1 data-counter="8705" class="timer"><span class="countSpan">8</span>705</h1>
                            <h3>Projects Completed</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3 noPadding BR">
                        <div class="singlefunfact text-center">
                            <h1 data-counter="480" class="timer"><span class="countSpan"></span>480</h1>
                            <h3>Active Clients</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3 noPadding BR">
                        <div class="singlefunfact text-center">
                            <h1 data-counter="626" class="timer"><span class="countSpan"></span>626</h1>
                            <h3>Cups of Coffee</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-3 noPadding">
                        <div class="singlefunfact text-center">
                            <h1 data-counter="9774" class="timer"><span class="countSpan">9</span>774</h1>
                            <h3>Happy Clients</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- FunFact Section -->

        <!-- Trust Clients Section -->
        <!--<section class="commonSection trustClient pb_120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="CL_content">
                            <img src="images/home_1/4.jpg" alt="">
                            <div class="abc_inner">
                                <div class="row">
                                    <div class="col-lg-5 col-sm-5 col-md-5">
                                    </div>
                                    <div class="col-lg-7 col-sm-7 col-md-7">
                                        <div class="abci_content">
                                            <h2>We are trusted by more than 8900 clients</h2>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incidi-dunt ut labore et dolore magna aliqua.
                                                Ut enim ad minim veniam, quis nostrud exercita-tion ullamco laboris nisi ut aliquip ex ea commodo.
                                            </p>
                                            <a class="common_btn red_bg" href="#"><span>Learn More</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Trust Clients Section -->

        <!-- Client Section -->
        <!--<section class="commonSection client">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4 class="sub_title">our clients</h4>
                        <h2 class="sec_title">they trust us</h2>
                        <p class="sec_desc">
                            We are committed to providing our customers with exceptional service while<br> offering our employees the best training.
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="client_slider">
                            <div class="singleClient">
                                <a href="#">
                                    <img src="images/client/1.png" alt=""/>
                                </a>
                            </div>
                            <div class="singleClient">
                                <a href="#">
                                    <img src="images/client/2.png" alt=""/>
                                </a>
                            </div>
                            <div class="singleClient">
                                <a href="#">
                                    <img src="images/client/3.png" alt=""/>
                                </a>
                            </div>
                            <div class="singleClient">
                                <a href="#">
                                    <img src="images/client/4.png" alt=""/>
                                </a>
                            </div>
                            <div class="singleClient">
                                <a href="#">
                                    <img src="images/client/5.png" alt=""/>
                                </a>
                            </div>
                            <div class="singleClient">
                                <a href="#">
                                    <img src="images/client/1.png" alt=""/>
                                </a>
                            </div>
                            <div class="singleClient">
                                <a href="#">
                                    <img src="images/client/2.png" alt=""/>
                                </a>
                            </div>
                            <div class="singleClient">
                                <a href="#">
                                    <img src="images/client/3.png" alt=""/>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>-->
        <!-- Client Section -->
@endsection
