<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->

		<!-- all css here -->
        @include('layouts.styles')
    </head>
    <body>
    @include('layouts.header')
        <div class="breadcrumb-area pt-95 pb-95 bg-img" style="background-image:url(../../../public/img/myimg/board.png);">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>About Us</h2>
                    <ul>
                        <li><a href="{{route('food-shop/index')}}">home</a></li>
                        <li class="active">About Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="about-us-area pt-100 pb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="about-us-img pr-30 wow fadeInLeft">
                            <img alt="" src="../../../public/img/myimg/smallogo.png">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 d-flex align-items-center">
                        <div class="about-us-content">
                            <h2>About IrBali</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipis elit, sed do eiusmod tempor incididu ut labore et dolore magna aliqua. Ut enim ad minim  quis nostrud exercitat ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                            <div class="about-us-list">
                                <ul>
                                    <li>There are many variations of passages</li>
                                    <li>Contrary to popular belief is not simply</li>
                                    <li>But I must explain to you how all this mistaken </li>
                                </ul>
                            </div>
                            <div class="about-us-btn">
                                <a class="btn-style" href="{{route('food-shop/contact')}}">CONTACT US</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project-count-area pb-70 pt-100 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="single-count mb-30 text-center">
                            <h2 class="count">2</h2>
                            <span>Years in Business</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="single-count mb-30 text-center">
                            <h2 class="count">9043</h2>
                            <span>Happy People</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="single-count mb-30 text-center">
                            <h2 class="count">58022</h2>
                            <span>Sales</span>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-12">
                        <div class="single-count mb-30 text-center">
                            <h2 class="count">3</h2>
                            <span>Award Winning</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<div class="team-ara pt-95 pb-70">
            <div class="container">
                <div class="section-title text-center mb-55">
                    <h2>Our Team</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-img">
                                <a href="#">
                                    <img src="../../../public/img/myimg/my.png" alt="">
                                </a>
                                <div class="team-social">
                                    <a href="https://www.facebook.com/profile.php?id=100067913424996">
                                        <i class="ti-facebook"></i>
                                    </a>
                                    <a href="https://www.pinterest.com/ihorbalitsky/">
                                        <i class="ti-pinterest"></i>
                                    </a>
                                    <a href="https://twitter.com/ihor_Bali">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                    <a href="https://www.instagram.com/_igbalitskiy_/">
                                        <i class="ti-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>Ihor Bali</h4>
                                <span>Customer </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-img">
                                <a href="#">
                                    <img src="../../../public/img/myimg/my.png" alt="">
                                </a>
                                <div class="team-social">
                                    <a href="https://www.facebook.com/profile.php?id=100067913424996">
                                        <i class="ti-facebook"></i>
                                    </a>
                                    <a href="https://www.pinterest.com/ihorbalitsky/">
                                        <i class="ti-pinterest"></i>
                                    </a>
                                    <a href="https://twitter.com/ihor_Bali">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                    <a href="https://www.instagram.com/_igbalitskiy_/">
                                        <i class="ti-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>Ihor Bali</h4>
                                <span>Manager </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-img">
                                <a href="#">
                                    <img src="../../../public/img/myimg/my.png" alt="">
                                </a>
                                <div class="team-social">
                                    <a href="https://www.facebook.com/profile.php?id=100067913424996">
                                        <i class="ti-facebook"></i>
                                    </a>
                                    <a href="https://www.pinterest.com/ihorbalitsky/">
                                        <i class="ti-pinterest"></i>
                                    </a>
                                    <a href="https://twitter.com/ihor_Bali">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                    <a href="https://www.instagram.com/_igbalitskiy_/">
                                        <i class="ti-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>Ihor Bali</h4>
                                <span>Customer </span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="team-wrapper mb-30">
                            <div class="team-img">
                                <a href="#">
                                    <img src="../../../public/img/myimg/my.png" alt="">
                                </a>
                                <div class="team-social">
                                    <a href="https://www.facebook.com/profile.php?id=100067913424996">
                                        <i class="ti-facebook"></i>
                                    </a>
                                    <a href="https://www.pinterest.com/ihorbalitsky/">
                                        <i class="ti-pinterest"></i>
                                    </a>
                                    <a href="https://twitter.com/ihor_Bali">
                                        <i class="ti-twitter-alt"></i>
                                    </a>
                                    <a href="https://www.instagram.com/_igbalitskiy_/">
                                        <i class="ti-instagram"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="team-content text-center">
                                <h4>Ihor Bali</h4>
                                <span>Manager </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		@include('layouts.footer')


		<!-- all js here -->
        @include('layouts.scripts')
    </body>
</html>
