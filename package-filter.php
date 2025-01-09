<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "temp");
?>
<!DOCTYPE html>
<html lang="en">


    <!-- Mirrored from jituchauhan.com/real-wed/Tej Shah/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:30:44 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Events </title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">
        <!-- FontAwesome icon -->
        <link href="fontawesome/css/fontawesome-all.css" rel="stylesheet">
        <!-- Fontello icon -->
        <link href="fontello/css/fontello.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="wedding-icon-font/flaticon.css">
        <!-- OwlCarosuel CSS -->
        <link href="css/owl.carousel.css" type="text/css" rel="stylesheet">
        <link href="css/owl.theme.default.css" type="text/css" rel="stylesheet">
        <!-- Favicon icon -->
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
        <link rel="stylesheet" type="text/css" href="css/dzsparallaxer.css">
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
        
<div class="page-header">
            <div class="container">
                <div class="row">
                    <!-- page caption -->
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="page-caption">
                            <h1 class="page-title">Packages</h1>
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
                               
                                <li class="breadcrumb-item active text-white" aria-current="page">Packages</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- page breadcrumb -->
        </div>

        <div class="space-ex-large">

            <div class="container-fluid">
                <div class="venue-thumbnail-carousel">
                    <div class="row">
                        <?php
                       /* $q = mysqli_query($connection, "SELECT
    `package_tbl`.`package_id`
    , `package_tbl`.`package_name`
    , `package_tbl`.`package_details`
    , `package_tbl`.`package_price`    
    , `package_tbl`.`Event_id`
    , `event_tb`.`Event_name`
    , `vendor_det_tbl`.`ven_name`
FROM
    `package_tbl`
    INNER JOIN `vendor_det_tbl` 
        ON (`package_tbl`.`ven_id` = `vendor_det_tbl`.`ven_id`)
    INNER JOIN `event_tb` 
        ON (`package_tbl`.`Event_id` = `event_tb`.`Event_id`)
     Where `package_tbl`.`Event_id` = {$_GET['eid']}
ORDER BY `package_tbl`.`package_id` ASC;") or die(mysqli_error($connection)); */
                        
                        $q = mysqli_query($connection, "SELECT * from `package_tbl` where  `Event_id` = '{$_GET['eid']}' ");
                        while ($row = mysqli_fetch_array($q)) {
                            ?>
                            <div class="col-xl-3">
                                <div class="vendor-thumbnail-second vendor-thumbnail">
                                    <!-- Vendor thumbnail -->
                                    <div class="vendor-img">
                                        <!-- Vendor img -->
                                        <a href="#" class=""><img src="images/vendor-img-4.jpg" alt="" class="img-fluid"></a>
                                        <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                                        <div class="listing-categories">
                                            <div class="vendor-category"><a href="#"><i class="flaticon-038-camera"></i></a></div>
                                        </div>
                                    </div>
                                    <!-- /.Vendor img -->
                                    <div class="vendor-content">
                                        <!-- Vendor Content -->
                                        <h2 class="vendor-title"><a href="package-details.php?eid=<?php echo $row['package_id'] ?>" class="title"><?php echo $row['package_name']; ?></a></h2>
                                        <div class="vendor-rating-block">
                                            <span class="rating-star">
                                                <i class="fa fa-star rated"></i>
                                                <i class="fa fa-star rated"></i>
                                                <i class="fa fa-star rated"></i>
                                                <i class="fa fa-star rated"></i>
                                                <i class="fa fa-star rate-mute"></i>
                                            </span>
                                            <span class="rating-count vendor-text"><span class="rating-badge">4.5</span></span>
                                        </div>
                                    </div>
                                    <!-- /.Vendor Content -->

                                </div>
                                <!-- /.Vendor thumbnail -->
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.venue-categoris-section-->


        <?php
        include'./themes/footer.php';
        ?>
        <!-- tiny-footer-section -->
        <!-- /.tiny-footer-section -->
        <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <!-- owl-carousel js -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- nice-select js -->
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/fastclick.js"></script>
        <script src="js/custom-script.js"></script>
        <script src="js/return-to-top.js"></script>
        <script src="js/dzsparallaxer.js"></script>

    </body>


    <!-- Mirrored from jituchauhan.com/real-wed/Tej Shah/index-5.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:30:47 GMT -->
</html>