<?php
$link = mysqli_connect('localhost', 'root', '', 'jk');
$email=$_POST['email'];
$password=$_POST['password'];
if(!$link){ 
die('Failed to connect to server'); 
} 
$query="select email,password from users;";
$results = mysqli_query($link,$query); 
$log=mysqli_fetch_assoc($results);

if($email)
{if($password)
	{while ($row = mysqli_fetch_assoc($results))
{
if($row['email']==$email && $row['password']==$password)
{echo'<script type="text/javascript">
           window.onload = function () { alert("You are logged in"); }
 </script>';
 session_start(); 
		$_SESSION['IS_AUTHENTICATED'] = 1; 
		$_SESSION['USER_EMAIL'] = $email;
		include "main.html";
 goto chance;
			
		}
	
}
echo'<script type="text/javascript">
           window.onload = function () { alert("incorrect credentials"); }
 </script>';
	include "main.html";
	chance:
	
}
else
	{echo'<script type="text/javascript">
           window.onload = function () { alert("Please enter password"); }
 </script>';
	include "main.html";
}
}
else
{echo'<script type="text/javascript">
           window.onload = function () { alert("Please enter email");} 
 </script>';
 
	include "main.html";
}

