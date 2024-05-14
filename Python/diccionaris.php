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
    <title>Diccionaris</title>
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

				<h1>Diccionaris</h1>
                <br>
				<p>Els diccionaris en Python són col·leccions de dades no ordenades que s'emmagatzemen amb claus i valors associats. Utilitzen una estructura clau-valor que permet accedir ràpidament als valors utilitzant la seva clau, similar a com ho faries amb una paraula en un diccionari real.</p>
				<p>Per exemple, creem un diccionari de persones i les seves edats:</p>
				<div class="exemple">
					edats = {"Maria": 25, "Joan": 30, "Laura": 22}
				</div>
				<p>En aquest exemple, "Maria", "Joan" i "Laura" són les claus, i 25, 30 i 22 són els valors associats, respectivament.</p>
				<br>
				<p>Pots accedir als valors del diccionari utilitzant les seves claus:</p>
				<div class="exemple">
					print(edats["Joan"])  # Imprimeix 30
				</div>
				<br>
				<p>També pots afegir, modificar i eliminar elements del diccionari:</p>
				<div class="exemple">
					# Afegir un nou element <br>
					edats["Pere"] = 35 <br>
					<br>
					# Modificar un valor existent <br>
					edats["Laura"] = 23 <br>
					<br>
					# Eliminar un element <br>
					del edats["Maria"] <br>
				</div>
				<br>
				<p>Pots recórrer tot el diccionari utilitzant un bucle:</p>
				<div class="exemple">
<pre>
for persona, edat in edats.items():
    print(persona, "té", edat, "anys.")
</pre>
				</div>
				<br>
				<p>Això imprimirà:</p>
				<div class="exemple">
<pre>
Joan té 30 anys.
Laura té 23 anys.
Pere té 35 anys.
</pre>
				</div>
				<p>Els diccionaris són molt útils per emmagatzemar dades relacionades i accedir-hi eficientment mitjançant les seves claus.</p>
				<br>
				<h2>Exercicis</h2>
				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 17 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>

				<input type="text" id="respostaInput17"> <br>
				<input type="hidden" id="respostaCorrecta17" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(17)">Enviar Resposta</button>

				<div id="resposta17"></div>
	</section>
	<script src="../Logica/verificacio.js"></script>
</body>
</html>