<?php
session_start();
require './classdb/emp-class.php';

if (isset($_POST['signup'])) {
    $empname = mysqli_real_escape_string($connection, $_POST['empname']);
    $employeedesg = mysqli_real_escape_string($connection, $_POST['employeedesg']);
    $employeeemail = mysqli_real_escape_string($connection, $_POST['employeeemail']);
    $employeemobno = mysqli_real_escape_string($connection, $_POST['employeemobno']);
    $employeeadd = mysqli_real_escape_string($connection, $_POST['employeeadd']);
    $employeeregpw = mysqli_real_escape_string($connection, $_POST['employeeregpw']);

    $q = mysqli_query($connection, "insert into employee_ms_tb (Employee_name,Employee_Desg,Employee_Email_id,Employee_Mobile_no,Address,Employee_password)values('{$employeename}','{$employeedesg}','{$employeeemail}','{$employeemobno}','{$employeeadd}','{$employeeregpw}')")or die(mysqli_error($connection));





    if ($q) {
        echo "<script>alert('sucessful');</script>";
        header("location:employee-dashboard.php");
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
                            <a href="../home.php">Tej Shah</a>
                        </div>
                        <!-- /.vendor head -->
                        <div class="st-tab">
                            <ul class="nav nav-tabs nav-justified" id="Mytabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="tab-1" data-toggle="tab" href="employee-sign-add.php" role="tab" aria-controls="tab-1" aria-selected="true">Register</a>
                                </li>

                            </ul>
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab-1">
                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                        <!-- vendor title -->
                                        <div class="vendor-form-title">
                                            <h3 class="mb-2">Registration</h3>
                                            <p>Sign In To Your Account</p>
                                        </div>
                                        <!-- /.vendor title -->
                                        <form method="POST">
                                            <div class="row">
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                    <!-- Text input-->
                                                    <div class="form-group">
                                                        <label class="control-label" >Name</label>
                                                        <input id="bussinessname" type="text" name="employeename" placeholder="Enter Name" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                    <!-- Text input-->
                                                    <div class="form-group service-form-group">
                                                        <label class="control-label">Designation</label>
                                                        <input  type="text" placeholder="employeedesg" class="form-control" name="Enter Desg" required>
                                                    </div>

                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <!-- Text input-->
                                                        <div class="form-group service-form-group">
                                                            <label class="control-label">Email Id</label>
                                                            <input id="email" type="email" placeholder="employeeemail" class="form-control" name="Enter Email" required>
                                                        </div>

                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="control-label" >Mobile No</label>
                                                            <input type="number" maxlength="10" name="employeemobno" placeholder="Mobile No" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                            <label class="control-label">Address</label>
                                                            <textarea class="form-control" required='' placeholder="Address" name="employeeadd">
                                                        
                                                            </textarea>

                                                        </div>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <!-- Text input-->
                                                        <div class="form-group service-form-group">
                                                            <label class="control-label ">Password</label>
                                                            <input id="passwordregister" type="password" name="employeeregpw" placeholder="Password" class="form-control" required>
                                                        </div>
                                                    </div>

                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <!-- select -->

                                                    </div>
                                                    <!-- buttons -->
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <button type="submit" name="signup" class="btn btn-default">Sign up</button>
                                                    </div>
                                                </div>
                                        </form>
                                        <p class="mt-2"> Have you subscribed? <a href="employee-log-frm.php">Click Here</a></p>
                                    </div>
                                </div>
                                <!-- vendor-login -->

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