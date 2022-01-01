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
   
    <link rel="stylesheet" href="../Public/css/places.css">
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <title>Document</title>



    <script>
        // The following example creates a marker in Stockholm, Sweden using a DROP
// animation. Clicking on the marker will toggle the animation between a BOUNCE
// animation and no animation.


function initMap() {
    let marker;
  const map = new google.maps.Map(document.getElementById("map"), {
    zoom: 10,
    center: { lat: 59.325, lng: 18.07 },
  });

  marker = new google.maps.Marker({
    map,
    draggable: true,
    animation: google.maps.Animation.DROP,
    position: { lat: 59.327, lng: 18.067 },
  });
  marker.addListener("click", function(){
    if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
  });




 
  const innermap = new google.maps.Map(document.getElementById("innermap"), {
    zoom: 13,
    center: { lat: 5.95492, lng: 80.554956 },
  });
 
  let innermarker = new google.maps.Marker({
    innermap,
    draggable: true,
    animation: google.maps.Animation.DROP,
    position: { lat: 5.95492, lng: 80.554956 },
  });
  innermarker.addListener("click", function(){
    if (innermarker.getAnimation() !== null) {
    innermarker.setAnimation(null);
  } else {
    innermarker.setAnimation(google.maps.Animation.BOUNCE);
  }
  });
}


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
               <li><a  href="index">Home</a></li>
               <li><a href="#">Request Camp</a></li>
               <li><a href="User/loadBRForm">Request Blood</a></li>
               <li><a class="active" href="#">Where to Donate</a></li>
               <li><a href="#">Blood adverticement</a></li>
               
            </ul>
         </nav>
         
      </header>
<div class="body">
  <div class="container outer-request">
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
                        <div class="image-box" >
                          <div id="map">

                          </div>
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
                   
                    <div class="modal__map" id="innermap">
                     
                    </div>
                    
                    
                    
                
                    <a href="#modal-closed" class="link-2"></a>
                
                  </div>
                </div>     
              </div>
              <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 ">
                <a href="#modal-opened" id="modal-closed">
                  <div class="card-flyer">
                    <div class="text-box">
                        <div class="image-box" >
                            <div id="map2">
  
                            </div>
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
                        <div class="image-box" >
                            <div id="map">
  
                            </div>
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
                        <div class="image-box" >
                            <div id="map">
  
                            </div>
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
    </div>
  </div>
  </div>
  <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDB9QFyUSZ75iGCi9yhjubJM8H0yw2koqE&callback=initMap&v=weekly"
      async
    ></script> 
    
    
</body>
</html>