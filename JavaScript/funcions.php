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
    <title>Funcions</title>
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

				<h1>Variables</h1>
                <p>Les funcions en JavaScript són similars a les de Python. Són blocs de codi que realitzen una tasca específica quan es criden. Les funcions poden acceptar arguments, realitzar càlculs basats en aquests arguments i retornar resultats.</p>
				<a href="../compilador_codi.html" target="_blank">
				<div class="exemple">
					<p>function suma(a, b) {</p>
					<p>    return a + b;</p>
					<p>}</p>
					<p>let resultat = suma(3, 4);</p>
					<p>console.log(resultat);  // Imprimeix 7</p>
				</div>
				</a>

				<br>

				<p>Pots assignar valors per defecte als paràmetres de les funcions:</p>
				<a href="../compilador_codi.html" target="_blank">
				<div class="exemple">
					<p>function saluda(nom = "Món") {</p>
					<p>    return "Hola, " + nom + "!";</p>
					<p>}</p>
					<p>let salutacio = saluda("Maria");</p>
					<p>console.log(salutacio);  // Imprimeix Hola, Maria!</p>
				</div>
				</a>

				<p>Si no passem un valor predeterminat ens mostrarà la salutació "Hola Món!"</p>
				<a href="../compilador_codi.html" target="_blank">
				<div class="exemple">
					<p>salutacio = saluda();</p>
					<p>console.log(salutacio);  // Imprimeix Hola, Món!</p>
				</div>
				</a>

				<br>

				<p>Les funcions poden tenir múltiples instruccions i realitzar tasques més complexes:</p>
				<a href="../compilador_codi.html" target="_blank">
				<div class="exemple">
					<p>function calcula_factorial(n) {</p>
					<p>    let factorial = 1;</p>
					<p>    for (let i = 1; i <= n; i++) {</p>
					<p>        factorial *= i;</p>
					<p>    }</p>
					<p>    return factorial;</p>
					<p>}</p>
					<p>let factorial_de_5 = calcula_factorial(5);</p>
					<p>console.log(factorial_de_5);  // Imprimeix 120</p>
				</div>
				</a>

                <h2>Exercicis</h2>
	
	</section>
	<script src="../Logica/verificacio.js"></script>
</body>
</html>