<?php
session_start();
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
{$link = mysqli_connect('localhost', 'root', '', 'jk');
if(!$link){ 
die('Failed to connect to server'); 
} 

if(isset($_POST['ProjectName']))
{
$ProjectName=$_POST['ProjectName'];
$ProjectDescription=$_POST['ProjectDescription'];
$email=$_SESSION['USER_EMAIL'];
$name=$_SESSION['USER_NAME'];
if(isset($_POST['LogoDesign']))
$LogoDesign=1;
else
$LogoDesign=0;
if(isset($_POST['Photoshop']))
$Photoshop=1;
else
$Photoshop=0;
if(isset($_POST['AddsDesign']))
$AddsDesign=1;
else
$AddsDesign=0;
if(isset($_POST['SocialMediaDesign']))
$SocialMediaDesign=1;
else
$SocialMediaDesign=0;
if(isset($_POST['LogoAnimation']))
$LogoAnimation=1;
else
$LogoAnimation=0;
if(isset($_POST['VideoEditing']))
$VideoEditing=1;
else
$VideoEditing=0;
if(isset($_POST['AnimatedGIF']))
$AnimatedGIF=1;
else
$AnimatedGIF=0;
if(isset($_POST['ContentWriting']))
$ContentWriting=1;
else
$ContentWriting=0;
if(isset($_POST['Translation']))
$Translation=1;
else
$Translation=0;
if(isset($_POST['WebDevelopment']))
$WebDevelopment=1;
else
$WebDevelopment=0;
if(isset($_POST['GameDevelopment']))
$GameDevelopment=1;
else
$GameDevelopment=0;
if(isset($_POST['Wordpress']))
$Wordpress=1;
else
$Wordpress=0;
if(isset($_POST['AppDevelopment']))
$AppDevelopment=1;
else
$AppDevelopment=0;
if(isset($_POST['Voiceover']))
$Voiceover=1;
else
$Voiceover=0;
if(isset($_POST['Remix_Mashup']))
$Remix_Mashup=1;
else
$Remix_Mashup=0;
if(isset($_POST['SocialMediaMarketing']))
$SocialMediaMarketing=1;
else
$SocialMediaMarketing=0;
if(isset($_POST['Sales_Marketing']))
$Sales_Marketing=1;
else
$Sales_Marketing=0;
}
else
{ echo'<script type="text/javascript">
           window.onload = function () { alert("please enter project name");} 
 </script>';
 
	include "main.html";
	
}


$query="INSERT INTO project (ProjectName ,ProjectDescription,HirerId ,HirerName ,LogoDesign ,
Photoshop ,AddsDesign ,SocialMediaDesign ,LogoAnimation ,VideoEditing ,AnimatedGIF ,ContentWriting ,Translation ,
WebDevelopment ,GameDevelopment ,Wordpress ,AppDevelopment,Voiceover ,Remix_Mashup,SocialMediaMarketing,Sales_Marketing ) 
VALUES ('$ProjectName','$ProjectDescription','$email','$name','$LogoDesign','$Photoshop','$AddsDesign','$SocialMediaDesign','$LogoAnimation','$VideoEditing',
'$AnimatedGIF','$ContentWriting','$Translation','$WebDevelopment','$GameDevelopment',
'$Wordpress','$AppDevelopment','$Voiceover','$Remix_Mashup','$SocialMediaMarketing','$Sales_Marketing')";
$results = mysqli_query($link, $query);

	echo'<script type="text/javascript">
           window.onload = function () { alert("Project has been uploaded");} 
 </script>';
 
	include "main.html";

}	
else
	{echo'<script type="text/javascript">
           window.onload = function () { alert("Please login in to post");} 
 </script>';
 
	include "main.html";
}