<?php
session_start();
$connection = mysqli_connect("localhost", "root", "", "temp");
if (isset($_POST['userbtnlogin'])) {
    $userlogemail = $_POST['userlogemail'];
    $userlogpw = $_POST['userlogpw'];
    $q = mysqli_query($connection, "select * from customer_tbl where customer_Email_id='{$userlogemail}' and customer_Password='{$userlogpw}'");

    //$selectquery = mysqli_query($connection, "select * from customer1 where customer_email='{$email}' and customer_password='{$password}'") or die(mysqli_erroe($connection));
    $row = mysqli_fetch_array($q);

    $count = mysqli_num_rows($q);

    if ($count > 0) {
        $_SESSION['is_user_employe'] = 1;
        $_SESSION['id'] = $row['customer_id'];
        $_SESSION['name'] = $row['customer_name'];
        $_SESSION['addrees'] = $row['customer_addresss'];
        $_SESSION['email'] = $row['customer_email_id'];
        $_SESSION['mobile_number'] = $row['customer_mob_no'];
        $_SESSION['password'] = $row['customer_password'];
        echo "<script>alert('Login Successfully');window.location='home.php'</script>";
    } else {

        echo "<script>alert('try again');</script>";
    }
}
?>




<!DOCTYPE html>
<html lang="en">


    <!-- Mirrored from jituchauhan.com/real-wed/realwed/vendor-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:30:35 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Registration</title>
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
    <!-- vendor-form -->

    <body class="vendor-bg-image">
        <!-- sign up -->
        <div class=" vendor-form">
            <div class="container">
                <div class="row ">
                    <div class="offset-xl-3 col-xl-6 offset-lg-3 col-lg-6 col-md-12 col-sm-12 col-12  ">
                        <!-- vendor head -->
                        <div class="vendor-head">
                            <a href="home.php">Tej Shah</a>
                        </div>
                        <!-- /.vendor head -->
                        <div class="st-tab">
                            <div class="tab-content" id="myTabContent">

                                <!-- vendor-login -->
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                    <div class="vendor-form-title">
                                        <!--vendor-title -->
                                        <h3 class="mb-2"><center>Login </center></h3>
                                        <p>Let's Get it</p>
                                    </div>
                                    <!--/.vendor-title -->
                                    <form method="POST">
                                        <div class="row">
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label class="control-label">Email</label>
                                                    <input id="username" type="email" name="userlogemail" placeholder="Enter Email" class="form-control" required>
                                                </div>
                                            </div>
                                            <!-- Text input-->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <div class="form-group service-form-group">
                                                    <label class="control-label">Password</label>
                                                    <input id="passwordlogin" type="password" name="userlogpw" placeholder="Enter Password" class="form-control" required>
                                                </div>
                                            </div>
                                            <!--buttons -->
                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button type="submit" name="userbtnlogin" class="btn btn-default">Login</button>
                                            </div>
                                        </div>
                                    </form>
                                    <p class="mt-2"> Are you new couple? Create a New Account.<a href="user-sign-add.php" class="wizard-form-small-text"> Click here</a></p>
                                </div>

                            </div>
                            <!-- /.vendor-login -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.vendor-form -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/fastclick.js"></script>
    <script src="js/custom-script.js"></script>


</body>


<!-- Mirrored from jituchauhan.com/real-wed/realwed/vendor-form.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:30:35 GMT -->
</html>