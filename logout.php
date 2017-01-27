<?php
// Begin a new session o restart if exist
    session_start(); 
// Destroy all the information registred of the session
    session_destroy(); 
	
// Redirect to login page
    header('location: index.php'); 
?>