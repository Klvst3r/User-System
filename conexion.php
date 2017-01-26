<?php

	$mysqli = new mysqli("localhost","dev","desarrollo","user-system"); 
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	
?>