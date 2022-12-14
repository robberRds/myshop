<header class="header-area">
    <div class="header-top theme-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="welcome-area">
                        <p>Default welcome msg! </p>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8 col-12">
                    <div class="account-curr-lang-wrap f-right">
                        <ul>
                            <li class="top-hover"><a href="#">$Doller (US) <i class="icon-arrow-down"></i></a>
                                <ul>
                                    <li><a href="#">Taka (BDT)</a></li>
                                    <li><a href="#">Riyal (SAR)</a></li>
                                    <li><a href="#">Rupee (INR)</a></li>
                                    <li><a href="#">Dirham (AED)</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><img alt="flag" src="../../../public/img/icon-img/en.jpg"> English  <i class="icon-arrow-down"></i></a>
                                <ul>
                                    <li><a href="#"><img alt="flag" src="../../../public/img/icon-img/bl.jpg">Bangla </a></li>
                                    <li><a href="#"><img alt="flag" src="../../../public/img/icon-img/ar.jpg">Arabic</a></li>
                                    <li><a href="#"><img alt="flag" src="../../../public/img/icon-img/in.jpg">Hindi </a></li>
                                    <li><a href="#"><img alt="flag" src="../../../public/img/icon-img/sp.jpg">Spanish</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom transparent-bar">
        <div class="container">
            <div class="row">
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-5">
                    <div class="logo pt-39">
                        <a href="{{route('food-shop/index')}}"><img alt="" src="../../../public/img/myimg/logo.png"></a>
                    </div>
                </div>
                <div class="col-xl-8 col-lg-7 d-none d-lg-block">
                    <div class="main-menu text-center">
                        <nav>
                            <ul>
                                <li><a href="{{route('food-shop/index')}}">HOME</a></li>
                                <li class="mega-menu-position"><a href="{{route('food-shop/shop-page')}}">Food</a>
                                    <ul class="mega-menu">
                                        <li>
                                            <a href="#">?????????? ????????????</a>
                                        </li>
                                        <li>
                                            <a href="#">?????????? ????????????</a>
                                        </li>
                                        <li>
                                            <a href="#">??????????</a>
                                        </li>
                                        <li>
                                            <a href="#">??????????????</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="#">PAGES</a>
                                    <ul class="submenu">
                                        <li>
                                            <a href="{{route('food-shop/index')}}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{route('food-shop/shop-page')}}">Food</a>
                                        </li>
                                        <li>
                                            <a href="{{route('food-shop/about')}}">About</a>
                                        </li>
                                        <li>
                                            <a href="{{route('food-shop/contact')}}">Contact us</a>
                                        </li>
                                        <li>
                                            <a href="{{route('food-shop/my-account')}}">My account</a>
                                        </li>
                                        <li>
                                            <a href="{{route('food-shop/checkout')}}">Checkout</a>
                                        </li>
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{route('food-shop/about')}}">ABOUT</a></li>
                                <li><a href="{{route('food-shop/contact')}}">contact us</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-8 col-sm-8 col-7">
                    <div class="search-login-cart-wrapper">
                        <div class="header-login same-style">
                            <a href="{{route('food-shop/my-account')}}"><i class="icon-user icons"></i></a>
                        </div>
                        <div class="header-cart same-style">
                            <button class="icon-cart">
                                <i class="icon-handbag"></i>
                                <span class="count-style">{{\Cart::session(\Illuminate\Support\Facades\Session::getId())->getTotalQuantity()}}</span>
                            </button>
                            <div class="shopping-cart-content">
                                @foreach($cart as $item)
                                <ul>
                                    <li class="single-shopping-cart">
                                        <div class="shopping-cart-img">
                                            <a href="#"><img alt="" src="../../../public/storage/{{$item->attributes->image}}"></a>
                                        </div>
                                        <div class="shopping-cart-title">
                                            <h4><a href="#">{{$item->name}} </a></h4>
                                            <h6>Qty: {{$item->quantity}}</h6>
                                            <span>${{$item->price}}</span>
                                        </div>
                                        <div class="shopping-cart-delete">
                                            <a href="#"><i class="ti-close"></i></a>
                                        </div>
                                    </li>
                                </ul>
                                @endforeach
                                <div class="shopping-cart-total">
                                    <h4>Shipping : <span>Free</span></h4>
                                    <h4>Total : <span class="shop-total">${{$sum}}</span></h4>
                                </div>
                                <div class="shopping-cart-btn">
                                    <a href="{{route('food-shop/checkout')}}">checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu-area electro-menu d-md-block col-md-12 col-lg-12 col-12 d-lg-none d-xl-none">
                    <div class="mobile-menu">
                        <nav id="mobile-menu-active">
                            <ul class="menu-overflow">
                                <li><a href="{{route('food-shop/index')}}">HOME</a></li>
                                <li><a href="#">PAGES</a>
                                    <ul>
                                        <li>
                                            <a href="{{route('food-shop/index')}}">Home</a>
                                        </li>
                                        <li>
                                            <a href="{{route('food-shop/shop-page')}}">Food</a>
                                        </li>
                                        <li>
                                            <a href="{{route('food-shop/about')}}">About</a>
                                        </li>
                                        <li>
                                            <a href="{{route('food-shop/contact')}}">Contact us</a>
                                        </li>
                                        <li>
                                            <a href="{{route('food-shop/my-account')}}">My account</a>
                                        </li>
                                        <li>
                                            <a href="{{route('food-shop/checkout')}}">Checkout</a>
                                        </li>
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{route('food-shop/shop-page')}}">Food</a>
                                    <ul>
                                        <li>
                                            <a href="#">?????????? ????????????</a>
                                        </li>
                                        <li>
                                            <a href="#">?????????? ????????????</a>
                                        </li>
                                        <li>
                                            <a href="#">??????????</a>
                                        </li>
                                        <li>
                                            <a href="#">??????????????</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{route('food-shop/contact')}}"> Contact us </a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
@yield('header')
