@extends('layouts.header')

@section('content')
<!-- End Bradcaump area -->
<section class="htc__checkout bg--white section-padding--lg">
    <!-- Checkout Section Start-->
    <div class="checkout-section">
        <div class="container">
            <div class="row">

                <div class="col-9" style="margin-left:12.5%">
                    <div class="order-details-wrapper">
                        <h2 style="text-align:center">Order - {{Auth::user()->name}}</h2>
                        <div class="order-details">
                            <form method="POST" action="{!!route('placeOrder')!!}" class="billing-form checkout-form">
                                @csrf
                                <div class="row container">
                                    <ul class="col-12">

                                        @foreach(Cart::content() as $cart)
                                        <li>
                                            <p style="text-align:center">{{$cart->name}} x {{$cart->qty}}</p>
                                            <p style="text-align:center">{{$cart->price * $cart->qty}} $</p>
                                        </li>
                                        @endforeach
                                        <li>
                                            <p style="text-align:center" class="strong">Total</p>
                                            <p style="text-align:center" class="strong">{{Cart::subtotal()}} $</p>
                                        </li>
                                        {{-- <li>
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
                                                    </li> --}}
                                    </ul>
                                    <div class="col-12 mb--20">
                                        <input type="text" placeholder="Receiver" name="name" required>
                                    </div>
                                    <div class="col-6 mb--20">
                                        <input type="email" placeholder="Email" name="email">
                                    </div>
                                    <div class="col-6 mb--20">
                                        <input type="text" placeholder="Phone" name="phone" required>
                                    </div>
                                    <div class="col-6 mb--20">
                                        <input type="text" placeholder="Payment" name="payment" value="COD" hidden>
                                    </div>
                                    <div class="col-12">
                                        <textarea placeholder="Message" type="text" name="message"></textarea>
                                    </div>

                                </div>
                                <button style="width:30%;margin-left:35%;margin-top:30px" type="submit"
                                    class="food__btn">place order</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- Checkout Section End-->
</section>
@endsection