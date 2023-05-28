<?php
	include("php/Conexion.php");
	include ("php/Sesion.php")
?>

<!DOCTYPE html>

<html>
	<head>
		<title>My Pictures</title>
		<meta charset="UTF-8"/>
		<link href="css/style.css" rel="stylesheet">
	<head>
	
	<body>
	
	<header>
	<div id="logo">
		<img src="IMG/logo.jpg" alt="logo" height="200"></a>
		
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
			<img src="IMG/FotoPerfil.jpg" height="200">
			<h1> Full name </h1>
			
			<form action="php/ChangePhoto.php" method="POST" enctype="Multipart/form-data"/> <!-- enctype="Multipart/form-data es necesario para subir archivos-->
			Change photo: <input name="Archive" id="Archive" type="File" accept=".jpg, .jpeg, .png" required />
			<input type="Submit" name="Upload" value="Upload"/>
			</form>
	</section>
	
	<section id="Pictures">
			<h2>My Pictures</h2>
			
			<h3>
			<form action="php/UploadPhoto.php" method="POST" enctype="Multipart/form-data"/> 
			Upload photo: <input name="Archive" id="Archive" type="File" accept=".jpg, .jpeg, .png" required />
			<input type="Submit" name="Upload" value="Upload"/>
			</form>
			</h3>
			
		<section class="picture">
				<img src="IMG/foto1.jpeg" height="200" width="280">
		</section>
		
		<section class="picture">
				<img src="IMG/foto2.jpeg" height="200" width="280">
		</section>
		
		<section class="picture">
				<img src="IMG/foto3.jpeg" height="200" width="280">
		</section>
		
		<section class="picture">
				<img src="IMG/foto4.jpeg" height="200" width="280">
		</section>
		
	</section>
		
	<footer>
			<p>&copy; 2023, Team 161 IT. All rights reserved.</p>
	</footer>
	
	<body>
	
	
<html>