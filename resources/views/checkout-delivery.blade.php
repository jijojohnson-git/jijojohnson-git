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
        <h4 class="mb-1 red">Checkout </h4>


        </div>
        </div>
        </section>


<section id="checkout-main" class="checkout-main pb-10" style="padding:1rem 0;">
<div class="container">
<div class="checkout-inner">
<!-- <div class="checkout-coupon mb-4 bg-red white">Have a coupon? <a href="#" class="showcoupon white">Click here to enter your code</a>
</div> -->
<div class="row">

<div class="col-lg-6 col-sm-12 col-xs-12 mb-4">
<div class="checkout-order mb-4">
<h4 class="white">Order Details</h4>
<div class="order-list">
<table class="shop_table rt-checkout-review-order-table bg-white">
<thead>
<tr>
<th class="product-name">Product</th>
<th class="product-total">Burger</th>
</tr>
<tr>
    <th class="product-name">Product Price</th>
    <th class="product-total"><i class="fa fa-eur" aria-hidden="true"></i>9.00</th>
    </tr>
</thead>
<tbody>
    <tr>
        <th class="product-name">Quantity</th>
        <th class="product-total">1</th>
        </tr>
</tbody>
<tfoot>

<tr>
<th>Delivery Cost</th>
<td><i class="fa fa-eur" aria-hidden="true"></i>1.00</td>
</tr>
<tr>
    <th>payment Method</th>
    <td>Cash on Delivery or Card on Delivery</td>
    </tr>

<tr class="order-total">
<th>Order total</th>
<td><strong><span class="rt-Price-amount"><i class="fa fa-eur" aria-hidden="true"></i>10.00</strong> </td>
</tr>
</tfoot>
</table>
</div>
</div>
<!-- <div class="checkout-order">
<h4 class="white">PAYMENT METHODS</h4>
    <div class="order-list">
    <p class="white">Lorem Ipsum is simply dummy text of the printing and typesetting industry lorem.</p>
  <ul class="payment-card mb-2">
        <li><a href="#"><i class="fab fa-cc-paypal white"></i></a></li>
        <li><a href="#"><i class="fab fa-cc-stripe white"></i></a></li>
        <li><a href="#"><i class="fab fa-cc-visa white"></i></a></li>
        <li><a href="#"><i class="fab fa-cc-mastercard white"></i></a></li>
        <li><a href="#"><i class="fab fa-cc-amex white"></i></a></li>
    </ul>
        <div class="card-info">
        <form action="#">
        <div class="input-group d-flex align-items-center justify-content-between mb-2">
        <label class="white">Card Number :</label>
        <input type="text" class="w-75">
        </div>
        <div class="input-group d-flex align-items-center justify-content-between mb-2">
        <label class="white">cvv :</label>
        <input type="text" class="w-75">
        </div>
        <div class="month-year">
        <div class="input-group d-flex align-items-center justify-content-between mb-2">
        <label class="white">Month :</label>
        <input type="text" class="w-75">
        </div>
        <div class="input-group d-flex align-items-center justify-content-between mb-2">
        <label class="white">Year :</label>
        <input type="text" class="w-75">
        </div>
        </div>
        </form>
        </div>
</div>
</div> -->
</div>
<div class="checkout-place-order">
<p class="white">Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#" class="red">privacy policy</a>.
</p>
<a href="#" class="nir-btn mt-1">Place Order</a>
</div>
</div>
</div>
</section>

@endsection

