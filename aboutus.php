<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "temp");
?>

<!DOCTYPE html>
<html lang="en">


    <!-- Mirrored from jituchauhan.com/real-wed/realwed/supplier-dresses-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:31:01 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>About Us</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        <!-- FontAwesome icon -->
        <link href="fontawesome/css/fontawesome-all.css" rel="stylesheet">
        <!-- Fontello icon -->
        <link href="fontello/css/fontello.css" rel="stylesheet">
        <!-- Favicon icon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
        <!-- Style CSS -->
        <link href="css/style.css" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
              <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
              <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>

    <body>
        <!-- header -->
        <?php
        include './themes/header.php';
        ?>
        <!-- /.header -->
        <!-- page-header -->
        <div class="page-header">
            <div class="container">
                <div class="row">
                    <!-- page caption -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="page-caption">
                            <h1 class="page-title">About Us</h1>
                        </div>
                    </div>
                    <!-- /.page caption -->
                </div>
            </div>
            <!-- page caption -->
            <div class="page-breadcrumb">
                <div class="container">

                    <div class="row">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="home.php" class="breadcrumb-link">Home</a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">About us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- page breadcrumb -->
        </div>
        <!-- /.page-header -->
<div class="space-medium">
            <div class="container">
                <div class="row">
                    <!--  about-details  -->
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 mb100">
                        <img src="images/about-img-4.jpg" alt="" class="img-fluid rounded">
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                        <div class="p-5">
                            <h2>Who we are</h2>
                            <p class="lead">Tej Shah is the largest and most trusted global directory connecting engaged couples with local wedding professionals.</p>
                            <p>Maecenas semper dolor metus, a convallis ipsum condimentum ras eros ex, euismod vitae congue ullamcorper id ligula. Maecenas semper dolor metusm ras eros ex, euismod vitae congue ullamcorper id ligula. </p>

                            <a href="#" class="btn btn-outline-default">Read More</a>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb30">
                        <div class="feature card text-center">
                            <div class="card-body">
                                <div class="feature-icon circle-second-icon circle-xl bg-light text-default mr-auto ml-auto ">
                                    <i class="fas fa-rocket fa-2x"></i>
                                </div>
                                <h3>Our Mission</h3>
                                <p class="feature-content">Quisque consectauris elurpis faucibus dictum sium mi egetallis aliquam metus ipsum volutpat nisperdi elibero.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb30">
                        <div class="feature card text-center">
                            <div class=" card-body ">
                                <div class="feature-icon circle-second-icon circle-xl bg-light text-default mr-auto ml-auto ">
                                    <i class="fas fa-eye fa-2x"></i>
                                </div>
                                <h3>Our Vision</h3>
                                <p class="feature-content">Maecenas semper dolor metus, a convallis ipsum condimentum ras eros ex, euismod vitae congue ullamcorper id ligula. </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12 mb30">
                        <div class="feature card text-center">
                            <div class=" card-body ">
                                <div class="feature-icon circle-second-icon circle-xl bg-light text-default mr-auto ml-auto ">
                                    <i class="fas fa-award fa-2x"></i>
                                </div>
                                <h3>Our Achievement</h3>
                                <p class="feature-content">Maecenas semper dolor metus, a convallis ipsum condimentum ras eros ex, euismod vitae congue ullamcorper id ligula. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="space-small counter-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="counter text-center">
                            <h2 class="timer count-title count-number" data-to="50000" data-speed="1500">1</h2>
                            <h3 class="count-text">Vendors</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="counter text-center">
                            <h2 class="timer count-title" data-to="150" data-speed="1500">1</h2>
                            <h3 class="count-text ">Employees</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="counter  text-center">
                            <h2 class="timer count-title" data-to="5000" data-speed="1500">1</h2>
                            <h3 class="count-text ">Reviews</h3>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                        <div class="counter text-center">
                            <h2 class="timer count-title" data-to="9" data-speed="1500">1</h2>
                            <h3 class="count-text ">Offices</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- /.venue-categoris-section-->
        <div class="space-medium">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-2 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12 col-12 text-center">
                        <div class="section-title">
                            <h2>Our Trusted Partners</h2>
                            <p>Customer feedback examples are essential to the success of a business. </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb30">
                        <a href="#">
                            <div class="client-logo">
                                <img src="images/client-logo-1.png" alt="" class="img-fluid">
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb30">
                        <a href="#">
                            <div class="client-logo">
                                <img src="images/client-logo-2.png" alt="" class="img-fluid">
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb30">
                        <a href="#">
                            <div class="client-logo">
                                <img src="images/client-logo-3.png" alt="" class="img-fluid">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb30">
                        <a href="#">
                            <div class="client-logo">
                                <img src="images/client-logo-4.png" alt="" class="img-fluid">
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb30">
                        <a href="#">
                            <div class="client-logo">
                                <img src="images/client-logo-5.png" alt="" class="img-fluid">
                            </div>
                        </a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 mb30">
                        <a href="#">
                            <div class="client-logo">
                                <img src="images/client-logo-6.png" alt="" class="img-fluid">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="cta-second">
            <div class="container">
                <div class="row">
                    <div class="offset-xl-3 col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="cta-second-content">
                            <h2 class="text-white">Start Planning for Free</h2>
                            <p>Tej Shah will connect your wedding with businessess that are available on your wedding date, meet your budgets, are in-line with your style and much more. Save time and let venorhub recommend the best wedding vendors in india for your Wedding Day!
                            </p>
                            <a href="#" class="btn btn-default btn-lg mb30">Plan for Free Today</a>
                            <p>Already have an account? <a href="#" class="text-white">Login here</a></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.social-media-section -->
        <!-- footer-section -->
         
        <!-- tiny-footer-section -->
        <?php
        include './themes/footer.php';
        ?>
        <!-- /.tiny-footer-section -->
        <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <script src="js/custom-script.js"></script>
        <script src="js/return-to-top.js"></script>
    </body>


    <!-- Mirrored from jituchauhan.com/real-wed/realwed/supplier-dresses-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:31:04 GMT -->
</html>