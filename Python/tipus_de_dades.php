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

		<nav class="navegacio">
			<ul>
				<li>Qui som?</li>
				<li>Projectes</li>
				<li>Sobre nosaltres</li>
				<li>Cursos</li>
			</ul>
		</nav>

        <div class="text">
			<h1>Tipus de dades en Python</h1>
            <p>En Python podem trobar diferent tipus de dades. Tenir diferents tipus de dades és essencial per poder representar i manipular informació de manera efectiva, eficient i comprensible.</p>
            <ul>
                <li><b>Enters (Int)</b></li>
                    <p>Son números enters que poden ser positius o negatius.</p>
                    <p>Exemples: 10, -5, 2000</p>
                    <br>
                <li><b>Flotants (Floats)</b></li>
                    <p>Representen els números decimals, tots els números amb decimals son floats.</p>
                    <p>Exemples: “5,4”, “-56,2”, “0,024”</p>
                    <br>
                <li><b>Cadenes de text (str)</b></li>
                    <p>Son seqüències de caràcters que van dins de cometes simples '' o dobles “”.</p>
                    <p>Exemples: “Hola món!”, “Python es divertit”</p>
                    <br>
                <li><b>Booleans (bool)</b></li>
                    <p>Els booleans només tenen 2 valors, “True” o “False”. Serveixen per operacions lògiques i condicions.</p>
					<br>
				<li><b>Llistes (list)</b></li>
					<p>Les llistes en python ajuden a estructurar i ordenar el contingut per al seu ús posterior.</p>
					<p>Exemples:</p>
					<p>llista_de_la_compra = [“poma”, “mandarina”, “paper”, “aigua”] </p>
					<p>números = [1, 2, 3, 4, 5, 6, 7, 8 ,9 ,10]</p>
					<br>
				<li><b>Tuples (tuple)</b></li>
					<p>Son com les llistes però son inmutables, això vol dir que no es pot modificar el contingut que aquesta conté. I en lloc d’anar amb claudàtors van amb parèntesis ().</p>
					<p>Exemples: dies_de_la_setmana = (“dilluns”, “dimarts”, “dimecres”, “dijous”, “divendres”, “dissabte”, “diumenge”)</p>
					<br>
				<li><b>Diccionaris (dict)</b></li>
					<p>Son una col·lecció d’elements  i permeten emmagatzemar qualsevol tipus d’informació. Pots emmagatzemar cadenes de text, números, decimals, llistes, altres diccionaris, etc.</p>
					<p>El que fem amb els diccionaris és donar un valor a una clau. Per crear un diccionari farem servir les claus {}.</p>
					<p>Exemple:  diccionari = { “nom”: “Pepito”, “edat”: “20”}</p>
					<br>
				<li><b>Conjunts (set)</b></li>
					<p>Els conjunts son una col·lecció d'elements desordenats i únics. Al mostrar un set per pantalla els elements s'ordenen automàticament. Per crear un set també farem servir les claus.</p>
					<p>Exemple: conjunt = {2, 5, 3, 1, 4}</p>
				</ul>
				<br>
				<video width="500px" controls>
					<source src="../Videos/Python/tipus_dades/tipus_dades.mp4" type="video/mp4">
				</video>
				<br>
				<br>
				<div class="exercicis">
				<h2>Exercicis</h2>
				<p>Aquestes preguntes s'han de respondre amb: str, int, float, bool, list, tuple, dict, set.</p>


				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 3 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>

				<input type="text" id="respostaInput3"> <br>
				<input type="hidden" id="respostaCorrecta3" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(3)">Enviar Resposta</button>

				<div id="resposta3"></div>

				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 4 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>

				<input type="text" id="respostaInput4"> <br>
				<input type="hidden" id="respostaCorrecta4" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(4)">Enviar Resposta</button>

				<div id="resposta4"></div>

				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 5 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>

				<input type="text" id="respostaInput5"> <br>
				<input type="hidden" id="respostaCorrecta5" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(5)">Enviar Resposta</button>

				<div id="resposta5"></div>

				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 6 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>

				<input type="text" id="respostaInput6"> <br>
				<input type="hidden" id="respostaCorrecta6" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(6)">Enviar Resposta</button>

				<div id="resposta6"></div>

				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 7 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>

				<input type="text" id="respostaInput7"> <br>
				<input type="hidden" id="respostaCorrecta7" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(7)">Enviar Resposta</button>

				<div id="resposta7"></div>

				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 8 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>

				<input type="text" id="respostaInput8"> <br>
				<input type="hidden" id="respostaCorrecta8" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(8)">Enviar Resposta</button>

				<div id="resposta8"></div>

				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 9 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>

				<input type="text" id="respostaInput9"> <br>
				<input type="hidden" id="respostaCorrecta9" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(9)">Enviar Resposta</button>

				<div id="resposta9"></div>
				</div>
        </div>

    
	</section>

	<script src="../Logica/verificacio.js"></script>
</body>
</html>