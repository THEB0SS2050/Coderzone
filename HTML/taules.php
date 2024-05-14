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
    <title>Taules</title>
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
		        <h1>Taules</h1>
                <p>Les taules en HTML són elements clau per a l'organització i la presentació de dades en format tabular</p>
				<br>
				<ul>
					<li><h3>1.Estructura Bàsica:</h3></li>
                    <p>Una taula en HTML es defineix utilitzant l'element &lt;table&gt; i conté cel·les organitzades en files (&lt;tr&gt;) i columnes (&lt;td&gt; per cel·les de dades i &lt;th&gt; per cel·les de capçalera).</p>
					<p>Exemple d'una taula bàsica:</p>
                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
<pre>
&lt;table&gt;
    &lt;tr&gt;
        &lt;th&gt;Columna 1&gt;&lt;/th&gt;
        &lt;th&gt;Columna 2&gt;&lt;/th&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Dada 1&gt;&lt;/td&gt;
        &lt;td&gt;Dada 2&gt;&lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;
</pre>
					</div>
                    </a>

					<video width="500px" controls>
						<source src="../Videos/HTML/Taules/1.mp4" type="video/mp4">
					</video>

					<br>

					<li><h3>2.Capçalera de Taula:</h3></li>
					<p>Les cel·les de capçalera (<th>) s'utilitzen per a títols de columnes o files.</p>
					<p>Són més grans i en negreta per defecte.</p>
					<p>Exemple:</p>
                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
<pre>
&lt;table&gt;
    &lt;tr&gt;
        &lt;th&gt;Producte&gt;&lt;/th&gt;
        &lt;th&gt;Preu&gt;&lt;/th&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;Ordinador&gt;&lt;/td&gt;
        &lt;td&gt;1000€&gt;&lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;
</pre>
					</div>
                    </a>

					<video width="500px" controls>
						<source src="../Videos/HTML/Taules/2.mp4" type="video/mp4">
					</video>

					<br>

					<li><h3>3.Cel·les de Dades:</h3></li>
					<p>Les cel·les de dades (&lt;td&gt;) s'utilitzen per a mostrar valors o informació.</p>
					<p>Es col·loquen dins de files (&lt;tr&gt;) en la taula.</p>
                    <p>Exemple:</p>
                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
<pre>
&lt;table&gt;
    &lt;tr&gt;
        &lt;td&gt;John&gt;&lt;/td&gt;
        &lt;td&gt;Doe&gt;&lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;
</pre>
					</div>
                    </a>

					<video width="500px" controls>
						<source src="../Videos/HTML/Taules/3.mp4" type="video/mp4">
					</video>

					<br>

                    <li><h3>4.Espaiat i Amplada de Cel·les:</h3></li>
					<p>Es pot controlar l'espaiat horitzontal i vertical entre les cel·les amb l'atribut cellspacing i cellpadding de la taula.</p>
					<p>Es pot establir l'amplada de les cel·les amb l'atribut width.</p>
                    <p>Exemple:</p>
                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
<pre>
&lt;table  cellspacing="10" cellpadding="5"&gt;
    &lt;tr&gt;
        &lt;td width="150"&gt;John&gt;&lt;/td&gt;
        &lt;td width="100"&gt;Doe&gt;&lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;
</pre>
					</div>
                    </a>

					<video width="500px" controls>
						<source src="../Videos/HTML/Taules/4.mp4" type="video/mp4">
					</video>

                    <br>

					<li><h3>5.Combinació de Cel·les:</h3></li>
					<p>Es pot combinar múltiples cel·les en una sola cel·la utilitzant l'atribut colspan o rowspan.</p>
					<p><strong>colspan</strong> combina cel·les horitzontalment i rowspan verticalment.</p>
                    <p>Exemple:</p>
                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
<pre>
&lt;table&gt;
    &lt;tr&gt;
        &lt;td colspan="2"&gt;Títol&gt;&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
        &lt;td&gt;John&gt;&lt;/td&gt;
        &lt;td&gt;Doe&gt;&lt;/td&gt;
    &lt;/tr&gt;
&lt;/table&gt;
</pre>
					</div>
                    </a>

					<video width="500px" controls>
						<source src="../Videos/HTML/Taules/5.mp4" type="video/mp4">
					</video>

                    <br>

                    <li><h3>6.Accessibilitat i Semàntica:</h3></li>
                    <p>És important utilitzar les taules de manera semàntica per a una millor accessibilitat i comprensió per part dels lectors de pantalla i altres tecnologies assistives.</p>
                    <p>Utilitza &lt;thead&gt;, &lt;tbody&gt;, i &lt;tfoot&gt; per a organitzar capçaleres, cos i peus de la taula respectivament.</p>

	</section>
	<script src="../Logica/verificacio.js"></script>
</body>
</html>