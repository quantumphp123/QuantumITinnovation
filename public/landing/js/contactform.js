// Validation of login form
$.validator.methods.emailVal = function(value) {
           var reg = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
            if(reg.test(value) != true)
                ab = false;
            else 
                ab = true;
            return ab; 
};

$.validator.methods.customValidation = function (value, element) {

    if (/^\s/.test(value) == !0) ab = !1;
    else ab = !0;
    return ab
};

$.validator.methods.PhoneValidation = function (value, element) {
    if (/^(?!(\d)\1{9})(?!0123456789|1234567890|0987654321|9876543210)\d{8,15}$/.test(value) != !0) 
        ab = !1;
    else 
        ab = !0;
    return ab
};

$.validator.methods.alphabetsOnly = function (value, element) {
    if (/^[a-zA-Z ]*$/.test(value) != !0) 
        ab = !1;
    else 
        ab = !0;
    return ab
};

$("#contactForm").validate({

  rules:{

    name:{
      	required:true
    },
    email:{
      	required:true
    },
    subject:{
      	required:true
    },
    message:{
      	required:true
    }
    

  },

  messages:{

    name:{
      	required:"*Please enter name",
    },
    email:{
      	required:"*Please enter email address",
    },
    subject:{
      	required:"*Please enter subject",
    },
    message:{
      	required:"*Please enter message",
    }
    

  },
 errorElement: "label",
        wrapper: "label",
        errorPlacement: function(error, element) {
            offset = element.offset();
            error.insertAfter(element)
            error.css('color','red');
        },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }

});



