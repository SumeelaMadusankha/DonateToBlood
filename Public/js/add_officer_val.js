const form11 = document.querySelector("form1");

fieldfName = form1.querySelector(".firstName"),
    inpfName = fieldfName.querySelector("input");
fieldlName = form1.querySelector(".lastName"),
    inplName = fieldlName.querySelector("input");

fieldlBirth = form1.querySelector(".birth"),
    inpBirth = fieldlBirth.querySelector("input");

fieldPassword = form1.querySelector(".password"),
    inpPassword = fieldPassword.querySelector("input");

fieldRPassword = form1.querySelector(".rpassword"),
    inpRPassword = fieldRPassword.querySelector("input");

fieldEmail = form1.querySelector(".email"),
    inpEmail = fieldEmail.querySelector("input");

fieldNumber = form1.querySelector(".mobNo"),
    inpNumber = fieldNumber.querySelector("input");




function nameValF() {

    var regName = new RegExp('^[-a-zA-Z ]+$');
    if (inpfName.value != "") {
        if (!inpfName.value.match(regName)) {
            showNotification("First name can only contain English letters");
            return false;
        } else {
            return true;
        }
    } else {
        showNotification("First Name can't be blank");
        return false;
    }

}

function nameValL() {

    var regName = new RegExp('^[-a-zA-Z ]+$');
    if (inplName.value != "") {
        if (!inplName.value.match(regName)) {
            showNotification("Last name can only contain English letters");
            return false;
        } else {
            return true;
        }
    } else {
        showNotification("Last Name can't be blank");
        return false;
    }

}

function doCalculate(elm) {
    console.log(inpBirth.value);
    var nic = document.getElementById('nic').value.trim();

    var pattern = /[0-9]{9}[V|X|v|x]/;
    var newId = false;
    var NIC;
    if (nic.length == 12) {

        NIC = nic.substr(2, 5) + nic.substr(8, 12);
        nic = NIC + "v";

    }
    if (!pattern.test(nic)) {
        showNotification("Invalid NIC");
        return false;
    }
    let date = new Date().getFullYear();

    let yr = date.toString();
    if (nic.substr(0, 2) < yr.substring(0, 2)) {
        newId = true;

    }
    var mon = {
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
    if (nic.length >= 5) {
        if (newId) {
            year = "20" + nic.substr(0, 2);
        } else {
            year = "19" + nic.substr(0, 2);
        }

        days = parseInt(nic.substr(2, 3));
        if (days > 500) {
            gender = "Female";
            days = days - 500;
        } else {
            gender = "Male";
        }
        var key;
        for (key in mon) {
            if (days > mon[key][1]) {
                days = days - mon[key][1];
            } else {
                break;
            }
        }
        if (days < 10) {
            days = "0" + days;
        }
        dob = year + "-" + mon[key][0] + "-" + days;

        var getSelectedValue = document.querySelector('input[name="gender"]:checked');
        if (getSelectedValue != null) {
            inpGender = getSelectedValue.value;
        } else {

        }



        let yrU = (date - 120).toString();
        let yrL = (date - 18).toString();

        if (!(yrU < nic.substr(0, 2) <= yrL)) {
            showNotification("please enter valid NIC");
            return false;
        }

        if (inpBirth.value == "") {
            showNotification("Enter Your Birthday");
            return false;
        }
        if (inpBirth.value != dob) {
            showNotification("Entered Birthday doesn't match with NIC");
            return false;
        }

        if (inpGender != gender) {
            showNotification("Selected gender not match with NIC");
            return false;
        }

        return true;
    }
    return false;
}

function checkPass() {
    // var regName = new RegExp("^(?=.\d)(?=.[a-z])(?=.[A-Z])(?=.[a-zA-Z]).{8,}$");
    let pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}$/;

    if (!inpPassword.value.match(pattern)) {
        showNotification("Password must contain 8 characters, atleast one number, one uppercase letter and one lowercase letter");
        return false;

    } else {
        return reCheckPass();
    }
}


function reCheckPass() {
    if (!(inpPassword.value === inpRPassword.value)) {
        showNotification("Re-entered password is not matching");
        return false;

    } else {
        return true;
    }
}

function emailVal() {

    var regName = new RegExp("^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$");

    if (inpEmail.value != "") {
        if (inpEmail.value.match(regName)) {
            return true;

        } else {
            showNotification("Enter a valid email");
            return false;
        }
    } else {
        showNotification("Email field can't be blank");
        return false;
    }
}





function showNotification(msg) {
    var note = document.getElementById("note");
    note.innerHTML = msg;
    note.style.display = "block";
    // setTimeout(hideNotification(),3000);
    setTimeout(function() {

        document.getElementById("note").style.display = "none";

    }, 4000);

}