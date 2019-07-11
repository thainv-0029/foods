@extends('layouts.header')

@section('content')
<!-- Start Blog List View Area -->
<section class="blog__list__view section-padding--lg menudetails-right-sidebar bg--white">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="food__menu__container">
                    <div class="food__menu__inner d-flex flex-wrap flex-md-nowrap flex-lg-nowrap">
                        <div class="food__menu__thumb">
                            <img src="{{ asset('storage/img/upload/'.$detail->img) }}" alt="storage/img/upload/{!!$detail->img!!}">
                        </div>
                        <div class="food__menu__details">
                            <div class="food__menu__content">
                                <h2>{!!$detail->name!!}</h2>
                                <ul class="food__dtl__prize d-flex">
                                    <li>{!!$detail->price!!} $ </li>
                                </ul>
                                <ul class="rating">
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                    <li><i class="fa fa-star"></i></li>
                                </ul>
                                <p>
                                    {!!$detail->description!!}
                                </p>
                                <div class="product-action-wrap">
                                    <div class="prodict-statas"><span>Food Type : {!!$detail->category_id!!}</span>
                                    </div>
                                    <div class="product-quantity">
                                        <form id='myform' method='POST' action='{{route('addcart')}}'>
                                            @csrf
                                            <div class="product-quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" type="number" name="qty"
                                                        value="1" min="1">
                                                    <input class="cart-plus-minus-box" type="text" name="img"
                                                        value="{!!$detail->img!!}" hidden>
                                                    <input class="cart-plus-minus-box" type="text" name="id"
                                                        value="{!!$detail->id!!}" hidden>
                                                    <input class="cart-plus-minus-box" type="text" name="name"
                                                        value="{!!$detail->name!!}" hidden>
                                                    <input class="cart-plus-minus-box" type="text" name="price"
                                                        value="{!!$detail->price!!}" hidden>
                                                    <div class="add__to__cart__btn">
                                                        <button class="food__btn" type="submit">Add</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Blog List View Area -->
@endsection