const form = document.querySelector("form");

fieldName = form.querySelector(".fullName"),
inpName = fieldName.querySelector("input"),

fieldAddress=form.querySelector(".address"),
inpAddress=fieldAddress.querySelector("input"),

fieldNumber=form.querySelector(".mobNum"),
inpNumber=fieldNumber.querySelector("input");

fieldDescription=form.querySelector(".description"),
inpDescription=fieldDescription.querySelector("input");

fieldarrachment=form.querySelector(".attachment"),
inpAttachment=fieldarrachment.querySelector("input");

fieldDueDate=form.querySelector(".dueDate"),
inpDueDate=fieldDueDate.querySelector("input");


function submitRequestForm(){
 
    
    (inpName.value == "") ? fieldName.classList.add("shake", "error") : nameVal();
  (inpAddress.value == "") ? fieldAddress.classList.add("shake", "error") : addressVal();
  (inpNumber.value == "")? fieldNumber.classList.add("shake","error") : mobileVal();
  (inpDescription.value == "")? fieldDescription.classList.add("shake","error") : descriptionVal();
  setTimeout(()=>{ 
    fieldName.classList.remove("shake");
    fieldAddress.classList.remove("shake");
    fieldNumber.classList.remove("shake");
    fieldDescription.classList.remove("shake");
  }, 500);

  inpName.onkeyup = ()=>{nameVal();} 
  inpAddress.onkeyup = ()=>{addressVal();} 
  inpNumber.onkeyup = ()=>{mobileVal();}
  inpDescription.onkeyup = ()=>{descriptionVal();}
  inpDueDate.onsubmit = ()=>{descriptionVal();}
    
    if((!fieldName.classList.contains("error")) && (!fieldAddress.classList.contains("error")) && (!fieldNumber.classList.contains("error"))&&(!fieldDescription.classList.contains("error"))){
 
    return true;
    }
    else{
      showNotification("Please Check Your Details again");
     return false;
    }
}


  
  
// submitFormVirtual();

function nameVal(){
    
  var regName = new RegExp('^[-a-zA-Z ]+$');
  if(!inpName.value.match(regName)){
      
      fieldName.classList.add("error");
      fieldName.classList.remove("valid");
      let errorTxt = fieldName.querySelector(".error-text");
      
      if(inpName.value != ""){
          
        if((isNaN(inpName.value))){
          errorTxt.innerText = "Name can only conatain english letters";
        }else{
          errorTxt.innerText = "Enter a proper Name";
        }
          
          
      }else{
          
          errorTxt.innerText = "Name can't be blank";
          
      }
     
  }else{ 
      
      fieldName.classList.remove("error");
      fieldName.classList.add("valid");
      
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


function mobileVal(){
  fieldNumber.classList.add("error");
  fieldNumber.classList.remove("valid");
  let errorTxt = fieldNumber.querySelector(".error-text");
  var regName = new RegExp("^[0]{1}[0-9]{9}$");
  var regName1 = new RegExp("^[a-zA-Z]$");

  
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

function descriptionVal(){
  
  fieldDescription.classList.add("error");
  fieldDescription.classList.remove("valid");
  let errorTxt = fieldDescription.querySelector(".error-text");
    
      
    if(inpDescription.value != ""){
        
      if(inpDescription.value.length<5){
        errorTxt.innerText = "Description must be more than 50 letters";
      }else{
        fieldDescription.classList.remove("error");
        fieldDescription.classList.add("valid");
      }
        
       
    }else{ 
      errorTxt.innerText = "Description can't be empty!";
        
        
    }
    
    
}

function dateVal(){

  var today = new Date();
  var dd = String(today.getDate()).padStart(2, '0');
  var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
  var yyyy = today.getFullYear();

  today =  yyyy + '-' + mm + '-' + dd; 
  if (inpDueDate.value > today){

    
    return true;

  }else{
    alert("Due Date must in future day!");
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