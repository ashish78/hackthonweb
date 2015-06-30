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

$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$place=$_POST['place'];
$pics=$_POST['pics'];
$no_of_votes=$_POST['no_of_votes'];






	
//....................................validation ends...............
//DATABASE CONNECTION.....................

include 'dbcon.php';


//Retrieval of username and password from database...........
	
	if(mysqli_query($con,"INSERT INTO places(name, email, phone, place ,pics, no_of_votes) VALUES ('$name', '$email','$phone','$place','$pics','$no_of_votes')"))
	{
		echo "Registration Successfull";
	}
	else
	{
		echo "Error: " . mysqli_error($con);
	}
?>