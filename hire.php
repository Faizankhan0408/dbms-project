<?php
session_start();
?>
<?php

$link = mysqli_connect('localhost', 'root', '', 'jk');
$BiddingId=$_POST['BiddingId'];
if(!$link){ 
die('Failed to connect to server'); 
} 
$query="UPDATE bidding SET HireStatus=1 WHERE BiddingId='$BiddingId'";
$results = mysqli_query($link,$query); 
$_SESSION['status']="Bidder Has been Hired!";
            $_SESSION['status_code']="success";
	include "main.html";
	include "script_log.php";
$query="select 	* FROM bidding WHERE BiddingId='$BiddingId'";
$results = mysqli_query($link,$query); 
while ($row = mysqli_fetch_assoc($results))
	{
		mail($row['BidderId'],"Hiring for a project at job karlo","Mr ".$row['BidderName']."you have been Hired for the Project of Mr".$row['HirerName']." at Job Karlo <br> Project Details <br> Amount:".row['Amount']."<br> Final Date:".$row['FinalDate']);
	}



		
?>

		
		