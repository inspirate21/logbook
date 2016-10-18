<?php
    session_start();
	
	// remove all session variables
	session_unset(); 

// destroy the session 
	session_destroy(); 
	
    unset($_SESSION['userid']);
    header('Location: ../../index.php');
     exit();
?>