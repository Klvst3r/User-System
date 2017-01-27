<?php
	/*
	$mysqli=new mysqli("localhost","dev","desarrollo","user-system"); 
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	else {
		echo "Conection Successful";
	}
	*/

	//MySQLi Objected-Oriented
	// Create connection
	$conn = new mysqli("localhost","dev","desarrollo","user-system"); 
	// Check connection
	if ($conn->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	}
	/* --optional code --
	else {
		echo "Conection Successful";
	} 
	*/

	//References:

	/*---
	http://www.w3schools.com/php/php_mysql_create.asp
	http://stackoverflow.com/questions/27353037/mysql-login-username-password
	http://php.net/manual/en/mysqli.construct.php
	---*/

?>