<?php
session_start();

require("sql/conexion.php");

if(isset($_SESSION["id_usuario"])){
	header("Location : home.php");
}
if(!empty($_POST)){
	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	$error = '';

	$sha1_pass = sha1($password);

	$sql = "SELECT id, id_tipo FROM usuarios WHERE usuario = '$usuario' AND password = '$sha1_pass'";
	
	$result=$conn->query($sql);
	$rows = $result->num_rows;

	if($rows > 0) {
			$row = $result->fetch_assoc();

			$_SESSION['id_usuario'] = $row['id'];
			$_SESSION['tipo_usuario'] = $row['id_tipo'];
			
			header("location: home.php");
			
			} else {
			$error = "El nombre o password son incorrectos";
		}

}
?>
<!DOCTYPE html>
<html lang="es_MX">
	<head>
		<title>Login</title>
		<meta charset="utf-8"/>
	</head>
	
	<body>
		<form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST" > 
			<div><label>Usuario:</label><input id="usuario" name="usuario" type="text" ></div>
			<br />
			<div><label>Password:</label><input id="password" name="password" type="password"></div>
			<br />
			<div><input name="login" type="submit" value="login"></div> 
		</form> 
		
		<br />
		
		<div style = "font-size:16px; color:#cc0000;"><?php echo isset($error) ? utf8_decode($error) : '' ; ?></div>
	</body>
</html>		