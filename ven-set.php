

<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "temp");
$editid = $_GET['eid'];
$selectq = mysqli_query($connection, "select * from vendor_det_tbl where ven_cat_id='{$editid}'")or die(mysqli_error($connection));
$selectrow = mysqli_fetch_array($selectq);
?>



<!DOCTYPE html>
<html lang="en">


    <!-- Mirrored from jituchauhan.com/real-wed/realwed/supplier-photographer-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:31:10 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Events | Vendors</title>
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
                            <?php
                            $connection = mysqli_connect("localhost", "root", "", "temp");
                          $editid = $_GET['eid'];
                            $selectq = mysqli_query($connection, "select * from vendor_cat_tbl where ven_cat_id='{$editid}'")or die(mysqli_error($connection));
                            $selectrow = mysqli_fetch_array($selectq);
                            ?>
                            <h1 class="page-title"><?php echo "{$selectrow['ven_cat_name']}";?></h1>
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
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Vendors</a></li>
                                <li class="breadcrumb-item active text-white" aria-current="page">Vendors Category</li>
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
                    $q = mysqli_query($connection, "select * from vendor_det_tbl where ven_cat_id='{$editid}'")or die(mysqli_error($connection));
                    while ($row = mysqli_fetch_array($q)) {
                        ?>
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12">
                            <div class="vendor-thumbnail">
                                <!-- Vendor thumbnail -->
                                
                                <!-- /.Vendor img -->
                                <div class="vendor-content">
                                    <!-- Vendor Content -->
                                    <h2 class="vendor-title"><a href="vendordetailslist.php?eid=<?php echo "{$row['ven_id']}"; ?>" class="title"><?php echo "{$row['ven_name']}"; ?></a></h2>
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


    <!-- Mirrored from jituchauhan.com/real-wed/realwed/supplier-photographer-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:31:13 GMT -->
</html>