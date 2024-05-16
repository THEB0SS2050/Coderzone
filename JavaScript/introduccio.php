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
	<link rel="icon" type="image/x-icon" href="../Images/js.png">
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
						<i class='bx bxl-javascript icon' ></i>
						<span class="text nav-text">Introducció</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="variables.php">
						<i class='bx bxl-javascript icon' ></i>
						<span class="text nav-text">Variables</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="tipus_de_dades.php">
						<i class='bx bxl-javascript icon' ></i>
						<span class="text nav-text">Tipus de dades</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="funcions.php">
						<i class='bx bxl-javascript icon' ></i>
						<span class="text nav-text">Funcions</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="arrays.php">
						<i class='bx bxl-javascript icon' ></i>
						<span class="text nav-text">Arrays</span>
					</a>
				</li>
                <li class="nav-link">
					<a href="objectes.php">
						<i class='bx bxl-javascript icon' ></i>
						<span class="text nav-text">Objectes</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="loops.php">
						<i class='bx bxl-javascript icon' ></i>
						<span class="text nav-text">Loops</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="ifs_i_elses.php">
						<i class='bx bxl-javascript icon' ></i>
						<span class="text nav-text">If's i Else</span>
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

				<h1>Introducció a JavaScript</h1>
                <br>
                <p>JavaScript és un llenguatge de programació àmpliament utilitzat en el desenvolupament web, que originalment es va crear per afegir interactivitat a les pàgines web.</p>
                <br>
                <p>Amb el temps, s'ha convertit en un llenguatge de propòsit general utilitzat en diverses àrees de desenvolupament, com ara el desenvolupament d'aplicacions web, mòbils i de servidor.</p>
                <br>
                <p>JavaScript és interpretat i s'executa en temps real en entorns com els navegadors web o Node.js. Això el fa ideal per a la creació ràpida de prototips i per a aplicacions interactives.</p>
                <br>
                <p>Una de les seves característiques més potents és la capacitat de manipular el contingut i el comportament de les pàgines web en temps d'execució, permetent efectes dinàmics com animacions i actualitzacions de contingut sense recarregar la pàgina.</p>
                <br>
                <p>JavaScript s'utilitza no només en el desenvolupament web, sinó també en el desenvolupament d'aplicacions mòbils amb marcs com React Native, i en el desenvolupament de servidors amb Node.js. Això permet als desenvolupadors crear tant el frontend com el backend d'una aplicació utilitzant el mateix llenguatge, simplificant el procés de desenvolupament i permetent compartir codi entre diferents parts de l'aplicació.</p>
                <br>
                <p>En resum, JavaScript és un llenguatge versàtil i potent que és essencial en el desenvolupament web, mòbil i de servidor, i que és utilitzat per molts desenvolupadors a nivell mundial.</p>
    </section>
	<script src="../Logica/verificacio.js"></script>
</body>
</html>