<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Marten - Pet Food eCommerce Bootstrap4 Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="../../../public/img/favicon.png">

		<!-- all css here -->
        @include('layouts.styles')
    </head>
    <body>
    @include('layouts.header')
        <div class="breadcrumb-area pt-95 pb-95 bg-img" style="background-image:url(../../../public/img/banner/banner-2.jpg);">
            <div class="container">
                <div class="breadcrumb-content text-center">
                    <h2>Blog Details</h2>
                    <ul>
                        <li><a href="index.blade.php">home</a></li>
                        <li class="active">Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shop-area pt-100 pb-100">
            <div class="container">
                <div class="row flex-row-reverse">
                    <div class="col-lg-9 col-md-8">
                        <div class="blog-details-wrapper res-mrg-top">
                            <div class="single-blog-wrapper">
                                <div class="blog-img mb-30">
                                    <img src="../../../public/img/blog/blog-details.jpg" alt="">
                                </div>
                                <div class="blog-details-content">
                                    <h2>new shop collection our shop</h2>
                                    <div class="blog-meta">
                                        <ul>
                                            <li>May - 14.09.2018 </li>
                                            <li>
                                                <a href="#"> 02 Comments</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ull laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprhendit in voluptate velit esse cillum dolore eu fugiat to nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qei officia deser mollit anim id est to laborum.</p>
                                <blockquote class="importent-title">
                                    <h4>Lorem ipsum dolor sit amet, consecte adipisicing elit, sed do eiusmod tempor incididunt labo dolor magna aliqua. Ut enim ad minim veniam quis nostrud.</h4>
                                </blockquote>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehendrit.</p>
                                <div class="dec-img-wrapper">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <div class="dec-img">
                                                <img src="../../../public/img/blog/blog-dec-img1.jpg" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <div class="dec-img dec-mrg res-mrg-top-2">
                                                <img src="../../../public/img/blog/blog-dec-img2.jpg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ull laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprhendit in voluptate velit esse cillum dolore eu fugiat to nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qei officia deser mollit anim id est to laborum.</p>
                                <div class="blog-dec-tags-social">
                                    <div class="blog-dec-tags">
                                        <ul>
                                            <li><a href="#">Dog</a></li>
                                            <li><a href="#">Cat</a></li>
                                            <li><a href="#">Fish</a></li>
                                        </ul>
                                    </div>
                                    <div class="blog-dec-social">
                                        <span>share :</span>
                                        <ul>
                                            <li><a href="#"><i class="icon-social-twitter"></i></a></li>
                                            <li><a href="#"><i class="icon-social-instagram"></i></a></li>
                                            <li><a href="#"><i class="icon-social-dribbble"></i></a></li>
                                            <li><a href="#"><i class="icon-social-linkedin"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-comment-wrapper mt-55">
                                <h4 class="blog-dec-title">comments : 02</h4>
                                <div class="single-comment-wrapper mt-35">
                                    <div class="blog-comment-img">
                                        <img src="../../../public/img/blog/blog-comment1.png" alt="">
                                    </div>
                                    <div class="blog-comment-content">
                                        <h4>Anthony Stephens</h4>
                                        <span>October 14, 2018 </span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim ad minim veniam, </p>
                                        <div class="blog-details-btn">
                                            <a href="blog-details.blade.php">read more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-comment-wrapper mt-50 ml-125">
                                    <div class="blog-comment-img">
                                        <img src="../../../public/img/blog/blog-comment2.png" alt="">
                                    </div>
                                    <div class="blog-comment-content">
                                        <h4>Anthony Stephens</h4>
                                        <span>October 14, 2018 </span>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolor magna aliqua. Ut enim ad minim veniam, </p>
                                        <div class="blog-details-btn">
                                            <a href="blog-details.blade.php">read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-reply-wrapper mt-50">
                                <h4 class="blog-dec-title">post a comment</h4>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="leave-form">
                                                <input type="text" placeholder="Full Name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="leave-form">
                                                <input type="email" placeholder="Eail Address ">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="text-leave">
                                                <textarea placeholder="Massage"></textarea>
                                                <input type="submit" value="SEND MASSAGE">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4">
                        <div class="shop-sidebar blog-mrg">
                            <div class="shop-widget">
                                <h4 class="shop-sidebar-title">Search Products</h4>
                                <div class="shop-search mt-25 mb-50">
                                    <form class="shop-search-form">
                                        <input type="text" placeholder="Find a product">
                                        <button type="submit">
                                            <i class="icon-magnifier"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                            <div class="shop-widget mt-50">
                                <h4 class="shop-sidebar-title">Food Category </h4>
                                 <div class="shop-list-style mt-20">
                                    <ul>
                                        <li><a href="#">Canned Food</a></li>
                                        <li><a href="#">Dry Food</a></li>
                                        <li><a href="#">Food Pouches</a></li>
                                        <li><a href="#">Food Toppers</a></li>
                                        <li><a href="#">Fresh Food</a></li>
                                        <li><a href="#">Frozen Food</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop-widget mt-50">
                                <h4 class="shop-sidebar-title">Top Brands </h4>
                                 <div class="shop-list-style mt-20">
                                    <ul>
                                        <li><a href="#">Authority</a></li>
                                        <li><a href="#">AvoDerm Natural</a></li>
                                        <li><a href="#">Bil-Jac</a></li>
                                        <li><a href="#">Blue Buffalo</a></li>
                                        <li><a href="#">Castor & Pollux</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop-widget mt-50">
                                <h4 class="shop-sidebar-title">Tags </h4>
                                 <div class="shop-list-style mt-20">
                                    <ul>
                                        <li><a href="#">Food </a></li>
                                        <li><a href="#">Fish </a></li>
                                        <li><a href="#">Dog </a></li>
                                        <li><a href="#">Cat  </a></li>
                                        <li><a href="#">Pet </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop-widget mt-50">
                                <h4 class="shop-sidebar-title">Health Consideration </h4>
                                 <div class="shop-list-style mt-20">
                                    <ul>
                                        <li><a href="#">Bone Development <span>18</span></a></li>
                                        <li><a href="#">Digestive Care <span>22</span></a></li>
                                        <li><a href="#">General Health <span>19</span></a></li>
                                        <li><a href="#">Hip & Joint  <span>41</span></a></li>
                                        <li><a href="#">Immune System  <span>22</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop-widget mt-50">
                                <h4 class="shop-sidebar-title">Nutritional Option </h4>
                                 <div class="shop-list-style mt-20">
                                    <ul>
                                        <li><a href="#">Grain Free  <span>18</span></a></li>
                                        <li><a href="#">Natural <span>22</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="shop-widget mt-50">
                                <h4 class="shop-sidebar-title">Recent Post</h4>
                                <div class="recent-post-wrapper mt-25">
                                    <div class="single-recent-post mb-20">
                                        <div class="recent-post-img">
                                            <a href="#"><img src="../../../public/img/blog/blog-s1.jpg" alt=""></a>
                                        </div>
                                        <div class="recent-post-content">
                                            <h4><a href="#">My Dog, Aren</a></h4>
                                            <span>April 19, 2018 </span>
                                        </div>
                                    </div>
                                    <div class="single-recent-post mb-20">
                                        <div class="recent-post-img">
                                            <a href="#"><img src="../../../public/img/blog/blog-s2.jpg" alt=""></a>
                                        </div>
                                        <div class="recent-post-content">
                                            <h4><a href="#">My Dog, Tomy</a></h4>
                                            <span>April 19, 2018 </span>
                                        </div>
                                    </div>
                                    <div class="single-recent-post mb-20">
                                        <div class="recent-post-img">
                                            <a href="#"><img src="../../../public/img/blog/blog-s3.jpg" alt=""></a>
                                        </div>
                                        <div class="recent-post-content">
                                            <h4><a href="#">My Dog, Suju</a></h4>
                                            <span>April 19, 2018 </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @include('layouts.footer')
		<!-- modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span class="ti-close" aria-hidden="true"></span>
            </button>
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="qwick-view-left">
                            <div class="quick-view-learg-img">
                                <div class="quick-view-tab-content tab-content">
                                    <div class="tab-pane active show fade" id="modal1" role="tabpanel">
                                        <img src="../../../public/img/quick-view/l1.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal2" role="tabpanel">
                                        <img src="../../../public/img/quick-view/l2.jpg" alt="">
                                    </div>
                                    <div class="tab-pane fade" id="modal3" role="tabpanel">
                                        <img src="../../../public/img/quick-view/l3.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="quick-view-list nav" role="tablist">
                                <a class="active" href="#modal1" data-toggle="tab" role="tab">
                                    <img src="../../../public/img/quick-view/s1.jpg" alt="">
                                </a>
                                <a href="#modal2" data-toggle="tab" role="tab">
                                    <img src="../../../public/img/quick-view/s2.jpg" alt="">
                                </a>
                                <a href="#modal3" data-toggle="tab" role="tab">
                                    <img src="../../../public/img/quick-view/s3.jpg" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="qwick-view-right">
                            <div class="qwick-view-content">
                                <h3>Dog Calcium Food</h3>
                                <div class="product-price">
                                    <span>$19.00 </span>
                                </div>
                                <div class="product-rating">
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                    <i class="ion-star theme-color"></i>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do amt tempor incididun ut labore et dolore magna aliqua. Ut enim ad mi , quis nostrud veniam exercitation .</p>
                                <div class="quick-view-select">
                                    <div class="select-option-part">
                                        <label>Size*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">XS</option>
                                            <option value="">S</option>
                                            <option value="">M</option>
                                            <option value=""> L</option>
                                            <option value="">XL</option>
                                            <option value="">XXL</option>
                                        </select>
                                    </div>
                                    <div class="select-option-part">
                                        <label>Color*</label>
                                        <select class="select">
                                            <option value="">- Please Select -</option>
                                            <option value="">orange</option>
                                            <option value="">pink</option>
                                            <option value="">yellow</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="quickview-plus-minus">
                                    <div class="cart-plus-minus">
                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                    </div>
                                    <div class="quickview-btn-cart">
                                        <a class="btn-style" href="#">add to cart</a>
                                    </div>
                                    <div class="quickview-btn-wishlist">
                                        <a class="btn-hover" href="#"><i class="ti-heart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

		<!-- all js here -->
    @include('layouts.scripts')
    </body>
</html>
