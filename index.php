


<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" charset="utf-8" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="registration.css">
    
    <title>Registration</title>
</head>

<body>
    <script src="jquery.min.js" type="text/javascript"></script>
   <script type="text/javascript" src="validation.js"></script>
<form method="POST" action="registration.php">
    <table align="center" cellpadding = "10">

            <tr>
            <td>Post(Applied for)</td>
            <td><input id="post" type="text" name="Post"/>
                <span id="err_post"></span>
            </td>
            
            </tr>
            
 
        <!----- First Name ---------------------------------------------------------->
        <tr>
        <td>First Name</td>
        <td><input id="name" type="text" name="First_Name"/>
        <span id="err_name"></span>
        </td>
        </tr>
        

        <tr>
                <td>Middle Name</td>
                <td><input type="text" name="Middle_Name"/>
                
                </td>
                </tr>
         
        <!----- Last Name ---------------------------------------------------------->
        <tr>
        <td>Last Name</td>
        <td><input type="text" name="Last_Name"/>
        
        </td>
        </tr>

        <tr>
                <td>Father's Name</td>
                <td><input type="text" name="fname"/>
                
                </td>
                </tr>

        <tr>
                <td>Spouse Name</td>
                <td><input id="spname" type="text" name="Spouse_name"/>
                <span id="err_spname"></span>
                </td>
                </tr>
         
                <tr>
                        <td>Caste/Category</td>
                        <td><input type="text" name="caste"/>
                        
                        </td>
                        </tr>

        <!-----Correspondance Address ---------------------------------------------------------->
        <tr>
                <td>Correspondence Address<br /><br /><br /></td>
                <td><textarea id="cpaddress" name="cpAddress" rows="4" cols="30"></textarea><span id="err_cpaddress"></span></td>
                </tr>

         <!----- Mobile Number ---------------------------------------------------------->
         <tr>
                <td>Mobile Name</td>
                <td>
                <input type="text" id="contact_number" name="Mobile_Number" maxlength="10" />
                <span id="err_contact_number"></span>
                </td>
                </tr>

          <!----- Email Id ---------------------------------------------------------->
          <tr>
                <td>Email Id</td>
                <td><input type="text" id="email" name="Email_Id" maxlength="100" /><span id="err_email"></span></td>
                
                </tr>
        
        <!-----Alternative Mobile Number ---------------------------------------------------------->
         <tr>
                <td>Alternative Mobile Number</td>
                <td>
                <input type="number" name="alt_Mobile_Number" maxlength="10" />
                
                </td>
                </tr>

         <!-----Permanent Address ---------------------------------------------------------->
         <tr>
                <td>Permanent Address<br/><br /><br /></td>
                <td><textarea id="paddress"  name="Address" rows="4" cols="30"></textarea><span id="err_paddress"></span></td>
                </tr>



        <!----- Date Of Birth -------------------------------------------------------->
        <tr>
        <td>Date of Birth</td>
         
        <td>
        <select id="birthday_day" name="Birthday_day" >
        <option value="">Day:</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
         
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        <option value="12">12</option>
         
        <option value="13">13</option>
        <option value="14">14</option>
        <option value="15">15</option>
        <option value="16">16</option>
        <option value="17">17</option>
        <option value="18">18</option>
        <option value="19">19</option>
        <option value="20">20</option>
        <option value="21">21</option>
         
        <option value="22">22</option>
        <option value="23">23</option>
        <option value="24">24</option>
        <option value="25">25</option>
        <option value="26">26</option>
        <option value="27">27</option>
        <option value="28">28</option>
        <option value="29">29</option>
        <option value="30">30</option>
         
        <option value="31">31</option>
        </select>
         
        <select id="birth" name="Birthday_Month">
        <option value="">Month:</option>
        <option value="January">Jan</option>
        <option value="February">Feb</option>
        <option value="March">Mar</option>
        <option value="April">Apr</option>
        <option value="May">May</option>
        <option value="June">Jun</option>
        <option value="July">Jul</option>
        <option value="August">Aug</option>
        <option value="September">Sep</option>
        <option value="October">Oct</option>
        <option value="November">Nov</option>
        <option value="December">Dec</option>
        </select>
         
        <select name="Birthday_Year" id="Birthday_Year">
         
        <option value="">Year:</option>
        <option value="2012">2012</option>
        <option value="2011">2011</option>
        <option value="2010">2010</option>
        <option value="2009">2009</option>
        <option value="2008">2008</option>
        <option value="2007">2007</option>
        <option value="2006">2006</option>
        <option value="2005">2005</option>
        <option value="2004">2004</option>
        <option value="2003">2003</option>
        <option value="2002">2002</option>
        <option value="2001">2001</option>
        <option value="2000">2000</option>
         
        <option value="1999">1999</option>
        <option value="1998">1998</option>
        <option value="1997">1997</option>
        <option value="1996">1996</option>
        <option value="1995">1995</option>
        <option value="1994">1994</option>
        <option value="1993">1993</option>
        <option value="1992">1992</option>
        <option value="1991">1991</option>
        <option value="1990">1990</option>
         
        <option value="1989">1989</option>
        <option value="1988">1988</option>
        <option value="1987">1987</option>
        <option value="1986">1986</option>
        <option value="1985">1985</option>
        <option value="1984">1984</option>
        <option value="1983">1983</option>
        <option value="1982">1982</option>
        <option value="1981">1981</option>
        <option value="1980">1980</option>
        </select>
        <span id="err_birth"></span>
        </td>
        </tr>

        
          <!-----relationship ----------------------------------------------------------->
        <tr>
                <td>Relationship Status</td>
                <td>
                Married <input type="radio" name="Gender" value="Male" />
                 Unmarried<input type="radio" name="Gender" value="Female" />
                </td>
                </tr>

        <!----- Date Of Birth -------------------------------------------------------->
        <tr>
                <td>Date of Marriage</td>
                 
                <td>
                <select name="marriage_day" id="marriage_day">
                <option value="">Day:</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                 
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                 
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                 
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                 
                <option value="31">31</option>
                </select>
                 
                <select id="marriage" name="marriage_Month">
                <option value="">Month:</option>
                <option value="January">Jan</option>
                <option value="February">Feb</option>
                <option value="March">Mar</option>
                <option value="April">Apr</option>
                <option value="May">May</option>
                <option value="June">Jun</option>
                <option value="July">Jul</option>
                <option value="August">Aug</option>
                <option value="September">Sep</option>
                <option value="October">Oct</option>
                <option value="November">Nov</option>
                <option value="December">Dec</option>
                </select>
                 
                <select name="marriage_Year" id="marriage_Year">
                 
                <option value="">Year:</option>
                <option value="2012">2012</option>
                <option value="2011">2011</option>
                <option value="2010">2010</option>
                <option value="2009">2009</option>
                <option value="2008">2008</option>
                <option value="2007">2007</option>
                <option value="2006">2006</option>
                <option value="2005">2005</option>
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
                 
                <option value="1999">1999</option>
                <option value="1998">1998</option>
                <option value="1997">1997</option>
                <option value="1996">1996</option>
                <option value="1995">1995</option>
                <option value="1994">1994</option>
                <option value="1993">1993</option>
                <option value="1992">1992</option>
                <option value="1991">1991</option>
                <option value="1990">1990</option>
                 
                <option value="1989">1989</option>
                <option value="1988">1988</option>
                <option value="1987">1987</option>
                <option value="1986">1986</option>
                <option value="1985">1985</option>
                <option value="1984">1984</option>
                <option value="1983">1983</option>
                <option value="1982">1982</option>
                <option value="1981">1981</option>
                <option value="1980">1980</option>
                </select>
                <span id="err_marriage"></span>
                </td>
                </tr>

        
        
         
        <!----- Gender ----------------------------------------------------------->
        <tr>
        <td>Gender</td>
        <td>
        Male <input type="radio" name="Gender" value="Male" />
        Female <input type="radio" name="Gender" value="Female" />
        </td>
        </tr>
         
       
         
       
         
      
         
        <!----- Qualification---------------------------------------------------------->
        <tr>
        <td>Qualification<br /><br /><br /><br /><br /><br /><br /></td>
         
        <td>
        <table>
         
        <tr>
       
        <td align="center"><b>Examination</b></td>
        <td align="center"><b>Name of College</b></td>
        <td align="center"><b>Educational Board</b></td>
        <td align="center"><b>Regular/Distance</b></td>
        <td align="center"><b>Year of Passing</b></td>
        <td align="center"><b>Medium of Instructions</b></td>
        <td align="center"><b>Div. & Percentage of Marks</b></td>
        </tr>
         
        <tr>
        
        <td >Class X* </td>
   
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
        <td>Post Graduation</td>
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
         
        </td>
        </tr>
        

        <tr>
            <td>Publications</td>
            <td>National Journals<input type="number" name="njournal" >
                International Journals<input type="number" name="injournal">
            </td>
            
           
        </tr>
        <tr>
            <td></td>
                <td>
                    National Conferences<input type="number" name="nconference">
                    International Conferences<input type="number" name="inconference">
                </td>
            </tr>

            <tr>
                    <td>Experience</td>
                    <td >
                        Teaching<input type="number" name="teaching" >
                        Corporate<input type="number" name="corporate">
                    </td>
                   
                </tr>

       
         
        <!----- Submit and Reset ------------------------------------------------->
        <tr>
        <td colspan="2" align="center">
        <input type="submit" name="submit" value="Submit">
        </td>
        </tr>
        </table>
         
        </form>
         
</body>
</html>