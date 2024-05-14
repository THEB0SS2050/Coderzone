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
    <title>Borders</title>
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
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Introducció</span>
					</a>
				</li>
                <li class="nav-link">
					<a href="conceptes_basics.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Conceptes Bàsics</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="colors.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Colors</span>
					</a>
				</li>
                <li class="nav-link">
					<a href="backgrounds.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Backgrounds</span>
					</a>
				</li>
                <li class="nav-link">
					<a href="borders.php">
						<i class='bx bxl-python icon'></i>
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

				<h1>Borders</h1>
                <p>A continuació, es detallen els aspectes més rellevants sobre els bordes en CSS:</p>
                <p>Propietats Bàsiques dels Borders:</p>
                <p><b>border-style:</b> Defineix el tipus de línia del border, com ara solid, dotted, dashed, double, etc.</p>
                <p><b>border-width:</b> Estableix l'amplada del border en píxels, centímetres, etc.</p>
                <p><b>border-color:</b> Defineix el color del border.</p>
                <p>Exemple:</p>
                <a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
<pre>
div {
    border-style: solid;
    border-width: 2px;
    border-color: black;
}
</pre>
					</div>
					</a>
                
				<br>

				<ul>
					<li><h3>1.Border Radial:</h3>La propietat border-radius permet arrodonir els cantons del border, creant un efecte de border radial.</li>
                    <p>Exemple:</p>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
<pre>
div {
    border-radius: 10px;
}
</pre>
					</div>
					</a>


					<video width="500px" controls>
						<source src="../Videos/CSS/Borders/1.mp4" type="video/mp4">
					</video>

					<br>

					<li><h3>2.Borders amb Múltiples Linies:</h3>Utilitzant la propietat border com a abreviatura, es poden definir totes les propietats de border en una sola línia.</li>
					<p>Exemple:</p>
                    <a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
<pre>
div {
    border: 2px dashed red;
}
</pre>
					</div>
					</a>


					<video width="500px" controls>
						<source src="../Videos/CSS/Borders/2.mp4" type="video/mp4">
					</video>

					<br>

					<li><h3>3.Borders Ambits:</h3>Els borders també poden ser aplicats individualment a cada costat de l'element (superior, inferior, esquerra, dreta) utilitzant border-top, border-bottom, border-left, border-right.</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
<pre>
div {
    border-top: 1px solid blue;
    border-bottom: 1px solid blue;
}
</pre>
					</div>
					</a>


					<video width="500px" controls>
						<source src="../Videos/CSS/Borders/3.mp4" type="video/mp4">
					</video>

					<br>

					<li><h3>4.Borders Personalitzats:</h3>Es poden personalitzar els borders amb formes i estils específics, com ara borders amb imatges o gradients utilitzant border-image, o crear efectes com ombres amb box-shadow.</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
<pre>
div {
    border-image: url('border-image.png') 30 round;
    box-shadow: 5px 5px 5px grey;
}
</pre>
					</div>
					</a>


					<video width="500px" controls>
						<source src="../Videos/CSS/Borders/4.mp4" type="video/mp4">
					</video>

                    <br>

                    <li><h3>Altres Tipus de Borders:</h3></li>
                    <ul>
                        <li><b>dotted:</b> Border amb punts.</li>
                        <li><b>dashed:</b> Border amb línies puntejades.</li>
                        <li><b>double:</b> Border doble.</li>
                        <li><b>groove:</b> Border amb efecte de baixada.</li>
                        <li><b>ridge:</b> Border amb efecte de pujada.</li>
                        <li><b>inset:</b> Border amb efecte d'inscripció.</li>
                        <li><b>outset:</b> Border amb efecte d'expansió.</li>
                    </ul>
				</ul>
                <h2>Exercicis</h2>
				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 29 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>
				<input type="text" id="respostaInput29"> <br>
				<input type="hidden" id="respostaCorrecta29" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(29)">Enviar Resposta</button>

				<div id="resposta29"></div>

				<br>

				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 30 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>
				<input type="text" id="respostaInput30"> <br>
				<input type="hidden" id="respostaCorrecta30" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(30)">Enviar Resposta</button>

				<div id="resposta30"></div>
	</section>
	<script src="../Logica/verificacio.js"></script>
</body>
</html>