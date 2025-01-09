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


<!-- Mirrored from jituchauhan.com/real-wed/realwed/couple-dashboard-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:32:00 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>RealWed | Couple Dashboard - Profile</title>
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
    <link href="css/summernote-bs4.css" rel="stylesheet">
    <!-- Favicon icon -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">
    <!-- Style CSS -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/offcanvas.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="body-bg">
     <div class="dashboard-header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 col-lg-8 col-md-8 col-sm-6 col-6">
                    <div class="header-logo">
                        <a href="home.php">Tej Shah</a>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 col-6">
                    <nav class="navbar navbar-expand-lg float-right db-nav-list">
                        <div>
                            <ul class="navbar-nav">
                                
                                <li class="nav-item dropdown dropleft user-vendor ">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="user-icon"> </span><span class="user-vendor-name"><?php echo $_SESSION['name'] ?></span></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                        <a class="dropdown-item" href="profile.php">Dashboard</a>
                                        <a class="dropdown-item" href="cart.php">cart </a>
                                        <a class="dropdown-item" href="couple-dashboard-todolist.html">Booking Details</a>
                                        <a class="dropdown-item" href="profile-me.php">My Profile </a>
                                        <a class="dropdown-item" href="logout.php">Log Out </a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar-expand-lg">
        <button class="navbar-toggler" type="button" data-toggle="offcanvas">
            <span id="icon-toggle" class="fa fa-bars"></span>
        </button>
    </div>
    <div class="dashboard-wrapper">
        <div class="dashboard-sidebar offcanvas-collapse">
            <div class="vendor-user-profile">
                <div class="vendor-profile-img">
                    </div>
                <h3 class="vendor-profile-name"><?php echo $_SESSION['name'] ?></h3>
                <a href="profile-me.php" class="edit-link">edit profile</a>
            </div>
            <div class="dashboard-nav">
                <ul class="list-unstyled">
                    <li><a href="profile.php"><span class="dash-nav-icon"><i class="fas fa-compass"></i></span>Dashboard</a></li>
                    <li><a href="cart.php"><span class="dash-nav-icon"><i class="fas fa-heart"></i> </span> Cart </a></li>
                    <li><a href="booking-details.php"><span class="dash-nav-icon"><i class="fas fa-list-ul"></i></span>Booking Details</a></li>
                    
                    
          
                    <li class="active"><a href="profile-me.php"><span class="dash-nav-icon"><i class="fas fa-user-circle"></i></span>My Profile </a></li>
                    <li><a href="logout.php"><span class="dash-nav-icon"><i class="fas fa-sign-out-alt"></i></span>Log Out </a></li>
                </ul>
            </div>
        </div>
        <div class="dashboard-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="dashboard-page-header">
                            <h3 class="dashboard-page-title">My Profile</h3>
                            <p>Update your wedding information, profile photo, and personal informations.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
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
                </div>
            </div>
            </div>
        </div>
    </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/menumaker.min.js"></script>
    <script src="js/custom-script.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script>
    $(document).ready(function() {
        $.uploadPreview({
            input_field: "#image-upload", // Default: .image-upload
            preview_box: "#image-preview", // Default: .image-preview
            label_field: "#image-label", // Default: .image-label
            label_default: "Choose File", // Default: Choose File
            label_selected: "Change File", // Default: Change File
            no_label: false // Default: false
        });
    });
    </script>
    <script src="js/jquery.uploadPreview.js"></script>
    <script src="js/summernote-bs4.js"></script>
    <script src="js/offcanvas.js"></script>
    <!-- nice-select js -->
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/fastclick.js"></script>
     <script src="js/jquery.slimscroll.js"></script>
</body>


<!-- Mirrored from jituchauhan.com/real-wed/realwed/couple-dashboard-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 27 Dec 2021 06:32:00 GMT -->
</html>