<?php
	include("php/Conexion.php");
	include ("php/Sesion.php")
?>

<!DOCTYPE html>
<html>
<head>
	<title>Red Social - 2COTY</title>
	<meta charset="UTF-8"/>
	<link href="css/style.css" rel="stylesheet">
</head>
<body>
	<header>
		<div id="logo">
			<img src="IMG/logo.jpg" alt="logo" height="200">
		</div>
		<nav class="menu">
			<ul>
				<li><a href="Home.php">Home</a></li>
				<li><a href="MyProfile.php">My Profile</a></li>
				<li><a href="MyFriends.php">My Friends</a></li>
				<li><a href="MyPictures.php">My Pictures</a></li>
				<li><a href="Search.php">Search</a></li>
				<li><a href="php/Logout.php">Logout</a></li> <!-- Agregado: enlace para cerrar sesión -->
			</ul>
		</nav>
	</header>

	<section id="Profile">
		<!-- Inicio del perfil -->
		<img src="IMG/FotoPerfil.jpg" height="200">
		<h1>Full name</h1>
		<p>Description Description Description Description Description Description</p>
		<!-- Fin del perfil -->
	</section>

	<section id="Friends">
		<h2>My Friends</h2>

		<div class="friend">
			<img src="IMG/amigo1.jpg" height="150">
			<h2>Friend 1</h2>
			<p class="description">Description Description Description</p>
			<a href="#" class="button">View profile</a><br><br>
		</div>

		<div class="friend">
			<img src="IMG/amigo2.jpg" height="150">
			<h2>Friend 2</h2>
			<p class="description">Description Description Description</p>
			<a href="#" class="button">View profile</a><br><br>
		</div>

		<div class="friend">
			<img src="IMG/amigo3.jpg" height="150">
			<h2>Friend 3</h2>
			<p class="description">Description Description Description</p>
			<a href="#" class="button">View profile</a><br><br>
		</div>
	</section>

	<section id="Pictures">
		<h2>My Pictures</h2>

		<div class="picture">
			<img src="IMG/foto1.jpeg" height="200" width="250">
		</div>

		<div class="picture">
			<img src="IMG/foto2.jpeg" height="200" width="250">
		</div>

		<div class="picture">
			<img src="IMG/foto3.jpeg" height="200" width="250">
		</div>
	</section>

	<footer>
		<p>&copy; 2023, Team 161 IT. All rights reserved.</p>
	</footer>
</body>
</html>

