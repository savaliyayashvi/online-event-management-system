



<?php
session_start();
$connecton = mysqli_connect("localhost", "root", "", "temp");
$editid = $_GET['eid'];
$selectq = mysqli_query($connecton, "select * from vendor_det_tbl where ven_id='{$editid}'")or die(mysqli_error($connecton));
$selectrow = mysqli_fetch_array($selectq);
?>
<!DOCTYPE html>
<html lang="en"


    <!-- Mirrored from jituchauhan.com/real-wed/realwed/list-single-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:30:54 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Events | Vendor Details </title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
        <!-- FontAwesome icon -->
        <link href="fontawesome/css/fontawesome-all.css" rel="stylesheet">
        <!-- Fontello icon -->
        <link href="fontello/css/fontello.css" rel="stylesheet">
        <!--jquery-ui  -->
        <link href="css/jquery-ui.css" rel="stylesheet">
        <!--jquery-rateyo  -->
        <link href="css/jquery.rateyo.css" rel="stylesheet">
        <!-- Template magnific popup gallery -->
        <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
        <!-- OwlCarosuel CSS -->
        <link href="css/owl.carousel.css" type="text/css" rel="stylesheet">
        <link href="css/owl.theme.default.css" type="text/css" rel="stylesheet">
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
        <div class="list-single-carousel">

            <div class="owl-carousel owl-theme owl-slider">
                <div class="item">
                    <img src="images/listsingle-slider-img-1.jpg" alt="">
                </div>
                <div class="item">
                    <img src="images/listsingle-slider-img-2.jpg" alt="">
                </div>
                <div class="item">
                    <img src="images/listsingle-slider-img-3.jpg" alt="">
                </div>
                <div class="item">
                    <img src="images/listsingle-slider-img-4.jpg" alt="">
                </div>



            </div>
        </div>
        <div class="list-single-second">
            <div class="container">
                <div class="">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
                            <div class="vendor-head text-left">
                                <h2 class="mb10"><?php echo "{$selectrow['ven_name']}"; ?></h2>
                                <p class="vendor-address">
                                    <?php echo "{$selectrow['ven_address']}"; ?>
                                </p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
                            <div class="vendor-head text-xl-right">
                                
                                
                                <a href="#" class="btn-default-wishlist"><i class="fa fa-heart"></i> <span class="pl-1">Add To Wishlist</span> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="vendor-content-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-7 col-sm-12 col-12">
                        <!--vendor-details -->

                        <div class="">
                            <div class="card border card-shadow-none">
                                <h3 class="card-header bg-white">About Wedding Venue</h3>
                                <div class="card-body">
                                    <!--/.vendor-details -->
                                    <!--vendor-description -->
                                    <p><?php echo "{$selectrow['ven_about']}"; ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- /.review-content -->


                    </div>
                    <!-- /.location -->
                    <!-- list-sidebar -->
                    <div class="col-xl-4 col-lg-4 col-md-5 col-sm-12 col-12">
                        <div class="sidebar-venue">

                            <!-- venue-admin -->
                            <div class="vendor-owner-profile mb30">
                                <div class="vendor-owner-profile-head">
                                    <div class="vendor-owner-profile-img"><img src="<?php echo "upload/{$selectrow['ven_photo']}"; ?>" class="rounded-circle" alt=""></div>
                                    <h4 class="vendor-owner-name mb0"><?php echo "{$selectrow['ven_name']}"; ?></h4>
                                </div>
                                <div class="vendor-owner-profile-content">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item"><span class="mr-2 text-default"><i class="fas fa-fw fa-map-marker-alt"></i></span><?php echo "{$selectrow['ven_address']}"; ?></li>
                                        <li class="list-group-item"><span class="mr-2  text-default"><i class="fas fa-fw fa-phone"></i></span><?php echo "{$selectrow['ven_mob_no']}"; ?></li>
                                        <li class="list-group-item"><span class="mr-2 text-default"><i class="fas fa-fw fa-envelope"></i></span><?php echo "{$selectrow['ven_email_id']}"; ?></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- /.venue-admin -->
                            <!-- social-media -->
                            <div class="mb30">
                                <h4 class="widget-title">Share this </h4>
                                <div class="social-icons">
                                    <a target="_blank" href="whatsapp://send?text=<?php echo $_SERVER['REQUEST_URI']; ?>" class="icon-square-outline whatsapp-outline"><i class="fab fa-whatsapp"></i></a>
                                    <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $_SERVER['REQUEST_URI']; ?>" class="icon-square-outline" ><i class="fab fa-facebook "></i></a>
                                    <a target="_blank" href="https://twitter.com/home?status=<?php echo $_SERVER['REQUEST_URI']; ?>" class="icon-square-outline"><i class="fab fa-twitter "></i></a>
                                    <a target="_blank" href="https://plus.google.com/share?url=<?php echo $_SERVER['REQUEST_URI']; ?>" class="icon-square-outline"><i class="fab fa-google "></i></a>
                                    <a target="_blank" href='https://www.linkedin.com/shareArticle?mini=true&url=<?php echo $_SERVER['REQUEST_URI']; ?>' class="icon-square-outline"><i class="fab fa-linkedin "></i></a>
                                    <a target="_blank" href="https://pinterest.com/pin/create/button/?url=<?php echo $_SERVER['REQUEST_URI']; ?>" class="icon-square-outline"><i class="fab fa-pinterest "></i></a>
                                    <a target="_blank" href="http://www.tumblr.com/share/link?url=<?php echo $_SERVER['REQUEST_URI']; ?>" class="icon-square-outline"><i class="fab fa-tumblr "></i></a>
                                    <a target="_blank" href="http://www.reddit.com/submit?url=<?php echo $_SERVER['REQUEST_URI']; ?>" class="icon-square-outline"><i class="fab fa-reddit "></i></a>
                                </div>
                            </div>
                            <!-- /.social-media -->
                        </div>
                    </div>
                </div>
                <!-- /.list-sidebar -->
            </div>
        </div>
        <!-- vendor-thumbnail section -->
        <div class="space-small">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h2>Similar Vendor</h2>
                    </div>
                </div>
                <div class="row">
                    <?php
                    $q = mysqli_query($connecton, "SELECT
    `package_tbl`.`package_id`
    , `package_tbl`.`package_name`
    , `package_tbl`.`package_details`
    , `package_tbl`.`package_price`
    , `event_tb`.`Event_name`
    , `vendor_det_tbl`.`ven_name`
FROM
    `package_tbl`
    INNER JOIN `vendor_det_tbl` 
        ON (`package_tbl`.`ven_id` = `vendor_det_tbl`.`ven_id`)
    INNER JOIN `event_tb` 
        ON (`package_tbl`.`Event_id` = `event_tb`.`Event_id`)
ORDER BY `package_tbl`.`package_id` ASC LIMIT 0,3 ;") or die(mysqli_error($connecton));
                    while ($row = mysqli_fetch_array($q)) {
                        ?>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="vendor-thumbnail">
                                <!-- Vendor thumbnail -->
                                <div class="vendor-img zoomimg">
                                    <!-- Vendor img -->
                                    <a href="package-details.php?eid=<?php echo $row['package_id'] ?>"><img src="images/vendor-img-1.jpg" alt="" class="img-fluid"></a>
                                    <div class="wishlist-sign"><a href="package-details.php?eid=<?php echo $row['package_id'] ?>" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                                </div>
                                <!-- /.Vendor img -->
                                <div class="vendor-content">
                                    <!-- Vendor Content -->
                                    <h2 class="vendor-title"><a href="package-details.php?eid=<?php echo $row['package_id'] ?>" class="title"><?php echo $row['package_name']; ?></a></h2>
                                </div>
                            </div>
                            <!-- /.Vendor thumbnail -->
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
        </div>
        <!-- /.vendor-thumbnail section -->
        <div class="social-media-block">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-6 col-sm-12 col-12">
                        <h3 class="text-white mb0 mt10">Would you like to connect with us</h3>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-6 col-sm-12 col-12 text-right">
                        <div class="social-icons">
                            <a href="#" class="icon-square"><i class="fab fa-facebook-f"></i></a>
                            <a href="#" class="icon-square"><i class="fab fa-twitter"></i> </a>
                            <a href="#" class="icon-square"><i class="fab fa-google-plus-g"></i></a>
                            <a href="#" class="icon-square"><i class="fab fa-instagram"></i></a>
                            <a href="#" class="icon-square"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        <?php
                    include './themes/footer.php';
        
        ?>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
        <script src="js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>

        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/fastclick.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/custom-script.js"></script>
        <!-- popup gallery -->
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script>
            function initMap() {
                var uluru = {
                    lat: 23.0732195,
                    lng: 72.5646902
                };
                var map = new google.maps.Map(document.getElementById('map'), {
                    zoom: 17,
                    center: uluru
                });
                var marker = new google.maps.Marker({
                    position: uluru,
                    map: map,
                    icon: 'images/map-pin.png'
                });
            }
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCvZiQwPXkkIeXfAn-Cki9RZBj69mg-95M&amp;callback=initMap">
        </script>
        <script src="js/jquery.rateyo.min.js"></script>
        <script>
            $(function () {

                $("#rateYo1, #rateYo2, #rateYo3, #rateYo4, #rateYo5 ").rateYo({
                    rating: 3.6
                });

            });
        </script>
        <script src="js/return-to-top.js"></script>
    </body>


    <!-- Mirrored from jituchauhan.com/real-wed/realwed/list-single-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:30:57 GMT -->
</html>