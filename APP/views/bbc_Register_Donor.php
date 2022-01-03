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
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script src="/Public/assets/js/regj-form.js"></script>
</head>
<body>
<div id="wrapper">
    <?php include "bbc_header.php";?>
    <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a  href="viewDashboard"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="viewBloodRequests"><i class="fa fa-desktop"></i> Blood Requests</a>
                    </li>
					<li>
                        <a href="viewCampRequests"><i class="fa fa-bar-chart-o"></i> Donation Camp Requests</a>
                    </li>
                    <li>
                        <a href="viewShortageBloodTypes"><i class="fa fa-qrcode"></i> Shortage of Blood</a>
                    </li>
                    <li>
                        <a class="active-menu" href="viewRegisterDonor"><i class="fa fa-dashboard"></i> Register Donor</a>
                    </li>
                    <li>
                        <a href="viewUpdateDonorDetails"><i class="fa fa-desktop"></i> Update Donate Details</a>
                    </li>
                    <li>
                        <a href="viewAddBloodDetails"><i class="fa fa-desktop"></i> Add Blood Details</a>
                    </li>



                </ul>

            </div>

        </nav>
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="page-header">
                        Register Donor
                    </h1>
                </div>
                <form class="form-inline md-form mr-auto mb-4" style="margin-bottom: 10px;">
                    <input class="form-control mr-lg-2" type="text" placeholder="Enter ID" aria-label="Search">
                    <button type="button" class="btn btn-primary" class="btn btn-elegant btn-rounded btn-lg my-0" type="submit">Search</button>
                </form>      
    <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Add a Donor
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form" method="POST" action="../BB_Coordinater/addDonor"  id="reg_form">
                                            <div class="form-group">
                                                <label>NIC Number</label>
                                                <input class="form-control" type="text" placeholder="National Identity Card" name="nic" id="nic">
                                            </div>
                                            <div class="form-group">
                                                <label>First Name</label>
                                                <input class="form-control" type="text" placeholder="First Name" name="fname" id="fname" >
                                            </div>
                                            <div class="form-group">
                                                <label>Last Name</label>
                                                <input class="form-control" type="text" placeholder="Last Name" name="lname" id="lname">
                                            </div>
 
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input class="form-control" type="date" placeholder="Birth Day" name="bday" id="bday">
                                            </div>
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input class="form-control" name="address" id="address" placeholder="Address">
                                            </div>
                                            <div class="form-group">
                                                <label>District</label>
                                                <select class="form-control" name="districts" id="districts">
                                                <option>Matara</option>
                                                <option>Galle</option>
                                                <option>Colombo</option>
                                                <option>Kandy</option>
                                                <option>Jaffna</option>
                                            </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Gender</label><br>
                                                <label class="radio-inline">
                                                <input type="radio" id="male" name="gender" value="male"checked="">Male
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio"id="female" name="gender" value="female"checked="">Female
                                            </label>  
                                            </div>
                                            <div class="form-group">
                                                <label>Blood Group</label>
                                                <select class="form-control" name="blood" id="blood">
                                                <option>O-</option>
                                                <option>O+</option>
                                                <option>B-</option>
                                                <option>B+</option>
                                                <option>A-</option>
                                                <option>A+</option>
                                                <option>AB-</option>
                                                <option>AB+</option>

                                            </select>
                                            </div>
 
                                            <div class="form-group">
                                                <label>Email Address</label>
                                                <input class="form-control" type="text" placeholder="Email" name="email" id="email">
                                            </div>
                                            <div class="form-group">
                                                <label>Mobile No</label>
                                                <input class="form-control" type="text" placeholder="Mobile Number" name="mobnum" id="mobnum">
                                            </div>
                                            <div class="form-group">
                                                <label>City</label>
                                                <input class="form-control" type="text" placeholder="City" name="city" id="city">
                                            </div>
                                            <input type="submit" value="Add Donor" class="btn btn-default" name="register_btn" >
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

<script src="/Public/assets/js/jquery-1.10.2.js"></script>
<!-- Bootstrap Js -->
<script src="/Public/assets/js/bootstrap.min.js"></script>
<!-- Metis Menu Js -->
<script src="/Public/assets/js/jquery.metisMenu.js"></script>
<!-- Custom Js -->
<script src="/Public/assets/js/custom-scripts.js"></script>


</body>
</html>
