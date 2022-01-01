
const form = document.querySelector("form");
eField = form.querySelector(".email"),
eInput = eField.querySelector("input"),
pField = form.querySelector(".password"),
pInput = pField.querySelector("input");

form.onsubmit = (e)=>{
  e.preventDefault(); 
  (eInput.value == "") ? eField.classList.add("shake", "error") : nicCheck();
  (pInput.value == "") ? pField.classList.add("shake", "error") : checkPass();

  setTimeout(()=>{ 
    eField.classList.remove("shake");
    pField.classList.remove("shake");
  }, 500);

  eInput.onkeyup = ()=>{nicCheck();} 
  pInput.onkeyup = ()=>{checkPass();} 

  function nicCheck(){ 
    var pattern_1 = new RegExp('^[0-9+]{9}[vV|xX]$');
  var pattern_2 = new RegExp('^[0-9+]{12}$');
    if((eInput.value.length < 10) || (eInput.value.length > 12) || (eInput.value.length==11)){ 
      eField.classList.add("error");
      eField.classList.remove("valid");
      let errorTxt = eField.querySelector(".error-txt");
      
      (eInput.value != "") ? errorTxt.innerText = "Enter a valid NIC" : errorTxt.innerText = "NIC can't be blank";
    
    }else{ 
      eField.classList.remove("error");
      eField.classList.add("valid");
    }
  }

  function checkPass(){ 
    let pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    if(!pInput.value.match(pattern)){ 
      pField.classList.add("error");
      pField.classList.remove("valid");
      let errorTxt = pField.querySelector(".error-txt");
      
      (pInput.value != "") ? errorTxt.innerText = "must contain 8 characters, atleast one number, one uppercase letter and one lowercase letter" : errorTxt.innerText = "Password can't be blank";
    }else{ 
      pField.classList.remove("error");
      pField.classList.add("valid");
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
  if(!eField.classList.contains("error") && !pField.classList.contains("error")){
    post("../Login/login",{'username':eInput.value,'password':pInput.value});
  }
}

