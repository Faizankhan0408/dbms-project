<?php
session_start();
unset($_SESSION['IS_AUTHENTICATED']);
session_destroy();
session_start();
$_SESSION['status']="You are logged out";
            $_SESSION['status_code']="success";
			include "main.php";

include "script_log.php";
?> 
