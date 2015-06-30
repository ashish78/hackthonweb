<?php
session_start();
//error variables..................
$err_empty_compulsory_field=0;
$err_special_char=0;
$err_invalid_email_format=0;
$err_password_doesnt_match=0;
$err_password_length=0;
$err_phno_code=0;
$err_accept_agreement=0;
$err_email_already_exist=0;
$err_phno_already_exist=0;
//.................................

$user_id=$_POST['user_id'];
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$conpassword=$_POST['conpassword'];
$login_flag=$_POST['login_flag'];






	
//....................................validation ends...............
//DATABASE CONNECTION.....................

include 'dbcon.php';


//Retrieval of username and password from database...........
	
	if(mysqli_query($con,"INSERT INTO registers(user_id, name, email, password, conpassword ,login_flag) VALUES ('$user_id', '$name','$email','$password','$conpassword','$login_flag')"))
	{
		echo "Registration Successfull";
	}
	else
	{
		echo "Error: " . mysqli_error($con);
	}
?>