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
    
    <link rel="stylesheet" href="../Public/css/hd.css">
   
    <link rel="stylesheet" href="../Public/css/whereToDonate.css">
    <!-- ---------------------------------------- -->
    
    

    
    <title>Document</title>



    
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
               <li><a  href="index">Home</a></li>
               <li><a href="#">Request Camp</a></li>
               <li><a href="User/loadBRForm">Request Blood</a></li>
               <li><a  href="#">Where to Donate</a></li>
               <li><a class="active" href="#">Blood adverticement</a></li>
               
            </ul>
         </nav>
         
      </header>
      <div class="body">
  <div class="container outer-request" >
    <div class="filter-mod">
      <div class="row ">
       
        <div class="col-md-6 col-xs-12 ">
          <form>
            <b><h4 style="font-weight: bold;">Filter acording to district</h4>  </b>
            <select id = "sell" onchange = "favTutorial()" class="form-control ">
            <option> ---Choose District--- </option>
            <option>Ampara </option>
            <option> Anuradhapura </option>
            <option> Badulla </option>
            <option>Batticalo </option>
            <option> Colombo </option>
            <option> Galle </option>
            <option> Gampaha</option>
            <option> Hambantota</option>
            <option> Jafna </option>
            <option> Kalutara </option>
            <option> Kandy</option>
            <option> Kagalla </option>
            <option> Kilinochchi </option>
            <option> Kurunagala</option>
            <option> Mannar </option>
            <option> Matale </option>
            <option>Matara </option>
            <option> Moneragala </option>
            <option> Mulativu </option>
            <option> Nuwara Elliya </option>
            <option> Polonnaruwa </option>
            <option> Puttalam </option>
            <option> Ratnapura </option>
            <option> Trincomalee </option>
            <option> Vavuniya </option>
            </select>
           
            </form>
        </div>
        <div class="col-md-6 col-xs-12 ">
          <form>
            <b><h4 style="font-weight: bold;"> Filter acording to blood type</h4> </b>
            <select id = "sell" onchange = "favTutorial()"  class="form-control">
            <option> ---Choose Blood Type--- </option>
            <option> A+ </option>
            <option> A- </option>
            <option> AB+ </option>
            <option> AB- </option>
            <option> B+ </option>
            <option> B- </option>
            <option> O+ </option>
            <option> O- </option>
            </select>
            </form>
        </div>
      </div>
      
    </div>
      
     
 
            <!-- Topic Cards -->
    <div id="cards_landscape_wrap-2">
      <div class="container-fluid" outer-request  >
          <div class="row" >
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
                <a href="#modal-opened" id="modal-closed">
                  <div class="card-flyer">
                    <div class="text-box">
                        <div class="image-box">
                          <img src="../Public/images/test1.jpg" alt="" />
                        </div>
                        <div class="text-container">
                            <h6 >BLOOD GROUP A+</h6>
                            <h5 style="text-align: left; padding-left: 15px;">District  :Matara    </h5>
                            <h5 style="text-align: left; padding-left: 15px;">Contact No:0766929289</h5>
                        </div>
                        
                     </div>
                  </div>
                </a>
                <div class="modal-container body" id="modal-opened">
                  <div class="modal-demo">
                
                    <div class="modal__details">
                      <h1 class="modal__title">BLOOD GROUP A+</h1>
                      <p class="modal__description">Sentence that will tell user what this modal is for or something.</p>
                    </div>
                
                    <p class="modal__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ex dicta maiores libero minus obcaecati iste optio, eius labore repellendus.</p>
                
                    
                
                    <a href="#modal-closed" class="link-2"></a>
                
                  </div>
                </div>     
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
                <a href="#modal-opened" id="modal-closed">
                  <div class="card-flyer">
                    <div class="text-box">
                        <div class="image-box">
                          <img src="../Public/images/test1.jpg" alt="" />
                        </div>
                        <div class="text-container">
                            <h6 >BLOOD GROUP A+</h6>
                            <h5 style="text-align: left; padding-left: 15px;">District  :Matara    </h5>
                            <h5 style="text-align: left; padding-left: 15px;">Contact No:0766929289</h5>
                        </div>
                        
                     </div>
                  </div>
                </a>
                <div class="modal-container body" id="modal-opened">
                  <div class="modal-demo">
                
                    <div class="modal__details">
                      <h1 class="modal__title">Modal Title</h1>
                      <p class="modal__description">Sentence that will tell user what this modal is for or something.</p>
                    </div>
                
                    <p class="modal__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ex dicta maiores libero minus obcaecati iste optio, eius labore repellendus.</p>
                
                    <button class="modal__btn">Button &rarr;</button>
                
                    <a href="#modal-closed" class="link-2"></a>
                
                  </div>
                </div>      
                 
                  
                  
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
                <a href="#modal-opened" id="modal-closed">
                  <div class="card-flyer">
                    <div class="text-box">
                        <div class="image-box">
                          <img src="../Public/images/test1.jpg" alt="" />
                        </div>
                        <div class="text-container">
                            <h6 >BLOOD GROUP A+</h6>
                            <h5 style="text-align: left; padding-left: 15px;">District  :Matara    </h5>
                            <h5 style="text-align: left; padding-left: 15px;">Contact No:0766929289</h5>
                        </div>
                        
                     </div>
                  </div>
                </a>
                <div class="modal-container body" id="modal-opened">
                  <div class="modal-demo">
                
                    <div class="modal__details">
                      <h1 class="modal__title">Modal Title</h1>
                      <p class="modal__description">Sentence that will tell user what this modal is for or something.</p>
                    </div>
                
                    <p class="modal__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ex dicta maiores libero minus obcaecati iste optio, eius labore repellendus.</p>
                
                    <button class="modal__btn">Button &rarr;</button>
                
                    <a href="#modal-closed" class="link-2"></a>
                
                  </div>
                </div>      
                 
                  
                  
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
                <a href="#modal-opened" id="modal-closed">
                  <div class="card-flyer">
                    <div class="text-box">
                        <div class="image-box">
                          <img src="../Public/images/test1.jpg" alt="" />
                        </div>
                        <div class="text-container">
                            <h6 >BLOOD GROUP A+</h6>
                            <h5 style="text-align: left; padding-left: 15px;">District  :Matara    </h5>
                            <h5 style="text-align: left; padding-left: 15px;">Contact No:0766929289</h5>
                        </div>
                        
                     </div>
                  </div>
                </a>
                <div class="modal-container body" id="modal-opened">
                  <div class="modal-demo">
                
                    <div class="modal__details">
                      <h1 class="modal__title">Modal Title</h1>
                      <p class="modal__description">Sentence that will tell user what this modal is for or something.</p>
                    </div>
                
                    <p class="modal__text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ex dicta maiores libero minus obcaecati iste optio, eius labore repellendus.</p>
                
                    <button class="modal__btn">Button &rarr;</button>
                
                    <a href="#modal-closed" class="link-2"></a>
                
                  </div>
                </div>      
                 
                  
                  
              </div>
      </div>
      <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <div class="card-flyer">
                <div class="text-box">
                    <div class="image-box">
                      <img src="../Public/images/test1.jpg" alt="" />
                    </div>
                    <div class="text-container">
                        <h6 >BLOOD GROUP A+</h6>
                        <h5 style="text-align: left; padding-left: 15px;">District  :Matara    </h5>
                        <h5 style="text-align: left; padding-left: 15px;">Contact No:0766929289</h5>
                    </div>
                    
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <div class="card-flyer">
                <div class="text-box">
                    <div class="image-box">
                      <img src="../User/images/test1.jpg" alt="" />
                    </div>
                    <div class="text-container">
                        <h6 >BLOOD GROUP A+</h6>
                        <h5 style="text-align: left; padding-left: 15px;">District  :Matara    </h5>
                        <h5 style="text-align: left; padding-left: 15px;">Contact No:0766929289</h5>
                    </div>
                    
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <div class="card-flyer">
                <div class="text-box">
                    <div class="image-box">
                      <img src="../User/images/test1.jpg" alt="" />
                    </div>
                    <div class="text-container">
                        <h6 >BLOOD GROUP A+</h6>
                        <h5 style="text-align: left; padding-left: 15px;">District  :Matara    </h5>
                        <h5 style="text-align: left; padding-left: 15px;">Contact No:0766929289</h5>
                    </div>
                    
                </div>
            </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
              <div class="card-flyer">
                <div class="text-box">
                    <div class="image-box">
                      <img src="../User/images/test1.jpg" alt="" />
                    </div>
                    <div class="text-container">
                        <h6 >BLOOD GROUP A+</h6>
                        <h5 style="text-align: left; padding-left: 15px;">District  :Matara    </h5>
                        <h5 style="text-align: left; padding-left: 15px;">Contact No:0766929289</h5>
                    </div>
                    
                </div>
            </div>
            </div>
        </div>
    </div>
  </div>

  </div>
    
    
</body>
</html>