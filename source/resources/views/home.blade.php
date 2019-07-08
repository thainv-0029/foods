@extends('layouts.header')

@section('content')

<!-- start banner Area -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<section class="banner-area" id="home">
    <div class="container">
        <div class="row fullscreen d-flex align-items-center justify-content-start">
            <div class="banner-content col-lg-7">
                <h1>
                    Start your day with <br>
                    a black Coffee
                </h1>
                <a href="#" class="primary-btn text-uppercase">Buy Now</a>
            </div>
        </div>
    </div>
</section>
<!-- End banner Area -->

<!-- Start menu Area -->
<section class="menu-area section-gap" id="coffee">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">Best food of week</h1>
                </div>
            </div>
        </div>

        @if($products->count() != 0)
        <div class="row">
            @foreach ($products as $item)
            <div class="col-lg-4">
                <div class="single-menu">
                    <div class="title-div justify-content-between d-flex">
                        <h4>{{$item->name}}</h4>
                    </div>
                    <img class="card-img-top" src="/img/categories/{{$item->img}}" height="200px">
                    <p class="card-body" style="height: 60px">
                        {{$item->description}}
                    </p>
                    <div class="card-body">
                        <p class="price float-left">
                            ${{$item->price}}
                        </p>
                        <form method="POST" action="{{ route('add_cart') }}">
                            @csrf
                            <input type="text"" value="{{ Auth::user()->id }}" name="user_id" hidden>
                            <input type="text" value="{{$item->id}}" name="product_id" hidden>
                            <input type="text" value="1" name="quantity" hidden>
                            <button type="submit" class="btn btn-warning float-right">Buy now <span class="fa fa-shopping-cart"></span></button>
                        </form>
                        
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
            <h1 style="text-align:center" class="bg bg-warning">Not have product! Check again database!</h1>
        @endif
    </div>
</section>
<!-- End menu Area -->

<!-- Start gallery Area -->
<section class="gallery-area section-gap" id="gallery">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">What kind of Coffee we serve for you</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <a href="img/g1.jpg" class="img-pop-home">
                    <img class="img-fluid" src="img/g1.jpg" alt="">
                </a>
                <a href="img/g2.jpg" class="img-pop-home">
                    <img class="img-fluid" src="img/g2.jpg" alt="">
                </a>
            </div>
            <div class="col-lg-8">
                <a href="img/g3.jpg" class="img-pop-home">
                    <img class="img-fluid" src="img/g3.jpg" alt="">
                </a>
                <div class="row">
                    <div class="col-lg-6">
                        <a href="img/g4.jpg" class="img-pop-home">
                            <img class="img-fluid" src="img/g4.jpg" alt="">
                        </a>
                    </div>
                    <div class="col-lg-6">
                        <a href="img/g5.jpg" class="img-pop-home">
                            <img class="img-fluid" src="img/g5.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End gallery Area -->

<!-- Start review Area -->
<section class="review-area section-gap" id="review">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">What kind of Coffee we serve for you</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 single-review">
                <img src="img/r1.png" alt="">
                <div class="title d-flex flex-row">
                    <h4>lorem ipusm</h4>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
                <p>
                    Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
                    scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,
                    printer, scanner, speaker.
                </p>
            </div>
            <div class="col-lg-6 col-md-6 single-review">
                <img src="img/r2.png" alt="">
                <div class="title d-flex flex-row">
                    <h4>lorem ipusm</h4>
                    <div class="star">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                </div>
                <p>
                    Accessories Here you can find the best computer accessory for your laptop, monitor, printer,
                    scanner, speaker. Here you can find the best computer accessory for your laptop, monitor,
                    printer, scanner, speaker.
                </p>
            </div>
        </div>
        <div class="row counter-row">
            <div class="col-lg-3 col-md-6 single-counter">
                <h1 class="counter">2536</h1>
                <p>Happy Client</p>
            </div>
            <div class="col-lg-3 col-md-6 single-counter">
                <h1 class="counter">7562</h1>
                <p>Total Projects</p>
            </div>
            <div class="col-lg-3 col-md-6 single-counter">
                <h1 class="counter">2013</h1>
                <p>Cups Coffee</p>
            </div>
            <div class="col-lg-3 col-md-6 single-counter">
                <h1 class="counter">10536</h1>
                <p>Total Submitted</p>
            </div>
        </div>
    </div>
</section>
<!-- End review Area -->

<!-- Start blog Area -->
<section class="blog-area section-gap" id="blog">
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="menu-content pb-60 col-lg-10">
                <div class="title text-center">
                    <h1 class="mb-10">What kind of Coffee we serve for you</h1>
                    <p>Who are in extremely love with eco friendly system.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 single-blog">
                <img class="img-fluid" src="img/b1.jpg" alt="">
                <ul class="post-tags">
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Life Style</a></li>
                </ul>
                <a href="#">
                    <h4>Portable latest Fashion for young women</h4>
                </a>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore.
                </p>
                <p class="post-date">
                    31st January, 2018
                </p>
            </div>
            <div class="col-lg-6 col-md-6 single-blog">
                <img class="img-fluid" src="img/b2.jpg" alt="">
                <ul class="post-tags">
                    <li><a href="#">Travel</a></li>
                    <li><a href="#">Life Style</a></li>
                </ul>
                <a href="#">
                    <h4>Portable latest Fashion for young women</h4>
                </a>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore.
                </p>
                <p class="post-date">
                    31st January, 2018
                </p>
            </div>
        </div>
    </div>
</section>
<!-- End blog Area -->
<script src="js/vendor/jquery-2.2.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="js/vendor/bootstrap.min.js"></script>
<script type="text/javascript"
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="js/easing.min.js"></script>
<script src="js/hoverIntent.js"></script>
<script src="js/superfish.min.js"></script>
<script src="js/jquery.ajaxchimp.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/jquery.nice-select.min.js"></script>
<script src="js/parallax.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/mail-script.js"></script>
<script src="js/main.js"></script>
@endsection