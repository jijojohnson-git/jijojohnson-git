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
        <h4 class="mb-1 red">Order Summary </h4>


        </div>
        </div>
        </section>


<section id="checkout-main" class="checkout-main pb-10" style="padding:1rem 0;">
    <div class="container">
    <div class="checkout-inner">
        <!-- <div class="checkout-coupon mb-4 bg-red white">Have a coupon? <a href="#" class="showcoupon white">Click here to enter your code</a>
        </div> -->
        <div class="row">

            <div class="col-lg-6 col-sm-12 col-xs-12 mb-4" style="margin: auto;">
                <div class="checkout-order mb-4">
                    <h4 class="green text-center">
                    Your Order has been Placed!</h4>
                    <p class=" text-light">Thank you for choosing Pepper Bites :)</p>
                    <p class=" text-light"> An email has been sent to {{$order_detail->email}} with your order details. </p>
                    <div class="order-list">
                        <h4 class="mb-1 red">Order Details </h4>
                        <table class="shop_table rt-checkout-review-order-table bg-white table-bordered">
                            <thead>
                                <tr>
                                    <th class="product-name">Order No: </th>
                                    <th class="product-total">{{$order_detail->order_no}}</th>
                                </tr>
                                <tr>
                                    <th class="product-name">Ordered at: </th>
                                    <th class="product-total">{{$order_detail->created_at}}</th>
                                </tr>
                                <tr>
                                    <th class="product-name">Name: </th>
                                    <th class="product-total">{{$order_detail->first_name.' '.$order_detail->last_name}}</th>
                                </tr>
                                <tr>
                                    <th class="product-name">Email </th>
                                    <th class="product-total">{{$order_detail->email}}</th>
                                </tr>
                                <tr>
                                    <th class="product-name">Phone </th>
                                    <th class="product-total">{{$order_detail->phone}}</th>
                                </tr>
                                <tr>
                                    <th class="product-name">Address </th>
                                    <th class="product-total">{{$order_detail->address}}</th>
                                </tr>
                                {{-- <tr>
                                    <th class="product-name">Email </th>
                                    <th class="product-total">Burger</th>
                                </tr> --}}
                                <tr>
                                    <th class="product-name">Items(s): </th>
                                    <th class="product-total">
                                        <ol>
                                        @foreach ( $order_detail->items as $item)
                                                <li>
                                                    {{$item->name}} <i class="badge badge-success">{{$item->pivot->quantity}}</i>
                                                </li>
                                                @endforeach
                                            </ol>
                                    </th>
                                </tr>
                                {{-- <tr>
                                    <th class="product-name">Product Price</th>
                                    <th class="product-total"><i class="fa fa-eur" aria-hidden="true"></i>{{$order_detail->grand_total}}</th>
                                </tr> --}}
                            </thead>
                            <tbody>
                                {{-- <tr>
                                    <th class="product-name">Quantity</th>
                                    <th class="product-total">1</th>
                                    </tr> --}}
                            </tbody>
                            <tfoot>

                            {{-- <tr>
                                <th>Delivery Cost</th>
                                <td><i class="fa fa-eur" aria-hidden="true"></i>1.00</td>
                            </tr> --}}

                            <tr class="order-total">
                                <th>Order total</th>
                                <td><strong><span class="rt-Price-amount"><i class="fa fa-eur" aria-hidden="true"></i>{{$order_detail->grand_total}}</strong> </td>
                            </tr>

                            @if ($order_detail->delivery_method == 'pickup')
                            <tr>
                                <th>Pickup Address:</th>
                                <td>206, TRIQ COSPICO</td>
                            </tr>
                            <tr>
                                <th>Pickup Time:</th>
                                <td>15-20 minutes </td>
                            </tr>
                            @else
                            <tr>
                                <th>Our Delivery Area:</th>
                                <td>Paola</td>
                            </tr>
                            <tr>
                                <th>Delivery Time:</th>
                                <td>30-40 Minutes </td>
                            </tr>
                            @endif
                            <tr>
                                <th>Payment Method:</th>
                                <td>
                                    @if ($order_detail->payment_method == 'cash')
                                        Cash on Delivery
                                        @else
                                        Card Swipe
                                    @endif
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="checkout-place-order">

                    <a href="{{url('/menu')}}" class="nir-btn mt-1" style="float:left; "><i class="fa fa-arrow-left" aria-hidden="true" style="padding-right: 3px;"></i>
                        Continue Shopping</a>

                    <a href="#" class="nir-btn mt-1" style="float:right; background-color: darkgreen;" >Download PDF</a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
