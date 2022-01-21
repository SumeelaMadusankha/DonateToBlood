const form = document.querySelector("form");
fieldfName = form.querySelector(".firstName"),
inpfName = fieldfName.querySelector("input");

function showNotification(msg){
    var note = document.getElementById("note");
    note.innerHTML = msg;
    note.style.display = "block";
   // setTimeout(hideNotification(),3000);
    setTimeout(function(){
    
      document.getElementById("note").style.display = "none";
    
    }, 4000);
    
  }

  function nameVal(){
    var regName = new RegExp('^[-a-zA-Z ]+$');
    if(!inpfName.value.match(regName)){
        showNotification("Name can only contains English letters");
        return false;
    }else{
        return true;
    }

  }