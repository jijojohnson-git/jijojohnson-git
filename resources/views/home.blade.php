@extends('layouts.admin')

@section('content')
<!--Dashboard -->
<div class="col-12">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">You are Logged In!</li>
    </ol>
    <div class="row">
        <div class="col-xl-6 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-header">
                    <h5 class="card-title">Total Images Added</h5>
                </div>
                <div class="card-body text-center p-5">
                    {{-- <h3>{{$count}}</h3> --}}
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <!-- <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6">
            {{-- <div class="card bg-warning text-white mb-4">
                <div class="card-header">
                    <h5 class="card-title">Testimonials Added</h5>
                </div>
                <div class="card-body text-center p-5">
                    <h3></h3>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <!-- <a class="small text-white stretched-link" href="#">View Details</a>
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div> -->
                </div>
            </div> --}}
        </div>
    </div>
    <!--End Dashboard -->
    @endsection
