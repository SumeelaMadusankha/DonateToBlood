const form2 = document.querySelector("form");
eField = form2.querySelector(".email");
eInput = eField.querySelector("input");


function submitForm() {

    (eInput.value == "") ? eField.classList.add("shake", "error"): nicCheck();

    setTimeout(() => {
        eField.classList.remove("shake");

    }, 500);

    eInput.onkeyup = () => { nicCheck(); }



    if (!eField.classList.contains("error")) {
        return true;
    } else {
        return false;
    }
}

function nicCheck() {
    var pattern_1 = new RegExp('^[0-9+]{9}[vV|xX]$');
    var pattern_2 = new RegExp('^[0-9+]{12}$');
    if ((eInput.value.length < 10) || (eInput.value.length > 12) || (eInput.value.length == 11)) {
        eField.classList.add("error");
        eField.classList.remove("valid");
        let errorTxt = eField.querySelector(".error-txt");

        (eInput.value != "") ? errorTxt.innerText = "Enter a valid NIC": errorTxt.innerText = "NIC can't be blank";

    } else {
        eField.classList.remove("error");
        eField.classList.add("valid");
    }
}




if (!eField.classList.contains("error")) {

    if (!(eInput.value == "")) {
        // post("../UnregisteredUser/signUp",{'nic':eInput.value,'password':pInput.value,'re-password':rpInput.value});
    }

}