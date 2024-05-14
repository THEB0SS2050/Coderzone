<?php 
session_start();

	include("connection.php");
	include("functions2.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Styles/index.css">
    <title>Índex</title>
</head>
<body>

	<nav class="sidebar tancar">
		<header>
			<div class="image-text">
				<span class="image">
					<img src="Images/logo.png" alt="logo">
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
					<a href="Python/introduccio.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Python</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="JavaScript/introduccio.php">
						<i class='bx bxl-javascript icon' ></i>
						<span class="text nav-text">JavaScript</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="HTML/html.php">
						<i class='bx bxl-html5 icon'></i>
						<span class="text nav-text">HTML</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="CSS/introduccio.php">
						<i class='bx bxl-css3 icon' ></i>
						<span class="text nav-text">CSS</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="React/react.php">
						<i class='bx bxl-react icon'></i>
						<span class="text nav-text">React</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="compilador_codi.html" target="_blank">
						<i class='bx bx-code-block icon'></i>
						<span class="text nav-text">Executor de codi</span>
					</a>
				</li>
			</ul>
		</div>

		<div class="contingut-fons">
			<li class="">
				<a href="logout.php">
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

	<section class="info">
        <div class="text">
			<br>
			<h1 style="text-align:center;">Hola, <?php echo $user_data['user_name']; ?></h1>
			<br>
			<p>Benvinguts a la nostra pàgina web privada, la llar de l´excel·lència en educació en programació!</p>
			<br>
			<p>En aquesta plataforma exclusiva, trobareu una àmplia gamma de cursos dissenyats per portar el vostre coneixement i habilitats en programació al següent nivell. Ens enorgulleix oferir-te un ambient d'aprenentatge interactiu i dinàmic, on podràs explorar els fonaments i les tècniques avançades de diferents llenguatges de programació, des de Python fins a Java i més.</p>
			<br>
			<p>El nostre compromís és oferir contingut d'alta qualitat, creat per experts en el camp i adaptat a les últimes tendències tecnològiques. Cada curs està estructurat perquè puguis avançar de manera efectiva i adquirir les competències necessàries per destacar-te al món de la tecnologia.</p>
			<br>
			<p>A més, aquí a la nostra pàgina privada, no només tindràs accés a lliçons magistrals i projectes desafiadors, sinó que també trobaràs recursos addicionals, com ara fòrums de discussió, material de referència i sessions de tutoria personalitzada per recolzar-te en cada pas del camí.</p>
			<br>
			<p>Esperem que gaudiu de la vostra experiència d'aprenentatge amb nosaltres i que aconseguiu assolir les vostres metes i aspiracions en el fascinant camp de la programació. Endavant, comença el viatge cap a l'èxit digital amb nosaltres!</p>
		</div>
	<script src="Logica/scripts.js"></script>
    
	</section>

</body>
</html>
