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
    <title>Div</title>
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
		        <h1>Div's</h1>
                <p>Els &lt;div&gt; en HTML són elements clau per a la creació de dissenys flexibles i l'organització de contingut en pàgines web. </p>
				<br>
				<ul>
					<li><h3>1.Estructura Bàsica:</h3></li>
                    <p>Un &lt;div&gt; és un element de bloc que s'utilitza per agrupar altres elements HTML i crear seccions o caixes en una pàgina web.</p>
					<p>S'utilitza com un contenidor genèric sense cap significat semàntic específic.</p>
                    <p>Exemple d'ús bàsic:</p>
                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
<pre>
&lt;div&gt;
    &lt;h1>Títol de la Secció&lt;/h1&gt;
    &lt;p>Contingut de la secció...&lt;/p&gt;
&lt;/div&gt;
</pre>
					</div>
                    </a>

					<video width="500px" controls>
						<source src="../Videos/HTML/Div/1.mp4" type="video/mp4">
					</video>

					<br>

					<li><h3>2.Estil i Classe:</h3></li>
					<p>Els &lt;div&gt; es poden estilitzar amb CSS per definir dimensions, colors de fons, marges, vores, etc.</p>
					<p>S'afegeixen classes (class) als &lt;div&gt; per aplicar estils específics o identificar-los per a l'estil o la funcionalitat de JavaScript.</p>
					<p>Exemple amb classe i estil CSS:</p>
                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
<pre>

&lt;style&gt;
    .caixa {
        width: 200px;
        height: 150px;
        background-color: #f2f2f2;
        border: 1px solid #ccc;
        padding: 10px;
        margin: 10px;
    }
&lt;/style&gt;

&lt;div&gt;
	Contingut de la caixa...
&lt;/div&gt;

</pre>
					</div>
                    </a>

					<video width="500px" controls>
						<source src="../Videos/HTML/Div/2.mp4" type="video/mp4">
					</video>

					<br>

					<li><h3>3.Estructura de Diseny:</h3></li>
					<p>Els &lt;div&gt; s'utilitzen per a crear estructures de disseny com ara columnes, caixes, seccions, panells, etc.</p>
					<p>Es poden utilitzar múltiples &lt;div&gt; per organitzar i dividir el contingut d'una pàgina web.</p>
                    <p>Exemple de disseny de columnes:</p>
                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
<pre>
&lt;div style="display: flex;"&gt;
	&lt;div style="flex: 1;"&gt;Columna 1&lt;/div&gt;
    &lt;div style="flex: 1;"&gt;Columna 2&lt;/div&gt;
    &lt;div style="flex: 1;"&gt;Columna 3&lt;/div&gt;
&lt;/div&gt;

</pre>
					</div>
                    </a>

					<video width="500px" controls>
						<source src="../Videos/HTML/Div/3.mp4" type="video/mp4">
					</video>

					<br>

                    <li><h3>4.Control del Flux de Contingut:</h3></li>
					<p>Els &lt;div&gt; ajuden a controlar el flux de contingut i a dividir-lo en unitats lògiques per millorar l'estructura i l'organització de la pàgina.</p>
					<p>Són útils per a separar i aplicar estils a parts específiques d'una pàgina web.</p>

                    <br>

					<li><h3>5.Accessibilitat i Semàntica:</h3></li>
					<p>Tot i que els &lt;div&gt; no tenen significat semàntic, és important utilitzar-los adequadament i proporcionar etiquetes semàntiques apropiades com &lt;header&gt;, &lt;main&gt;, &lt;footer&gt;, etc., per millorar l'accessibilitat i la comprensió per part dels motors de cerca i les tecnologies assistives.</p>

	</section>
	<script src="../Logica/verificacio.js"></script>
</body>
</html>