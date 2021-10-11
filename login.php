<?php
session_start();
?>
		<?php
		$link = mysqli_connect('localhost', 'root', '', 'jk');
		$email=$_POST['email'];
		$password=$_POST['password'];
		if(!$link){ 
		die('Failed to connect to server'); 
		} 
		$query="select email,password from users;";
		$results = mysqli_query($link,$query); 
		$log=mysqli_fetch_assoc($results);
		
		
		while ($row = mysqli_fetch_assoc($results))
		{
		if($row['email']==$email && $row['password']==$password){
		// {echo'<script type="text/javascript">
		// 		   window.onload = function () { alert("You are logged in"); }
		//  </script>';
		$_SESSION['status']="You are Logged !!";
        $_SESSION['status_code']="success";
        include 'main.html';
		}
		else{
			// echo'';
			$_SESSION['status']="Invalid Credentials";
            $_SESSION['status_code']="error";
		}
	}
		?>
		<?php
		include 'script_log.php';
		?>
		
