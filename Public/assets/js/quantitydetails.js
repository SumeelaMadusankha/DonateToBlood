$(document).ready(function() {
    $("#shortage_form").validate({
      errorClass: "error fail-alert",
      validClass: "valid success-alert",
      rules: {
        m_quantity : {
          required: true,
          number: true
        },
        a_quantity: {
          required: true,
          number: true
        }
    },
      messages : {
        m_quantity: {
            required: "Please enter the Maximum Quantity",
            number: "Please enter the Maximum Quantity in Blood Pints"
        },
        a_quantity: {
          required: "Please enter the the Available Quantity",
          number: "Please enter your age as a numerical value"
        }
   
      }
    });
  });