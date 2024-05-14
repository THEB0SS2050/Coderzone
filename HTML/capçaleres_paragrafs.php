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
    <title>Capçaleres i Paràgrafs</title>
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

				<h1>Capçaleres i paràgrafs</h1>
                <br>
                <h2>Capçaleres</h2>
                <p>Les capçaleres ens serveixen per mostrar títols en la nostra pàgina web.</p>
                <p>Per crear una capçalera utilitzarem la sintaxis següent:</p>
                <p>Exemple:</p>
				<a href="../compilador_codi.html" target="_blank">
                	<div class="exemple">
						&lt;h1&gt; Títol a mostrar &lt;/h1&gt;
        	    	</div>
				</a>
				<br>
				<p>Dins de les capçaleres podem trobar 6 tipus diferents de tamanys. Tenim desde la capçalera &lt;h1&gt; fins a la &lt;h6&gt;, quan més petit és el número més gran és el text de la capçalera.</p>
				<p>Exemple:</p>
				<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						&lt;h1&gt; Títol a mostrar &lt;/h1&gt; <br>
						&lt;h2&gt; Títol a mostrar &lt;/h2&gt; <br>
						&lt;h3&gt; Títol a mostrar &lt;/h3&gt; <br>
						&lt;h4&gt; Títol a mostrar &lt;/h4&gt; <br>
						&lt;h5&gt; Títol a mostrar &lt;/h5&gt; <br>
						&lt;h6&gt; Títol a mostrar &lt;/h6&gt; <br>
        	    	</div>
				</a>

				<video width="500px" controls>
						<source src="../Videos/HTML/Capçaleres/Diferents_titols.mp4" type="video/mp4">
				</video>

				<br>
				<h2>Paràgrafs</h2>
				<p>Una de les etiquetes més utilitzades son el paràgrafs. Dins dels paràgrafs introduirem el text que vulguem mostrar en la nostra pàgina web.</p>
				<p>Així és crea un paràgraf:</p>
				&lt;p&gt; Paràgraf de text &lt;p&gt;
				<br> <br>
				<p>Si intentem introduir salts de línia  dins de l’etiqueta <p> el navegador els ignora. També passa quan introduïm molts espais seguits, el navegador els igonarà automàticament.</p>
				<p>Per exemple:</p>
				<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						&lt;p&gt; <br>
						Hola, <br>
						bon <br>
						dia <br>
						&lt;/p&gt; <br>
						<pre>&lt;p&gt; Hola,      bon         dia &lt;/p&gt;</pre>
					</div>
				</a>
				<p>En el navegador veurem el paràgraf d’aquesta manera:</p>
				<p>Hola, bon dia</p>

				<video width="500px" controls>
						<source src="../Videos/HTML/Capçaleres/Espais_paragrafs.mp4" type="video/mp4">
				</video>

				<br>
				<h2>Exercicis</h2>
				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 10 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>

				<input type="text" id="respostaInput10"> <br>
				<input type="hidden" id="respostaCorrecta10" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(10)">Enviar Resposta</button>

				<div id="resposta10"></div>
			</div>
	</section>
	<script src="../Logica/verificacio.js"></script>
</body>
</html>