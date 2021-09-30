<?php
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
echo '<script type="text/javascript">

          window.onload = function () { alert("Usename taken or email already registered or all field not filled"); }

</script>';
include 'main.html';
}
else {
	echo'<script type="text/javascript">

          window.onload = function () { alert("Thank you for signing up"); }

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


else
{echo'<script type="text/javascript">

          window.onload = function () { alert("please fill your name"); }

</script>';
	include 'main.html';
}

?> 
