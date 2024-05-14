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
    <title>Condicions</title>
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

				<h1>If’s i else</h1>
                <p>Els condicionals if i else són elements clau en JavaScript, permetent al programador prendre decisions basades en certes condicions.</p>
                <p>Aquí tens una explicació detallada sobre com funcionen els if i else en JavaScript:</p>
				<br>
				<ul>
					<li><h3>1. L'estructura dels if's i else:</h3></li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p>if (condició) {</p>
                        <p>    // Bloc de codi que s'executarà si la condició és certa</p>
                        <p>} else {</p>
                        <p>    // Bloc de codi que s'executarà si la condició és falsa</p>
                        <p>}</p>
					</div>
					</a>

					<br>

					<li><h3>2. Comprovar una sola condició:</h3> </li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p>let edat= 20;</p>
						<p>if (edat >= 18) {</p>
						<p>    console.log("És major d'edat");</p>
                        <p>} else {</p>
                        <p>    console.log("És menor d'edat");</p>
                        <p>}</p>
					</div>
					</a>

					<video width="500px" controls>
						<source src="../Videos/JavaScript/Ifs_i_elses/2.mp4" type="video/mp4">
					</video>

					<br>

					<li><h3>3. Comprovar múltiples condicions amb else if:</h3> Si una condició no es compleix podem comprovar una altra condició</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p>let puntuacio= 75;</p>
						<p>if (puntuacio >= 90) {</p>
                        <p>    console.log("Excel·lent");</p>
                        <p>} else if (puntuacio >= 70) {</p>
                        <p>    console.log("Bé");</p>
                        <p>} else if (puntuacio >= 50) {</p>
                        <p>    console.log("Passat");</p>
                        <p>} else {</p>
                        <p>    console.log("Reprovat");</p>
                        <p>}</p>
					</div>
					</a>

					<video width="500px" controls>
						<source src="../Videos/JavaScript/Ifs_i_elses/3.mp4" type="video/mp4">
					</video>

					<br>

					<li><h3>4. Operadors de Comparació:</h3>Pots utilitzar diversos operadors de comparació com ==, ===, !=, !==, <, <=, >, >= per avaluar una condició.</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p>let num = 10;</p>
						<p>if (num === 10) {</p>
						<p>    console.log("El número és igual a 10");</p>
						<p>}</p>
					</div>
					</a>

					<video width="500px" controls>
						<source src="../Videos/JavaScript/Ifs_i_elses/4.mp4" type="video/mp4">
					</video>

                    <br>

                    <li><h3>5. Operadors Lògics:</h3>Pots utilitzar els operadors lògics && (AND), || (OR), ! (NOT) per combinar múltiples condicions.</li>
                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
                        <p>let edat= 25;</p>
                        <p>let teCarnet= true;</p>
                        <p>if (edat >= 18 && teCarnet) {</p>
                        <p>    console.log("Pot conduir");</p>
                        <p>}</p>
                    </div>
                    </a>

					<video width="500px" controls>
						<source src="../Videos/JavaScript/Ifs_i_elses/5.mp4" type="video/mp4">
					</video>

                    <br>

                    <li><h3>6. Condicionals Anidats:</h3>Pots posar condicionals dins d'altres condicionals per avaluacions més complexes.</li>
                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
                        <p>let temperatura= 25;</p>
                        <p>let plou= true;</p>
                        <p>if (temperatura > 20) {</p>
                        <p>    if (plou) {</p>
						<p>        console.log("Porta un paraigua");</p>
						<p>    } else {</p>
						<p>        console.log("Gaudeix del dia");</p>
						<p>    }</p>
						<p>}</p>
                    </div>
                    </a>

					<video width="500px" controls>
						<source src="../Videos/JavaScript/Ifs_i_elses/6.mp4" type="video/mp4">
					</video>

                    <br>

                    <li><h3>7. Els Operadors Ternaris:</h3>També pots utilitzar l'operador ternari ? : per escriure condicionals d'una manera més concisa.</li>
                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
                        <p>let age = 20;</p>
                        <p>let message = (age >= 18) ? "Major d'edat" : "Menor d'edat";</p>
                        <p>console.log(message);</p>
                    </div>
                    </a>

					<video width="500px" controls>
						<source src="../Videos/JavaScript/Ifs_i_elses/7.mp4" type="video/mp4">
					</video>
				</ul>

				<br>
				<br>

                <h2>Exercicis</h2>
				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 32 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>
				<input type="text" id="respostaInput32"> <br>
				<input type="hidden" id="respostaCorrecta32" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(32)">Enviar Resposta</button>

				<div id="resposta32"></div>
	
	</section>
	<script src="../Logica/verificacio.js"></script>
</body>
</html>