

function check(){
    
    var r = document.getElementById("inp_nic");
    
    if(r.value.length == 10 || r.value.length == 12){
            return true;
    }else{
        showNotification("Inccorect NIC");
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