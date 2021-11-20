$(document).ready(function() {
    $("#reg_form").validate({
      errorClass: "error fail-alert",
      validClass: "valid success-alert",
      rules: {
        fname : {
          required: true
          
        },

        lname: {
          required: true
        },
        age: {
            required: true,
            number: true
          },
        email: {
          required: true,
          email: true
        },
        mobnum: {
            required: true,
            phoneUS: true
          },
        bday: {
            required: true,
            date: true
          },
        nic: {
            required:function(){
               
                return $("#nic").length > 4
              }
            
            
          }
        
      },
      messages : {
        name: {
          minlength: "Name should be at least 3 characters"
        },
        age: {
          required: "Please enter your age",
          number: "Please enter your age as a numerical value",
         
        },
        email: {
          email: "The email should be in the format: abc@gmail.com"
        },
        bday: {
          required: "Please enter your birth day",
          date: "Please enter valid date",
         
        }
        
      }
    });
  });