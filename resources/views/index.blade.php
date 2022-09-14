<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/autocar-2-html/HTML/main/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 18:44:29 GMT -->

<head>
    <title>Automart|AAKenya</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-submenu.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/flaticon/font/flaticon.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/linearicons/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mCustomScrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/dropzone.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/lightbox.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jnoty.css') }}">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/sidebar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="{{ asset('assets/css/skins/#CBBC27.css') }}">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@100;300;400;500;600;700;800;900&amp;display=swap"
        rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/ie10-viewport-bug-workaround.css') }}">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="{{ asset('assets/js/ie8-responsive-file-warning.js') }}"></script><![endif]-->
    <script src="{{ asset('assets/js/ie-emulation-modes-warning.js') }}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="{{ asset('assets/js/html5shiv.min.js') }}"></script>
    <script src="{{ asset('assets/js/respond.min.js') }}"></script>
    <![endif]-->
    <style>
        input {
            color: #777 !important;
        }

        .selectpicker2,
        input {
            color: #777 !important;
            /* text-align: center; */
            text-transform: capitalize !important;
            padding: 16.5px 20px 16px 15px !important;

        }
    </style>
</head>

<body>
    <div class="page_loader"></div>

    <!-- Top header start -->
    <header class="top-header top-header-bg bg-warning">
        <div class="container">
            <div class="row">

            </div>
        </div>
    </header>
    <!-- Top header end -->

    <!-- Main header start -->
    <header class="main-header sticky-header header-with-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand company-logo" href="index.html">
                    {{-- <img src="{{asset('assets/img/favicon.ico')}}" alt="logo"> --}}
                    <h1 class="text-white"> Automart | AAKENYA</h1>
                </a>
                <button class="navbar-toggler" type="button" id="drawer">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="navbar-collapse collapse w-100 justify-content-end" id="navbar">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown active">
                            <a class="nav-link font-weight-bold" href="{{ route('all_cars') }}"> &nbsp; &nbsp; Buying a
                                Car?<br> <button class="btn btn-warning rounded-pill"> <span style="color: #00472F"> GET
                                        STARTED
                                        HERE</span></button></a>
                        </li>
                        <li class="nav-item dropdown active">

                            <a class="nav-link font-weight-bold" href="{{ route('dealerHome') }}"> &nbsp; &nbsp; &nbsp;
                                Selling a Car?
                                <br> <button class="btn btn-warning rounded-pill"> <span style="color: #00472F"> GET
                                        STARTED HERE</span></button></a>
                        </li>

                    </ul>
                    <ul class="navbar-nav ml-auto" style="margin-left: 10%">
                        <li class="nav-item dropdown active">
                            <div class="row">
                                <div class="col-md-12">
                                    <a class=" nav-link font-weight-bold" href="{{ route('contact') }}"> <span
                                            style="font-size: 35px;color:#CBBC27"> |</span><i class="fa fa-home fa-3x"
                                            style="font-size: 35px;color:#CBBC27"></i><span
                                            style="font-size: 35px;color:#CBBC27">|</span>
                                        <span style="font-size: 25px;color:white"> Contact us</span><span
                                            style="font-size: 35px;color:#CBBC27">|</span></span> <br> </a>
                                </div>

                            </div>


                        </li>


                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Main header end -->

    <!-- Sidenav start -->
    <nav id="sidebar" class="nav-sidebar">
        <!-- Close btn-->
        <div id="dismiss">
            <i class="fa fa-close"></i>
        </div>
        <div class="sidebar-inner">
            <div class="sidebar-logo">
                <a href="/">
                    {{-- <img src="{{asset('assets/img/logos/black-logo.png')}}" alt="sidebarlogo"> --}}
                    AAutomart | AAKENYA
                </a>
            </div>
            {{-- <div class="sidebar-navigation">
                <h3 class="heading">Pages</h3>
                <ul class="menu-list">
                    <li><a href="#" class="active pt0">Index <em class="fa fa-chevron-down"></em></a>
                        <ul>
                            <li><a href="index.html">Index 01</a></li>
                            <li><a href="index-2.html">Index 02</a></li>
                            <li><a href="index-3.html">Index 03</a></li>
                            <li><a href="index-4.html">Index 04</a></li>
                            <li><a href="index-5.html">Index 05</a></li>
                            <li><a href="index-6.html">Index 06</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Car Listing <em class="fa fa-chevron-down"></em></a>
                        <ul>
                            <li>
                                <a href="#">List Layout <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="car-list-rightside.html">List Right Sidebar</a></li>
                                    <li><a href="car-list-leftsidebar.html">List Left Sidebar</a></li>
                                    <li><a href="car-list-fullWidth.html">List FullWidth</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Grid Layout <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="car-grid-rightside.html">Grid Right Sidebar</a></li>
                                    <li><a href="car-grid-leftside.html">Grid Left Sidebar</a></li>
                                    <li><a href="car-grid-fullWidth.html">Grid FullWidth</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Car Details <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="car-details.html">Car Details 1</a></li>
                                    <li><a href="car-details-2.html">Car Details 2</a></li>
                                    <li><a href="car-details-3.html">Car Details 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages <em class="fa fa-chevron-down"></em></a>
                        <ul>
                            <li><a href="about.html">About Us</a></li>
                            <li>
                                <a href="#">Agent <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="agent.html">Agent</a></li>
                                    <li><a href="agent-detail.html">Agent Details</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Services <em class="fa fa-chevron-down"></em></a>
                                <ul>
                                    <li><a href="services.html">Services 1</a></li>
                                    <li><a href="services-2.html">Services 2</a></li>
                                </ul>
                            </li>
                            <li><a href="car-comparison.html">Car Compare</a></li>
                            <li><a href="pricing-tables.html">Pricing Tables</a></li>
                            <li><a href="gallery.html">Gallery</a></li>
                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="elements.html">Elements</a></li>
                            <li><a href="faq.html">Faq</a></li>
                            <li><a href="search-brand.html">Car Brands</a></li>
                            <li><a href="icon.html">Icons</a></li>
                            <li><a href="coming-soon.html">Coming Soon</a></li>
                            <li><a href="404.html">Error Page</a></li>
                            <li><a href="login.html">login</a></li>
                            <li><a href="signup.html">Register</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Blog <em class="fa fa-chevron-down"></em></a>
                        <ul>
                            <li><a href="blog-post.html">Blog Post</a></li>
                            <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                            <li><a href="blog-details.html">Blog Details</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Shop <em class="fa fa-chevron-down"></em></a>
                        <ul>
                            <li><a href="shop-list.html">Shop List</a></li>
                            <li><a href="shop-cart.html">Shop Cart</a></li>
                            <li><a href="shop-checkout.html">Shop Checkout</a></li>
                            <li><a href="shop-details.html">Shop Details</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact.html">Contact</a>
                    </li>
                    <li>
                        <a href="#full-page-search" class="nav-link h-icon">
                            <i class="fa fa-search"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="get-in-touch">
                <h3 class="heading">Get in Touch</h3>
                <div class="get-in-touch-box d-flex mb-2">
                    <i class="flaticon-phone"></i>
                    <a href="tel:0477-0477-8556-552">0288 2547 874</a>
                </div>
                <div class="get-in-touch-box d-flex mb-2">
                    <i class="flaticon-mail"></i>
                    <div class="media-body">
                        <a href="#">info@themevessel.com</a>
                    </div>
                </div>
                <div class="get-in-touch-box d-flex">
                    <i class="flaticon-earth"></i>
                    <div class="media-body">
                        <a href="#">info@themevessel.com</a>
                    </div>
                </div>
            </div>
            <div class="get-social">
                <h3 class="heading">Get Social</h3>
                <a href="#" class="facebook-bg">
                    <i class="fa fa-facebook"></i>
                </a>
                <a href="#" class="twitter-bg">
                    <i class="fa fa-twitter"></i>
                </a>
                <a href="#" class="google-bg">
                    <i class="fa fa-google"></i>
                </a>
                <a href="#" class="linkedin-bg">
                    <i class="fa fa-linkedin"></i>
                </a>
            </div> --}}
        </div>
    </nav>
    <!-- Sidenav end -->

    <!-- Banner start -->
    <div class="banner" id="banner">
        <div id="carouselExampleIndicators" class="carousel slide h-60" data-ride="carousel">
            <div class="carousel-inner banner-slider-inner text-center">
                <div class="carousel-item banner-max-height active item-bg">
                    <img class="d-block w-100 h-100" src="{{ asset('assets/img/banner/img-6.jpg') }}"
                        alt="banner">
                    <div class="carousel-content container banner-info-2 bi-2 h-100">
                        <div class="row bi5">
                            <div class="col-lg-7 text-start">
                                <div class="banner-content3">
                                    <h3 class="mb-30">Buying or Selling <br>a Car?</h3>
                                    <div class="price">
                                        <div class="monthly">
                                            <div class="freshd">
                                                <h5 class="text-uppercase" style="color:#CBBC27">GET THE BEST DEAL IN
                                                    THE COUNTRY <br>FROM
                                                    TRUSTED AND RELIABLE DEALERS</h5>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="search-box-4 sb-7 sb-8" style="background: transparent">
                                    <form method="GET">
                                        <div class="form-group mb-3">
                                            {{-- <select class="selectpicker search-fields" name="select-brand">
                                                <option>Select Brand</option>
                                                <option>Audi</option>
                                                <option>BMW</option>
                                                <option>Honda</option>
                                                <option>Nissan</option>
                                            </select> --}}
                                            <a href="{{ route('login') }}" class="btn btn-warning rounded ">
                                                <h4 style="color: #00472F"> SIGN IN</h4>
                                            </a>
                                            <h5>New User? Click Here</h5>
                                        </div>
                                        <div class="form-group ">
                                            <h3 style="color:#CBBC27">Quick Search</h3>
                                            <h5 style="color:#CBBC27">Amount </h5>
                                            <button class="btn btn-warning bg-white rounded "
                                                style="color: #00472F;font-weight:bolder;font-size:100%">
                                                < 500K </button>
                                                    <button class="btn btn-warning bg-white rounded "
                                                        style="color: #00472F;font-weight:bolder;font-size:100%"> 500K
                                                        - 1M </button>
                                                    <button class="btn btn-warning bg-white rounded "
                                                        style="color: #00472F;font-weight:bolder;font-size:100%"> >
                                                        1M</button>
                                        </div>


                                    </form>

                                </div>
                                <div class="btn-group w-100" style="margin-left: 30%">
                                    <button class="btn btn-light rounded" style="width: 20%"><i
                                            class="fa fa-search fa-2x " style="color: #00472F;"></i></button>
                                    <a href="#search" class="btn btn-warning" style="width: 80%">
                                        <h5 style="color: #00472F;font-size:250%;" class="m-2">SEARCH HERE</h5>
                                    </a>
                                    <br>

                                </div>
                                <h5 style="margin-left:50%">You can search using model</h5>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner end -->

    {{-- <!-- Search box 3 start -->
    <div class="search-box-3 sb-6">
        <div class="container">
            <div class="search-area-inner">
                <div class="search-contents">
                    <form method="GET">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="select-brand">
                                        <option>Select Brand</option>
                                        <option>Audi</option>
                                        <option>BMW</option>
                                        <option>Honda</option>
                                        <option>Nissan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="select-make">
                                        <option>Select Make</option>
                                        <option>BMW</option>
                                        <option>Honda</option>
                                        <option>Lamborghini</option>
                                        <option>Sports Car</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="select-location">
                                        <option>Select Location</option>
                                        <option>United States</option>
                                        <option>United Kingdom</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="select-year">
                                        <option>Select Year</option>
                                        <option>2016</option>
                                        <option>2017</option>
                                        <option>2018</option>
                                        <option>2019</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="select-type">
                                        <option>Select Type Of Car</option>
                                        <option>New Car</option>
                                        <option>Used Car</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <select class="selectpicker search-fields" name="transmission">
                                        <option>Transmission</option>
                                        <option>Automatic</option>
                                        <option>Manual</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <div class="range-slider">
                                        <div data-min="0" data-max="150000" data-unit="USD"
                                            data-min-name="min_price" data-max-name="max_price"
                                            class="range-slider-ui ui-slider" aria-disabled="false"></div>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                                <div class="form-group">
                                    <button class="btn w-100 button-theme btn-md">
                                        <i class="fa fa-search"></i>Find
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Search box 3 end --> --}}
    <!-- Search box 2 start -->
    <div class="search-box-2" id="search">
        <div class="container">
            <div class="row">
                <form action="{{ route('search') }}" method="POST">
                    <!-- show success message -->
                    @if (session('successMsg'))
                        <div class="alert alert-success" role="alert">
                            {{ session('successMsg') }}
                        </div>
                    @endif
                    <!-- show error messages -->
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <div class="alert alert-danger" role="alert">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                    {{ csrf_field() }}
                    <div class="col-lg-12">
                        <div class="inline-search-area">
                            <div class="row row-3">
                                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 search-col mt-3">
                                    <select class="selectpicker search-fields" name="make" id="car_make">
                                        <option> Select Make</option>
                                        @foreach ($makes as $item)
                                            <option value="{{ $item->car_make_id }}">{{ $item->car_make_name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 search-col mt-3">
                                    <select class="selectpicker2 form-control search-fields" name="model"
                                        id="car_model">
                                        <option value="Any Make" selected="false">Select Model</option>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 search-col mt-3">
                                    <select class="selectpicker search-fields" name="from_year">
                                        <option> Year of Manufacture (From)</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 search-col mt-3">
                                    <select class="selectpicker search-fields" name="from_year">
                                        <option> Year of Manufacture (To)</option>
                                        <option value="2001">2001</option>
                                        <option value="2002">2002</option>
                                        <option value="2003">2003</option>
                                        <option value="2004">2004</option>
                                        <option value="2005">2005</option>
                                        <option value="2006">2006</option>
                                        <option value="2007">2007</option>
                                        <option value="2008">2008</option>
                                        <option value="2009">2009</option>
                                        <option value="2010">2010</option>
                                        <option value="2011">2011</option>
                                        <option value="2012">2012</option>
                                        <option value="2013">2013</option>
                                        <option value="2014">2014</option>
                                        <option value="2015">2015</option>
                                        <option value="2016">2016</option>
                                        <option value="2017">2017</option>
                                        <option value="2018">2018</option>
                                        <option value="2019">2019</option>
                                        <option value="2020">2020</option>
                                        <option value="2021">2021</option>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 search-col mt-3">
                                    <select class="selectpicker search-fields" name="min_mileage">
                                        <option> Minimum Mileage</option>
                                        <option value="0" selected="selected" data-select2-id="13">0</option>
                                        <option value="10000">10,000</option>
                                        <option value="30000">30,000</option>
                                        <option value="50000">50,000</option>
                                        <option value="100000">100,000</option>
                                        <option value="150000">150,000</option>
                                        <option value="250000">250,000</option>
                                        <option value="350000">350,000</option>
                                        <option value="450000">450,000</option>
                                        <option value="500000">500,000</option>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 search-col mt-3">
                                    <select class="selectpicker search-fields" name="max_mileage">
                                        <option> Maximum Mileage </option>
                                        <option value="0" selected="selected" data-select2-id="13">0</option>
                                        <option value="10000">10,000</option>
                                        <option value="30000">30,000</option>
                                        <option value="50000">50,000</option>
                                        <option value="100000">100,000</option>
                                        <option value="150000">150,000</option>
                                        <option value="250000">250,000</option>
                                        <option value="350000">350,000</option>
                                        <option value="450000">450,000</option>
                                        <option value="500000">500,000</option>
                                    </select>
                                </div>


                                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 search-col mt-3">
                                    <input type="text" class="form-control" name="min_engine" id=""
                                        placeholder="Minimum Engine CC">
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 search-col mt-3">
                                    <input type="text" class="form-control" name="max_engine" id=""
                                        placeholder="Maximum Engine CC">
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 search-col mt-3">
                                    <input type="text" class="form-control" name="min_price" id=""
                                        placeholder="Minimum Price">
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 search-col mt-3">
                                    <input type="text" class="form-control" name="max_price" id=""
                                        placeholder="Maximum Price">
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 mt-3 search-col mt-3"
                                    style="text-align: center">
                                    <i class="fa fa-play fa-4x" style="color: #00472F"></i>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6 mt-3">
                                    <button class="btn white-btn btn-search w-100" style="background: #00472F">
                                        <h4><strong>Proceed </strong></h4>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Search box 2 end -->
    <!-- Featured car start -->
    <div class="container2">
        <div class=" card main-title pull-left mb-5"
            style="background: rgb(218, 216, 216) !important;z-index:-1;position: relative;display:block; width:30%;height:100px;margin-left:-1%; border-top-right-radius: 25px;">
            <h1 style="color: black !important;padding:7%;font-size:250%">TOP PICKS</h1>
        </div>
    </div>
    <div class="featured-car content-area">

        <div class="container2">
            <!-- Main title -->

            <div class="featured-slider row slide-box-btn slider "
                style="border: solid white 2px !important;background:white "
                data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slide slide-box">
                    <div class="car-box">
                        <div class="car-image">
                            <img class="d-block w-100" src="{{ asset('assets/img/car/car-3.jpg') }}"
                                alt="car-photo">
                            <div class="tag">Best Deal</div>
                        </div>
                        <div class="detail" style="background:rgb(190, 186, 186)">

                            <div class="location ratings" style="margin-left: -5%">
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star-o text-success"></i>
                            </div>
                            <div class="location">
                                <a href="car-details.html">
                                    <i class="fa-solid fa-engine"></i>Model: LAMBORGHINI
                                </a>
                            </div>
                            <div class="location">
                                <a href="car-details.html">
                                    <i class="fa-solid fa-engine"></i>Engine: 1798 CC
                                </a>
                            </div>
                            <div class="location">
                                <a href="car-details.html">
                                    <i class="fa-solid fa-engine"></i>Fuel: Petrol
                                </a>
                            </div>
                        </div>
                        <div class="footer clearfix" style="text-align: center;background:rgb(190, 186, 186)">
                            <div class="w-100 ratings">
                                <i class="fa fa-phone text-success"></i> Call or Chat with the owner <i
                                    class="fa fa-envelope text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide slide-box">
                    <div class="car-box">
                        <div class="car-image">
                            <img class="d-block w-100" src="{{ asset('assets/img/car/car-4.jpg') }}"
                                alt="car-photo">
                            <div class="tag">Best Deal</div>

                        </div>
                        <div class="detail" style="background:#CBBC27">

                            <div class="location ratings" style="margin-left: -5%">
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star-o text-success"></i>
                            </div>
                            <div class="location">
                                <a href="car-details.html">
                                    <i class="fa-solid fa-engine"></i>Model: Ferrari
                                </a>
                            </div>
                            <div class="location">
                                <a href="car-details.html">
                                    <i class="fa-solid fa-engine"></i>Engine: 1798 CC
                                </a>
                            </div>
                            <div class="location">
                                <a href="car-details.html">
                                    <i class="fa-solid fa-engine"></i>Fuel: Petrol
                                </a>
                            </div>
                        </div>

                        <div class="footer clearfix" style="text-align: center;background:#CBBC27">
                            <div class="w-100 ratings">
                                <i class="fa fa-phone text-success"></i> Call or Chat with the owner <i
                                    class="fa fa-envelope text-success"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="slide slide-box">
                    <div class="car-box">
                        <div class="car-image">
                            <img class="d-block w-100" src="{{ asset('assets/img/car/car-1.jpg') }}"
                                alt="car-photo">
                            <div class="tag">Best Deal</div>
                        </div>
                        <div class="detail" style="background:rgb(190, 186, 186)">

                            <div class="location ratings" style="margin-left: -5%">
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star-o text-success"></i>

                            </div>
                            <div class="location">
                                <a href="car-details.html">
                                    <i class="fa-solid fa-engine"></i>Model: BMW
                                </a>
                            </div>
                            <div class="location">
                                <a href="car-details.html">
                                    <i class="fa-solid fa-engine"></i>Engine: 1798 CC
                                </a>
                            </div>
                            <div class="location">
                                <a href="car-details.html">
                                    <i class="fa-solid fa-engine"></i>Fuel: Petrol
                                </a>
                            </div>
                        </div>

                        <div class="footer clearfix" style="text-align: center;background:rgb(190, 186, 186)">
                            <div class="w-100 ratings">
                                <i class="fa fa-phone text-success"></i> Call or Chat with the owner <i
                                    class="fa fa-envelope text-success"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="slide slide-box">
                    <div class="car-box">
                        <div class="car-image">
                            <img class="d-block w-100" src="{{ asset('assets/img/car/car-2.jpg') }}"
                                alt="car-photo">
                            <div class="tag">Best Deal</div>
                        </div>
                        <div class="detail" style="background:#CBBC27">

                            <div class="location ratings" style="margin-left: -5%">
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star-o text-success"></i>
                            </div>
                            <div class="location">
                                <a href="car-details.html">
                                    <i class="fa-solid fa-engine"></i>Model: Ferrari
                                </a>
                            </div>
                            <div class="location">
                                <a href="car-details.html">
                                    <i class="fa-solid fa-engine"></i>Engine: 1798 CC
                                </a>
                            </div>
                            <div class="location">
                                <a href="car-details.html">
                                    <i class="fa-solid fa-engine"></i>Fuel: Petrol
                                </a>
                            </div>
                        </div>

                        <div class="footer clearfix" style="text-align: center; background:#CBBC27">
                            <div class="w-100 ratings">
                                <i class="fa fa-phone text-success"></i> Call or Chat with the owner <i
                                    class="fa fa-envelope text-success"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="slide slide-box">
                    <div class="car-box">
                        <div class="car-image">
                            <img class="d-block w-100" src="{{ asset('assets/img/car/car-5.jpg') }}"
                                alt="car-photo">
                            <div class="tag">Best Deal</div>
                        </div>
                        <div class="detail" style="background:rgb(190, 186, 186)">

                            <div class="location ratings" style="margin-left: -5%">
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star-o text-success"></i>

                            </div>
                            <div class="location">
                                <a href="car-details.html">
                                    <i class="fa-solid fa-engine"></i>Model: Porsche
                                </a>
                            </div>
                            <div class="location">
                                <a href="car-details.html">
                                    <i class="fa-solid fa-engine"></i>Engine: 1798 CC
                                </a>
                            </div>
                            <div class="location">
                                <a href="car-details.html">
                                    <i class="fa-solid fa-engine"></i>Fuel: Petrol
                                </a>
                            </div>
                        </div>

                        <div class="footer clearfix" style="text-align: center;background:rgb(190, 186, 186)">
                            <div class="w-100 ratings">
                                <i class="fa fa-phone text-success"></i> Call or Chat with the owner <i
                                    class="fa fa-envelope text-success"></i>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="slide slide-box">
                    <div class="car-box">
                        <div class="car-image">
                            <img class="d-block w-100" src="{{ asset('assets/img/car/car-6.jpg') }}"
                                alt="car-photo">
                            <div class="tag">Best Deal</div>
                        </div>
                        <div class="detail" style="background:#CBBC27">

                            <div class="location ratings" style="margin-left: -5%">
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star text-success"></i>
                                <i class="fa fa-star-o text-success"></i>

                            </div>
                            <div class="location">
                                <a href="car-details.html">
                                    <i class="fa-solid fa-engine"></i>Model: Lexus
                                </a>
                            </div>
                            <div class="location">
                                <a href="car-details.html">
                                    <i class="fa-solid fa-engine"></i>Engine: 1798 CC
                                </a>
                            </div>
                            <div class="location">
                                <a href="car-details.html">
                                    <i class="fa-solid fa-engine"></i>Fuel: Petrol
                                </a>
                            </div>
                        </div>

                        <div class="footer clearfix" style="text-align: center; background:#CBBC27">
                            <div class="w-100 ratings">
                                <i class="fa fa-phone text-success"></i> Call or Chat with the owner <i
                                    class="fa fa-envelope text-success"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Featured car end -->



    <!-- Footer start -->
    <footer class="main-footer-2" style="background: #CBBC27;max-height: 20%">
        <div class="container2">
            <div class="row">
                <div class="col-lg-3">
                    <img src="{{ asset('images/iphone.png') }}" alt="iphone"> <br>
                    <img src="{{ asset('images/playstore.png') }}" alt="iphone">
                </div>
                <div class="col-lg-3">
                    <h1 style="color: #00472F;font-size:400%">DOWNLOAD </h1>
                    <p style="color: #00472F">AA Automart APP on Google Play & App Store</p>
                </div>
                <div class="col-lg-3">

                </div>
                <div class="col-lg-3">
                    <h2 style="color: #00472F">
                        AA Automart powered by <br>
                        Automobile Association of Kenya
                    </h2>
                </div>
            </div>
        </div>

    </footer>
    <!-- Footer end -->

    <!-- Full Page Search -->
    <div id="full-page-search">
        <button type="button" class="close">×</button>
        <form
            action="https://storage.googleapis.com/theme-vessel-items/checking-sites/autocar-2-html/HTML/main/index.html#"
            class="full-page-search-inner">
            <input type="search" value="" placeholder="type keyword(s) here" />
            <button type="submit" class="btn btn-sm button-theme">Search</button>
        </form>
    </div>

    <!-- Car Overview Modal -->
    <div class="car-model-2">
        <div class="modal fade" id="carOverviewModal" tabindex="-1" role="dialog"
            aria-labelledby="carOverviewModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title" id="carOverviewModalLabel">
                            <h4>Find Your Dream Car</h4>
                            <h5><i class="flaticon-pin"></i> 123 Kathal St. Tampa City,</h5>
                        </div>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row modal-raw">
                            <div class="col-lg-6 modal-left">
                                <div class="item active">
                                    <img src="{{ asset('assets/img/car-11.jpg') }}" alt="best-car"
                                        class="img-fluid">
                                    <div class="sobuz">
                                        <div class="price-box">
                                            <span class="del"><del>$950.00</del></span>
                                            <br>
                                            <span class="del-2">$1050.00</span>
                                        </div>
                                        <div class="ratings-2">
                                            <span class="ratings-box">4.5/5</span>
                                            <i class="fa fa-star text-success"></i>
                                            <i class="fa fa-star text-success"></i>
                                            <i class="fa fa-star text-success"></i>
                                            <i class="fa fa-star text-success"></i>
                                            <i class="fa fa-star-o text-success"></i>
                                            ( 7 Reviews )
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 modal-right">
                                <div class="modal-right-content">
                                    <section>
                                        <h3>Features</h3>
                                        <div class="features">
                                            <ul class="bullets">
                                                <li>Cruise Control</li>
                                                <li>Airbags</li>
                                                <li>Air Conditioning</li>
                                                <li>Alarm System</li>
                                                <li>Audio Interface</li>
                                                <li>CDR Audio</li>
                                                <li>Seat Heating</li>
                                                <li>ParkAssist</li>
                                            </ul>
                                        </div>
                                    </section>
                                    <section>
                                        <h3>Overview</h3>
                                        <ul class="bullets">
                                            <li>Model</li>
                                            <li>Year</li>
                                            <li>Condition</li>
                                            <li>Price</li>
                                            <li>Audi</li>
                                            <li>2020</li>
                                            <li>Brand New</li>
                                            <li>$178,000</li>
                                        </ul>
                                    </section>
                                    <div class="description">
                                        <h3>Description</h3>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem Ipsum has been the industry's standard.</p>
                                        <a href="car-details.html" class="btn btn-md btn-round btn-theme">Show
                                            Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-submenu.js') }}"></script>
    <script src="{{ asset('assets/js/rangeslider.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mb.YTPlayer.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollUp.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('assets/js/dropzone.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.filterizr.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ asset('assets/js/lightgallery-all.js') }}"></script>
    <script src="{{ asset('assets/js/jnoty.js') }}"></script>
    <script src="{{ asset('assets/js/sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="{{ asset('assets/js/ie10-viewport-bug-workaround.js') }}"></script>
    <!-- Custom javascript -->
    <script src="{{ asset('assets/js/ie10-viewport-bug-workaround.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#car_make').on('change', function() {
                var carmake_id = this.value;
                $("#car_model").html('');
                $.ajax({
                    url: "{{ url('fetch/car-models') }}",
                    type: "POST",
                    data: {
                        car_make_id: carmake_id,
                        _token: '{{ csrf_token() }}'
                    },
                    dataType: 'json',
                    success: function(result) {

                        $('#car_model').html(
                            '<option value="">Select Car Model</option>');

                        $.each(result.models, function(key, value) {
                            $("#car_model").append('<option value="' + value
                                .car_model_id + '">' + value.car_model_name +
                                '</option>');
                        });
                    }
                });
            })
        });
    </script>
</body>

<!-- Mirrored from storage.googleapis.com/theme-vessel-items/checking-sites/autocar-2-html/HTML/main/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 18:44:30 GMT -->

</html>
