<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Car Rental</title>
    <link rel="stylesheet" href="{{asset("assets/css/app.css")}}">
    <link rel="stylesheet" href="{{asset("assets/css/style.css")}}">
</head>
<body>

<div class="preloader">
    <svg viewBox="0 0 102 102" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path class="big-circle" d="M101 51C101 78.6142 78.6142 101 51 101C23.3858 101 1 78.6142 1 51"
              stroke="#252525"
              stroke-width="2"/>
        <path class="small-circle" d="M91 51C91 28.9086 73.0914 11 51 11C28.9086 11 11 28.9086 11 51"
              stroke="#252525"
              stroke-width="2"/>
    </svg>
</div>
<header>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{url('/')}}">
                <img src="{{asset("assets/images/logo.jpg")}}" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{url('/')}}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('listings')}}">Book Car</a>
                    </li>
                    <li class="nav-item">
                        <a class="themeBtn" href="{{url("rent")}}">Rent Car</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

@yield('content')

<footer>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="copyright">
                    Design & Developed by <a href="https://codebyhuzaifa.netlify.app/" target="_blank">D'Buggers</a>
                </p>
            </div>
        </div>
    </div>
</footer>
</body>
<script src="{{asset("assets/js/app.js")}}"></script>
<script src="{{asset("assets/js/index.js")}}"></script>
</html>