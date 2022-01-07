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
    <link rel="stylesheet" href="../Public/css/userViewProfile.css">
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
                   <a href='#'><b> HISTORY</b> </a>
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

<div class="row1">
  <?php if (isset($data[0]['message'])) {
    echo $data[0]['message'];
    unset($data[0]['message']);
  }


  ?>
</div>

<div class="contanier_2-1">
  <div class="view_profile">
    <h3><a href="#">Profile</a></h3>
  </div>
  <div class="edit_profile">
    <h3><a href="viewEditUserProfile">Edit Profile</a></h3>
  </div>
</div>
<div>

  <img src="../Public/images/user.png" class="image">
  <div class="row1"><?php echo $data[0]["firstName"] . " " . $data[0]["lastName"] ?></div>
</div>

<div class="outer_field_class">
<div class="row">
  <div class="col_1">First Name</div>
  <div class="col_2"><?php echo $data[0]["firstName"] ?></div>
</div>
<div class="row">
  <div class="col_1">Last Name</div>
  <div class="col_2"><?php echo $data[0]["lastName"] ?></div>
</div>
<div class="row">
  <div class="col_1">NIC</div>
  <div class="col_2"><?php echo $data[0]["nic"] ?></div>
</div>
<div class="row">
  <div class="col_1">Gender</div>
  <div class="col_2"><?php
                      if ($data[0]['gender'] == 'F') {
                        echo "Female";
                      } else {
                        echo "Male";
                      }
                      ?></div>
</div>
<div class="row">
  <div class="col_1">Date of Birth</div>
  <div class="col_2"><?php echo $data[0]["dob"] ?></div>
</div>
<div class="row">
  <div class="col_1">Home Address</div>
  <div class="col_2"><?php echo $data[0]["address"]  ?></div>
</div>
<div class="row">
  <div class="col_1">Email</div>
  <div class="col_2"><?php echo $data[0]["email"] ?></div>
</div>
<div class="row">
  <div class="col_1">Office Address</div>
  <div class="col_2"><?php echo $data[0]["address"] ?></div>
</div>
<div class="row">
  <div class="col_1">Telephone Number</div>
  <div class="col_2"><?php echo $data[0]["mobileNo"] ?></div>
</div>
</div>






<div class="last">

</div>

</form>

</div>
</div>
      </div>
    </div>
  </body>
</html>