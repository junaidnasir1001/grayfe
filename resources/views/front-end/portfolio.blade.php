@extends('front-end.layouts.main')
@section('main-content')
        <!-- Page Banner -->
        <section class="pageBanner">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner_content text-center">
                            <h4><a href="{{ route('home') }}">home</a> - portfolio</h4>
                            <h2>portfolio</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Page Banner -->

        <!-- Portfolio Section -->
        <section class="commonSection porfolioPage">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="singlefolio">
                            <img src="images/portfolio/1.jpg" alt=""/>
                            <div class="folioHover">
                                <a class="cate" href="#">Graphic</a>
                                <h4><a href="portfolio_detail.html">Design Styles</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="singlefolio">
                            <img src="images/portfolio/2.jpg" alt=""/>
                            <div class="folioHover">
                                <a class="cate" href="#">Graphic</a>
                                <h4><a href="portfolio_detail.html">Design Styles</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="singlefolio">
                            <img src="images/portfolio/3.jpg" alt=""/>
                            <div class="folioHover">
                                <a class="cate" href="#">Graphic</a>
                                <h4><a href="portfolio_detail.html">Design Styles</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="singlefolio">
                            <img src="images/portfolio/4.jpg" alt=""/>
                            <div class="folioHover">
                                <a class="cate" href="#">Graphic</a>
                                <h4><a href="portfolio_detail.html">Design Styles</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="singlefolio">
                            <img src="images/portfolio/5.jpg" alt=""/>
                            <div class="folioHover">
                                <a class="cate" href="#">Graphic</a>
                                <h4><a href="portfolio_detail.html">Design Styles</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-md-4">
                        <div class="singlefolio">
                            <img src="images/portfolio/6.jpg" alt=""/>
                            <div class="folioHover">
                                <a class="cate" href="#">Graphic</a>
                                <h4><a href="portfolio_detail.html">Design Styles</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt_30">
                    <div class="col-lg-12 text-center">
                        <a class="common_btn red_bg" href="#"><span>Load More</span></a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio Section -->

@endsection
