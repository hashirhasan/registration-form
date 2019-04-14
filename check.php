<?php
require('connect.php');
if($_SERVER['REQUEST_METHOD'] == 'POST')
	{

		$response['status'] = 1;
		if($_POST['field'] == 'contact')
		{
			$contact = $_POST['contact'];
			$stmt = "SELECT contactno FROM `users` WHERE contactno =$contact";
            $contactcount=mysqli_query($connection,$stmt);
             $row=mysqli_fetch_assoc($contactcount);
			if($row > 0)
			{
				$response['status'] = 0;
			}
			else
			{
				$response['status'] = 1;
			}
			// echo json_encode($response);
        }
        else if($_POST['field'] == 'email')
		{
			$email = $_POST['email'];
			$stmt = "SELECT email FROM `users` WHERE email ='$email'";
            $emailcount=mysqli_query($connection,$stmt);
            $row=mysqli_fetch_assoc($emailcount);
			if($row > 0)
			{
				$response['status'] = 0;
			}
			else
			{
				$response['status'] = 1;
			}
			// echo json_encode($response);
        }
    }

    echo json_encode($response);

    ?>