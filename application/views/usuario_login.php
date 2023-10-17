<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<title>Login</title>
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/style.css">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	
</head>
<body >

	<header>
		<h2 class="logo">Logo</h2>
		<nav class="navigation">
			<a href="#">Home</a>
			<a href="#">About</a>
			<button class="btnLogin-popup">Login</button>
		</nav>
	</header>

	<div class="wrapper">
		<span class="icon-close">
			<i class='bx bx-x'></i>
		</span>
		<div class="form-box login">
			<h2>Login</h2>
			<form action="#">
				<div class="input-box">
					<span class="icon"><i class='bx bxs-envelope'></i></span>
					<input type="email" name="am" id="em" required>
					<label for="em">Email</label>
				</div>
				<div class="input-box">
					<span class="icon"><i class='bx bxs-lock-alt'></i></span>
					<input type="password" name="password" id="password" required>
					<label for="password">Password</label>
				</div>
				<div class="remember-forgot">
					<label>
						<input type="checkbox" name="">Recuerdame
					</label>
					<a href="#">Forgot Pasword</a>
				</div>
				<button type="submit" class="btn">Login</button>
				<div class="login-register">
					<p>No tienes una cuenta?<a href="#" class="register-link">Registrarse</a></p>
				</div>
			</form>
		</div>


		<div class="form-box register">
			<h2>Registrate</h2>
<?php 
echo form_open_multipart('usuariocontrl/agregarbd');
?>
				<div class="input-box">
					<span class="icon"><i class='bx bxs-user'></i></span>
					<input type="text" id="nombre" name="nombre" required>
					<label for="nombre">Nombre</label>
					<span></span>
				</div>

				<div class="input-box">
					<span class="icon"><i class='bx bxs-user'></i></span>
					<input type="text" name="apellido1" id="apellido1" required>
					<label for="apellido1">Primer Apellido</label>
					<span></span>
				</div>
				<div class="input-box">
					<span class="icon"><i class='bx bxs-user'></i></span>
					<input type="text" name="apellido2" id="apellido2"  required>
					<label for="apellido2">Segundo Apellido</label>
					<span></span>
				</div>
				<div class="input-box">
					<span class="icon"><i class='bx bxs-envelope'></i></span>
					<input type="email" name="email" id="email" required>
					<label for="email">Email</label>
					<span></span>
				</div>
				<button type="submit" class="btn">Registrar</button>
				<div class="login-register">
					<p>Ya tienes cuenta?<a href="#" class="login-link"> Loguearse</a></p>
				</div>
<?php
echo form_close();
?>
		</div>
	</div>
	<script src="<?php echo base_url();?>/assets/script.js"></script>
</body>
</html>