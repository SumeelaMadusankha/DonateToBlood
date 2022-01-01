


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
      <link rel="stylesheet" href="../Public/css/hd.css">
      <link rel="stylesheet" href="../Public/css/user_reg.css">
      
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
      <script src="../Public/js/user_reg.js"></script>


      <link rel="stylesheet" type="text/css" href="../Public/css/demo.css" />
	<link rel="stylesheet" type="text/css" href="../Public/css/alert.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
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

</head>
   
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
               <li><a href="#">Request Camp</a></li>
               <li><a href="User/loadBRForm">Request Blood</a></li>
               <li><a href="#">Where to Donate</a></li>
               <li><a href="#">Blood adverticement</a></li>
               
            </ul>
         </nav>
         
      </header>
   <!-- ----------------------------------------------  -->
   
   <div class="outer_class">
   <div class="body">
   <?php
      
      if (isset($_SESSION['error'])) {
        
      if ($_SESSION['error']=="Fill this form to complete the registration") {
        unset($_SESSION['error']); 
    
        echo "<div class='flag note note--info'>
        <div class='flag__image note__icon'>
          <i class='fa fa-info'></i>
        </div>
        <div class='flag__body note__text'>
          <p>Fill this form to complete the registration.</p>
        </div>
        <a href='#' class='note__close'>
          <i class='fa fa-times'></i>
        </a>

</div>";
     
      }else {
       
      } }
        
         ?>
      <div class="form" >

        
            <form action="../UnregisteredUser/register" method="POST" id="reg_form">
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
                <input type="text" placeholder="National Identity Card" 
                value="
                <?php 
                echo $data
                ?>"
                name="nic" id="nic"  >
                 <br>

                <label for="address"><b>Address</b></label><br>
                <textarea name="address" id="address" cols="50" rows="3" placeholder="Address"></textarea>
                
    
                <div class="gender">
                    <label for="gender"><b>Gender</b></label><br>

                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>

                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
        
                    <input type="radio" id="no" name="gender" value="no_gender">
                    <label for="no">Other</label>

                    
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
   </div>
   
   
</body>
</html>