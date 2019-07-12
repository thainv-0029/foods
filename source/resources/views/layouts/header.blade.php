<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Menu-List || Aahar Food Delivery Html5 Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="/template_ver2.0/images/favicon.ico">
    <link rel="apple-touch-icon" href="/template_ver2.0/images/icon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Stylesheets -->
    <link rel="stylesheet" href="/template_ver2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/template_ver2.0/css/plugins.css">
    <link rel="stylesheet" href="/template_ver2.0/style.css">

    <!-- Cusom css -->
    <link rel="stylesheet" href="/template_ver2.0/css/custom.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Modernizer js -->
    <script src="template_ver2.0/js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
    <!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

    <!-- Add your site or application content here -->

    <!-- <div class="fakeloader"></div> -->

    <!-- Main wrapper -->
    <div class="wrapper" id="wrapper">
        <!-- Start Header Area -->
        <header class="htc__header bg--white">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__wrap sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-sm-4 col-md-6 order-1 order-lg-1">
                            <div class="logo">
                                <a href="/">
                                    <img style="width:120px" src="/template_ver2.0/images/logo/foody.png"
                                        alt="logo images">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9 col-sm-4 col-md-2 order-3 order-lg-2">
                            <div class="main__menu__wrap">
                                <nav class="main__menu__nav d-none d-lg-block">
                                    <ul class="mainmenu">
                                        <li class="drop"><a href="/">Home</a>
                                            <ul class="dropdown__menu">
                                                <li><a href="#">Home Food Delivery</a></li>
                                                <li><a href="#">Home Pizza Delivery</a></li>
                                                <li><a href="#">Home Backery Delivery</a></li>
                                                <li><a href="#">Home Box Layout</a></li>
                                            </ul>
                                        </li>
                                        <li class="drop"><a href="#">Menu</a>
                                            <ul class="dropdown__menu">
                                                <li><a href="/home-grid">Menu Grid</a></li>
                                                <li><a href="/home">Menu List</a></li>
                                            </ul>
                                        </li>
                                        <li class="drop"><a href="blog-list.html">Blog</a>
                                            <ul class="dropdown__menu">
                                                <li><a href="#">Blog List</a></li>
                                                <li><a href="#">Blog mesonry</a></li>
                                                <li><a href="#">Blog Grid</a></li>
                                                <li><a href="#">Blog List with right sidebar</a></li>
                                                <li><a href="#">Blog Details</a></li>
                                            </ul>
                                        </li>
                                        <li class="drop"><a href="#">Pages</a>
                                            <ul class="dropdown__menu">
                                                <li><a href="#">Service</a></li>
                                                <li><a href="#">Cart Page</a></li>
                                                <li><a href="#">Checkout Page</a></li>
                                                <li><a href="#">Contact Page</a></li>
                                            </ul>
                                        </li>
                                        @if(Auth::user()->hasRole('admin'))
                                        <li><a href="{{route('admin')}}">Admin Page</a></li>
                                        @else
                                        <li class="drop"><a href="#">Account</a>
                                            <ul class="dropdown__menu">
                                                <li><a href="#">Profile</a></li>
                                                <li><a href="#">History</a></li>
                                            </ul>
                                        </li>
                                        @endif

                                    </ul>
                                </nav>

                            </div>
                        </div>

                        <div class="col-lg-1 col-sm-4 col-md-4 order-2 order-lg-3">
                            <div class="header__right d-flex justify-content-end">
                                <div class="log__in">
                                    @guest
                                    <a href="#"> Login </a>
                                    <a href="#"> Register </a>
                                    @else
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i
                                            class="zmdi zmdi-directions-run"></i>Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        style="display: none;">
                                        @csrf
                                    </form>
                                    @endguest
                                </div>
                                <div class="shopping__cart">
                                    <a class="minicart-trigger" href="#"><i class="zmdi zmdi-shopping-basket"></i></a>
                                    <div class="shop__qun">
                                        <span>{{Cart::count()}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="mobile-menu d-block d-lg-none"></div>
                    <!-- Mobile Menu -->
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Area -->
        
        @yield('content')
        <!-- Cartbox -->
        <div class="cartbox-wrap">
            <div class="cartbox text-right">
                <button class="cartbox-close"><i class="zmdi zmdi-close"></i></button>
                <div class="cartbox__inner text-left">

                    <div class="cartbox__items">


                        @foreach(Cart::content() as $item)
                        <!-- Cartbox Single Item -->
                        <div class="cartbox__item">
                            <div class="cartbox__item__thumb">
                                <a href="/product_detail/3">
                                    <img src="{{ asset('storage/img/upload/'.$item->options->img) }}"
                                        alt="/template_ver2.0/images/menu-list/{!!$item->options->img!!}">
                                </a>
                            </div>
                            <div class="cartbox__item__content">
                                <h5><a class="product-name">{!!$item->name!!}<span style="color:green"> ({!!$item->price!!}$) </span></a></h5>
                                <p><span>{!!$item->qty!!}</span></p>
                                <span class="price">{!!$item->qty * $item->price!!}$</span>
                            </div>
                            {{-- <button class="cartbox__item__remove">
                                <i class="fa fa-trash"></i>
                            </button> --}}
                        </div><!-- //Cartbox Single Item -->
                        @endforeach



                    </div>
                    <div class="cartbox__total">
                        <ul>
                            <li class="grandtotal">Total<span class="price">{!!Cart::subtotal()!!} $</span></li>
                        </ul>
                    </div>
                    <div class="cartbox__buttons">
                        {{-- <a class="food__btn" href="cart.html"><span>View cart</span></a> --}}
                        <a class="food__btn" href="/cart"><span>Checkout</span></a>
                    </div>
                </div>
            </div>
        </div><!-- //Cartbox -->
    </div><!-- //Main wrapper -->
    @extends('layouts.footer')
    <!-- JS Files -->
    <script src="template_ver2.0/js/vendor/jquery-3.2.1.min.js"></script>
    <script src="template_ver2.0/js/popper.min.js"></script>
    <script src="template_ver2.0/js/bootstrap.min.js"></script>
    <script src="template_ver2.0/js/plugins.js"></script>
    <script src="template_ver2.0/js/active.js"></script>
</body>

</html>