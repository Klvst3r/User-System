<?php
	session_start(); //Begins a new session o restart if exist 
	require 'conexion.php'; //add script conection 
	
// Eval if exist the variable of session id_usuario, if doesn't exist redirect to index
	if(!isset($_SESSION["id_usuario"])){
		header("Location: index.php");
	}
	
	$idUsuario = $_SESSION['id_usuario'];
 
// Consult the data of the user
	$sql = "SELECT u.id, p.nombre FROM usuarios AS u INNER JOIN personal AS p ON u.id_personal=p.id WHERE u.id = '$idUsuario'";
	$result=$conn->query($sql);
	$row = $result->fetch_assoc();
?>
 <!DOCTYPE html>
<html lang = "es_MX">
	<head>
		<title>Welcome</title>
		<meta charset="utf-8"/>
	</head>
	
	<body>
 
	<!-- Print the name of the user with consult data  -->
	<h1><?php echo 'Bienvenid@ '.utf8_decode($row['nombre']); ?></h1>
	
<!--  Eval the perfil, if is admin, show the option to register more users -->
	<?php if($_SESSION['tipo_usuario']==1) { ?>
	
	<a href="registro.php">Registar</a>
	<br />
	
	<?php } ?>
	
<!-- Show the option to Close Session -->
	<a href="logout.php">Cerrar Sesión</a>
	
	</body>
</html>