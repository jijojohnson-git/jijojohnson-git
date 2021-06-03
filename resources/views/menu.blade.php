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
    <h4 class="mb-1 red">Menu</h4>
    <!-- <h1 class="white">Discover Interesting Places <br><span class="red">Bars & Cafés</span> Around You</h1> -->

    </div>
    </div>
    </section>

    <div class="content-block menu">
        <div class="section-full content-inner-1 dishes">
            <div class="container">
                <div class="section-head text-center">
                </div>
                <div class="row">
                    <div class="col-lg-3 ">
                        <form>
                            <div class="search">
                                <input type="text" placeholder="🔍 Search" data-search />
                            </div>

                            <div id="suggestions" class="hidden">
                            </div>
                          </form>
                        <div class="site-filters filter-style1 clearfix m-b20">
                            <h3 class="red">Categories</h3>
                            <ul class="filters" data-toggle="buttons">
                                <li data-filter="" class="btn active"><input type="radio"><a href="#"><span>All</span></a></li>


@foreach ($categories as $category)
<li data-filter="{{$category->name}}" class="btn"><input type="radio"><a href="#"><span>{{$category->name}}</span></a></li>

@endforeach


                                {{-- <li data-filter="Salads" class="btn"><input type="radio"><a href="#"><span>C Salads</span></a></li>
                                <li data-filter="Specials" class="btn"><input type="radio"><a href="#"><span>A Specials</span></a></li>
                                <li data-filter="Starters" class="btn"><input type="radio"><a href="#"><span>B Starters</span></a></li>
                                <li data-filter="combo" class="btn"><input type="radio"><a href="#"><span>Combo</span></a></li>
                                <li data-filter="Dosa" class="btn"><input type="radio"><a href="#"><span>Dosa Express</span></a></li>
                                <li data-filter="Curries" class="btn"><input type="radio"><a href="#"><span>E Curries</span></a></li>
                                <li data-filter="Rice" class="btn"><input type="radio"><a href="#"><span>F Rice & Breads</span></a></li>
                                <li data-filter="Biriyani" class="btn"><input type="radio"><a href="#"><span>G Biriyani</span></a></li>
                                <li data-filter="Pizza" class="btn"><input type="radio"><a href="#"><span>H Pizza</span></a></li>
                                <li data-filter="Sides" class="btn"><input type="radio"><a href="#"><span>I Sides</span></a></li> --}}
                            </ul>
                            <h3 class="red">Sort By</h3>
                            <ul class="filters" data-toggle="buttons">

                                <li data-filter="" class="btn"><input type="radio"><a href="#"><span>Categories</span></a></li>
                                <li data-filter="Lowest Price" class="btn"><input type="radio"><a href="#"><span>Lowest Price</span></a></li>
                                <li data-filter="Highest Price" class="btn"><input type="radio"><a href="#"><span>Highest Price</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-9 text-center">
                        <ul id="masonry" class="dlab-gallery-listing gallery mfp-gallery text-center portfolio-bx p-l0 search-fil row">



                            @foreach ($items as $item )
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 {{$item->category->name}} wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s" data-filter-item data-filter-name="{{strtolower($item->name)}}">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/menu/{{$item->image}}" class="w-100 mx-auto rounded-circle" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">{{$item->name}}</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">{{$item->category->name}}</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>{{$item->price}}</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="{{route('menu.show', $item->id)}}" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @endforeach





                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 combo wow fadeIn" data-wow-duration="2s" data-wow-delay="0.2s" data-filter-item data-filter-name="fried rice with chilli chicken">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-1.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">FRIED RICE WITH CHILLI CHICKEN</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Combo</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>7.50</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>




                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 combo wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s" data-filter-item data-filter-name="fried rice with gobi manjurian">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-1.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">FRIED RICE WITH GOBI MANJURIAN</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Combo</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>7.50</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 combo wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s" data-filter-item data-filter-name="porotta with chicken curry">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-2.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">POROTTA WITH CHICKEN CURRY</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Combo</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>5.50</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Specials wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s" data-filter-item data-filter-name="beef curry">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-3.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">BEEF FRY</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">A SPECIALS</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>8.50</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Specials wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s" data-filter-item data-filter-name="beef kondattum">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-4.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">BEEF KONDATTUM</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">A SPECIALS</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>9.20</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Specials wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s" data-filter-item data-filter-name="beef perlan">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-5.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">BEEF PERLAN</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">A SPECIALS</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>8.50</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Specials wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s" data-filter-item data-filter-name="beef roast">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-6.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">BEEF ROAST</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">A SPECIALS</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>9.50</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Specials wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s" data-filter-item data-filter-name="chicken kondattum">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-7.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">CHICKEN KONDATTUM</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">A SPECIALS</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>7.80</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Specials wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s" data-filter-item data-filter-name="dragon chicken">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-8.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">DRAGON CHICKEN</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">A SPECIALS</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>6.80</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Specials wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s" data-filter-item data-filter-name="kottu porotta beef">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-9.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">KOTTU POROTTA BEEF</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">A SPECIALS</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>8.50</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Specials wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s" data-filter-item data-filter-name="kottu porotta chicken">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-10.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">KOTTU POROTTA CHICKEN</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">A SPECIALS</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>7.50</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Starters wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s" data-filter-item data-filter-name="egg bajji ">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-11.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">EGG BAJJI 4 pcs</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">B Starters</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>4.25</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Starters wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s" data-filter-item data-filter-name="onion bajji">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-12.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">ONION BAJJI 4 pcs</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">B Starters</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>3.80</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Biriyani wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s" data-wow-delay="0.4s" data-filter-item data-filter-name="beef biriyani">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-13.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">BEEF BIRIYANI</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Biriyani</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>9.80</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Biriyani wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s" data-filter-item data-filter-name="chicken biriyani">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-14.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">CHICKEN BIRIYANI</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Biriyani</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>8.50</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Biriyani wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s" data-filter-item data-filter-name="lamb biriyani">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-15.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">LAMB BIRIYANI</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Biriyani</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>10.50</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Biriyani wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-16.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">PRAWNS BIRIYANI</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Biriyani</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>13.23</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Biriyani wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-17.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">VEGETABLE BIRIYANI</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Biriyani</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>7.50</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Curries wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-18.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">BEEF VINDALOO</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Curries</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>10.50</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Curries wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-19.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">CHANNA MASALA</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Curries</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>9.20</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Curries wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-20.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">CHICKEN KORMA</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Curries</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>10.20</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Curries wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-21.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">CHICKEN TIKKA MASALA</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Curries</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>9.80</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Curries wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-22.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">DAAL MAKHANI</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Curries</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>8.00</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Curries wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-23.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">LAMB KORMA</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Curries</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>10.80</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Curries wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-24.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">PALAK PANEER</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Curries</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>10.50</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Curries wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-25.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">PANEER BUTTER MASALA</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Curries</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>11.20</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Curries wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-26.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">PRAWNS MASALA</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Curries</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>12.80</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Curries wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-27.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">VEGETABLE KORMA</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Curries</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>8.70</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Dosa wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-28.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">BEEF MASALA DOSA</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Dosa Express</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>7.20</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Dosa wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-29.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">CHEESE DOSA</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Dosa Express</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>5.50</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Dosa wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-30.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">MASALA DOSA</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Dosa Express</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>5.80</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Dosa wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-31.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">MYSORE MASALA DOSA</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Dosa Express</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>6.10</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Dosa wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-32.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">PLAIN DOSA 2Pcs</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Dosa Express</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>4.50</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Dosa wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-33.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">STUFFED CHICKEN DOSA</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Dosa Express</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>6.80</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Curries wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-34.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">MALAI KOFTA</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Curries</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>9.80</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Rice wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-35.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">CISK</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Rice & Breads</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>2.60</p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Rice wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-36.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">GRAVY</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Rice & Breads</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>1.50 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Pizza wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-37.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">SHAWARMA CHICKEN PIZZA</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Pizza</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>8.80 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Pizza wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-38.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">AL MALLU</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Pizza</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>9.80 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Pizza wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-39.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">VEGETABLE PIZZA</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Pizza</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>7.80 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Sides wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-40.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">FISH & CHIPS</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Sides</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>6.50 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Sides wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-41.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">MASALA FRIES</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Sides</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>2.10 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Sides wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-42.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">SPICY CHUTNEY</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Sides</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>1.20 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Pizza wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-43.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">AL TONNO</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Pizza</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>8.00 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Pizza wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-44.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">BBQ CHICKEN</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Pizza</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>8.00 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Pizza wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-45.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">CHEESE BURST PIZZA</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Pizza</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>8.70 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Pizza wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-46.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">FUNGI</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Pizza</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>7.00 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Pizza wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-47.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">MARGHERITA</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Pizza</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>6.00 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Pizza wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-48.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">MEAT LOVER</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Pizza</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>9.00 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Pizza wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-49.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">PANEER MAKHANI PIZZA</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Pizza</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>10.80 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Pizza wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-50.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">TIKKA MASALA PIZZA</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Pizza</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>10.00 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Rice wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-50.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">CHAPATI 2 Pcs</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Rice & Breads</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>2.10 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Rice wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-51.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">CHAPATI 2 Pcs</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Rice & Breads</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>2.10 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Rice wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-52.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">JEERA RICE</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Rice & Breads</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>3.25 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Rice wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-53.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">KASHMIRI PILAU</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Rice & Breads</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>4.10 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Rice wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-54.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">KERALA POROTTA</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Rice & Breads</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>2.50 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Rice wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-55.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">LEMON RICE</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Rice & Breads</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>3.70 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Rice wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-56.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">PILAU RICE</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Rice & Breads</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>3.25 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Rice wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-57.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">STEAMED RICE</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Rice & Breads</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>2.50 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Rice wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-58.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">TATTU DOSA</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Rice & Breads</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>2.50 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Salads wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-59.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">CEASER SALAD</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Salads</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>5.50 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Salads wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-60.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">TUNA SALAD</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Salads</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>6.50 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Sides wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-61.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">FRIES</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Sides</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>1.50 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Sides wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-62.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">MOZZARELLA STICKS</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Sides</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>4.25 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Starters wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-63.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">CHICKEN 65</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Starters</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>4.70 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Starters wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-64.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">CHICKEN LOLLYPOPS</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Starters</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>4.80 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Starters wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-65.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">CUTLET BEEF</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Starters</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>3.50 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Starters wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-66.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">CUTLET CHICKEN</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Starters</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>3.30 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Starters wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-67.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">SAMOSAS VEG</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Starters</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>3.40 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Starters wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-68.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">VEG PAKORAS</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Starters</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>4.80 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Starters wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-69.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">CLASSIC BURGER</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Starters</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>6.00 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Starters wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-70.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">CHRISPY CHICKEN BURGER</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Starters</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>6.80 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="card-container col-lg-3 col-md-4 col-sm-6 p-lr0 Starters wow fadeIn" data-wow-duration="2s" data-wow-delay="0.4s">
                                <div class="popular-item-wp text-center mb-2">
                                    <img src="images/featured/ft-71.png" class="w-100 mx-auto" alt="">
                                    <div class="pp-item-detail mt-3">
                                        <div class="upper-item-dt">
                                            <h5 class=""><a href="#" class="red">KABAB BURGER</a></h5>
                                        </div>
                                        <div class="lower-item-dt">
                                            <p class="white">Starters</p>
                                            <p class="price-ft red"><i class="fa fa-eur" aria-hidden="true"></i>7.00 </p>
                                        </div>
                                        <div class="cart-btn">
                                            <a href="menu-detail.html" class="nir-btn">View</a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>


        </div>
        <!-- blog grid END -->
    </div>




@endsection
