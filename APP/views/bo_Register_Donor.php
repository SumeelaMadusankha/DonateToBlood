<?php
if (!isset($_SESSION['nic'])) {
    header("Location:http://localhost/DonateToBlood/Login/index");
}
if (isset($_SESSION['jobtype'])) {
    if ($_SESSION['jobtype']=='BloodBankOfficer') {
       
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
    <link rel="stylesheet" href="../Public/css/notification.css">
    <link rel="stylesheet" href="../Public/assets/css/bbc_user_reg.css">
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>

<body>
    <div id="wrapper">
        <?php include "bo_header.php"; ?>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    
                    <li>
                        <a href="viewUpdateDonorDetails"><i class="fa fa-desktop"></i> Update Donate Details</a>
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
                        <span class = "label label-danger"> Not a Registered NIC</span>
                           <br>
                           <br>
                        <span class = "label label-success"> First Register the Donor!</span>
                           
                        </h1>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Add the Donor
                                </div>

                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <form  method="POST" action="../B_officer/addDonor" id="reg_form">
                                            <div id="note">
                                                    <b> Notification message </b>
                                            </div>

                                                <div class="form-group nic">
                                                    <label>NIC Number</label>
                                                    <input class="form-control" type="text" placeholder="National Identity Card" name="nic" id="nic" <?php echo "value=" . $data?> required>
                                                    <i class='fa fa-check-circle'></i>
                                                    <i class='fa fa-exclamation-circle'></i>
                                                    
                                                </div>
                                                <div class="form-group fname">
                                                    <label>First Name</label>
                                                    <input class="form-control" type="text" placeholder="First Name" name="fname" id="fname" required>
                                                    <i class='fa fa-check-circle'></i>
                                                    <i class='fa fa-exclamation-circle'></i>
                                                    
                                                </div>
                                                <div class="form-group lname">
                                                    <label>Last Name</label>
                                                    <input class="form-control" type="text" placeholder="Last Name" name="lname" id="lname" required>
                                                    <i class='fa fa-check-circle'></i>
                                                    <i class='fa fa-exclamation-circle'></i>
                                                    
                                                </div>
                                                <div class="form-group password">
                                                    <label> Enter Password</label>
                                                    <input class="form-control" type="password" name="password" placeholder="Enter Password Here" required>
                                                    <i class='fa fa-check-circle'></i>
                                                    <i class='fa fa-exclamation-circle'></i>
                                                    
                                                </div>
                                                <div class="form-group rpassword">
                                                    <label>Re-Enter Password</label>
                                                    <input class="form-control"  type="password" name="re-password" placeholder="Re-enter Password Here" required>

                                                    <i class='fa fa-check-circle'></i>
                                                    <i class='fa fa-exclamation-circle'></i>
                                                    
                                                </div>


                                                <div class="form-group birth">
                                                    <label>Date of Birth</label>
                                                    <input class="form-control" type="date" placeholder="Birth Day" name="bday" id="bday" required>
                                                </div>
                                                <div class="form-group address">
                                                    <label>Address</label>
                                                    <input class="form-control" type="text"  name="address" id="address" placeholder="Address" required>
                                                    <i class='fa fa-check-circle'></i>
                                                    <i class='fa fa-exclamation-circle'></i>
                                                    
                                                </div>
                                                <div class="form-group ">
                                                    <label>District</label>
                                                    <select class="form-control" name="districts" id="districts">
                                                        <option value="Ampara">Ampara</option>
                                                        <option value="Anuradhapura">Anuradhapura</option>
                                                        <option value="Badulla">Badulla</option>
                                                        <option value="Batticaloa">Batticaloa</option>
                                                        <option value="Colombo">Colombo</option>
                                                        <option value="Galle">Galle</option>
                                                        <option value="Galle">Galle</option>
                                                        <option value="Gampaha">Gampaha</option>
                                                        <option value="Hambantota">Hambantota</option>
                                                        <option value="Jaffna">Jaffna</option>
                                                        <option value="Kandy">Kandy</option>
                                                        <option value="Kegalle">Kegalle</option>
                                                        <option value="Kilinochchi">Kilinochchi</option>
                                                        <option value="Kurunegala">Kurunegala</option>
                                                        <option value="Mannar">Mannar</option>
                                                        <option value="Matale">Matale</option>
                                                        <option value="Matara">Matara</option>
                                                        <option value="Moneragala">Moneragala</option>
                                                        <option value="Mullativ">Mullativ</option>
                                                        <option value="Nuwara Eliya">Nuwara Eliya</option>
                                                        <option value="Polonnaruwa">Polonnaruwa</option>
                                                        <option value="Puttalam">Puttalam</option>
                                                        <option value="Ratnapura">Ratnapura</option>
                                                        <option value="Trincomalee">Trincomalee</option>
                                                        <option value="Vavuniya">Vavuniya</option>
                                                    </select>
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
                                                <input type="submit" value="Add Donor" onclick="return (nameValfirst() && nameVallast() &&checkPass() && emailVal() && mobileVal() && doCalculate())" class="btn btn-default" name="register_btn">
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
      
        <script src="../Public/js/reg_donor_val.js"></script>
        <script src="../Public/js/jquery.min.js"></script>
        <script src="../Public/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
        <script src="../Public/js/owl.carousel.min.js"></script>
 

</body>

</html>