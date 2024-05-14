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
    <title>Links</title>
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

				<h1>Enllaços</h1>
                <br>
                <h3>Target</h3>
                <p>En HTML si volem crear un link a un altre document i mostrar una altra pàgina hem de fer servir l’etiqueta &lt;a&gt;.</p>
                <p>Aquesta etiqueta funciona de la següent manera:</p>
				<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
                    	&lt;a href="url"&gt; Link a una altra pàgina &lt;/a&gt;
        	    	</div>
				</a>
                <br>
				<p>Si fem click al text ens portarà a una altra pàgina, l’atribut “href=”url”” serveix per especificar la url de la pàgina que volem mostrar.</p>
                <p>L’etiqueta &lt;a&gt; té un atribut anomenat “target”, aquest atribut serveix per dir on volem que s’obri la pàgina web.</p>
                <ul>
                    <li><p><strong>”_self”:</strong> És el valor per defecte. Obre la pàgina en la mateixa finestra en la que ens trobem.</p></li>
                    <li><p><strong>“_blank”:</strong> Obre la pàgina en una finestra diferent.</p></li>
                    <li><p><strong>“_parent”:</strong> Obre la pàgina en el marc que es troba (&lt;frame&gt; o &lt;iframe&gt;).</p></li>
                    <li><p><strong>“_top”:</strong> Obre la pàgina en la part superior del navegador canviat qualsevol marc existent.</p></li>
                </ul>

				<p>Es pot donar un títol a l'etiqueta <a> per fer-ho hem d’utilitzar l’atribut title.</p>
				<p>Exemple:</p>
				&lt;a href=”fitxer.html” title=”La meva pàgina web”&gt; Enllaç a la meva pàgina web &lt;/a&gt;
				<p>Ara quan passem el ratolí per sobre de l’enllaç ens apareixerà el títol.</p>

				<h3>Enllaços a elements</h3>
				<p>Anteriorment hem vist que podem assignar IDs a les etiquetes, doncs si fem que una etiqueta &lt;a&gt; apunti a una altra etiqueta només hem d’introduir el ID de l’etiqueta dins de l’atribut “href”.</p>
				<p>Exemple:</p>
				&lt;href=”#títol”&gt; Anar al títol &lt;/a&gt;

				<h2>Exercicis</h2>
				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 13 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>

				<input type="text" id="respostaInput13"> <br>
				<input type="hidden" id="respostaCorrecta13" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(13)">Enviar Resposta</button>

				<div id="resposta13"></div>
			</div>
	</section>
	<script src="../Logica/verificacio.js"></script>
</body>
</html>