{{-- {{dd(Session::getId())}} --}}
{{-- {{dd(\Cart::session($session_id)->getContent())}} --}}
@extends('layouts.master')
@section('content')

<section class="breadcrumb-main" style="background-image: url(images/bg/bg4.jpg);">
    <div class="breadcrumb-outer pt-8">
    <div class="container">

    </div>
    </div>
    <div class="overlay"></div>
    </section>
    <section class="about-detail">
        <div class="container">
        <!-- <div class="about-image mb-4">
        <div class="row d-flex justify-content-between align-items-center">
        <div class="col-md-4 col-sm-4"><img src="images/featured/br-1.jpg" alt=""></div>
        <div class="col-md-4 col-sm-4"><img src="images/featured/we-1.jpg" alt=""></div>
        <div class="col-md-4 col-sm-4"><img src="images/featured/br-2.jpg" alt=""></div>
        </div>
        </div> -->
        <div class="about-detail-content w-75 mx-auto text-center">
        <h4 class="mb-1 red">Cart</h4>

        </div>
        </div>
        </section>

    <section id="cart-main" class="cart-main " style="padding:1rem 0;">
    <div class="container-fluid">
    <div class="row">
    <div class="col-lg-10 mx-auto">
    <div class="cart-inner">
    <div class="cart-table-list mb-4">
    <div class="order-list">
        <table class="shop_table rt-checkout-review-order-table bg-white">
            <thead>
                <tr>
                    <th>S.N</th>
                    <th class="product-name">Product Name</th>
                    <th class="product-name">Price</th>
                    <th class="product-price">Quantity</th>
                    <th class="product-quantity">Total</th>
                    <th class="product-total"></th>

                </tr>
            </thead>
            <tbody>


                @forelse ($items as $item)
                <tr>
                    <td><strong>01</strong></td>

                    <td class="cart_item">
                        <span class="product-name"><strong>{{$item->name}}</strong></span>
                    </td>
                    <td><span class="rt-Price-amount"><span>$</span>{{$item->price}}</span></td>
                    <td>
                        <form action="{{route('cart.update', $item->id)}}">
                            <span class="quantity-buttons">
                            <input type="number" class="quantity-input" name="quantity" min="1" max="50" value="{{$item->quantity}}">
                            <input type="submit" name="submit" value="save">
                        </form>

                    </span>
                    </td>
                    <td class="cart-subtotal">
                        <span class="rt-Price-amount"><span>$</span>{{Cart::session($session_id)->get($item->id)->getPriceSum()}}</span>
                    </td>
                    <td class="cart-subtotal">
                        <a href="{{route('cart.destroy', $item->id)}}" class="nir-btn mt-1" style="background-color: brown;">Remove</a>
                    </td>
                </tr>
                @empty
                        <tr><td colspan="6" class="text-center"> Your Cart is Empty!</td></tr>
                @endforelse

{{--
                <tr>
                    <td><strong>01</strong></td>

                    <td class="cart_item">
                        <span class="product-name"><strong>Flyer's Pizza</strong></span>
                    </td>
                    <td><span class="rt-Price-amount"><span>$</span>15.00</span></td>
                    <td>
                        <span class="quantity-buttons">
                        <input type="number" class="quantity-input" name="quantity" min="1" max="50" value="1">
                    </span>
                    </td>
                    <td class="cart-subtotal">
                        <span class="rt-Price-amount"><span>$</span>15.00</span>
                    </td>
                    <td class="cart-subtotal">
                        <a href="#" class="nir-btn mt-1" style="background-color: brown;">Remove</a>
                    </td>
                </tr>
                <tr>
                    <td><strong>02</strong></td>

                    <td class="cart_item">
                    <span class="product-name"><strong>Pizza Express</strong></span>
                    </td>
                    <td><span class="rt-Price-amount"><span>$</span>35.00</span></td>
                    <td>
                    <span class="quantity-buttons">
                    <input type="number" class="quantity-input" name="quantity" min="1" max="50" value="1">
                    </span>
                    </td>
                    <td class="cart-subtotal">
                    <span class="rt-Price-amount"><span>$</span>35.00</span>
                    </td>
                    <td class="cart-subtotal">
                        <a href="#" class="nir-btn mt-1" style="background-color: brown;">Remove</a>
                    </td>
                </tr>
                <tr>
                    <td><strong>03</strong></td>

                    <td class="cart_item">
                    <span class="product-name"><strong>Mercy Margarita</strong></span>
                    </td>
                    <td><span class="rt-Price-amount"><span>$</span>20.00</span></td>
                    <td>
                    <span class="quantity-buttons">
                    <input type="number" class="quantity-input" name="quantity" min="1" max="50" value="1">
                    </span>
                    </td>
                    <td class="cart-subtotal">
                    <span class="rt-Price-amount"><span>$</span>20.00</span>
                    </td>
                    <td class="cart-subtotal">
                        <a href="#" class="nir-btn mt-1" style="background-color: brown;">Remove</a>
                    </td>
                </tr> --}}
                <tr>

                </tr>
            </tbody>
        </table>
    </div>
    </div>
    <div class="checkout-order">
        <div class="row">
        <!-- <div class="col-lg-4 col-md-12 col-xs-12 mb-4">
            <div class="coupon">
                <h4 class="white">Coupon Code</h4>
                <label class="white">Enter your coupon code if you have one:</label>
                <input type="text" name="coupon_code" class="input-text mb-2" id="coupon_code" value="" placeholder="Coupon code">
                <a href="#" class="nir-btn-black mr-2">Apply Coupon</a>
                <a href="#" class="nir-btn">Update cart</a>
            </div>
        </div> -->

        <div class="col-lg-8 col-Md-12 col-xs-12 mb-4">
            <h4 class="white">Cart Totals</h4>
            <div class="order-list">
                <table class="shop_table rt-checkout-review-order-table bg-white">
                    <thead>
                        <tr>
                            <th class="product-name"></th>
                            <th class="product-total">Total</th>
                        </tr>
                    </thead>
                    <tfoot>
                        {{-- <tr class="cart-subtotal">
                            <th>Subtotal</th>
                            <td><span class="rt-Price-amount"><span>$</span>35.00</span>
                            </td>
                        </tr> --}}
                        <!-- <tr class="rt-shipping-totals shipping">
                        <th>Which do you prefer ?</th>
                        <td data-title="Shipping">

                            <input type="radio" class="mr-1" name="abc"><label class="mr-2 mb-0">Pickup (206, Triq Cospico)</label>
                            <input type="radio" class="mr-1" name="abc"><label class="mb-0">Delivery (Paola Time:30-40 Min)</label>
                        </td>
                        </tr> -->
                        <tr class="order-total">
                            <th>Total</th>
                            <td><strong><span class="rt-Price-amount"><span>$</span>{{Cart::session($session_id)->getTotal()}}</span></strong> </td>
                        </tr>
                    </tfoot>
                </table>
                <div class="checkout-place-order mt-2" style="text-align: center;">
                    {{-- <p class="white">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#">privacy policy</a>.
                    </p> --}}
                    <a href="{{url('/menu')}}" class="nir-btn mt-1" style="float:left; background-color: #676767;"><i class="fa fa-arrow-left" aria-hidden="true" style="padding-right: 3px;"></i>
                        Continue Shopping</a>
                        @if (!Cart::session($session_id)->isEmpty())
                        <a href="#" class="nir-btn mt-1" style="background-color: brown;" >Clear Cart</a>
                        <a href="#" class="nir-btn mt-1" style="float:right"  data-toggle="modal" data-target="#exampleModalCenter">Proceed to Checkout<i class="fa fa-arrow-right" aria-hidden="true" style="padding-left: 5px;"></i>
                        </a>
                    @endif
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




      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <form action="{{route('cart.checkout')}}" method="POST">
                @csrf
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Which do you prefer ?</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="background-color: transparent; color: #000;">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <input type="radio" value="pickup" name="method" class="mr-1" name="abc"><label class="mr-2 mb-0">Pickup (206, Triq Cospico)</label>
                <input type="radio" value="delivery" name="method" class="mr-1" name="abc"><label class="mb-0">Delivery (Paola Time:30-40 Min)</label>
            </div>
            <div class="modal-footer">

              <button type="submit" class=" nir-btn mt-1">Continue</button>
            </div>
            </form>
          </div>
        </div>
      </div>
@endsection
