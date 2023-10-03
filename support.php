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

if (isset($_POST["submit2"])) {

    $fc2 = $_POST["fromcountry2"];
    $fa2 = $_POST["fromaddress2"];
    $tc2 = $_POST["tocountry2"];
    $ta2 = $_POST["toaddress2"];
    $size2 = $_POST["Size2"];
    $qty2 = $_POST["qty2"];
    $weight2 = $_POST["weight2"];
    $ft2 = $_POST["freighttype2"];
    $category2 = $_POST["category2"];
    $email2 = $_POST["email2"];
    // Capture more form field values as needed

    $ins = "INSERT INTO inquiry (fromcountry, fromaddress, tocountry, toaddress, Size, qty, weight, freighttype, category, email, status) 
                VALUES ('$fc2', '$fa2', '$tc2', '$ta2', '$size2', '$qty2', '$weight2', '$ft2', '$category2', '$email2', 'to be inquired')";

    $query1 = mysqli_query($connection, $ins);

    if ($query1) {
        $emailAddress = 'moaiz599@gmail.com';
        $subject = 'Test email';
        $body = "From country: $fc2 \n\n From address: $tc2";

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
                                        <li><a href="index.php">Home</a>
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
                                    <li class="active"><a href="support.php">Support</a></li>
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
        <div class="breadcrumb-area breadcrumb-bg s-breadcrumb-bg">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumb-content">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="dots"></li>
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
                                    <li class="dots2"></li>
                                </ol>
                            </nav>
                            <h2>support</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb-area-end -->
        <style>
            body {
                font-family: Arial, sans-serif;
            }

            .container1 {
                max-width: 500px;
                margin: 0 auto;
                padding: 20px;
                background-color: #f7f7f7;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            }

            .form-group {
                margin-bottom: 15px;
            }

            label {
                display: block;
                font-weight: bold;
            }

            input[type="text"],
            input[type="email"],
            select {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            select {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            button {
                background-color: #007BFF;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }

            button:hover {
                background-color: #0056b3;
            }
        </style>
        <!-- support-area -->
        <div class="support-area support-bg pt-110 pb-120">
            <div class="container1">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-10">
                        <div class="s-section-title text-center mb-60">
                            <h2>Get In Touch</h2>
                            <p>Express delivery is an innovative service is effective logistics solution for the delivery of small
                                cargo. This service is useful for companies various.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="support-form text-center">
                            <form action="support.php" method="POST">
                                <!-- <div class="form-group">
                                    <label for="full-name">Full Name:</label>
                                    <input type="text" id="full-name" name="fullname" required>
                                </div> -->
                                <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="email" id="email" name="email2" required>
                                </div>
                                <div class="form-group">
                                    <label for="from-state">From State:</label>
                                    <select name="fromcountry2" type="text" required="required" id="from-country" class="custom-select">
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
                                <div class="form-group">
                                    <label for="from-address">From Address:</label>
                                    <input type="text" id="from-address" name="fromaddress2" required>
                                </div>
                                <div class="form-group">
                                    <label for="to-city">To City:</label>
                                    <select name="tocountry2" type="text" required="required" id="to-country" placeholder="Your Destination Address" class="custom-select">
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
                                <div class="form-group">
                                    <label for="to-address">To Address:</label>
                                    <input type="text" id="to-address" name="toaddress2" required>
                                </div>
                                <div class="form-group">
                                    <label for="size">Size:</label>
                                    <select class="custom-select" id="packaging-size" name="Size2">
                                        <option selected="">Standart Size ( 42” x 36” )</option>
                                        <option>Standart Size ( 82” x 86” )</option>
                                        <option>Standart Size ( 102” x 165” )</option>
                                        <option>Standart Size ( 110” x 205” )</option>
                                        <option>Standart Size ( 120” x 250” )</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="quantity">Quantity:</label>
                                    <input type="number" id="quantity" name="qty2" required>
                                </div>
                                <div class="form-group">
                                    <label for="weight">Weight:</label>
                                    <select id="weight" name="weight2">
                                        <option value="kg20">20 KG</option>
                                        <option value="kg30">30 KG</option>
                                        <option value="kg50">50 KG</option>
                                        <option value="kg80">80 KG</option>
                                        <option value="kg100">100 KG</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="freight-type">Freight Type:</label>
                                    <select id="freight-type" name="freighttype2">
                                        <option value="air-freight">Air Freight</option>
                                        <option value="ocean-freight">Ocean Freight</option>
                                        <option value="drayage">Drayage</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="category">Category:</label>
                                    <select id="category" name="category2">
                                        <option value="package">Package</option>
                                        <option value="envelope">Envelope</option>
                                        <option value="box">Box</option>
                                        <option value="pallets">Pallets</option>
                                    </select>
                                </div>
                                <!-- <div class="form-group">
                                    <label for="contact-number">Contact Number:</label>
                                    <input type="tel" id="contact-number" name="contactnumber" required>
                                </div> -->
                                <div class="form-group">
                                    <button type="submit" name="submit2">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- support-area-end -->

        <!-- contact-area -->
        <section class="contact-area primary-bg pt-70 pb-15">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-contact-box mb-50">
                            <div class="contact-icon mb-30">
                                <img src="img/icon/contact_box_icon01.png" alt="img">
                            </div>
                            <div class="contact-content">
                                <h5>Find Location</h5>
                                <span>100 S juniper Street, 3rd Floor Philadelphia, PA 19107</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-contact-box mb-50">
                            <div class="contact-icon mb-30">
                                <img src="img/icon/contact_box_icon02.png" alt="img">
                            </div>
                            <div class="contact-content">
                                <h5>Phone Number</h5>
                                <span>+1 469-200-6603</span>
                                <!-- <span>+1 212-226-3126</span> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-contact-box mb-50">
                            <div class="contact-icon mb-30">
                                <img src="img/icon/contact_box_icon03.png" alt="img">
                            </div>
                            <div class="contact-content">
                                <h5>email informing</h5>
                                <span>info@nilcl.com</span>
                                <!-- <span>info@startesk@com</span> -->
                            </div>
                        </div>
                    </div>
                    <!-- <div class="col-lg-3 col-sm-6">
                            <div class="single-contact-box mb-50">
                                <div class="contact-icon mb-30">
                                    <img src="img/icon/contact_box_icon04.png" alt="img">
                                </div>
                                <div class="contact-content">
                                    <h5>email informing</h5>
                                    <span>99 NY Address street, Bronk Center Brooklyn</span>
                                </div>
                            </div>
                        </div> -->
                </div>
            </div>
        </section>
        <!-- contact-area-end -->

        <!-- contact-map -->
        <div id="contact-page-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d764.6526220134207!2d-75.16398705289888!3d39.95010157776099!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c6c62f74b66149%3A0x9bade1113797ecc2!2sHale%20Building!5e0!3m2!1sen!2s!4v1696256188495!5m2!1sen!2s" width="2000" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <!-- contact-map-end -->

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
                                <a href="index.php"><img src="img/logo/wlogo.png" alt="img"></a>
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
                            <p>Copyright© <span>Nurture Int'l LCL </span> | All Rights Reserved</p>
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
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCo_pcAdFNbTDCAvMwAD19oRTuEmb9M50c"></script> -->
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>
    <!-- <script>
        function basicmap() {
            // Basic options for a simple Google Map
            // For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
            var mapOptions = {
                // How zoomed in you want the map to start at (always required)
                zoom: 11,
                scrollwheel: false,
                // The latitude and longitude to center the map (always required)
                center: new google.maps.LatLng(40.058629, -75.408947), // New York
                // This is where you would paste any style found on Snazzy Maps.
                styles: [{
                    featureType: "administrative",
                    elementType: "labels.text.fill",
                    stylers: [{
                        color: "#444444"
                    }]
                }, {
                    featureType: "landscape",
                    elementType: "all",
                    stylers: [{
                        color: "#f2f2f2"
                    }]
                }, {
                    featureType: "poi",
                    elementType: "all",
                    stylers: [{
                        visibility: "off"
                    }]
                }, {
                    featureType: "road",
                    elementType: "all",
                    stylers: [{
                        saturation: -100
                    }, {
                        lightness: 45
                    }]
                }, {
                    featureType: "road.highway",
                    elementType: "all",
                    stylers: [{
                        visibility: "simplified"
                    }]
                }, {
                    featureType: "road.arterial",
                    elementType: "labels.icon",
                    stylers: [{
                        visibility: "off"
                    }]
                }, {
                    featureType: "transit",
                    elementType: "all",
                    stylers: [{
                        visibility: "off"
                    }]
                }, {
                    featureType: "water",
                    elementType: "all",
                    stylers: [{
                        color: "#46bcec"
                    }, {
                        visibility: "on"
                    }]
                }]
            };
            // Get the HTML DOM element that will contain your map
            // We are using a div with id="map" seen below in the <body>
            var mapElement = document.getElementById('contact-page-map');

            // Create the Google Map using our element and options defined above
            var map = new google.maps.Map(mapElement, mapOptions);

            // Let's also add a marker while we're at it
            var marker = new google.maps.Marker({
                position: new google.maps.LatLng(40.058629, -75.408947),
                map: map,
                icon: 'img/icon/map_icon.png',
                title: 'Makplus'
            });
        }
        if ($('#contact-page-map').length != 0) {
            google.maps.event.addDomListener(window, 'load', basicmap);
        }
    </script> -->
</body>

</html>