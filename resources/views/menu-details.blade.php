@extends('layouts.master')
@section('content')

<section class="breadcrumb-main" style="background-image: url('/images/bg/bg4.jpg');">
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
                <h4 class="mb-1 red">Menu Details </h4>
                <!-- <h1 class="white">Discover Interesting Places <br><span class="red">Bars & Cafés</span> Around You</h1>                -->
            </div>
        </div>
</section>

<section class="shop-main pb-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shop-detail">
                    <div class="row d-md-flex align-items-center">
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="thumbnail-images">
                                <div class="slider-store">
                                    <div>
                                        <img src="{{asset('images/menu/'.$item->image)}}" alt="1">
                                    </div>
                                    {{-- <div>
                                        <img src="{{asset('images/menu/'.$item->image)}}" alt="1">
                                    </div>
                                    <div>
                                        <img src="{{asset('images/menu/'.$item->image)}}" alt="1">
                                    </div> --}}
                                    {{-- <div>
                                        <img src="images/menu/menu-2.jpg" alt="1">
                                    </div>
                                    <div>
                                        <img src="images/menu/menu-3.jpg" alt="1">
                                    </div> --}}

                                </div>
                            <div class="slider-thumbs">
                                {{-- <div>
                                    <img src="/images/menu/{{$item->image}}" alt="1">
                                </div>
                                <div>
                                    <img src="/images/menu/{{$item->image}}" alt="1">
                                </div>
                                <div>
                                    <img src="/images/menu/{{$item->image}}" alt="1">
                                </div> --}}
                                {{-- <div>
                                    <img src="images/menu/menu-2.jpg" alt="1">
                                </div>
                                <div>
                                    <img src="images/menu/menu-3.jpg" alt="1">
                                </div> --}}
                                <!-- <div>
                                    <img src="images/menu/menu-4.jpg" alt="1">
                                </div>
                                <div>
                                    <img src="images/menu/menu-5.jpg" alt="1">
                                </div>
                                <div>
                                    <img src="images/menu/menu-4.jpg" alt="1">
                                </div> -->
                            </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 col-xs-12">
                            <div class="blog-content p-0">
                                <h2 class="mb-1"><a href="#" class="white">{{$item->name}}</a></h2>
                                {{-- <div class="rating-comment d-flex align-items-center mb-1">
                                    <div class="rating mr-2">
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                        <span class="fa fa-star checked"></span>
                                    </div>
                                    <span class="red">5 Reviews</span>
                                </div> --}}
                                <div class="listing-price mb-1">
                                    <i class="fa fa-eur" aria-hidden="true"></i>
                                    {{$item->price}}
                                    <span class="regular-price white">
                                    </span>
                                </div>
                                {{-- <p class="mb-2 white">Twisted Toppings is a savory dish of Italian origin, consisting of a usually round, Savory dish of Italian origin, consisting of a usually round <br><br> Lorem ipsum dolor sit amet, consectetur adipis Vi ales elit vitae lo bortis faucibus. Lorem ipsum dolor sit amet, conse dolor sit amet, consectetu ctetur adipis Viales. </p> --}}
                                <form class="cart mb-2 d-flex align-items-center justify-content-between pt-2 pb-2" action="https://cyclonethemes.com/demo/html/durbarinn/_self" method="post">
                                    <div class="quantity-buttons d-flex align-items-center">
                                        <label class="screen-reader-text mr-2 white"><strong>Quantity:</strong></label>
                                        <input type="number" class="quantity-input" name="quantity" min="1" max="100" placeholder="No." value="1">
                                    </div>
                                    {{-- <div class="product-stock">
                                        <p class="white mb-0"><strong>Availability :</strong> <span class="green">IN STOCK</span></p>
                                    </div> --}}
                                </form>
                                <div class="shop-btn"><a href="{{route('cart.add', $item->id)}}" class="nir-btn">Add To Cart</a></div>
                                <div class="shop-btn mt-2">
                                    {{-- <a href="https://wa.me/+35699000414" class="nir-btn"> <i class="fa fa-whatsapp" aria-hidden="true"></i> --}}
                                    <a id="whatsapp-btn" href="#" class="nir-btn"> <i class="fa fa-whatsapp" aria-hidden="true"></i>
                                    Order on Whatsapp</a>
                                    {{-- https://api.whatsapp.com/send?phone=35699000414&text=Hi%2C%20I'd%20like%20to%20order%20the%20*FRIED%20RICE%20WITH%20CHILLI%20CHICKEN*%3A%20%0A%20https%3A%2F%2Fpepperbites.kyte.site%2F1620992912934-1XEOz --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div id="store-tab-main" class="mt-4">
                    <ul class="nav nav-tabs">
                        <li class="active"><a href="#1" data-toggle="tab">Description</a></li>
                        <li><a href="#2" data-toggle="tab">Additional Information</a></li>
                        <li><a href="#3" data-toggle="tab">Solution</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="1">
                            <p>Lorem ipsum dolor sit amet. Proin gravida nibh vel velit auctor aliqueenean sollicitudin, lorem quis bibendum auct or, nisi elit consequat ipsum, nec sagittis sem nibh idi elit. vulputate cursus a sit amet mauri s. Morbi accumsan ipsum velit. Nam nec tellus a odioeThis is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliqueenean sollicitudin, lorem quis bibendum auct or, nisi elit consequat ipsum, nec sagittis sem nibh idi elit. vulputate cursus a sit amet mauri s. Morbi accumsan ipsum velit. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
                            <ul class="product-tab-list">
                                <li>Perfect unique design</li>
                                <li>Fully responsive</li>
                                <li>Amazing parallax effects</li>
                                <li>SEO friendly</li>
                                <li>Well organized and valid code</li>
                                <li>Google fonts</li>
                                <li>WPML ready</li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="2">
                            <p>Proin gravida nibh vel velit auctor aliqueenean sollicitudin, lorem quis bibendum auct or, nisi elit consequat ipsum, nec sagittis sem nibh idi elit. vulputate cursus a sit amet mauri s. Morbi accumsan ipsum velit. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum.</p>
                            <ul class="product-tab-list">
                                <li>Perfect unique design</li>
                                <li>Fully responsive</li>
                                <li>Amazing parallax effects</li>
                                <li>SEO friendly</li>
                                <li>Well organized and valid code</li>
                                <li>Google fonts</li>
                                <li>WPML ready</li>
                            </ul>
                        </div>
                        <div class="tab-pane" id="3">
                            <p>Proin gravida nibh vel velit auctor aliqueenean sollicitudin, lorem quis bibendum auct or, nisi elit consequat ipsum, nec sagittis sem nibh idi elit. vulputate cursus a sit amet mauri s. Morbi accumsan ipsum velit. Nam nec tellus a odioeThis is Photoshop’s version of Lorem Ipsum. Proin gravida nibh vel velit auctor aliqueenean sollicitudin.</p>
                            <ul class="product-tab-list">
                                <li>Perfect unique design</li>
                                <li>Fully responsive</li>
                                <li>Amazing parallax effects</li>
                                <li>SEO friendly</li>
                                <li>Well organized and valid code</li>
                                <li>Google fonts</li>
                                <li>WPML ready</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="dishes mt-4 p-0">
                    <h3 class="white">Related <span class="red">Products</span></h3>
                    <div class="row item-slider">
                        <div class="col-md-3 col-sm-6 col-xs-12 mb-4">
                            <div class="popular-item-wp text-center">
                                <img src="images/featured/ft-1.png" class="w-75 mx-auto" alt="">
                                <div class="pp-item-detail mt-3">
                                    <div class="upper-item-dt">
                                        <h3 class="mb-2 pb-2"><a href="#" class="red">Mixed Pizza</a></h3>
                                    </div>
                                    <div class="lower-item-dt">
                                        <p class="white">Pizza is a savory dish of Italian origin, consisting of a usually round</p>
                                        <p class="price-ft red mb-3">$2.10</p>
                                    </div>
                                    <div class="cart-btn">
                                        <a href="#" class="nir-btn"><i class="fas fa-cart-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 mb-4">
                            <div class="popular-item-wp text-center">
                                <img src="images/featured/ft-6.png" class="w-75 mx-auto" alt="">
                                <div class="pp-item-detail text-center mt-3">
                                    <div class="upper-item-dt">
                                        <h3 class="mb-2 pb-2"><a href="#" class="red">Shrimp Spaghetti</a></h3>
                                    </div>
                                    <div class="lower-item-dt">
                                        <p class="white">Pizza is a savory dish of Italian origin, consisting of a usually round</p>
                                        <p class="price-ft red mb-3">$2.10</p>
                                    </div>
                                    <div class="cart-btn">
                                        <a href="#" class="nir-btn"><i class="fas fa-cart-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 mb-4">
                            <div class="popular-item-wp text-center">
                                <img src="images/featured/ft-5.png" class="w-75 mx-auto" alt="">
                                <div class="pp-item-detail text-center mt-3">
                                    <div class="upper-item-dt">
                                        <h3 class="mb-2 pb-2"><a href="#" class="red">Pasta</a></h3>
                                    </div>
                                    <div class="lower-item-dt">
                                        <p class="white">Pizza is a savory dish of Italian origin, consisting of a usually round</p>
                                        <p class="price-ft red mb-3">$2.10</p>
                                    </div>
                                    <div class="cart-btn">
                                        <a href="#" class="nir-btn"><i class="fas fa-cart-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 mb-4">
                            <div class="popular-item-wp text-center">
                                <img src="images/featured/ft-4.png" class="w-75 mx-auto" alt="">
                                <div class="pp-item-detail text-center mt-3">
                                    <div class="upper-item-dt">
                                        <h3 class="mb-2 pb-2"><a href="#" class="red">Chicken Pizzeria</a></h3>
                                    </div>
                                    <div class="lower-item-dt">
                                        <p class="white">Pizza is a savory dish of Italian origin, consisting of a usually round</p>
                                        <p class="price-ft red mb-3">$2.10</p>
                                    </div>
                                    <div class="cart-btn">
                                        <a href="#" class="nir-btn"><i class="fas fa-cart-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
</section>


@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function() {

        // $('#whatsapp-btn').on('click', function(e) {
            // e.preventDefault();
            var item = "{{$item->name}}";
            var ref = "https://api.whatsapp.com/send?phone=917736194899&text=Hi%2C%20I'd%20like%20to%20order%20the%20*"+item+"*%3A%20%0A";
            // alert(item);
            $('#whatsapp-btn').attr('href', ref);
        // });
    });
</script>
@endsection
