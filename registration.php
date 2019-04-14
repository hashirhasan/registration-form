    <?php include "connect.php"  ?>
<?php 
if(isset($_POST['submit']))
{
  $post= $_POST['Post'];
  $first_name=$_POST['First_Name'];
  $middle_name=$_POST['Middle_Name'];
  $last_name=$_POST['Last_Name'];
  $name="$first_name ' '$middle_name' ' $last_name ";
  $father_name=$_POST['fname'];
  $spouse_name=$_POST['Spouse_name'];
  $cast=$_POST['caste'];
  $corresponding_address=$_POST['cpAddress'];
  $contact=$_POST['Mobile_Number']; 
  $alt_contact_no=$_POST['alt_Mobile_Number'];
  $email=$_POST['Email_Id'];
  $permanent_address=$_POST['Address'];

  $b_day=$_POST['Birthday_day'];
  $b_month=$_POST['Birthday_Month'];
  $b_year=$_POST['Birthday_Year'];
  $date_of_birth="$b_month/$b_day/$b_year";

  $m_day=$_POST['marriage_day'];
  $m_month=$_POST['marriage_Month'];
  $m_year=$_POST['marriage_Year'];
  $married="$m_month/$m_day/$m_year";

  $njournal=$_POST['njournal'];
  $injournal=$_POST['injournal'];
  $nconference=$_POST['nconference'];
  $inconference=$_POST['inconference'];
  $teaching_exp=$_POST['teaching'];
  $corporate_exp=$_POST['corporate'];

  $college10= $_POST['college_name10'];
  $board10=$_POST['Board_name10'];
  $mode10=$_POST['mode10'];
  $yearofpassing10=$_POST['Year_of_passing10'];
  $medofins10=$_POST['medium_of_instruction10'];
  $marks10=$_POST['Percentage10'];

  $college12= $_POST['college_name12'];
  $board12=$_POST['Board_name12'];
  $mode12=$_POST['mode12'];
  $yearofpassing12=$_POST['Year_of_passing12'];
  $medofins12=$_POST['medium_of_instruction12'];
  $marks12=$_POST['Percentage12'];

  $college_grad= $_POST['college_name_grad'];
  $board_grad=$_POST['Board_name_grad'];
  $mode_grad=$_POST['mode_grad'];
  $yearofpassing_grad=$_POST['Year_of_passing_grad'];
  $medofins_grad=$_POST['medium_of_instruction_grad'];
  $marks_grad=$_POST['Percentage_grad'];

   $college_postgrad= $_POST['college_name_postgrad'];
   $board_postgrad=$_POST['Board_name_postgrad'];
   $mode_postgrad=$_POST['mode_postgrad'];
   $yearofpassing_postgrad=$_POST['Year_of_passing_postgrad'];
   $medofins_postgrad=$_POST['medium_of_instruction_postgrad'];
   $marks_postgrad=$_POST['Percentage_postgrad'];

    $college_phd= $_POST['college_name_phd'];
  $board_phd=$_POST['Board_name_phd'];
  $mode_phd=$_POST['mode_phd'];
  $yearofpassing_phd=$_POST['Year_of_passing_phd'];
  $medofins_phd=$_POST['medium_of_instruction_phd'];
  $marks_phd=$_POST['Percentage_phd'];
    
    $college_other= $_POST['college_name_other'];
  $board_other=$_POST['Board_name_other'];
  $mode_other=$_POST['mode_other'];
  $yearofpassing_other=$_POST['Year_of_passing_other'];
  $medofins_other=$_POST['medium_of_instruction_other'];
  $marks_other=$_POST['Percentage_other'];
    
    if(!empty($_POST['Post']) and !empty($_POST['First_Name'])  and !empty($_POST['fname']) and !empty($_POST['caste']) and !empty($_POST['cpAddress']) and !empty($_POST['Mobile_Number']) and !empty($_POST['Email_Id']) and !empty($_POST['Address'])and !empty($_POST['Birthday_day']) and !empty($_POST['Birthday_Month']) and !empty($_POST['Birthday_Year'])) //and !empty($_POST['njournal'])  and !empty($_POST['injournal'])  and !empty($_POST['nconference'])  and !empty($_POST['inconference']) and !empty($_POST['teaching']) and !empty($_POST['corporate']))
    { 
      if(!empty($_POST['college_name10']) and !empty($_POST['Year_of_passing10'])  and !empty($_POST['Board_name10']) and !empty($_POST['mode10']) and !empty($_POST['medium_of_instruction10']) and !empty($_POST['Percentage10']))
      {
            
        if(!empty($_POST['college_name12']) and !empty($_POST['Year_of_passing12'])  and !empty($_POST['Board_name12']) and !empty($_POST['mode12']) and !empty($_POST['medium_of_instruction12']) and !empty($_POST['Percentage12']))
        {  
          if(!empty($_POST['college_name_grad']) and !empty($_POST['Year_of_passing_grad'])  and !empty($_POST['Board_name_grad']) and !empty($_POST['mode_grad']) and !empty($_POST['medium_of_instruction_grad']) and !empty($_POST['Percentage_grad']))
          { 
              $query="INSERT INTO users(post,urname,fathername,spousename,category,correspondenceaddress,contactno,alternativecontactno,email,permanentaddress,dateofbirth,dateofmarriage,national_journal,international_journal,national_conference,international_conference,teachingexperience ,corporateexperience) "; 
              $query .="VALUES('$post','$name','$father_name','$spouse_name','$cast','$corresponding_address',' $contact','$alt_contact_no','$email','$permanent_address','$date_of_birth',' $married','$njournal','$injournal','$nconference','$inconference','$teaching_exp','$corporate_exp')";
              $result=mysqli_query($connection,$query);
              if(!$result){
              die("query failed". mysqli_error($connection));
              }
    
              $query1="SELECT * FROM users WHERE email='$email'";
              $result1=mysqli_query($connection,$query1);
              $row=mysqli_fetch_assoc($result1);
                $userid=$row['userid'];
    
      
              $query10="INSERT INTO 10th_qualification(user_fk,nameofcollege,educationalboard,mode,yearofpassing,mediumofinstruction,percentageofmarks) "; 
              $query10 .="VALUES('$userid','$college10','$board10','$mode10','$yearofpassing10','$medofins10',' $marks10')";
              $result10=mysqli_query($connection,$query10);
              if(!$result10){
              die("query failed". mysqli_error($connection));
              }
      

      
          
              $query12="INSERT INTO 12th_qualification(user_fk,nameofcollege,educationalboard,mode,yearofpassing,mediumofinstruction,percentageofmarks) "; 
              $query12 .="VALUES('$userid','$college12','$board12','$mode12','$yearofpassing12','$medofins12',' $marks12')";
              $result12=mysqli_query($connection,$query12);
              if(!$result12){
              die("query failed". mysqli_error($connection));
              }
      
      
      
    
              $query_grad="INSERT INTO grad_qualification(user_fk,nameofcollege,educationalboard,mode,yearofpassing,mediumofinstruction,percentageofmarks) "; 
              $query_grad .="VALUES('$userid','$college_grad','$board_grad','$mode_grad','$yearofpassing_grad','$medofins_grad',' $marks_grad')";
              $result_grad=mysqli_query($connection,$query_grad);
              if(!$result_grad){
              die("query failed". mysqli_error($connection));
              }
    
    
              if(!empty($_POST['college_name_postgrad']) and !empty($_POST['Year_of_passing_postgrad'])  and !empty($_POST['Board_name_postgrad']) and !empty($_POST['mode_postgrad']) and !empty($_POST['medium_of_instruction_postgrad']) and !empty($_POST['Percentage_postgrad']))
                  {
                        $query_postgrad="INSERT INTO postgrad_qualification(user_fk,nameofcollege,educationalboard,mode,yearofpassing,mediumofinstruction,percentageofmarks) "; 
                        $query_postgrad .="VALUES('$userid','$college_postgrad','$board_postgrad','$mode_postgrad','$yearofpassing_postgrad','$medofins_postgrad',' $marks_postgrad')";
                        $result_postgrad=mysqli_query($connection,$query_postgrad);
                        if(!$result_postgrad){
                        die("query failed". mysqli_error($connection));
                        }
              }
                if(!empty($_POST['college_name_phd']) and !empty($_POST['Year_of_passing_phd'])  and !empty($_POST['Board_name_phd']) and !empty($_POST['mode_phd']) and !empty($_POST['medium_of_instruction_phd']) and !empty($_POST['Percentage_phd']))
                {  
                    $query_phd="INSERT INTO phd_qualification(user_fk,nameofcollege,educationalboard,mode,yearofpassing,mediumofinstruction,percentageofmarks) "; 
                    $query_phd .="VALUES('$userid','$college_phd','$board_phd','$mode_phd','$yearofpassing_phd','$medofins_phd',' $marks_phd')";
                    $result_phd=mysqli_query($connection,$query_phd);
                    if(!$result_phd){
                    die("query failed". mysqli_error($connection));
                    }
              }
                  if(!empty($_POST['college_name_other']) and !empty($_POST['Year_of_passing_other'])  and !empty($_POST['Board_name_other']) and !empty($_POST['mode_other']) and !empty($_POST['medium_of_instruction_other']) and !empty($_POST['Percentage_other']))
                  {
                    $query_other="INSERT INTO other_qualification(user_fk,nameofcollege,educationalboard,mode,yearofpassing,mediumofinstruction,percentageofmarks) "; 
                    $query_other .="VALUES('$userid','$college_other','$board_other','$mode_other','$yearofpassing_other','$medofins_other',' $marks_other')";
                    $result_other=mysqli_query($connection,$query_other);
                    if(!$result_other){
                    die("query failed". mysqli_error($connection));
                    }
                }
              echo "succesful";
          }
          else{
            echo "fill all the mandatory entries";
              } 
        }
        else{
          echo "fill all the mandatory entries";
            } 
      }
      else{
        echo "fill all the mandatory entries";
          } 
    }
  else{
    echo "fill all the mandatory entries";
  } 
}

?>