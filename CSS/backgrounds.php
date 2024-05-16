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
    <title>Backgrounds</title>
	<link rel="icon" type="image/x-icon" href="../Images/css.png">
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
						<i class='bx bxl-css3 icon'></i>
						<span class="text nav-text">Introducció</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="conceptes_basics.php">
						<i class='bx bxl-css3 icon'></i>
						<span class="text nav-text">Conceptes Bàsics</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="colors.php">
						<i class='bx bxl-css3 icon'></i>
						<span class="text nav-text">Colors</span>
					</a>
				</li>
                <li class="nav-link">
					<a href="backgrounds.php">
						<i class='bx bxl-css3 icon'></i>
						<span class="text nav-text">Backgrounds</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="borders.php">
						<i class='bx bxl-css3 icon'></i>
						<span class="text nav-text">Borders</span>
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

				<h1>Backgrounds</h1>
                <p>Les propietats de background en CSS permeten controlar l'aparença del fons d'un element HTML. Aquí tens una descripció detallada de les propietats més comunes relacionades amb el fons:</p>
                <br>
				<ul>
					<li><h3>1.background-color:</h3>Aquesta propietat estableix el color de fons d'un element.</li>
					<p>Exemple:</p>
                    <a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
<pre>
div {
    background-color: lightblue;
}
</pre>
					</div>
					</a>

					<video width="500px" controls>
						<source src="../Videos/CSS/Backgrounds/1.mp4" type="video/mp4">
					</video>

					<br>

					<li><h3>2.background-image:</h3>Permet definir una imatge com a fons de l'element. S'ha de proporcionar la ruta de la imatge.</li>
					<p>Exemple:</p>
                    <a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
<pre>
body {
    background-image: url('fons.jpg');
}
</pre>
					</div>
					</a>

					<video width="500px" controls>
						<source src="../Videos/CSS/Backgrounds/2.mp4" type="video/mp4">
					</video>

					<br>

					<li><h3>3.background-repeat:</h3>Determina com s'ha de repetir la imatge de fons si l'element és més gran que la pròpia imatge. Pot tenir valors com repeat (per defecte), repeat-x, repeat-y o no-repeat.</li>
					<p>Exemple:</p>
                    <a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
<pre>
header {
    background-image: url('fons.jpg');
    background-repeat: no-repeat;
}
</pre>
					</div>
					</a>

					<video width="500px" controls>
						<source src="../Videos/CSS/Backgrounds/3.mp4" type="video/mp4">
					</video>

                    <br>

                    <li><h3>4.background-attachment:</h3>Controla si la imatge de fons ha de ser fixa o desplaçable amb l'escorçament de la pàgina. Pot tenir valors com scroll (per defecte) o fixed.</li>
                    <p>Exemple:</p>
                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
<pre>
body {
    background-image: url('fons.jpg');
    background-attachment: fixed;
}
</pre>
                    </div>
                    </a>

					<video width="500px" controls>
						<source src="../Videos/CSS/Backgrounds/4.mp4" type="video/mp4">
					</video>

                    <br>

                    <li><h3>5.background-position:</h3>Defineix la posició inicial de la imatge de fons respecte a l'element pare. Pot ser especificada en píxels, percentatges o paraules clau com top, bottom, left o right.</li>
                    <p>Exemple:</p>
                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
<pre>
section {
    background-image: url('fons.jpg');
    background-position: center;
}
</pre>
                    </div>
                    </a>

					<video width="500px" controls>
						<source src="../Videos/CSS/Backgrounds/5.mp4" type="video/mp4">
					</video>

                    <br>

                    <li><h3>6.background: </h3>La propietat background permet definir totes les propietats de fons en una sola línia, en un ordre específic: color, image, repeat, attachment, position.</li>
                    <p>Exemple:</p>
                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
<pre>
div {
    background: lightblue url('fons.jpg') no-repeat fixed center;
}
</pre>
					</div>
					</a>

					<video width="500px" controls>
						<source src="../Videos/CSS/Backgrounds/6.mp4" type="video/mp4">
					</video>
				
				</ul>
                <br>
                <h2>Exercicis</h2>
                <?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 26 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>
				<input type="text" id="respostaInput26"> <br>
				<input type="hidden" id="respostaCorrecta26" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(26)">Enviar Resposta</button>

				<div id="resposta26"></div>

                <br>

                <?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 27 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>
				<input type="text" id="respostaInput27"> <br>
				<input type="hidden" id="respostaCorrecta27" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(27)">Enviar Resposta</button>

				<div id="resposta27"></div>

                <br>

                <?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 28 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>
				<input type="text" id="respostaInput28"> <br>
				<input type="hidden" id="respostaCorrecta28" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(28)">Enviar Resposta</button>

				<div id="resposta28"></div>
	
	</section>
	<script src="../Logica/verificacio.js"></script>
</body>
</html>