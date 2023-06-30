<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="./assets/css/login.css">
	<link rel="stylesheet" href="./assets/css/fondo_login.css">
	<title>login</title>
</head>
<body>

<div class="area" >
        <ul class="circles">
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>

<div class="login-reg-panel">

		<div class="login-info-box">
			<h2>¿Tener una cuenta?</h2>
			<!-- <p>Lorem ipsum dolor sit amet</p> -->
			<label id="label-register" for="log-reg-show">Iniciar Session</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  checked="checked">
		</div>
							
		<div class="register-info-box">
			<h2>¿No tienes una cuenta?</h2>
			<!-- <p>Lorem ipsum dolor sit amet</p> -->
			<label id="label-login" for="log-login-show">Registrarse</label>
			<input type="radio" name="active-log-panel" id="log-login-show">
		</div>
		<form action="validar.php"method="POST">
							
		<div class="white-panel">
			<div class="login-show">
				<h2>INICIAR SESSION</h2>
				<?php   
				include("./config/conexion.php");
				include("./validar.php");
				
				?>
				<input type="text" name="nombre_user" placeholder="Nombre de usuario" required>
				<input type="password" name="contrasena_user" placeholder="Contraseña" required>
				<button type="submit" class="btn btn-success" name="login" >Iniciar</button>
				<a href="">¿Has olvidado tu contraseña?</a>

			</div>
			</form>

			<form action="registro.php"method="POST">
			<div class="register-show">
				<h2>REGISTRARSE</h2>
				<input type="text" name="nombre_user" placeholder="Nombre de usuario" required>
				<input type="password" name="contrasena_user"  placeholder="Contraseña" required>
				<input type="text"  name="correo_user" placeholder="Correo" required>
				<button type="submit" class="btn btn-success" name="registro" >Registrar</button>
				<a href="">¿Ya te Registraste?</a>
			</div>
			</form>
			
		</div>
	</div>

    </ul>
</div >

<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="./assets/js/login.js"></script>
</body>
</html>