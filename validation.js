$(document).ready(function () {

    var bool_contact = true;



  
    function validate_post() {
        var post = $('#post').val();
        
        //check if its empty
        
        if (post == '') {
        
            $('#err_post').text('post field cannot be empty');
            $('#err_post').fadeIn("2500").show();
            return false;
        }
        else
            return true;
    }
    
        function validate_name() {
        var name = $('#name').val();
        
        //check if its empty
        
        if (name == '') {
        
            $('#err_name').text('name field cannot be empty');
            $('#err_name').fadeIn("2500").show();
            return false;
        }
        else
            return true;
    }


    function validate_spname() {

            //check if its empty
            var name = $('#spname').val();
        //check if its valid name or not
        if(name!="")
        {
            if ((/^[a-zA-Z]+[\s]{0,1}[a-zA-Z]+[\s]{0,1}[A-z]+/.test(name)) != true) 
            {
                $('#err_spname').text("Invalid name");
                $('#err_spname').fadeIn("2500").show();

                return false;
            }
            else {
                return true;
            }
        }
        else{
            return false;
        }
    }


   function validate_email() {
       var email = $('#email').val();
       var reg = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])/;
       //check if its empty
       if (email =='') {
           $('#err_email').text("Email cannot be empty");
           $('#err_email').fadeIn("2500").show();
           return false;
       }
       //check if its valid email or not
       else if ((reg.test(email)) != true) {
           $('#err_email').text("Invalid email");
           $('#err_email').fadeIn("2500").show();
           return false;
       }
       else {
           return true;
       }
   }


   function validate_contact_number() {
    var contact = $('#contact_number').val();
    
    var regex = /^([6-9]{1}[0-9]{9})$/;//add regex here
    //check if its empty
    
    if (contact == '') {
      
        $('#err_contact_number').text('Contact cannot be empty');
        $('#err_contact_number').fadeIn("2500").show();
        return false;
    }
    //check if its valid or not
    else if ((regex.test(contact)) != true) {
       
        $('#err_contact_number').text('Invalid contact number');
        $('#err_contact_number').fadeIn("2500").show();
        return false;
    }
    else
        return true;
}



function validate_cpaddress() {
    var cpaddress = $('#cpaddress').val();
    
    //check if its empty
    
    if (cpaddress == '') {
      
        $('#err_cpaddress').text('address field cannot be empty');
        $('#err_cpaddress').fadeIn("2500").show();
        return false;
    }
    else
        return true;
}

function validate_paddress() {
    var paddress = $('#paddress').val();

    //check if its empty
    
    if (paddress == '') {
      
        $('#err_paddress').text('address field cannot be empty');
        $('#err_paddress').fadeIn("2500").show();
        return false;
    }
    else
        return true;
}


function validate_birth() {
    var birth = $('#birth').val();
    if (birth=="") {
      
        $('#err_birth').text('date of bith  cannot be empty');
        $('#err_birth').fadeIn("2500").show();
        return false;
    }
    else
        return true;
}

function validate_marriage() {
    var marriage = $('#marriage').val();
    if (marriage=="") {
      
        $('#err_marriage').text('date of marriage  cannot be empty');
        $('#err_marriage').fadeIn("2500").show();
        return false;
    }
    else
        return true;
}


    $('#spname').focus(function () {
        $('#err_spname').hide();
    });

    $('#spname').blur(function () {
       
       if( validate_spname()){ 
        $('#marriage').focus(function () {
            $('#err_marriage').hide();
        });
        $('#marriage').blur(function () {
            if( validate_spname()){
         validate_marriage();
            }
        });
       }
    });

   
   $('#email').focus(function () {
       $('#err_email').hide();
   });
   $('#email').blur(function () {
       if (validate_email()) {
           ajax_email();

       }
   });

    
   $('#contact_number').focus(function () {
    $('#err_contact_number').hide();
});
$('#contact_number').blur(function () {
    if (validate_contact_number()) {
        ajax_contact_number();

    }
});


$('#cpaddress').focus(function () {
    $('#err_cpaddress').hide();
});
$('#cpaddress').blur(function () {
    if (validate_cpaddress()) {
        ajax_cpaddress();

    }
});


$('#post').focus(function () {
    $('#err_post').hide();
});
$('#post').blur(function () {
    validate_post();
     
});

    
    
$('#name').focus(function () {
    $('#err_name').hide();
});
$('#name').blur(function () {
    validate_name();
     
});
$('#paddress').focus(function () {
    $('#err_paddress').hide();
});
$('#paddress').blur(function () {
    if (validate_paddress()) {
        ajax_paddress();

    }
});

$('#birth').focus(function () {
    $('#err_birth').hide();
});
$('#birth').blur(function () {
    validate_birth();

});


function ajax_contact_number() {
    var contact = $('#contact_number').val();
    datastring = 'contact=' + contact + '&field=contact';
    $.ajax({
        type: "POST",
        url: "check.php",
        data: datastring,
        datatype: "json",
        cache: false,
        success: function (result) {
            var result = $.parseJSON(result);
            
            if (result.status == 0) {
                $("#err_contact_number").text('Contact already exists');
                $("#err_contact_number").fadeIn("2500").show();
                bool_contact = false;
            }
            else if (result.status == 1) {

                bool_contact = true;

            }
        }
    });
}


function ajax_email() {
    var email = $('#email').val();
    datastring = 'email=' + email + '&field=email';
    $.ajax({
        type: "POST",
        url: "check.php",
        data: datastring,
        datatype: "json",
        cache: false,
        success: function (result) {
            var result = $.parseJSON(result);
            if (result.status == 0) {
                $("#err_email").text('Email already exists');
                $("#err_email").fadeIn("2500").show();
                return false;
            }
            else if (result.status == 1) {
                return true;
            }
        }
    });
}



});