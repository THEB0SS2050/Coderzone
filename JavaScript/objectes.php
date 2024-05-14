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
    <title>Objectes</title>
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
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Introducció</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="variables.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Variables</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="tipus_de_dades.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Tipus de dades</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="funcions.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Funcions</span>
					</a>
				</li>
                <li class="nav-link">
					<a href="arrays.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Arrays</span>
					</a>
				</li>
                <li class="nav-link">
					<a href="objectes.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Objectes</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="loops.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Loops</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="ifs_i_elses.php">
						<i class='bx bxl-python icon'></i>
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

				<h1>Objectes</h1>
                <p>Els objectes són una part fonamental de JavaScript i proporcionen una manera poderosa de representar i organitzar dades.</p>
                <p>Aquí tens una explicació detallada sobre els objectes en JavaScript:</p>
				<br>
				<ul>
					<li><h3>1. Què són els objectes?</h3></li>
					<p>Un objecte en JavaScript és una col·lecció de parells clau-valor, on cada clau és una cadena (també coneguda com a propietat) i cada valor pot ser de qualsevol tipus de dades, com ara números, cadenes, booleans, funcions, altres objectes, etc.</p>

					<br>

					<li><h3>2. Sintaxi d'un objecte:</h3></li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p>let persona = {</p>
						<p>    nom: "Anna",</p>
						<p>    edat: 30,</p>
						<p>    casada: false,</p>
						<p>    adreça: {</p>
						<p>        carrer: "Carrer Major",</p>
						<p>        ciutat: "Barcelona"</p>
						<p>    },</p>
						<p>    saluda: function() {</p>
						<p>        return "Hola, sóc " + this.nom;</p>
						<p>    }</p>
						<p>};</p>
					</div>
					</a>

					<video width="500px" controls>
						<source src="../Videos/JavaScript/Objectes/2.mp4" type="video/mp4">
					</video>

					<br>

					<li><h3>3. Accedir a les propietats d'un objecte:</h3> Pots accedir a les propietats d'un objecte utilitzant la notació de punt (.) o la notació de claudàtor ([ ]).</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p>console.log(persona.nom); // Anna</p>
						<p>console.log(persona["edat"]); // 30</p>
						<p>console.log(persona.adreça.ciutat); // Barcelona</p>
					</div>
					</a>

					<br>

					<li><h3>4. Afegir i modificar propietats:</h3>Pots afegir noves propietats a un objecte en qualsevol moment i modificar les propietats existents.</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p>persona.professio = "Enginyera";</p>
						<p>persona.nom = "Laura";</p>
					</div>
					</a>

					<br>

					<li><h3>5. Eliminar propietats:</h3>Pots eliminar propietats d'un objecte utilitzant l'operador delete.</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p>delete persona.casada;</p>
					</div>
					</a>

					<br>

					<li><h3>6. Objectes com a referència:</h3>Els objectes es passen per referència, el que significa que quan assignes un objecte a una altra variable, estàs assignant una referència a l'objecte original, no una còpia.</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p>let persona2 = persona;</p>
						<p>persona2.nom = "Carles";</p>
						<p>console.log(persona.nom); // Carles</p>
					</div>
					</a>

					<br>

					<li><h3>7. Mètodes d'objecte:</h3>Els mètodes són funcions incloses dins d'un objecte.</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p>let cotxe = {</p>
						<p>    model: "Corolla",</p>
						<p>    descripcio: function() {</p>
						<p>        return this.marca + " " + this.model;</p>
						<p>    }</p>
						<p>};</p>
						<p>console.log(cotxe.descripcio()); // Toyota Corolla</p>
					</div>
					</a>

					<br>

					<li><h3>8. Objectes predefinits:</h3>JavaScript també proporciona diversos objectes predefinits com ara Math, Date, Array, etc., que contenen mètodes i propietats útils.</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p>console.log(Math.PI); // 3.141592653589793</p>
						<p>console.log(new Date().getFullYear()); // Any actual</p>
					</div>
					</a>
                <h2>Exercicis</h2>
	
	</section>
	<script src="../Logica/verificacio.js"></script>
</body>
</html>