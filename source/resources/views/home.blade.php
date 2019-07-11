@extends('layouts.header')

@section('content')

<!-- Start Bradcaump area -->
<div class="ht__bradcaump__area bg-image--18">
    <div class="ht__bradcaump__wrap d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Welcome</h2>
                        <nav class="bradcaump-inner">
                            {{-- <a class="breadcrumb-item" href="index.html">Hi</a>
                            <span class="brd-separetor"><i class="zmdi zmdi-long-arrow-right"></i></span> --}}
                            <span class="breadcrumb-item active">{{Auth::user()->name}}</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Bradcaump area -->
<!-- Start Menu Grid Area -->
<section class="food__menu__grid__area section-padding--lg">
    <div class="container">
        {{-- <div class="row">
            <div class="col-lg-12">
                <div class="food__nav nav nav-tabs" role="tablist">
                    <a class="active" id="nav-all-tab" data-toggle="tab" href="#nav-all" role="tab">All</a>
                    <a id="nav-breakfast-tab" data-toggle="tab" href="#nav-breakfast" role="tab">Breakfast</a>
                    <a id="nav-lunch-tab" data-toggle="tab" href="#nav-lunch" role="tab">Lunch</a>
                    <a id="nav-dinner-tab" data-toggle="tab" href="#nav-dinner" role="tab">Dinner</a>
                    <a id="nav-coffee-tab" data-toggle="tab" href="#nav-coffee" role="tab">Coffee</a>
                    <a id="nav-snacks-tab" data-toggle="tab" href="#nav-snacks" role="tab">Snacks</a>
                </div>
            </div>
        </div> --}}
        <div class="row mt--30">
            <div class="col-lg-12">
                <div class="fd__tab__content tab-content" id="nav-tabContent">
                    <!-- Start Single Content -->
                    <div class="food__list__tab__content tab-pane fade show active" id="nav-all" role="tabpanel">
                        <!-- Start Single Food -->
                        @foreach($products as $product)
                        <div class="single__food__list d-flex wow fadeInUp">
                            <div class="food__list__thumb">
                                <a href="menu-details.html">
                                    <img src="/template_ver2.0/images/menu-list/{{$product->img}}"
                                        alt="list food images">
                                </a>
                            </div>
                            <div class="food__list__inner d-flex align-items-center justify-content-between">
                                <div class="food__list__details">
                                    <h2><a href="menu-details.html">{{$product->name}}</a></h2>
                                    <p>{{$product->description}}</p>
                                    <div class="list__btn">
                                        <a class="food__btn grey--btn theme--hover"
                                            href="/product_detail/{{$product->id}}">Order Now</a>
                                    </div>
                                </div>
                                <div class="food__rating">
                                    <div class="list__food__prize">
                                        <span>{{$product->price}}</span>
                                    </div>
                                    <ul class="rating">
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li><i class="zmdi zmdi-star"></i></li>
                                        <li class="rating__opasity"><i class="zmdi zmdi-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Food -->
                        @endforeach
                    </div>
                    <!-- End Single Content -->
                </div>
            </div>
        </div>
        {{-- <div class="row">
            <div class="col-lg-12">
                <ul class="food__pagination d-flex justify-content-center align-items-center mt--130">
                    <li><a href="#"><i class="zmdi zmdi-chevron-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li class="active"><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">...</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
                </ul>
            </div>
        </div> --}}
    </div>
</section>
<!-- End Menu Grid Area -->

<!-- Login Form -->
<div class="accountbox-wrapper">
    <div class="accountbox text-left">
        <ul class="nav accountbox__filters" id="myTab" role="tablist">
            <li>
                <a class="active" id="log-tab" data-toggle="tab" href="#log" role="tab" aria-controls="log"
                    aria-selected="true">Login</a>
            </li>
            <li>
                <a id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
                    aria-selected="false">Register</a>
            </li>
        </ul>
        <div class="accountbox__inner tab-content" id="myTabContent">
            <div class="accountbox__login tab-pane fade show active" id="log" role="tabpanel" aria-labelledby="log-tab">
                <form action="#">
                    <div class="single-input">
                        <input class="cr-round--lg" type="text" placeholder="User name or email">
                    </div>
                    <div class="single-input">
                        <input class="cr-round--lg" type="password" placeholder="Password">
                    </div>
                    <div class="single-input">
                        <button type="submit" class="food__btn"><span>Go</span></button>
                    </div>
                    <div class="accountbox-login__others">
                        <h6>Or login with</h6>
                        <div class="social-icons">
                            <ul>
                                <li class="facebook"><a href="https://www.facebook.com/"><i
                                            class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                                </li>
                                <li class="pinterest"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <div class="accountbox__register tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <form action="#">
                    <div class="single-input">
                        <input class="cr-round--lg" type="text" placeholder="User name">
                    </div>
                    <div class="single-input">
                        <input class="cr-round--lg" type="email" placeholder="Email address">
                    </div>
                    <div class="single-input">
                        <input class="cr-round--lg" type="password" placeholder="Password">
                    </div>
                    <div class="single-input">
                        <input class="cr-round--lg" type="password" placeholder="Confirm password">
                    </div>
                    <div class="single-input">
                        <button type="submit" class="food__btn"><span>Sign Up</span></button>
                    </div>
                </form>
            </div>
            <span class="accountbox-close-button"><i class="zmdi zmdi-close"></i></span>
        </div>
    </div>
</div><!-- //Login Form -->
<!-- Cartbox -->
<div class="cartbox-wrap">
    <div class="cartbox text-right">
        <button class="cartbox-close"><i class="zmdi zmdi-close"></i></button>
        <div class="cartbox__inner text-left">

            <div class="cartbox__items">

                @foreach($carts as $cart)
                <!-- Cartbox Single Item -->
                <div class="cartbox__item">
                    <div class="cartbox__item__thumb">
                        <a href="/product_detail/{{$cart->product_id}}">
                            <img src="/template_ver2.0/images/menu-list/{{$cart->img}}" alt="small thumbnail">
                        </a>
                    </div>
                    <div class="cartbox__item__content">
                        <h5><a href="product-details.html" class="product-name">{{$cart->product_name}}</a></h5>
                        <p><span>{{$cart->quantity}}</span>x<span>{{$cart->price}}</span></p>
                        <span class="price">{{$cart->sum}}</span>
                    </div>
                    <button class="cartbox__item__remove">
                        <i class="fa fa-trash"></i>
                    </button>
                </div><!-- //Cartbox Single Item -->
                @endforeach

            </div>
            <div class="cartbox__total">
                <ul>
                    <li><span class="cartbox__total__title">Subtotal</span><span class="price">$70</span></li>
                    <li class="shipping-charge"><span class="cartbox__total__title">Shipping Charge</span><span
                            class="price">$05</span></li>
                    <li class="grandtotal">Total<span class="price">$75</span></li>
                </ul>
            </div>
            <div class="cartbox__buttons">
                <a class="food__btn" href="cart.html"><span>View cart</span></a>
                <a class="food__btn" href="checkout.html"><span>Checkout</span></a>
            </div>
        </div>
    </div>
</div><!-- //Cartbox -->

@endsection