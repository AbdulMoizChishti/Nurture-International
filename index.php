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
        $emailAddress = 'Info@nilcl.com';
        $subject = 'Inquiry form on NILCL';
        $body = "From country: $fc \n\n From address: $fa \n\n to address: $tc \n\n to address: $ta \n\n Size: $size \n\n Quantity: $qty \n\n weight: $weight \n\n Freight Type: $ft \n\n category: $category \n\n From email: $email ";

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
                            <a href="index.php"><img src="img/logo/wlogo.png" class="mobile-logo logo-sticky-none" alt="Logo"></a>
                            <a href="index.php"><img src="img/logo/logo2.png" class="mobile-logo s-logo-none" alt="Logo"></a>
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
                                        <li><a href="about-us.php">About Us</a></li>
                                        <li><a href="tracking.php">Tracking</a></li>
                                        <li><a href="#">Services</a>
                                            <ul class="submenu">
                                                <li>
                                                <li><a href="Air Freight.php">Air Freight</a></li>
                                                <li><a href="Ocean Freight.php">Ocean Freight</a></li>
                                                <li><a href="Drayage.php">Drayage</a></li>
                                                <li><a href="Custom Brokerage.php">Custom Brokerage</a></li>
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
                                    <li><a href="support.php">Support</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- <div class="header-search">
                                <a href="#" data-toggle="modal" data-target="#search-modal"><i class="flaticon-magnifying-glass"></i></a>
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
                                                                <option selected="">Alabama</option>
                                                                <option value="Alabama">Alabama</option>
                                                                <option value="Alaska">Alaska</option>
                                                                <option value="Arizona">Arizona</option>
                                                                <option value="Arkansas">Arkansas</option>
                                                                <option value="California">California</option>
                                                                <option value="Colorado">Colorado</option>
                                                                <option value="Connecticut">Connecticut</option>
                                                                <option value="Delaware">Delaware</option>
                                                                <option value="Florida">Florida</option>
                                                                <option value="Georgia">Georgia</option>
                                                                <option value="Hawaii">Hawaii</option>
                                                                <option value="Idaho">Idaho</option>
                                                                <option value="Illinois">Illinois</option>
                                                                <option value="Indiana">Indiana</option>
                                                                <option value="Iowa">Iowa</option>
                                                                <option value="Kansas">Kansas</option>
                                                                <option value="Kentucky">Kentucky</option>
                                                                <option value="Louisiana">Louisiana</option>
                                                                <option value="Maine">Maine</option>
                                                                <option value="Maryland">Maryland</option>
                                                                <option value="Massachusetts">Massachusetts</option>
                                                                <option value="Michigan">Michigan</option>
                                                                <option value="Minnesota">Minnesota</option>
                                                                <option value="Mississippi">Mississippi</option>
                                                                <option value="Missouri">Missouri</option>
                                                                <option value="Montana">Montana</option>
                                                                <option value="Nebraska">Nebraska</option>
                                                                <option value="Nevada">Nevada</option>
                                                                <option value="New Hampshire">New Hampshire</option>
                                                                <option value="New Jersey">New Jersey</option>
                                                                <option value="New Mexico">New Mexico</option>
                                                                <option value="New York">New York</option>
                                                                <option value="North Carolina">North Carolina</option>
                                                                <option value="North Dakota">North Dakota</option>
                                                                <option value="Ohio">Ohio</option>
                                                                <option value="Oklahoma">Oklahoma</option>
                                                                <option value="Oregon">Oregon</option>
                                                                <option value="Pennsylvania">Pennsylvania</option>
                                                                <option value="Rhode Island">Rhode Island</option>
                                                                <option value="South Carolina">South Carolina</option>
                                                                <option value="South Dakota">South Dakota</option>
                                                                <option value="Tennessee">Tennessee</option>
                                                                <option value="Texas">Texas</option>
                                                                <option value="Utah">Utah</option>
                                                                <option value="Vermont">Vermont</option>
                                                                <option value="Virginia">Virginia</option>
                                                                <option value="Washington">Washington</option>
                                                                <option value="West Virginia">West Virginia</option>
                                                                <option value="Wisconsin">Wisconsin</option>
                                                                <option value="Wyoming">Wyoming</option>
                                                            </select>
                                                        </div>
                                                        <div class="shipping-address-box form-group">
                                                            <label for="from-country-location">add your location</label>
                                                            <input name="fromaddress" type="text" required="required" id="from-country-location" placeholder="Your pickup Address">
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

                                                            <select name="tocountry" type="text" required="required" id="to-country" placeholder="Your Destination Address" class="custom-select">
                                                                <option selected="">Abbottabad</option>
                                                                <option value="Abbottabad">Abbottabad</option>
                                                                <option value="AhmedpurEast">Ahmedpur East</option>
                                                                <option value="ArifWala">Arif Wala</option>
                                                                <option value="Attock">Attock</option>
                                                                <option value="Bahawalnagar">Bahawalnagar</option>
                                                                <option value="Bahawalpur">Bahawalpur</option>
                                                                <option value="Badin">Badin</option>
                                                                <option value="Bhalwal">Bhalwal</option>
                                                                <option value="Bhakkar">Bhakkar</option>
                                                                <option value="Burewala">Burewala</option>
                                                                <option value="Charsadda">Charsadda</option>
                                                                <option value="Chakwal">Chakwal</option>
                                                                <option value="Chaman">Chaman</option>
                                                                <option value="Chiniot">Chiniot</option>
                                                                <option value="Chishtian">Chishtian</option>
                                                                <option value="Dadu">Dadu</option>
                                                                <option value="Daharki">Daharki</option>
                                                                <option value="DeraGhaziKhan">Dera Ghazi Khan</option>
                                                                <option value="DeraIsmailKhan">Dera Ismail Khan</option>
                                                                <option value="Faisalabad">Faisalabad</option>
                                                                <option value="Ferozwala">Ferozwala</option>
                                                                <option value="Ghotki">Ghotki</option>
                                                                <option value="Gojra">Gojra</option>
                                                                <option value="Gujranwala">Gujranwala</option>
                                                                <option value="GujranwalaCantonment">Gujranwala Cantonment</option>
                                                                <option value="Gujrat">Gujrat</option>
                                                                <option value="Hafizabad">Hafizabad</option>
                                                                <option value="Haroonabad">Haroonabad</option>
                                                                <option value="Hasilpur">Hasilpur</option>
                                                                <option value="Hub">Hub</option>
                                                                <option value="Hyderabad">Hyderabad</option>
                                                                <option value="Islamabad">Islamabad</option>
                                                                <option value="Jacobabad">Jacobabad</option>
                                                                <option value="Jaranwala">Jaranwala</option>
                                                                <option value="Jhang">Jhang</option>
                                                                <option value="Jhelum">Jhelum</option>
                                                                <option value="Kabal">Kabal</option>
                                                                <option value="Kamalia">Kamalia</option>
                                                                <option value="KamberAliKhan">Kamber Ali Khan</option>
                                                                <option value="Kandhkot">Kandhkot</option>
                                                                <option value="Kasur">Kasur</option>
                                                                <option value="Khairpur">Khairpur</option>
                                                                <option value="Khanewal">Khanewal</option>
                                                                <option value="Khanpur">Khanpur</option>
                                                                <option value="Khuzdar">Khuzdar</option>
                                                                <option value="Kohat">Kohat</option>
                                                                <option value="KotAbdulMalik">Kot Abdul Malik</option>
                                                                <option value="KotAddu">Kot Addu</option>
                                                                <option value="Kotri">Kotri</option>
                                                                <option value="Lahore">Lahore</option>
                                                                <option value="Larkana">Larkana</option>
                                                                <option value="Layyah">Layyah</option>
                                                                <option value="Lodhran">Lodhran</option>
                                                                <option value="MandiBahauddin">Mandi Bahauddin</option>
                                                                <option value="Mansehra">Mansehra</option>
                                                                <option value="Mardan">Mardan</option>
                                                                <option value="Mianwali">Mianwali</option>
                                                                <option value="Mirpur">Mirpur</option>
                                                                <option value="MirpurKhas">Mirpur Khas</option>
                                                                <option value="MirpurMathelo">Mirpur Mathelo</option>
                                                                <option value="Mingora">Mingora</option>
                                                                <option value="Muridke">Muridke</option>
                                                                <option value="Multan">Multan</option>
                                                                <option value="Muridke">Muridke</option>
                                                                <option value="Muzaffarabad">Muzaffarabad</option>
                                                                <option value="Muzaffargarh">Muzaffargarh</option>
                                                                <option value="Narowal">Narowal</option>
                                                                <option value="Nawabshah">Nawabshah</option>
                                                                <option value="Nowshera">Nowshera</option>
                                                                <option value="Okara">Okara</option>
                                                                <option value="Pakpattan">Pakpattan</option>
                                                                <option value="RahimYarKhan">Rahim Yar Khan</option>
                                                                <option value="Rawalpindi">Rawalpindi</option>
                                                                <option value="Sadiqabad">Sadiqabad</option>
                                                                <option value="Sahiwal">Sahiwal</option>
                                                                <option value="Samundri">Samundri</option>
                                                                <option value="Sargodha">Sargodha</option>
                                                                <option value="Sheikhupura">Sheikhupura</option>
                                                                <option value="Shikarpur">Shikarpur</option>
                                                                <option value="Sialkot">Sialkot</option>
                                                                <option value="Sukkur">Sukkur</option>
                                                                <option value="Swabi">Swabi</option>
                                                                <option value="Talagang">Talagang</option>
                                                                <option value="TandoAdam">Tando Adam</option>
                                                                <option value="TandoAllahyar">Tando Allahyar</option>
                                                                <option value="TandoMuhammadKhan">Tando Muhammad Khan</option>
                                                                <option value="Taxila">Taxila</option>
                                                                <option value="Vehari">Vehari</option>
                                                                <option value="WahCantonment">Wah Cantonment</option>
                                                                <option value="Wazirabad">Wazirabad</option>
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
                                    <h2 data-animation="fadeInUp" data-delay=".4s">LCL & FCL</h2>
                                    <p data-animation="fadeInUp" data-delay=".6s">Logistics Excellence Beyond Boundaries</p>
                                    <a href="support.php" class="btn red-btn" data-animation="fadeInUp" data-delay=".8s" data-animation="fadeInUp">Contact US</a>
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
                                    <p data-animation="fadeInUp" data-delay=".6s">Logistics Excellence Beyond Boundaries</p>
                                    <a href="support.php" class="btn red-btn" data-animation="fadeInUp" data-delay=".8s" data-animation="fadeInUp">Contact US</a>
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
                                    <p data-animation="fadeInUp" data-delay=".6s">Logistics Excellence Beyond Boundaries</p>
                                    <a href="support.php" class="btn red-btn" data-animation="fadeInUp" data-delay=".8s" data-animation="fadeInUp">Contact US</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- slider-area-end -->

        <!-- choose-area -->
        <section class="choose-area pt-110 pb-80">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-10">
                        <div class="s-section-title text-center mb-60">
                            <h2>Why should you choose us?</h2>
                            <p>Choose us for seamless logistics solutions: Reliable service, timely deliveries, cost-effective shipping, advanced technology, global network, and dedicated customer support. Your logistics partner of choice.</p>
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
                                    <h3><a href="#">Air Freight</a></h3>
                                </div>
                                <div class="choose-content">
                                    <p>Swift, efficient, and global: Air freight delivers your cargo with speed and reliability, anytime, anywhere.</p>
                                    <!-- <a href="#"><i class="fas fa-arrow-alt-circle-right"></i> Read More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-choose mb-40">
                                <div class="choose-head">
                                    <div class="choose-icon mb-25">
                                        <img src="img/icon/choose_img02.png" alt="img">
                                    </div>
                                    <h3><a href="#">Ocean Freight</a></h3>
                                </div>
                                <div class="choose-content">
                                    <p>Efficient, cost-effective, and reliable ocean freight solutions for your global shipping needs. Seamlessly crossing seas.</p>
                                    <!-- <a href="#"><i class="fas fa-arrow-alt-circle-right"></i> Read More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-choose mb-40">
                                <div class="choose-head">
                                    <div class="choose-icon mb-25">
                                        <img src="img/icon/choose_img03.png" alt="img">
                                    </div>
                                    <h3><a href="#">Consolidation</a></h3>
                                </div>
                                <div class="choose-content">
                                    <p>Streamline operations, optimize resources, and enhance efficiency for a more synchronized business approach.</p>
                                    <!-- <a href="#"><i class="fas fa-arrow-alt-circle-right"></i> Read More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-choose mb-40">
                                <div class="choose-head">
                                    <div class="choose-icon mb-25">
                                        <img src="img/icon/choose_img04.png" alt="img">
                                    </div>
                                    <h3><a href="#">Deconsolidation</a></h3>
                                </div>
                                <div class="choose-content">
                                    <p>Breaking down shipments for efficient distribution, optimizing supply chains, and reducing transit times.</p>
                                    <!-- <a href="#"><i class="fas fa-arrow-alt-circle-right"></i> Read More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-choose mb-40">
                                <div class="choose-head">
                                    <div class="choose-icon mb-25">
                                        <img src="img/icon/choose_img05.png" alt="img">
                                    </div>
                                    <h3><a href="Drayage.php">Drayage</a></h3>
                                </div>
                                <div class="choose-content">
                                    <p>Efficient short-distance transport, connecting ports and terminals to streamline your supply chain.</p>
                                    <!-- <a href="#"><i class="fas fa-arrow-alt-circle-right"></i> Read More</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="single-choose mb-40">
                                <div class="choose-head">
                                    <div class="choose-icon mb-25">
                                        <img src="img/icon/choose_img06.png" alt="img">
                                    </div>
                                    <h3><a href="#">End to End Logistics</a></h3>
                                </div>
                                <div class="choose-content">
                                    <p>Seamless solutions from pickup to delivery – your trusted partner for end-to-end logistics excellence.</p>
                                    <!-- <a href="#"><i class="fas fa-arrow-alt-circle-right"></i> Read More</a> -->
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
                            <p>We streamline your supply chain with expert logistics solutions, ensuring seamless transportation, warehousing, and distribution for your business success.</p>
                        </div>
                    </div>
                </div>
                <div class="services-wrapper">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="s-single-services mb-50">
                                <div class="services-thumb mb-25">
                                    <a><img src="img/images/s_services_img01.jpg" alt="img"></a>
                                </div>
                                <div class="s-services-content">
                                    <!-- <h6></h6> -->
                                    <h3><a>Consolidation</a></h3>
                                    <!-- <p>Express delivery is an innovativ service is effective logistics solutio for
                                        delivery of small cargo service.</p> -->
                                    <a href="support.php" class="btn red-btn">LET US HELP</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="s-single-services mb-50">
                                <div class="services-thumb mb-25">
                                    <a href="support.php"><img src="img/images/s_services_img02.jpg" alt="img"></a>
                                </div>
                                <div class="s-services-content">
                                    <!-- <h6>Inspiration Service</h6> -->
                                    <h3><a>Deconsolidation</a></h3>
                                    <!-- <p>Express delivery is an innovativ service is effective logistics solutio for -->
                                    <!-- delivery of small cargo service.</p> -->
                                    <a href="support.php" class="btn red-btn">LET US HELP</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="s-single-services mb-50">
                                <div class="services-thumb mb-25">
                                    <a href="support.php"><img src="img/images/s_services_img03.jpg" alt="img"></a>
                                </div>
                                <div class="s-services-content">
                                    <!-- <h6>Discover Locations</h6> -->
                                    <h3><a>Door-Door Delivery</a></h3>
                                    <!-- <p>Express delivery is an innovativ service is effective logistics solutio for
                                        delivery of small cargo service.</p> -->
                                    <a href="support.php" class="btn red-btn">LET US HELP</a>
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
                                <p>Trust us with your international cargo needs. Our seasoned experts manage every aspect, from customs clearance to timely delivery, ensuring your goods reach their global destinations efficiently and securely.</p>
                                <a href="support.php" class="btn red-btn">Get
                                    Fare Rate</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay-title paroller" data-paroller-factor="0.15" data-paroller-factor-lg="0.15" data-paroller-factor-md="0.15" data-paroller-factor-sm="0.15" data-paroller-type="foreground" data-paroller-direction="horizontal">Cargo</div>
        </section>
        <!-- services-area-end -->



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
                                    <p>Efficient transport for timely cargo deliveries.</p>
                                </div>
                            </div>
                            <div class="single-delivery-services mb-70 pr-75">
                                <div class="ds-icon order-0 order-md-2">
                                    <img src="img/icon/ds_icon02.png" alt="icon">
                                </div>
                                <div class="ds-content text-center text-sm-left text-md-right">
                                    <h5>Satisfied clients</h5>
                                    <p>Exceeding expectations, leaving clients delighted always</p>
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
                                    <p>Global shipping, doorstep delivery, worldwide connections</p>
                                </div>
                            </div>
                            <div class="single-delivery-services mb-70 pl-75">
                                <div class="ds-icon">
                                    <img src="img/icon/ds_icon05.png" alt="icon">
                                </div>
                                <div class="ds-content">
                                    <h5>Heavy Boxes Cargo</h5>
                                    <p>Robust cargo solution for heavy shipments.</p>
                                </div>
                            </div>
                            <div class="single-delivery-services mb-70 pl-75">
                                <div class="ds-icon">
                                    <img src="img/icon/ds_icon06.png" alt="icon">
                                </div>
                                <div class="ds-content">
                                    <h5>Custom Brokerage</h5>
                                    <p>Streamlining global trade through expert logistics</p>
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
                                <!-- <p>Express delivery is an innaiv service effective logistics solution</p> -->
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
                                <!-- <p>Express delivery is an innaiv service effective logistics solution</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="single-fact mb-50">
                            <div class="fact-icon mb-25">
                                <i class="flaticon-user"></i>
                            </div>
                            <div class="fact-content">
                                <h4><span class="count">4</span> k</h4>
                                <h6>Happy Customer</h6>
                                <!-- <p>Express delivery is an innaiv service effective logistics solution</p> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="single-fact mb-50">
                            <div class="fact-icon mb-25">
                                <i class="flaticon-like"></i>
                            </div>
                            <div class="fact-content">
                                <h4><span class="count">5</span> Yr</h4>
                                <h6>Year Experience</h6>
                                <!-- <p>Express delivery is an innaiv service effective logistics solution</p> -->
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
                                <a href="index.php"><img src="img/logo/wlogo.png" alt="img"></a>
                            </div>
                            <div class="footer-text">
                                <p>Your trusted partner in global logistics, offering cost-effective LCL solutions with a commitment to sustainability and excellence.
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
                                <h5>USEFUL LINKS</h5>
                            </div>
                            <div class="fw-link">
                                <ul>
                                    <li><a href="about-us.php"><i class="fas fa-caret-right"></i> About us</a></li>
                                    <li><a href="Air Freight.php"><i class="fas fa-caret-right"></i> Air Freight</a></li>
                                    <li><a href="Ocean Freight.php"><i class="fas fa-caret-right"></i> Ocean Freight</a></li>
                                    <li><a href="Drayage.php"><i class="fas fa-caret-right"></i> Drayage</a></li>
                                    <li><a href="support.php"><i class="fas fa-caret-right"></i> Support</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget mb-50">
                            <div class="fw-title mb-30">
                                <h5>Contact Us</h5>
                            </div>
                            <div class="f-rc-post">
                                <ul>
                                    <li>

                                        <div class="f-rc-content">
                                            <span>Call us</span>
                                            <h5><a>+1-469-200-6603</a></h5>
                                        </div>
                                    </li>
                                    <li>

                                        <div class="f-rc-content">
                                            <span>Email us</span>
                                            <h5><a>info@nilcl.com</a></h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6">
                        <div class="footer-widget mb-50">
                            <div class="fw-title mb-30">
                                <h5>Address</h5>
                            </div>
                            <div class="f-support-content">
                                <p>100 S Juniper Street, 3rd Floor, Philadelphia, PA 19087
                                </p>
                                <!-- <a href="#" class="f-download-btn"><img src="img/images/f_download_btn01.png" alt="img"></a>
                                <a href="#" class="f-download-btn"><img src="img/images/f_download_btn02.png" alt="img"></a> -->
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