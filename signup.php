<?php
session_start();
?>
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

if($results == FALSE) 
{
// echo '<script type="text/javascript">
//           window.onload = function () { alert("Usename taken or email already registered or all field not filled"); }
// </script>';
$_SESSION['status']="Please Fill the form Again";
$_SESSION['status_code']="error";

include 'main.html';
}
else {
// 	echo'<script type="text/javascript">
//           window.onload = function () { alert("Thank you for signing up"); }
// </script>';
$_SESSION['status']="Registred Successfully !!";
$_SESSION['status_code']="success";
include 'main.html';
} 
?> 
<?php
include 'script_sign.php';
?>
