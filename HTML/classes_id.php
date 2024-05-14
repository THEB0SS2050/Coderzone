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
    <title>Classes i Id's</title>
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

				<h1>Classes i ID's</h1>
                <br>
                <h2>Classes</h2>
                <p>A totes les etiquetes en HTML se li pot donar una Classe i un ID. Les classes i els IDs ens donen més flexibilitat i control sobre les etiquetes.</p>
                <p>S’utilitzen per assignar un valor a una etiqueta i després poder aplicar els estils que vulguem sobre aquella clase o ID.</p>
                <p>Exemple:</p>
				<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
                    	&lt;style&gt; <br>
                    	/* Estils CSS per a las clases */ <br>
                    	.text-gran { <br>
                        	font-size: 30px; <br>
                    	} <br>
                    	&lt;style&gt;
						<br>
                    	<p style="font-size: 30px;">&lt;p class=”text-gran”>Text&lt;/p&gt;</p>
                    	<p style="font-size: 30px;">&lt;p class=”text-gran”>Text&lt;/p&gt;</p>
        	    	</div>
				</a>
				<p>Les classes es poden assignar a totes les etiquetes que vulguem.</p>
				
                <h2>ID's</h2>
				<p>Els IDs s’utilitzen només per un element específic i que sigui únic. Això pot ser útil quan necessites aplicar estils o funcionalitats específiques a un únic element.</p>
				<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
                    	&lt;style&gt; <br>
						/* Estils CSS per a las clases i IDs*/ <br>
        				.títol { <br>
            				color: blue; <br>
        				} <br>
						<br>
        				.text-gran { <br>
            				font-size: 30px; <br>
						} <br>
                    	&lt;style&gt;
						<br>
						<h6 style="font-size: 30px; color: blue;">&lt;h6 class=”text-gran” id=”títol”>Text&lt;/h6&gt;</h6>
                    	<p style="font-size: 30px;">&lt;p class=”text-gran”>Text&lt;/p&gt;</p>
                    	<p style="font-size: 30px;">&lt;pclass=”text-gran”>Text&lt;/p&gt;</p>
        	    	</div>
				</a>
				<p>Per assignar més d’una classe a una etiqueta només hem d’introduir espai per separar les classes.</p>
				<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
                    	&lt;style&gt; <br>
						/* Estils CSS per a las clases i IDs*/ <br>
        				.fruites { <br>
            				font-size: 30px; <br>
        					} <br>
						<br>
        				.taronja { <br>
            				color: orange; <br>
        				} <br>
						<br>
        				.poma { <br>
            				color: red; <br> 
        				} <br>
						<br>
        				.plàtan { <br>
            				color: yellow; <br>
        				} <br>
                    	&lt;style&gt;
						<br>
						<p style="font-size: 30px; color: orange;">&lt;p class=”fruites taronja”>Text&lt;/p&gt;</p>
                    	<p style="font-size: 30px; color: red;">&lt;p class=”fruites poma”>Text&lt;/p&gt;</p>
                    	<p style="font-size: 30px; color: yellow;">&lt;p class=”fruites plàtan>Text&lt;/p&gt;</p>
        	    	</div>
				</a>

				<h2>Exercicis</h2>
				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 11 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>

				<input type="text" id="respostaInput11"> <br>
				<input type="hidden" id="respostaCorrecta11" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(11)">Enviar Resposta</button>

				<div id="resposta11"></div>

				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 12 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>

				<input type="text" id="respostaInput12"> <br>
				<input type="hidden" id="respostaCorrecta12" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(12)">Enviar Resposta</button>

				<div id="resposta12"></div>

			</div>
	</section>
	<script src="../Logica/verificacio.js"></script>
</body>
</html>