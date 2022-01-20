const form = document.querySelector("form");

fieldfName = form.querySelector(".firstName"),
inpfName = fieldfName.querySelector("input");
fieldlName = form.querySelector(".lastName"),
inplName = fieldlName.querySelector("input");

fieldAge=form.querySelector(".age"),
inpAge=fieldAge.querySelector("input");

fieldNumber=form.querySelector(".mobNum"),
inpNumber=fieldNumber.querySelector("input");

fieldEmail=form.querySelector(".email"),
inpEmail=fieldEmail.querySelector("input");

fieldAddress=form.querySelector(".address"),
inpAddress=fieldAddress.querySelector("input");

fieldBirth=form.querySelector(".birthday"),
inpBirth=fieldBirth.querySelector("input");

fieldCity=form.querySelector(".city"),
inpCity=fieldCity.querySelector("input");

fieldEmail = form.querySelector(".email"),
inpEmail=fieldEmail.querySelector("input");

fieldCity = form.querySelector(".city"),
inpCity=fieldCity.querySelector("input");

var inpGender;
var gender;
var dob;

  function submitRequestForm(){
    
    
    (inpfName.value == "") ? fieldfName.classList.add("shake", "error") : firstNameVal();
    (inplName.value == "") ? fieldlName.classList.add("shake", "error") : lastNameVal();
  (inpAge.value == "") ? fieldAge.classList.add("shake", "error") : ageVal();
  (inpNumber.value == "") ? fieldNumber.classList.add("shake", "error") : mobileVal();
  (inpAddress.value == "") ? fieldAddress.classList.add("shake", "error") : addressVal();
  (inpEmail.value == "") ? fieldEmail.classList.add("shake", "error") : emailVal();
  (inpCity.value == "") ? fieldCity.classList.add("shake", "error") : cityVal();


  setTimeout(()=>{ 
    fieldfName.classList.remove("shake");
    fieldlName.classList.remove("shake");
    fieldAge.classList.remove("shake");
    fieldNumber.classList.remove("shake");
    fieldAddress.classList.remove("shake");
    fieldEmail.classList.remove("shake");
    fieldCity.classList.remove("shake");
   
  }, 500);

  inpfName.onkeyup = ()=>{firstNameVal();} 
  inplName.onkeyup = ()=>{lastNameVal();} 
  inpAge.onkeyup = ()=>{ageVal();} 
  inpNumber.onkeyup = ()=>{mobileVal();} 
  inpAddress.onkeyup = ()=>{addressVal();} 
  inpEmail.onkeyup = ()=>{emailVal();} 
  inpCity.onkeyup = ()=>{emailVal();} 

    
    if((!fieldfName.classList.contains("error")) && (!fieldlName.classList.contains("error")) && (!fieldAge.classList.contains("error")) 
    && (!fieldNumber.classList.contains("error")) && (!fieldAddress.classList.contains("error"))  && (!fieldEmail.classList.contains("error")) && (!fieldCity.classList.contains("error"))){
 
    return true;
    }
    else{
        showNotification("Please Check Your Details Again");
     return false;
    }
}


function firstNameVal(){
    
    var regName = new RegExp('^[-a-zA-Z ]+$');
    if(!inpfName.value.match(regName)){
        
        fieldfName.classList.add("error");
        fieldfName.classList.remove("valid");
        let errorTxt = fieldfName.querySelector(".error-text");
        
        if(inpfName.value != ""){
            
          if((isNaN(inpfName.value))){
            errorTxt.innerText = "Name can only conatain english letters";
          }else{
            errorTxt.innerText = "Enter a proper Name";
          }
            
            
        }else{
            
            errorTxt.innerText = "Name can't be blank";
            
        }
       
    }else{ 
        
        fieldfName.classList.remove("error");
        fieldfName.classList.add("valid");
        
      }
  }

  function lastNameVal(){
    
    var regName = new RegExp('^[-a-zA-Z ]+$');
    if(!inplName.value.match(regName)){
        
        fieldlName.classList.add("error");
        fieldlName.classList.remove("valid");
        let errorTxt = fieldlName.querySelector(".error-text");
        
        if(inplName.value != ""){
            
          if((isNaN(inplName.value))){
            errorTxt.innerText = "Name can only conatain english letters";
          }else{
            errorTxt.innerText = "Enter a proper Name";
          }
            
            
        }else{
            
            errorTxt.innerText = "Name can't be blank";
            
        }
       
    }else{ 
        
        fieldlName.classList.remove("error");
        fieldlName.classList.add("valid");
        
      }
  }

  function ageVal(){
    fieldAge.classList.add("error");
    fieldAge.classList.remove("valid");
    let errorTxt = fieldAge.querySelector(".error-text");

    if(!(isNaN(inpAge.value))){
        
        if(inpAge.value >= 18){
            
            fieldAge.classList.remove("error");
            fieldAge.classList.add("valid");
        }else{
            errorTxt.innerText = "Age must be greater than 18";
        }
    }else{
        errorTxt.innerText = "Age must be a Number";
    }
    
  }

  function mobileVal(){
    fieldNumber.classList.add("error");
    fieldNumber.classList.remove("valid");
    let errorTxt = fieldNumber.querySelector(".error-text");
    var regName = new RegExp("^[0]{1}[0-9]{9}$");
    
  
    
    if(inpNumber.value.match(regName)){
      
        fieldNumber.classList.remove("error");
        fieldNumber.classList.add("valid");
        
       
    }else{ 
        
        
  
        if(inpNumber.value != ""){ 
          
          
          if(((inpNumber.value).substr(0,1) != "0")){
            errorTxt.innerText = " first Number format should be 0";
          }else if (inpNumber.value.length == 10){
            errorTxt.innerText = "Contact Number can only conatains numbers";
              
          }else{
              errorTxt.innerText = "Contact Number must have 10 digits";
          }
            
         
            
          }else{
            
            errorTxt.innerText = "Contact Number can't be blank";
            
        }
        
    }
  }

  function addressVal(){
    fieldAddress.classList.add("error");
    fieldAddress.classList.remove("valid");
    let errorTxt = fieldAddress.querySelector(".error-text");
      
        
      if(inpAddress.value == ""){
          
          errorTxt.innerText = "Address can't be empty!";
         
      }else{ 
          
          fieldAddress.classList.remove("error");
          fieldAddress.classList.add("valid");
          
      }  
  }


  function emailVal(){
    fieldEmail.classList.add("error");
    fieldEmail.classList.remove("valid");
    let errorTxt = fieldEmail.querySelector(".error-text");
    var regName = new RegExp("^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$");
    
    if(inpEmail.value != ""){
      if(inpEmail.value.match(regName)){
      
        fieldEmail.classList.remove("error");
        fieldEmail.classList.add("valid");
  
      }else{
        errorTxt.innerText = "Enter a valid Email";
      }
    }else{
      errorTxt.innerText = "Email can't be blank";
    }  
  }

  function cityVal(){
    fieldCity.classList.add("error");
    fieldCity.classList.remove("valid");
    let errorTxt = fieldCity.querySelector(".error-text");
      
        
      if(inpCity.value == ""){
          
          errorTxt.innerText = "City can't be empty!";
         
      }else{ 
          
          fieldCity.classList.remove("error");
          fieldCity.classList.add("valid");
          
      }  
  }
  

    function doCalculate(elm)
    {
      
      console.log(inpBirth.value);
        var nic = document.getElementById('nic').value.trim();
        
        var pattern = /[0-9]{9}[V|X|v|x]/;
        var newId = false;
        var NIC;
        if(nic.length == 12){
            
           NIC = nic.substr(2,5) + nic.substr(8,12);
           nic = NIC + "v";

         }
        if (!pattern.test(nic))
        {
          showNotification("Invalid NIC");
            return false;
        }
        let date =  new Date().getFullYear();
        
        let yr = date.toString();
        if (nic.substr(0,2) < yr.substring(0,2)){
            newId = true;
            
        }
        var mon =
                {
                    "1": ["01", 31],
                    "2": ["02", 29],
                    "3": ["03", 31],
                    "4": ["04", 30],
                    "5": ["05", 31],
                    "6": ["06", 30],
                    "7": ["07", 31],
                    "8": ["08", 31],
                    "9": ["09", 30],
                    "10": ["10", 31],
                    "11": ["11", 30],
                    "12": ["12", 31]
                };
        if (nic.length >= 5)
        {
            if (newId){
                year = "20" + nic.substr(0, 2);
            }else{
                year = "19" + nic.substr(0, 2);
            }
            
            days = parseInt(nic.substr(2, 3));
            if (days > 500)
            {
                gender = "Female";
                days = days - 500;
            }
            else
            {
                gender = "Male";
            }
            var key;
            for (key in mon)
            {
                if (days > mon[key][1])
                {
                    days = days - mon[key][1];
                }
                else
                {
                    break;
                }
            }
            if (days < 10)
            {
                days = "0" + days;
            }
            dob =  year + "-" + mon[key][0] + "-" + days ;

            var getSelectedValue = document.querySelector( 'input[name="gender"]:checked');   
            if(getSelectedValue != null)   {
              inpGender = getSelectedValue.value;
            }else{
              
            }


            
            let yrU = (date -120).toString();
            let yrL = (date -18).toString();
            
            if (!(yrU < nic.substr(0,2) <= yrL)){
                showNotification("please enter valid NIC");
                return false;
            }
            
            if (inpBirth.value == ""){
              showNotification("Enter Your Birthday");
              return false;
            }
            if(inpBirth.value != dob){
              showNotification("Enterd Birthday doesn't match with NIC");
              return false;
            }
            
            if(inpGender != gender){
              showNotification("Selected gender not match with NIC");
              return false;
            }

            return true;
        }
        return false;
    }

    function showNotification(msg){
      var note = document.getElementById("note");
      note.innerHTML = msg;
      note.style.display = "block";
     // setTimeout(hideNotification(),3000);
      setTimeout(function(){
      
        document.getElementById("note").style.display = "none";
      
      }, 4000);
      
    }