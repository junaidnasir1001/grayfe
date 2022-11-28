@extends('front-end.layouts.main')
@section('main-content')

        <!-- Page Banner -->
        <section class="pageBanner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content text-center">
                            <h4><a href="#">home</a> - about</h4>
                            <h2>about us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Banner -->

        <!-- Agency Section -->
        <section class="commonSection">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <h4 class="sub_title">get to know us</h4>
                        <h2 class="sec_title">build better website alot quicker with Grayfe agency</h2>
                    </div>
                    <div class="col-lg-6 col-sm-6 col-md-6">
                        <div class="agency_img1">
                            <img src="{{ asset('front-end/images/about/about3.png') }}" alt=""/>
                        </div>
                    </div>
                    <div class="col-lg-12 col-sm-12">
                        <div class="agency_img2">
                            <img src="{{ asset('front-end/images/about/about1.png') }}" alt=""/>
                        </div>
                        <div class="compay_date">
                            <h5>company started</h5>
                            <h2>2018</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Agency Section -->

        <!-- Testimonial 2 Section -->
        <!--<section class="commonSection testimonial_2">
            <div class="container">
                <div class="row">
                    <div id="tabs" class="testimoniTab">
                        <div class="col-lg-5 col-sm-5">
                            <h4 class="sub_title color_aaa">our testimonials</h4>
                            <h2 class="sec_title white">happy customers</h2>
                            <ul class="slider_testimoial">
                                <li class="active control_item">
                                    <a href="#tab_1" data-toggle="tab">
                                        <span><img src="images/home_1/t1.jpg" alt=""/></span>
                                        <div class="author_detail">
                                            <h5>Shirley Smith</h5>
                                            <h6>Director</h6>
                                        </div>
                                    </a>
                                </li>
                                <li class="control_item">
                                    <a href="#tab_2" data-toggle="tab">
                                        <span><img src="images/home_1/t2.jpg" alt=""/></span>
                                        <div class="author_detail">
                                            <h5>Mike hardson</h5>
                                            <h6>co founder</h6>
                                        </div>
                                    </a>
                                </li>
                                <li class="control_item">
                                    <a href="#tab_3" data-toggle="tab">
                                        <span><img src="images/home_1/t3.jpg" alt=""/></span>
                                        <div class="author_detail">
                                            <h5>Mike Smith</h5>
                                            <h6>manager</h6>
                                        </div>
                                    </a>
                                </li>
                                <li class="control_item">
                                    <a href="#tab_4" data-toggle="tab">
                                        <span><img src="images/home_1/t1.jpg" alt=""/></span>
                                        <div class="author_detail">
                                            <h5>Shirley Smith</h5>
                                            <h6>Director</h6>
                                        </div>
                                    </a>
                                </li>
                                <li class="control_item">
                                    <a href="#tab_5" data-toggle="tab">
                                        <span><img src="images/home_1/t2.jpg" alt=""/></span>
                                        <div class="author_detail">
                                            <h5>Mike hardson</h5>
                                            <h6>manager</h6>
                                        </div>
                                    </a>
                                </li>
                                <li class="control_item">
                                    <a href="#tab_6" data-toggle="tab">
                                        <span><img src="images/home_1/t3.jpg" alt=""/></span>
                                        <div class="author_detail">
                                            <h5>Mike Smith</h5>
                                            <h6>manager</h6>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-7 col-sm-7">
                            <div class="dots_owl"></div>
                            <div class="tab-content clearfix">
                                <div class="tab-pane fade in active testi_con" id="tab_1">
                                    <p>
                                        “This is due to their excellent service, competitive pricing and customer support. It’s throughly
                                        refresing to get such a personal touch. There are many variations of passages of available,
                                        but the majority have suffered alteration in some form by injected hum
                                    </p>
                                    <span>25 nov, 2018</span>
                                </div>
                                <div class="tab-pane fade testi_con" id="tab_2">
                                    <p>
                                        “It’s throughly refresing to get such a personal touch. There are many variations of passages of available,
                                        This is due to their excellent service, competitive pricing and customer support.
                                        but the majority have suffered alteration in some form by injected hum
                                    </p>
                                    <span>26 nov, 2018</span>
                                </div>
                                <div class="tab-pane fade testi_con" id="tab_3">
                                    <p>
                                        “This is due to their excellent service, competitive pricing and customer support. It’s throughly
                                        refresing to get such a personal touch. There are many variations of passages of available,
                                        but the majority have suffered alteration in some form by injected hum
                                    </p>
                                    <span>27 nov, 2018</span>
                                </div>
                                <div class="tab-pane fade testi_con" id="tab_4">
                                    <p>
                                        “This is due to their excellent service, competitive pricing and customer support. It’s throughly
                                        refresing to get such a personal touch. There are many variations of passages of available,
                                        but the majority have suffered alteration in some form by injected hum
                                    </p>
                                    <span>28 nov, 2018</span>
                                </div>
                                <div class="tab-pane fade testi_con" id="tab_5">
                                    <p>
                                        “This is due to their excellent service, competitive pricing and customer support. It’s throughly
                                        refresing to get such a personal touch. There are many variations of passages of available,
                                        but the majority have suffered alteration in some form by injected hum
                                    </p>
                                    <span>29 nov, 2018</span>
                                </div>
                                <div class="tab-pane fade testi_con" id="tab_6">
                                    <p>
                                        “This is due to their excellent service, competitive pricing and customer support. It’s throughly
                                        refresing to get such a personal touch. There are many variations of passages of available,
                                        but the majority have suffered alteration in some form by injected hum
                                    </p>
                                    <span>30 nov, 2018</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Testimonial 2 Section -->

        <!-- Subscribe Section -->
        <!--<section class="commonSection subscribe">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-5 col-md-4">
                        <h4 class="sub_title">don’t miss out our latest updates</h4>
                        <h2 class="sec_title">Subscribe us</h2>
                    </div>
                    <div class="col-lg-8 col-sm-7 col-md-8">
                        <form action="" method="post" class="subscribefrom">
                            <input type="email" placeholder="Enter your email" name="email">
                            <button class="common_btn red_bg" type="submit" name="submit"><span>Subscribe now</span></button>
                        </form>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Subscribe Section -->

        <!-- Team Section -->
       <!-- <section class="commonSection team">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4 class="sub_title">meet the team</h4>
                        <h2 class="sec_title">expert people</h2>
                        <p class="sec_desc">
                            We are committed to providing our customers with exceptional service while<br> offering our employees the best training.
                        </p>
                    </div>
                </div>
            </div>
            <div class="team_slider">
                <div class="singleTM">
                    <div class="tm_img">
                        <img src="images/team/1.jpg" alt="">
                        <div class="tm_overlay">
                            <div class="team_social">
                                <a href="#"><span>Facebook</span></a>
                                <a href="#"><span>Twitter</span></a>
                                <a href="#"><span>Youtube</span></a>
                            </div>
                            <a href="#" class="common_btn"><span>learn more</span></a>
                        </div>
                    </div>
                    <div class="detail_TM">
                        <h5>kevin smith</h5>
                        <h6>co founder</h6>
                    </div>
                </div>
                <div class="singleTM">
                    <div class="tm_img">
                        <img src="images/team/2.jpg" alt="">
                        <div class="tm_overlay">
                            <div class="team_social">
                                <a href="#"><span>Facebook</span></a>
                                <a href="#"><span>Twitter</span></a>
                                <a href="#"><span>Youtube</span></a>
                            </div>
                            <a href="#" class="common_btn"><span>learn more</span></a>
                        </div>
                    </div>
                    <div class="detail_TM">
                        <h5>Jessica Brown</h5>
                        <h6>General Manager</h6>
                    </div>
                </div>
                <div class="singleTM">
                    <div class="tm_img">
                        <img src="images/team/3.jpg" alt="">
                        <div class="tm_overlay">
                            <div class="team_social">
                                <a href="#"><span>Facebook</span></a>
                                <a href="#"><span>Twitter</span></a>
                                <a href="#"><span>Youtube</span></a>
                            </div>
                            <a href="#" class="common_btn"><span>learn more</span></a>
                        </div>
                    </div>
                    <div class="detail_TM">
                        <h5>Mike Hardson</h5>
                        <h6>Senior Designer</h6>
                    </div>
                </div>
                <div class="singleTM">
                    <div class="tm_img">
                        <img src="images/team/4.jpg" alt="">
                        <div class="tm_overlay">
                            <div class="team_social">
                                <a href="#"><span>Facebook</span></a>
                                <a href="#"><span>Twitter</span></a>
                                <a href="#"><span>Youtube</span></a>
                            </div>
                            <a href="#" class="common_btn"><span>learn more</span></a>
                        </div>
                    </div>
                    <div class="detail_TM">
                        <h5>Rose Ford</h5>
                        <h6>Marketing manager</h6>
                    </div>
                </div>
                <div class="singleTM">
                    <div class="tm_img">
                        <img src="images/team/5.jpg" alt="">
                        <div class="tm_overlay">
                            <div class="team_social">
                                <a href="#"><span>Facebook</span></a>
                                <a href="#"><span>Twitter</span></a>
                                <a href="#"><span>Youtube</span></a>
                            </div>
                            <a href="#" class="common_btn"><span>learn more</span></a>
                        </div>
                    </div>
                    <div class="detail_TM">
                        <h5>John Albert</h5>
                        <h6>Brand Officer</h6>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- Team Section -->

        <!-- Why Choose Section -->
        <section class="commonSection chooseUs">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h4 class="sub_title">our benefits</h4>
                        <h2 class="sec_title">why choose us</h2>
                        <p class="sec_desc">
                            We are committed to providing our customers with exceptional service while<br> offering our employees the best training.
                        </p>
                    </div>
                </div>
                <div id="tabs">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="chooseUs_title">
                                <li><a href="#tes_tab_1" data-toggle="tab">Latest technology</a></li>
                                <li class="active"><a href="#tes_tab_2" data-toggle="tab">awesome support</a></li>
                                <li><a href="#tes_tab_3" data-toggle="tab">1 click demo install</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="tab-content clearfix">
                            <div class="tab-pane fade" id="tes_tab_1">
                                <div class="col-lg-7 col-sm-7 col-md-7">
                                    <div class="wh_choose">
                                        <p>
                                            There are many variations of passages of lorem ipsum available, but the majority have
                                            suffered alteration in some form, by injected humour, or randomised words
                                            which don't look even slightly believable. If you are going to use a
                                            passage of Lorem Ipsum, you need to be sure there isn't anything
                                            embarrassing hidden in the middle of text.
                                        </p>
                                        <ul>
                                            <li><i class="fa fa-check-square"></i>Self-contained, state-of-the-art time clock</li>
                                            <li><i class="fa fa-check-square"></i>Scalability of up to 500 employees per time clock</li>
                                            <li><i class="fa fa-check-square"></i>The ability to connect up to 32 time clocks</li>
                                            <li><i class="fa fa-check-square"></i>Employee self-enrollment</li>
                                            <li><i class="fa fa-check-square"></i>Payroll integration</li>
                                            <li><i class="fa fa-check-square"></i>Built-in backup camera to verify failed punches</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-sm-5 col-md-5">
                                    <div class="chose_img">
                                        <img src="#" alt=""/>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade in active" id="tes_tab_2">
                                <div class="col-lg-5 col-sm-5 col-md-5">
                                    <div class="chose_img">
                                        <img src="#" alt=""/>
                                    </div>
                                </div>
                                <div class="col-lg-7 col-sm-7 col-md-7">
                                    <div class="wh_choose">
                                        <p>
                                            There are many variations of passages of lorem ipsum available, but the majority have
                                            suffered alteration in some form, by injected humour, or randomised words
                                            which don't look even slightly believable. If you are going to use a
                                            passage of Lorem Ipsum, you need to be sure there isn't anything
                                            embarrassing hidden in the middle of text.
                                        </p>
                                        <ul>
                                            <li><i class="fa fa-check-square"></i>Self-contained, state-of-the-art time clock</li>
                                            <li><i class="fa fa-check-square"></i>Scalability of up to 500 employees per time clock</li>
                                            <li><i class="fa fa-check-square"></i>The ability to connect up to 32 time clocks</li>
                                            <li><i class="fa fa-check-square"></i>Employee self-enrollment</li>
                                            <li><i class="fa fa-check-square"></i>Payroll integration</li>
                                            <li><i class="fa fa-check-square"></i>Built-in backup camera to verify failed punches</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tes_tab_3">
                                <div class="col-lg-7 col-sm-7 col-md-7">
                                    <div class="wh_choose">
                                        <p>
                                            There are many variations of passages of lorem ipsum available, but the majority have
                                            suffered alteration in some form, by injected humour, or randomised words
                                            which don't look even slightly believable. If you are going to use a
                                            passage of Lorem Ipsum, you need to be sure there isn't anything
                                            embarrassing hidden in the middle of text.
                                        </p>
                                        <ul>
                                            <li><i class="fa fa-check-square"></i>Self-contained, state-of-the-art time clock</li>
                                            <li><i class="fa fa-check-square"></i>Scalability of up to 500 employees per time clock</li>
                                            <li><i class="fa fa-check-square"></i>The ability to connect up to 32 time clocks</li>
                                            <li><i class="fa fa-check-square"></i>Employee self-enrollment</li>
                                            <li><i class="fa fa-check-square"></i>Payroll integration</li>
                                            <li><i class="fa fa-check-square"></i>Built-in backup camera to verify failed punches</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-sm-5 col-md-5">
                                    <div class="chose_img">
                                        <img src="#" alt=""/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Section -->

        <!-- Our Work Section -->
        <section class="commonSection our_work">
            <div class="videoWrap_2">
                <img src="{{ asset('front-end/images/about/about5.png') }}" alt="">
                <div class="play_video">
                    <a class="video_popup" href="https://www.youtube.com/watch?v=A7ZkZazfvao"><i class="fa fa-play"></i></a>
                    <h2>Watch Video</h2>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="ab_detail_wrap">
                            <h4 class="sub_title">the only design you need</h4>
                            <h2 class="sec_title">What We do?</h2>
                            <p class="sec_desc">
                                Our mission is to “Build Great Brands” for our partner; brands that generate loyal customers, command premium prices and flex with market fluctuation to increase corporate value.
                                We specialize in Web Design & Development, Digital Marketing, E-Commerce website Development, Content Creation, and Graphic Design.
                                We build Web Solutions, which develop gradually with the changing needs of your business.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Our Work Section -->


@endsection

