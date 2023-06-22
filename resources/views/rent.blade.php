@extends('includes.app')
@section('content')

    <div class="heroSec inrBnr">
        <img src="./assets/images/banner.jpg" alt="" class="mainBanner">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content">
                            <h2>Rent</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="rentSec">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h2 class="secHeading">
                        Rent Your Car Now
                    </h2>
                </div>
                <div class="col-md-8">
                    <form action="{{ route('cars.store') }}" method="POST" enctype="multipart/form-data" class="rentForm">
                        @csrf
                        <div class="headingCont">
                            <h4>Car Details</h4>
                        </div>
                        <div class="inputCont">
                            <label for="">Car Model</label>
                            <input type="text" placeholder="Enter your Car Model" name="model">
                        </div>
                        <div class="inputCont">
                            <label for="">Car Make</label>
                            <input type="text" placeholder="Enter your Car Make" name="make">
                        </div>
                        <div class="inputCont">
                            <label for="">Car Variant</label>
                            <input type="text" placeholder="Enter your Car Variant" name="variant">
                        </div>
                        <div class="inputCont">
                            <label for="">Car Color</label>
                            <input type="text" placeholder="Enter your Car Color" name="color">
                        </div>
                        <div class="inputCont">
                            <label for="">Car Availability</label>
                            <input type="text" placeholder="Enter your Car Availability" name="date">
                        </div>
                        <div class="inputCont">
                            <label for="">Car Price</label>
                            <input type="text" placeholder="Enter your Car Price" name="price">
                        </div>
                        <div class="headingCont">
                            <h4>Personal Details</h4>
                        </div>
                        <div class="inputCont">
                            <label for="">Full Name</label>
                            <input type="text" placeholder="Enter your Full Name" name="name">
                        </div>
                        <div class="inputCont">
                            <label for="">Email</label>
                            <input type="text" placeholder="Enter your Email" name="email">
                        </div>
                        <div class="inputCont">
                            <label for="">Phone Number</label>
                            <input type="tel" placeholder="Enter your Phone Number" name="contact">
                        </div>
                        <div class="inputCont">
                            <label for="">Address</label>
                            <input type="text" placeholder="Enter your Address" name="address">
                        </div>
                        <div class="inputCont">
                            <label for="">City</label>
                            <input type="text" placeholder="Enter your City" name="city">
                        </div>
                        <div class="inputCont">
                            <label for="">State</label>
                            <input type="text" placeholder="Enter your State" name="state">
                        </div>
                        <div class="headingCont">
                            <button type="submit" class="themeBtn">Add Car</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection