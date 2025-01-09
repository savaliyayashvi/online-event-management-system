<?php
session_start();

$connecton = mysqli_connect("localhost", "root", "", "temp");
?>


<!DOCTYPE html>
<html lang="en">


    <!-- Mirrored from jituchauhan.com/real-wed/realwed/supplier-photographer-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:31:10 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>RealWed | Wedding Vendor & Supplier Directory HTML Template - Supplier Photographer List </title>
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
                            <h1 class="page-title">Supplier Photographers</h1>
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
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Home</a></li>
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Supplier List</a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">Supplier Photographer List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- page breadcrumb -->
        </div>
        <!-- /.page-header -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <?php
                    $connection = mysqli_connect("localhost", "root", "", "temp");
                    $q = mysqli_query($connection, 'select * from vendor_det_tbl');
                    while ($row = mysqli_fetch_array($q)) {
                        ?>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="vendor-thumbnail">
                                <!-- Vendor thumbnail -->
                                <div class="vendor-img">
                                    <!-- Vendor img -->
                                    <a href="vendordetailslist.php?eid=<?php echo "{$row['ven_id']}"; ?>" name="vename"><?php echo "<img src='upload/{$row['ven_photo']}' alt='' class='img-fluid'>"; ?></a>
                                    <div class="wishlist-sign"><a href="./vendordetailslist.php" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                                </div>
                                <!-- /.Vendor img -->
                                <div class="vendor-content">
                                    <!-- Vendor Content -->
                                    <h2 class="vendor-title"><a href="vendordetailslist.php?eid=<?php echo "{$row['ven_id']}"; ?>" class="title"><?php echo "{$row['ven_name']}"; ?></a></h2>
                                    <p class="vendor-address"><?php echo "{$row['ven_address']}"; ?></p>
                                </div>
                                <!-- /.Vendor Content -->
                                <div class="vendor-meta">
                                    <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="vendor-price">
                                            <a href="vendordetailslist.php?eid=<?php echo "{$row['ven_id']}"; ?>">View Details</a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                    ?>

                </div>
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="pagination justify-content-center">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link " href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- social-media-section -->
        <div class="social-media-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h3 class="text-white mb0 mt10">Would you like to connect with us</h3>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- /.social-media-section -->
        <!-- footer-section -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12">
                        <!-- footer-widget -->
                        <div class="footer-widget">
                            <a href="#"><img src="images/footer-logo.png" alt="" class="mb20"></a>
                            <p class="mb10">Vestibulum ante elit, convallis quis nibh in, vulputate rhoncus massa. In hac habitasse platea dictumst.</p>
                            <p>In hac habitasse platea dictumst simple dummy content here.</p>
                        </div>
                    </div>
                    <!-- /.footer-widget -->
                    <!-- footer-widget -->
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h3 class="widget-title">
                                Contact Address
                            </h3>
                            <p>4998 Elk Creek Road Canton,
                                <br> GA 30114</p>
                            <p class="mb0 text-default">+0-800-1234-123</p>
                            <p class="mb0 text-default">info@realwed.com</p>
                        </div>
                    </div>
                    <!-- /.footer-widget -->
                    <!-- footer-widget -->
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h3 class="widget-title">
                                About Company
                            </h3>
                            <ul class="listnone">
                                <li><a href="#">About us</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Pricing Plan</a></li>
                                <li><a href="#">Meet The Team</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.footer-widget -->
                    <!-- /.footer-widget -->
                    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h3 class="widget-title">
                                List you Business
                            </h3>
                            <p>Are you vendor ? List your venue and service get more from listing business.</p>
                            <a href="#" class="btn btn-default">List your Business</a>
                        </div>
                    </div>
                    <!-- /.footer-widget -->
                </div>
            </div>
        </div>
        <!-- tiny-footer-section -->
        <div class="tiny-footer">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-right">
                        <p>© 2018 RealWed. All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.tiny-footer-section -->
        <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <script src="js/custom-script.js"></script>
        <script src="js/return-to-top.js"></script>
    </body>


    <!-- Mirrored from jituchauhan.com/real-wed/realwed/supplier-photographer-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:31:13 GMT -->
</html>