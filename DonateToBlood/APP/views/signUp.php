<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../Public/css/bootstrap.min.css">
      <!-- style css -->
      
      <!-- Responsive-->
      <link rel="stylesheet" href="../../Public/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="../../Public/images/fevicon.png" type="image/gif" />
      <!-- fonts-->
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
       <link rel="stylesheet" href="../../Public/css/owl.carousel.min.css"> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
      <link rel="stylesheet" href="../../Public/css/header.css">
      <link rel="stylesheet" href="../../Public/css/login.css">
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

     <div class="login">
      <div class="container">
        <div class="wrapper">
          <header>Sign Up Form</header>
          
          <form action="../DonateToBlood/signUp" method="post">
            <div class="field email">
              <div class="input-area">
                <input type="text"  placeholder="Enter NIC Here" name="nic">
                <i class="icon fas fa-envelope"></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
              </div>
              <div class="error error-txt">Email can't be blank</div>
            </div>
            <div class="field password">
              <div class="input-area">
                <input type="password" name="password" placeholder="Enter Password Here">
                <i class="icon fas fa-lock"></i>
                <i class="error error-icon fas fa-exclamation-circle"></i>
              </div>
              <div class="error error-txt">Password can't be blank</div>
            </div>
            <div class="field rpassword">
                <div class="input-area">
                  <input type="password" name="re-password" placeholder="Re-enter Password Here">
                  <i class="icon fas fa-lock"></i>
                  <i class="error error-icon fas fa-exclamation-circle"></i>
                </div>
                <div class="error error-txt">Password can't be blank</div>
              </div>
           
            <input type="submit" name="signUp-btn" value="Sign Up">
          </form>
          <div class="sign-txt">Already have an account? <a href="#">Login Here</a></div>
        </div>
         
        </div>
        <script src="../../Public/js/signup.js"></script>
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/custom.js"></script>
     </div>
</body>
</html>