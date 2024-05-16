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

				<h1>Funcions</h1>
                <br>
				<p>En Python, les funcions són blocs de codi que realitzen una tasca específica quan són cridades. Les funcions poden acceptar arguments, realitzar càlculs basats en aquests arguments i retornar resultats.</p>
				<p>Aquí tens un exemple senzill d'una funció que suma dos números:</p>
				<div class="exemple">
<pre>
def suma(a, b):
    return a + b

</pre>
				</div>

				<p>Aquesta és una funció anomenada suma que rep dos arguments (a i b) i retorna la suma d'aquests dos arguments.</p>
                <br>
				<p>Pots cridar aquesta funció amb diversos valors i utilitzar el resultat:</p>
				<div class="exemple">
<pre>
resultat = suma(3, 4)
print(resultat)  # Imprimeix 7
</pre>
				</div>

				<video width="500px" controls>
					<source src="../Videos/Python/Funcions/1.mp4" type="video/mp4">
				</video>

                <br>

				<p>Les funcions poden tenir valors per defecte per als seus arguments, que s'utilitzen quan no s'especifiquen explícitament:</p>
				<div class="exemple">
<pre>
def saluda(nom="Món"):
    return "Hola, " + nom + "!"
</pre>
				</div>

				<video width="500px" controls>
					<source src="../Videos/Python/Funcions/2.mp4" type="video/mp4">
				</video>

                <p>Aquesta és una funció anomenada saluda que saluda amb el nom especificat. Si no s'especifica cap nom, utilitza "Món" com a valor per defecte.</p>

                <div class="exemple">
<pre>
salutacio = saluda("Maria")
print(salutacio)  # Imprimeix Hola, Maria!
</pre>
				</div>

                <div class="exemple">
<pre>
salutacio = saluda()
print(salutacio)  # Imprimeix Hola, Món!
</pre>
				</div>

				<video width="500px" controls>
					<source src="../Videos/Python/Funcions/3.mp4" type="video/mp4">
				</video>


                <br>

                <p>Les funcions poden tenir múltiples instruccions i realitzar tasques més complexes:</p>
                <div class="exemple">
<pre>
def calcula_factorial(n):
    factorial = 1
    for i in range(1, n + 1):
        factorial *= i
    return factorial
</pre>
				</div>

                <p>Aquesta és una funció anomenada calcula_factorial que calcula el factorial d'un nombre donat. </p>

                <br>

                <p>Pots cridar aquesta funció per obtenir el factorial d'un nombre:</p>
                <div class="exemple">
<pre>
factorial_de_5 = calcula_factorial(5)
print(factorial_de_5)  # Imprimeix 120
</pre>
				</div>

	</section>
	<script src="../Logica/verificacio.js"></script>
</body>
</html>