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
    <title>Variables</title>
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
			<h1>Declaració de variables</h1>
        	<p>Les variables en python serveixen per guardar informació i poder treballar amb elles més endavant.</p>
        	<div class="exemple"><p>missatge = "Hola bon día"</p></div>
        	<p>Aquí estem assignant el text "Hola bon día a la variable missatge"</p>
        	<p>Al cridar la variable <b>missatge</b> ens mostrarà el text assignat a la variable</p>
		
        	<div class="exemple">
            	<p>print(missatge)</p>
            	<p>>> Hola bon día</p>
        	</div>

			<p>De la següent manera podem assignar un valor a una variable:</p>

			<div class="exemple">
				<p>variable = “Valor”</p>
				<p>la_meva_variable = “Valor”</p>
				<p>numero = 50</p>
			</div>

			<p>A l’hora de declarar una variable hem de tenir algunes coses en compte.</p>
			<p>Quan declarem una variable no pot contenir espais, no pot començar amb un número i no poden contenir guions.</p>
			<p>Exemples de variables il·legals:</p>
			<div style="color:red;" class="exemple">
				<p>la meva variable = “Valor”</p>
				<p>la-meva-variable = “Valor”</p>
				<p>1a_meva_variable = “Valor”</p>
			</div>

			<video width="500px" controls>
				<source src="../Videos/Python/Variables/variables_incorrectes.mp4" type="video/mp4">
			</video>

			<br>

			<h2>Variables dins de funcions</h2>
			<p>Quan declarem una variable dins d’una funció aquella variable només funcionarà dins d’aquella funció.</p>
			<p>Exemple:</p>
			<div class="exemple">
				<p>def funció():</p>
				<p>    x = 34</p>
				<p>    print("La variable x és ",x)</p>
				<p>print(x)</p>
			</div>
			<p>En aquest cas només funcionarà el print dins de la funció ja que python no sap a quant equival la "x".</p>
			<h3>Variables globals</h3>
			<p>En python si volem utilitzar una variable fora d'una funció utilitzarem la sintàxis següent:</p>
			<div class="exemple">
				<p>def funció():</p>
				<p>    global x = 34</p>
				<p>print(x)</p>
			</div>


		</div>


    <div id="resposta"></div>
    
	</section>

	<script src="../Logica/verificacio.js"></script>
</body>
</html>