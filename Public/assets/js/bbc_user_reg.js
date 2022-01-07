const form=document.getElementById('reg_form');
const nic=document.getElementById('nic');
const firstname=document.getElementById('fname');
const lastname=document.getElementById('lname');
const address=document.getElementById('address');
const email=document.getElementById('email');
const mobile=document.getElementById('mobnum');
const city=document.getElementById('city');

form.addEventListener('submit',e =>{
    e.preventDefault();
    checkInputs();
})
function checkInputs() {
    const nicValue=nic.value.trim();
    const firstnameValue=firstname.value.trim();
    const lastnameValue=lastname.value.trim();
    const dobValue=dob.value.trim();
    const addressValue=address.value.trim();
    const emailValue=email.value.trim();
    const mobileValue=mobile.value.trim();
    const cityValue=city.value.trim();

    if(nicValue===''){
        setErrorFor(nic,"NIC cannot be Empty");
    }
    else{
        setSuccessFor(nic);
    }
    if(firstnameValue===''){
        console.log("thath");

        setErrorFor(firstname,"firstName cannot be Empty");
    }
    else{
        setSuccessFor(firstname);
    }
    if(lastnameValue===''){
        setErrorFor(lastname,"lastName cannot be Empty");
    }
    else{
        setSuccessFor(lastname);
    }
    if(addressValue===''){
        console.log("dinuka");
        setErrorFor(address,"address cannot be Empty");
    }
    else{
        setSuccessFor(address);
    }
    if(emailValue===''){
        setErrorFor(email,"email cannot be Empty");
    }
    // else if (isEmail(email)){
    //     setSuccessFor(email);
    // }
    else{
        setErrorFor(email,"Not a Valid Email Type");
    }




function setErrorFor(input,message) {
    const formGroup=input.parentElement;
    const small=formGroup.querySelector('small');
    small.innerText=message;
    formGroup.className='form-group error';
}
function setSuccessFor(input){
    const formGroup=input.parentElement;
    formGroup.className='form-group success';
}
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}
}



