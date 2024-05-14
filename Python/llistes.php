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
    <title>Llistes</title>
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
					<a href="arrays.php.php">
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
			<h1>Llistes, tuples i sets</h1>
        	<p>Com hem mencionat anteriorment en “Tipues de dades”, les llistes, les tuples i els sets en python ajuden a estructurar i ordenar el contingut per al seu ús posterior.</p>
            <p>En els exemple següents utilitzem llistes però també serveix per a tuples i sets</p>
			<p>Exemples: </p>
        	<div class="exemple">
                <p>llista_de_la_compra = [“poma”, “mandarina”, “paper”, “aigua”] </p>
                <p>números = [1, 2, 3, 4, 5, 6, 7, 8 ,9 ,10]</p>
            </div>

        	<p>Les llistes tenen moltes utilitats i es poden utilitzar de moltes maneres diferents, a continuació mostrarem com funcionen:</p>
        	<p>Si desitgem mostrar una llista ho farem de la següent manera:</p>
		
        	<div class="exemple">
            	<p>llista_de_la_compra = [“poma”, “mandarina”, “paper”, “aigua”] </p>
            	<p>print(llista_de_la_compra)</p>
        	</div>

			<p>Per determinar quants elements té una llista podem fer servir la funció “len()”.</p>
            <p>Exemple:</p>

			<div class="exemple">
				<p>llista_de_la_compra = [“poma”, “mandarina”, “paper”, “aigua”] </p>
				<p>print(len(llista_de_la_compra))</p>
			</div>
            <p>D'aquesta manera podrem veure el número d'elements que té una llista</p>

            <br>

            <h2>Accedir als elements d’una llista</h2>
            <p>En Python ens trobarem en situacions en les que vulguem seleccionar un únic element d’una llista, a continuació mostrarem com.</p>
            <p>Per seleccionar un únic element farem això:</p>
            <div class="exemple">
				<p>llista_de_la_compra = [“poma”, “mandarina”, “paper”, “aigua”] </p>
				<p>print(llista_de_la_compra[1])</p>
			</div>

            <p>En aquest exemple estem mostrant l’element número 1 de la llista.</p>
            <p>En Python les llistes comencen per 0 això vol dir que poma té assignat el número 0, la mandarina el 1, el paper el 2 i l’aigua el 3.</p>

            <br>

            <p>També existeix una altra forma de indexar els elements, aquesta forma és la indexació negativa.</p>
            <p>Si volem seleccionar els elements començant desde el final escriurem la posició de l’element començant per el final amb un “-” davant del número.</p>
            <p>Exemple:</p>
            <div class="exemple">
				<p>llista_de_la_compra = [“poma”, “mandarina”, “paper”, “aigua”] </p>
				<p>print(llista_de_la_compra[-1])</p>
			</div>
            <p>En aquest cas ens mostrarà l'últim element que és l’aigua.</p>

			<br>

            <p>Per seleccionar més d’un element a la vegada escriurem el número del primer element que volem mostrar “:” i el número de l'últim que volem mostrar.</p>
            <p>Exemple:</p>
            <div class="exemple">
				<p>llista_de_la_compra = [“poma”, “mandarina”, “paper”, “aigua”] </p>
				<p>print(llista_de_la_compra[1:3])</p>
			</div>
            <p>Python en mostrarà les paraules mandarina, paper i aigua.</p>

            <br>

            <p>Si volem mostrar fins a un element determinat ho farem de la següent manera:</p>
            <div class="exemple">
				<p>llista_de_la_compra = [“poma”, “mandarina”, “paper”, “aigua”] </p>
				<p>print(llista_de_la_compra[:2])</p>
			</div>

            <br>

            <p>En cas de que vulguem mostrar la llista a partir d’un element primer posarem els “:” i després el número.</p>
            <div class="exemple">
				<p>llista_de_la_compra = [“poma”, “mandarina”, “paper”, “aigua”] </p>
				<p>print(llista_de_la_compra[1:])</p>
			</div>
            <p>Així mostrarem tots els elements a partir de la mandarina.</p>
		</div>


    <div id="resposta"></div>
    
	</section>

	<script src="../Logica/verificacio.js"></script>
</body>
</html>