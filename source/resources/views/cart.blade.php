@extends('layouts.header')

@section('content')
<!-- cart-main-area start -->
<div class="cart-main-area section-padding--lg bg--white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 ol-lg-12">
                <form action="#">
                    <div class="table-content table-responsive">
                        <table>
                            <thead>
                                <tr class="title-top">
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
                                    <th class="product-subtotal">Total</th>
                                    <th class="product-remove">Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(Cart::count() == 0)
                                <tr>
                                    <td class="product-remove" colspan="6">
                                        <h3>
                                            There are no products in your shopping cart
                                        </h3>
                                    </td>
                                </tr>
                                @else
                                @foreach($carts as $item)
                                <tr>
                                    <td class="product-thumbnail"><a href="#"><img
                                                src="/template_ver2.0/images/menu-list/{!!$item->options->img!!}"
                                                alt="product img" /></a></td>
                                    <td class="product-name"><a href="#">{!!$item->name!!}</a></td>
                                    <td class="product-price"><span class="amount">{!!$item->price!!} $</span></td>
                                    <td class="product-quantity"><input type="number" value="{!!$item->qty!!}"
                                            min="1" /></td>
                                    <td class="product-subtotal">{!!$item->price * $item->qty!!} $</td>
                                    <td class="product-remove"><a href="#"><i class="fa fa-trash"></i></a></td>
                                </tr>
                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </form>
                @if(Cart::count() != 0)
                <div class="cartbox__btn">
                    <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                        <li><a style="background-color:gray;color:white" href="{{route('destroyCart')}}">Delete Cart</a>
                        </li>
                        <li><a style="background-color:green;color:white" href="#">Update</a></li>
                    </ul>
                </div>
                @else
                <br>
                <a class="btn btn-success" style="width:10%;margin-left:45%" href="/">Buy now !</a>
                @endif
            </div>
        </div>
        @if(Cart::count() != 0)
        <div class="row">
            <div class="col-lg-6 offset-lg-6">
                <div class="cartbox__total__area">
                    <div class="cart__total__amount">
                        <span>Order</span>
                        <span>{{Cart::subtotal()}}</span>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
<!-- cart-main-area end -->
@endsection