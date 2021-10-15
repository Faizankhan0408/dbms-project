<?php
session_start();
?>
<?php


if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
{$link = mysqli_connect('localhost', 'root', '', 'jk');
if(!$link){ 
die('Failed to connect to server'); 
} 
if($_SESSION['HiredId'] == $_SESSION['USER_EMAIL'])
{$_SESSION['status']="Can't Bid on Your own Project";
            $_SESSION['status_code']="error";
	include"main.html";

}
else
{$BidData=$_POST['BidData'];
$Date=$_POST['Date'];
$Amount=$_POST['Amount'];
$HirerId=$_SESSION['HIRER_ID'];
$HirerName=$_SESSION['HirerName'];
$BidderName=$_SESSION['USER_NAME'];
$BidderId=$_SESSION['USER_EMAIL'];
$ProjectId=$_SESSION['ProjectId'];
$query="INSERT INTO bidding(HirerId	,HirerName,	BidderName,	BidderId,	BidData,	Amount,	FinalDate,	ProjectId) VALUES ('$HirerId','$HirerName','$BidderName','$BidderId','$BidData','$Amount','$Date','$ProjectId')";
$results = mysqli_query($link,$query); 

	$_SESSION['status']="Your Bid is Successful";
            $_SESSION['status_code']="success";
			include "main.html";
}
}
else
{$_SESSION['status']="Please Login to Bid";
            $_SESSION['status_code']="error";
	include"main.html";
}
	include"script_log.php";	
?>