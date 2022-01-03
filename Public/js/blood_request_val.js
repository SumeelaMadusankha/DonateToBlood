const form = document.querySelector("form");
fieldName = form.querySelector(".fullName"),
inpName = fieldName.querySelector("input"),
fieldId = form.querySelector(".nid"),
inpId = fieldId.querySelector("input"),
fieldAddress=form.querySelector(".address"),
inpAddress=fieldAddress.querySelector("input"),
fieldNumber=form.querySelector(".mobNum"),
inpNumber=fieldAddress.querySelector("input");
fieldDescription=form.querySelector(".description"),
inpDescription=fieldAddress.querySelector("input");
fieldarrachment=form.querySelector(".attachment"),
inpAttachment=fieldAddress.querySelector("input");
fieldDueDate=form.querySelector(".dueDate"),
inpDueDate=fieldAddress.querySelector("input");


function submitFormVirtual(){
    if(!fieldName.classList.contains("error") ){
        checkValue();
        if (inpName.value!="") {
            
          post("../RegisteredUser/addRequest",{'nic':inpId.value,'flName':inpName.value,'blood':"A+",'address':inpAddress.value,'mobileNo':inpNumber.value,'description':inpDescription.value,'attachment':inpAttachment.value,'duedate':inpDueDate.value});
        }else{
            
            // alert(inpName.value);
        }
       
      }
  }

function nameVal(){
    
    var regName = new RegExp('^[A-Z][-a-zA-Z]+$');
    if(!inpName.value.match(regName)){
        
        fieldName.classList.add("error");
        fieldName.classList.remove("valid");
        let errorTxt = fieldName.querySelector(".error-text");
        
        // if(inpName.value != ""){
            
        //     errorTxt.innerText = "Enter a proper Name";
            
        // }else{
            
        //     errorTxt.innerText = "Name can't be blank";
            
        // }
        (inpName.value != "") ? errorTxt.innerText = "Enter a proper Name" : errorTxt.innerText = "Name can't be blank";
    }else{ 
        // alert("sumeela");
        fieldName.classList.remove("error");
        fieldName.classList.add("valid");
        
      }
}

function submitRequestForm(){
    
    (inpName.value == "") ? fieldName.classList.add("shake", "error") : nameVal();
//   (pInput.value == "") ? pField.classList.add("shake", "error") : checkPass();
//   (rpInput.value == "")? rpField.classList.add("shake","error") : reCheckPassword();
  setTimeout(()=>{ 
    fieldName.classList.remove("shake");
    // pField.classList.remove("shake");
    // rpField.classList.remove("shake");
  }, 500);

  inpName.onkeyup = ()=>{nameVal();} 
//   pInput.onkeyup = ()=>{checkPass();} 
//   rpInput.onkeyup = ()=>{reCheckPassword();}

    if(!fieldName.classList.contains("error")){
    return true;
    }
    else{
        alert("Wrong Inputs.. Please Check Again");
     return false;
    }
}

function post(path, params, method) {
    method = method || "post"; // Set method to post by default if not specified.
  
    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.
    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);
  
    for(var key in params) {
        if(params.hasOwnProperty(key)) {
            var hiddenField = document.createElement("input");
            hiddenField.setAttribute("type", "hidden");
            hiddenField.setAttribute("name", key);
            hiddenField.setAttribute("value", params[key]);
            
            form.appendChild(hiddenField);
         }
    }
  
    document.body.appendChild(form);
    form.submit();
  }
  
  
// submitFormVirtual();

 

  function checkValue(){
      if (inpName.value != ""){
          alert(inpName.value);
      }else{
          alert("No data");
      }
  }