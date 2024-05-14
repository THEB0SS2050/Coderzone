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
    <title>Salts de línea i Línies horitzontals</title>
	<link rel="icon" type="image/x-icon" href="../Images/html.png">
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
					<a href="html.php">
						<i class='bx bxl-html5 icon'></i>
						<span class="text nav-text">Que és HTML?</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="introduccio.php">
						<i class='bx bxl-html5 icon' ></i>
						<span class="text nav-text">Introducció</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="capçaleres_paragrafs.php">
						<i class='bx bxl-html5 icon' ></i>
						<span class="text nav-text">Headers/Paràgrafs</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="br_hr.php">
						<i class='bx bxl-html5 icon'></i>
						<span class="text nav-text">Salts de línea i <br> Línies horitzontals</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="classes_id.php">
						<i class='bx bxl-html5 icon' ></i>
						<span class="text nav-text">Classes i IDs</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="enllaços.php">
						<i class='bx bxl-html5 icon'></i>
						<span class="text nav-text">Enllaços</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="taules.php">
						<i class='bx bxl-html5 icon'></i>
						<span class="text nav-text">Taules</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="divs.php">
						<i class='bx bxl-html5 icon'></i>
						<span class="text nav-text">Div</span>
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

				<h1>Salts de línea i Línies horitzontals</h1>
                <br>
                <h2>Salts de línia (br)</h2>
                <p>Per realitzar salts de línia en HTML utilitzarem l’eqtuiqueta &lt;br&gt;. Aquí n’hi ha un exemple de com s’utilitza.</p>
                <p>Exemple:</p>
				<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						&lt;p&gt; Text &lt;br&gt; <br>
						sobre  &lt;br&gt; <br>
						qualsevol  &lt;br&gt; <br>
						tema. &lt;/p&gt;
        	    	</div>
				</a>
				<p>La pàgina web es visualitzarà de la següent manera:</p>
				<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						Text <br>
                        sobre <br>
                        qualsevol <br>
                        tema
        	    	</div>
				</a>
                <p>Aquesta és una de les poques etiquetes que no s’ha de tancar.</p>

				<video width="500px" controls>
						<source src="../Videos/HTML/Salts_de_linia/canvis_tema.mp4" type="video/mp4">
				</video>


                <br>
                <h2>Línies horitzontals (hr)</h2>
                <p>Normalment en HTML quan volem fer un canvi de tema podem introduir una línia que separa els diferents continguts.</p>
                <p>Això és fa amb l’etiqueta &lt;hr&gt;, aquesta etiqueta no s’ha de tancar.</p>
                <p>Exemple:</p>
                <a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
                        &lt;p&gt; Text sobre un tema &lt;/p&gt; <br>
                        &lt;hr&gt; <br>
                        &lt;p&gt; Text sobre un altre tema &lt;/p&gt;
        	    	</div>
				</a>
                <br>
                <p>En el nostre navegador veurem aixó:</p>
                <p>Text sobre un tema</p>
                <hr>
                <p>Text sobre un altre tema</p>

				<video width="500px" controls>
						<source src="../Videos/HTML/Salts_de_linia/salts	.mp4" type="video/mp4">
				</video>

                <br>
				<br>

				<h2>Exercicis</h2>
				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 14 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>

				<input type="text" id="respostaInput14"> <br>
				<input type="hidden" id="respostaCorrecta14" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(14)">Enviar Resposta</button>

				<div id="resposta14"></div>

				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 15 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>

				<input type="text" id="respostaInput15"> <br>
				<input type="hidden" id="respostaCorrecta15" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(15)">Enviar Resposta</button>

				<div id="resposta15"></div>
			</div>
	</section>
	<script src="../Logica/verificacio.js"></script>
</body>
</html>