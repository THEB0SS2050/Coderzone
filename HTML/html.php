<?php 
session_start();

	include("../connection.php");
	include("../functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../Styles/index.css">
    <title>Que és HTML?</title>
	<link rel="icon" type="image/x-icon" href="../Images/html.png">
</head>
<body>

	<nav class="sidebar tancar">
		<header>
			<div class="image-text">
				<span class="image">
					<a href="../index.php"><img src="../Images/logo.png" alt="logo"></a>
				</span>

				<div class="text header-text">
					<span class="name">Coder Zone</span>
					<span class="profession">Formació digital</span>
				</div>
			</div>

			<i class='bx bx-chevron-right toggle'></i>

		</header>

	<div class="menu-bar">
		<div class="menu">
			<li class="search-box">
				<i class='bx bx-search icon'></i>
					<input id="searchInput" type="search" placeholder="Buscar...">
			</li>
			<ul class="menu-links">
				<li class="nav-link">
					<a href="html.php">
						<i class='bx bxl-html5 icon'></i>
						<span class="text nav-text">Que és HTML?</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="introduccio.php">
						<i class='bx bxl-html5 icon' ></i>
						<span class="text nav-text">Introducció</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="capçaleres_paragrafs.php">
						<i class='bx bxl-html5 icon' ></i>
						<span class="text nav-text">Headers/Paràgrafs</span>
					</a>
				</li>
				<li class="nav-link">
				<a href="br_hr.php">
						<i class='bx bxl-html5 icon'></i>
						<span class="text nav-text">Salts de línea i <br> Línies horitzontals</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="classes_id.php">
						<i class='bx bxl-html5 icon' ></i>
						<span class="text nav-text">Classes i IDs</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="enllaços.php">
						<i class='bx bxl-html5 icon'></i>
						<span class="text nav-text">Enllaços</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="taules.php">
						<i class='bx bxl-html5 icon'></i>
						<span class="text nav-text">Taules</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="divs.php">
						<i class='bx bxl-html5 icon'></i>
						<span class="text nav-text">Div</span>
					</a>
				</li>
			</ul>
		</div>

		<div class="contingut-fons">
			<li class="">
				<a href="../logout.php">
					<i class='bx bx-log-out icon'></i>
					<span class="text nav-text">Tancar sessió</span>
				</a>
			</li>

			<li class="mode">
				<div class="moon-sun">
					<i class='bx bx-moon icon moon'></i>
					<i class='bx bx-sun icon sun'></i>
				</div>
				<span class="mode-text text">Mode fosc</span>

				<div class="canviar-mode">
					<span class="canviar"></span>
				</div>
			</li>
		</div>
	</div>

	</nav>
	<script src="../Logica/scripts.js"></script>

	<section class="info">
        <div class="text">

				<h1>Que es HTML?</h1> <br>
				<p>HTML, o HyperText Markup Language, és el llenguatge estàndard utilitzat per crear i dissenyar pàgines web. Serveix com el llenguatge de marcatge fonamental per a l’estructura i el contingut d’una pàgina web. HTML utilitza etiquetes (tags) per definir diversos elements dins d'una pàgina web, com ara capçaleres, paràgrafs, enllaços, imatges, formularis, llistes, entre d'altres. Aquestes etiquetes permeten al navegador web interpretar i mostrar correctament el contingut de la pàgina a l’usuari. A més de definir l'estructura d'una pàgina web, HTML també permet la inclusió d'altres tipus de contingut multimèdia, com ara àudio i vídeo, així com la integració d'estils i formats utilitzant fulls d'estil en cascada (CSS) i funcionalitats interactives mitjançant JavaScript.</p> <br>
				<p>HTML utilitza etiquetes (tags) per definir diversos elements dins d'una pàgina web, com ara capçaleres, paràgrafs, enllaços, imatges, formularis, llistes, entre d'altres. Aquestes etiquetes permeten al navegador web interpretar i mostrar correctament el contingut de la pàgina a l’usuari.</p> <br>
				<p>A més de definir l'estructura d'una pàgina web, HTML també permet la inclusió d'altres tipus de contingut multimèdia, com ara àudio i vídeo, així com la integració d'estils i formats utilitzant fulls d'estil en cascada (CSS) i funcionalitats interactives mitjançant JavaScript.</p> <br>
        </div>
	</section>
</body>
</html>