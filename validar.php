<?php
// Se utiliza para llamar al archivo que contine la conexion a la base de datos
require './config/conexion.php';

// Validamos que el formulario y que el boton login haya sido presionado
if(isset($_POST['login'])) {

// Obtener los valores enviados por el formulario
$usuario = $_POST['nombre_user'];
$contrasena = $_POST['contrasena_user'];

// Ejecutamos la consulta a la base de datos utilizando la función mysqli_query
$sql = "SELECT * FROM usu WHERE nombre_user = '$usuario' and contrasena_user = '$contrasena'";
$resultado = mysqli_query($conexion,$sql);
$numero_registros = mysqli_num_rows($resultado);
	if($numero_registros != 0) {
		session_start();
		$_SESSION['acceso']=true;
		header("Location:index.php");
		// Inicio de sesión exitoso
		// echo "Inicio de sesión exitoso. Bienvenido, " . $usuario . "!";
		echo'<div class="alert alert-success" role="alert">
		"Inicio de sesión exitoso. Bienvenido, " . $usuario . "!"
</div>';
		//echo '<div class="alert alert-danger"> "Inicio de sesión exitoso. Bienvenido, " . $usuario . "!"</div>';
		
	} else {

		// Credenciales inválidas
		// echo "Credenciales inválidas. Por favor, verifica tu nombre de usuario y/o contraseña."."<br>";
		echo '<div class="alert alert-danger"> Credenciales inválidas. Por favor, verifica tu nombre de usuario y/o contraseña."."<br>"</div>';

	}
}
?>
