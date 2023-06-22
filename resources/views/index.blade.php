@extends('includes.app')
@section('content')

    <div class="heroSec">
        <img src="{{asset("assets/images/banner.jpg")}}" alt="" class="mainBanner">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="content">
                            <h2>Lend A Car</h2>
                            <p>
                                Looking a Car on rent?
                                <span>Don't Worry We got you cover.</span>
                            </p>
                            <a href="listings.php" class="themeBtn">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="sellSec">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <figure class="mainImg">
                        <img src="{{asset("assets/images/car5.jpg")}}" alt="">
                    </figure>
                </div>
                <div class="col-md-6">
                    <div class="content">
                        <h2 class="secHeading">
                            Got a spare Car?
                            <span>Rent it out</span>
                        </h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa distinctio dolore dolorem
                            doloribus error exercitationem hic impedit laborum, modi, natus provident quidem quod
                            repudiandae totam veritatis vero vitae voluptates voluptatibus!
                        </p>
                        <a href="" class="themeBtn">Rent Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bannerSec">
        <img src="{{asset("assets/images/car2.jpg")}}" alt="">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <h2 class="secHeading">
                        Fancy a <span>Vacation?</span>
                    </h2>
                    <p>
                        Get Best Deals only on <span class="title">Lend A Car</span>
                    </p>
                    <a href="listings.php" class="themeBtn">Book Now</a>
                </div>
            </div>
        </div>
    </section>
@endsection