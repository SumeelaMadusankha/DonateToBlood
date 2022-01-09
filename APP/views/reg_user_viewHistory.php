<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user_reg.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>User_Reg</title>
    
     
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
       <link rel="stylesheet" href="../Public/css/owl.carousel.min.css"> 
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link rel="stylesheet" href="https://rawgit.com/LeshikJanz/libraries/master/Bootstrap/baguetteBox.min.css">

      <link rel="stylesheet" href="../../Public/css/reg_user_history.css">
      <link rel="stylesheet" href="../../Public/css/hd.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
      <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
      <!-- <script src="../Public/js/user_reg.js"></script> -->
    

     


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
               <li><a href='../Login/logout'>Logout</a></li>
              
            </ul>
         </nav>
         
      </header>
      <!-- <div class="body">
         <div class="container">
            <div class="title">Donation History</div>
            <div class="user-photo">
               <img src="" alt="">
            </div>
            <div class="details">
               <h3>Nisanya Pathirana</h3>
               <div class="blood-type">Blood Type: <span>A+</span></div>
               <div class="district">District: <span>Matara</span></div>
               <div class="history">
                  <h5>Donation History</h5>
                  <small></small>
                  <div class="date">Last Donated Date : <span>2021</span></div>
                  <div class="place">Last Donated place : <span>Matara</span></div>
                  <div class="next">Next eligible date for donating blood : <span>Matara</span></div>

               </div>
            </div>

         </div>
      </div> -->
      <div class="outer_class">
         <div class="body">
            <div class="wrapper">
               <div class="left">
                  <img src="../../Public/images/img2.JPG" alt="user" width="100">
                  
                  <h4>Nisanya Pathirana</h4>
                  <p>Registered User</p>
            </div>
            <div class="right">
              <div class="info">
                  <h3>Information</h3>
                  <div class="info_data">
                       <div class="data">
                          <h4>District</h4>
                          <p>Matara</p>
                       </div>
                       <div class="data">
                         <h4>Phone</h4>
                          <p>077 242 6488</p>
                        </div>
                        <div class="data">
                           <h4>Blood Type</h4>
                            <p>A+</p>
                        </div>
                        <div class="data">
                           <h4>Next eligile date</h4>
                            <p>12th</p>
                        </div>
                  </div>
              </div>
            
               <div class="History">
                  <h3>Donation History</h3>
                  <div class="content-table">
                          <table>
                           <thead>
                              <tr>
                                 <th>Date of Donation</th>
                                 <th>Place of Donation</th>
                              </tr>
                           </thead>
                           <tbody>
                              <td>12</td>
                              <td>Matara</td> 
                           </tbody>
                          </table>
                  </div>
               </div>
            </div>
            
         </div>
      </div>
 
</body>
   <!-- ---------