<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user_reg.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>User_Reg</title>
    <!-- --------------------------------------------------- -->
    <!-- <link rel="stylesheet" href="css/responsive.css">
      fevicon
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      fonts-->
      <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      Scrollbar Custom CSS -->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
       <link rel="stylesheet" href="../Public/css/owl.carousel.min.css"> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">
      <link rel="stylesheet" href="../Public/css/header.css">
      <link rel="stylesheet" href="../Public/css/user_reg.css">
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
      <script src="../Public/js/user_reg.js"></script>




</head>
   
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
   <!-- ----------------------------------------------  -->
   <div class="outer_class">

    <div class="form" >

        
            <form action="../User/register" method="POST" id="reg_form">
               <h1 class="topic" >User Registation</h1>

            <div class="container" >
                
                
                <hr>
                <label for="fname"><b>First Name</b></label><br>
                <input type="text" placeholder="First Name" name="fname" id="fname" ><br>
    
                <label for="lname"><b>Last Name</b></label><br>
                <input type="text" placeholder="Last Name" name="lname" id="lname" ><br>

                <label for="age"><b>Age</b></label><br>
                <input type="text" placeholder="Age" name="age" id="age" ><br>
    
                <label for="email"><b>Email</b></label><br>
                <input type="text" placeholder="Email" name="email" id="email" ><br>
    
                <label for="mobnum"><b>Mobile Number</b></label><br>
                <input type="text" placeholder="Mobile Number" name="mobnum" id="mobnum" ><br>
    
                <label for="nic"><b>NIC</b></label><br>
                <input type="text" placeholder="National Identity Card" name="nic" id="nic" ><br>

                <label for="address"><b>Address</b></label><br>
                <textarea name="address" id="address" cols="553" rows="3"></textarea>
                
    
                <div class="gender">
                    <label for="gender"><b>Gender</b></label><br>

                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>

                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
        
                    <input type="radio" id="no" name="gender" value="no_gender">
                    <label for="no">Nannaya</label>

                    
                </div>
                <div>
                    <label for="bday"><b>Birth Day</b></label><br>
                <input type="date" placeholder="Birth Day" name="bday" id="bday" ><br>
    
                <label for="city"><b>City</b></label><br>
                <input type="text" placeholder="City" name="city" id="city" ><br>
                </div>
                
    
                
                <div class="dictrict">
                <label for="district"><b>District</b></label><br>
                <select name="districts" id="districts">
                    <option value="matara">Matara</option>
                    <option value="galle">Galle</option>
                    <option value="jaffna">Jaffna</option>
                    <option value="colombo">Colombo</option>
                </select><br>
    
                </div>
                
                <div class="bloods">
                    <label for="blood"><b>Blood Group</b></label><br>
                <select name="blood" id="blood">
                    <option value="A+">A+</option>
                    <option value="A-">A-</option>
                    <option value="B+">B+</option>
                    <option value="B-">B-</option>
                    <option value="O+">O+</option>
                    <option value="O-">O-</option>
                </select><br>
                </div>
                
    

            </div>    
            
            <input type="submit" value="Register" class="registerbtn" name="register_btn">
           
            
            

            </form>
              
        
    </div>

   </div> 
   
   
   
</body>
</html>