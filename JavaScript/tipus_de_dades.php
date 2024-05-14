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
    <title>Tipus de dades</title>
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

				<h1>Tipus de dades en JavaScript</h1>
				<br>
                <p>En JavaScript, hi ha diversos tipus de dades que són essencials per representar i manipular la informació</p>
                <p>A continuació, explicaré els tipus de dades més comuns en JavaScript i per a què serveixen:</p>
				<ul>
					<li><h3>Numbers (Nombres):</h3></li>
					<p>Funció: Emmagatzemen nombres, ja siguin enters o decimals.</p>
					<p>Exemple:</p>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						let edat = 25;, let preu = 9.99;
					</div>
					</a>

					<br>

					<li><h3>Strings (Cadenes de text):</h3></li>
					<p>Funció: Emmagatzemen seqüències de caràcters, com text.</p>
					<p>Exemple:</p>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						let nom = "John";, let missatge = 'Hello, world!';
					</div>
					</a>

					<br>

					<li><h3>Booleans (Boleans):</h3></li>
					<p>Funció: Representen valors de veritat, ja sigui true (cert) o false (fals).</p>
					<p>Exemple:</p>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						let esGran = true;, let esPetit = false;
					</div>
					</a>

					<br>

					<li><h3>Arrays (Vectors):</h3></li>
					<p>Funció: Emmagatzemen una col·lecció ordenada d'elements. Poden contenir diversos tipus de dades.</p>
					<p>Exemple:</p>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						let fruites = ["poma", "banana", "taronja"];, let números = [1, 2, 3, 4, 5];
					</div>
					</a>

					<br>

					<li><h3>Objects (Objectes):</h3></li>
					<p>Funció: Emmagatzemen col·leccions de parells clau-valor, on cada clau és única.</p>
					<p>Exemple:</p>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						let person = { name: "John", age: 30, city: "New York" };
					</div>
					</a>

					<br>

					<li><h3>Null:</h3></li>
					<p>Funció: Representa la falta d'un valor.</p>
					<p>Exemple:</p>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						let data = null;
					</div>
					</a>

					<br>

					<li><h3>Undefined:</h3></li>
					<p>Funció: S'utilitza quan una variable no té cap valor assignat.</p>
					<p>Exemple:</p>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						let variable; (en aquest cas, variable és undefined).
					</div>
					</a>
				</ul>

				<br>

                <h2>Exercicis</h2>
				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 21 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>
				<input type="text" id="respostaInput21"> <br>
				<input type="hidden" id="respostaCorrecta21" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(21)">Enviar Resposta</button>

				<div id="resposta21"></div>


				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 22 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>
				<input type="text" id="respostaInput22"> <br>
				<input type="hidden" id="respostaCorrecta22" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(22)">Enviar Resposta</button>

				<div id="resposta22"></div>


				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 23 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>
				<input type="text" id="respostaInput23"> <br>
				<input type="hidden" id="respostaCorrecta23" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(23)">Enviar Resposta</button>

				<div id="resposta23"></div>


				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 24 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>
				<input type="text" id="respostaInput24"> <br>
				<input type="hidden" id="respostaCorrecta24" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(24)">Enviar Resposta</button>

				<div id="resposta24"></div>

	</section>
	<script src="../Logica/verificacio.js"></script>
</body>
</html>