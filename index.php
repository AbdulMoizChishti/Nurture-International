<?php
require_once "config.php";

if (isset($_REQUEST["submit"])) {

    $fc = $_REQUEST["fromcountry"];
    $fa = $_REQUEST["fromaddress"];
    $tc = $_REQUEST["tocountry"];
    $ta = $_REQUEST["toaddress"];
    $size = $_REQUEST["Size"];
    $qty = $_REQUEST["qty"];
    $weight = $_REQUEST["weight"];
    $ft = $_REQUEST["freighttype"];
    $category = $_REQUEST["category"];
    $email = $_REQUEST["email"];
    // $IDcar = $_REQUEST["IDcar"];



    $ins = "INSERT INTO inquiry (fromcountry, fromaddress,tocountry,toaddress, Size, qty, weight, freighttype, category, email ,status) VALUES ('$fc','$fa','$tc','$ta','$size','$qty','$weight','$ft','$category','$email','to be inquired')";
    $query1 = mysqli_query($connection, $ins);

    if ($query1) {
        echo "Records Inserted";
    }
}

?>











<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Nurture International LCL</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/meanmenu.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>

    <!-- preloader  -->
    <div id="preloader">
        <div id="ctn-preloader" class="ctn-preloader">
            <div class="animation-preloader">
                <div class="spinner"></div>
                <div class="txt-loading">
                    <span data-text-preloader="N" class="letters-loading">
                        N
                    </span>
                    <span data-text-preloader="U" class="letters-loading">
                        U
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                        R
                    </span>
                    <span data-text-preloader="T" class="letters-loading">
                        T
                    </span>
                    <span data-text-preloader="U" class="letters-loading">
                        U
                    </span>
                    <span data-text-preloader="R" class="letters-loading">
                        R
                    </span>
                    <span data-text-preloader="E" class="letters-loading">
                        E
                    </span>
                    <!-- <span data-text-preloader="K" class="letters-loading">
                        K
                    </span> -->
                </div>
            </div>
            <div class="loader">
                <div class="row">
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-left">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                    <div class="col-3 loader-section section-right">
                        <div class="bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- preloader end -->

    <!-- header-start -->
    <header class="transparent-header s-transparent-header">
        <div class="third-header-top d-none d-lg-block">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <div class="third-logo">
                            <a href="index.html"><img src="img/logo/white_logo.png" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-8">
                        <div class="third-header-contact">
                            <div class="third-header-form">
                                <!-- <form action="#">
                                    <input type="text" placeholder="Enter Tracking Id...">
                                    <button><i class="fas fa-search"></i></button>
                                </form> -->
                            </div>
                            <div class="third-hrader-contact-list">
                                <ul>
                                    <li>
                                        <div class="thc-icon">
                                            <i class="fas fa-headphones"></i>
                                        </div>
                                        <div class="thc-content">
                                            <p><span>Call :</span> +1244 8964 4512</p>
                                            <p><a href="" class="__cf_email__" data-cfemail="234a4d454c63465b464e534f460d404c4e">info@nilcl.com</a>
                                            </p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thc-icon">
                                            <i class="fas fa-map-marker"></i>
                                        </div>
                                        <div class="thc-content">
                                            <p>Logistics Avenue</p>
                                            <p>New York</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-sticky" class="main-header third-main-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="logo">
                            <a href="index.html"><img src="img/logo/logo.png" class="mobile-logo logo-none" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6 d-none d-md-block">
                        <div class="menu-area">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="active"><a href="index.html">Home</a>
                                            <!-- <ul class="submenu">
                                                    <li><a href="index.html">Home One</a></li>
                                                    <li class="active"><a href="index-2.html">Home Two</a></li>
                                                    <li><a href="index-3.html">Home Three</a></li>
                                                </ul> -->
                                        </li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="tracking.html">Tracking</a></li>
                                        <li><a href="#">Services</a>
                                            <ul class="submenu">
                                                <li>
                                                <li><a href="Air Freight.html">Air Freight</a></li>
                                                <li><a href="Ocean Freight.html">Ocean Freight</a></li>
                                                <li><a href="Drayage.html">Drayage</a></li>
                                                <li><a href="Custom Brokerage.html">Custom Brokerage</a></li>
                                                <ul class="submenu">

                                                </ul>
                                        </li>
                                        <!-- <li><a href="pricing.html">Pricing Plan</a></li> -->
                                    </ul>
                                    </li>
                                    <!-- <li><a href="#">News & Media</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="blog-classic.html">Blog Classic</a></li>
                                                <li><a href="blog-with-sidebar.html">Blog With Sidebar</a></li>
                                                <li><a href="blog-details.html">Blog Details</a></li>
                                            </ul>
                                        </li> -->
                                    <li><a href="support.html">Support</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- <div class="header-search">
                                <a href="#" data-toggle="modal" data-target="#search-modal"><i
                                        class="flaticon-magnifying-glass"></i></a>
                            </div> -->
                            <div class="header-btn">
                                <a href="#" class="btn" data-toggle="modal" data-target="#exampleModalLong"><img src="img/icon/calculator-symbols.png" alt="icon">Get Fare Rate</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="mobile-menu"></div>
                    </div>
                </div>
                <!-- Modal Search -->
                <!-- <div class="modal fade" id="search-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <form>
                                <input type="text" placeholder="Search here...">
                                <button><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </div> -->
                <!-- Modal -->
                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content fare-rate-modal">
                            <ul class="nav nav-tabs setup-panel">
                                <li class="nav-item single-steps">
                                    <a class="nav-link btn-amber" href="#step-1">Select Your Destination</a>
                                </li>
                                <li class="nav-item single-steps">
                                    <a class="nav-link btn-blue-grey" href="#step-2">ITEMS TO BE SHIPPED</a>
                                </li>
                                <li class="nav-item single-steps">
                                    <a class="nav-link btn-blue-grey" href="#step-3">tracking information</a>
                                </li>
                            </ul>
                            <form action="index.php" method="post">
                                <div class="single-setup" id="step-1">
                                    <div class="fare-rate-tab-content">
                                        <div class="modal-shipping-info">
                                            <ul>
                                                <li>
                                                    <div class="shipping-step-count">
                                                        <h5>A</h5>
                                                    </div>
                                                    <div class="shipping-address-form">
                                                        <div class="shipping-country-box form-group">
                                                            <label for="from-country">from country</label>
                                                            <!-- <input type="text" required="required" id="from-country"
                                                                placeholder="Select Your Destination"> -->

                                                            <select name="fromcountry" type="text" required="required" id="from-country" placeholder="Select Your Destination" class="custom-select">
                                                                <option selected="">USA</option>
                                                                <option>USA</option>
                                                            </select>
                                                        </div>
                                                        <div class="shipping-address-box form-group">
                                                            <label for="from-country-location">add your location</label>
                                                            <input name="fromaddress" type="text" required="required" id="from-country-location" placeholder="Select Your Destination">
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="shipping-step-count">
                                                        <h5>B</h5>
                                                    </div>
                                                    <div class="shipping-address-form">
                                                        <div class="shipping-country-box form-group">
                                                            <label for="to-country">TO country</label>
                                                            <!-- <input type="text" required="required" id="to-country"
                                                                placeholder="Select Your Destination"> -->

                                                            <select name="tocountry" type="text" required="required" id="to-country" placeholder="Select Your Destination" class="custom-select">
                                                                <option selected="">UAE</option>
                                                                <option>PAK</option>
                                                                <!-- <option>UAE</option> -->
                                                            </select>
                                                        </div>
                                                        <div class="shipping-address-box form-group">
                                                            <label for="to-country-location">add your location</label>
                                                            <input name="toaddress" type="text" required="required" id="to-country-location" placeholder="Select Your Destination">
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="modal-shipping-more-list">
                                            <ul>
                                                <li><a href="#"><i class="flaticon-credit-card"></i> Don't have an
                                                        account? No problem
                                                        Pay by credit card or cash.</a></li>
                                                <li><a href="#"><i class="flaticon-sings"></i> Get a quick quote and
                                                        start shipping</a>
                                                </li>
                                                <li><a href="#"><i class="flaticon-track"></i> Consult your packaging
                                                        and delivery
                                                        options</a></li>
                                            </ul>
                                        </div>
                                        <button class="btn f-right nextBtn-2 btn-success" type="button">one more
                                            step</button>
                                    </div>
                                </div>
                                <div class="single-setup" id="step-2">
                                    <div class="fare-rate-tab-content">
                                        <div class="modal-shipping-details">
                                            <div class="modal-shipping-title">
                                                <h2>items <span>details</span></h2>
                                                <!-- <h2 class="f-right">total cost : <span>$ 19.00</span></h2> -->
                                            </div>
                                            <div class="shipping-details-info">
                                                <div class="single-shipping-details-box">
                                                    <label for="packaging-size">packaging size</label>
                                                    <select class="custom-select" id="packaging-size" name="Size">
                                                        <option selected="">Standart Size ( 42” x 36” )</option>
                                                        <option>Standart Size ( 82” x 86” )</option>
                                                        <option>Standart Size ( 102” x 165” )</option>
                                                        <option>Standart Size ( 110” x 205” )</option>
                                                        <option>Standart Size ( 120” x 250” )</option>
                                                    </select>
                                                </div>
                                                <div class="single-shipping-details-box shipping-qty">
                                                    <label for="QTY-number">QTY</label>
                                                    <input type="number" value="1" id="QTY-number" required="required" name="qty">
                                                </div>
                                                <div class="single-shipping-details-box shipping-weight">
                                                    <label for="packaging-weight">TOTAL WEIGHT</label>
                                                    <select class="custom-select" id="packaging-weight" name="weight">
                                                        <option selected="">KG</option>
                                                        <option>20KG</option>
                                                        <option>30KG</option>
                                                        <option>50KG</option>
                                                        <option>80KG</option>
                                                        <option>100KG</option>
                                                    </select>
                                                </div>
                                                <div class="single-shipping-details-box shipping-transport">
                                                    <label for="cargo-transport">Freight type</label>
                                                    <select class="custom-select" id="cargo-transport" name="freighttype">
                                                        <option selected="">Air Freight</option>
                                                        <option>Air Freight</option>
                                                        <option>Ocean Freight</option>
                                                        <option>Drayage</option>
                                                        <!-- <option>3000in</option>
                                                        <option>3500in</option>
                                                        <option>4000in</option> -->
                                                    </select>
                                                </div>
                                                <div class="single-shipping-details-box shipping-product">
                                                    <label for="product-category">product category</label>
                                                    <select class="custom-select" id="product-category" name="category">
                                                        <option selected="">Package</option>
                                                        <option>Envelope</option>
                                                        <option>Box</option>
                                                        <option>Pallets</option>
                                                        <!-- <option>Glass Product</option> -->
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="custom-control custom-checkbox">
                                                <input name="email" type="email" id="email" placeholder="Enter Your Email">
                                            </div>
                                        </div>
                                        <button class="btn f-left prevBtn-2 btn-success" type="button">Previous</button>
                                        <button class="btn f-right nextBtn-2 btn-success" type="submit" name="submit">Inquire</button>
                                    </div>
                                </div>
                                <div class="single-setup" id="step-3">
                                    <div class="fare-rate-tab-content">
                                        <div class="modal-shipping-details">
                                            <div class="modal-shipping-title">
                                                <h2>tracking <span>information</span></h2>
                                            </div>
                                            <div class="f-left pr-20">
                                                <div class="shipping-details-info shipping-tracking-info">
                                                    <div class="modal-tracking-info">
                                                        <label for="invoice-id">invoice Id</label>
                                                        <input name="tid" type="text" id="invoice-id" placeholder="Enter Your Id">
                                                    </div>
                                                    <div class="modal-tracking-info">
                                                        <label>Search invoice</label>
                                                        <button name="track" type="submit" class="btn nextBtn-2 btn-success">find your
                                                            product</button>
                                                    </div>
                                                </div>
                                                <div class="tracking-quots-board">
                                                    <label>Details</label>
                                                    <div class="tracking-quots-board-info">
                                                        <img src="img/bg/board_bg.jpg" alt="img">
                                                        <h5></h5>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <div class="tracking-modal-map">
                                                <div id="contact-map"></div>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-start-end -->

    <!-- main-area -->
    <main>

        <!-- slider-area -->
        <section class="slider-style-three">
            <div class="slider-active">
                <div class="single-slider t-slider-area" style="background-image: url(img/slider/slider_bg03.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="s-slider-content t-slider-content text-center">
                                    <h6 data-animation="fadeInUp" data-delay=".2s"><span class="dots"></span>logistics
                                        cargo service<span class="dots2"></span></h6>
                                    <h2 data-animation="fadeInUp" data-delay=".4s">Consolidation & Deconsolidation</h2>
                                    <p data-animation="fadeInUp" data-delay=".6s">Logistics is generally the detailed
                                        organization and implementation of a complex tiona general business sense,
                                        logistics
                                        is the management</p>
                                    <a href="#" class="btn red-btn " data-animation="fadeInUp" data-delay=".8s" data-toggle="modal" data-target="#exampleModalLong" data-animation="fadeInUp">Get Fare Rate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider t-slider-area" style="background-image: url(img/slider/slider_bg04.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="s-slider-content t-slider-content text-center">
                                    <h6 data-animation="fadeInUp" data-delay=".2s"><span class="dots"></span>logistics
                                        cargo service<span class="dots2"></span></h6>
                                    <h2 data-animation="fadeInUp" data-delay=".4s">Express Delivery</h2>
                                    <p data-animation="fadeInUp" data-delay=".6s">Logistics is generally the detailed
                                        organization and implementation of a complex tiona general business sense,
                                        logistics
                                        is the management</p>
                                    <a href="#" class="btn red-btn" data-animation="fadeInUp" data-delay=".8s" data-toggle="modal" data-target="#exampleModalLong" data-animation="fadeInUp">Get Fare Rate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider t-slider-area" style="background-image: url(img/slider/slider_bg05.jpg);">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="s-slider-content t-slider-content text-center">
                                    <h6 data-animation="fadeInUp" data-delay=".2s"><span class="dots"></span>logistics
                                        cargo service<span class="dots2"></span></h6>
                                    <h2 data-animation="fadeInUp" data-delay=".4s">End to End Logistics</h2>
                                    <p data-animation="fadeInUp" data-delay=".6s">Logistics is generally the detailed
                                        organization and implementation of a complex tiona general business sense,
                                        logistics
                                        is the management</p>
                                    <a href="#" class="btn red-btn" data-animation="fadeInUp" data-delay=".8s" data-toggle="modal" data-target="#exampleModalLong" data-animation="fadeInUp">Get Fare Rate</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider-area-end -->

        <!-- category-area -->
        <!-- <section class="t-category-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="s-single-cat t-single-cat">
                            <div class="s-cat-icon">
                                <i class="flaticon-cruise"></i>
                            </div>
                            <div class="s-cat-content">
                                <h5><a href="#">Sea Freight</a></h5>
                                <p>Expres delivery an innovative service is logistics</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="s-single-cat t-single-cat">
                            <div class="s-cat-icon">
                                <i class="flaticon-air-freight"></i>
                            </div>
                            <div class="s-cat-content">
                                <h5><a href="#">Air Freight</a></h5>
                                <p>Expres delivery an innovative service is logistics</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="s-single-cat t-single-cat">
                            <div class="s-cat-icon">
                                <i class="flaticon-delivery-1"></i>
                            </div>
                            <div class="s-cat-content">
                                <h5><a href="#">Insurance</a></h5>
                                <p>Expres delivery an innovative service is logistics</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="s-single-cat t-single-cat">
                            <div class="s-cat-icon">
                                <i class="flaticon-package"></i>
                            </div>
                            <div class="s-cat-content">
                                <h5><a href="#">Forwarding</a></h5>
                                <p>Expres delivery an innovative service is logistics</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- category-area-end -->


        <!-- choose-area -->
        <section class="choose-area pt-110 pb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-10">
                        <div class="s-section-title text-center mb-60">
                            <h2>Why should you choose us?</h2>
                            <p>Express delivery is an innovative service is effective logistics solution for the
                                delivery of small
                                cargo. This service is useful for companies various.</p>
                        </div>
                    </div>
                </div>
                <div class="services-wrapper">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-choose mb-40">
                                <div class="choose-head">
                                    <div class="choose-icon mb-25">
                                        <img src="img/icon/choose_img01.png" alt="img">
                                    </div>
                                    <h3><a href="#">Express delivery innovative cargo service</a></h3>
                                </div>
                                <div class="choose-content">
                                    <p>Express delivery inno service effective logistics solutio for delivery of small
                                        cargo delivery service.</p>
                                    <a href="#"><i class="fas fa-arrow-alt-circle-right"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-choose mb-40">
                                <div class="choose-head">
                                    <div class="choose-icon mb-25">
                                        <img src="img/icon/choose_img02.png" alt="img">
                                    </div>
                                    <h3><a href="#">Logistics scale transport innovative</a></h3>
                                </div>
                                <div class="choose-content">
                                    <p>Express delivery inno service effective logistics solutio for delivery of small
                                        cargo delivery service.</p>
                                    <a href="#"><i class="fas fa-arrow-alt-circle-right"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-choose mb-40">
                                <div class="choose-head">
                                    <div class="choose-icon mb-25">
                                        <img src="img/icon/choose_img03.png" alt="img">
                                    </div>
                                    <h3><a href="#">Help transportation and logistics companies</a></h3>
                                </div>
                                <div class="choose-content">
                                    <p>Express delivery inno service effective logistics solutio for delivery of small
                                        cargo delivery service.</p>
                                    <a href="#"><i class="fas fa-arrow-alt-circle-right"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-choose mb-40">
                                <div class="choose-head">
                                    <div class="choose-icon mb-25">
                                        <img src="img/icon/choose_img04.png" alt="img">
                                    </div>
                                    <h3><a href="#">Supply chain management takes cargo</a></h3>
                                </div>
                                <div class="choose-content">
                                    <p>Express delivery inno service effective logistics solutio for delivery of small
                                        cargo delivery service.</p>
                                    <a href="#"><i class="fas fa-arrow-alt-circle-right"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-choose mb-40">
                                <div class="choose-head">
                                    <div class="choose-icon mb-25">
                                        <img src="img/icon/choose_img05.png" alt="img">
                                    </div>
                                    <h3><a href="#">World´s biggest trade show for logistics</a></h3>
                                </div>
                                <div class="choose-content">
                                    <p>Express delivery inno service effective logistics solutio for delivery of small
                                        cargo delivery service.</p>
                                    <a href="#"><i class="fas fa-arrow-alt-circle-right"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-choose mb-40">
                                <div class="choose-head">
                                    <div class="choose-icon mb-25">
                                        <img src="img/icon/choose_img06.png" alt="img">
                                    </div>
                                    <h3><a href="#">Logistics supply chain management</a></h3>
                                </div>
                                <div class="choose-content">
                                    <p>Express delivery inno service effective logistics solutio for delivery of small
                                        cargo delivery service.</p>
                                    <a href="#"><i class="fas fa-arrow-alt-circle-right"></i> Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- choose-area-end -->







        <!-- services-area -->
        <section class="services-area delivery-bg pt-110 pb-70">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-10">
                        <div class="s-section-title text-center mb-60">
                            <h2>how we help you</h2>
                            <p>Express delivery is an innovative service is effective logistics solution for the
                                delivery of small cargo. This service
                                is useful for companies various.</p>
                        </div>
                    </div>
                </div>
                <div class="services-wrapper">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="s-single-services mb-50">
                                <div class="services-thumb mb-25">
                                    <a href="#"><img src="img/images/s_services_img01.jpg" alt="img"></a>
                                </div>
                                <div class="s-services-content">
                                    <h6>Delivery Service</h6>
                                    <h3><a href="#">Anywhere Shipping</a></h3>
                                    <p>Express delivery is an innovativ service is effective logistics solutio for
                                        delivery of small cargo service.</p>
                                    <a href="#" class="btn red-btn">LET US HELP</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="s-single-services mb-50">
                                <div class="services-thumb mb-25">
                                    <a href="#"><img src="img/images/s_services_img02.jpg" alt="img"></a>
                                </div>
                                <div class="s-services-content">
                                    <h6>Inspiration Service</h6>
                                    <h3><a href="#">Get Insights Inspiration</a></h3>
                                    <p>Express delivery is an innovativ service is effective logistics solutio for
                                        delivery of small cargo service.</p>
                                    <a href="#" class="btn red-btn">LET US HELP</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="s-single-services mb-50">
                                <div class="services-thumb mb-25">
                                    <a href="#"><img src="img/images/s_services_img03.jpg" alt="img"></a>
                                </div>
                                <div class="s-services-content">
                                    <h6>Discover Locations</h6>
                                    <h3><a href="#">Your Freight Deadlines</a></h3>
                                    <p>Express delivery is an innovativ service is effective logistics solutio for
                                        delivery of small cargo service.</p>
                                    <a href="#" class="btn red-btn">LET US HELP</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="international-services position-relative pb-120 fix">
            <div class="container">
                <div class="services-wrapper">
                    <div class="row align-items-center">
                        <div class="col-lg-6 order-0 order-lg-2">
                            <div class="int-services-img text-center text-lg-right">
                                <img src="img/images/int_cargo_img.png" alt="img">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="s-section-title mb-30">
                                <h2>International Cargo</h2>
                                <h6>Express delivery is an innovative service</h6>
                            </div>
                            <div class="int-services-content">
                                <p>Express delivery is an innovative service is effective logistics solution for the
                                    delivery of small cargo. This service
                                    is useful for companies of various effective logistics scale.</p>
                                <a href="#" class="btn red-btn" data-animation="fadeInUp" data-delay=".8s" data-toggle="modal" data-target="#exampleModalLong" data-animation="fadeInUp">Get
                                    Fare Rate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay-title paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal">Cargo</div>
        </section>
        <!-- services-area-end -->

        <!-- video-area -->
        <!-- <section class="video-area video-bg">
            <div class="container">
                <div class="video-overlay s-video-overlay">
                    <div class="row align-items-center">
                        <div class="col-xl-5 col-lg-8 order-2 order-lg-0">
                            <div class="video-title">
                                <span>Our Chalanges</span>
                                <h2><span>never</span> break our promise</h2>
                                <a href="#">more services<span></span></a>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="video-play">
                                <a href="https://www.youtube.com/watch?v=iWKu6WNFf9M" class="popup-video"><img
                                        src="img/icon/play_btn.png" alt="img"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- video-area-end -->


        <!-- section-area -->
        <!-- <section class="area-wrapper black-bg position-relative pt-115 pb-120">
            <div class="area-wrap-bg"></div>
            <div class="testimonial-map-bg"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="testimonial-area">
                            <div class="section-title white-title mb-55">
                                <h6>Happy Customer Quotes</h6>
                                <h2>Our Top Reviews</h2>
                            </div>
                            <div class="testimonial-active">
                                <div class="single-testimonial">
                                    <div class="testimonial-cat mb-30">
                                        <h5>Shipping Cargo</h5>
                                        <div class="testimonial-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="testimonial-content mb-45">
                                        <p>“ Express delivery is an innovative service is effective logistics solution
                                            for the delivery of small cargo. This
                                            service is useful companied various effective logistics scala ”</p>
                                    </div>
                                    <div class="testimonial-avatar">
                                        <div class="testi-avatar-img">
                                            <img src="img/images/testi_avatar01.png" alt="img">
                                        </div>
                                        <div class="testi-avatar-info">
                                            <h6>Tonoy Alexander</h6>
                                            <span>Founder Cargo</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="single-testimonial">
                                    <div class="testimonial-cat mb-30">
                                        <h5>Air Freight</h5>
                                        <div class="testimonial-rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <div class="testimonial-content mb-45">
                                        <p>“ Express delivery is an innovative service is effective logistics solution
                                            for the delivery of small cargo. This
                                            service is useful companied various effective logistics scala ”</p>
                                    </div>
                                    <div class="testimonial-avatar">
                                        <div class="testi-avatar-img">
                                            <img src="img/images/testi_avatar02.png" alt="img">
                                        </div>
                                        <div class="testi-avatar-info">
                                            <h6>Lanu Dexander</h6>
                                            <span>Founder Cargo</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="cta-area cta-pl">
                            <div class="section-title white-title mb-60">
                                <h6>Clients Trust Us</h6>
                                <h2>Cargo Request Quote</h2>
                            </div>
                            <div class="cta-from">
                                <form action="#">
                                    <div class="cta-form-col d-flex justify-content-between">
                                        <select class="custom-select">
                                            <option selected="">Select Service</option>
                                            <option>Air Freight</option>
                                            <option>Shipping Cargo</option>
                                            <option>Rail Cargo</option>
                                            <option>Warehousing</option>
                                        </select>
                                        <input type="text" placeholder="Length cm">
                                        <input type="text" placeholder="Hight cm">
                                    </div>
                                    <div class="cta-form-col d-flex justify-content-between">
                                        <select class="custom-select">
                                            <option selected="">From Country</option>
                                            <option value="United States">United States</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antarctica">Antarctica</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                        </select>
                                        <select class="custom-select">
                                            <option selected="">To Country</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea, Republic of">Korea, Republic of</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                        </select>
                                    </div>
                                    <div class="cta-form-col d-flex justify-content-between">
                                        <select class="custom-select">
                                            <option selected="">Weight kg</option>
                                            <option>100Kg</option>
                                            <option>200Kg</option>
                                            <option>300Kg</option>
                                            <option>400Kg</option>
                                            <option>500Kg</option>
                                            <option>600Kg</option>
                                            <option>700Kg</option>
                                        </select>
                                        <input class="cta-email" type="email" placeholder="Email ID">
                                    </div>
                                    <h4 class="extra-services"><i class="fas fa-binoculars"></i>Extra Service</h4>
                                    <ul>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">Air
                                                    Freight</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">Shipping
                                                    Cargo</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                <label class="custom-control-label" for="customCheck3">Rail
                                                    Cargo</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                <label class="custom-control-label"
                                                    for="customCheck4">Warehousing</label>
                                            </div>
                                        </li>
                                    </ul>
                                    <button class="btn">comparison</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- section-area-end -->

        <!-- rating-area -->
        <!-- <section class="rating-area pt-110 pb-50">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-10">
                        <div class="s-section-title text-center mb-80">
                            <h2>What customers are thinking?</h2>
                        </div>
                    </div>
                </div>
                <div class="rating-wrap">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="single-customer-rating mb-70">
                                <div class="customer-rating-top">
                                    <div class="customer-thumb">
                                        <a href="#"><img src="img/images/rating_logo.jpg" alt="img"></a>
                                        <div class="rating-info">
                                            <h6>Overall Rating</h6>
                                            <div class="raising-star mb-15">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                            <h3>3.5</h3>
                                        </div>
                                        <span>based on 3458 ratings</span>
                                    </div>
                                </div>
                                <div class="rating-list">
                                    <ul>
                                        <li>
                                            On Time Delivery
                                            <span>3.5</span>
                                            <div class="raising-star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </li>
                                        <li>
                                            Delivery experience
                                            <span>4.5</span>
                                            <div class="raising-star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-customer-rating mb-70">
                                <div class="customer-rating-top">
                                    <div class="customer-thumb">
                                        <a href="#"><img src="img/images/rating_logo03.jpg" alt="img"></a>
                                        <div class="rating-info">
                                            <h6>Overall Rating</h6>
                                            <div class="raising-star mb-15">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                            <h3>3.5</h3>
                                        </div>
                                        <span>based on 3458 ratings</span>
                                    </div>
                                </div>
                                <div class="rating-list">
                                    <ul>
                                        <li>
                                            On Time Delivery
                                            <span>3.5</span>
                                            <div class="raising-star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </li>
                                        <li>
                                            Delivery experience
                                            <span>4.5</span>
                                            <div class="raising-star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="single-customer-rating mb-70">
                                <div class="customer-rating-top">
                                    <div class="customer-thumb">
                                        <a href="#"><img src="img/images/rating_logo02.jpg" alt="img"></a>
                                        <div class="rating-info">
                                            <h6>Overall Rating</h6>
                                            <div class="raising-star mb-15">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                            <h3>3.5</h3>
                                        </div>
                                        <span>based on 3458 ratings</span>
                                    </div>
                                </div>
                                <div class="rating-list">
                                    <ul>
                                        <li>
                                            On Time Delivery
                                            <span>3.5</span>
                                            <div class="raising-star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </li>
                                        <li>
                                            Delivery experience
                                            <span>4.5</span>
                                            <div class="raising-star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-customer-rating mb-70">
                                <div class="customer-rating-top">
                                    <div class="customer-thumb">
                                        <a href="#"><img src="img/images/rating_logo04.jpg" alt="img"></a>
                                        <div class="rating-info">
                                            <h6>Overall Rating</h6>
                                            <div class="raising-star mb-15">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                            <h3>3.5</h3>
                                        </div>
                                        <span>based on 3458 ratings</span>
                                    </div>
                                </div>
                                <div class="rating-list">
                                    <ul>
                                        <li>
                                            On Time Delivery
                                            <span>3.5</span>
                                            <div class="raising-star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </li>
                                        <li>
                                            Delivery experience
                                            <span>4.5</span>
                                            <div class="raising-star">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- rating-area-end -->
        <!-- delivery-services -->
        <section class="delivery-services position-relative fix pt-110">
            <div class="overlay-title paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal">service</div>
            <div class="delivery-services-bg"></div>
            <div class="container">
                <div class="delivery-services-wrap">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-10">
                            <div class="s-section-title text-center mb-60">
                                <h2>Cargo Delivery service</h2>
                                <p>Express delivery is an innovative service is effective logistics solution for the
                                    delivery of small
                                    cargo. This service is useful for companies various.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="single-delivery-services mb-70 pr-75">
                                <div class="ds-icon order-0 order-md-2">
                                    <img src="img/icon/ds_icon01.png" alt="icon">
                                </div>
                                <div class="ds-content text-center text-sm-left text-md-right">
                                    <h5>Cargo Delivery</h5>
                                    <p>Express delivery innovative service logistic delivery</p>
                                </div>
                            </div>
                            <div class="single-delivery-services mb-70 pr-75">
                                <div class="ds-icon order-0 order-md-2">
                                    <img src="img/icon/ds_icon02.png" alt="icon">
                                </div>
                                <div class="ds-content text-center text-sm-left text-md-right">
                                    <h5>Satisfied clients</h5>
                                    <p>Express delivery innovative service logistic delivery</p>
                                </div>
                            </div>
                            <div class="single-delivery-services mb-70 pr-75">
                                <div class="ds-icon order-0 order-md-2">
                                    <img src="img/icon/ds_icon03.png" alt="icon">
                                </div>
                                <div class="ds-content text-center text-sm-left text-md-right">
                                    <h5>Door to door</h5>
                                    <p>Express delivery innovative service logistic delivery</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 d-none d-xl-block">
                            <div class="d-services-img">
                                <img src="img/images/delivery_services_img.png" alt="img">
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="single-delivery-services mb-70 pl-75">
                                <div class="ds-icon">
                                    <img src="img/icon/ds_icon04.png" alt="icon">
                                </div>
                                <div class="ds-content">
                                    <h5>International delivery</h5>
                                    <p>Express delivery innovative service logistic delivery</p>
                                </div>
                            </div>
                            <div class="single-delivery-services mb-70 pl-75">
                                <div class="ds-icon">
                                    <img src="img/icon/ds_icon05.png" alt="icon">
                                </div>
                                <div class="ds-content">
                                    <h5>Heavy Boxes Cargo</h5>
                                    <p>Express delivery innovative service logistic delivery</p>
                                </div>
                            </div>
                            <div class="single-delivery-services mb-70 pl-75">
                                <div class="ds-icon">
                                    <img src="img/icon/ds_icon06.png" alt="icon">
                                </div>
                                <div class="ds-content">
                                    <h5>Custom Brokerage</h5>
                                    <p>Express delivery innovative service logistic delivery</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- delivery-services-end -->

        <!-- fact-area -->
        <section class="fact-area pt-120 pb-65">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="single-fact mb-50">
                            <div class="fact-icon mb-25">
                                <i class="flaticon-package"></i>
                            </div>
                            <div class="fact-content">
                                <h4><span class="count">3,560</span> km</h4>
                                <h6>Package Delivered</h6>
                                <p>Express delivery is an innaiv service effective logistics solution</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="single-fact mb-50">
                            <div class="fact-icon mb-25">
                                <i class="flaticon-placeholder"></i>
                            </div>
                            <div class="fact-content">
                                <h4><span class="count">195</span></h4>
                                <h6>Countries Covered</h6>
                                <p>Express delivery is an innaiv service effective logistics solution</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="single-fact mb-50">
                            <div class="fact-icon mb-25">
                                <i class="flaticon-user"></i>
                            </div>
                            <div class="fact-content">
                                <h4><span class="count">456</span> k</h4>
                                <h6>Happy Customer</h6>
                                <p>Express delivery is an innaiv service effective logistics solution</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="single-fact mb-50">
                            <div class="fact-icon mb-25">
                                <i class="flaticon-like"></i>
                            </div>
                            <div class="fact-content">
                                <h4><span class="count">99</span> Yr</h4>
                                <h6>Year Experience</h6>
                                <p>Express delivery is an innaiv service effective logistics solution</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fact-area-end -->












        <!-- brand-area -->
        <div class="brand-area gray-bg pt-85 pb-85">
            <div class="container">
                <div class="row brand-active">
                    <div class="col-12">
                        <div class="signle-brand">
                            <img src="img/brand/brnad_logo01.png" alt="img">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="signle-brand">
                            <img src="img/brand/brnad_logo02.png" alt="img">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="signle-brand">
                            <img src="img/brand/brnad_logo03.png" alt="img">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="signle-brand">
                            <img src="img/brand/brnad_logo04.png" alt="img">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="signle-brand">
                            <img src="img/brand/brnad_logo05.png" alt="img">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="signle-brand">
                            <img src="img/brand/brnad_logo03.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- brand-area-end -->

        <!-- newsletter -->
        <!-- <section class="newsletter-area gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="newsletter-wrap">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="newsletter-content">
                                        <h4>Newsletter Sign Up</h4>
                                        <span>Notifications our best deals...</span>
                                    </div>
                                </div>
                                <div class="col-lg-7">
                                    <div class="newsletter-form">
                                        <form action="#">
                                            <input type="email" placeholder="Enter your email...">
                                            <button class="btn">subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- newsletter-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer -->
    <footer>
        <div class="footer-wrap pt-190 pb-40" data-background="img/bg/footer_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget mb-50">
                            <div class="footer-logo mb-35">
                                <a href="index.html"><img src="img/logo/w_logo.png" alt="img"></a>
                            </div>
                            <div class="footer-text">
                                <p>Orem Ipsum is simply dumm text the printing and types indstr sum has been the
                                    industry
                                </p>
                            </div>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget mb-50">
                            <div class="fw-title mb-30">
                                <h5>RECENT POSTS</h5>
                            </div>
                            <div class="f-rc-post">
                                <ul>
                                    <li>
                                        <div class="f-rc-thumb">
                                            <a href="#"><img src="img/blog/f_rc_img01.jpg" alt="img"></a>
                                        </div>
                                        <div class="f-rc-content">
                                            <span>19 Jun, 2019</span>
                                            <h5><a href="#">which the syste built and actually</a></h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="f-rc-thumb">
                                            <a href="#"><img src="img/blog/f_rc_img02.jpg" alt="img"></a>
                                        </div>
                                        <div class="f-rc-content">
                                            <span>19 Jun, 2019</span>
                                            <h5><a href="#">which the syste built and actually</a></h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget mb-50">
                            <div class="fw-title mb-30">
                                <h5>USEFUL LINKS</h5>
                            </div>
                            <div class="fw-link">
                                <ul>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> About us</a></li>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> Delivery Information</a></li>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> Terms & Conditions</a></li>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> Privacy Policy</a></li>
                                    <li><a href="#"><i class="fas fa-caret-right"></i> Refund Policy</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget mb-50">
                            <div class="fw-title mb-30">
                                <h5>Support & Downloads</h5>
                            </div>
                            <div class="f-support-content">
                                <p>Lorem ipsum dolor sit amet, consy eetur adipisc de elit. Quisque act raqum nunc no
                                    dolor
                                </p>
                                <a href="#" class="f-download-btn"><img src="img/images/f_download_btn01.png" alt="img"></a>
                                <a href="#" class="f-download-btn"><img src="img/images/f_download_btn02.png" alt="img"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7">
                        <div class="copyright-text">
                            <p>Copyright© <span> <a href="login.php"> Nurture Int'l LCL </a> </span> | All Rights Reserved</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-5">
                        <div class="f-payment-method text-center text-md-right">
                            <img src="img/images/card_img.png" alt="img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer-end -->




    <!-- JS here -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.meanmenu.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/paroller.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
</body>

</html>