
  
$(document).ready(function() {
    $("#my_form").validate({
    rules: {
    name: {
    required: true,
    minlength: 3
    },
    tel: {
    required: true,
    number: true,
    minlength: 10,
    maxlength:10
    },
    email: {
    required: true,
    email: true
    },
    option: {
    required: true
    }, 
    },
messages: {
name: {
required:"Enter your name",
minlength: "Name should be at least 3 characters"
},
tel: {
required: "Please enter your mobile number",
number: "Please enter a numerical value",
minlength: "must be 10 digits"
},
email: {
required:"Enter your Email ID",
email: "The email should be in the format"
},
option: {
required: "Select your country"
},
},

submitHandler: function(form) {  
    form.submit();  
    }  

    });
    });
    