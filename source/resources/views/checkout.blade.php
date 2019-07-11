@extends('layouts.header')

@section('content')
<!-- End Bradcaump area -->
<section class="htc__checkout bg--white section-padding--lg">
    <!-- Checkout Section Start-->
    <div class="checkout-section">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12 mb-30">
                    <div class="order-details-wrapper">
                        <h2>Information</h2>
                        <div class="order-details">
                            <form action="#" class="billing-form checkout-form">
                                <div class="row container">
                                    <div class="col-12 mb--20">
                                        <input type="text" placeholder="Receiver">
                                    </div>
                                    <div class="col-md-6 col-12 mb--20">
                                        <input type="email" placeholder="Email">
                                    </div>
                                    <div class="col-md-6 col-12 mb--20">
                                        <input type="text" placeholder="Phone">
                                    </div>
                                   
                                    <div class="col-12">
                                        <textarea placeholder="Message" type="text"></textarea>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Order Details -->
                <div class="col-lg-6 col-12 mb-30">

                    <div class="order-details-wrapper">
                        <h2>your order</h2>
                        <div class="order-details">
                            <form action="#">
                                <ul>
                                    <li>
                                        <p class="strong">product</p>
                                        <p class="strong">total</p>
                                    </li>
                                    <li>
                                        <p>Fishing Reel x1</p>
                                        <p>$104.99</p>
                                    </li>
                                    <li>
                                        <p>Fishing Rods x1 </p>
                                        <p>$85.99</p>
                                    </li>
                                    <li>
                                        <p class="strong">cart subtotal</p>
                                        <p class="strong">$190.98</p>
                                    </li>
                                    <li>
                                        <p class="strong">shipping</p>
                                        <p>
                                            <input type="radio" name="order-shipping" id="flat" /><label for="flat">Flat
                                                Rate $ 7.00</label><br />
                                            <input type="radio" name="order-shipping" id="free" /><label for="free">Free
                                                Shipping</label>
                                        </p>
                                    </li>
                                    <li>
                                        <p class="strong">order total</p>
                                        <p class="strong">$190.98</p>
                                    </li>
                                    <li><button class="food__btn">place order</button></li>
                                </ul>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div><!-- Checkout Section End-->
</section>
@endsection