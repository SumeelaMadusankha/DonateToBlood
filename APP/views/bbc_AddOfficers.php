<?php
if (!isset($_SESSION['nic'])) {
    header("Location:http://localhost/DonateToBlood/Login/index");
}
if (isset($_SESSION['jobtype'])) {
    if ($_SESSION['jobtype']=='bloodBankCordinator') {
       
    }else {
        header("Location:http://localhost/DonateToBlood/Login/mustLogout");
    }
}else {
    header("Location:http://localhost/DonateToBlood/Login/mustLogout");
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title></title>
    <!-- Bootstrap Styles-->
    <link href="/DonateToBlood/Public/assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="/DonateToBlood/Public/assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="/DonateToBlood/Public/assets/css/custom-styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="../Public/assets/css/bbc_user_reg.css">
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="../Public/css/notification.css">
</head>

<body>
    <div id="wrapper">
        <?php include "bbc_header.php"; ?>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a href="viewDashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="viewBloodRequests"><i class="fa fa-desktop"></i> Blood Requests</a>
                    </li>
                    <li>
                        <a href="viewCampRequests"><i class="fa fa-bar-chart-o"></i> Donation Camp Requests</a>
                    </li>
                    <li>
                        <a href="showBloodData"><i class="fa fa-qrcode"></i> Blood Levels</a>
                    </li>
                    </li>
                    <li>
                        <a class="active-menu" href="view_Add_ShowOfficer"><i class="fa fa-desktop"></i> Add Officers</a>
                    </li>
                    <li>
                        <a href="viewOfficer_Data"><i class="fa fa-desktop"></i> Show Officer Data</a>
                    </li>
                    <li>
                        <a href="../Login/logout"><i class="fa fa-desktop"></i>logout</a>
                    </li>



                </ul>

            </div>

        </nav>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-header">
                            Add Officer
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Add Distric Blood Bank Officer
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form method="POST" action="addOfficer" id="reg_form">
                                            <div id="note">
                                                 <b> Notification message </b>
                                             </div>
                                                <div class="form-group">
                                                    <label>NIC Number</label>
                                                    <input class="form-control" type="text" placeholder="National Identity Card" name="nic" id="nic" <?php echo "value=" . $data?>>
                                                    <i class='fa fa-check-circle'></i>
                                                    <i class='fa fa-exclamation-circle'></i>
                                                    
                                                </div>
                                                <div class="form-group firstName">
                                                    <label>First Name</label>
                                                    <input class="form-control" type="text" placeholder="First Name" name="fname" id="fname">
                                                    <i class='fa fa-check-circle'></i>
                                                    <i class='fa fa-exclamation-circle'></i>
                                                    
                                                </div>
                                                <div class="form-group lastName">
                                                    <label>Last Name</label>
                                                    <input class="form-control" type="text" placeholder="Last Name" name="lname" id="lname">
                                                    <i class='fa fa-check-circle'></i>
                                                    <i class='fa fa-exclamation-circle'></i>
                                                    
                                                </div>


                                                <div class="form-group birth">
                                                    <label>Date of Birth</label>
                                                    <input class="form-control" type="date" placeholder="Birth Day" name="bday" id="bday">
                                                </div>
                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input class="form-control" type="text" name="address" id="address" placeholder="Address" required>
                                                    <i class='fa fa-check-circle'></i>
                                                    <i class='fa fa-exclamation-circle'></i>
                                                    
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label>Gender</label><br>
                                                    <label class="radio-inline">
                                                        <input type="radio" id="male" name="gender" value="Male" >Male
                                                    </label>
                                                    <label class="radio-inline">
                                                        <input type="radio" id="female" name="gender" value="Female" checked>Female
                                                    </label>
                                                </div>
                                                <div class="form-group password">
                                                    <label> Enter Password</label>
                                                    <input class="form-control" type="password" name="password" placeholder="Enter Password Here" required>

                                                </div>
                                                <div class="form-group rpassword">
                                                    <label>Re-Enter Password</label>
                                                    <input class="form-control"  type="password" name="re-password" placeholder="Re-enter Password Here" required>


                                                </div>



                                                <div class="form-group email">
                                                    <label>Email Address</label>
                                                    <input class="form-control" type="text" placeholder="Email" name="email" id="email" required>
                                                    <i class='fa fa-check-circle'></i>
                                                    <i class='fa fa-exclamation-circle'></i>
                                                    
                                                </div>
                                                <div class="form-group mobNo">
                                                    <label>Mobile No</label>
                                                    <input class="form-control" type="text" placeholder="Mobile Number" name="mobnum" id="mobnum" required>
                                                    <i class='fa fa-check-circle'></i>
                                                    <i class='fa fa-exclamation-circle'></i>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label>City</label>
                                                    <input class="form-control" type="text" placeholder="City" name="city" id="city" required>
                                                    <i class='fa fa-check-circle'></i>
                                                    <i class='fa fa-exclamation-circle'></i>
                                                    
                                                </div>
                                                <input type="submit" value="Add Officer" class="btn btn-primary" 
                                                name="register_btn" onclick="return (nameValL() && nameValF() && doCalculate() && emailVal() && checkPass() &&  mobileVal())">
                                                
                                            </form>
                                        </div>

                                    </div>
                                    <!-- /.row (nested) -->
                                </div>
                                <!-- /.panel-body -->
                            </div>
                            <!-- /.col-lg-12 -->
                        </div>
                    </div>
                    <!-- /. ROW  -->
                    <?php include "bbc_footer.php" ?>
                </div>
                <!-- /. PAGE INNER  -->
            </div>
            <!-- /. PAGE WRAPPER  -->
        </div>
        <!-- /. WRAPPER  -->
        <!-- JS Scripts-->
        <!-- jQuery Js -->

        <script src="../Public/assets/js/jquery-1.10.2.js"></script>
        <!-- Bootstrap Js -->
        <script src="../Public/assets/js/bootstrap.min.js"></script>
        <!-- Metis Menu Js -->
        <script src="../Public/assets/js/jquery.metisMenu.js"></script>
        <!-- Custom Js -->
        <script src="../Public/assets/js/custom-scripts.js"></script>
        <script src="../Public/assets/js/bbc_user_reg.js"></script>

        <script src="../Public/js/add_officer_val.js"></script>
        <script src="../Public/js/jquery.min.js"></script>
        <script src="../Public/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
        <script src="../Public/js/owl.carousel.min.js"></script>


</body>

</html>