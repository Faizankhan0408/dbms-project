<?php

 session_start();
$link = mysqli_connect('localhost', 'root', '', 'jk');
$your_name=$_POST['your_name'];
$username=$_POST['username'];
$email=$_POST['email'];
$password=$_POST['password'];
if(!$link){ 
die('Failed to connect to server'); 
} 
$query="INSERT INTO users (your_name,username,email,password) Values ('$your_name','$username','$email','$password')";
$results = mysqli_query($link, $query); 
if($your_name)
{if($password)
	{
if($results == FALSE) 
{
$_SESSION['status']="Email or Username taken or not filled";
            $_SESSION['status_code']="error";
			include "main.php";
}
else {
	$_SESSION['status']="You are signed up";
            $_SESSION['status_code']="success";
			include "main.php";

} 
	}

else{
	$_SESSION['status']="Please Enter Password";
            $_SESSION['status_code']="error";
			include "main.php";
}
}


else
{$_SESSION['status']="Please fill your name";
            $_SESSION['status_code']="error";
			include "main.php";
}
include "script_log.php";
?> 
