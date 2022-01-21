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
      <!-- basic -->
      <script src="https://kit.fontawesome.com/a076d05399.js"></script>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>DonateToHeal</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <?php
      if (isset($_SESSION['nic'])) {
        
         echo " <link rel='stylesheet' href='../Public/css/bootstrap.min.css'>";
      }
      else {
         echo " <link rel='stylesheet' href='Public/css/bootstrap.min.css'>";
      }
      ?>
      <?php
      if (isset($_SESSION['nic'])) {
         echo " <link rel='stylesheet' href='../Public/css/style.css'>";
      }
      else {
         echo " <link rel='stylesheet' href='Public/css/style.css'>";
      }
      ?>
   <?php
      if (isset($_SESSION['nic'])) {
         echo " <link rel='stylesheet' href='../Public/css/responsive.css'>";
      }
      else {
         echo " <link rel='stylesheet' href='Public/css/responsive.css'>";
      }
      ?>
 <?php
      if (isset($_SESSION['nic'])) {
         echo " <link rel='stylesheet' href='../Public/css/hd.css'>";
      }
      else {
         echo " <link rel='stylesheet' href='Public/css/hd.css'>";
      }
      ?>
 
     
      
      
      <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- fonts-->
     
     
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
       <link rel="stylesheet" href="Public/css/owl.carousel.min.css"> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
      <?php
      if (isset($_SESSION['nic'])) {
         echo "<link rel='stylesheet' type='text/css' href='../Public/css/demo.css' />";
      }
      else {
         echo "<link rel='stylesheet' type='text/css' href='Public/css/demo.css' />";
      }
      ?>
       <?php
      if (isset($_SESSION['nic'])) {
         echo "<link rel='stylesheet' type='text/css' href='../Public/css/alert.css' />";
      }
      else {
         echo "<link rel='stylesheet' type='text/css' href='Public/css/alert.css' />";
      }
      ?>
	
    
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	 <script type="text/javascript">
        $( document ).ready(function() {
        $(".note__close").click(function() {
          $(this).parent()
          .animate({ opacity: 0 }, 250, function() {
            $(this)
            .animate({ marginBottom: 0 }, 250)
            .children()
            .animate({ padding: 0 }, 250)
            .wrapInner("<div />")
            .children()
            .slideUp(250, function() {
              $(this).closest(".note").remove();
            });
          });
        });
        });
    </script>



      <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
      <!--[if lt IE 9]>
     
   </head>
   <!-- body -->
   <body class="main-layout">
      <header>
         <nav>
            <input type="checkbox" id="check-1">
            <label for="check-1" class="checkbtn">
               <i class="fas fa-bars"></i>
            </label>
            <label class="logo">DonateToHeal</label>
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
                echo " <li><a href='../RegisteredUser/loadCampPost'>Where to Donate</a></li>";
              }else {
                 echo " <li><a href=' UnregisteredUser/loadCampPost'>Where to Donate</a></li>";
              }
              ?>

<?php
              
              if (isset($_SESSION['nic'])) {
                echo " <li><a href='../RegisteredUser/loadBloodPost'>Blood adverticement</a></li>";
              }else {
                 echo " <li><a href=' UnregisteredUser/loadBloodPost'>Blood adverticement</a></li>";
              }
              ?>
              
                <?php
              
               if (isset($_SESSION['nic'])) {
                 echo " <div class='dropdown'>
              
               
               
                 <i class='fa fa-user-circle' style='font-size:60px;'></i>
                 <div class='dropdown-content'>
                    <a href='../RegisteredUser/viewUserProfile'> <b> PROFILE</b></a>
                    <a href='../RegisteredUser/donationHistoryLoad'><b> HISTORY</b> </a>
                    <a href='../Login/logout'><b>LOGOUT</b> </a>
                 </div>
                 </div>";
               }else {
                  echo "<li><a href='Login/index'>Login</a></li>";
               }
               ?>

               <!-- <div class="dropdown">
              
               
               
               <i class='fa fa-user-circle' style='font-size:50px'></i>
               <div class="dropdown-content">
                  <a href="../RegisteredUser/viewUserProfile"> <b> PROFILE</b></a>
                  <a href="../BB_Coordinater/sendEmail"><b> HISTORY</b> </a>
                  <a href="logout"><b>LOGOUT</b> </a>
               </div>
               </div>

                -->
            </ul>
         </nav>
         
      </header>
    <div class="body-div">
      <div class="full_bg">
         <!-- header inner -->
            <div class="section">
               <!-- carousel code -->
               <div id="banner1" class="carousel slide slider_main">
                  <ol class="carousel-indicators ">
                     <li data-target="#banner1" data-slide-to="0" class="indicator-li-1">01</li>
                     <li data-target="#banner1" data-slide-to="1" class="">02</li>
                     <li data-target="#banner1" data-slide-to="2" class="active">03</li>
                  </ol>
                  <div class="carousel-inner">
                     <!-- first slide -->
                     <div class="carousel-item active">
                        <div class="carousel-caption cuplle">
                          
                        
                           <div class="container">
                              <div class="row">
                                 <div class="col-md-8">
                                    <div class="photog">
                                       <h1>DONATE TO<br>HEAL</h1>
                                      
                                       


                                    </div>
                                   
                                 </div>
                                 <?php
                                    
                                    if (isset($_SESSION['nic'])) {
                                       
                                    }else {
                                        echo " <a class='register_btn' href='UnregisteredUser/signUpFormLoad' >REGISTER HERE</a>";
                                    }
                                    ?>
      <?php
      if (isset($_SESSION['msg']) && isset($_SESSION['nic'])) {
        unset($_SESSION['msg']); 
    
        echo "<div class='flag note note--success'>
                <div class='flag__image note__icon'>
                  <i class='fa fa-check-circle'></i>
                </div>
                <div class='flag__body note__text'> Dear 
                  ".$_SESSION['firstName']." ".$_SESSION['lastName'].", You are logged to the systen Successfully! 
                </div>
                <a href='#' class='note__close'>
                  <i class='fa fa-times'></i>
                </a>
              </div>";
     
      }else {
       
      } 
        
         ?>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- second slide -->
                     <div class="carousel-item">
                        <div class="carousel-caption cuplle">
                           <div class="container">
                              <div class="row">
                                 <div class="col-md-8">
                                   <div class="photog">
                                       <h1>A place to fulfill<br>all your blood requirements</h1>
                                     
                                    </div>
                                   
                                 </div>
                                 <?php
                                    
                                    if (isset($_SESSION['nic'])) {
                                       
                                    }else {
                                        echo " <a class='register_btn' href='User/register' >REGISTER HERE</a>";
                                    }
                                    ?>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- third slide -->
                     <div class="carousel-item">
                        <div class="carousel-caption cuplle">
                           <div class="container">
                              <div class="row">
                                 <div class="col-md-8">
                                   <div class="photog">

                                       <h1>Find everything about<br>donating blood</h1>


                                    </div>
                                   
                                 </div>
                                 <?php
                                    
                                    if (isset($_SESSION['nic'])) {
                                       
                                    }else {
                                        echo " <a class='register_btn' href='User/register' >REGISTER HERE</a>";
                                    }
                                    ?>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- controls -->
                  <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
                  <i class="fa fa-angle-left" aria-hidden="true"></i>
                  <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
                  <i class="fa fa-angle-right" aria-hidden="true"></i>
                  <span class="sr-only">Next</span>
                  </a>
               </div>
            </div>
         </div>
         <!-- end banner -->
         <!-- about -->
         <div class="about">
            <div class="container_width">
               <div class="row d_flex">
                      <div class="col-md-7">
                     <div class="titlepage text_align_left">
                        <h2>About Donate to Heal </h2>
                        <p>Donate to Heal provides you the ability to find safe and high quality Blood of the required category. Through Donate to Heal our goal is to provide a platform that you can recieve several services regarding blood donation at your fingertips through one platform.
                        </p>
                        <a class="register_btn" href="about.html">About More</a>
                     </div>
                  </div>
                  <div class="col-md-5">
                     <div class="about_img text_align_center">
                        <figure>
                        <?php
                        if (isset($_SESSION['nic'])) {
               echo "<img src='../Public/images/donation.png' alt='#'/>";
             }else {
                echo "<img src='././Public/images/donation.png' alt='#'/>";
             }
             ?>
                           </figure>
                     </div>
                  </div>
                 
               </div>
            </div>
         </div>
         <!-- end about -->
       
         <div class="coronata">
            <div class="container">
               <div class="row d_flex grid">
                  <div class="col-md-7">
                     <div class="coronata_img text_align_center">
                        <figure>
                        <?php
                        if (isset($_SESSION['nic'])) {
               echo " <img src='../Public/images/donation.png' alt='#'/>";
             }else {
                echo " <img src='././Public/images/donation.png' alt='#'/>";
             }
             ?>
                       </figure>
                     </div>
                  </div>
                  <div class="col-md-5 oder1">
                     <div class="titlepage text_align_left">
                        <h2>Why Donate to Heal?</h2>
                        <p>Here through 'Donate to Heal' we ensure to provide you with the safest and highest quality blood through registered officials. At the same time we provide adequate services for the donors and the parties in need of blood to connect with each other free of charge.  
                        </p>
                        <a class="register_btn" href="coronata.html">About More</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
        
         <div class="protect">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage text_align_center">
                        <h2>Services we provide</h2>
                        <p>We provide a set of blood related services at one's fingertips.
                        </p>
                     </div>
                  </div>
               </div>
            </div>
              <div class="protect_bg">
            <div class="container">
                <div class="row">
                  <div class="col-md-12">
                     <!--  Demos -->
                     <div class="owl-carousel owl-theme">
                        <div class="item">
                           <div class="protect_box text_align_center">
                             <div class="desktop">
                                <i>
                                <?php
                        if (isset($_SESSION['nic'])) {
               echo " <img src='../Public/images/part1.jpg' alt='#'/>";
             }else {
                echo " <img src='././Public/images/part1.jpg' alt='#'/>";
             }
             ?>
                                  </i>
                              <h3> Donate Blood</h3>
                              <span> Volunteers who are willing to donate whole blood can find the requests for the required blood type and connect with the parties in need</span>
                             </div>
                             
                           </div>
                        </div>
                        <div class="item">
                             <div class="protect_box text_align_center">
                             <div class="desktop">
                                <i>
                                <?php
                        if (isset($_SESSION['nic'])) {
               echo "<img src='../Public/images/part2.png' alt='#'/>";
             }else {
                echo "<img src='././Public/images/part2.png' alt='#'/>";
             }
             ?>
                                   </i>
                              <h3>Request Blood</h3>
                              <span> If you are in need of blood of a certain type, we provide you the opportunity to advertise the necessary details and connect with blood donors or the blood bank</span>
                             </div>
                             
                           </div>
                        </div>
                        <div class="item">
                            <div class="protect_box text_align_center">
                             <div class="desktop">
                                <i><?php
                        if (isset($_SESSION['nic'])) {
               echo " <img src='../Public/images/notify.jpg' alt='#'/>";
             }else {
                echo " <img src='././Public/images/notify.jpg' alt='#'/>";
             }
             ?>
                                  </i>
                              <h3> Get Notifications</h3>
                              <span> The registered users get the opportunity to get notifications regarding the blood donations camps happening around you, or blood requests of their blood type</span>
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
         <!-- end protect -->
       <!-- cases -->
         <div class="cases">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage text_align_center ">
                        <h2>Having doubts about donating blood?</h2>
                        <p>We are there to clear your each and every doubt regarding blood donating</p>
                     </div>
                  </div>
               </div>
               <div class="row d_flex">
                  <div class=" col-md-4">
                     <div class="latest text_align_center">
                        <figure>
                        <?php
                        if (isset($_SESSION['nic'])) {
               echo "  <img src='../Public/images/whyDonate.png' alt='#' class='center'>";
             }else {
                echo " <img src='././Public/images/whyDonate.png' alt='#' class='center'>";
             }
             ?>
                          </figure>
                        
                        <div class="nostrud">
                           <h3>Why Donate Blood?</h3>
                           <p>Giving blood saves lives. The blood you give is a lifeline in an emergency and for people who need long-term treatments. With the breakout of the pandemiic, currently the world is facing a scarcity in blood donors. Therefore the younger generation should be encouraged to donate blood</p>
                        </div>
                     </div>
                  </div>
                  <div class=" col-md-4">
                     <div class="latest text_align_center">
                        <figure>
                        <?php
                        if (isset($_SESSION['nic'])) {
               echo "  <img src='../Public/images/whoCan.png' alt='#' class='center'>";
             }else {
                echo "  <img src='././Public/images/whoCan.png' alt='#' class='center'>";
             }
             ?>
                          </figure>
                        
                        <div class="nostrud">
                        <h3>Who can give Blood?</h3>
                           <p>Most people can give blood if they are in good health. There are some basic requirements one  need to fulfill in order to become a blood donor. You can give blood if you are in fit and healthy
                           ,weigh between 7 stone 12 lbs and 25 stone, or 50kg and 158kg
                           ,are aged between 17 and 66 (or 70 if you have given blood before)
                           ,are over 70 and have given a full blood donation in the last two years.
                           f previously donated, at least 4 months should be elapsed since the date of previous donation. Should be free from any serious disease condition or pregnancy and have a valid identity card or any other document to prove the identity.
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class=" col-md-4">
                     <div class="latest text_align_center">
                        <figure>
                        <?php
                        if (isset($_SESSION['nic'])) {
               echo "<img src='../Public/images/howOften.png' alt='#' class='center'>";
             }else {
                echo "<img src='././Public/images/howOften.png' alt='#' class='center'>";
             }
             ?>
                           </figure>
                        
                        <div class="nostrud">
                        <h3>How often can you give Blood?</h3>
                        <p>You must wait at least eight weeks (56 days) between donations of whole blood and 16 weeks ,
                           (112 days) between Power Red donations. Whole blood donors can donate up to 6 times a year. ,
                           Platelet apheresis donors may give every 7 days up to 24 times per year.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end cases -->
            <!-- doctors -->
         <div class="doctors">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="titlepage text_align_center ">
                        <h2>Our Vision & Mission</h2>
                     </div>
                  </div>
               </div>
               <div class="row d_flex">
                  <div class=" col-md-6">
                        <div id="ho_efcet" class="reader text_align_center">
                           <i>
                           <?php
                        if (isset($_SESSION['nic'])) {
               echo "  <img src='../Public/images/Vision.png' alt='#'>";
             }else {
                echo "  <img src='././Public/images/Vision.png' alt='#'>";
             }
             ?>
                             </i>
                           <h3>Our Vision</h3>
                           <p>Our vision is to provide quality and safe blood to each and every person in need and be solution providers to the scarcity of blood in Blood Banks</p>
                           <span>
                           <?php
                        if (isset($_SESSION['nic'])) {
               echo "   <img src='../Public/images/do.png' alt='#' style='size: 30px;'>";
             }else {
                echo " <img src='././Public/images/do.png' alt='#' style='size: 30px;'>";
             }
             ?>
                          </span>
                        </div>
                     </div>
                             <div class=" col-md-6">
                        <div id="ho_efcet" class="reader text_align_center">
                           <i>
                           <?php
                        if (isset($_SESSION['nic'])) {
               echo "   <img src='../Public/images/Mission3.png ' alt='#'/>";
             }else {
                echo "  <img src='Public/images/Mission3.png ' alt='#'/>";
             }
             ?> 
                          </i>
                           <h3>Our Mission</h3>
                           <p>Our mission is to decrease the blood scarcity prevailing around the country by 50% by the year 2025 through connecting the willing dodnors and the required parties while getting 2000+ registered users by year 2025 </p>
                           <span>
                           <?php
                        if (isset($_SESSION['nic'])) {
               echo "  <img src='..//Public/images/do.png' alt='#'/>";
             }else {
                echo "  <img src='././Public/images/do.png' alt='#'/>";
             }
             ?>
                          </span>
                        </div>
                     </div>
                  </div>
            </div>
         </div>
         <!-- end cases -->
   <!-- update -->
   <div class="update">
      <div class="cevery_white">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Get Every Update.... </h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
      
   </div>
   <!-- update -->
         <!--  footer -->
         <footer>
            <div class="footer">
               <div class="container">
               </div>
            </div>
         </footer>
    </div>
      <!-- end footer -->
      <!-- Javascript files-->
      <?php
      if (isset($_SESSION['nic'])) {
         echo "  <script src='../Public/js/jquery.min.js'></script>";
      }
      else {
         echo "  <script src='Public/js/jquery.min.js'></script>";
      }
      ?>
      <?php
      if (isset($_SESSION['nic'])) {
         echo " <script src='../Public/js/bootstrap.bundle.min.js'></script>";
      }
      else {
         echo " <script src='Public/js/bootstrap.bundle.min.js'></script>";
      }
      ?>
      <?php
      if (isset($_SESSION['nic'])) {
         echo " <script src='../Public/js/owl.carousel.min.js'></script>";
      }
      else {
         echo " <script src='Public/js/owl.carousel.min.js'></script>'>";
      }
      ?>
       <?php
      if (isset($_SESSION['nic'])) {
         echo "<script src='../Public/js/custom.js'></script>'>";
      }
      else {
         echo "<script src='Public/js/custom.js'></script>";
      }
      ?>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js'></script>
     
      
   </body>
</html>