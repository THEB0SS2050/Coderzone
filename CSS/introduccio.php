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
    <title>Introducció</title>
	<link rel="icon" type="image/x-icon" href="../Images/css.png">
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
					<a href="introduccio.php">
						<i class='bx bxl-css3 icon'></i>
						<span class="text nav-text">Introducció</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="conceptes_basics.php">
						<i class='bx bxl-css3 icon'></i>
						<span class="text nav-text">Conceptes Bàsics</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="colors.php">
						<i class='bx bxl-css3 icon'></i>
						<span class="text nav-text">Colors</span>
					</a>
				</li>
                <li class="nav-link">
					<a href="backgrounds.php">
						<i class='bx bxl-css3 icon'></i>
						<span class="text nav-text">Backgrounds</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="borders.php">
						<i class='bx bxl-css3 icon'></i>
						<span class="text nav-text">Borders</span>
					</a>
				</li>
			</ul>
		</div>

		<div class="contingut-fons">
			<li class="nav-link">
				<a href="#">
					<i class="icon" id="comptador"></i>
					<span class="text nav-text">Comptador</span>
				</a>
			</li>
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

				<h1>Introducció</h1>
                <p>CSS, o Full de Estil en Càscada (Cascading Style Sheets) en anglès, és un llenguatge de marcatge utilitzat per descriure la presentació d'un document escrit en un llenguatge de marcatge com HTML.</p>
                <p>CSS separa el contingut d'un document de la seva presentació, permetent als desenvolupadors web controlar l'aparença i l'estil dels elements d'una pàgina web.</p>
				<br>


                <h3>Propòsits i Funcionalitats Principals de CSS:</h3>
                <br>
					<ul>
						<li><strong>Estil i Aparència:</strong> CSS s'utilitza per controlar l'aparença visual del contingut d'un document web. Això inclou l'aspecte de text, colors, fonts, marges, espaiats, imatges de fons, entre altres propietats estilístiques.</li>
						<br>
						<li><strong>Adaptabilitat a Dispositius:</strong> CSS ofereix tècniques per crear dissenys web responsius i adaptatius que es poden ajustar automàticament segons el dispositiu utilitzat per accedir al lloc web, com ara telèfons mòbils, tauletes o ordinadors de sobretaula.</li>
						<br>
						<li><strong>Consistència:</strong> Utilitzant CSS, els desenvolupadors poden establir un conjunt de regles de disseny coherents per a tot el lloc web, garantint una aparença consistent en totes les pàgines.</li>
						<br>
						<li><strong>Separació d'Interessos:</strong> CSS permet la separació de la presentació del contingut. Això significa que els desenvolupadors poden modificar l'estil d'una pàgina sense haver de canviar el contingut HTML, i viceversa.</li>
						<br>
						<li><strong>Optimització de la Velocitat de Càrrega:</strong> Utilitzant CSS, es poden definir estils en un fitxer extern separat, que es pot emmagatzemar en memòria cau del navegador i reutilitzar en diferents pàgines del mateix lloc web. Això optimitza la velocitat de càrrega de les pàgines.</li>
					</ul>

	
	</section>
	<script src="../Logica/verificacio.js"></script>
</body>
</html>