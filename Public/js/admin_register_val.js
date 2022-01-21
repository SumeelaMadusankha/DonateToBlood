const form = document.querySelector("form");
fieldfName = form.querySelector(".firstnamereg"),
inpfName = fieldfName.querySelector("input"),



  function nameVal(){
   
    var regName = new RegExp('^[-a-zA-Z ]+$');
    if (!inpfName.value.match(regName)){
        alert("Hi");
        hello();
        // showNotification("Name can only contain English letters");
        return false;
    }else{
        return true;
    }

  }

  function showNotification(msg){
    alert("Hello");
    var note = document.getElementById("note");
    note.innerHTML = msg;
    note.style.display = "block";
   // setTimeout(hideNotification(),3000);
    setTimeout(function(){
    
      document.getElementById("note").style.display = "none";
    
    }, 4000);
    
  }

  function hello(){
      alert("BYE");
      return false;

  }