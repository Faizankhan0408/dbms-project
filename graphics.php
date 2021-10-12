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
    <img src="JK-1.png" width=60 height=45 style=""/>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	</br>
	<form class="d-flex">
        <input class="form-control me-2" type="search" style="" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit" style="">Search</button>
      </form>
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" style="" href="howitworks.html" >How it Works</a>
        </li>
		 
    </div>
	 <a class="nav-link" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</a>
	
	
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
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" style="color:white;padding:20px">
            Graphics & Design
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#" style="">Logo Design</a></li>
            <li><a class="dropdown-item" href="#" style="">Photoshop</a></li>
            <li><a class="dropdown-item" href="#" style="">Adds Design</a></li>
			<li><a class="dropdown-item" href="#" style="">Social Media Design</a></li>
          </ul>
        </li>
		
        <li class="nav-item dropdown">
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" style="color:white;padding:20px">
            Video & Animation
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Logo Animation</a></li>
            <li><a class="dropdown-item" href="#">Video Editing</a></li>
            <li><a class="dropdown-item" href="#">Animated GIF's</a></li>
          </ul>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" style="color:white;padding:20px">
            Writing & Translation
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Content Writing</a></li>
            <li><a class="dropdown-item" href="#">Translation</a></li>
           
          </ul>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" style="color:white;padding:20px">
            Tech & Programming
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Web Development</a></li>
            <li><a class="dropdown-item" href="#">Game Development</a></li>
            <li><a class="dropdown-item" href="#">Wordpress</a></li>
			<li><a class="dropdown-item" href="#">App Development</a></li>
          </ul>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" style="color:white;padding:20px">
            Music & Audio
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Voice Over</a></li>
            <li><a class="dropdown-item" href="#">Remix & Mashup</a></li>
            
          </ul>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true" style="color:white;padding:20px">
            Bussiness & Marketing
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Social Media Marketing</a></li>
            <li><a class="dropdown-item" href="#">Sales & Marketing</a></li>
           
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
        <form action="login.php" method ="post">
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
        <form action="signup.php" method="post">
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

<!-- PHP for Page -->

<?php

$link=mysqli_connect('localhost','root','','jk');
if(!$link){ 
    die('Failed to connect to server'); 
    } 
$query="SELECT ProjectName,HirerName,ProjectDescription FROM `project` WHERE LogoDesign=1 OR Photoshop=1 or AddsDesign=1 or SocialMediaDesign=1";
$results = mysqli_query($link,$query); 
// $log=mysqli_fetch_assoc($results);
while ($row = mysqli_fetch_assoc($results))
{ 
  echo'<center><img src="https://source.unsplash.com/400x100/?logo-design,photoshop,addsdesign"></center>';
echo 
'<center><h3>'.$row['ProjectName'].'</h3></center>';
echo'<br>';
echo 
'<center><h3>'.$row['HirerName'].'</h3></center>';
echo'<br>';
echo 
'<center><h3>'.$row['ProjectDescription'].'</h3></center>';
echo'<br>';
}
?>



<!-- End of php -->
<!--footer-->

<div style="background-color:rgb(22,30,44);padding-top:100px">
<div class="row container" style="margin-left:50px">
<div class="col-xxl-4 col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
 <img src="JK-1.png" height ="50" width="67"  style=""/></br></br></br></br></br>
</div>
<div class="col-xxl-2 col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
<h1 style="font-size:30px;margin-bottom:25px;color:white">Categories</h1>
<p>
<a style="text-decoration:none;color:white" href="">Logo Design</a></br>
<a style="text-decoration:none;color:white" href="">Photoshop</a></br>
<a style="text-decoration:none;color:white" href="">Social Media Design</a></br>
<a style="text-decoration:none;color:white" href="">Ads Design</a></br>
<a style="text-decoration:none;color:white" href="">Video Editing</a></br>
<a style="text-decoration:none;color:white" href="">Animated GIFs</a></br>
<a style="text-decoration:none;color:white" href="">Logo Animation</a></br>
<a style="text-decoration:none;color:white" href="">Content Writing</a></br>
<a style="text-decoration:none;color:white" href="">Translation</a></br>
<a style="text-decoration:none;color:white" href="">Game Development</a></br>
<a style="text-decoration:none;color:white" href="">WordPress</a></br>
<a style="text-decoration:none;color:white" href="">App Development</a></br>
<a style="text-decoration:none;color:white" href="">Web Development</a></br>
<a style="text-decoration:none;color:white" href="">Voiceover</a></br>
<a style="text-decoration:none;color:white" href="">Remix & Mashup</a></br>
<a style="text-decoration:none;color:white" href="">Social Media Management</a></br>
<a style="text-decoration:none;color:white" href="">Sales & Marketing</a></br></br></br></br>
</div>

<div class="col-xxl-2 col-lg-3 col-md-6 col-sm-6 col-xs-12 ">
<h1 style="font-size:30px;margin-bottom:25px;color:white">About</h1>
<a style="text-decoration:none;color:white" href="">About Us</a></br>
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
<h1 style="color:white;font-size:30px">24,321
</h1>
<p style="color:white">
Registered Users
</p>
</div>
<div class="col-xxl-2 col-lg-3  col-md-6 col-sm-6 col-xs-12 ">
<h1 style="color:white;font-size:30px">3,245
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
