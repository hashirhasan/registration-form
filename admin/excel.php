<?php include'../connect.php';
$output = '';
if(isset($_POST['submit'])) {
  header('content-type:application/xls');
  header('Content-disposition:attachment;filename=faculty_form.xls');
  

?>
<html xmlns:o='urn:schemas-microsoft-com:office:office'
xmlns:x='urn:schemas-microsoft-com:office:excel'
xmlns='http://www.w3.org/TR/REC-html40'>

<head>
<meta http-equiv=Content-Type content='text/html; charset=windows-1252'>
<meta name=ProgId content=Excel.Sheet>
<meta name=Generator content='Microsoft Excel 12'>
<link rel=File-List href='Book1_files/filelist.xml'>
<style id='Book1_4417_Styles'><!--table
	{mso-displayed-decimal-separator:'\.';
	mso-displayed-thousand-separator:'\,';}
.xl154417
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:general;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
.xl634417
	{padding-top:1px;
	padding-right:1px;
	padding-left:1px;
	mso-ignore:padding;
	color:black;
	font-size:11.0pt;
	font-weight:400;
	font-style:normal;
	text-decoration:none;
	font-family:Calibri, sans-serif;
	mso-font-charset:0;
	mso-number-format:General;
	text-align:center;
	vertical-align:bottom;
	mso-background-source:auto;
	mso-pattern:auto;
	white-space:nowrap;}
--></style>
</head>

<body>
<!--[if !excel]>&nbsp;&nbsp;<![endif]-->
<!--The following information was generated by Microsoft Office Excel's Publish
as Web Page wizard.-->
<!--If the same item is republished from Excel, all information between the DIV
tags will be replaced.-->
<!----------------------------->
<!--START OF OUTPUT FROM EXCEL PUBLISH AS WEB PAGE WIZARD -->
<!----------------------------->

<div id='Book1_4417' align=center x:publishsource='Excel'>

<?php
$output .= "
<table border=1 cellpadding=0 cellspacing=0 width=3833 style='border-collapse:
 collapse;table-layout:fixed;width:2882pt'>
 <col width=34 style='mso-width-source:userset;mso-width-alt:1243;width:26pt'>
 <col width=44 style='mso-width-source:userset;mso-width-alt:1609;width:33pt'>
 <col width=53 style='mso-width-source:userset;mso-width-alt:1938;width:40pt'>
 <col width=76 style='mso-width-source:userset;mso-width-alt:2779;width:57pt'>
 <col width=54 style='mso-width-source:userset;mso-width-alt:1974;width:41pt'>
 <col width=113 style='mso-width-source:userset;mso-width-alt:4132;width:85pt'>
 <col width=114 style='mso-width-source:userset;mso-width-alt:4169;width:86pt'>
 <col width=100 style='mso-width-source:userset;mso-width-alt:3657;width:75pt'>
 <col width=131 style='mso-width-source:userset;mso-width-alt:4790;width:98pt'>
 <col width=80 style='mso-width-source:userset;mso-width-alt:2925;width:60pt'>
 <col width=54 style='mso-width-source:userset;mso-width-alt:1974;width:41pt'>
 <col width=113 style='mso-width-source:userset;mso-width-alt:4132;width:85pt'>
 <col width=114 style='mso-width-source:userset;mso-width-alt:4169;width:86pt'>
 <col width=100 style='mso-width-source:userset;mso-width-alt:3657;width:75pt'>
 <col width=131 style='mso-width-source:userset;mso-width-alt:4790;width:98pt'>
 <col width=80 style='mso-width-source:userset;mso-width-alt:2925;width:60pt'>
 <col width=54 style='mso-width-source:userset;mso-width-alt:1974;width:41pt'>
 <col width=113 style='mso-width-source:userset;mso-width-alt:4132;width:85pt'>
 <col width=114 style='mso-width-source:userset;mso-width-alt:4169;width:86pt'>
 <col width=100 style='mso-width-source:userset;mso-width-alt:3657;width:75pt'>
 <col width=131 style='mso-width-source:userset;mso-width-alt:4790;width:98pt'>
 <col width=80 style='mso-width-source:userset;mso-width-alt:2925;width:60pt'>
 <col width=54 style='mso-width-source:userset;mso-width-alt:1974;width:41pt'>
 <col width=113 style='mso-width-source:userset;mso-width-alt:4132;width:85pt'>
 <col width=114 style='mso-width-source:userset;mso-width-alt:4169;width:86pt'>
 <col width=100 style='mso-width-source:userset;mso-width-alt:3657;width:75pt'>
 <col width=131 style='mso-width-source:userset;mso-width-alt:4790;width:98pt'>
 <col width=80 style='mso-width-source:userset;mso-width-alt:2925;width:60pt'>
 <col width=54 style='mso-width-source:userset;mso-width-alt:1974;width:41pt'>
 <col width=113 style='mso-width-source:userset;mso-width-alt:4132;width:85pt'>
 <col width=114 style='mso-width-source:userset;mso-width-alt:4169;width:86pt'>
 <col width=100 style='mso-width-source:userset;mso-width-alt:3657;width:75pt'>
 <col width=131 style='mso-width-source:userset;mso-width-alt:4790;width:98pt'>
 <col width=80 style='mso-width-source:userset;mso-width-alt:2925;width:60pt'>
 <col width=54 style='mso-width-source:userset;mso-width-alt:1974;width:41pt'>
 <col width=113 style='mso-width-source:userset;mso-width-alt:4132;width:85pt'>
 <col width=114 style='mso-width-source:userset;mso-width-alt:4169;width:86pt'>
 <col width=100 style='mso-width-source:userset;mso-width-alt:3657;width:75pt'>
 <col width=131 style='mso-width-source:userset;mso-width-alt:4790;width:98pt'>
 <col width=80 style='mso-width-source:userset;mso-width-alt:2925;width:60pt'>
 <col width=74 style='width:56pt'>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl154417 width=34 style='height:15.0pt;width:26pt'></td>
  <td class=xl154417 width=44 style='width:33pt'></td>
  <td class=xl154417 width=53 style='width:40pt'></td>
  <td class=xl154417 width=76 style='width:57pt'></td>
  <td colspan=37 class=xl634417 width=3626 style='width:2726pt'>Qualification</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl154417 style='height:15.0pt'></td>
  <td class=xl154417></td>
  <td class=xl154417></td>
  <td class=xl154417></td>
  <td colspan=6 class=xl634417>X</td>
  <td colspan=6 class=xl634417>XII</td>
  <td colspan=6 class=xl634417>Graduation</td>
  <td colspan=6 class=xl634417>Post Graduation</td>
  <td colspan=6 class=xl634417>Phd</td>
  <td colspan=7 class=xl634417>Others</td>
 </tr>
 <tr height=20 style='height:15.0pt'>
  <td height=20 class=xl154417 style='height:15.0pt'>Post</td>
  <td class=xl154417>Name</td>
  <td class=xl154417>Gender</td>
  <td class=xl154417>Mobile No.</td>
  <td class=xl154417>College</td>
  <td class=xl154417>Board/University</td>
  <td class=xl154417>Regular/Distance</td>
  <td class=xl154417>Year of passing</td>
  <td class=xl154417>Instruction Medium</td>
  <td class=xl154417><span style='mso-spacerun:yes'> </span>Percentage</td>
  <td class=xl154417>College</td>
  <td class=xl154417>Board/University</td>
  <td class=xl154417>Regular/Distance</td>
  <td class=xl154417>Year of passing</td>
  <td class=xl154417>Instruction Medium</td>
  <td class=xl154417><span style='mso-spacerun:yes'> </span>Percentage</td>
  <td class=xl154417>College</td>
  <td class=xl154417>Board/University</td>
  <td class=xl154417>Regular/Distance</td>
  <td class=xl154417>Year of passing</td>
  <td class=xl154417>Instruction Medium</td>
  <td class=xl154417><span style='mso-spacerun:yes'> </span>Percentage</td>
  <td class=xl154417>College</td>
  <td class=xl154417>Board/University</td>
  <td class=xl154417>Regular/Distance</td>
  <td class=xl154417>Year of passing</td>
  <td class=xl154417>Instruction Medium</td>
  <td class=xl154417><span style='mso-spacerun:yes'> </span>Percentage</td>
  <td class=xl154417>College</td>
  <td class=xl154417>Board/University</td>
  <td class=xl154417>Regular/Distance</td>
  <td class=xl154417>Year of passing</td>
  <td class=xl154417>Instruction Medium</td>
  <td class=xl154417><span style='mso-spacerun:yes'> </span>Percentage</td>
  <td class=xl154417>College</td>
  <td class=xl154417>Board/University</td>
  <td class=xl154417>Regular/Distance</td>
  <td class=xl154417>Year of passing</td>
  <td class=xl154417>Instruction Medium</td>
  <td class=xl154417><span style='mso-spacerun:yes'> </span>Percentage</td>
  <td class=xl154417></td>
 </tr>";
echo $output;
 $query="SELECT * FROM users ";
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
		if( mysqli_num_rows($result_postgrad)>0)
	  {
	 
    while($row_postgrad=mysqli_fetch_assoc($result_postgrad))                // used for showing the details of the users
    {    
		
   $userid_postgrad=$row_postgrad['user_fk'];
   $college_postgrad=$row_postgrad['nameofcollege'];
   $board_postgrad=$row_postgrad['educationalboard'];
   $mode_postgrad=$row_postgrad['mode'];
   $yearofpassing_postgrad=$row_postgrad['yearofpassing'];
   $medofins_postgrad=$row_postgrad['mediumofinstruction'];
   $marks_postgrad=$row_postgrad['percentageofmarks'];
    }

	  }
		
	  
	$query_phd="SELECT * FROM phd_qualification WHERE user_fk=$userid ";
   $result_phd=mysqli_query($connection,$query_phd);
   if(!$result_phd){
       die("query failed". mysqli_error($connection));
   }
	 
	  	if( mysqli_num_rows($result_phd)>0)
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
	 
	 	if( mysqli_num_rows($result_other)>0)
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

echo"<tr height=19 style='height:14.4pt'>";
  echo"<td height=19 class=xl1521831 style='height:14.4pt'>$post</td>";
  echo"<td class=xl1521831>$name</td>";
  echo"<td class=xl1521831>$gender</td>";
  echo"<td class=xl1521831>$contact</td>";
  echo"<td class=xl1521831>$college10</td>";
  echo"<td class=xl1521831>$board10</td>";
  echo"<td class=xl1521831>$mode10</td>";
  echo"<td class=xl1521831>$yearofpassing10</td>";
  echo"<td class=xl1521831>$medofins10</td>";
  echo"<td class=xl1521831>$marks10</td>";
  echo"<td class=xl1521831>$college12</td>";
  echo"<td class=xl1521831>$board12</td>";
  echo"<td class=xl1521831>$mode12</td>";
  echo"<td class=xl1521831>$yearofpassing12</td>";
  echo"<td class=xl1521831>$medofins12</td>";
  echo"<td class=xl1521831>$marks12</td>";
  echo"<td class=xl1521831>$college_grad</td>";
  echo"<td class=xl1521831>$board_grad</td>";
  echo"<td class=xl1521831>$mode_grad</td>";
  echo"<td class=xl1521831>$yearofpassing_grad</td>";
  echo"<td class=xl1521831>$medofins_grad</td>";
  echo"<td class=xl1521831>$marks_grad</td>";
  if (isset($college_postgrad)){ echo"<td class=xl1521831>$college_postgrad</td>";}
  if (isset($board_postgrad)){ echo"<td class=xl1521831>$board_postgrad</td>";}
  if (isset($mode_postgrad)){ echo"<td class=xl1521831>$mode_postgrad</td>";}
  if (isset($yearofpassing_postgrad)){ echo"<td class=xl1521831>$yearofpassing_postgrad</td>";}
  if (isset($medofins_postgrad)){ echo"<td class=xl1521831>$medofins_postgrad</td>";}
  if (isset($marks_postgrad)){echo"<td class=xl1521831>$marks_postgrad</td>";}
  if (isset($college_phd)){ echo"<td class=xl1521831>$college_phd</td>";}
  if (isset($board_phd)){echo"<td class=xl1521831>$board_phd</td>";}
  if (isset($mode_phd)){echo"<td class=xl1521831>$mode_phd</td>";}
  if (isset($yearofpassing_phd)){echo"<td class=xl1521831>$yearofpassing_phd</td>";}
  if (isset($medofins_phd)){echo"<td class=xl1521831>$medofins_phd</td>";}
  if (isset($marks_phd)){echo"<td class=xl1521831>$marks_phd</td>";}
  if (isset($college_other)){echo"<td class=xl1521831>$college_other}</td>";}
  if (isset($board_other)){echo"<td class=xl1521831>$board_other</td>";}
  if (isset($mode_other)){echo"<td class=xl1521831>$mode_other</td>";}
  if (isset($yearofpassing_other)){echo"<td class=xl1521831>$yearofpassing_other</td>";}
  if (isset($medofins_other)){echo"<td class=xl1521831>$medofins_other</td>";}
  if (isset($marks_other)){echo"<td class=xl1521831>$marks_other</td>";}
  echo"<td class=xl1521831></td>";
 echo"</tr>";
 

	}
	 echo"<![endif]>";
echo"</table>";
 ;	
?>

</div>



</body>

</html>
<?php

}
?>