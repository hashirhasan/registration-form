

<!DOCTYPE html>
<html lang="en">

<head>
<!-- <script src="jquery.min.js" type="text/javascript"></script> -->
    <meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1">
    <style>
   @import url('https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800,900');
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/registration.css">
   <style>
   span{
           color:red;
           font-size:15.36px;
   }
  
   </style>
    
    <title>Registration</title>
</head>

<body>

<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <script src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/validation.js"></script>

<div  class="col s12 m12 l12" id="header">


   <img src="./image/newheader.jpg" height="150px" width="100%">
</div>
	<br>

<h5 style="text-decoration: underline;">FACULTY RECRUITMENT FORM</h5>
	
	<div class="blue" style="width: 100%"></div>

        <form class="fit"  method="POST">
        <div class="form-row">
                <div class="form-group col-md-2">
                <label id="scroll" for="inputPost">Post<span>*</span></label>
                <input  class="form-control" type="text" name="Post" id="post" placeholder="Post applied for" autocomplete="off"/>
                <span id="err_post"></span>
              </div>
            
              </div>
                <div class="form-row">
                        
                  <div class="form-group col-md-2">
                    <label for="inputName1">First Name<span>*</span></label>
                    <input id="name" class="form-control" type="text" name="First_Name" placeholder="First Name" autocomplete="off"/>
                    <span id="err_name"></span>
                  </div>
                 
                  <div class="form-group col-md-2">
                        <label for="inputName2">Middle Name</label>
                        <input id="middlename" type="text" class="form-control" name="Middle_Name" placeholder="Middle Name" autocomplete="off"/>
                      </div>
                    
                  <div class="form-group col-md-2">
                    <label for="inputName3">Last Name </label>
                    <input id="lastname" type="text" class="form-control" name="Last_Name" placeholder="Last Name" autocomplete="off"/>
                  </div>
               
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                            <label for="inputName5">Father's Name<span>*</span> </label>
                            <input type="text" class="form-control" id="fname"  name="fname" placeholder="Father's Name" autocomplete="off">
                            <span id="err_fname"></span>
                    </div>
                    
                    <div class="form-group col-md-4">
                            <label for="inputName6">Spouse Name </label>
                            <input type="text" class="form-control" name="Spouse_name" id="spname" placeholder="Spouse Name" autocomplete="off">
                            <span id="err_spname"></span>
                    </div>
                   
                </div>

                <div class="form-row">
                        <div class="form-group col-md-4">
                                <label for="inputCategory">Caste/Category<span>*</span></label>
                                <select id="inputCategory" name="caste" class="form-control">
                                  <option>General</option>
                                  <option>SC/ST</option>
                                  <option>OBC</option>
                                </select>
                              </div>
                              <span id=""></span>
                        <div class="form-group col-md-4">
                                <label for="inputEmail">Email <span>*</span></label>
                                <input type="text" class="form-control" id="email" name="Email_Id" placeholder="Email" autocomplete="off">
                                <span id="err_email"></span>
                        </div>
                       
                    </div>
               

                <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputAddress">Corresponding Address<span>*</span></label>
                  <textarea class="form-control" id="cpaddress" name="cpAddress"  rows="3" placeholder="Address"></textarea>
                  <span id="err_cpaddress"></span>
                </div>
              
                <div class="form-group col-md-4">
                        <label for="inputAddress">Permanent Address<span>*</span></label>
                        <textarea class="form-control" id="paddress"  name="Address"  rows="3" placeholder="Address"></textarea>
                        <span id="err_paddress"></span>
                  </div>
                  </div>
        
            <div class="form-row">
            <div class="form-group col-md-4">
                    <label for="inputDate">Date of Birth<span>*</span></label>
                    <input type="date" id="birth" name="Birthday_day" max="3000-12-31" 
                           min="1000-01-01" class="form-control">
                           <span id="err_birth"></span>
                   </div>
                  
                   <div class="form-group col-md-4">
                        <p style="font-weight:600;color:#333333">Gender<span>*</span></p>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline1" name="gender" value="male" class="custom-control-input" checked>
                            <label class="custom-control-label" for="customRadioInline1">Male</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline2" name="gender" value="female" class="custom-control-input">
                            <label class="custom-control-label" for="customRadioInline2">Female</label>
                          </div>
                                  
                                  </div>
                                  <span id=""></span>
                </div>

                <div class="form-row">
                        <div class="form-group col-md-4">
                                <label for="inputNumber1">Mobile Number<span>*</span></label>
                                <input type="text" class="form-control" id="contact_number" name="Mobile_Number" placeholder="Mobile Number" autocomplete="off">
                                <span id="err_contact_number"></span>
                        </div>
                       
                        <div class="form-group col-md-4">
                                <label for="inputNumber2">Alternative Mobile Number</label>
                                <input type="text" class="form-control" id="alt_contact_number" name="alt_Mobile_Number" placeholder="Alternative Mobile Number" autocomplete="off">
                                <span id="err_alt_contact_number"></span>
                        </div>
                       
                    </div>
                    <div class="form-row">
                           
                            <span id=""></span>
                            <div class="form-group col-md-4">
                                    <label for="inputDate">Date of Marriage</label>
                                    <input type="date" name="marriage_day" id="marriage"  
                                           min="1000-01-01" class="form-control">
                                           <span id="err_marriage"></span>
                                   </div>
                            </div>
                           
                        </div>
                        <br>
                        <br>

                        
                     
                            <p style="font-weight:600" class="para">Qualifications<span>*</span></p>
                            <div style="overflow-x:auto">
                       
                              <table class="form1">
         
                                    <tr class="headings">
                                   
                                    <td style="color:#333333" align="center">Examination</td>
                                    <td style="color:#333333" align="center">Name of College</td>
                                    <td style="color:#333333" align="center">Board/University</td>
                                    <td style="color:#333333" align="center">Regular/Distance</td>
                                    <td style="color:#333333" align="center">Year of Passing</td>
                                    <td style="color:#333333" align="center">Medium of Instructions</td>
                                    <td style="color:#333333" align="center">Div. & Percentage of Marks</td>
                                    </tr>
                                     
                                    <tr>
                                    
                                    <td>Class X<span>*</span></td>
                                    <td><input type="text" name="college_name10" maxlength="30"  autocomplete="off"/></td>
                                    <td><input type="text" name="Board_name10" maxlength="30"  autocomplete="off"/></td>
                                    <td><input type="text" name="mode10" maxlength="30"  autocomplete="off"/></td>
                                    <td><input type="text" id="year10" name="Year_of_passing10" maxlength="30"  autocomplete="off"/></td>
                                    <td><input type="text" name="medium_of_instruction10" maxlength="30"  autocomplete="off"/></td>
                                    <td><input type="text" id="percent10"name="Percentage10" maxlength="3"  autocomplete="off"/></td>
                                    </tr>
                                   
                                    <tr>
                                    
                                    <td>Class XII<span>*</span></td>
                                    <td><input type="text" name="college_name12" maxlength="30"  autocomplete="off"/></td>
                                    <td><input type="text" name="Board_name12" maxlength="30"  autocomplete="off"/></td>
                                    <td><input type="text" name="mode12" maxlength="30"  autocomplete="off"/></td>
                                    <td><input type="text" id="year12" name="Year_of_passing12" maxlength="4"  autocomplete="off"/></td>
                                    <td><input type="text" name="medium_of_instruction12" maxlength="30" autocomplete="off"  autocomplete="off"/></td>
                                    <td><input type="text" id="percent12"name="Percentage12" maxlength="3"  autocomplete="off"/></td>
                                    </tr>
                                   
                                    <tr>
                                    
                                    <td>Graduation<span>*</span></td>
                                    <td><input type="text" name="college_name_grad" maxlength="30"  autocomplete="off"/></td>
                                    <td><input type="text" name="Board_name_grad" maxlength="30"  autocomplete="off"/></td>
                                    <td><input type="text" name="mode_grad" maxlength="30"  autocomplete="off"/></td>
                                    <td><input type="text" id="yeargrad" name="Year_of_passing_grad" maxlength="4"  autocomplete="off"/></td>
                                    <td><input type="text" name="medium_of_instruction_grad" maxlength="30"  autocomplete="off"/></td>
                                    <td><input type="text" id="percentgrad"name="Percentage_grad" maxlength="3"  autocomplete="off"/></td>
                                    </tr>
                                     
                        
                                    <tr>
                                    <td>P.G.</td>
                                    <td><input type="text" name="college_name_postgrad" maxlength="30"  autocomplete="off"/></td>
                                    <td><input type="text" name="Board_name_postgrad" maxlength="30"  autocomplete="off"/></td>
                                    <td><input type="text" name="mode_postgrad" maxlength="30"  autocomplete="off"/></td>
                                    <td><input type="text" id="yearpostgrad" name="Year_of_passing_postgrad" maxlength="4"  autocomplete="off"/></td>
                                    <td><input type="text" name="medium_of_instruction_postgrad" maxlength="30"  autocomplete="off"/></td>
                                    <td><input type="text" id="percentpostgrad"name="Percentage_postgrad" maxlength="3"  autocomplete="off"/></td>
                                    </tr>
                                    
                                 
                                    <tr>
                                    <td>P.hd</td>
                                    <td><input type="text" name="college_name_phd" maxlength="30"  autocomplete="off"/></td>
                                    <td><input type="text" name="Board_name_phd" maxlength="30"  autocomplete="off"/></td>
                                    <td><input type="text" name="mode_phd" maxlength="30"  autocomplete="off"/></td>
                                    <td><input type="text" id="yearphd" name="Year_of_passing_phd" maxlength="4"  autocomplete="off"/></td>
                                    <td><input type="text" name="medium_of_instruction_phd" maxlength="30"  autocomplete="off"/></td>
                                    <td><input type="text" id="percentphd"name="Percentage_phd" maxlength="3"  autocomplete="off"/></td>
                                    </tr>
                                     
                                   
                                    <tr>
                                            <td>Others</td>
                                            <td><input type="text" name="college_name_other" maxlength="30"  autocomplete="off"/></td>
                                            <td><input type="text" name="Board_name_other" maxlength="30"  autocomplete="off"/></td>
                                            <td><input type="text" name="mode_other" maxlength="30"  autocomplete="off"/></td>
                                            <td><input type="text" id="yearother" name="Year_of_passing_other" maxlength="4"  autocomplete="off"/></td>
                                            <td><input type="text" name="medium_of_instruction_other" maxlength="30"  autocomplete="off"/></td>
                                            <td><input type="text" id="percentother"name="Percentage_other" maxlength="3"  autocomplete="off"/></td>
                                            </tr>
                                          
                                    </table>
                                    </div>
                                    <span style=" font-size:15px" id="err_qualification"></span>
                                   
                                    </tr>
                                    <br>
                                    <br>

                        <div id="net" class="form-group col-md-4">
                        <p style="font-weight:600;color:#333333">Net Qualified</p>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline5" name="netQ" value="yes" class="custom-control-input" >
                            <label class="custom-control-label" for="customRadioInline5">Yes</label>
                          </div>
                          <div class="custom-control custom-radio custom-control-inline">
                            <input type="radio" id="customRadioInline6" name="netQ" value="no" class="custom-control-input" checked>
                            <label class="custom-control-label" for="customRadioInline6">No</label>
                          </div>
                                  
                                  </div>

                        <div class="form-row">
                         <div class="form-group col-md-4">           
                        <p style="font-weight:600" id="para3" class="para">Publications <span style="font-weight:300;font-size:10px" class="text-muted">(In Numbers)</span></p>
                        <div id="publication" class="form-row">
                            
                                <div class="form-group col-md-6">
                                        <!-- <label for="inputNumber7">National Journals</label> -->
                                        <input  type="number" min="0" class="form-control" name="njournal" placeholder="National Journals" autocomplete="off">
                                </div>
                                
                                
                            <div class="form-group col-md-6">
                                    <!-- <label for="inputNumber2">International Journals</label> -->
                                    <input  type="number" min="0" class="form-control" name="injournal" placeholder="International Journals" autocomplete="off">
                            </div>
                            
                        </div>
                      <p style="font-weight:600" id="para3" class="para">Conferences <span style="font-weight:300;font-size:9px" class="text-muted">(In Numbers,publications in conference shall not be counted)</span></p>
                        <div class="form-row">
                            
                                <div class="form-group col-md-6">
                                        <!-- <label for="inputNumber7">NationalConferences</label> -->
                                        <input  type="number" min="0" class="form-control" name="nconference" placeholder="National Conferences" autocomplete="off">
                                </div>
                                
                            
                            <div class="form-group col-md-6">
                                    <!-- <label for="inputNumber2">International Conferences</label> -->
                                    <input  type="number" min="0" class="form-control" name="inconference" placeholder="International Conferences" autocomplete="off">
                            </div>
                            
                        </div>
                        </div>
                     
                        <br>
                        <br>

                        <div id="experience" class="form-group col-md-4">
                        <p style="font-weight:600" id="para1" class="para">Experience <span style="font-weight:300;font-size:10px" class="text-muted">(In Numbers)</span></p>
                        <!-- <div class="form-row"> -->
                            
                                <div class="form-group col-md-8">
                                        <!-- <label for="inputNumber7">Teaching</label> -->
                                        <input  type="number" min="0" class="form-control" name="teaching" placeholder="Teaching" autocomplete="off">
                                </div>
                                
                            
                            <div class="form-group col-md-8">
                                    <!-- <label for="inputNumber2">Corporate</label> -->
                                    <input type="number" min="0" class="form-control" name="corporate" placeholder="Corporate" autocomplete="off">
                            </div>
                            
                        </div>

                        
                                  
                                  </div>
                        </div>
                <button type="submit" id="register" value="Submit" class="btn btn-primary">Submit</button>
              </form>
 
              </body>
              </html>

