<?php

	$mysqli=new mysqli("localhost","root","password","login"); 
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();
		exit();
	}
	
?>