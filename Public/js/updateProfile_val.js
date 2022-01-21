const form = document.querySelector("form");
fieldfName = form.querySelector(".firstName"),
inpfName = fieldfName.querySelector("input"),
alert(inpfName.value);


function showNotification(msg){
    alert("hell++");
    var note = document.getElementById("note");
    note.innerHTML = msg;
    note.style.display = "block";
   // setTimeout(hideNotification(),3000);
    setTimeout(function(){
    
      document.getElementById("note").style.display = "none";
    
    }, 4000);
    
  }


  function nameVal(){
      alert("Hello");
    var regName = new RegExp('^[-a-zA-Z ]+$');
    if (!inpfName.value.match(regName) ){
        showNotification("Name can only contain English letters");
        return false;
    }else{
        return true;
    }
  }