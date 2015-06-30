<?php
session_start();
$email=$_POST['email'];
$pass=$_POST['password'];
$pass_len=strlen($pass);
$err_empty_compulsory_field_login=0;
$err_invalid_email_format_login=0;
$err_password_length_login=0;
$_SESSION['login-flag']=0;
include 'dbcon.php';

if(empty($email) || empty($pass))
{
	$err_empty_compulsory_field_login=1;
}
if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
{
	$err_invalid_email_format_login=1;
}
if($pass_len<8)
{
	$err_password_length_login=1;
}
if($err_empty_compulsory_field_login==0 && $err_invalid_email_format_login==0 && $err_password_length_login==0)
{
$result=mysqli_query($con,"SELECT * FROM login");
}
?>