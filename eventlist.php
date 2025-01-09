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
        <title>Events | Event-List</title>
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
                            <h1 class="page-title">Our Popular Events</h1>
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
                                <li class="breadcrumb-item active text-white" aria-current="page">Events</li>
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
                    $sq = mysqli_query($connection, "select * from event_tb");
                    while ($row = mysqli_fetch_array($sq)) {
                        ?>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="vendor-thumbnail">
                                <!-- Vendor thumbnail -->
                                <div class="vendor-img">
                                    
                                    <a href="eventdetails.php?id=<?php echo "{$row['Event_id']}"; ?>"><?php
                    $connection = mysqli_connect("localhost", "root", "", "temp");
                    $sqq = mysqli_query($connection, "SELECT
    `event_photo_tb`.`Event_photo_id`
    , `event_photo_tb`.`Event_photo_name`
    , `event_photo_tb`.`Event_photo`
    , `event_tb`.`Event_name`
FROM
    `event_photo_tb`
    INNER JOIN `event_tb` 
        ON (`event_photo_tb`.`Event_id` = `event_tb`.`Event_id`)
ORDER BY `event_photo_tb`.`Event_photo_id` ASC;");
                    while ($rows = mysqli_fetch_array($sqq)) {
                        echo "<img src='upload/{$rows['Event_photo_name']}' alt='' class='img-fluid'>";
                    }
                        ?></a>
                                    <?php
                                    if (isset($_SESSION['id'])) {
                                        if (isset($_POST['wishlist'])) {
                                            $customer_id = $_SESSION['id'];
                                            $event_id = $rows['Event_id'];
                                            
                                            $is_user_employee = $_SESSION['is_user_employee'];
                                            $data_count = "SELECT * FROM `event_wishlist_tbl` WHERE `customer_id`= '{$customer_id}' and `Event_id` = '{$event_id}' and `is_user_employee` = '{$is_user_employee}'";
                                            $q2 = mysqli_query($connection, $data_count);
                                            $count = mysqli_num_rows($q2);
                                            if ($count == 0) {
                                                $q = mysqli_query($connection, "INSERT INTO `event_wishlist_tbl`(`customer_id`, `Event_id`,`is_user_employee`) VALUES ('{$customer_id}','{$event_id}','{$is_user_employee}')")or die(mysqli_error($connection));
                                                echo "<script>alert('Add to Wishlist Successfully');window.location='eventlist.php?eid=$event_id'</script>";
                                            } else {
                                                echo "<script>alert('Already in wish list');window.location='eventlist.php?eid=$event_id'</script>";
                                            }
                                            
                                        }
                                    }
                                        ?>
                                    
                                    <div class="wishlist-sign" name="wishlist"><a href="event-wishlist.php?id=<?php echo "{$row['Event_id']}"; ?>" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                                </div>
                              

                                <div class="vendor-content">
                                    <!-- Vendor Content -->
                                    <h2 class="vendor-title"><a href="eventdetails.php?id=<?php echo "{$row['Event_id']}"; ?>" class="title"><?php echo "{$row['Event_name']}"; ?></a></h2>
                                    <p class="vendor-address"><?php echo "{$row['venue_type']}"; ?></p>
                                </div>

                                <!-- /.Vendor Content -->
                                <div class="vendor-meta">
                                    <div class="vendor-meta-item vendor-meta-item-bordered">
                                        <span class="rating-star">
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rated"></i>
                                            <i class="fa fa-star rate-mute"></i> 
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    
                    }
                    ?>

                </div>
            </div>
        </div>
   
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
</html>
