<?php
$link = mysqli_connect('localhost', 'root', '', 'jk');
$email=$_POST['email'];
$password=$_POST['password'];
if(!$link){ 
die('Failed to connect to server'); 
} 
$query="select email,password from users where email='$email' and password='$password'";
$results = mysqli_query($link, $query); 
if($email)
{
    if($password)
	{
if($results == FALSE) 
{
echo '<script type="text/javascript">
          window.onload = function () { alert("Incorrect password!!"); }
</script>';
include 'main.html';
}
else {
	echo'<script type="text/javascript">
          window.onload = function () { alert("Thank you for login up"); }
</script>';
include 'main.html';
} 
	}

else{
	echo'<script type="text/javascript">
          window.onload = function () { alert("please enter password"); }
</script>';
	include 'main.html';
}
}