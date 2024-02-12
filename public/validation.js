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

var public_url = $('meta[name="base_url"]').attr('content');

$.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


$('#contactus').validate({ // initialize the plugin

        rules: {
             name:
            {
                required:true,
                alphabetsOnly:true
            },
           
            email: {
                required: true,
                emailVal:true
           
            },


              enquiry_type:
            {
                required:true
            },

           
            description:
            {
                required:true,
            }
          
    },


     messages:{
         name:
         {
            required:"*Please Enter Valid Name",
            alphabetsOnly:"*Please Enter Valid Name",
        },

    email:{
        required:"*Please enter email address",
        emailVal:"*Please enter valid email address",
    },
  
    enquiry_type:
    {
        required:"*Please select any one  enquiry_type",
    },

    description:{
        required:"*Please enter the description",
    },
   
},


 errorElement: "span",
        wrapper: "span",
            errorPlacement: function(error, element) {
            offset = element.offset();
            error.insertAfter(element)
            error.css('color','red');
        },
          submitHandler: function(form) {
      form.submit();
    }
});





$('#leavemessage').validate({ // initialize the plugin

        rules: {
             name:
            {
                required:true,
            },
           
            email: {
                required: true,
                emailVal:true
           
            },


             phone: {
                required: true,
                digits: true,
                PhoneValidation: true,
                customValidation:!0,
                minlength:9,
                maxlength:14
            },

           
            subject:
            {
                required:true,
            },
            message:{
                required:true,
            }
          
    },


     messages:{
         name:
         {
        required:"*Please enter the Name",
        },

    email:{
        required:"*Please enter email address",
        emailVal:"*Please enter valid email address",
    },
    phone: {
        required: "*Please enter phone number",
        PhoneValidation:"*Please enter a valid phone number",
        customValidation: "*Phone number cannot be prefix by a space.",
        minlength:"*Phone number contains minimum 7 digits",
        maxlength:"*Phone number contains maximum 14 digits"
    },



    subject:{

        required:"Please select any one subject",
    },

    message:{
        required:"*Please enter the message",
    },
   
},


 errorElement: "span",
        wrapper: "span",
            errorPlacement: function(error, element) {
            offset = element.offset();
            error.insertAfter(element)
            error.css('color','red');
        },
          submitHandler: function(form) {
      form.submit();
    }
});

