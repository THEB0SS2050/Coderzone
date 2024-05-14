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
    <title>Loops</title>
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

				<h1>Loops</h1>
                <p>Els bucles són una part fonamental de la programació i permeten executar una mateixa seqüència de codi repetidament fins que es compleixi certa condició. </p>
                <p>A continuació, parlaré en profunditat sobre els diversos tipus de bucles disponibles a JavaScript:</p>
				<br>
				<ul>
					<li><h3>1. for</h3>El bucle for s'utilitza quan es coneix el nombre exacte de vegades que vols que s'executi un bloc de codi.</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p>for (inici; condició; increment) {</p>
                        <p>  // codi a executar</p>
                        <p>}</p>
					</div>
					</a>

					<br>

					<li><h3>2. for/in</h3>El bucle for/in s'utilitza per iterar sobre les propietats d'un objecte.</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p>for (variable in objecte) {</p>
						<p>  // codi a executar</p>
						<p>}</p>
					</div>
					</a>

					<br>

					<li><h3>3. for/of</h3>El bucle for/of s'utilitza per iterar sobre els valors d'un objecte iterable com ara un Array, un Map, un Set, etc.</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p>for (variable of iterable) {</p>
						<p>  // codi a executar</p>
						<p>}</p>
					</div>
					</a>

					<br>

					<li><h3>4. while</h3>El bucle while s'utilitza quan vols que s'executi un bloc de codi mentre una condició sigui veritat.</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p>while (condició) {</p>
						<p>  // codi a executar</p>
						<p>}</p>
					</div>
					</a>

                    <br>

                    <li><h3>5. do/while</h3>El bucle do/while és similar al bucle while, però garanteix que el bloc de codi s'executi almenys una vegada, fins i tot si la condició és falsa.</li>
                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
                        <p>do {</p>
                        <p>  // codi a executar</p>
                        <p>} while (condició);</p>
                    </div>
                    </a>

                    <br>

                    <li><h3>Com s'utilitzen:</h3></li>
							<ul>
								<li>Utilitza for quan coneguis el nombre exacte de vegades que vols que s'executi el bucle.</li>
								<li>Utilitza for/in per iterar sobre les propietats d'un objecte.</li>
								<li>Utilitza for/of per iterar sobre els valors d'un objecte iterable.</li>
								<li>Utilitza while quan no coneguis el nombre exacte de vegades que vols que s'executi el bucle, sinó només la condició.</li>
								<li>Utilitza do/while quan vulguis assegurar-te que el bloc de codi s'executi almenys una vegada.</li>
							</ul>

                    <br>


                    <li><h3>Consells:</h3></li>
							<ul>
								<li>Assegura't de definir adequadament la condició de sortida per evitar bucles infinits.</li>
								<li>És important actualitzar les variables de control dins del bucle per evitar bucles buidats.</li>
							</ul>

				</ul>
                <h2>Exercicis</h2>
	
	</section>
	<script src="../Logica/verificacio.js"></script>
</body>
</html>