<?php

  

if (isset($_SESSION) && empty($_SESSION)) {
 unset($_SESSION);
 session_destroy();
}

if (isset($_SESSION['jobtype'])) {
  if ($_SESSION['jobtype']=='registeredUser') {
     # code...
  }else {
   header("Location:http://localhost/DonateToBlood/Login/mustLogout");
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Public/css/bootstrap.min.css">
    <!-- style css -->
    
    <!-- Responsive-->
    <link rel="stylesheet" href="../Public/css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="../Public/images/fevicon.png" type="image/gif" />
    <!-- fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
     <link rel="stylesheet" href="../Public/css/owl.carousel.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="../Public/css/hd.css">
    <link rel="stylesheet" href="../Public/css/userEditProfile.css">
    <link rel="stylesheet" href="../Public/css/notification.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>User Profile</title>
</head>


      <body>

      <header>
         
         <nav>
            <input type="checkbox" id="check-1">
            <label for="check-1" class="checkbtn">
               <i class="fas fa-bars"></i>
            </label>
            <label class="logo">DonateToBlood</label>
            <ul>
               <li><a class="active" href="index">Home</a></li>
               <?php
              
               if (isset($_SESSION['nic'])) {
                 echo "<li><a href='../RegisteredUser/loadCampRequestForm'>Request Camp</a></li>";
               }else {
                  
               }
               ?>
               <?php
              
              if (isset($_SESSION['nic'])) {
                echo " <li><a href='../RegisteredUser/loadBRForm'>Request Blood</a></li>";
              }else {
                 
              }
              ?>
              <?php
              
              if (isset($_SESSION['nic'])) {
                echo " <li><a href='../RegisteredUser/donationPlacesLoad'>Where to Donate</a></li>";
              }else {
                 echo " <li><a href=' ../UnregisteredUser/donationPlacesLoad'>Where to Donate</a></li>";
              }
              ?>
              <?php
              
              if (isset($_SESSION['nic'])) {
                echo " <div class='dropdown'>
                <i class='fa fa-user-circle' style='font-size:50px; padding-top:20px'></i>
                <div class='dropdown-content'>
                <a href='../RegisteredUser/viewUserProfile'> <b> PROFILE</b></a>
                <a href='../RegisteredUser/donationHistoryLoad'><b> HISTORY</b> </a>
                <a href='../Login/logout'><b>LOGOUT</b> </a>
             </div>
                </div>'";
                
              }else {
                 echo " <li><a href='../UnregisteredUser/bloodPostLoad'>Blood adverticement</a></li>";
              }
              ?>
 
            </ul>
         </nav>
         
    </header>
   
    <div class="outer_class">
      <div class="body">
      <div class="contanier_2">


<div>

 
</div>

<div class="outer_aling_class">
<div class="contanier_2-1">
  <div class="view_profile">
    <h3><a href="viewUserProfile">Profile</a></h3>
  </div>
  <div class="edit_profile">
    <h3><a href="#">Edit Profile</a></h3>
  </div>
</div>
<form method="POST" action="userProfileUpdate">
<div id="note">
      <b> Notification message </b>
</div>
  
<div class="field ">
  <div class="row firstName">
    <div class="col_1">First Name</div>
    <div class="col_2"><input type="text" class="text" id="fname" name="fname" required value="<?php echo $data[0]["firstName"] ?>" /><i class="fa fa-user" aria-hidden="true" style="font-size: 20px;"></i></div>
  </div>
  </div>

  <div class="row lastName">
    <div class="col_1">Last Name</div>
    <div class="col_2"><input type="text" class="text" id="lname" name="lname" required value="<?php echo $data[0]["lastName"] ?>" /><i class="fa fa-user" aria-hidden="true" style="font-size: 20px;"></i></div>
  </div>
  <!-- <div class="row">
  <div class="col_1">NIC</div>
  <div class="col_2">99v</div>
</div> -->
  <!-- <div class="row">
  <div class="col_1">Gender</div>
  <div class="col_2">
      <input type="radio" id="male" name="gender" value="Male" required <?php
                                                                        if ($data[0]['gender'] == 'M') { ?>
       checked
     <?php } ?> 
      />
      <label for="male">Male</label>
      <input type="radio" id="female" name="gender" value="Female"  
      <?php
      if ($data[0]['gender'] == 'F') { ?>
       checked
     <?php } ?> 
       />
      <label for="female">Female</label></div>
</div> -->
  
  <div class="row">
    <div class="col_1">Home Address</div>
    <div class="col_2"><textarea class="text" id="address" name="address" rows="2" required><?php echo $data[0]["address"]  ?>
  </textarea><i class="fa fa-address-card" aria-hidden="true" style="font-size: 17px;"></i></div>
  </div>
  <div class="row mobile">
    <div class="col_1">Telephone Number</div>
    <div class="col_2">
      <input class="text" type="text" id="mobileNo" name="mobileNo" value="<?php echo $data[0]["mobileNo"] ?>" required />
      <i class="fa fa-phone" aria-hidden="true" style="font-size: 20px;"></i>
    </div>
  </div>
  <div class="row email">
    <div class="col_1">Email</div>
    <div class="col_2">
      <input class="text" type="email" id="email" name="email" value="<?php echo $data[0]['email'] ?>" />
      <i class="fa fa-envelope" aria-hidden="true" style="font-size: 18px;"></i>
    </div>
  </div>
  
  <div class="row">
    <div class="cancel_button">

      <input name="cancel" type="submit" onclick="" value="CANCEL" />
    </div>

    <div class="save_button">

      <input name="save" type="submit" onclick="return (nameValF() && nameValL() && mobileVal() && emailVal())" value="save">
    </div>

  </div>

  

  </div>

  <div class="last">

  </div>

</form>

</div>
</div>
</div>
</div>





<script src="../Public/js/updateProfile_val.js"></script>
        <script src="../Public/js/jquery.min.js"></script>
        <script src="../Public/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
        <script src="../Public/js/owl.carousel.min.js"></script>

  </body>
</html>