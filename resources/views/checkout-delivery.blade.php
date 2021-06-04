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
    <form method="POST" action="{{route('orders.store')}}">
        @csrf
<div class="container">
<div class="checkout-inner">
<!-- <div class="checkout-coupon mb-4 bg-red white">Have a coupon? <a href="#" class="showcoupon white">Click here to enter your code</a>
</div> -->
<div class="row">
<div class="col-lg-6 col-sm-12 col-xs-12">
<div class="checkout-inner">
<div class="checkout-info">
<h4 class="white">Delivery details</h4>
<div class="checkout-billing">
<div class="form-group">
<label class="white">First Name: <abbr class="required" title="required">*</abbr></label>
<input type="text" name="first" class="form-control">
</div>
<div class="form-group">
<label class="white">Last Name: <abbr class="required" title="required">*</abbr></label>
 <input type="text" name="last" class="form-control">
</div>
<!-- <div class="form-group">
<label class="white">City / Town <abbr class="required" title="required">*</abbr></label>
<select class="niceSelect">
<option>Argentina</option>
<option>Bulgaria</option>
<option>Canada</option>
<option>Denmark</option>
<option>Egypt</option>
<option>Germany</option>
<option>Hungary</option>
</select>
</div> -->

<div class="form-group">
<label class="white">Delivery Address: <abbr class="required" title="required">*</abbr></label>
<textarea name="address" class="form-control"></textarea>
</div>
{{-- <div class="form-group">
<label class="white">Postcode / ZIP (optional):</label>
<input type="text" name="postcode" class="form-control">
</div> --}}
<div class="form-group">
<label class="white">Phone No.: <abbr class="required" title="required">*</abbr></label>
<input type="text" name="phone" class="form-control">
</div>
<div class="form-group">
<label class="white">Email Address: <abbr class="required" title="required">*</abbr></label>
<input type="text" name="email" class="form-control" required>
</div>
{{-- </form> --}}
</div>
</div>
</div>
</div>
<div class="col-lg-6 col-sm-12 col-xs-12 mb-4">
<div class="checkout-order mb-4">
<h4 class="white">Order Details</h4>
<div class="order-list">
<table class="shop_table rt-checkout-review-order-table bg-white">
<tbody>
<tr>
<th class="product-name">Item(s):</th>

<td class="product-total">

    <ol>
        @foreach ($items as $item )
            <li>{{$item->name}}
            <i class="badge badge-info">
                {{$item->quantity}}
            </i>
            </li>
        @endforeach
    </ol>

</td>


</tr>
<tr>
    <th class="product-name">Our delivery area: </th>
    <td class="product-total">
        Paola
        </td>
    </tr>
    <tr>
        <th class="product-name">Delivery time:</th>
        <td class="product-total">30-40 Minutes </td>
        </tr>

        {{-- <tr>
            <th>Delivery Cost</th>
            <td><i class="fa fa-eur" aria-hidden="true"></i>1.00</td>
        </tr> --}}

</tbody>
<tfoot>
<tr class="order-total">
<th>Total: </th>
<td><strong><span class="rt-Price-amount"><i class="fa fa-eur" aria-hidden="true"></i>{{Cart::session($session_id)->getTotal()}}</strong> </td>
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
{{-- <p class="white"> --}}
    {{-- Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="#" class="red">privacy policy</a>. --}}
    {{-- Your personal data will be used to process your order. --}}
    {{-- </p> --}}
<div class="form-group">
    <h4 class="white">
         Payment Method:
        {{-- Billing details --}}
    </h4>
    {{-- <input type="radio" class="form-control" value="cash" name="payment" required>Cash
    <input type="radio" class="form-control" value="cash" name="payment" required>Card Swipe --}}

    <div class="form-check">
        <input class="form-check-input" type="radio" name="payment" id="cash" value="cash" required>
        <label class="form-check-label text-light" for="cash">
         Cash
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="payment" id="card" value="other" required>
        <label class="form-check-label text-light" for="card">
          Card Swipe
        </label>
      </div>
</div>
<input type="hidden" name="method" value="delivery">
<button type="submit" class="nir-btn mt-1">Place Order</button>
</div>
</div>
</div>
</form>
</section>

@endsection


