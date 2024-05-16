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
    <title>Colors</title>
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

				<h1>Colors</h1>
                <br>
				<ul>
					<li><h3>1.Color per Nom: </h3>Es poden especificar colors utilitzant noms predefinits com "red", "blue", "green", entre d'altres. Aquests noms es basen en una paleta estàndard de colors.</li>
					<p>Exemple:</p>
                    <a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
<pre>
h1 {
    color: blue;
}
</pre>
					</div>
					</a>


					<video width="500px" controls>
						<source src="../Videos/CSS/Colors/1.mp4" type="video/mp4">
					</video>

					<br>

					<li><h3>2.Color Hexadecimal: </h3>Els colors es poden definir utilitzant valors hexadecimals. Aquest sistema utilitza sis dígits hexadecimals per representar el color, que són dues xifres per a cada canal de color: vermell (RR), verd (GG) i blau (BB).</li>
					<p>Exemple:</p>
                    <a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
<pre>
p {
    color: #FF0000; /* Vermell */
}
</pre>
					</div>
					</a>

					<video width="500px" controls>
						<source src="../Videos/CSS/Colors/2.mp4" type="video/mp4">
					</video>

					<br>

					<li><h3>3.Color RGB:</h3>Els colors també es poden especificar utilitzant valors RGB (Red, Green, Blue). Aquests valors representen la intensitat de cada canal de color, amb valors que van de 0 a 255.</li>
					<p>Exemple:</p>
                    <a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
<pre>
span {
    color: rgb(255, 0, 0); /* Vermell */
}
</pre>
					</div>
					</a>

					<video width="500px" controls>
						<source src="../Videos/CSS/Colors/3.mp4" type="video/mp4">
					</video>

					<br>

					<li><h3>4.Color RGBA: </h3>Similar a RGB, però amb un canal addicional per a la transparència (Alpha). Els valors de l'alpha varien de 0 (totalment transparent) a 1 (totalment opac).</li>
					<p>Exemple:</p>
                    <a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
<pre>
div {
    background-color: rgba(255, 0, 0, 0.5); /* Vermell semi-transparent */
}
</pre>
					</div>
					</a>

					<video width="500px" controls>
						<source src="../Videos/CSS/Colors/4.mp4" type="video/mp4">
					</video>

                    <br>

                    <li><h3>5.Color HSL: </h3>HSL (Hue, Saturation, Lightness) és un sistema de color basat en matís, saturació i brillantor. El matís representa el color, la saturació la intensitat del color i la brillantor la lluminositat del color.</li>
                    <p>Exemple:</p>
                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
<pre>
a {
    color: hsl(0, 100%, 50%); /* Vermell */
}
</pre>
                    </div>
                    </a>

					<video width="500px" controls>
						<source src="../Videos/CSS/Colors/5.mp4" type="video/mp4">
					</video>

                    <br>

                    <li><h3>6.Color HSLA: </h3>Similar a HSL, però amb un canal addicional per a la transparència (Alpha), igual que en RGBA.</li>
                    <p>Exemple:</p>
                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
<pre>
button {
    background-color: hsla(0, 100%, 50%, 0.5); /* Vermell semi-transparent */
}
</pre>
                    </div>
                    </a>

					<video width="500px" controls>
						<source src="../Videos/CSS/Colors/6.mp4" type="video/mp4">
					</video>

                    <br>

                    <li><h3>7.Gradient Colors: </h3>CSS permet la creació de colors gradient, que transicionen entre dos o més colors. Això s'aconsegueix utilitzant la funció linear-gradient() o radial-gradient().</li>
                    <p>Exemple:</p>
                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
<pre>
header {
    background-image: linear-gradient(to right, red, blue);
}
</pre>
                    </div>
                    </a>

					<video width="500px" controls>
						<source src="../Videos/CSS/Colors/7.mp4" type="video/mp4">
					</video>

                    <br>

                    <li><h3>8.Color CurrentColor: </h3>Aquest valor fa referència al color actual del text o del fons de l'element, el que sigui aplicable. Això permet definir valors basats en altres colors de l'element.</li>
                    <p>Exemple:</p>
                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
<pre>
p {
    color: blue;
    border: 1px solid currentColor; /* Bordura blava */
}
</pre>
                    </div>
                    </a>
				</ul>
                <br>
                <h2>Exercicis</h2>
                <?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 25 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>
				<input type="text" id="respostaInput25"> <br>
				<input type="hidden" id="respostaCorrecta25" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(25)">Enviar Resposta</button>

				<div id="resposta25"></div>
	
	</section>
	<script src="../Logica/verificacio.js"></script>
</body>
</html>