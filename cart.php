<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "temp");
//$selectq = mysqli_query($connection, "select * from cart_tbl where user_id='{$_SESSION['id']}' and is_user_employe='{$_SESSION['is_user_employe']}'")or die(mysqli_error($connection));

$selectq = mysqli_query($connection, "SELECT
    `cart_tbl`.`cart_id`
    , `package_tbl`.`package_name`
    , `cart_tbl`.`package_price`
    , `cart_tbl`.`package_id`
    , `event_tb`.`Event_name`
FROM
    `package_tbl`
    INNER JOIN `cart_tbl` 
        ON (`package_tbl`.`package_id` = `cart_tbl`.`package_id`)
    INNER JOIN `event_tb` 
        ON (`event_tb`.`Event_id` = `package_tbl`.`Event_id`) where `cart_tbl`.`user_id` ='{$_SESSION['is_user_employe']}'") or die(mysqli_error($connection));
$count = mysqli_num_rows($selectq);

if (isset($_GET['did'])) {
    $deleteid = $_GET['did'];
    mysqli_query($connection, "delete from cart_tbl where cart_id='{$deleteid}'") or die(mysqli_error($connection));
    echo "<script>alert('Deleted Successfully');window.location='cart.php';</script>";
}
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from jituchauhan.com/real-wed/realwed/list-single-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:30:54 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Events | Add To Cart</title>
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
    <div class="page-header">
        <div class="container">
            <div class="row">
                <!-- page caption -->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                    <div class="page-caption">
                        <h1 class="page-title">Cart</h1>
                    </div>
                </div>
                <!-- /.page caption -->
            </div>
        </div>
    </div>
    <div class="list-single-second">
        <div class="container">
            <div class="">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <?php
                        if ($count == 0) {
                        ?>
                            <div class="vendor-head text-center">
                                <h2 class="mb10">No Records Found</h2>
                            </div>
                        <?php
                        } else {
                        ?>
                            <table class="table table-bordered mb-5">
                                <tr>
                                    <th>#</th>
                                    <th>Event</th>
                                    <th>Name</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                <?php
                                $i = 0;
                                $total = 0;
                                while ($row = mysqli_fetch_array($selectq)) {

                                    $total += $row['package_price'];
                                    $i++;
                                    $package_id = $row['package_id'];
                                    $select2 = mysqli_query($connection, "select * from package_tbl where package_id='{$package_id}'") or die(mysqli_error($connection));
                                    $data = mysqli_fetch_assoc($select2);
                                ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row['Event_name']; ?></td>
                                        <td><?php echo $row['package_name']; ?></td>
                                        <td class="text-center"><?php echo $row['package_price']; ?></td>
                                        <td class="text-center"><a href='?did=<?php echo $row['cart_id']; ?>'><i class="fa fa-trash-alt text-danger"></i></a></td>
                                    </tr>
                                <?php
                                }
                                ?>
                                <tr>
                                    <th colspan="3" class="text-right">Total</th>
                                    <th colspan="2"><?php echo $total; ?> </th>
                                </tr>
                            </table>
                        <?php
                        }
                        if($total >0){

                        }
                        ?>
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
        $(function() {

            $("#rateYo1, #rateYo2, #rateYo3, #rateYo4, #rateYo5 ").rateYo({
                rating: 3.6
            });

        });
    </script>
    <script src="js/return-to-top.js"></script>
</body>


<!-- Mirrored from jituchauhan.com/real-wed/realwed/list-single-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:30:57 GMT -->

</html>