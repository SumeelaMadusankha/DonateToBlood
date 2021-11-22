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
    <link rel="stylesheet" href="../Public/css/header.css">
    <link rel="stylesheet" href="../Public/css/userViewProfile.css">
    <title>Document</title>
</head>
<body>
    <header class="header-area">
        <div class="container">
           <div class="row d_flex">
              <div class="col-sm-3 logo_sm">
                 <div class="logo">
                    <a href="index.html"> </a>
                 </div>
              </div>
              <div class="col-lg-10 offset-lg-1 col-md-12 col-sm-9">
                 <div class="navbar-area">
                    <nav class="site-navbar">
                       <ul>
                          <li><a class="active" href="index.html">Home</a></li>
                          <li><a href="about.html">Request Camp</a></li>
                          <li><a href="action.html">Request Blood</a></li>
                         
                          <li><a href="news.html">Where to Donate</a></li> 
                          <li><a href="contact.html">Blood adverticement </a></li>
                          <div class="login-div"><li><a href="contact.html">LOGIN</a></li></div>
                       </ul>
                       <button class="nav-toggler">
                       <span></span>
                       </button>
                    </nav>
                 </div>
              </div>
           </div>
        </div>
     </header>

     <body>
        
        <!-- <nav class="links_to_pages">
            <ul>
              <li>BACK</li>
              <li>SPECIAL NOTICES</li>
              <li>DASHBOARD</li>
            </ul>
          </nav> -->
      
        </div>
      
        <body>
          <div class="contanier_2">
      
            
      
            <div class="contanier_2-1">
              <div class="view_profile">
                <h3><a href="#">Profile</a></h3>
              </div>
              <div class="edit_profile">
                <h3><a href="">Edit Profile</a></h3>
              </div>
            </div>
            <div>
      
              <img src="../Public/images/user_icon4-01.png" class="image">
              <div class="row1"><?php echo $data["firstName"] . " " . $data["lastName"] ?></div>
            </div>
            <div class="row">
              <div class="col_1">First Name</div>
              <div class="col_2"><?php echo $data["firstName"] ?></div>
            </div>
            <div class="row">
              <div class="col_1">Last Name</div>
              <div class="col_2"><?php echo $data["lastName"] ?></div>
            </div>
            <div class="row">
              <div class="col_1">NIC</div>
              <div class="col_2"><?php echo $data["nic"] ?></div>
            </div>
            <div class="row">
              <div class="col_1">Gender</div>
              <div class="col_2"><?php
                                  if ($data['gender'] == 'F') {
                                    echo "Female";
                                  } else {
                                    echo "Male";
                                  }
                                  ?></div>
            </div>
            <div class="row">
              <div class="col_1">Date of Birth</div>
              <div class="col_2"><?php echo $data["dob"] ?></div>
            </div>
            <div class="row">
              <div class="col_1">Home Address</div>
              <div class="col_2"><?php echo $data["address"]  ?></div>
            </div>
            <div class="row">
              <div class="col_1">Email</div>
              <div class="col_2"><?php echo $data["email"] ?></div>
            </div>
            <div class="row">
              <div class="col_1">City</div>
              <div class="col_2"><?php echo $data["city"] ?></div>
            </div>
            <div class="row">
              <div class="col_1">District</div>
              <div class="col_2"><?php echo $data["district"] ?></div>
            </div>
            <div class="row">
              <div class="col_1">Blood Group</div>
              <div class="col_2"><?php echo $data["bloodGroup"] ?></div>
            </div>
            <div class="row">
              <div class="col_1">Telephone Number</div>
              <div class="col_2"><?php echo $data["mobileNo"] ?></div>
            </div>
            <div class="row1">
      
              <a href="">BACK</a>
      
            </div>
      
      
      
            <div class="last">
      
            </div>
            <!-- <div>
         
       </div>
           -->
            </form>
      
          </div>
          </div>
        </body>
</body>
</html>