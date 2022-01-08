const form1 = document.querySelector("form");

pField = form1.querySelector(".password"),
    pInput = pField.querySelector("input"),
    rpField = form1.querySelector(".rpassword"),
    rpInput = rpField.querySelector("input");

function submitForm() {


    (pInput.value == "") ? pField.classList.add("shake", "error"): checkPass();
    (rpInput.value == "") ? rpField.classList.add("shake", "error"): reCheckPassword();
    setTimeout(() => {

        pField.classList.remove("shake");
        rpField.classList.remove("shake");
    }, 500);


    pInput.onkeyup = () => { checkPass(); }
    rpInput.onkeyup = () => { reCheckPassword(); }



    if (!rpField.classList.contains("error") && !pField.classList.contains("error")) {
        return true;
    } else {
        return false;
    }
}


function checkPass() {
    let pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    if (!pInput.value.match(pattern)) {
        pField.classList.add("error");
        pField.classList.remove("valid");
        let errorTxt = pField.querySelector(".error-txt");

        (pInput.value != "") ? errorTxt.innerText = "must contain 8 characters, atleast one number, one uppercase letter and one lowercase letter": errorTxt.innerText = "Password can't be blank";
    } else {
        pField.classList.remove("error");
        pField.classList.add("valid");
    }
}

function reCheckPassword() {
    let pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;
    if (!rpInput.value.match(pattern)) {
        rpField.classList.add("error");
        rpField.classList.remove("valid");
        let errorTxt = rpField.querySelector(".error-txt");

        (rpInput.value != "") ? errorTxt.innerText = "must contain 8 characters, atleast one number, one uppercase letter and one lowercase letter": errorTxt.innerText = "Password can't be blank";
    } else if (!(pInput.value === rpInput.value)) {
        rpField.classList.add("error");
        rpField.classList.remove("valid");
        let errorTxt = rpField.querySelector(".error-txt");

        (rpInput.value != "") ? errorTxt.innerText = "Re-entered password is not matching": errorTxt.innerText = "Password can't be blank";
    } else {
        rpField.classList.remove("error");
        rpField.classList.add("valid");
    }

}

function post(path, params, method) {
    method = method || "post"; // Set method to post by default if not specified.

    // The rest of this code assumes you are not using a library.
    // It can be made less wordy if you use one.
    var form = document.createElement("form");
    form.setAttribute("method", method);
    form.setAttribute("action", path);

    for (var key in params) {
        if (params.hasOwnProperty(key)) {
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
if (!pField.classList.contains("error") && !rpField.classList.contains("error")) {

    if (!(pInput.value == "")) {
        // post("../UnregisteredUser/signUp",{'nic':eInput.value,'password':pInput.value,'re-password':rpInput.value});
    }

}