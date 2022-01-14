<?php
require('conn.php');

// Get the Login User Details--------------------
if(isset($_POST['login-btn']))
{
	$useremail=$_POST['user'];
	$userpassword=$_POST['pass'];

	$user_serach="SELECT * FROM userdetails WHERE username='$useremail'";
	$query=mysqli_query($conn,$user_serach);

	$email_count=mysqli_num_rows($query);
	if($email_count)
	{
		$email_pass=mysqli_fetch_assoc($query);

		$user_pass=$email_pass['userpassword'];
		$_SESSION['name']=$email_pass['firstname'];

		$pass_decode=password_verify($userpassword, $user_pass);

		if($pass_decode)
		{
			echo "Login Success";
			header('location:admin.php');
		}
		else
		{
			echo "Passowrd incorrect";
		}
	}
	else
	{
		echo "invalid username";
	}
}
?>