
<?php
  if(isset($_GET['user_id'])){
      $user_id=$_GET['user_id'];
    $query="SELECT * FROM users WHERE userid=$user_id ";
    $result=mysqli_query($connection,$query);
   if(!$result){
       die("query failed". mysqli_error($connection));
   }
    while($row=mysqli_fetch_assoc($result))                // used for showing the details of the users
    {    
   
	 $userid=$row['userid'];
   $post= $row['post'];

  $name=$row['urname'];
  $father_name=$row['fathername'];
	
  $spouse_name=$row['spousename'];
  $cast=$row['category'];
  $corresponding_address=$row['correspondenceaddress'];
  $contact=$row['contactno']; 
  $alt_contact_no=$row['alternativecontactno'];
  $email=$row['email'];
  $permanent_address=$row['permanentaddress'];
  $gender=$row['gender'];

  $date_of_birth= $row['dateofbirth'];
 
  $married=$row['dateofmarriage'];

  $njournal=$row['national_journal'];
  $injournal=$row['international_journal'];
  $nconference=$row['national_conference'];
  $inconference=$row['international_conference'];
  $teaching_exp=$row['teachingexperience'];
  $corporate_exp=$row['corporateexperience'];
  $netq=$row['net_qualified'];
    }


    $query_10="SELECT * FROM 10th_qualification WHERE user_fk=$userid ";
    $result_10=mysqli_query($connection,$query_10);
   if(!$result_10){
       die("query failed". mysqli_error($connection));
   }
    while($row_10=mysqli_fetch_assoc($result_10))                // used for showing the details of the users
    {    
   $userid_10=$row_10['user_fk'];
   $college10=$row_10['nameofcollege'];
   $board10=$row_10['educationalboard'];
   $mode10=$row_10['mode'];
   $yearofpassing10=$row_10['yearofpassing'];
   $medofins10=$row_10['mediumofinstruction'];
   $marks10=$row_10['percentageofmarks'];

    }
  


    $query_12="SELECT * FROM 12th_qualification WHERE user_fk=$userid ";
    $result_12=mysqli_query($connection,$query_12);
   if(!$result_12){
       die("query failed". mysqli_error($connection));
   }
    while($row_12=mysqli_fetch_assoc($result_12))                // used for showing the details of the users
    {    
   $userid_12=$row_12['user_fk'];
   $college12=$row_12['nameofcollege'];
   $board12=$row_12['educationalboard'];
   $mode12=$row_12['mode'];
   $yearofpassing12=$row_12['yearofpassing'];
   $medofins12=$row_12['mediumofinstruction'];
   $marks12=$row_12['percentageofmarks'];
    }
   

    $query_grad="SELECT * FROM grad_qualification WHERE user_fk=$userid ";
    $result_grad=mysqli_query($connection,$query_grad);
   if(!$result_grad){
       die("query failed". mysqli_error($connection));
   }
    while($row_grad=mysqli_fetch_assoc($result_grad))                // used for showing the details of the users
    {    
   $userid_grad=$row_grad['user_fk'];
    $college_grad=$row_grad['nameofcollege'];
   $board_grad=$row_grad['educationalboard'];
   $mode_grad=$row_grad['mode'];
   $yearofpassing_grad=$row_grad['yearofpassing'];
   $medofins_grad=$row_grad['mediumofinstruction'];
   $marks_grad=$row_grad['percentageofmarks'];
    }
   
	  
  $query_postgrad="SELECT * FROM postgrad_qualification WHERE user_fk=$userid ";
    $result_postgrad=mysqli_query($connection,$query_postgrad);
   if(!$result_postgrad){
       die("query failed". mysqli_error($connection));
   }
	  $row_postgrad=mysqli_fetch_assoc($result_postgrad);
	  if( $row_postgrad>0)
	  {
    while($row_postgrad=mysqli_fetch_assoc($result_postgrad))                // used for showing the details of the users
    {    
   $userid_postgrad=$row_postgrad['user_fk'];
   $college_postgrad=$row_postgrad['nameofcollege'];
   $board_postgrad=$row_postgrad['educationalboard'];
   $mode_postgrad=$row_postgrad['mode'];
   $yearofpassing_postgrad=$row_postgrad['yearofpassing'];
   $medofins_grad=$row_postgrad['mediumofinstruction'];
   $marks_postgrad=$row_postgrad['percentageofmarks'];
    }
   
	  }
	  
	$query_phd="SELECT * FROM phd_qualification WHERE user_fk=$userid ";
   $result_phd=mysqli_query($connection,$query_phd);
   if(!$result_phd){
       die("query failed". mysqli_error($connection));
   }
	  $row_phd=mysqli_fetch_assoc($result_phd);
	  if( $row_phd>0)
	  {
    while($row_phd=mysqli_fetch_assoc($result_phd))                // used for showing the details of the users
    {    
   $userid_phd=$row_phd['user_fk'];
   $college_phd=$row_phd['nameofcollege'];
   $board_phd=$row_phd['educationalboard'];
   $mode_phd=$row_phd['mode'];
   $yearofpassing_phd=$row_phd['yearofpassing'];
   $medofins_phd=$row_phd['mediumofinstruction'];
   $marks_phd=$row_phd['percentageofmarks'];
    }
   
	  }
	  
	$query_other="SELECT * FROM other_qualification WHERE user_fk=$userid ";
   $result_other=mysqli_query($connection,$query_other);
   if(!$result_other){
       die("query failed". mysqli_error($connection));
   }
	  $row_other=mysqli_fetch_assoc($result_phd);
	  if( $row_other>0)
	  {
    while($row_other=mysqli_fetch_assoc($result_other))                // used for showing the details of the users
    {    
   $userid_other=$row_other['user_fk'];
   $college_other=$row_other['nameofcollege'];
   $board_other=$row_other['educationalboard'];
   $mode_other=$row_other['mode'];
   $yearofpassing_other=$row_other['yearofpassing'];
   $medofins_other=$row_other['mediumofinstruction'];
   $marks_other=$row_other['percentageofmarks'];
    }
   
	  }
}
?>
  <meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/registration.css">
<style>
@media (max-width: 720px)
{
.para {
    margin: auto;
	}
}
</style>
<form class="fit"  method="POST">
        <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputPost">Post</label>
                <input  class="form-control" type="text"  value="<?php echo $post; ?>"  readonly/>
             
              </div>
            
              </div>
                <div class="form-row">
                        
                  <div class="form-group col-md-4">
                    <label for="inputName1"> Name</label>
                    <input id="name" class="form-control" type="text"  value="<?php echo $name; ?>"  readonly/>
                
                  </div>
                 
               
                </div>

                <div class="form-row">
                    <div class="form-group col-md-4">
                            <label for="inputName5">Father's Name </label>
                            <input type="text" class="form-control"  value="<?php echo $father_name; ?>"  readonly>
                           
                    </div>
                    
                    <div class="form-group col-md-4">
                            <label for="inputName6">Spouse Name </label>
                            <input type="text" class="form-control" value="<?php echo $spouse_name; ?>"  readonly>
                          
                    </div>
                   
                </div>

                <div class="form-row">
                        <div class="form-group col-md-4">
                                <label for="inputCategory">Caste/Category</label>
                                <input type="text" class="form-control"  value="<?php echo $cast; ?>"  readonly>
                              </div>
                           
                        <div class="form-group col-md-4">
                                <label for="inputEmail">Email </label>
                                <input type="text" class="form-control"  value="<?php echo $email; ?>"  readonly>
                              
                        </div>
                       
                    </div>
               

                <div class="form-row">
                <div class="form-group col-md-4">
                  <label for="inputAddress">Corresponding Address</label>
                  <textarea class="form-control" readonly><?php echo $corresponding_address; ?></textarea>
                  
                </div>
              
                <div class="form-group col-md-4">
                        <label for="inputAddress">Permanent Address</label>
                        <textarea class="form-control" readonly><?php echo $permanent_address; ?></textarea>
                    
                  </div>
                  </div>
        
            <div class="form-row">
            <div class="form-group col-md-4">
                    <label for="inputDate">Date of Birth</label>
                    <input type="text" class="form-control"  value="<?php echo $date_of_birth; ?>"  readonly>
                   </div>
                  
                   <div class="form-group col-md-4">
                        <p style="font-weight:600;color:#333333">Gender</p>
                      
                        <input type="text" class="form-control"  value="<?php echo $gender; ?>"  readonly>
                                  </div>
                              
                </div>

                <div class="form-row">
                        <div class="form-group col-md-4">
                                <label for="inputNumber1">Mobile Number</label>
                                <input type="text" class="form-control"  value="<?php echo $contact; ?>" readonly>
               
                        </div>
                       
                        <div class="form-group col-md-4">
                                <label for="inputNumber2">Alternative Mobile Number</label>
                                <input type="text" class="form-control" value="<?php echo $alt_contact_no; ?>" readonly>
                         
                        </div>
                       
                    </div>
                    <div class="form-row">
                        
                        
                            <div class="form-group col-md-4">
                                    <label for="inputDate">Date of Marriage</label>
                                   <input type="text" class="form-control" value="<?php echo $married; ?>" readonly>
                                   </div>
                            </div> 
                       
                        <br>
                        <br>

                        
                       <div class="form-row">
                            <h4 style="font-weight:600;color:black;">Qualifications</h4>
                            <div style="overflow-x:auto">
                       
                              <table class="form1" >
         
                                    <tr class="headings">
                                   
                                    <td style="color:#333333" align="center">Examination</td>
                                    <td style="color:#333333" align="center">Name of College</td>
                                    <td style="color:#333333" align="center">Educational Board</td>
                                    <td style="color:#333333" align="center">Regular/Distance</td>
                                    <td style="color:#333333" align="center">Year of Passing</td>
                                    <td style="color:#333333" align="center">Medium of Instructions</td>
                                    <td style="color:#333333" align="center">Div. & Percentage of Marks</td>
                                    </tr>
                                     
                                    <tr>
                                    
                                    <td>Class X*</td>
                                    <td><input type="text" value="<?php  echo $college10;?>" readonly/></td>
                                    <td><input type="text"  value="<?php  echo $board10;?>"  readonly/></td>
                                    <td><input type="text"  value="<?php  echo $mode10;?>"  readonly/></td>
                                    <td><input type="text" value="<?php  echo $yearofpassing10;?>"  readonly/></td>
                                    <td><input type="text" value="<?php  echo $medofins10;?>"  readonly/></td>
                                    <td><input type="text" value="<?php  echo $marks10;?>"  readonly/></td>
                                    </tr>
                                   
                                    <tr>
                                    
                                    <td>Class XII*</td>
                                    <td><input type="text" value="<?php  echo $college12;?>" readonly/></td>
                                    <td><input type="text"  value="<?php  echo $board12;?>"  readonly/></td>
                                    <td><input type="text"  value="<?php  echo $mode12;?>"  readonly/></td>
                                    <td><input type="text" value="<?php  echo $yearofpassing12;?>"  readonly/></td>
                                    <td><input type="text" value="<?php  echo $medofins12;?>"  readonly/></td>
                                    <td><input type="text" value="<?php  echo $marks12;?>"  readonly/></td>
                                    </tr>
                                   
                                    <tr>
                                    
                                    <td>Graduation*</td>
                                    <td><input type="text" value="<?php  echo $college_grad;?>" readonly/></td>
                                    <td><input type="text"  value="<?php  echo $board_grad;?>"  readonly/></td>
                                    <td><input type="text"  value="<?php  echo $mode_grad;?>"  readonly/></td>
                                    <td><input type="text" value="<?php  echo $yearofpassing_grad;?>"  readonly/></td>
                                    <td><input type="text" value="<?php  echo $medofins_grad;?>"  readonly/></td>
                                    <td><input type="text" value="<?php  echo $marks_grad;?>"  readonly/></td>
                                    </tr>
                                     
                        
                                    <tr>
                                    <td>P.G.</td>
                                   <td><input type="text" value="<?php if (isset($college_postgrad)){echo $college_postgrad;}?>" readonly/></td>
                                    <td><input type="text"  value="<?php  if (isset($board_postgrad)){echo $board_postgrad;}?>"  readonly/></td>
                                    <td><input type="text"  value="<?php  if (isset($mode_postgrad)){echo $mode_postgrad;}?>"  readonly/></td>
                                    <td><input type="text" value="<?php  if (isset($yearofpassing_postgrad)){echo $yearofpassing_postgrad;}?>"  readonly/></td>
                                    <td><input type="text" value="<?php  if (isset($medofins_postgrad)){echo $medofins_postgrad;}?>"  readonly/></td>
                                    <td><input type="text" value="<?php  if (isset($marks_postgrad)){echo $marks_postgrad;}?>"  readonly/></td>
                                    </tr>
                                    
                                 
                                    <tr>
                                    <td>P.hd</td>
                                     <td><input type="text" value="<?php if (isset($college_phd)){echo $college_phd;}?>" readonly/></td>
                                    <td><input type="text"  value="<?php  if (isset($board_phd)){echo $board_phd;}?>"  readonly/></td>
                                    <td><input type="text"  value="<?php  if (isset($mode_phd)){echo $mode_phd;}?>"  readonly/></td>
                                    <td><input type="text" value="<?php  if (isset($yearofpassing_phd)){echo $yearofpassing_phd;}?>"  readonly/></td>
                                    <td><input type="text" value="<?php  if (isset($medofins_phd)){echo $medofins_phd;}?>"  readonly/></td>
                                    <td><input type="text" value="<?php  if (isset($marks_phd)){echo $marks_phd;}?>"  readonly/></td>
                                    </tr>
                                     
                                   
                                    <tr>
                                            <td>Others</td>
                                     <td><input type="text" value="<?php if (isset($college_other)){echo $college_other;}?>" readonly/></td>
                                    <td><input type="text"  value="<?php  if (isset($board_other)){echo $board_other;}?>"  readonly/></td>
                                    <td><input type="text"  value="<?php  if (isset($mode_other)){echo $mode_other;}?>"  readonly/></td>
                                    <td><input type="text" value="<?php  if (isset($yearofpassing_other)){echo $yearofpassing_other;}?>"  readonly/></td>
                                    <td><input type="text" value="<?php  if (isset($medofins_other)){echo $medofins_other;}?>"  readonly/></td>
                                    <td><input type="text" value="<?php  if (isset($marks_other)){echo $marks_other;}?>"  readonly/></td>
                                            </tr>
                                          
                                    </table>
                                    </div>
                                   
	</div>
                                    </tr>
                                    <br>
                                    <br>
                        <div class="form-row">
                        <div class="form-group col-md-4">
                        <p style="font-weight:600;color:#333333">Net Qualified</p>
                        <input id="name" class="form-control" type="text" value="<?php echo $netq; ?>" readonly/>
                           </div>
                         </div>
                        <div class="form-row">
                         <div class="form-group col-md-5">           
                        <h4 style="font-weight:600;color:black;" id="para3" >Publications</h4>
                        <div id="publication" class="form-row">
                            
                                <div class="form-group col-md-6">
                                        <label for="inputNumber7">National Journals</label>
                                        <input type="text" class="form-control" value="<?php echo $njournal; ?>" readonly>
                                </div>
                                
                                
                            <div class="form-group col-md-6">
                                    <label for="inputNumber2">International Journals</label>
                                    <input  type="text"  class="form-control" value="<?php echo $injournal; ?>" readonly>
                            </div>
                            
                        </div>
                    
                        <div class="form-row">
                            
                                <div class="form-group col-md-5">
                                        <label for="inputNumber7">National Conferences</label>
                                         <input  type="text"  class="form-control" value="<?php echo $nconference; ?>" readonly>
                                </div>
                                
                            
                            <div class="form-group col-md-6">
                                    <label for="inputNumber2">International Conferences</label>
                                     <input  type="text"  class="form-control" value="<?php echo $inconference; ?>" readonly>
                            </div>
                            
							 </div>
                        </div>

                        <br>
                        <br>
                       
                        <div id="experience" class="form-group col-md-4">
                        <h4 style="font-weight:600;color:black;" >Experience</h4>
                     
                            
                                <div class="form-group col-md-8">
                                        <label for="inputNumber7">Teaching</label>
                                        <input  type="number" min="0" class="form-control" value="<?php echo $teaching_exp; ?>" readonly>
                                </div>
                                
                            
                            <div class="form-group col-md-8">
                                    <label for="inputNumber2">Corporate</label>
                                    <input type="number" min="0" class="form-control" value="<?php echo $corporate_exp; ?>" readonly>
                            </div>
                            
                        </div>
						
</div>
            
              </form> 