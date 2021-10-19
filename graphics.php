<?php
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="frontpage.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/bb6de713fe.js" crossorigin="anonymous"></script>

    <title>Job Karlo</title>
	
  </head>
  <body>
   <div class="container-fluid sticky-top" style="">
  <div class="row">
  <nav class="navbar navbar-expand-lg navbar-light bg-light " style="" >
  <div class="container">
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <img src="/JK-1.png" width=60 height=45 style=""/>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	</br>
	<form class="d-flex" action="../search_engine.php" method="post">
        <input class="form-control me-2" type="search" style="" placeholder="Search" aria-label="Search" id="search" name="search">
        <button class="btn btn-outline-success" type="submit" style="">Search</button>
      </form>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" style="padding-right:200px" href="../howitworks.php" >How it Works</a>
        </li>
		 <li class="nav-item">
          <a class="nav-link fas fa-home" aria-current="page" style="font-size:30px;color:red" href="../main.php" ></a>
        </li>
		</ul> 
    </div>
		<?php 
	
	if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1)
	{
	?>
	 <a class="nav-link" href="../logout.php">Log Out</a>
	<?php 
	}
	else
	{
	?>
	 <a class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</a>
	<?php
	}
	?>
	
	
	 <button class="navbar-brand btn btn-outline-success" style="border-radius:20px;" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</button>
	
  </div>
</nav>
 </div>
<div class="row" style="">
<nav class="navbar-expand-lg navbar-light   col-lg-12 " style="background-color:rgb(22,30,44);">
<div class="container">
  
    
   
    <div class="collapse navbar-collapse" id="navbarSupportedContent" >
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        <li class="nav-item dropdown">
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" style="color:red;padding:20px;background-color:rgb(255,242,0);">
            Graphics & Design
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
           <li><a class="dropdown-item" href="../graphics.php/#LogoDesign"  style="">Logo Design</a></li>
            <li><a class="dropdown-item" href="../graphics.php/#Photoshop"  style="">Photoshop</a></li>
            <li><a class="dropdown-item" href="../graphics.php/#AddsDesign" style="">Adds Design</a></li>
			<li><a class="dropdown-item" href="../graphics.php/#SocialMediaDesign" style="">Social Media Design</a></li>
          </ul>
        </li>
		
        <li class="nav-item dropdown">
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" style="color:white;padding:20px">
            Video & Animation
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
             <li><a class="dropdown-item" href="../video.php/#LogoAnimation">Logo Animation</a></li>
            <li><a class="dropdown-item" href="../video.php/#VideoEditing">Video Editing</a></li>
            <li><a class="dropdown-item" href="../video.php/#AnimatedGIF">Animated GIF's</a></li>
          </ul>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" style="color:white;padding:20px">
            Writing & Translation
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../writing.php/#ContentWriting">Content Writing</a></li>
            <li><a class="dropdown-item" href="../writing.php/#Translation">Translation</a></li>
           
          </ul>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" style="color:white;padding:20px">
            Tech & Programming
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../tech.php/#WebDevelopment">Web Development</a></li>
            <li><a class="dropdown-item" href="../tech.php/#GameDevelopment">Game Development</a></li>
            <li><a class="dropdown-item" href="../tech.php/#WordPress">Wordpress</a></li>
			<li><a class="dropdown-item" href="../tech.php/#AppDevelopment">App Development</a></li>
          </ul>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" style="color:white;padding:20px">
            Music & Audio
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
             <li><a class="dropdown-item" href="../music.php/#Voiceover">Voice Over</a></li>
            <li><a class="dropdown-item" href="../music.php/#Remix_Mashup">Remix & Mashup</a></li>
            
          </ul>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" style="color:white;padding:20px">
            Bussiness & Marketing
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="../bussiness.php/#SocialMediaMarketing">Social Media Marketing</a></li>
            <li><a class="dropdown-item" href="../bussiness.php/#Sales_Marketing">Sales & Marketing</a></li>
           
          </ul>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
</div>
</div>
  
   <!-- login  Modal -->
<div class="modal fade" id="loginModal" style="margin-top:100px" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="loginModalLabel">Login</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="../login.php" method ="post">
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password">
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Remember it</label>
          </div>
          <button type="submit" class="btn btn-success">Login</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>





<!-- SIgn up Modal -->
<div class="modal fade" style="margin-top:100px" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="signupModalLabel">Register</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body" >
        <form action="../signup.php" method="post">
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="your_name" name="your_name">
          </div>
		  <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">User Name</label>
            <input type="text" class="form-control" id="username" name="username">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label" >Password</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <!-- <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Check me out</label>
          </div> -->
          <button type="submit" class="btn btn-success" data-bs-target="#signing">Register</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<div data-bs-spy="scroll" data-bs-target="" data-bs-offset="0" tabindex="0">
<!--Bidding Modal-->

<!-- PHP for LogoDesign -->
<h1 id="LogoDesign" style="text-align:center;margin-top:100px;margin-bottom:100px;font-size:8vw">Logo Design</h1>



<?php

$link=mysqli_connect('localhost','root','','jk');
if(!$link){ 
    die('Failed to connect to server'); 
    } 
$query="SELECT ProjectName,ProjectId,ProjectDescription,HirerName,HirerId from project WHERE LogoDesign=1";
$results = mysqli_query($link,$query); 
// $log=mysqli_fetch_assoc($results);
while ($row = mysqli_fetch_assoc($results))
{
	?>
	
<div class="container" style="padding:50px;padding-left:50px;padding-right:50px;"  >
	<h1 style="color:blue">
	<?php
	echo $row['ProjectName'];
	?>
	</h1>
	</br>
	<p>
	<?php
	echo $row['ProjectDescription'];
?>
</p>
</br>
<div class="row">
<div class="col-md-6">
By : 
<?php
	echo $row['HirerName'];
	
	$_SESSION['HIRER_ID']=$row['HirerId'];
	$_SESSION['HirerName']=$row['HirerName'];
	$_SESSION['ProjectId']=$row['ProjectId'];
?>
</div>
<div class="col-md-6" style="text-align:right">
Contact at:<a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?php
	echo $row['HirerId'];
?>"> <?php
	echo $row['HirerId'];
?></a>

</div>
</div>
</br>
</br>
<form method="post">
<button type="submit " name="bid<?php echo $row['ProjectId']; ?>" href="#"  class="btn btn-success" style="padding:10px;padding-left:30px;padding-right:30px;">$ Bid</button>
</form>
</br>
<?php
if(isset($_POST["bid".$row['ProjectId']]))
	goto chance;
if(isset($_SESSION['USER_EMAIL']) && $_SESSION['USER_EMAIL']==$row['HirerId'])
{
?><center>
	<button class="" style="background-color:white;color:blue;text-decoration:underline;border-color:white;padding:10px;margin-bottom:100px" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    View Bids
  </button>
  </center>
  <div class="collapse " id="collapseExample">
    <?php
    $qry="SELECT * from bidding WHERE ProjectId='".$_SESSION['ProjectId']."'";
$result = mysqli_query($link,$qry);
while ($col = mysqli_fetch_assoc($result))
{
	?><hr>
	<div class="container" style="margin-bottom:100px">
	<h1 style="color:red">
	<?php
	echo $col['BidderName'];
	?>
	</h1>
	</br>
	</br>
	<p>
	
	<?php
	echo $col['BidData'];
	?>
	</p>
	</br>
	<div style="text-align:right">
	Contact at:<a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?php
	echo $col['BidderId'];
?>">

<?php
	echo $col['BidderId'];
?>
</a>
</div>
</br>
<?php
$_SESSION['BiddingId']=$col['BiddingId'];
if($col['HireStatus'])
{?>
<center>
<div  style="font-size:30px;padding:10px;max-width:300px;background-color:rgb(255,193,7);color:white;">
 Bidder Hired

</div>
</center>

	<?php
}
else
{

	?><form action="../hire.php" method="post">
	<input type="number" hidden name="BiddingId" value="<?php echo $col['BiddingId'] ?>">
<button type="submit" class="btn btn-danger" name="hire" style="font-size:20px;padding-left:20px;padding-right:20px">
Hire
</button>
</form>


<?php

}
	?>
	 </div>
	<?php
	
}
  ?>
 
  </div>
    <?php
}
?>
</div>
<hr>
</br>
<?php

}
?>
<!-- End of php -->
<!-- PHP for Photoshop -->

<h1 id="Photoshop" style="text-align:center;margin-top:100px;margin-bottom:100px;font-size:8vw">Photoshop</h1>



<?php

$link=mysqli_connect('localhost','root','','jk');
if(!$link){ 
    die('Failed to connect to server'); 
    } 
$query="SELECT ProjectName,ProjectId,ProjectDescription,HirerName,HirerId from project WHERE Photoshop=1";
$results = mysqli_query($link,$query); 
// $log=mysqli_fetch_assoc($results);
while ($row = mysqli_fetch_assoc($results))
{
	?>
	
<div class="container" style="padding:50px;padding-left:50px;padding-right:50px;"  >
	<h1 style="color:blue">
	<?php
	echo $row['ProjectName'];
	?>
	</h1>
	</br>
	<p>
	<?php
	echo $row['ProjectDescription'];
?>
</p>
</br>
<div class="row">
<div class="col-md-6">
By : 
<?php
	echo $row['HirerName'];
	
	$_SESSION['HIRER_ID']=$row['HirerId'];
	$_SESSION['HirerName']=$row['HirerName'];
	$_SESSION['ProjectId']=$row['ProjectId'];
?>
</div>
<div class="col-md-6" style="text-align:right">
Contact at:<a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?php
	echo $row['HirerId'];
?>"> <?php
	echo $row['HirerId'];
?></a>

</div>
</div>
</br>
</br>
<form method="post">
<button type="submit " name="bid<?php echo $row['ProjectId']; ?>" href="#"  class="btn btn-success" style="padding:10px;padding-left:30px;padding-right:30px;">$ Bid</button>
</form>
</br>
<?php
if(isset($_POST["bid".$row['ProjectId']]))
	goto chance;
if(isset($_SESSION['USER_EMAIL']) && $_SESSION['USER_EMAIL']==$row['HirerId'])
{
?><center>
	<button class="" style="background-color:white;color:blue;text-decoration:underline;border-color:white;padding:10px;margin-bottom:100px" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    View Bids
  </button>
  </center>
  <div class="collapse " id="collapseExample">
    <?php
    $qry="SELECT * from bidding WHERE ProjectId='".$_SESSION['ProjectId']."'";
$result = mysqli_query($link,$qry);
while ($col = mysqli_fetch_assoc($result))
{
	?><hr>
	<div class="container" style="margin-bottom:100px">
	<h1 style="color:red">
	<?php
	echo $col['BidderName'];
	?>
	</h1>
	</br>
	</br>
	<p>
	
	<?php
	echo $col['BidData'];
	?>
	</p>
	</br>
	<div style="text-align:right">
	Contact at:<a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?php
	echo $col['BidderId'];
?>">

<?php
	echo $col['BidderId'];
?>
</a>
</div>
</br>
<?php
$_SESSION['BiddingId']=$col['BiddingId'];
if($col['HireStatus'])
{?>
<center>
<div  style="font-size:30px;padding:10px;max-width:300px;background-color:rgb(255,193,7);color:white;">
 Bidder Hired

</div>
</center>

	<?php
}
else
{

	?><form action="../hire.php" method="post">
	<input type="number" hidden name="BiddingId" value="<?php echo $col['BiddingId'] ?>">
<button type="submit" class="btn btn-danger" name="hire" style="font-size:20px;padding-left:20px;padding-right:20px">
Hire
</button>
</form>


<?php

}
	?>
	 </div>
	<?php
	
}
  ?>
 
  </div>
    <?php
}
?>
</div>
<hr>
</br>
<?php

}
?>
<!-- End of php -->

<!--php for Adds Design-->
<h1 id="AddsDesign" style="text-align:center;margin-top:100px;margin-bottom:100px;font-size:8vw">Adds Design</h1>



<?php

$link=mysqli_connect('localhost','root','','jk');
if(!$link){ 
    die('Failed to connect to server'); 
    } 
$query="SELECT ProjectName,ProjectId,ProjectDescription,HirerName,HirerId from project WHERE AddsDesign=1";
$results = mysqli_query($link,$query); 
// $log=mysqli_fetch_assoc($results);
while ($row = mysqli_fetch_assoc($results))
{
	?>
<div class="container" style="padding:50px;padding-left:50px;padding-right:50px;"  >
	<h1 style="color:blue">
	<?php
	echo $row['ProjectName'];
	?>
	</h1>
	</br>
	<p>
	<?php
	echo $row['ProjectDescription'];
?>
</p>
</br>
<div class="row">
<div class="col-md-6">
By : 
<?php
	echo $row['HirerName'];
	
	$_SESSION['HIRER_ID']=$row['HirerId'];
	$_SESSION['HirerName']=$row['HirerName'];
	$_SESSION['ProjectId']=$row['ProjectId'];
?>
</div>
<div class="col-md-6" style="text-align:right">
Contact at:<a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?php
	echo $row['HirerId'];
?>"> <?php
	echo $row['HirerId'];
?></a>

</div>
</div>
</br>
</br>
<form method="post">
<button type="submit " name="bid<?php echo $row['ProjectId']; ?>" href="#"  class="btn btn-success" style="padding:10px;padding-left:30px;padding-right:30px;">$ Bid</button>
</form>
</br>
<?php
if(isset($_POST["bid".$row['ProjectId']]))
	goto chance;
if(isset($_SESSION['USER_EMAIL']) && $_SESSION['USER_EMAIL']==$row['HirerId'])
{
?><center>
	<button class="" style="background-color:white;color:blue;text-decoration:underline;border-color:white;padding:10px;margin-bottom:100px" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    View Bids
  </button>
  </center>
  <div class="collapse " id="collapseExample">
    <?php
    $qry="SELECT * from bidding WHERE ProjectId='".$_SESSION['ProjectId']."'";
$result = mysqli_query($link,$qry);
while ($col = mysqli_fetch_assoc($result))
{
	?><hr>
	<div class="container" style="margin-bottom:100px">
	<h1 style="color:red">
	<?php
	echo $col['BidderName'];
	?>
	</h1>
	</br>
	</br>
	<p>
	
	<?php
	echo $col['BidData'];
	?>
	</p>
	</br>
	<div style="text-align:right">
	Contact at:<a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?php
	echo $col['BidderId'];
?>">

<?php
	echo $col['BidderId'];
?>
</a>
</div>
</br>
<?php
$_SESSION['BiddingId']=$col['BiddingId'];
if($col['HireStatus'])
{?>
<center>
<div  style="font-size:30px;padding:10px;max-width:300px;background-color:rgb(255,193,7);color:white;">
 Bidder Hired

</div>
</center>

	<?php
}
else
{

	?><form action="../hire.php" method="post">
	<input type="number" hidden name="BiddingId" value="<?php echo $col['BiddingId'] ?>">
<button type="submit" class="btn btn-danger" name="hire" style="font-size:20px;padding-left:20px;padding-right:20px">
Hire
</button>
</form>


<?php

}
	?>
	 </div>
	<?php
	
}
  ?>
 
  </div>
    <?php
}
?>
</div>
<hr>
</br>
<?php

}
?>
<!-- End of php -->


<!-- PHP for SOcial Medi Design -->

<h1 id="SocialMediaDesign" style="text-align:center;margin-top:100px;margin-bottom:100px;font-size:8vw">Social Media Design</h1>



<?php

$link=mysqli_connect('localhost','root','','jk');
if(!$link){ 
    die('Failed to connect to server'); 
    } 
$query="SELECT ProjectName,ProjectId,ProjectDescription,HirerName,HirerId from project WHERE SocialMediaDesign=1";
$results = mysqli_query($link,$query); 
// $log=mysqli_fetch_assoc($results);
while ($row = mysqli_fetch_assoc($results))
{
	?>
	
<div class="container" style="padding:50px;padding-left:50px;padding-right:50px;"  >
	<h1 style="color:blue">
	<?php
	echo $row['ProjectName'];
	?>
	</h1>
	</br>
	<p>
	<?php
	echo $row['ProjectDescription'];
?>
</p>
</br>
<div class="row">
<div class="col-md-6">
By : 
<?php
	echo $row['HirerName'];
	
	$_SESSION['HIRER_ID']=$row['HirerId'];
	$_SESSION['HirerName']=$row['HirerName'];
	$_SESSION['ProjectId']=$row['ProjectId'];
?>
</div>
<div class="col-md-6" style="text-align:right">
Contact at:<a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?php
	echo $row['HirerId'];
?>"> <?php
	echo $row['HirerId'];
?></a>

</div>
</div>
</br>
</br>
<form method="post">
<button type="submit " name="bid<?php echo $row['ProjectId']; ?>" href="#"  class="btn btn-success" style="padding:10px;padding-left:30px;padding-right:30px;">$ Bid</button>
</form>
</br>
<?php
if(isset($_POST["bid".$row['ProjectId']]))
	goto chance;
if(isset($_SESSION['USER_EMAIL']) && $_SESSION['USER_EMAIL']==$row['HirerId'])
{
?><center>
	<button class="" style="background-color:white;color:blue;text-decoration:underline;border-color:white;padding:10px;margin-bottom:100px" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    View Bids
  </button>
  </center>
  <div class="collapse " id="collapseExample">
    <?php
    $qry="SELECT * from bidding WHERE ProjectId='".$_SESSION['ProjectId']."'";
$result = mysqli_query($link,$qry);
while ($col = mysqli_fetch_assoc($result))
{
	?><hr>
	<div class="container" style="margin-bottom:100px">
	<h1 style="color:red">
	<?php
	echo $col['BidderName'];
	?>
	</h1>
	</br>
	</br>
	<p>
	
	<?php
	echo $col['BidData'];
	?>
	</p>
	</br>
	<div style="text-align:right">
	Contact at:<a href="https://mail.google.com/mail/?view=cm&fs=1&to=<?php
	echo $col['BidderId'];
?>">

<?php
	echo $col['BidderId'];
?>
</a>
</div>
</br>
<?php
$_SESSION['BiddingId']=$col['BiddingId'];
if($col['HireStatus'])
{?>
<center>
<div  style="font-size:30px;padding:10px;max-width:300px;background-color:rgb(255,193,7);color:white;">
 Bidder Hired

</div>
</center>

	<?php
}
else
{

	?><form action="../hire.php" method="post">
	<input type="number" hidden name="BiddingId" value="<?php echo $col['BiddingId'] ?>">
<button type="submit" class="btn btn-danger" name="hire" style="font-size:20px;padding-left:20px;padding-right:20px">
Hire
</button>
</form>


<?php

}
	?>
	 </div>
	<?php
	
}
  ?>
 
  </div>
    <?php
}
?>
</div>
<hr>
</br>
<?php

}
?>
<!--end of all php?-->
</div>
<!--footer-->

<div style="background-color:rgb(22,30,44);padding-top:100px">
<div class="row container" style="margin-left:50px">
<div class="col-xxl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
 <img src="/JK-1.png" height ="50" width="67"  style=""/></br></br></br></br></br>
</div>
<div class="col-xxl-2 col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
<h1 style="font-size:30px;margin-bottom:25px;color:white">Categories</h1>
<p>
<a style="text-decoration:none;color:white" href="../graphics.php/#LogoDesign"  >Logo Design</a></br>
<a style="text-decoration:none;color:white" href="../graphics.php/#Photoshop"  >Photoshop</a></br>
<a style="text-decoration:none;color:white" href="../graphics.php/#AddsDesign" >Adds Design</a></br>
<a style="text-decoration:none;color:white" href="../graphics.php/#SocialMediaDesign">Social Media Design</a></br>
<a style="text-decoration:none;color:white" href="../video.php/#LogoAnimation">Video Editing</a></br>
<a style="text-decoration:none;color:white" href="../video.php/#VideoEditing"	>Animated GIFs</a></br>
<a style="text-decoration:none;color:white" href="../video.php/#AnimatedGIF"	>Logo Animation</a></br>
<a style="text-decoration:none;color:white" href="../writing.php/#ContentWriting"	>Content Writing</a></br>
<a style="text-decoration:none;color:white" href="../writing.php/#Translation"	>Translation</a></br>
<a style="text-decoration:none;color:white" href="../tech.php/#WebDevelopment"	>Game Development</a></br>
<a style="text-decoration:none;color:white" href="../tech.php/#GameDevelopment"	>WordPress</a></br>
<a style="text-decoration:none;color:white" href="../tech.php/#WordPress"			>App Development</a></br>
<a style="text-decoration:none;color:white" href="../tech.php/#AppDevelopment"	>Web Development</a></br>
<a style="text-decoration:none;color:white" href="../music.php/#Voiceover"	>Voiceover</a></br>
<a style="text-decoration:none;color:white" href="../music.php/#Remix_Mashup"	>Remix & Mashup</a></br>
<a style="text-decoration:none;color:white" href="../bussiness.php/#SocialMediaMarketing"	>Social Media Management</a></br>
<a style="text-decoration:none;color:white" href="../bussiness.php/#Sales_Marketing"		>Sales & Marketing</a></br></br></br></br>
</div>

<div class="col-xxl-2 col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
<h1 style="font-size:30px;margin-bottom:25px;color:white">About</h1>
<a style="text-decoration:none;color:white" href="../About.php">About Us</a></br>
<a style="text-decoration:none;color:white" href="">Leadership</a></br></br></br></br>
</div>

<div class="col-xxl-2 col-lg-3  col-md-6 col-sm-6 col-xs-12 ">
<h1 style="font-size:30px;margin-bottom:25px;color:white">Community</h1>
<a style="text-decoration:none;color:white" href="">Blogs</a></br>
<a style="text-decoration:none;color:white" href="">Videos</a></br></br></br></br>
</div>

<div class="col-xxl-2 col-lg-3  col-md-6 col-sm-6 col-xs-12 ">
<h1 style="font-size:30px;margin-bottom:25px;color:white">Contact Us</h1>
<a style="text-decoration:none" href=""><i class="fab fa-facebook" style="font-size:50px;margin-left:50px"></i></a></br></br>
<a style="text-decoration:none" href=""><i class="fab fa-linkedin" style="font-size:50px;margin-left:50px;color:rgb(2,116,182)"></i></a></br></br>
<a style="text-decoration:none" href=""><i class="fab fa-youtube" style="font-size:50px;margin-left:50px;color:red"></i></a></br></br></br></br></br>
</div>

</div>
<hr style="color:white">
<div class="row container">
<div class="col-xxl-2 col-lg-3  col-md-6 col-sm-6 col-xs-12 ">
<h1 style="color:white;font-size:30px;padding-left:50px;"><?php
$link = mysqli_connect('localhost', 'root', '', 'jk');
 if(!$link){ 
die('Failed to connect to server'); 
} 
$query="SELECT count(*) as total from users";
$results = mysqli_query($link,$query); 
$log=mysqli_fetch_assoc($results);
echo $log['total'];?>
</h1>
<p style="color:white">
Registered Users
</p>
</div>
<div class="col-xxl-2 col-lg-3  col-md-6 col-sm-6 col-xs-12 ">
<h1 style="color:white;font-size:30px;padding-left:40px;"><?php
$link = mysqli_connect('localhost', 'root', '', 'jk');
 if(!$link){ 
die('Failed to connect to server'); 
} 
$query="SELECT count(*) as total from project";
$results = mysqli_query($link,$query); 
$log=mysqli_fetch_assoc($results);
echo $log['total'];?>
</h1>
<p style="color:white">
Total Jobs Posted
</p>
</div>
<div class="col-xxl-6 col-lg-3  col-md-6 col-sm-6 col-xs-12 ">

<p style="color:white">
Job Karlo ® is a registered Trademark of Job Karlo Technology International Pvt Limited (UT74832B7)  & Job Karlo Online India Pvt Limited (CO78789HGH2)
Copyright © 2021 registered Trademark of Job Karlo Technology International Pvt Limited (UT74832B7)
</p>
</div>
</div>
</div>
<?php 
goto name;
?>

<?php
chance:

?>

<button type="button " hidden id="BID" name="BID" href="#" data-bs-toggle="modal" data-bs-target="#BidModal" class="btn btn-success" style=""></button>
<div class="modal" tabindex="-1" id ="BidModal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Bid</h5>
        
      </div>
      <div class="modal-body">
	  <form action="../bid.php" method="post">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Bidding Amount</label>
            <input type="number" class="form-control" id="Amount" name="Amount" value="0">
          </div>
		  <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Final Date</label>
            <input type="date" class="form-control" id="Date" name="Date" value="01-03-2023">
          </div>
		  <div class="mb-3">
            
            <input type="int" class="form-control" hidden id="ProjectId" name="ProjectId" name="ProjectId" value="<?php echo $_SESSION['ProjectId'];?>">
          </div>
		  
		  <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Why shall u be hired?
			</label>
            <input type="text" class="form-control" style="padding-bottom:100px" id="BidData" name="BidData" value="I will do this project in $200" >
          </div>
      </div>
      <div class="modal-footer">
	  
	  <button type="submit " value="submit"   name="close" class="btn btn-danger" style="padding:10px;padding-left:30px;padding-right:30px;float:left;margin-right:150px;">Close</button>
	
        <button type="submit " value="submit"  name="bid" class="btn btn-success" style="padding:10px;padding-left:30px;padding-right:30px;margin-right:50px">$ Bid</button>
      </div>
	  </form>
    </div>
  </div>
  
</div>
<script type="text/javascript">

document.addEventListener('DOMContentLoaded',()=>{document.getElementById('BID');
BID.click()=true;})



</script>
<?php

name:
?>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
    -->
  </body>
</html>


</html>
