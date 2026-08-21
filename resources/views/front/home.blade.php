@extends('front.layouts.index')
@section('title', 'Home Page')

@section('content')
    <!-- Banner Start -->
    <section class="banner4">
        <div class="banner4slider">
            <div class="contant-box overlay position-relative">
                <div class="bg-img hundread-vh">
                    <img src="{{ asset('assets/images/home-four/banner-bg-2.png') }}" alt="image">
                </div>
                <div class="content-holder p-0 absolute-content">
                    <div class="row align-items-center justify-content-center  w-100 h-100">
                        <div class="col-12 text-center">
                            <div class="content-common position-relative content text-center">
                                <h6> New fashion trend </h6>
                                <h1> Premium Fashion </h1>
                                <a href="shop-grid-left-sidebar.html" class="button fashon--primary">explore now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="contant-box overlay position-relative">
                <div class="bg-img hundread-vh">
                    <img src="{{ asset('assets/images/home-four/banner-bg.png') }}" alt="image">
                </div>
                <div class="content-holder p-0 absolute-content">
                    <div class="row align-items-center justify-content-center w-100 h-100">
                        <div class="col-12 text-center">
                            <div class="content-common position-relative content text-center">
                                <h6> New fashion trend </h6>
                                <h1> Premium Fashion </h1>
                                <a href="shop-grid-left-sidebar.html" class="button  fashon--primary">explore now
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- catagory4 Start -->
    <div class="catagory4 pt-60 pb-60">
        <div class="container">
            <div class="row mt--30">
                <div class="col-lg-6 h-100 mt-30">
                    <a href="shop-grid-left-sidebar.html" class="catagory-single one">
                        <img src="{{ asset('assets/images/home-four/catgory4-1.png') }}" alt="#"
                             class="background-img bg-img imgone">
                        <div class="content blacktext">
                            <div class="row w-100 h-100 justify-content-end align-items-center">
                                <div class="col-xl-7 col-md-9 text-lg-start text-end">
                                    <h5 class="wow animated fadeInUp" data-wow-delay="0.2s"> Shop & Save</h5>
                                    <h3 class="wow animated fadeInUp" data-wow-delay="0.3s"> Exclusive Party Fashion </h3>
                                    <span class="wow link animated fadeInUp" data-wow-delay="0.4s">Explore now</span>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6">
                    <div class="row">
                        <div class="co-12 mt-30 ">
                            <a href="shop-grid-left-sidebar.html" class="catagory-single">
                                <img src="{{ asset('assets/images/home-four/catgory4-2.png') }}" alt=""
                                     class="background-img bg-img">
                                <div class="content white">
                                    <div class="row w-100 h-100 align-items-center">
                                        <div class="col-12">
                                            <h5 class=" wow animated red fadeInUp" data-wow-delay="0.2s"> 20% Off
                                            </h5>
                                            <h3 class=" wow animated fadeInUp" data-wow-delay="0.3s"> Man Fashion
                                            </h3>
                                            <span class="link wow animated fadeInUp" data-wow-delay="0.4s"> explore
                                                    now</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-12 mt-30">
                            <a href="shop-grid-left-sidebar.html" class="catagory-single">
                                <img src="{{ asset('assets/images/home-four/catgory4-3.png') }}" alt=""
                                     class="background-img bg-img">
                                <div class="content white">
                                    <div class="row w-100 h-100 justify-content-end align-items-center">
                                        <div class="col-xxl-6 col-lg-9">
                                            <h5 class=" wow animated fadeInUp" data-wow-delay="0.2s"> New Products
                                            </h5>
                                            <h3 class=" wow animated fadeInUp" data-wow-delay="0.3s"> Sports Meter
                                            </h3>
                                            <span class="link wow animated fadeInUp" data-wow-delay="0.4s"> explore
                                                    now</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- catagory4 End -->


    <!-- products-grid Start -->
    <section class="products-grid pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header text-center wow fadeInUp animated">
                        <h2 class=" wow animated fadeInUp" data-wow-delay="0.2s"> Inspire Products </h2>
                        <p class=" wow animated fadeInUp" data-wow-delay="0.3s"> Fish fruitful were together don't
                            bring replenish dominion so evening. </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 wow fadeInUp animated ">
                    <div class="products-grid-one product4">
                        <div class="products-grid-one__product-image">
                            <div class="products-grid-one__badge-box"> <span
                                    class="bg_base badge discount ">New</span> </div> <a href="shop-details-1.html"
                                                                                         class="d-block products-grid__image_holder"> <img
                                    class="products-grid-one__mainimage products-grid-one__first-img"
                                    src="{{ asset('assets/images/home-four/product-1.png') }}" alt="Alt"> <img
                                    class="products-grid-one__hover-img" src="{{ asset('assets/images/home-four/product-2.png') }}"
                                    alt="Alt"> </a>
                            <div class="products-grid__usefull-links">
                                <ul>
                                    <li><a href="#popup" class="popup_link"> <i
                                                class="flaticon-magnifying-glass"></i> <span> quick view</span> </a>
                                    </li>
                                    <li><a href="cart.html"> <i class="flaticon-shopping-bag"> </i> <span>
                                                    Cart</span> </a> </li>
                                    <li><a href="wishlist.html"> <i class="flaticon-like"></i> <span>
                                                    wishlist</span> </a> </li>
                                </ul>
                            </div>
                        </div>
                        <div id="popup" class="product-gird__quick-view-popup mfp-hide">
                            <div class="container">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-lg-6">
                                        <div class="quick-view__left-content">
                                            <div class="tabs">
                                                <div class="popup-product-thumb-box">
                                                    <ul>
                                                        <li class="tab-nav popup-product-thumb"> <a href="#tab7">
                                                                <img src="{{ asset('assets/images/home-four/product-1.png') }}"
                                                                     alt="img"> </a> </li>
                                                        <li class="tab-nav popup-product-thumb "> <a href="#tab8">
                                                                <img src="{{ asset('assets/images/home-four/product-2.png') }}"
                                                                     alt="img"> </a> </li>
                                                        <li class="tab-nav popup-product-thumb "> <a href="#tab9">
                                                                <img src="{{ asset('assets/images/home-four/product-3.png') }}"
                                                                     alt="img"> </a> </li>
                                                    </ul>
                                                </div>
                                                <div class="popup-product-main-image-box">
                                                    <div id="tab7" class="tab-item popup-product-image">
                                                        <div class="popup-product-single-image"> <img
                                                                src="{{ asset('assets/images/home-four/product-1.png') }}"
                                                                alt="img">
                                                        </div>
                                                    </div>
                                                    <div id="tab8" class="tab-item popup-product-image">
                                                        <div class="popup-product-single-image"> <img
                                                                src="{{ asset('assets/images/home-four/product-2.png') }}"
                                                                alt="img">
                                                        </div>
                                                    </div>
                                                    <div id="tab9" class="tab-item popup-product-image">
                                                        <div class="popup-product-single-image"> <img
                                                                src="{{ asset('assets/images/home-four/product-3.png') }}"
                                                                alt="img">
                                                        </div>
                                                    </div> <button class="prev"> <i class="flaticon-back"></i>
                                                    </button> <button class="next"> <i class="flaticon-next"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="popup-right-content">
                                            <h3>Woman Pink Purse Isolated </h3>
                                            <div class="ratting"> <i class="flaticon-star"></i> <i
                                                    class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                                                    class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                <span>(100)</span> </div>
                                            <p class="text"> Lorem ipsum dolor sit amet consectetur adipisicing
                                                elit. </p>
                                            <div class="price">
                                                <h2> $45 USD <del> $50 USD</del></h2>
                                                <h6> In stuck</h6>
                                            </div>
                                            <div class="color-varient"> <a href="#0" class="color-name pink">
                                                    <span>Pink</span> </a> <a href="#0" class="color-name red">
                                                    <span>Red</span> </a> <a href="#0"
                                                                             class="color-name yellow"><span>Yellow</span> </a> <a href="#0"
                                                                                                                                   class="color-name blue"> <span>Blue</span> </a> <a href="#0"
                                                                                                                                                                                      class="color-name black"> <span>Black</span> </a> </div>
                                            <div class="add-product">
                                                <h6>Qty:</h6>
                                                <div class="button-group">
                                                    <div class="qtySelector text-center"> <span
                                                            class="decreaseQty"><i class="flaticon-minus"></i>
                                                            </span> <input type="number" class="qtyValue" value="1" />
                                                        <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                            </span> </div> <button class="fashon--border "> Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="payment-method"> <a href="#0"> <img
                                                        src="{{ asset('assets/images/payment_method/method_1.png') }}" alt=""> </a>
                                                <a href="#0"> <img src="{{ asset('assets/images/payment_method/method_2.png') }}"
                                                                   alt=""> </a> <a href="#0"> <img
                                                        src="{{ asset('assets/images/payment_method/method_3.png') }}" alt=""> </a>
                                                <a href="#0"> <img src="{{ asset('assets/images/payment_method/method_4.png') }}"
                                                                   alt=""> </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products-grid__content">
                            <div class="ratting"> <i class="rated flaticon-star-1"></i> <i
                                    class="rated flaticon-star-1"></i> <i class="rated flaticon-star-1"></i> <i
                                    class="rated flaticon-star-1"></i> <i class="flaticon-star-1"></i> </div>
                            <h5 class="product_name"><a href="shop-details-1.html">Woman Pink Purse Isolated </a>
                            </h5>
                            <div class="price d-flex align-content-center justify-content-center">
                                <p>$2909</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 wow fadeInUp animated">
                    <div class="products-grid-one product4">
                        <div class="products-grid-one__product-image">
                            <div class="products-grid-one__badge-box"> <span class="bg_base badge ">Sale</span>
                            </div> <a href="shop-details-1.html" class="d-block products-grid__image_holder"> <img
                                    class="products-grid-one__mainimage products-grid-one__first-img"
                                    src="{{ asset('assets/images/home-four/product-2.png') }}" alt="Alt"> <img
                                    class="products-grid-one__hover-img" src="{{ asset('assets/images/home-four/product-3.png') }}"
                                    alt="Alt"> </a>
                            <div class="products-grid__usefull-links">
                                <ul>
                                    <li><a href="#popup2" class="popup_link"> <i
                                                class="flaticon-magnifying-glass"></i> <span> quick view</span> </a>
                                    </li>
                                    <li><a href="cart.html"> <i class="flaticon-shopping-bag"> </i> <span>
                                                    Cart</span> </a> </li>
                                    <li><a href="wishlist.html"> <i class="flaticon-like"></i> <span>
                                                    wishlist</span> </a> </li>
                                </ul>
                            </div>
                        </div>
                        <div id="popup2" class="product-gird__quick-view-popup mfp-hide">
                            <div class="container">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-lg-6">
                                        <div class="quick-view__left-content">
                                            <div class="tabs">
                                                <div class="popup-product-thumb-box">
                                                    <ul>
                                                        <li class="tab-nav popup-product-thumb"> <a href="#tab77">
                                                                <img src="{{ asset('assets/images/home-four/product-2.png') }}"
                                                                     alt="img"> </a> </li>
                                                        <li class="tab-nav popup-product-thumb "> <a href="#tab88">
                                                                <img src="{{ asset('assets/images/home-four/product-3.png') }}"
                                                                     alt="img"> </a> </li>
                                                        <li class="tab-nav popup-product-thumb "> <a href="#tab99">
                                                                <img src="{{ asset('assets/images/home-four/product-4.png') }}"
                                                                     alt="img"> </a> </li>
                                                    </ul>
                                                </div>
                                                <div class="popup-product-main-image-box">
                                                    <div id="tab77" class="tab-item popup-product-image">
                                                        <div class="popup-product-single-image"> <img
                                                                src="{{ asset('assets/images/home-four/product-2.png') }}"
                                                                alt="img">
                                                        </div>
                                                    </div>
                                                    <div id="tab88" class="tab-item popup-product-image">
                                                        <div class="popup-product-single-image"> <img
                                                                src="{{ asset('assets/images/home-four/product-3.png') }}"
                                                                alt="img">
                                                        </div>
                                                    </div>
                                                    <div id="tab99" class="tab-item popup-product-image">
                                                        <div class="popup-product-single-image"> <img
                                                                src="{{ asset('assets/images/home-four/product-4.png') }}"
                                                                alt="img">
                                                        </div>
                                                    </div> <button class="prev"> <i class="flaticon-back"></i>
                                                    </button> <button class="next"> <i class="flaticon-next"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="popup-right-content">
                                            <h3>Man Sports Lastest Shoes </h3>
                                            <div class="ratting"> <i class="flaticon-star"></i> <i
                                                    class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                                                    class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                <span>(100)</span> </div>
                                            <p class="text"> Lorem ipsum dolor, sit amet consectetur adipisicing.
                                            </p>
                                            <div class="price">
                                                <h2> $45 USD <del> $50 USD</del></h2>
                                                <h6> In stuck</h6>
                                            </div>
                                            <div class="color-varient"> <a href="#0" class="color-name pink">
                                                    <span>Pink</span> </a> <a href="#0" class="color-name red">
                                                    <span>Red</span> </a> <a href="#0"
                                                                             class="color-name yellow"><span>Yellow</span> </a> <a href="#0"
                                                                                                                                   class="color-name blue"> <span>Blue</span> </a> <a href="#0"
                                                                                                                                                                                      class="color-name black"> <span>Black</span> </a> </div>
                                            <div class="add-product">
                                                <h6>Qty:</h6>
                                                <div class="button-group">
                                                    <div class="qtySelector text-center"> <span
                                                            class="decreaseQty"><i class="flaticon-minus"></i>
                                                            </span> <input type="number" class="qtyValue" value="1" />
                                                        <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                            </span> </div> <button class="fashon--border "> Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="payment-method"> <a href="#0"> <img
                                                        src="{{ asset('assets/images/payment_method/method_1.png') }}" alt=""> </a>
                                                <a href="#0"> <img src="{{ asset('') }}assets/images/payment_method/method_2.png"
                                                                   alt=""> </a> <a href="#0"> <img
                                                        src="{{ asset('assets/images/payment_method/method_3.png') }}" alt=""> </a>
                                                <a href="#0"> <img src="{{ asset('assets/images/payment_method/method_4.png') }}"
                                                                   alt=""> </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products-grid__content">
                            <div class="ratting"> <i class="rated flaticon-star-1"></i> <i
                                    class="rated flaticon-star-1"></i> <i class="rated flaticon-star-1"></i> <i
                                    class="rated flaticon-star-1"></i> <i class="flaticon-star-1"></i> </div>
                            <h5 class="product_name"><a href="shop-details-1.html">Man Sports Lastest Shoes </a>
                            </h5>
                            <div class="price d-flex align-content-center justify-content-center">
                                <p>$359</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 wow fadeInUp animated">
                    <div class="products-grid-one product4">
                        <div class="products-grid-one__product-image"> <a href="shop-details-1.html"
                                                                          class="d-block products-grid__image_holder"> <img
                                    src="{{ asset('assets/images/home-four/product-3.png') }}" alt="Alt"> </a>
                            <div class="products-grid__usefull-links">
                                <ul>
                                    <li><a href="#popup3" class="popup_link"> <i
                                                class="flaticon-magnifying-glass"></i> <span> quick view</span> </a>
                                    </li>
                                    <li><a href="cart.html"> <i class="flaticon-shopping-bag"> </i> <span>
                                                    Cart</span> </a> </li>
                                    <li><a href="wishlist.html"> <i class="flaticon-like"></i> <span>
                                                    wishlist</span> </a> </li>
                                </ul>
                            </div>
                        </div>
                        <div id="popup3" class="product-gird__quick-view-popup mfp-hide">
                            <div class="container">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-lg-6">
                                        <div class="quick-view__left-content">
                                            <div class="tabs">
                                                <div class="popup-product-thumb-box">
                                                    <ul>
                                                        <li class="tab-nav popup-product-thumb "> <a href="#tab777">
                                                                <img src="{{ asset('assets/images/home-four/product-3.png') }}"
                                                                     alt="img"> </a> </li>
                                                        <li class="tab-nav popup-product-thumb "> <a href="#tab888">
                                                                <img src="{{ asset('assets/images/home-four/product-4.png') }}"
                                                                     alt="img"> </a> </li>
                                                        <li class="tab-nav popup-product-thumb "> <a href="#tab999">
                                                                <img src="{{ asset('assets/images/home-four/product-5.png') }}"
                                                                     alt="img"> </a> </li>
                                                    </ul>
                                                </div>
                                                <div class="popup-product-main-image-box">
                                                    <div id="tab777" class="tab-item popup-product-image">
                                                        <div class="popup-product-single-image"> <img
                                                                src="{{ asset('assets/images/home-four/product-3.png') }}"
                                                                alt="img">
                                                        </div>
                                                    </div>
                                                    <div id="tab888" class="tab-item popup-product-image">
                                                        <div class="popup-product-single-image"> <img
                                                                src="{{ asset('assets/images/home-four/product-4.png') }}"
                                                                alt="img">
                                                        </div>
                                                    </div>
                                                    <div id="tab999" class="tab-item popup-product-image">
                                                        <div class="popup-product-single-image"> <img
                                                                src="{{ asset('assets/images/home-four/product-5.png') }}"
                                                                alt="img">
                                                        </div>
                                                    </div> <button class="prev"> <i class="flaticon-back"></i>
                                                    </button> <button class="next"> <i class="flaticon-next"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="popup-right-content">
                                            <h3> Man Blue Cotton Shirt</h3>
                                            <div class="ratting"> <i class="flaticon-star"></i> <i
                                                    class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                                                    class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                <span>(100)</span> </div>
                                            <p class="text"> Lorem ipsum dolor, sit amet consectetur adipisicing.
                                            </p>
                                            <div class="price">
                                                <h2> $45 USD <del> $50 USD</del></h2>
                                                <h6> In stuck</h6>
                                            </div>
                                            <div class="color-varient"> <a href="#0" class="color-name pink">
                                                    <span>Pink</span> </a> <a href="#0" class="color-name red">
                                                    <span>Red</span> </a> <a href="#0"
                                                                             class="color-name yellow"><span>Yellow</span> </a> <a href="#0"
                                                                                                                                   class="color-name blue"> <span>Blue</span> </a> <a href="#0"
                                                                                                                                                                                      class="color-name black"> <span>Black</span> </a> </div>
                                            <div class="add-product">
                                                <h6>Qty:</h6>
                                                <div class="button-group">
                                                    <div class="qtySelector text-center"> <span
                                                            class="decreaseQty"><i class="flaticon-minus"></i>
                                                            </span> <input type="number" class="qtyValue" value="1" />
                                                        <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                            </span> </div> <button class="fashon--border "> Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="payment-method"> <a href="#0"> <img
                                                        src="{{ asset('assets/images/payment_method/method_1.png') }}" alt=""> </a>
                                                <a href="#0"> <img src="{{ asset('assets/images/payment_method/method_2.png') }}"
                                                                   alt=""> </a> <a href="#0"> <img
                                                        src="{{ asset('assets/images/payment_method/method_3.png') }}" alt=""> </a>
                                                <a href="#0"> <img src="{{ asset('assets/images/payment_method/method_4.png') }}"
                                                                   alt=""> </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products-grid__content">
                            <div class="ratting"> <i class="rated flaticon-star-1"></i> <i
                                    class="rated flaticon-star-1"></i> <i class="rated flaticon-star-1"></i> <i
                                    class="rated flaticon-star-1"></i> <i class="flaticon-star-1"></i> </div>
                            <h5 class="product_name"><a href="shop-details-1.html">Man Blue Cotton Shirt </a> </h5>
                            <div class="price d-flex align-content-center justify-content-center">
                                <p>$24</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 wow fadeInUp animated">
                    <div class="products-grid-one product4">
                        <div class="products-grid-one__product-image">
                            <div class="products-grid-one__badge-box"> <span class="bg_base badge new ">New</span>
                            </div> <a href="shop-details-1.html" class="d-block products-grid__image_holder"> <img
                                    class="products-grid-one__mainimage products-grid-one__first-img"
                                    src="{{ asset('assets/images/home-four/product-4.png') }}" alt="Alt"> <img
                                    class="products-grid-one__hover-img" src="{{ asset('assets/images/home-four/product-5.png') }}"
                                    alt="Alt"> </a>
                            <div class="products-grid__usefull-links">
                                <ul>
                                    <li><a href="#popup4" class="popup_link"> <i
                                                class="flaticon-magnifying-glass"></i> <span> quick view</span> </a>
                                    </li>
                                    <li><a href="cart.html"> <i class="flaticon-shopping-bag"> </i> <span>
                                                    Cart</span> </a> </li>
                                    <li><a href="wishlist.html"> <i class="flaticon-like"></i> <span>
                                                    wishlist</span> </a> </li>
                                </ul>
                            </div>
                        </div>
                        <div id="popup4" class="product-gird__quick-view-popup mfp-hide">
                            <div class="container">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-lg-6">
                                        <div class="quick-view__left-content">
                                            <div class="tabs">
                                                <div class="popup-product-thumb-box">
                                                    <ul>
                                                        <li class="tab-nav popup-product-thumb"> <a href="#tab7777">
                                                                <img src="{{ asset('assets/images/home-four/product-4.png') }}"
                                                                     alt="img"> </a> </li>
                                                        <li class="tab-nav popup-product-thumb "> <a
                                                                href="#tab8888"> <img
                                                                    src="{{ asset('assets/images/home-four/product-5.png') }}"
                                                                    alt="img"> </a> </li>
                                                        <li class="tab-nav popup-product-thumb "> <a
                                                                href="#tab9999"> <img
                                                                    src="{{ asset('assets/images/home-four/product-6.png') }}"
                                                                    alt="img"> </a> </li>
                                                    </ul>
                                                </div>
                                                <div class="popup-product-main-image-box">
                                                    <div id="tab7777" class="tab-item popup-product-image">
                                                        <div class="popup-product-single-image"> <img
                                                                src="{{ asset('assets/images/home-four/product-4.png') }}"
                                                                alt="img">
                                                        </div>
                                                    </div>
                                                    <div id="tab8888" class="tab-item popup-product-image">
                                                        <div class="popup-product-single-image"> <img
                                                                src="{{ asset('assets/images/home-four/product-5.png') }}"
                                                                alt="img">
                                                        </div>
                                                    </div>
                                                    <div id="tab9999" class="tab-item popup-product-image">
                                                        <div class="popup-product-single-image"> <img
                                                                src="{{ asset('assets/images/home-four/product-6.png') }}"
                                                                alt="img">
                                                        </div>
                                                    </div> <button class="prev"> <i class="flaticon-back"></i>
                                                    </button> <button class="next"> <i class="flaticon-next"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="popup-right-content">
                                            <h3> Man Black Tendy Cap </h3>
                                            <div class="ratting"> <i class="flaticon-star"></i> <i
                                                    class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                                                    class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                <span>(100)</span> </div>
                                            <p class="text"> Lorem ipsum dolor, sit amet consectetur adipisicing.
                                            </p>
                                            <div class="price">
                                                <h2> $45 USD <del> $50 USD</del></h2>
                                                <h6> In stuck</h6>
                                            </div>
                                            <div class="color-varient"> <a href="#0" class="color-name pink">
                                                    <span>Pink</span> </a> <a href="#0" class="color-name red">
                                                    <span>Red</span> </a> <a href="#0"
                                                                             class="color-name yellow"><span>Yellow</span> </a> <a href="#0"
                                                                                                                                   class="color-name blue"> <span>Blue</span> </a> <a href="#0"
                                                                                                                                                                                      class="color-name black"> <span>Black</span> </a> </div>
                                            <div class="add-product">
                                                <h6>Qty:</h6>
                                                <div class="button-group">
                                                    <div class="qtySelector text-center"> <span
                                                            class="decreaseQty"><i class="flaticon-minus"></i>
                                                            </span> <input type="number" class="qtyValue" value="1" />
                                                        <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                            </span> </div> <button class="fashon--border "> Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="payment-method"> <a href="#0"> <img
                                                        src="{{ asset('assets/images/payment_method/method_1.png') }}" alt=""> </a>
                                                <a href="#0"> <img src="{{ asset('assets/images/payment_method/method_2.png') }}"
                                                                   alt=""> </a> <a href="#0"> <img
                                                        src="{{ asset('assets/images/payment_method/method_3.png') }}" alt=""> </a>
                                                <a href="#0"> <img src="{{ asset('assets/images/payment_method/method_4.png') }}"
                                                                   alt=""> </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products-grid__content">
                            <div class="ratting"> <i class="rated flaticon-star-1"></i> <i
                                    class="rated flaticon-star-1"></i> <i class="rated flaticon-star-1"></i> <i
                                    class="rated flaticon-star-1"></i> <i class="flaticon-star-1"></i> </div>
                            <h5 class="product_name"><a href="shop-details-1.html"> Man Black Tendy Cap </a> </h5>
                            <div class="price d-flex align-content-center justify-content-center">
                                <p>$45</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 wow fadeInUp animated">
                    <div class="products-grid-one product4">
                        <div class="products-grid-one__product-image"> <a href="shop-details-1.html"
                                                                          class="d-block products-grid__image_holder"> <img
                                    class="products-grid-one__mainimage products-grid-one__first-img"
                                    src="{{ asset('assets/images/home-four/product-5.png') }}" alt="Alt"> <img
                                    class="products-grid-one__hover-img" src="{{ asset('assets/images/home-four/product-6.png') }}"
                                    alt="Alt"> </a>
                            <div class="products-grid__usefull-links">
                                <ul>
                                    <li><a href="#popup5" class="popup_link"> <i
                                                class="flaticon-magnifying-glass"></i> <span> quick view</span> </a>
                                    </li>
                                    <li><a href="cart.html"> <i class="flaticon-shopping-bag"> </i> <span>
                                                    Cart</span> </a> </li>
                                    <li><a href="wishlist.html"> <i class="flaticon-like"></i> <span>
                                                    wishlist</span> </a> </li>
                                </ul>
                            </div>
                        </div>
                        <div id="popup5" class="product-gird__quick-view-popup mfp-hide">
                            <div class="container">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-lg-6">
                                        <div class="quick-view__left-content">
                                            <div class="tabs">
                                                <div class="popup-product-thumb-box">
                                                    <ul>
                                                        <li class="tab-nav popup-product-thumb"> <a
                                                                href="#tab77777"> <img
                                                                    src="{{ asset('assets/images/home-four/product-5.png') }}"
                                                                    alt="img"> </a> </li>
                                                        <li class="tab-nav popup-product-thumb "> <a
                                                                href="#tab88888"> <img
                                                                    src="{{ asset('assets/images/home-four/product-6.png') }}"
                                                                    alt="img"> </a> </li>
                                                        <li class="tab-nav popup-product-thumb "> <a
                                                                href="#tab99999"> <img
                                                                    src="{{ asset('assets/images/home-four/product-7.png') }}"
                                                                    alt="img"> </a> </li>
                                                    </ul>
                                                </div>
                                                <div class="popup-product-main-image-box">
                                                    <div id="tab77777" class="tab-item popup-product-image">
                                                        <div class="popup-product-single-image"> <img
                                                                src="{{ asset('assets/images/home-four/product-5.png') }}"
                                                                alt="img">
                                                        </div>
                                                    </div>
                                                    <div id="tab88888" class="tab-item popup-product-image">
                                                        <div class="popup-product-single-image"> <img
                                                                src="{{ asset('assets/images/home-four/product-6.png') }}"
                                                                alt="img">
                                                        </div>
                                                    </div>
                                                    <div id="tab99999" class="tab-item popup-product-image">
                                                        <div class="popup-product-single-image"> <img
                                                                src="{{ asset('assets/images/home-four/product-7.png') }}"
                                                                alt="img">
                                                        </div>
                                                    </div> <button class="prev"> <i class="flaticon-back"></i>
                                                    </button> <button class="next"> <i class="flaticon-next"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="popup-right-content">
                                            <h3>Blue Modern Sunglass </h3>
                                            <div class="ratting"> <i class="flaticon-star"></i> <i
                                                    class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                                                    class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                <span>(100)</span> </div>
                                            <p class="text"> Lorem ipsum dolor, sit amet consectetur adipisicing.
                                            </p>
                                            <div class="price">
                                                <h2> $35 USD <del> $50 USD</del></h2>
                                                <h6> In stuck</h6>
                                            </div>
                                            <div class="color-varient"> <a href="#0" class="color-name pink">
                                                    <span>Pink</span> </a> <a href="#0" class="color-name red">
                                                    <span>Red</span> </a> <a href="#0"
                                                                             class="color-name yellow"><span>Yellow</span> </a> <a href="#0"
                                                                                                                                   class="color-name blue"> <span>Blue</span> </a> <a href="#0"
                                                                                                                                                                                      class="color-name black"> <span>Black</span> </a> </div>
                                            <div class="add-product">
                                                <h6>Qty:</h6>
                                                <div class="button-group">
                                                    <div class="qtySelector text-center"> <span
                                                            class="decreaseQty"><i class="flaticon-minus"></i>
                                                            </span> <input type="number" class="qtyValue" value="1" />
                                                        <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                            </span> </div> <button class="fashon--border "> Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="payment-method"> <a href="#0"> <img
                                                        src="{{ asset('assets/images/payment_method/method_1.png') }}" alt=""> </a>
                                                <a href="#0"> <img src="{{ asset('assets/images/payment_method/method_2.png') }}"
                                                                   alt=""> </a> <a href="#0"> <img
                                                        src="{{ asset('assets/images/payment_method/method_3.png') }}" alt=""> </a>
                                                <a href="#0"> <img src="{{ asset('assets/images/payment_method/method_4.png') }}"
                                                                   alt=""> </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products-grid__content">
                            <div class="ratting"> <i class="rated flaticon-star-1"></i> <i
                                    class="rated flaticon-star-1"></i> <i class="rated flaticon-star-1"></i> <i
                                    class="rated flaticon-star-1"></i> <i class="flaticon-star-1"></i> </div>
                            <h5 class="product_name"><a href="shop-details-1.html"> Blue Modern Sunglass </a> </h5>
                            <div class="price d-flex align-content-center justify-content-center">
                                <p>$22.09</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 wow fadeInUp animated">
                    <div class="products-grid-one product4">
                        <div class="products-grid-one__product-image"> <a href="shop-details-1.html"
                                                                          class="d-block products-grid__image_holder"> <img
                                    src="{{ asset('assets/images/home-four/product-6.png') }}" alt="Alt"> </a>
                            <div class="products-grid__usefull-links">
                                <ul>
                                    <li><a href="#popup6" class="popup_link"> <i
                                                class="flaticon-magnifying-glass"></i> <span> quick view</span> </a>
                                    </li>
                                    <li><a href="cart.html"> <i class="flaticon-shopping-bag"> </i> <span>
                                                    Cart</span> </a> </li>
                                    <li><a href="wishlist.html"> <i class="flaticon-like"></i> <span>
                                                    wishlist</span> </a> </li>
                                </ul>
                            </div>
                        </div>
                        <div id="popup6" class="product-gird__quick-view-popup mfp-hide">
                            <div class="container">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-lg-6">
                                        <div class="quick-view__left-content">
                                            <div class="tabs">
                                                <div class="popup-product-thumb-box">
                                                    <ul>
                                                        <li class="tab-nav popup-product-thumb"> <a href="#stab1">
                                                                <img src="{{ asset('assets/images/home-four/product-6.png') }}"
                                                                     alt="img"> </a> </li>
                                                        <li class="tab-nav popup-product-thumb "> <a href="#stab2">
                                                                <img src="{{ asset('assets/images/home-four/product-7.png') }}"
                                                                     alt="img"> </a> </li>
                                                        <li class="tab-nav popup-product-thumb "> <a href="#stab3">
                                                                <img src="{{ asset('assets/images/home-four/product-1.png') }}"
                                                                     alt="img"> </a> </li>
                                                    </ul>
                                                </div>
                                                <div class="popup-product-main-image-box">
                                                    <div id="stab1" class="tab-item popup-product-image">
                                                        <div class="popup-product-single-image"> <img
                                                                src="{{ asset('assets/images/home-four/product-6.png') }}"
                                                                alt="img">
                                                        </div>
                                                    </div>
                                                    <div id="stab2" class="tab-item popup-product-image">
                                                        <div class="popup-product-single-image"> <img
                                                                src="{{ asset('assets/images/home-four/product-7.png') }}"
                                                                alt="img">
                                                        </div>
                                                    </div>
                                                    <div id="stab3" class="tab-item popup-product-image">
                                                        <div class="popup-product-single-image"> <img
                                                                src="{{ asset('assets/images/home-four/product-8.png') }}"
                                                                alt="img">
                                                        </div>
                                                    </div> <button class="prev"> <i class="flaticon-back"></i>
                                                    </button> <button class="next"> <i class="flaticon-next"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="popup-right-content">
                                            <h3> Fashion Shoes & Sneakers</h3>
                                            <div class="ratting"> <i class="flaticon-star"></i> <i
                                                    class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                                                    class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                <span>(100)</span> </div>
                                            <p class="text"> Lorem ipsum dolor, sit amet consectetur adipisicing.
                                            </p>
                                            <div class="price">
                                                <h2> $55 USD <del> $50 USD</del></h2>
                                                <h6> In stuck</h6>
                                            </div>
                                            <div class="color-varient"> <a href="#0" class="color-name pink">
                                                    <span>Pink</span> </a> <a href="#0" class="color-name red">
                                                    <span>Red</span> </a> <a href="#0"
                                                                             class="color-name yellow"><span>Yellow</span> </a> <a href="#0"
                                                                                                                                   class="color-name blue"> <span>Blue</span> </a> <a href="#0"
                                                                                                                                                                                      class="color-name black"> <span>Black</span> </a> </div>
                                            <div class="add-product">
                                                <h6>Qty:</h6>
                                                <div class="button-group">
                                                    <div class="qtySelector text-center"> <span
                                                            class="decreaseQty"><i class="flaticon-minus"></i>
                                                            </span> <input type="number" class="qtyValue" value="1" />
                                                        <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                            </span> </div> <button class="fashon--border "> Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="payment-method"> <a href="#0"> <img
                                                        src="{{ asset('assets/images/payment_method/method_1.png') }}" alt=""> </a>
                                                <a href="#0"> <img src="{{ asset('assets/images/payment_method/method_2.png') }}"
                                                                   alt=""> </a> <a href="#0"> <img
                                                        src="{{ asset('assets/images/payment_method/method_3.png') }}" alt=""> </a>
                                                <a href="#0"> <img src="{{ asset('assets/images/payment_method/method_4.png') }}"
                                                                   alt=""> </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products-grid__content">
                            <div class="ratting"> <i class="rated flaticon-star-1"></i> <i
                                    class="rated flaticon-star-1"></i> <i class="rated flaticon-star-1"></i> <i
                                    class="rated flaticon-star-1"></i> <i class="flaticon-star-1"></i> </div>
                            <h5 class="product_name"><a href="shop-details-1.html"> Fashion Shoes & Sneakers </a>
                            </h5>
                            <div class="price d-flex align-content-center justify-content-center">
                                <p>$66</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 wow fadeInUp animated">
                    <div class="products-grid-one product4">
                        <div class="products-grid-one__product-image"> <a href="shop-details-1.html"
                                                                          class="d-block products-grid__image_holder"> <img
                                    src="{{ asset('assets/images/home-four/product-7.png') }}" alt="Alt"> </a>
                            <div class="products-grid__usefull-links">
                                <ul>
                                    <li><a href="#popup7" class="popup_link"> <i
                                                class="flaticon-magnifying-glass"></i> <span> quick view</span> </a>
                                    </li>
                                    <li><a href="cart.html"> <i class="flaticon-shopping-bag"> </i> <span>
                                                    Cart</span> </a> </li>
                                    <li><a href="wishlist.html"> <i class="flaticon-like"></i> <span>
                                                    wishlist</span> </a> </li>
                                </ul>
                            </div>
                        </div>
                        <div id="popup7" class="product-gird__quick-view-popup mfp-hide">
                            <div class="container">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-lg-6">
                                        <div class="quick-view__left-content">
                                            <div class="tabs">
                                                <div class="popup-product-thumb-box">
                                                    <ul>
                                                        <li class="tab-nav popup-product-thumb"> <a href="#stab11">
                                                                <img src="{{ asset('assets/images/home-four/product-7.png') }}"
                                                                     alt="img"> </a> </li>
                                                        <li class="tab-nav popup-product-thumb "> <a href="#stab22">
                                                                <img src="{{ asset('assets/images/home-four/product-8.png') }}"
                                                                     alt="img"> </a> </li>
                                                        <li class="tab-nav popup-product-thumb "> <a href="#stab33">
                                                                <img src="{{ asset('assets/images/home-four/product-1.png') }}"
                                                                     alt="img"> </a> </li>
                                                    </ul>
                                                </div>
                                                <div class="popup-product-main-image-box">
                                                    <div id="stab11" class="tab-item popup-product-image">
                                                        <div class="popup-product-single-image"> <img
                                                                src="{{ asset('assets/images/home-four/product-7.png') }}"
                                                                alt="img">
                                                        </div>
                                                    </div>
                                                    <div id="stab22" class="tab-item popup-product-image">
                                                        <div class="popup-product-single-image"> <img
                                                                src="{{ asset('assets/images/home-four/product-8.png') }}"
                                                                alt="img">
                                                        </div>
                                                    </div>
                                                    <div id="stab33" class="tab-item popup-product-image">
                                                        <div class="popup-product-single-image"> <img
                                                                src="{{ asset('assets/images/home-four/product-1.png') }}"
                                                                alt="img">
                                                        </div>
                                                    </div> <button class="prev"> <i class="flaticon-back"></i>
                                                    </button> <button class="next"> <i class="flaticon-next"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="popup-right-content">
                                            <h3>Man Pink Jacket Isolated </h3>
                                            <div class="ratting"> <i class="flaticon-star"></i> <i
                                                    class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                                                    class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                <span>(100)</span> </div>
                                            <p class="text"> Lorem ipsum dolor, sit amet consectetur adipisicing.
                                            </p>
                                            <div class="price">
                                                <h2> $55 USD <del> $50 USD</del></h2>
                                                <h6> In stuck</h6>
                                            </div>
                                            <div class="color-varient"> <a href="#0" class="color-name pink">
                                                    <span>Pink</span> </a> <a href="#0" class="color-name red">
                                                    <span>Red</span> </a> <a href="#0"
                                                                             class="color-name yellow"><span>Yellow</span> </a> <a href="#0"
                                                                                                                                   class="color-name blue"> <span>Blue</span> </a> <a href="#0"
                                                                                                                                                                                      class="color-name black"> <span>Black</span> </a> </div>
                                            <div class="add-product">
                                                <h6>Qty:</h6>
                                                <div class="button-group">
                                                    <div class="qtySelector text-center"> <span
                                                            class="decreaseQty"><i class="flaticon-minus"></i>
                                                            </span> <input type="number" class="qtyValue" value="1" />
                                                        <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                            </span> </div> <button class="fashon--border "> Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="payment-method"> <a href="#0"> <img
                                                        src="{{ asset('assets/images/payment_method/method_1.png') }}" alt=""> </a>
                                                <a href="#0"> <img src="{{ asset('assets/images/payment_method/method_2.png') }}"
                                                                   alt=""> </a> <a href="#0"> <img
                                                        src="{{ asset('assets/images/payment_method/method_3.png') }}" alt=""> </a>
                                                <a href="#0"> <img src="{{ asset('assets/images/payment_method/method_4.png') }}"
                                                                   alt=""> </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products-grid__content">
                            <div class="ratting"> <i class="rated flaticon-star-1"></i> <i
                                    class="rated flaticon-star-1"></i> <i class="rated flaticon-star-1"></i> <i
                                    class="rated flaticon-star-1"></i> <i class="flaticon-star-1"></i> </div>
                            <h5 class="product_name"><a href="shop-details-1.html"> Man Pink Jacket Isolated </a>
                            </h5>
                            <div class="price d-flex align-content-center justify-content-center">
                                <p>$102</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 col-6 wow fadeInUp animated">
                    <div class="products-grid-one product4">
                        <div class="products-grid-one__product-image">
                            <div class="products-grid-one__badge-box"> <span class="bg_base badge new ">New</span>
                            </div> <a href="shop-details-1.html" class="d-block products-grid__image_holder"> <img
                                    class="products-grid-one__mainimage products-grid-one__first-img"
                                    src="{{ asset('assets/images/home-four/product-8.png') }}" alt="Alt"> <img
                                    class="products-grid-one__hover-img" src="{{ asset('assets/images/home-four/product-1.png') }}"
                                    alt="Alt"> </a>
                            <div class="products-grid__usefull-links">
                                <ul>
                                    <li><a href="#popup8" class="popup_link"> <i
                                                class="flaticon-magnifying-glass"></i> <span> quick view</span> </a>
                                    </li>
                                    <li><a href="cart.html"> <i class="flaticon-shopping-bag"> </i> <span>
                                                    Cart</span> </a> </li>
                                    <li><a href="wishlist.html"> <i class="flaticon-like"></i> <span>
                                                    wishlist</span> </a> </li>
                                </ul>
                            </div>
                        </div>
                        <div id="popup8" class="product-gird__quick-view-popup mfp-hide">
                            <div class="container">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-lg-6">
                                        <div class="quick-view__left-content">
                                            <div class="tabs">
                                                <div class="popup-product-thumb-box">
                                                    <ul>
                                                        <li class="tab-nav popup-product-thumb"> <a href="#stab111">
                                                                <img src="{{ asset('assets/images/home-four/product-8.png') }}"
                                                                     alt="img"> </a> </li>
                                                        <li class="tab-nav popup-product-thumb "> <a
                                                                href="#stab222"> <img
                                                                    src="{{ asset('assets/images/home-four/product-1.png') }}"
                                                                    alt="img"> </a> </li>
                                                        <li class="tab-nav popup-product-thumb "> <a
                                                                href="#stab333"> <img
                                                                    src="{{ asset('assets/images/home-four/product-2.png') }}"
                                                                    alt="img"> </a> </li>
                                                    </ul>
                                                </div>
                                                <div class="popup-product-main-image-box">
                                                    <div id="stab111" class="tab-item popup-product-image">
                                                        <div class="popup-product-single-image"> <img
                                                                src="{{ asset('assets/images/home-four/product-8.png') }}"
                                                                alt="img">
                                                        </div>
                                                    </div>
                                                    <div id="stab222" class="tab-item popup-product-image">
                                                        <div class="popup-product-single-image"> <img
                                                                src="{{ asset('assets/images/home-four/product-1.png') }}"
                                                                alt="img">
                                                        </div>
                                                    </div>
                                                    <div id="stab333" class="tab-item popup-product-image">
                                                        <div class="popup-product-single-image"> <img
                                                                src="{{ asset('assets/images/home-four/product-2.png') }}"
                                                                alt="img">
                                                        </div>
                                                    </div> <button class="prev"> <i class="flaticon-back"></i>
                                                    </button> <button class="next"> <i class="flaticon-next"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="popup-right-content">
                                            <h3> Woman Blue Top Isolated </h3>
                                            <div class="ratting"> <i class="flaticon-star"></i> <i
                                                    class="flaticon-star"></i> <i class="flaticon-star"></i> <i
                                                    class="flaticon-star"></i> <i class="flaticon-star"></i>
                                                <span>(100)</span> </div>
                                            <p class="text"> Lorem ipsum dolor, sit amet consectetur adipisicing.
                                            </p>
                                            <div class="price">
                                                <h2> $65 USD <del> $50 USD</del></h2>
                                                <h6> In stuck</h6>
                                            </div>
                                            <div class="color-varient"> <a href="#0" class="color-name pink">
                                                    <span>Pink</span> </a> <a href="#0" class="color-name red">
                                                    <span>Red</span> </a> <a href="#0"
                                                                             class="color-name yellow"><span>Yellow</span> </a> <a href="#0"
                                                                                                                                   class="color-name blue"> <span>Blue</span> </a> <a href="#0"
                                                                                                                                                                                      class="color-name black"> <span>Black</span> </a> </div>
                                            <div class="add-product">
                                                <h6>Qty:</h6>
                                                <div class="button-group">
                                                    <div class="qtySelector text-center"> <span
                                                            class="decreaseQty"><i class="flaticon-minus"></i>
                                                            </span> <input type="number" class="qtyValue" value="1" />
                                                        <span class="increaseQty"> <i class="flaticon-plus"></i>
                                                            </span> </div> <button class="fashon--border "> Add to Cart
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="payment-method"> <a href="#0"> <img
                                                        src="{{ asset('assets/images/payment_method/method_1.png') }}" alt=""> </a>
                                                <a href="#0"> <img src="{{ asset('assets/images/payment_method/method_2.png') }}"
                                                                   alt=""> </a> <a href="#0"> <img
                                                        src="{{ asset('assets/images/payment_method/method_3.png') }}" alt=""> </a>
                                                <a href="#0"> <img src="{{ asset('assets/images/payment_method/method_4.png') }}"
                                                                   alt=""> </a> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="products-grid__content">
                            <div class="ratting"> <i class="rated flaticon-star-1"></i> <i
                                    class="rated flaticon-star-1"></i> <i class="rated flaticon-star-1"></i> <i
                                    class="rated flaticon-star-1"></i> <i class="flaticon-star-1"></i> </div>
                            <h5 class="product_name"><a href="shop-details-1.html"> Woman Blue Top Isolated </a>
                            </h5>
                            <div class="price d-flex align-content-center justify-content-center">
                                <p>$85</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 d-flex justify-content-center align-items-baseline">
                    <a href="#0" class="fashon--border  mt-60">load more</a>
                </div>
            </div>
        </div>
    </section>
    <!-- products-grid End -->

    <!--Start Blog Two-->
    <section class="blog pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header text-center wow fadeInUp animated">
                        <h2 class=" wow animated fadeInUp" data-wow-delay="0.2s">Lastest Story</h2>
                        <p class=" wow animated fadeInUp" data-wow-delay="0.3s"> Fish fruitful were together don't
                            bring replenish dominion so evening. </p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 wow fadeInUp animated ">
                    <div class="blog4-single mt-30">
                        <a href="blog-single.html" class="thumb">
                            <img src="{{ asset('assets/images/home-four/blog-1.png') }}" alt="" />
                        </a>
                        <div class="blog-content">
                            <p>by martin / 28 august, 2021</p>
                            <a href="blog-single.html" class="d-block">
                                <h4>Moveth apear he man creature</h4>
                            </a>
                            <ul class="meta">
                                <li> <span> <i class="flaticon-edit-1"></i> </span> <span> Life style </span> </li>
                                <li> <span> <i class="flaticon-comment"></i> </span> <span> 03 comment </span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp animated ">
                    <div class="blog4-single mt-30"> <a href="blog-single.html" class="thumb"> <img
                                src="{{ asset('assets/images/home-four/blog-2.png') }}" alt="" /> </a>
                        <div class="blog-content">
                            <p>by martin / 21 august, 2022</p> <a href="blog-single.html" class="d-block">
                                <h4> Herb firmament to above grass </h4>
                            </a>
                            <ul class="meta">
                                <li> <span> <i class="flaticon-edit-1"></i> </span> <span> Life style </span> </li>
                                <li> <span> <i class="flaticon-comment"></i> </span> <span> 07 comment </span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp animated ">
                    <div class="blog4-single mt-30"> <a href="blog-single.html" class="thumb"> <img
                                src="{{ asset('assets/images/home-four/blog-3.png') }}" alt="" /> </a>
                        <div class="blog-content">
                            <p>by martin / 18 august, 2022</p> <a href="blog-single.html" class="d-block">
                                <h4> Give a yielding give image was </h4>
                            </a>
                            <ul class="meta">
                                <li> <span> <i class="flaticon-edit-1"></i> </span> <span> Life style </span> </li>
                                <li> <span> <i class="flaticon-comment"></i> </span> <span> 09 comment </span> </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Blog Two-->

    <!-- newsLetter-one Start -->
    <section class="newsLetter-one four mt-60 pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-header text-center wow fadeInUp animated">
                        <h2 class=" wow animated fadeInUp" data-wow-delay="0.2s"> Subscribe & Get upto 20% off </h2>
                        <p class=" wow animated fadeInUp" data-wow-delay="0.3s"> Herb yielding after divided us
                            living winged evening shall morning </p>
                    </div>
                    <div class="newsLetter-one__content-box three mt-30 wow fadeInUp animated"
                         data-wow-delay="0.3s">
                        <form action="#0" class="form">
                            <div class="newsLetter-one__subscribe-box align-items-end"> <input type="email"
                                                                                               placeholder="Email address" class="mt-2" name="email"> <button type="submit"
                                                                                                                                                              class="fashon--primary mt-2"> Subscribe </button> </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- newsLetter-one End -->

    <!-- Partner Start -->
    <div class="partner-four pt-120 pb-120">
        <div class="container">
            <div class="row wow fadeInUp animated">
                <div class="partnerslider-four"> <a href="#0" class="partner-one__brand ">
                        <div class="img d-flex justify-content-center align-items-center"> <img
                                src="{{ asset('assets/images/home-four/partner1.png') }}" alt=""> </div>
                    </a> <a href="#0" class="partner-one__brand ">
                        <div class="img d-flex justify-content-center align-items-center"> <img
                                src="{{ asset('assets/images/home-four/partner2.png') }}" alt=""> </div>
                    </a> <a href="#0" class="partner-one__brand ">
                        <div class="img d-flex justify-content-center align-items-center"> <img
                                src="{{ asset('assets/images/home-four/partner3.png') }}" alt=""> </div>
                    </a> <a href="#0" class="partner-one__brand ">
                        <div class="img d-flex justify-content-center align-items-center"> <img
                                src="{{ asset('assets/images/home-four/partner4.png') }}" alt=""> </div>
                    </a> <a href="#0" class="partner-one__brand ">
                        <div class="img d-flex justify-content-center align-items-center"> <img
                                src="{{ asset('assets/images/home-four/partner1.png') }}" alt=""> </div>
                    </a> <a href="#0" class="partner-one__brand ">
                        <div class="img d-flex justify-content-center align-items-center"> <img
                                src="{{ asset('assets/images/home-four/partner2.png') }}" alt=""> </div>
                    </a> </div>
            </div>
        </div>
    </div>
    <!-- Partner End -->
@endsection
