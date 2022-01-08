<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user_reg.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>User_Reg</title>
    
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

      <link rel="stylesheet" href="../Public/css/user_reg.css">
      <link rel="stylesheet" href="../Public/css/hd.css">
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
            <label class="logo">DonateToHeal</label>
            <ul>
               <li><a class="active" href="index">Home</a></li>
               <li><a href="#">Request Camp</a></li>
               <li><a href="User/loadBRForm">Request Blood</a></li>
               <li><a href="#">Where to Donate</a></li>
               <li><a href="#">Blood adverticement</a></li>
               <li><a href='../Login/logout'>Logout</a></li>
              
            </ul>
         </nav>
         
      </header>
   <!-- ----------------------------------------------  -->
 
  <div class="outer_class">
  <div class="body">
<div class="ex">
<div class="form" >


    
        <form action="../RegisteredUser/addRequest" method="POST" id="req_form">


           <h1 class="topic" >Blood Request Form</h1>
           <?php
           
           
      if (isset($_SESSION['msg'])) {
        unset($_SESSION['msg']); 
    
        echo "<div class='flag note note--success'>
                <div class='flag__image note__icon'>
                  <i class='fa fa-check-circle'></i>
                </div>
                <div class='flag__body note__text'>  
                  Your request has been sent  Successfully! 
                </div>
                <a href='#' class='note__close'>
                  <i class='fa fa-times'></i>
                </a>
              </div>";
     
      }elseif(isset($_SESSION['error'])) {
         unset($_SESSION['error']); 
    
         echo "<div class='flag note note--error'>
         <div class='flag__image note__icon'>
           <i class='fa fa-times'></i>
         </div> <div class='flag__body note__text'>
         Your request has not been sent. Try again! 
         </div>
         <a href='#' class='note__close'>
           <i class='fa fa-times'></i>
         </a>
       </div>";
      } 
        
         ?>

        <div class="container" >
            
            
            
           

            <div class="field fullName">
            <label for="flname"><b>Full Name</b></label><br>
            <input type="text" placeholder="Full Name" name="flname" id="flname" >
            <div class="error error-text"> Name can't be blank</div><br>
            </div>
            

            <div class="field bloods">
                <label for="blood"><b>Blood Type</b></label><br>
            <select name="blood" id="blood">
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
            </select>
            <div class="error error-text"> Blood Type can't be blank</div><br>
            
            </div>


            <div class="field address"> 
            <label for="address"><b>Address</b></label><br>
            <!-- <textarea name="address" id="address" cols="50" rows="3" placeholder="Address"></textarea> -->
            <input type="text" placeholder="Address" name="address" id="address" >
            <div class="error error-text"> Address can't be blank</div><br>
          
            </div>

            <div class="field mobNum">
            <label for="num"><b>Contact Number</b></label><br>
            <input type="text" placeholder="Contact Number" name="num" id="num" >
            <div class="error error-text"> Mobile Number can't be blank</div><br>
            </div>
            
            <div class="field description">
            <label for="description"><b>Description</b></label><br>
            <input type="text" placeholder="Description regarding the request" name="description" id="description" >
            <div class="error error-text"> Description can't be blank</div><br>
            </div>
            
            <div class="field attachment">
            <label for="att"><b>Attachment</b></label><br>
            <input type="file" placeholder="attachment" name="att" id="att" ><br>
            <div class="error error-text"> Attachment can't be blank</div><br>
            </div>

            
            <div class="field dueDate">
            <label for="duedate"><b>Due Date to recieve blood</b></label><br>
            <input type="date" placeholder="Due Date" name="duedate" id="duedate" >
            <div class="error error-text"> Due Date can't be blank</div><br>
            </div>
            

        </div>    
        
       
        <input type="submit" value="Submit" class="registerbtn" name="sbmt_btn"  onclick="return ( submitRequestForm() &&  dateVal()  )">
        
       
        
        <!-- dateVal() && -->

        </form>
          
    
</div>

</div> 

  </div>
  </div>
  <script src="../Public/js/blood_request_val.js"></script>
        <script src="../Public/js/jquery.min.js"></script>
        <script src="../Public/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
        <script src="../Public/js/owl.carousel.min.js"></script>
        <!-- <script src="../Public/js/custom.js"></script> -->
</body>
</html>