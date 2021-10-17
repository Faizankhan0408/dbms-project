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
	include "main.php";
	include "script_log.php";
$qry="select 	* FROM bidding WHERE BiddingId='$BiddingId'";
$result = mysqli_query($link,$qry); 
/*while ($row = mysqli_fetch_assoc($result))
	{		
		  
   $to = "pronoob05q@gmail.com";//change receiver address  
   $subject = "You have been hired at JOB KARLO";  
   $message = "You have been hired at JOB KARLO for project of Mr.".$row['HirerName']." <br> Details: <br> Amount:".$row['Amount']."<br> Final Date:".$row['FinalDate']; 
   $header = "From:rajatgoyal376@gmail.com";  
  
   $results1 = mail ($to,$subject,$message,$header);  
  
   if( $results1 == true ){  
      echo "Message sent successfully...";  
   }else{  
      echo "Sorry, unable to send mail...";  
   }  
	}*/



		
?>

		
		