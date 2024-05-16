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
    <title>Loops for</title>
	<link rel="icon" type="image/x-icon" href="../Images/python.png">
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
						<i class='bx bxl-python icon' ></i>
						<span class="text nav-text">Introducció</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="variables.php">
						<i class='bx bxl-python icon' ></i>
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
					<a href="llistes.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Llistes</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="ifs_i_elses.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">If's i Elses</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="diccionaris.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Diccionaris</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="arrays.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Arrays</span>
					</a>
				</li>
                <li class="nav-link">
					<a href="funcions.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Funcions</span>
					</a>
				</li>
                <li class="nav-link">
					<a href="loops_while.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Loops while</span>
					</a>
				</li>
                <li class="nav-link">
					<a href="loops_for.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Loops for</span>
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

		<h1>Loops while</h1>
                <p>El bucle for en Python és una estructura de control que permet iterar sobre una seqüència d'elements, com ara una llista, una cadena de caràcters, una tupla, un diccionari o un rang numèric.</p>
                <p>És una eina potent per a repetir blocs de codi de manera controlada.</p>
				<br>
				<ul>
					<li><h3>1.Sintaxi Bàsica:</h3></li>
					<div class="exemple">
<pre>
for element in seqüència:
    # Bloc de codi que es repetirà per a cada element de la seqüència
</pre>
					</div>
					<p>element: Una variable que agafa el valor de cada element de la seqüència en cada iteració.</p>
					<p>seqüència: La seqüència d'elements sobre la qual s'iterarà (com una llista, una cadena, un rang, etc.).</p>

					<br>

					<li><h3>2.Tipus de Seqüències:</h3></li>
					<p>Llista: for element in [1, 2, 3]:</p>
					<p>Cadena: for char in "Python":</p>
					<p>Tupla: for item in (1, 2, 3):</p>
					<p>Rang numèric: for i in range(5):</p>

					<br>

					<li><h3>3.Iteració amb Funcions:</h3></li>
					<p>range(): Utilitzat per generar una seqüència de números. </p>
					<p>Exemple: for i in range(5):</p>
					<p>enumerate(): Utilitzat per obtenir l'índex i el valor de cada element en una seqüència. </p>
					<p>Exemple: for index, value in enumerate(lista):</p>
					<br>

					<li><h3>4.Instruccions break i continue:</h3></li>
					<p>break: S'utilitza per sortir del bucle for de manera prematura. Útil per interrompre l'execució del bucle basant-se en una condició.</p>
					<p>continue: S'utilitza per passar a la següent iteració del bucle sense executar el codi restant dins del bucle per a l'iteració actual.</p>

					<br>

					<li><h3>5.Exemple Bàsic:</h3></li>
					<div class="exemple">
<pre>
for i in range(5):
    print(i)
</pre>
					</div>
					<p>Aquest bucle for imprimirà els números de l'0 al 4 en la consola.</p>

					<br>

					<li><h3>6.Combinació amb Estructures de Dades:</h3></li>
					<p>Pots iterar sobre llistes, cadenes, tuples, diccionaris i altres estructures de dades utilitzant el bucle for.</p>
					<p>Exemple: for key, value in diccionari.items(): itera sobre un diccionari obtenint les claus i els valors.</p>

					<br>

					<li><h3>7.Usos Avançats:</h3></li>
					<p>El bucle for és útil per recórrer llistes i realitzar operacions en cada element, com ara càlculs, modificacions, filtratges, etc.</p>
					<p>També es pot utilitzar per generar noves llistes o transformar dades d'una seqüència a una altra mitjançant comprensions de llistes (list comprehensions).</p>
					
	</section>
	<script src="../Logica/verificacio.js"></script>
</body>
</html>