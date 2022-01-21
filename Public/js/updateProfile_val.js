const form = document.querySelector("form");
fieldfName = form.querySelector(".firstName"),
inpfName = fieldfName.querySelector("input");

fieldlName = form.querySelector(".lastName"),
inplName = fieldlName.querySelector("input");

fieldMob = form.querySelector(".mobile"),
inpMob = fieldMob.querySelector("input");

fieldEmail = form.querySelector(".email"),
inpEmail = fieldEmail.querySelector("input");

function nameValF(){
      
  var regName = new RegExp('^[-a-zA-Z ]+$');
  if(inpfName.value !=""){
    if (!inpfName.value.match(regName) ){
      showNotification("First name can only contain English letters");
      return false;
  }else{
      return true;
  }
  }else{
    showNotification("First Name can't be blank");
      return false;
  }
  
}

function nameValL(){
    
  var regName = new RegExp('^[-a-zA-Z ]+$');
  if(inplName.value !=""){
    if (!inplName.value.match(regName) ){
      showNotification("Last name can only contain English letters");
      return false;
  }else{
      return true;
  }
  }else{
    showNotification("Last Name can't be blank");
      return false;
  }
  
}

  function mobileVal(){
    var regName = new RegExp("^[0]{1}[0-9]{9}$");
  
    
    if(inpMob.value.match(regName)){
      
      return true;
        
       
    }else{ 
        
        
  
        if(inpMob.value != ""){ 
          
          
          if(((inpMob.value).substr(0,1) != "0")){
            showNotification("First digit should be 0");
            return false;
          }else if (inpMob.value.length == 10){
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

  function showNotification(msg){
  
    var note = document.getElementById("note");
    note.innerHTML = msg;
    note.style.display = "block";
   // setTimeout(hideNotification(),3000);
    setTimeout(function(){
    
      document.getElementById("note").style.display = "none";
    
    }, 4000);
    
  }