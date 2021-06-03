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
                    Payment Successful</h4>
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

                            <tr class="order-total">
                                <th>Order total</th>
                                <td><strong><span class="rt-Price-amount"><i class="fa fa-eur" aria-hidden="true"></i>10.00</strong> </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
                <div class="checkout-place-order">

                    <a href="#" class="nir-btn mt-1" style="float:left; "><i class="fa fa-arrow-left" aria-hidden="true" style="padding-right: 3px;"></i>
                        Continue Shopping</a>

                    <a href="#" class="nir-btn mt-1" style="float:right; background-color: darkgreen;" >Print</a>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection
