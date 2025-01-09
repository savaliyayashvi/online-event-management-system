<?php
session_start();
require './classdb/emp-class.php';

if (isset($_POST['submit'])) {
    $id = $_SESSION['id'];
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $addrees = mysqli_real_escape_string($connection, $_POST['addrees']);
    $email = mysqli_real_escape_string($connection, $_POST['email']);
    $mobile_number = mysqli_real_escape_string($connection, $_POST['mobile_number']);
    
    if ($_SESSION['is_user_employe'] == 1) {
        $q = mysqli_query($connection, "UPDATE `customer_tbl` SET `customer_name`='{$name}', `customer_email_id`='{$email}', `customer_mob_no`='{$mobile_number}',`customer_addresss`='{$addrees}' WHERE `customer_id` = $id")or die(mysqli_error($connection));
    }
    if ($_SESSION['is_user_employe'] == 2) {
        $q = mysqli_query($connection, "UPDATE `employee_ms_tb` SET `Employee_name`='{$name}', `Employee_Email_id`='{$email}', `Employee_Mobile_no`='{$mobile_number}',`Address`='{$addrees}' WHERE `Employee_id` = $id")or die(mysqli_error($connection));
    }
    $_SESSION['name'] = $_POST['name'];
    $_SESSION['addrees'] = $_POST['addrees'];
    $_SESSION['email'] = $_POST['email'];
    $_SESSION['mobile_number'] = $_POST['mobile_number'];
    echo "<script>alert('Profile has been updated');window.location='profile.php'</script>";
}
?>
<!DOCTYPE html>
<html lang="en">


    <!-- Mirrored from jituchauhan.com/real-wed/Tej Shah/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:31:42 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Profile</title>
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
                            <h1 class="page-title">Profile</h1>
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
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Profile</a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- page breadcrumb -->
        </div>
        <!-- /.page-header -->
        <!-- contact-form -->
        <div class="content">
            <div class="container">
                <div class="row">

                    <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 col-md-12 col-sm-12 col-12">
                        <form method="POST">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="control-label" >Name</label>
                                        <input id="name" type="text" name="name" value="<?php echo $_SESSION['name'] ?>" placeholder="Enter Name" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <!-- Text input-->
                                    <div class="form-group service-form-group">
                                        <label class="control-label">Email Id</label>
                                        <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="<?php echo $_SESSION['email'] ?>" required>
                                    </div>

                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="control-label" >Mobile No</label>
                                        <input type="number" maxlength="10" name="mobile_number" value="<?php echo $_SESSION['mobile_number'] ?>" placeholder="Mobile No" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="control-label">Address</label>
                                        <textarea class="form-control" required='' placeholder="Address" name="addrees"><?php echo $_SESSION['addrees'] ?></textarea>
                                    </div>
                                </div>
                                <!-- buttons -->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <button type="submit" name="submit" class="btn btn-default">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.contact-form -->

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
                            <p class="mb0 text-default">info@Tej Shah.com</p>
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
                        <p>© 2018 Tej Shah. All Rights Reserved.</p>
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

        <!-- nice-select -->
        <script src="js/jquery.nice-select.min.js"></script>
        <script src="js/fastclick.js"></script>
        <script src="js/custom-script.js"></script>
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
        <script src="js/return-to-top.js"></script>
    </body>


    <!-- Mirrored from jituchauhan.com/real-wed/Tej Shah/contact-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:31:42 GMT -->
</html>