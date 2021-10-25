<?php
session_start();
?>
<?php

$link = mysqli_connect('localhost', 'root', '', 'jk');
$email=$_POST['email'];
$password=$_POST['password'];
if(!$link){ 
die('Failed to connect to server'); 
} 
$query="select email,password,your_name from users;";
$results = mysqli_query($link,$query); 
$log=mysqli_fetch_assoc($results);

if($email)
{if($password)
	{while ($row = mysqli_fetch_assoc($results))
{
if($row['email']==$email && $row['password']==$password)
{$_SESSION['status']="You are logged in";
            $_SESSION['status_code']="success";
		 
		$_SESSION['IS_AUTHENTICATED'] = 1; 
		$_SESSION['USER_EMAIL'] = $email;
		$_SESSION['USER_NAME'] = $row['your_name'];
		include "main.php";
 goto chance;
			
		}
	
}
$_SESSION['status']="Invalid Credentials";
            $_SESSION['status_code']="error";
	include "main.php";
	chance:
	
}
else
	{$_SESSION['status']="Please Enter Password";
            $_SESSION['status_code']="error";
	include "main.php";
}
}
else
{$_SESSION['status']="Please Enter Email";
            $_SESSION['status_code']="error";
			include "main.php";
	
	
} 
include "script_log.php";


		
?>

		
		