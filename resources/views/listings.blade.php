@extends('includes.app')
@section('content')


    <div class="heroSec inrBnr">
        <img src="{{asset('assets/images/banner.jpg')}}" alt="" class="mainBanner">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content">
                            <h2>Listings</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="listingSec">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="secHeading">
                        Listings
                    </h2>
                </div>
                <div class="col-md-4">
                    <a href="{{url("listing-detail")}}" class="prodBox">
                        <figure>
                            <img src="{{asset('assets/images/car1.jpg')}}" alt="">
                        </figure>
                        <div class="content">
                            <h4>Car Name</h4>
                            <h5>Car Make</h5>
                            <span>$10.00/hr</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{url("listing-detail")}}" class="prodBox">
                        <figure>
                            <img src="{{asset('assets/images/car2.jpg')}}" alt="">
                        </figure>
                        <div class="content">
                            <h4>Car Name</h4>
                            <h5>Car Make</h5>
                            <span>$10.00/hr</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{url("listing-detail")}}" class="prodBox">
                        <figure>
                            <img src="{{asset('assets/images/car3.jpg')}}" alt="">
                        </figure>
                        <div class="content">
                            <h4>Car Name</h4>
                            <h5>Car Make</h5>
                            <span>$10.00/hr</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{url("listing-detail")}}" class="prodBox">
                        <figure>
                            <img src="{{asset('assets/images/car4.jpg')}}" alt="">
                        </figure>
                        <div class="content">
                            <h4>Car Name</h4>
                            <h5>Car Make</h5>
                            <span>$10.00/hr</span>
                        </div>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="{{url("listing-detail")}}" class="prodBox">
                        <figure>
                            <img src="{{asset('assets/images/car5.jpg')}}" alt="">
                        </figure>
                        <div class="content">
                            <h4>Car Name</h4>
                            <h5>Car Make</h5>
                            <span>$10.00/hr</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

@endsection