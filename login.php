<?php
$link = mysqli_connect('localhost', 'root', '', 'jk');
$email=$_POST['email'];
$password=$_POST['password'];
if(!$link){ 
die('Failed to connect to server'); 
} 
$query="select email,password from users where email='$email' and password='$password'";
$results = mysqli_query($link, $query); 
$log=mysqli_fetch_array($results);
if($email== $log['email'] && $password == $log['password']){ 
	//$count = mysql_num_rows($result);
	$count = 1; 
	} 
	else{ 
	//Login failed 
	include('main.html'); 
	echo '<script type="text/javascript">
	window.onload = function () { alert("Incorrect password!!"); 
</script>'; 
	exit(); 
	} 
	if( $count == 1){ 
		//Login successful set session variables and redirect to main page.
		echo'<script type="text/javascript">
           window.onload = function () { alert("Thank you for login up"); 
 </script>';
include 'main.html'; 
		session_start(); 
		$_SESSION['IS_AUTHENTICATED'] = 1; 
		$_SESSION['USER_ID'] = $login; 
		header('location:main.html'); 
		} 
		else{ 
		//Login failed 
		include('main.html'); 
		echo '<script type="text/javascript">
           window.onload = function () { alert("Incorrect password!!"); 
 </script>';
include 'main.html'; 
		exit(); 
		} 
		
		
// if($email)
// {
//     if($password)
// 	{
// if($results == FALSE) 
// {
// echo '<script type="text/javascript">
//           window.onload = function () { alert("Incorrect password!!"); }
// </script>';
// include 'main.html';
// }
// else {
// 	echo'<script type="text/javascript">
//           window.onload = function () { alert("Thank you for login up"); }
// </script>';
// include 'main.html';
// } 
// 	}

// else{
// 	echo'<script type="text/javascript">
//           window.onload = function () { alert("please enter password"); }
// </script>';
// 	include 'main.html';
// }
// }
