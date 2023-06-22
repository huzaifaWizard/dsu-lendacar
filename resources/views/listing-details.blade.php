@extends('includes.app')
@section('content')

    <div class="heroSec inrBnr">
        <img src="{{asset('assets/images/banner.jpg')}}" alt="" class="mainBanner">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content">
                            <h2>Listing Detail</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="listingDetailSec">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <figure class="prodImg">
                        <img src="{{asset('assets/images/car1.jpg')}}" alt="">
                    </figure>
                </div>
                <div class="col-md-7">
                    <div class="content">
                        <h2 class="secHeading">Car Details</h2>
                        <h3>
                            Car Model
                            <span>$10.00/hr</span>
                        </h3>
                        <h4>Car Make</h4>
                        <p>
                            <strong>Color: </strong> blue
                        </p>
                        <p>
                            <strong>Variant: </strong> blue
                        </p>
                        <p>
                            <strong>Color: </strong> blue
                        </p>
                        <p>
                            <strong>Availability: </strong> blue
                        </p>
                        <h2 class="secHeading">Person Details</h2>
                        <p>
                            <strong>Name: </strong> blue
                        </p>
                        <p>
                            <strong>Email: </strong> blue
                        </p>
                        <p>
                            <strong>Phone: </strong> blue
                        </p>
                        <p>
                            <strong>Address: </strong> blue
                        </p>
                        <div class="btnCont">
                            <a href="{{url('thanks')}}" class="themeBtn">
                                Book Now
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection