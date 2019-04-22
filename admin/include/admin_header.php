 <?php include"../connect.php" ?>     <!--for making connection with database -->
<?php ob_start(); ?>
<?php session_start(); ?>                           <!-- //starting the session  --->
<?php 
if(isset($_SESSION['user_role']))
{
 if($_SESSION['user_role']!=='admin')
   header("Location:./login.php");
    
}
else if(!isset($_SESSION['user_role']))
{
    header("Location:./login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>index</title>
     
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
 
	<style>
          *{
                padding:0;
                margin:0;
              box-sizing: border-box;
            }
            body {
            background:white;
            font-family: arial;
            padding: 10px;
            }
		.navbar ul{
            list-style: none ;
		}
      ul li {
      	 background-color:#f1f1f1;;
      	width:10.7vw;
      	float: left;
      	padding: 0.625vw;
        text-align: center; 
          
     
      }
        ul li ul{
            position: absolute;
            display: none;
            margin-left:-10px;
            margin-top:9.99px; 
        }
        ul li:hover >ul{
            display: block;
            
        }
        ul li a:hover{
            color:#DA4167;
        }
      
         ul li a{
       text-decoration: none;
       color:black;
       display: block;
             text-transform: uppercase;
			 font-size:  1.0416666666666667vw;
      }
   .admin{
    
     
       padding: 50px 50px 0px 50px;
	   background: #f1f1f1;
	   border-radius: 3%;
/*	   margin-top: 80px;*/
           
        } 
 
        
        
    .row::after {
    content: "";
    clear: both;
    display: table;
    }

    [class*="col-"] {
    float: left;
    padding: 30px;
    }
    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}
    

        
    table, th,td {
        border: 1px solid black;
         border-collapse: collapse;
      
    }
    th, td {
        padding: 15px;
      
        }
        
        table th {
	border-width: 1px;
	border-style: solid;
	border-color: #666666;
	color:#FFFFFF;
	background-color: #5A94CE; /*#66CCFF*/
	
}

        
        .form{
            padding:10px;
            width:500px;
        }
        
.para{
 
    background-color: white;
    margin:5% 50px 0px 50px;
  
}

        
           /* text-transform: capitalize; */

	</style>
</head>
<body>
    
 
  
          
     
		
		
		 <div class="navbar" style="padding:30px 0px 10px 20px;">
    <ul>
		 <li style="margin-left:15vw; padding: 0.8vw;"><a href="./index.php">Home</a></li>
		<li style="margin-left:19vw;"><a href="users.php">View All Registrations<i class="fas fa-paste"></i></a></li>
		<li style="margin-left:17.125vw;"> <a href="logout.php">LOGOUT<i style="margin-left:10px"class="fas fa-lock"></i></a></li>
            
     
          <!-- <li style="margin-left:28.125vw;"> <a href="index.php"><?php  ?> <i class="fas fa-unlock-alt"></i> <i style=" margin-left:10px;"class="fas fa-caret-down"></i></a>
              <ul>
                <li><a href="include/logout.php">Logout <i class="fas fa-lock"></i></a></li>
               </ul>
        </li> -->
    </ul>
    </div>
     
    <div class="para">
     <div class="admin" >
 
   <h1 style="text-align:center;font-size:2.0833333333333335vw;">WELCOME TO ADMIN <small  style="text-transform: capitalize;color:red;"> </small></h1><br>
            <hr style="width:43.75vw;background-color:blue; position:relative; margin:auto;">
             <br>
       