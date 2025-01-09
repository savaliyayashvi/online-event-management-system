<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "temp");
$filter_count = "";
if (isset($_POST['customization_data'])) {
    $filter_count .= "Your Customization For ";
    $Category_id = $_POST['Category_id'];
    $select = mysqli_query($connection, "select * from category_ms_tb where Category_id='{$Category_id}'") or die(mysqli_error($connecton));
    $select_row = mysqli_fetch_array($select);
    $food_type = $_POST['food_type'];
    $rooms = $_POST['rooms'];
    $person = $_POST['person'];
    $filter_count .= $select_row['Category_name'] . ": ";
    if ($person == 0) {
        if ($food_type == 1) {
            $filter_count .= "For Veg Food Price Per Person is " . $select_row['veg_price'];
        } else {
            $filter_count .= "For Non-Veg Food Price Per Person is " . $select_row['non_veg_price'];
        }
    } else {
        if ($food_type == 1) {
            $filter_count .= "For Veg Food Price Total Price " . $select_row['veg_price'] * $person;
        } else {
            $filter_count .= "For Non-Veg Food Total Price " . $select_row['non_veg_price'] * $person;
        }
    }
    if ($rooms == 0) {
        $filter_count .= " and Per Person Room Price is " . $select_row['room_price'];
    } else {
        $filter_count .= " and Total Room Price is " . $select_row['room_price'] * $rooms;
    }

    $filter_count .= "<br><br> If you want to this Customization Contact Us";
   
    
    }
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
    <!-- hero-section -->
    <div class="hero-section-fifth">
        <div class="container">
            <div class="row">
                <div class="offset-xl-1 col-xl-10 offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-12 mb60">
                    <!-- search-block -->
                    <div class="text-center">
                        <div class="search-head">
                            <h1 class="search-head-title text-white">Wedding Marketplace, Hire Your Wedding Day Team</h1>
                            <p class="d-none d-xl-block d-lg-block d-sm-block text-white">Choose from 500+ local wedding venues, services and providers
                            </p>
                        </div>
                        <!-- /.search-block -->
                        <div class="search-form">
                            <form class="form-row" method="post">
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12 mt-3">
                                    <!-- select -->
                                    <label class="text-white">Category Type</label>
                                    <select class="wide" name="Category_id" id="Category_id">
                                        <option value="">Category Type</option>
                                        <?php
                                        $data = mysqli_query($connection, "SELECT * FROM `category_ms_tb` GROUP BY `Category_name`");
                                        foreach ($data as $key => $value) {
                                        ?>
                                            <option value="<?php echo $value['Category_id']; ?>"><?php echo $value['Category_name']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12 mt-3">
                                    <!-- select -->
                                    <label class="text-white">Venue Type</label>
                                    <select class="wide" name="venue_type" id="venue_type" required>
                                        <option value="">Venue Type</option>
                                        <?php
                                        $data = mysqli_query($connection, "SELECT * FROM `event_tb` GROUP BY `venue_type`");
                                        foreach ($data as $key => $value) {
                                        ?>
                                            <option value="<?php echo $value['venue_type']; ?>"><?php echo $value['venue_type']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12 mt-3">
                                    <label class="text-white">Food Type</label>
                                    <select class="wide" name="food_type" id="food_type" required>
                                        <option value="">Food Type</option>
                                        <option value="1">Veg</option>
                                        <option value="2">Non-veg</option>
                                    </select>
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12 mt-3">
                                    <label class="text-white">Rooms</label>
                                    <input type="number" name="rooms" id="rooms" class="form-control" value="0" min="0" max="50" placeholder="Rooms">
                                </div>
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12 mt-3">
                                    <label class="text-white">Total Person</label>
                                    <input type="number" class="form-control" name="person" id="person" value="0" min="0" max="800" placeholder="Person">
                                </div>
                                <!-- button -->
                                <div class="col-xl-2 col-lg-2 col-md-2 col-sm-2 col-12 mt-5">
                                    <button class="btn btn-default btn-block mt-1" type="submit" name="customization_data">Customize</button>
                                </div>
                                <!-- button -->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mt-3 text-white">
                                    <h4 class="text-white">
                                        <?php
                                        echo $filter_count;
                                        ?>
                                    </h4>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- /.hero-section -->


    <div class="space-ex-large">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section-title">
                        <!-- section title start-->
                        <h2 class="mb10">Current Packages</h2>
                        <p></p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="venue-thumbnail-carousel">
                <div class="owl-carousel owl-theme owl-venue-thumb">
                    <?php
                    $q = mysqli_query($connection, "SELECT
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
ORDER BY `package_tbl`.`package_id` ASC;") or die(mysqli_error($connection));
                    while ($row = mysqli_fetch_array($q)) {
                    ?>
                        <div class="item">
                            <div class="col-xl-12">
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
                                        <p><?php echo $row['Event_name'] ?></p>
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
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="section-title">
                        <!-- section title start-->
                        <h2 class="mb10">Popular Categories</h2>
                        <p></p>
                    </div>
                    <!-- /.section title start-->
                </div>
            </div>
            <div class="venue-thumbnail-carousel">
                <div class="owl-carousel owl-theme owl-venue-thumb">
                    <?php
                    $q = mysqli_query($connection, "select * from category_ms_tb") or die(mysqli_error($connection));
                    while ($row = mysqli_fetch_array($q)) {
                    ?>
                        <div class="item">
                            <div class="col-xl-12">
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
                                        <h2 class="vendor-title"><a href="eventlist.php?eid=<?php echo $row['Category_id'] ?>" class="title"><?php echo $row['Category_name']; ?></a></h2>

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
    include './themes/footer.php';
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