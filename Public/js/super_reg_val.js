const form = document.querySelector("form");
fieldfName = form.querySelector(".firstName"),
inpfName = fieldfName.querySelector("input");

fieldlName = form.querySelector(".lastName"),
inplName = fieldlName.querySelector("input");

fieldNumber=form.querySelector(".mobileNo"),
inpNumber=fieldNumber.querySelector("input");

fieldEmail = form.querySelector(".email"),
inpEmail=fieldEmail.querySelector("input");

fieldNic = form.querySelector(".nic"),
inpNic = fieldNic.querySelector("input");

fieldPassword = form.querySelector(".password"),
inpPassword = fieldPassword.querySelector("input");

fieldRPassword = form.querySelector(".rpassword"),
inpRPassword = fieldRPassword.querySelector("input");

function showNotification(msg){
    var note = document.getElementById("note");
    note.innerHTML = msg;
    note.style.display = "block";
   // setTimeout(hideNotification(),3000);
    setTimeout(function(){
    
      document.getElementById("note").style.display = "none";
    
    }, 4000);
    
  }

  function nameValfirst(){
    var regName = new RegExp('^[-a-zA-Z ]+$');
    if(!inpfName.value.match(regName)){
        showNotification("First name can only contains English letters");
        return false;
    }else{
        return true;
    }

  }

  function nameVallast(){
    var regName = new RegExp('^[-a-zA-Z ]+$');
    if(!inplName.value.match(regName)){
        showNotification("Last name can only contains English letters");
        return false;
    }else{
        return true;
    }

  }

  function mobileVal(){
    var regName = new RegExp("^[0]{1}[0-9]{9}$");
  
    
    if(inpNumber.value.match(regName)){
      
      return true;
        
       
    }else{ 
        
        
  
        if(inpNumber.value != ""){ 
          
          
          if(((inpNumber.value).substr(0,1) != "0")){
            showNotification("First digit should be 0");
            return false;
          }else if (inpNumber.value.length == 10){
            showNotification("The contact number should only consist of digits");
            return false;
              
          }else{
            showNotification("Contact Number must have 10 digits");
            return false;
          }
            
         
            
          }else{
            
            showNotification("Number field can't be blank");
            return false;
            
        }
        
    }
  }

  function emailVal(){
  
    var regName = new RegExp("^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$");
    
    if(inpEmail.value != ""){
      if(inpEmail.value.match(regName)){
        return true;
  
      }else{
        showNotification("Enter a valid email");
        return false;
      }
    }else{
      showNotification("Email field can't be blank");
      return false;
    }  
  }

  function nicVal(){

    var regName = new RegExp("^[0-9]{9}[V|X|v|x]$");
    var regName1 = new RegExp("^[0-9]{12}$");
    if (inpNic.value.length == 10){
      if(inpNic.value.match(regName)){
        return true;
      }
      else{
        showNotification("Invalid NIC Number");
        return false;
      }
    }
    else if (inpNic.value.length == 12){
      if(inpNic.value.match(regName1)){
        return true;
      }
      else{
        showNotification("Invalid NIC Number");
        return false;
      }      
    }
    else{
      showNotification("Invalid NIC Number");
      return false;
    }



  }

  function checkPass() {
    // var regName = new RegExp("^(?=.\d)(?=.[a-z])(?=.[A-Z])(?=.[a-zA-Z]).{8,}$");
    let pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    if (!inpPassword.value.match(pattern)) {
        showNotification("must contain 8 characters, atleast one number, one uppercase letter and one lowercase letter");
        return false;
       
    } else {
        return reCheckPass();
    }
}

function reCheckPass() {
  if (!(inpPassword.value === inpRPassword.value)) {
    showNotification("Re-entered password is not matching");
    return false;
        
  }else {
      return true;
  }

}


