<?php
require_once "config.php";

if (isset($_POST["submit"])) {

    $fc = $_POST["fromcountry"];
    $fa = $_POST["fromaddress"];
    $tc = $_POST["tocountry"];
    $ta = $_POST["toaddress"];
    $size = $_POST["Size"];
    $qty = $_POST["qty"];
    $weight = $_POST["weight"];
    $ft = $_POST["freighttype"];
    $category = $_POST["category"];
    $email = $_POST["email"];
    // Capture more form field values as needed

    $ins = "INSERT INTO inquiry (fromcountry, fromaddress, tocountry, toaddress, Size, qty, weight, freighttype, category, email, status) 
                VALUES ('$fc', '$fa', '$tc', '$ta', '$size', '$qty', '$weight', '$ft', '$category', '$email', 'to be inquired')";

    $query1 = mysqli_query($connection, $ins);

    if ($query1) {
        $emailAddress = 'moaiz599@gmail.com';
        $subject = 'Test email';
        $body = "From country: $fc \n\n From address: $tc";

        $mailtoLink = "mailto:$emailAddress?subject=" . urlencode($subject) . "&body=" . urlencode($body);

        echo '<script>window.location.href = "' . $mailtoLink . '";</script>';

        exit;
        // Terminate the script to prevent further execution
    } else {
        echo "Error: " . mysqli_error($connection);
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

    <link rel="shortcut icon" type="image/x-icon" href="img/favicon2.png">
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
    <header>
        <div id="header-sticky" class="main-header transparent-header">
            <div class="container-fluid header-container-p">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="logo">
                            <a href="index.php"><img src="img/logo/s_logo.png" class="mobile-logo logo-sticky-none" alt="Logo"></a>
                            <a href="index.php"><img src="img/logo/logo.png" class="mobile-logo s-logo-none" alt="Logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-6 d-none d-md-block">
                        <div class="menu-area">
                            <div class="main-menu">
                                <nav id="mobile-menu">
                                    <ul>
                                        <li class="active"><a href="index.php">Home</a>
                                            <!-- <ul class="submenu">
                                                        <li><a href="index.php">Home One</a></li>
                                                        <li class="active"><a href="index-2.html">Home Two</a></li>
                                                        <li><a href="index-3.html">Home Three</a></li>
                                                    </ul> -->
                                        </li>
                                        <li><a href="about-us.html">About Us</a></li>
                                        <li><a href="tracking.html">Tracking</a></li>
                                        <li><a href="#">Services</a>
                                            <ul class="submenu">
                                                <li>
                                                <li><a href="service-air.html">Services Air</a></li>
                                                <li><a href="service-Railway.html">Services Railway</a></li>
                                                <li><a href="service-door-to-door.html">Services Door to
                                                        Door</a></li>
                                                <li><a href="service-warehouse.html">Services warehouse</a></li>
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
                            <div class="header-search">
                                <a href="#" data-toggle="modal" data-target="#search-modal"><i class="flaticon-magnifying-glass"></i></a>
                            </div>
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
                                <!-- <li class="nav-item single-steps">
                                        <a class="nav-link btn-blue-grey" href="#step-3">tracking information</a>
                                    </li> -->
                            </ul>
                            <form action="index.php" method="POST">
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
                                        <!-- <button class="btn f-right nextBtn-2 btn-success" type="submit" name="submit"></button> -->
                                        <button class="btn f-right nextBtn-2 btn-success" type="submit" name="submit">Inquire</button>
                                        </a>
                                    </div>
                                </div>
                                <!-- <div class="single-setup" id="step-3">
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
                                                 <div class="tracking-modal-map">
                                                    <div id="contact-map"></div>
                                                </div> 
                                            </div>
                                        </div>
                                    </div> -->
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

        <!-- breadcrumb-area -->
        <div class="breadcrumb-area breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="dots"></li>
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item"><a href="#">pages</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Pricing</li>
                                    <li class="dots2"></li>
                                </ol>
                            </nav>
                            <h2>pricing strategy</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->

        <!-- pricing-area -->
        <section class="pricing-area pt-110 pb-90">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-10">
                        <div class="s-section-title text-center mb-60">
                            <h2>cargo logistics Plan</h2>
                            <p>Express delivery is an innovative service is effective logistics solution for the delivery of small
                                cargo. This service is useful for companies various.</p>
                        </div>
                    </div>
                </div>
                <div class="pricing-wrap pl-80 pr-80">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="single-pricing text-center mb-30">
                                <div class="pricing-head mb-30">
                                    <div class="pricing-icon mb-15">
                                        <img src="img/icon/pricing_icon01.png" alt="img">
                                    </div>
                                    <h5>Basic <span>Limited</span></h5>
                                    <span>Free plan</span>
                                    <p>Subscribe Best Plans</p>
                                    <div class="price-count">
                                        <h4>Free License</h4>
                                    </div>
                                </div>
                                <div class="pricing-list mb-30">
                                    <ul>
                                        <li>Unlimited Transport Tracking</li>
                                        <li>50kg Cargo Transport</li>
                                        <li>Freight Charge Terms</li>
                                        <li>24/7 support service</li>
                                    </ul>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="btn">Buy Now<i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-pricing active text-center mb-30">
                                <div class="pricing-head mb-30">
                                    <div class="pricing-icon mb-15">
                                        <img src="img/icon/pricing_icon02.png" alt="img">
                                    </div>
                                    <h5>Business <span>Limited</span></h5>
                                    <span>monthly</span>
                                    <p>Subscribe Best Plans</p>
                                    <div class="price-count">
                                        <h4>Yearly License <span>- $119</span></h4>
                                    </div>
                                </div>
                                <div class="pricing-list mb-30">
                                    <ul>
                                        <li>Unlimited Transport Tracking</li>
                                        <li>50kg Cargo Transport</li>
                                        <li>Freight Charge Terms</li>
                                        <li>24/7 support service</li>
                                    </ul>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="btn">Buy Now<i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-pricing text-center mb-30">
                                <div class="pricing-head mb-30">
                                    <div class="pricing-icon mb-15">
                                        <img src="img/icon/pricing_icon03.png" alt="img">
                                    </div>
                                    <h5>Basic <span>Limited</span></h5>
                                    <span>Yearly plan</span>
                                    <p>Subscribe Best Plans</p>
                                    <div class="price-count">
                                        <h4>Yearly License <span>- $219</span></h4>
                                    </div>
                                </div>
                                <div class="pricing-list mb-30">
                                    <ul>
                                        <li>Unlimited Transport Tracking</li>
                                        <li>50kg Cargo Transport</li>
                                        <li>Freight Charge Terms</li>
                                        <li>24/7 support service</li>
                                    </ul>
                                </div>
                                <div class="pricing-btn">
                                    <a href="#" class="btn">Buy Now<i class="fas fa-shopping-cart"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pricing-area-end -->

        <!-- testimonial-area -->
        <section class="testimonial-area pt-110 pb-120 testimonial-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-10">
                        <div class="s-section-title text-center mb-90">
                            <h2>client testimonial examples</h2>
                        </div>
                    </div>
                </div>
                <div class="testimonial-padding-wrap">
                    <div class="row s-testi-active">
                        <div class="col-12">
                            <div class="s-single-testimonial">
                                <div class="s-testi-content">
                                    <h5>“ The combined effects of intense industry competiti and rising transportati costs underscore
                                        the importance of profitable freight and logistics pricing “</h5>
                                </div>
                                <div class="s-testi-avatar">
                                    <div class="s-testi-avatar-img">
                                        <img src="img/images/s_testi_avatar.png" alt="img">
                                    </div>
                                    <div class="s-testi-avatar-info">
                                        <p>Thomas Alexander <span>Founder ceo</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="s-single-testimonial">
                                <div class="s-testi-content">
                                    <h5>“ The combined effects of intense industry competiti and rising transportati costs underscore
                                        the importance of profitable freight and logistics pricing “</h5>
                                </div>
                                <div class="s-testi-avatar">
                                    <div class="s-testi-avatar-img">
                                        <img src="img/images/s_testi_avatar.png" alt="img">
                                    </div>
                                    <div class="s-testi-avatar-info">
                                        <p>Thomas Alexander <span>Founder ceo</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="s-testi-quote">
                        <img src="img/icon/testi_quote.png" alt="img">
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-area-end -->

    </main>
    <!-- main-area-end -->

    <!-- footer -->
    <footer>
        <div class="footer-wrap pt-110 pb-40" data-background="img/bg/footer_bg.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget mb-50">
                            <div class="footer-logo mb-35">
                                <a href="index.php"><img src="img/logo/w_logo.png" alt="img"></a>
                            </div>
                            <div class="footer-text">
                                <p>Orem Ipsum is simply dumm text the printing and types indstr sum has been the industry
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
                                <p>Lorem ipsum dolor sit amet, consy eetur adipisc de elit. Quisque act raqum nunc no dolor
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
                            <p>Copyright© <span>StarTask </span> | All Rights Reserved</p>
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