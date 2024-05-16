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
    <title>Loops While</title>
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
                <p>El bucle while en Python es una estructura de control que es utilitza per repetir un bloc de codi mentre una condició sigui certa. A diferència del bucle for, que s'utilitza quan es coneix el nombre d'iteracions, el bucle while s'utilitza quan no es coneix de manera precisa el nombre de repeticions que es faran. </p>
                <p>Els bucles while funcionen de la següent manera:</p>
				<br>
				<ul>
					<li><h3>1.Sintaxi Bàsica:</h3></li>
					<div class="exemple">
<pre>
while condició:
    # Bloc de codi que es repetirà mentre la condició sigui certa
</pre>
					</div>
					<p>La clau és assegurar-se que la condició esdevingui falsa en algun moment per evitar un bucle infinit.</p>

					<br>

					<li><h3>2.Execució del Bucle:</h3></li>
					<p>Primer, es verifica la condició. Si la condició és certa (True), s'executa el bloc de codi dins del bucle.</p>
					<p>Després d'executar el bloc de codi, es torna a verificar la condició.</p>
					<p>Aquest procés es repeteix fins que la condició sigui falsa (False), moment en què el bucle while finalitza i el control passa a la següent instrucció després del bucle.</p>

					<br>

					<li><h3>3.Exemple Bàsic:</h3> Pots accedir a les propietats d'un objecte utilitzant la notació de punt (.) o la notació de claudàtor ([ ]).</li>
					<div class="exemple">
<pre>
i = 0
while i < 5:
    print(i)
    i += 1
</pre>
					</div>
					<p>En aquest exemple, el bucle while s'executarà mentre el valor de i sigui menor que 5. En cada iteració, es mostra el valor de i i s'incrementa en 1. El bucle es deté quan i arriba a 5.</p>

					<br>

					<li><h3>4.Bucles Infinits:</h3></li>
					<p>És important tenir cura de no crear bucles infinitos amb el bucle while. Això es pot donar si la condició mai esdevé falsa, cosa que farà que el bucle s'executi de manera indefinida.</p>
					<p>Per evitar bucles infinitos, assegura't que la condició del bucle while esdevingui falsa en algun moment durant l'execució del programa.</p>

					<br>

					<li><h3>5.Usos Avançats:</h3></li>
					<p>El bucle while és útil per a la implementació de lògica que requereix repetir fins que una condició específica sigui certa o falsa.</p>
					<p>Pots utilitzar expressions booleanes complexes com a condicions del bucle while, aprofitant operadors lògics com and, or, not, etc.</p>

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
	</section>
	<script src="../Logica/verificacio.js"></script>
</body>
</html>