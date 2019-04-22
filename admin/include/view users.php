<style>
  table,td,th{
            padding: 15px;
        }
        
/*
     
 #appadd {
    white-space: nowrap;
    overflow: hidden;
    width: 40px;
    height: 40px;
    text-overflow: ellipsis; 
}
*/

table.gridtable {
	
	font-family: tahoma;
	line-height:15px;
	font-size:0.78125vw;
	color:#333333;
	border-width: 1px;
	overflow-x: auto;
	border-color: #666666;
	border-collapse: collapse;
	margin:auto;
	
	/* width:"71.61458333333333vw"; */
}
table.gridtable th {
	
	border-style: solid;
	border-color: #666666;
	color:#FFFFFF;
	background-color: #5A94CE; /*#66CCFF*/
	font-size:0.78125vw;
/*	margin-left: auto;*/
}
table.gridtable td {
	
	border-style: solid;
	border-color: #666666;
	background-color: transparent;
	font-size:0.78125vw;
	
}


</style>

                <table  style="table-layout:fixed;" class="gridtable" >
                    <thead>
                    <tr>
                       
                         <th>Post</th>
                        <th>Name</th>
                        <th>Father's Name</th>
                        <th>Category</th>
                        <th>Gender</th>
                        <th>Contact Number</th>
                        <th>Email Id</th>
                        <th>More Details</th>
                       
                        
                        
                       
                        
                        
                        </tr>
                  </thead>
                    <tbody>
                     <?php 
                        
                        $query="SELECT * FROM users";
                        $result=mysqli_query($connection,$query);
                       if(!$result){
                           die("query failed". mysqli_error());
                       }
                        while($row=mysqli_fetch_assoc($result))                         //for viewing all the users in the database
                        {   
                           $user_id=$row['userid'];
                            $user_post=$row['post'];
                            $username=$row['urname'];
                            $user_fathername=$row['fathername'];
                            $user_category=$row['category'];
                            $user_gender=$row['gender'];
                            $user_contact=$row['contactno'];
                            $user_email=$row['email'];
                         echo"<tr>";
                          
                         echo"<td>{$user_post}</td>";
                            echo"<td>{$username}</td>";
                            echo"<td>{$user_fathername}</td>";
                            echo"<td>{$user_category}</td>";
                            echo"<td>{$user_gender}</td>";
                             echo"<td>{$user_contact}</td>";
                             echo"<td>{$user_email}</td>";
                            
    
                            echo"<td><a href='users.php?source=view_more&user_id={$user_id}'>View More</a></td>";// link for editing the details of the user
                          
                        
                            // echo"<td>";
                            //  if($_SESSION['user_id']!==$user_id )
                            //        {
                            //          echo  "<a onClick=\"javascript: return confirm('Are you sure you want to delete this user?');\" href='users.php?delete={$user_id}'>Delete</a>";// link for deletion 
                            //            }
                            //            echo"</td>";
                          
                            //  echo"</tr>";
                            
                        }
                        
                    ?>
                    </tbody>
                    </table>
        