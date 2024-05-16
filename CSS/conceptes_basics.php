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
    <title>Conceptes Bàsics</title>
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

				<h1>Conceptes Bàsics</h1>
                <p>Els estils en CSS es poden aplicar de diverses maneres, permetent als desenvolupadors web controlar l'aparença i l'estil del contingut HTML.</p>
                <p>Aquí tens algunes de les maneres més comunes de fer-ho:</p>
				<br>
				<ul>
					<li><h3>1.Selectors (Selectors): </h3>Utilitzant selectors, pots especificar els elements HTML als quals vols aplicar un conjunt específic de regles CSS. Hi ha diversos tipus de selectors, com selectors d'etiquetes, selectors d'identificadors, selectors de classes i selectors d'atributs.</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
<pre>
/* Selector d'etiqueta */
h1 {
    color: blue;
}

/* Selector d'identificador */
#header {
    background-color: gray;
}

/* Selector de classe */
.button {
    background-color: #4CAF50;
    color: white;
}
</pre>
					</div>
					</a>

					<br>

					<li><h3>2.Regles (Rules): </h3>Les regles CSS estan formades per un selector i un bloc de propietats i valors que s'aplicaran als elements seleccionats. Les regles s'apliquen als elements HTML que coincideixen amb el selector especificat.</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
                    <pre>
body {
    font-family: Arial, sans-serif;
    background-color: #f0f0f0;
}

</pre>
					</div>
					</a>

					<br>

					<li><h3>3.Fitxers Externs (External Files): </h3>És comú emmagatzemar els estils CSS en fitxers externs amb extensió .css i referenciar-los des de les pàgines HTML. Això permet reutilitzar els mateixos estils en múltiples pàgines web i mantenir una estructura de codi més neta i organitzada.</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p> &lt;link rel="stylesheet" type="text/css" href="styles.css"&gt; </p>
					</div>
					</a>

					<br>

					<li><h3>4.Estils en Línia (Inline Styles): </h3>També pots aplicar estils directament als elements HTML utilitzant l'atribut style. Aquesta és una manera ràpida de proporcionar estils específics per a un element concret, però pot dificultar la mantenibilitat del codi en comparació amb l'ús de selectors i regles CSS externes.</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p> &lt;div style="color: red; font-size: 18px;"&gt;Contingut amb estils en línia&lt;/div&gt; </p>
					</div>
					</a>

                    <br>

                    <li><h3>5.Pseudo-Selectors (Pseudo-selectors): </h3>Aquests selectors s'utilitzen per seleccionar elements en estats específics o parts específiques dels elements, com ara enllaços no visitats, elements enfocats, hovers, entre d'altres.</li>
                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
<pre>
/* Pseudo-selector d'enfocament */
input:focus {
    border-color: blue;
}

/* Pseudo-selector de visitat */
a:visited {
    color: purple;
}

/* Pseudo-selector de passar per sobre */
a:hover {
    text-decoration: underline;
}

</pre>
                    </div>
                    </a>
				</ul>

				<br>
				
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