<?php
require('conn.php');
if(isset($_POST['register-btn']))
{
	$user_first_name=mysqli_real_escape_string($conn,$_POST['user_first_name']);
	$user_last_name=mysqli_real_escape_string($conn,$_POST['user_last_name']);
	$user_email=mysqli_real_escape_string($conn,$_POST['user_email']);
	$user_password=mysqli_real_escape_string($conn,$_POST['user_password']);

	$hashpass=password_hash($user_password, PASSWORD_BCRYPT);
	$token= bin2hex(random_bytes(13));

	$checkdetails="SELECT * FROM userdetails WHERE username='$user_email'";
	$sql=mysqli_query($conn,$checkdetails);
	$usercount=mysqli_num_rows($sql);
	if($usercount>0)
	{
		echo "You are already users please login";
	}
	else
	{
		$insert="INSERT INTO userdetails(firstname,lastname,username,userpassword,activetoken,userstatus) VALUES('$user_first_name','$user_last_name','$user_email','$hashpass','$token','inactive')";
		$query=mysqli_query($conn,$insert);


		if($query)
		{
			$subject="Email Activation Token";
			$body="Hi please activate your account http://localhost/woodpick/activate.php?token=$token";
			$headers="From: shyamsharma0215@gmail.com";

			if(mail($user_email, $subject, $body, $headers))
			{
				$_SESSION['msg']="check the your email please activate your account";
				header('location:login.php');
			}
			else
			{
				echo "Something went wrong please try again some time";
			}
		}	
	}

	
	
}
?>