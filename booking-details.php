<?php
session_start();
if(isset($_SESSION['id']))
{
    $sid= $_SESSION['id'];
$connection = mysqli_connect("localhost","root","","temp");
$sq = mysqli_query($connection,"select * from booking_ms_tb where customer_id =$sid")or die (mysqli_error($connection));
}

?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jituchauhan.com/real-wed/realwed/supplier-florist-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:31:07 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Event | Booking Details </title>
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
    <div class="header">
        <?php
        include './themes/header.php';
        ?>
    </div>
    <!-- /.header -->
       <!-- page-header -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <!-- page caption -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="page-caption">
                        <h1 class="page-title">Booking Details</h1>
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
                            <li class="breadcrumb-item"><a href="profile.php" class="breadcrumb-link">Profile</a></li>
                            <li class="breadcrumb-item active text-white" aria-current="page">Booking Details</li>
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
                        while($booking = mysqli_fetch_array($sq))
                        {
                        ?>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                     
                    <div class="vendor-thumbnail">
                        <!-- Vendor thumbnail -->
                       
                        <div class="vendor-img">
                            <!-- Vendor img -->
                            <a href="#"><img src="images/supplier-florist-1.jpg" alt="" class="img-fluid"></a>
                            <div class="wishlist-sign"><a href="#" class="btn-wishlist"><i class="fa fa-heart"></i></a></div>
                        </div>
                        <!-- /.Vendor img -->
                        <div class="vendor-content">
                            <!-- Vendor Content -->
                            <h2 class="vendor-title"><a href="#" class="title"><?php $booking['Category_id']?></a></h2>
                            <p class="vendor-address"><?php $booking['customer_id']?></p>
                        </div>
                        <!-- /.Vendor Content -->
                        <div class="vendor-meta">
                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                <span class="vendor-price">
                                   <?php $booking['Event_id']?>
                                </span>
                                <span class="vendor-text">Price</span></div>
                            <div class="vendor-meta-item vendor-meta-item-bordered">
                                <span class="rating-star">
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rated"></i>
                                    <i class="fa fa-star rate-mute"></i> 
                                    </span>
                                <span class="rating-count vendor-text">(20)</span></div>
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


<!-- Mirrored from jituchauhan.com/real-wed/realwed/supplier-florist-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:31:10 GMT -->
</html>