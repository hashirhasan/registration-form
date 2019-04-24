$(document).ready(function () {

    



 
    function validate_post() {
        var post = $('#post').val();
     
        //check if its empty
        
        if (post == '') {
        
            $('#err_post').text('Post field cannot be empty');
            $('#err_post').fadeIn("2500").show();
            return false;
        }
       
        else {
            return true;
        }
    }
    
	
	
	
        function validate_name() {
        var name = $('#name').val();
        
        //check if its empty
        
        if (name == '') {
        
            $('#err_name').text('Name field cannot be empty');
            $('#err_name').fadeIn("2500").show();
            return false;
        }
        else  if ((/^[A-z]+[\s]{0,1}[A-z]+[\s]{0,1}[A-z]{0,15}$/.test(name)) != true) 
        {
            $('#err_name').text("Invalid Name");
            $('#err_name').fadeIn("2500").show();

            return false;
        }
        else {
            return true;
        }
    }

	
	
	
    function validate_fname() {
        var fname = $('#fname').val();
        
        //check if its empty
        
        if (fname == '') {
        
            $('#err_fname').text('Name field cannot be empty');
            $('#err_fname').fadeIn("2500").show();
            return false;
        }
        else  if ((/^[A-z]+[\s]{0,1}[A-z]+[\s]{0,1}[A-z]{0,15}$/.test(fname)) != true) 
        {
            $('#err_fname').text("Invalid Father Name");
            $('#err_fname').fadeIn("2500").show();

            return false;
        }
        else {
            return true;
        }
           
    }

	
	
	

    function validate_spname() {

            //check if its empty
            var spname = $('#spname').val();
        //check if its valid name or not
        if(spname!="")
        {
            if ((/^[A-z]+[\s]{0,1}[A-z]+[\s]{0,1}[A-z]{0,15}$/.test(spname)) != true) 
            {
                $('#err_spname').text("Invalid Spouse Name");
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
           $('#err_email').text("Invalid Email");
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
       
        $('#err_contact_number').text('Invalid Contact Number');
        $('#err_contact_number').fadeIn("2500").show();
        return false;
    }
    else
        return true;
}

	
	

function validate_alt_contact_number() {
    var altcontact = $('#alt_contact_number').val();
    if(altcontact!="")
    {
    var regex = /^([6-9]{1}[0-9]{9})$/;//add regex here
  
    
    //check if its valid or not
    if ((regex.test(altcontact)) != true) {
       
        $('#err_alt_contact_number').text('Invalid Contact Number');
        $('#err_alt_contact_number').fadeIn("2500").show();
        return false;
    }
    else
        return true;
}
else {
    return true;
}
}


	
	
function validate_cpaddress() {
    var cpaddress = $('#cpaddress').val();
    
    //check if its empty
    
    if (cpaddress == '') {
      
        $('#err_cpaddress').text('Address field cannot be empty');
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
      $('#err_paddress').text('Address field cannot be empty');
        $('#err_paddress').fadeIn("2500").show();
        return false;
    }
    else
        return true;
}


	
	
function validate_birth()
 {
    var birth = $('#birth').val();
    if (birth=="") {
      
        $('#err_birth').text('Date of Birth  cannot be empty');
        $('#err_birth').fadeIn("2500").show();
        return false;
    }
    else
        return true;
}

	
	
	
function validate_marriage() {
    var marriage = $('#marriage').val();
    if (marriage=="") {
      
        $('#err_marriage').text('Date of Marriage  cannot be empty');
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
	
	

	$('#alt_contact_number').focus(function () {
	$('#err_alt_contact_number').hide();
	});
	$('#alt_contact_number').blur(function () {
	validate_alt_contact_number();
	});
	
	

	$('#cpaddress').focus(function () {
	$('#err_cpaddress').hide();
	});
	$('#cpaddress').blur(function () {
	validate_cpaddress();

	});

	

	$('#post').focus(function () {
	console.log('hello');
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


	
	$('#fname').focus(function () {
	$('#err_fname').hide();
	});
	$('#fname').blur(function () {
	validate_fname();
	});


	
	$('#paddress').focus(function () {
	$('#err_paddress').hide();
	});
	$('#paddress').blur(function () {
	validate_paddress();
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


$('#register').on('click',function(){
	
    var test1 =validate_post();
    var test2 = validate_name();
    var test3 = validate_birth();
    var test4 = validate_paddress();
    var test5 = validate_cpaddress();
    var test6 = validate_alt_contact_number(); 
    var test7 = validate_contact_number();
    var test8 = validate_email();
    var test9 =validate_fname();
  
    if(test1 && test2 && test3 && test4 && test5 && test6 && test7 && test8 && test9)
    {
     
		var post= $('#post').val();
		var first_name=$('#name').val();
		var middle_name=$('#middlename').val();
		var last_name=$('#lastname').val();
		var father_name=$('#fname').val();
		var spouse_name=$('#spname').val();
		var cast=$('#inputCategory').val();
		var corresponding_address=$('#cpaddress').val();
		var contact=$('#contact_number').val(); 
		var alt_contact_no=$('#alt_contact_number').val();
		var email=$('#email').val();
		var permanent_address=$('#paddress').val();
		var gender=$('input[name=gender]:checked').val();

		var date_of_birth= $('#birth').val();

		var married=$('#marriage').val();

		var njournal=$('input[name=njournal]').val();
		var injournal=$('input[name=injournal]').val();
		var nconference=$('input[name=nconference]').val();
		var inconference=$('input[name=inconference]').val();
		var teaching_exp=$('input[name=teaching]').val();
		var corporate_exp=$('input[name=corporate]').val();

		var college10= $('input[name=college_name10]').val();
		var board10=$('input[name=Board_name10]').val();
		var mode10=$('input[name=mode10]').val();
		var yearofpassing10=$('input[name=Year_of_passing10]').val();
		var medofins10=$('input[name=medium_of_instruction10]').val();
		var marks10=$('input[name=Percentage10]').val();

		var college12= $('input[name=college_name12]').val();
		var board12=$('input[name=Board_name12]').val();
		var mode12=$('input[name=mode12]').val();
		var yearofpassing12=$('input[name=Year_of_passing12]').val();
		var medofins12=$('input[name=medium_of_instruction12]').val();
		var marks12=$('input[name=Percentage12]').val();

		var college_grad= $('input[name=college_name_grad]').val();
		var board_grad=$('input[name=Board_name_grad]').val();
		var mode_grad=$('input[name=mode_grad]').val();
		var yearofpassing_grad=$('input[name=Year_of_passing_grad]').val();
		var medofins_grad=$('input[name=medium_of_instruction_grad]').val();
		var marks_grad=$('input[name=Percentage_grad]').val();

		var college_postgrad= $('input[name=college_name_postgrad]').val();
		var board_postgrad=$('input[name=Board_name_postgrad]').val();
		var mode_postgrad=$('input[name=mode_postgrad]').val();
		var yearofpassing_postgrad=$('input[name=Year_of_passing_postgrad]').val();
		var medofins_postgrad=$('input[name=medium_of_instruction_postgrad]').val();
		var marks_postgrad=$('input[name=Percentage_postgrad]').val();

		var college_phd= $('input[name=college_name_phd]').val();
		var board_phd=$('input[name=Board_name_phd]').val();
		var mode_phd=$('input[name=mode_phd]').val();
		var yearofpassing_phd=$('input[name=Year_of_passing_phd]').val();
		var medofins_phd=$('input[name=medium_of_instruction_phd]').val();
		var marks_phd=$('input[name=Percentage_phd]').val();

		var college_other= $('input[name=college_name_other]').val();
		var board_other=$('input[name=Board_name_other]').val();
		var mode_other=$('input[name=mode_other]').val();
		var yearofpassing_other=$('input[name=Year_of_passing_other]').val();
		var medofins_other=$('input[name=medium_of_instruction_other]').val();
		var marks_other=$('input[name=Percentage_other]').val(); 

		var netQ=$('input[name=netQ]:checked').val();  


		var datastring='Post='+post+'&First_Name='+first_name+'&Middle_Name='+middle_name+'&Last_Name='+last_name+'&fname='+father_name+'&Spouse_name='+spouse_name+'&caste='+cast+'&cpAddress='+corresponding_address+'&Address='+permanent_address+'&Mobile_Number='+contact+'&alt_Mobile_Number='+alt_contact_no+'&Email_Id='+email+'&gender='+gender+'&Birthday_day='+date_of_birth+'&marriage_day='+married+'&college_name10='+college10+'&Board_name10='+board10+'&mode10='+mode10+'&Year_of_passing10='+yearofpassing10+'&medium_of_instruction10='+medofins10+'&Percentage10='+marks10+'&college_name12='+college12+'&Board_name12='+board12+'&mode12='+mode12+'&Year_of_passing12='+yearofpassing12+'&medium_of_instruction12='+medofins12+'&Percentage12='+marks12+'&college_name_phd='+college_phd+'&Board_name_phd='+board_phd+'&mode_phd='+mode_phd+'&Year_of_passing_phd='+yearofpassing_phd+'&medium_of_instruction_phd='+medofins_phd+'&Percentage_phd='+marks_phd+'&college_name_grad='+college_grad+'&Board_name_grad='+board_grad+'&mode_grad='+mode_grad+'&Year_of_passing_grad='+yearofpassing_grad+'&medium_of_instruction_grad='+medofins_grad+'&Percentage_grad='+marks_grad+'&college_name_postgrad='+college_postgrad+'&Board_name_postgrad='+board_postgrad+'&mode_postgrad='+mode_postgrad+'&Year_of_passing_postgrad='+yearofpassing_postgrad+'&medium_of_instruction_postgrad='+medofins_postgrad+'&Percentage_postgrad='+marks_postgrad+'&college_name_other='+college_other+'&Board_name_other='+board_other+'&mode_other='+mode_other+'&Year_of_passing_other='+yearofpassing_other+'&medium_of_instruction_other='+medofins_other+'&Percentage_other='+marks_other+'&njournal='+njournal+'&injournal='+injournal+'&nconference='+nconference+'&inconference='+inconference+'&teaching='+teaching_exp+'&corporate='+corporate_exp+'&netQ='+netQ;

		$.ajax({
					type : "POST",
					url : "registration.php",
					data : datastring,
					datatype : "json",
					cache : false,
			
					success : function(result){
     
						var result = $.parseJSON(result);
						if(result.status == 0)
						{ 

							swal({title:'Registered successfully',text:email,icon:'success'}).then(function(){location.reload()})

						}
						else if(result.status == 1)
						{

							if(result.post !="")
							{
								$("#err_post").blur();
								$("#err_post").text(result.post);
								$("#err_post").show();
							}
							if(result.name !="")
							{ 
								
								$("#err_name").text(result.name);
								$("#err_name").show();
							}
							if(result.fname !="")
							{
								$("#err_fname").text(result.fname);
								$("#err_fname").show();
							}
							if(result.paddress !="")
							{
								$("#err_paddress").text(result.paddress);
								$("#err_paddress").show();
							}
							if(result.cpaddress !="")
							{
								$("#err_cpaddress").text(result.cpaddress);
								$("#err_cpaddress").show();
							}
						
							if(result.birth !="")
							{
								$("#err_birth").text(result.birth);
								$("#err_birth").show();
							}
							
							if(result.qualification !="")
							{
								$("#err_qualification").text(result.qualification);
								$("#err_quaification").show();
							}
						
							if(result.email !="")
							{
								
								$("#err_email").text(result.email);
								$("#err_email").show();
							}
							if(result.contact !="")
							{
								$("#err_contact_number").text(result.contact);
								$("#err_contact_number").show();
							}
							if(result.marriage!="")
							{ 
								$("#err_marriage").text(result.marriage);
								$("#err_marriage").show();
							}
							if(result.spname!="")
							{ 
								$("#err_spname").text(result.spname);
								$("#err_spname").show();
							}
							
							(function reply_click()
							{
							var scroll=document.getElementById('scroll');
							scroll.scrollIntoView();
							}());	

						}		


					}
				});

			return false;
		}
		else
		{
			(function reply_click()
			{
			var scroll=document.getElementById('scroll');
			scroll.scrollIntoView();
			}());

			return false;
		}
	})

});