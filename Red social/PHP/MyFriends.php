<?php
	include("php/Conexion.php");
	include ("php/Sesion.php")
?>

<!DOCTYPE html>
<html>
	<head>
		<title>My Friends</title>
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
					<li><a href="Logout.php">Logout</a></li> <!-- Agregado: enlace para cerrar sesión -->
				</ul>
			</nav>
		</header>
		<section id="Subsections">
			<h2 class="section-title">Friends</h2>
			<section class="Subsection">
				<img src="IMG/User 1.jpg" height="150">
				<h2>Friend 1</h2>
				<p class="Description">
					Description Description Description
				</p>
				<a href="#" class="button">View profile</a><br><br>
			</section>
			<section class="Subsection">
				<img src="IMG/User 2.jpg" height="150">
					<h2>Friend 2</h2>
					<p class="Description">
						Description Description Description
					</p>
					<a href="#" class="button">View profile</a><br><br>
			</section>
			<section class="Subsection">
				<img src="IMG/User 3.jpg" height="150">
					<h2>Friend 3</h2>
					<p class="Description">
						Description Description Description
					</p>
					<a href="#" class="button">View profile</a><br><br>
			</section>
			<section class="Subsection">
				<img src="IMG/User 4.jpg" height="150">
					<h2>Friend 4</h2>
					<p class="Description">
						Description Description Description
					</p>
					<a href="#" class="button">View profile</a><br><br>
			</section>
			<section class="Subsection">
				<img src="IMG/User 5.jpg" height="150">
					<h2>Friend 5</h2>
					<p class="Description">
						Description Description Description
					</p>
					<a href="#" class="button">View profile</a><br><br>
			</section>
			<section class="Subsection">
				<img src="IMG/User 6.jpg" height="150">
					<h2>Friend 6</h2>
					<p class="Description">
						Description Description Description
					</p>
					<a href="#" class="button">View profile</a><br><br>
			</section>
		</section>
		<footer>
			<p>&copy; 2023, Team 161 IT. All rights reserved.</p>
		</footer>
	</body>
</html>

