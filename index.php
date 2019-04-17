

<!DOCTYPE html>
<html lang="en">

<head>
<!-- <script src="jquery.min.js" type="text/javascript"></script> -->
    <meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="./registration.css">
   <style>
   span{
           color:red;
   }
   </style>
    
    <title>Registration</title>
</head>

<body>


   <script src="jquery.min.js"></script>
  <script type="text/javascript" src="validation.js"></script>

<div class="header">


    <h1>Registration</h1>
</div>

        <form class="fit"  method="POST">
        <div class="form-row">
                <div class="form-group col-md-2">
                <label  for="inputPost">Post</label>
                <input  class="form-control" type="text" name="Post" id="post" placeholder="Post applied for"/>
                <span id="err_post"></span>
              </div>
            
              </div>
                <div class="form-row">
                        
                  <div class="form-group col-md-2">
                    <label for="inputName1">First Name</label>
                    <input id="name" class="form-control" type="text" name="First_Name" placeholder="First Name"/>
                    <span id="err_name"></span>
                  </div>
                 
                  <div class="form-group col-md-2">
                        <label for="inputName2">Middle Name</label>
                        <input id="middlename" type="text" class="form-control" name="Middle_Name" placeholder="Middle Name"/>
                      </div>
                    
                  <div class="form-group col-md-2">
                    <label for="inputName3">Last Name </label>
                    <input id="lastname" type="text" class="form-control" name="Last_Name" placeholder="Last Name"/>
                  </div>
               
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                            <label for="inputName5">Father's Name </label>
                            <input type="text" class="form-control" id="fname"  name="fname" placeholder="Father's Name">
                            <span id="err_fname"></span>
                    </div>
                    
                    <div class="form-group col-md-4">
                            <label for="inputName6">Spouse Name </label>
                            <input type="text" class="form-control" name="Spouse_name" id="spname" placeholder="Spouse Name">
                            <span id="err_spname"></span>
                    </div>
                   
                </div>

                <div class="form-row">
                        <div class="form-group col-md-4">
                                <label for="inputCategory">Caste/Category</label>
                                <select id="inputCategory" name="caste" class="form-control">
                                  <option>General</option>
                                  <option>SC/ST</option>
                                  <option>OBC</option>
                                </select>
                              </div>
                              <span id=""></span>
                        <div class="form-group col-md-4">
                                <label for="inputEmail">Email </label>
                                <input type="text" class="form-control" id="email" name="Email_Id" placeholder="Email">
                                <span id="err_email"></span>
                        </div>
                       
                    </div>
               

                <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputAddress">Corresponding Address</label>
                  <textarea class="form-control" id="cpaddress" name="cpAddress"  rows="3" placeholder="Address"></textarea>
                  <span id="err_cpaddress"></span>
                </div>
              
                <div class="form-group col-md-4">
                        <label for="inputAddress">Permanent Address</label>
                        <textarea class="form-control" id="paddress"  name="Address"  rows="3" placeholder="Address"></textarea>
                        <span id="err_paddress"></span>
                  </div>
                  </div>
        
            <div class="form-row">
            <div class="form-group col-md-4">
                    <label for="inputDate">Date of Birth</label>
                    <input type="date" id="birth" name="Birthday_day" max="3000-12-31" 
                           min="1000-01-01" class="form-control">
                           <span id="err_birth"></span>
                   </div>
                  
                   <div class="form-group col-md-4">
                        <p>Gender</p>
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
                                <label for="inputNumber1">Mobile Number</label>
                                <input type="text" class="form-control" id="contact_number" name="Mobile_Number" placeholder="Mobile Number">
                                <span id="err_contact_number"></span>
                        </div>
                       
                        <div class="form-group col-md-4">
                                <label for="inputNumber2">Alternative Mobile Number</label>
                                <input type="text" class="form-control" id="alt_contact_number" name="alt_Mobile_Number" placeholder="Alternative Mobile Number">
                                <span id="err_alt_contact_number"></span>
                        </div>
                       
                    </div>
                    <div class="form-row">
                            <div class="form-group col-md-4">
                                <p id="para2">Relationship</p>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline3" name="customRadioInline3" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline3">Married</label>
                                  </div>
                                  <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="customRadioInline4" name="customRadioInline3" class="custom-control-input">
                                    <label class="custom-control-label" for="customRadioInline4">Un-Married</label>
                                  </div>
                            </div>
                            <span id=""></span>
                            <div class="form-group col-md-4">
                                    <label for="inputDate">Date of Marriage</label>
                                    <input type="date" name="marriage_day" id="marriage" max="3000-12-31" 
                                           min="1000-01-01" class="form-control">
                                           <span id="err_marriage"></span>
                                   </div>
                            </div>
                           
                        </div>
                        <br>
                        <br>
                     
                            <p class="para">Qualifications</p>
                            <div style="overflow-x:auto">
                       
                              <table>
         
                                    <tr class="headings">
                                   
                                    <td align="center">Examination</td>
                                    <td align="center">Name of College</td>
                                    <td align="center">Educational Board</td>
                                    <td align="center">Regular/Distance</td>
                                    <td align="center">Year of Passing</td>
                                    <td align="center">Medium of Instructions</td>
                                    <td align="center">Div. & Percentage of Marks</td>
                                    </tr>
                                     
                                    <tr>
                                    
                                    <td>Class X*</td>
                                    <td><input type="text" name="college_name10" maxlength="30" /></td>
                                    <td><input type="text" name="Board_name10" maxlength="30" /></td>
                                    <td><input type="text" name="mode10" maxlength="30" /></td>
                                    <td><input type="text" name="Year_of_passing10" maxlength="30" /></td>
                                    <td><input type="text" name="medium_of_instruction10" maxlength="30" /></td>
                                    <td><input type="text" name="Percentage10" maxlength="30" /></td>
                                    </tr>
                                   
                                    <tr>
                                    
                                    <td>Class XII*</td>
                                    <td><input type="text" name="college_name12" maxlength="30" /></td>
                                    <td><input type="text" name="Board_name12" maxlength="30" /></td>
                                    <td><input type="text" name="mode12" maxlength="30" /></td>
                                    <td><input type="text" name="Year_of_passing12" maxlength="30" /></td>
                                    <td><input type="text" name="medium_of_instruction12" maxlength="30" /></td>
                                    <td><input type="text" name="Percentage12" maxlength="30" /></td>
                                    </tr>
                                   
                                    <tr>
                                    
                                    <td>Graduation*</td>
                                    <td><input type="text" name="college_name_grad" maxlength="30" /></td>
                                    <td><input type="text" name="Board_name_grad" maxlength="30" /></td>
                                    <td><input type="text" name="mode_grad" maxlength="30" /></td>
                                    <td><input type="text" name="Year_of_passing_grad" maxlength="30" /></td>
                                    <td><input type="text" name="medium_of_instruction_grad" maxlength="30" /></td>
                                    <td><input type="text" name="Percentage_grad" maxlength="30" /></td>
                                    </tr>
                                     
                        
                                    <tr>
                                    <td>P.G.</td>
                                    <td><input type="text" name="college_name_postgrad" maxlength="30" /></td>
                                    <td><input type="text" name="Board_name_postgrad" maxlength="30" /></td>
                                    <td><input type="text" name="mode_postgrad" maxlength="30" /></td>
                                    <td><input type="text" name="Year_of_passing_postgrad" maxlength="30" /></td>
                                    <td><input type="text" name="medium_of_instruction_postgrad" maxlength="30" /></td>
                                    <td><input type="text" name="Percentage_postgrad" maxlength="30" /></td>
                                    </tr>
                                    
                                 
                                    <tr>
                                    <td>P.hd</td>
                                    <td><input type="text" name="college_name_phd" maxlength="30" /></td>
                                    <td><input type="text" name="Board_name_phd" maxlength="30" /></td>
                                    <td><input type="text" name="mode_phd" maxlength="30" /></td>
                                    <td><input type="text" name="Year_of_passing_phd" maxlength="30" /></td>
                                    <td><input type="text" name="medium_of_instruction_phd" maxlength="30" /></td>
                                    <td><input type="text" name="Percentage_phd" maxlength="30" /></td>
                                    </tr>
                                     
                                   
                                    <tr>
                                            <td>Others</td>
                                            <td><input type="text" name="college_name_other" maxlength="30" /></td>
                                            <td><input type="text" name="Board_name_other" maxlength="30" /></td>
                                            <td><input type="text" name="mode_other" maxlength="30" /></td>
                                            <td><input type="text" name="Year_of_passing_other" maxlength="30" /></td>
                                            <td><input type="text" name="medium_of_instruction_other" maxlength="30" /></td>
                                            <td><input type="text" name="Percentage_other" maxlength="30" /></td>
                                            </tr>
                                          
                                    </table>
                                    </div>
                                    <span style="margin-left:70px; font-size:15px" id="err_qualification"></span>
                                   
                                    </tr>
                                    <br>
                                    <br>
                        <p id="para1" class="para">Publications</p>
                        <div class="form-row">
                            
                                <div class="form-group col-md-2">
                                        <label for="inputNumber7">National Journals</label>
                                        <input type="text" class="form-control" name="njournal" placeholder="National Journals">
                                </div>
                                
                                
                            <div class="form-group col-md-2">
                                    <label for="inputNumber2">International Journals</label>
                                    <input type="text" class="form-control" name="injournal" placeholder="International Journals">
                            </div>
                            
                        </div>
                    
                        <div class="form-row">
                            
                                <div class="form-group col-md-2">
                                        <label for="inputNumber7">NationalConferences</label>
                                        <input type="text" class="form-control" name="nconference" placeholder="National Conferences">
                                </div>
                                
                            
                            <div class="form-group col-md-2">
                                    <label for="inputNumber2">International Conferences</label>
                                    <input type="text" class="form-control" name="inconference" placeholder="International Conferences">
                            </div>
                            
                        </div>
                     
                        <br>
                        <br>
                        <p id="para1" class="para">Expierence</p>
                        <div class="form-row">
                            
                                <div class="form-group col-md-2">
                                        <label for="inputNumber7">Teaching</label>
                                        <input type="text" class="form-control" name="teaching" placeholder="Teaching">
                                </div>
                                
                            
                            <div class="form-group col-md-2">
                                    <label for="inputNumber2">Corporate</label>
                                    <input type="text" class="form-control" name="corporate" placeholder="Corporate">
                            </div>
                            
                        </div>
                <button type="submit" id="register" name="submit" value="Submit" class="btn btn-primary">Submit</button>
              </form>
 
              </body>
              </html>

