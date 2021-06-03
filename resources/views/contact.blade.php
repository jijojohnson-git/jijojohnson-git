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
    <h4 class="mb-1 red">Contact Us </h4>
    <h1 class="white">Discover Interesting Places <br><span class="red">Bars & Cafés</span> Around You</h1>

    </div>
    </div>
    </section>

<section class="contact-main">
<div class="container">
<div class="contact-info">
<div class="row d-flex align-items-center">
<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
<div class="info-item mb-4 bg-white text-center">
<div class="info-icon">
<i class="fa fa-map-marker-alt"></i>
</div>
<div class="info-content mt-2">
<p class="m-0">54 Hegmann Uninuo Apt. 890, New York, NY 10018, United States.</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
<div class="info-item mb-4 bg-white text-center">
<div class="info-icon">
<i class="fa fa-phone"></i>
</div>
<div class="info-content mt-2">
<p class="m-0">977-444-666-888</p>
<p class="m-0">977-444-222-000</p>
</div>
</div>
</div>
<div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
<div class="info-item mb-4 bg-white text-center">
<div class="info-icon">
<i class="fa fa-envelope"></i>
</div>
<div class="info-content mt-2">
<p class="m-0">+(06) – 543 213 4567</p>
<p class="m-0"><a href="https://cyclonethemes.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="8fe7eae3ffcfcbfafdedeefde6e1e1a1ece0e2">[email&#160;protected]</a></p>
</div>
</div>
</div>
</div>
</div>
<div class="contact-map">
<div class="row d-flex align-items-center">
<div class="col-lg-5 col-md-6 col-sm-12">
<div class="map-main">
<h4 class="red">CONTACT US</h4>
<h2 class="white">How Can We Help You?</h2>
<p class="white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod temporeum dicant partem scripserit, doctus appetere interpretaris.</p>
<div class="social-links mt-2">
<ul>
<li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
<li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
</ul>
</div>
</div>
</div>
<div class="col-lg-7 col-md-6 col-sm-12">
<div id="contact-form1" class="contact-form p-0 transparent">
<h3 class="white">Keep in Touch</h3>
<div id="contactform-error-msg"></div>
<form method="post" action="#" name="contactform" id="contactform">
<div class="row">
<div class="col-md-6">
<div class="form-group">
<input type="text" name="first_name" class="form-control" id="fname" placeholder="First Name">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="text" name="last_name" class="form-control" id="lname" placeholder="Last Name">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="email" name="email" class="form-control" id="email" placeholder="Email">
</div>
</div>
<div class="col-md-6">
<div class="form-group">
<input type="text" name="phone" class="form-control" id="phnumber" placeholder="Phone">
</div>
</div>
<div class="col-lg-12">
<div class="textarea">
<textarea name="comments" placeholder="Enter a message"></textarea>
</div>
</div>
<div class="col-lg-12">
<div class="comment-btn mt-2">
<input type="submit" class="nir-btn" id="submit" value="Send Message">
</div>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
</div>
</section>


@endsection
