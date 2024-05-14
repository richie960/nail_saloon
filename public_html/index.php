<?php

// Function to get the visitor's IP address
function getVisitorIP() {
    $ip = $_SERVER['REMOTE_ADDR'];

    // If you are using a proxy or load balancer, use the following code to get the real IP
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }

    return $ip;
}

// Function to save IP address to a file
function saveIPToFile($ip) {
    $filename = 'ip_addresses.txt';
    $file = fopen($filename, 'a');
    fwrite($file, $ip . PHP_EOL);
    fclose($file);
}

// Function to read and count unique IP addresses from the file
function countUniqueIPs() {
    $filename = 'ip_addresses.txt';
    if (file_exists($filename)) {
        $ipAddresses = file($filename, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        $uniqueIPs = array_unique($ipAddresses);
        $totalUniqueIPs = count($uniqueIPs);

        return $totalUniqueIPs;
    } else {
        return 0;
    }
}

// Main logic
$visitorIP = getVisitorIP();
saveIPToFile($visitorIP);
$totalUniqueIPs = countUniqueIPs();

// Flagging new user
$newUserMessage = "";
if (in_array($visitorIP, file('ip_addresses.txt', FILE_IGNORE_NEW_LINES))) {
    $newUserMessage = "Welcome back!";
} else {
    $newUserMessage = "Welcome, new user!";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Advance best care</title>
    <meta charset="utf-8">
<meta name="google-site-verification" content="l2xa8FOIvI6j4XwjV3fkOI-J1QujSpo3DdkiedwYxhQ" />

    <link rel="apple-touch-icon" href="https://amedeq.com/images/Bryan-Anderson-mobility.jpg">
    <link rel="shortcut icon" type="image/x-icon" href="https://sherehenation.000webhostapp.com/templatemo_559_zay_shop/image.png">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    <link rel="stylesheet" href="assets/css/custom.css">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
<!--
    
TemplateMo 559 Zay Shop

https://templatemo.com/tm-559-zay-shop

-->


<body>
    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:rentalsmedical@gmail.com">rentalsmedical@gmail.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="https://wa.me/+254722688126?text=from the hospital rentals website">+254722688126</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="index.html">
              <h4>Advanced Best Care</h4>  
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Home</a>
                        </li>
                             <li class="nav-item">
                            <a class="nav-link" href="about.html">
                                about
                            </a>
                        </li>
                    
                        <li class="nav-item">
                            <a class="nav-link" href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                    </a>
                    <a class="nav-icon position-relative text-decoration-none" href="#">
                        <i class="fa fa-fw fa-user text-dark mr-3"></i>
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                    </a>
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

    <!-- Modal -->
    <div class="modal fade bg-white" id="templatemo_search" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="w-100 pt-1 mb-5 text-right">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="" method="get" class="modal-content modal-body border-0 p-0">
                <div class="input-group mb-2">
                    <input type="text" class="form-control" id="inputModalSearch" name="q" placeholder="Search ...">
                    <button type="submit" class="input-group-text bg-success text-light">
                        <i class="fa fa-fw fa-search text-white"></i>
                    </button>
                </div>
            </form>
        </div>
    </div>



    <!-- Start Banner Hero -->
    <div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="1"></li>
            <li data-bs-target="#template-mo-zay-hero-carousel" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="https://sherehenation.000webhostapp.com/templatemo_559_zay_shop/downloaded_image%20(1).png
                            " alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left align-self-center">
                                <h1 class="h1 text-success"><b>💸 Flexible Options:</b></h1>
                                <h3 class="h2">💰 Competitive prices for purchasing.
🚀 Affordable leasing plans.At   Advanced best care, we take pride in providing top-notch medical equipment for your needs. Whether you're looking to purchase or lease, we've got you covered with the finest selection of healthcare essentials. 🌐💉
</h3>
                                <p>
                           <a rel="sponsored" class="text-success" href="https://sherehenation.000webhostapp.com/templatemo_559_zay_shop/downloaded_image%20(1).png" download="downloaded_image.png" target="_blank">DOWNLOAD PRICE LIST </a> click here....

                                
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="https://advancedbestcare.000webhostapp.com/homecarenew.jpg" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1">
Exceptional Home Care Services 🌟</h1>
                                <h3 class="h2">
                                    Discover the warmth of home with Advanced Best Care's excellence! 🏡💖
                                </h3>
                                <p>
                                 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="carousel-item">
                <div class="container">
                    <div class="row p-5">
                        <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                            <img class="img-fluid" src="https://advancedbestcare.000webhostapp.com/ambulance.png" alt="">
                        </div>
                        <div class="col-lg-6 mb-0 d-flex align-items-center">
                            <div class="text-align-left">
                                <h1 class="h1"> Standby Ambulance Services🚑
                                </h1>                        <h3 class="h2">Advanced Best Care ensures immediate, expert care in emergencies. Your safety matters! 🌐✨ 
                                </h3>
                                <p>
                                  
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
            <i class="fas fa-chevron-left"></i>
        </a>
        <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
            <i class="fas fa-chevron-right"></i>
        </a>
    </div>
    <!-- End Banner Hero -->


  <!-- Start Categories of The Month -->
<section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">

            <p></p>
        </div>
    </div>
    <div class="row">
        <!-- Product 1 -->
        <div class="col-12 col-md-4 p-5 mt-3">
                   <a href="#"><img src="https://amedeq.com/images/products/manual-wheelchairs/Heavy-Duty-and-Extra-Heavy-Duty-Wheelchairs.jpg" class="rounded-circle img-fluid border"></a>
                <h5 class="text-center mt-3 mb-3">Heavy Duty
Width 20”- 24”,
sellingprice:20,000 KSH leasingrice:5000 KSH</h5>
                           <p class="text-center"><a class="btn btn-success" href="https://wa.me/+254722688126?text=from the hospital rentals website">Go Shop</a></p>
        </div>

        <!-- Product 2 -->
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="https://amedeq.com/images/products/manual-wheelchairs/Standard-Wheelchairs.jpg" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3">Standard wheelchair
         Width 16”-18”
         Sellingprice
        :12000 KSH ,Leasingprice:3500 KSH</h5>
            <p class="text-center"><a class="btn btn-success" href="https://wa.me/+254722688126?text=from the hospital rentals website">Go Shop</a></p>
        </div>

        <!-- Product 3 -->
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="https://amedeq.com/images/products/manual-wheelchairs/transport.jpg" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3">Manual wheel chair  sellingprice:11000 KSH, Leasingprice: 3000 KSH
              </h5>
            <p class="text-center"><a class="btn btn-success" href="https://wa.me/+254722688126?text=from the hospital rentals website">Go Shop</a></p>
        </div>

        <!-- Repeat the above block for Products 4, 5, 6 -->
        <!-- Product 4 -->
        <div class="col-12 col-md-4 p-5 mt-3">
                     <a href="#"><img src="https://kenya.conec.care/wp-content/uploads/2022/01/Inogen-At-Home-TIFF-1200px-web.png" class="rounded-circle img-fluid border"></a>
                <h5
                class="h5 text-center mt-3 mb-3">Oxygen concentrator 5 ltrs leasingprice:23,000 KSH,10ltrs leasingprice 34,000 KSH 
 </h5>
                       <p class="text-center"><a class="btn btn-success" href="https://wa.me/+254722688126?text=from the hospital rentals website">Go Shop</a></p>
        </div>

        <!-- Product 5 -->
        <div class="col-12 col-md-4 p-5 mt-3">
     <a href="#"><img src="https://amedeq.com/images/products/beds/Bariatric-Home-Style-Hospital-Bed.jpg" class="rounded-circle img-fluid border"></a>
                <h5 class="h5 text-center mt-3 mb-3">
Heavy Duty / Bariatric
Up to 450 lbs weight capacity
,sellingprice: 120,000 KSH, Leasingprice 12,500 KSH
                </h5>
                
            <p class="text-center"><a class="btn btn-success" href="https://wa.me/+254722688126?text=from the hospital rentals website">Go Shop</a></p>
        </div>

        <!-- Product 6 -->
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="https://sherehenation.000webhostapp.com/ventilator%20pump.jfif" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3">Ventilators, 
            Nasal CPAP mask:  10,000 to KES 50,000 depending on features and brand.
              </h5>
            <p class="text-center"><a class="btn btn-success" href="https://wa.me/+254722688126?text=from the hospital rentals website">Go Shop</a></p>
        </div>
  <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="https://sherehenation.000webhostapp.com/patientmonitor.jfif" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3"> Patient monitor SellingPrices can range to KSH :120000 depending on features and brand.</h5>
            <p class="text-center"><a class="btn btn-success" href="https://wa.me/+254722688126?text=from the hospital rentals website">Go Shop</a></p>
        </div>

        <!-- Product 5 -->
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="WhatsApp Image 2024-01-21 at 18.50.02.jpeg
            " class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3">Humidifier
              Bubble humidifiers: KES 2,000 and KES 5,000 ,
              <div></div>
Passover humidifiers:KES 5,000 to KES 15,000 depending on features.</h5>
            <p class="text-center"><a class="btn btn-success" href="https://wa.me/+254722688126?text=from the hospital rentals website">Go Shop</a></p>
        </div>
      <!-- Product 5 -->
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="https://amedeq.com/images/products/scooters/3-Wheel-Scooters.jpg" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3">Standard Scooter
              <div></div>Full-size scooters: KES 8000 to KES 12000 per month.
Portable scooters:  KES 5000 to KES 8000 per month.
</h5>
            <p class="text-center"><a class="btn btn-success" href="https://wa.me/+254722688126?text=from the hospital rentals website">Go Shop</a></p>
        </div>
      <!-- Product 5 -->
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="https://sherehenation.000webhostapp.com/templatemo_559_zay_shop/sc_7000.jpg" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3">SC 7000 SIEMEN
              <div></div>
</h5>
            <p class="text-center"><a class="btn btn-success" href="https://wa.me/+254722688126?text=from the hospital rentals website">Go Shop</a></p>
        </div>
   <!-- Product 5 -->
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="https://sherehenation.000webhostapp.com/templatemo_559_zay_shop/sc8000.jpg" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3">SC 8000 SIEMEN
              <div></div>
</h5>
            <p class="text-center"><a class="btn btn-success" href="https://wa.me/+254722688126?text=from the hospital rentals website">Go Shop</a></p>
            
        </div>
           <!-- Product 5 -->
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="https://sherehenation.000webhostapp.com/templatemo_559_zay_shop/sc9000.jpg" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3">SC 9000 SIEMEN
              <div></div>
</h5>
            <p class="text-center"><a class="btn btn-success" href="https://wa.me/+254722688126?text=from the hospital rentals website">Go Shop</a></p>
            
        </div>
    </div>
</section>
<!-- End Categories of The Month -->



    <<!-- Start Featured Product -->
<section class="bg-light">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
              
                <p></p>
            </div>
        </div>
        <div class="row">
            <!-- Featured Product 1 -->
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="#">
                        <img src="https://amedeq.com/images/products/scooters/3-Wheel-Scooters.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <li>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                            </li>
                            <li class="text-muted text-right"></li>
                        </ul>
                        <a href="#" class="h2 text-decoration-none text-dark"></a>
                        <p class="card-text"></p>
                        <p class="text-muted">Reviews (24)</p>
                        <p class="text-center"><a class="btn btn-success" href="https://wa.me/+254722688126?text=from the hospital rentals website">Go Shop</a></p>
                    </div>
                </div>
            </div>

            <!-- Featured Product 2 -->
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="#">
                        <img src="https://amedeq.com/images/products/power-wheelchairs/Standard-Power-Wheelhairs.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <li>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                                <i class="text-muted fa fa-star"></i>
                            </li>
                            <li class="text-muted text-right"></li>
                        </ul>
                        <a href="#" class="h2 text-decoration-none text-dark"></a>
                        <p class="card-text"></p>
                        <p class="text-muted">Reviews (48)</p>
                        <p class="text-center"><a class="btn btn-success" href="https://wa.me/+254722688126?text=from the hospital rentals website">Go Shop</a></p>
                    </div>
                </div>
            </div>

            <!-- Featured Product 3 -->
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100">
                    <a href="#">
                        <img src="https://amedeq.com/images/showroom.jpg" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <li>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                            </li>
                            <li class="text-muted text-right"></li>
                        </ul>
                        <a href="#" class="h2 text-decoration-none text-dark"></a>
                        <p class="card-text"></p>
                        <p class="text-muted">Reviews (74)</p>
                        <p class="text-center"><a class="btn btn-success" href="https://wa.me/+254722688126?text=from the hospital rentals website">Go Shop</a></p>
                    </div>
                </div>
            </div>

                </div>
            </div>

            <!-- Repeat the above block for additional featured products -->

        </div>
    </div>
</section>
<!-- End Featured Product -->

        <?php

      
                    include 'test.php';
        ?>
 <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-success border-bottom pb-3 border-light logo">Advanced Best care</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li>
                                                        <i class="fas fa-map-marker-alt fa-fw"></i>
                            <a class="text-decoration-none"  href="contact.html"> Nairobi kenya</a>
                
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            <a class="text-decoration-none" href="https://wa.me/+254722688126?text=from the hospital rentals website">+254722688126</a>
                            <br>
                            <br>
                            
click below 👇👇for whatsapp 
<a class="text-decoration-none" href="https://wa.me/+14435274617?text=from the hospital rentals website">+14435274617</a>
                        </li>
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a class="text-decoration-none" href="mailto:rentalsmedical@gmail.com">rentalsmedical@gmail.com</a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                       
 <li><a class="text-decoration-none" href="#">🛋️ High-quality stationary and standard commodes.
</a></li>
 <li><a class="text-decoration-none" href="#">♿ Comfortable wheelchairs with legrests.
</a></li> <li><a class="text-decoration-none" href="#">🚶‍♂️ Walking frames with or without wheels.
</a></li> <li><a class="text-decoration-none" href="#">🛌 State-of-the-art 3-crank electric beds.
</a></li> <li><a class="text-decoration-none" href="#">🌬️ Reliable oxygen concentrators (5L & 10L).
</a></li> <li><a class="text-decoration-none" href="#">🏥 Siemens S9000 and more.
</a></li>
                    </ul>
                </div>

                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Home</a></li>
                        <li><a class="text-decoration-none" href="about.html">About Us</a></li>
                  
                        <li><a class="text-decoration-none" href="#">FAQs</a></li>
                        <li><a class="text-decoration-none" href="#">Contact</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
              
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        <p class="text-left text-light">
                            Copyright &copy;  Advanced best care
                            | Designed by <a rel="sponsored" href="#" target="_blank">richard (kenkaps)</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="assets/js/jquery-1.11.0.min.js"></script>
    <script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/templatemo.js"></script>
    <script src="assets/js/custom.js"></script>
    
    <!-- End Script -->
   
</body>
</head>

</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitor Recognition</title>
   
<style>
    .red-box {
        background-color: #ff0000;
        color: #ffffff;
        padding: 10px;
        text-align: center;
        position: fixed;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        z-index: 999;
        opacity: 1;
        transition: opacity 2s ease-in-out;
    }
</style>

<script>
    // Function to fade out the red box after 5 seconds
    setTimeout(function() {
        document.getElementById("red-box").style.opacity = 0;
    }, 5000);
</script>

<div id="red-box" class="red-box">
    <p><?php echo $newUserMessage; ?></p>
    <p>Your IP address: <?php echo $visitorIP; ?></p>
    <p>Total unique visitors: <?php echo $totalUniqueIPs; ?></p>
</div>

</body>
</html>

</div>
</head>
<body>


</div>
