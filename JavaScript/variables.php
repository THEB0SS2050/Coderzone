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
    <title>Variables</title>
	<link rel="icon" type="image/x-icon" href="../Images/js.png">
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
						<i class='bx bxl-javascript icon' ></i>
						<span class="text nav-text">Introducció</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="variables.php">
						<i class='bx bxl-javascript icon' ></i>
						<span class="text nav-text">Variables</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="tipus_de_dades.php">
						<i class='bx bxl-javascript icon' ></i>
						<span class="text nav-text">Tipus de dades</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="funcions.php">
						<i class='bx bxl-javascript icon' ></i>
						<span class="text nav-text">Funcions</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="arrays.php">
						<i class='bx bxl-javascript icon' ></i>
						<span class="text nav-text">Arrays</span>
					</a>
				</li>
                <li class="nav-link">
					<a href="objectes.php">
						<i class='bx bxl-javascript icon' ></i>
						<span class="text nav-text">Objectes</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="loops.php">
						<i class='bx bxl-javascript icon' ></i>
						<span class="text nav-text">Loops</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="ifs_i_elses.php">
						<i class='bx bxl-javascript icon' ></i>
						<span class="text nav-text">If's i Else</span>
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

				<h1>Variables</h1>
                <p>Les variables en JavaScript són similars a les de Python en el sentit que poden emmagatzemar informació que es pot utilitzar més endavant. </p>
                <p>Les variables es poden declarar de 4 maneres diferents:</p>
				<br>
				<ul>
					<li><h3>1.Declaració automàtica:</h3> Això passa quan utilitzem una variable sense haver-la declarat prèviament.</li>
					<p>Per exemple:</p>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p>x = 5;</p>
						<p>y = 6;</p>
						<p>z = x + y;</p>
					</div>
					</a>
					<p>En aquest cas, les variables x, y i z són declarades automàticament quan se'ls assignen valors.</p>
					<br>
					<li><h3>2.Utilitzant var:</h3> Abans del 2015, el mètode més comú per declarar variables era utilitzant var.</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p>var x = 5;</p>
						<p>var y = 6;</p>
						<p>var z = x + y;</p>
					</div>
					</a>
					<p>En aquest cas, les variables x, y i z són declarades automàticament quan se'ls assignen valors.</p>

					<br>

					<li><h3>3.Utilitzant let:</h3> A partir del 2015, es va afegir la paraula clau let per declarar variables.</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p>let x = 5;</p>
						<p>let y = 6;</p>
						<p>let z = x + y;</p>
					</div>
					</a>
					<p>En aquest cas, les variables x, y i z són declarades automàticament quan se'ls assignen valors.</p>
					<br>
					<li><h3>4.Utilitzant const:</h3> const es fa servir per declarar variables constants que no canviaran de valor.</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p>const x = 5;</p>
						<p>const y = 6;</p>
						<p>const z = x + y;</p>
					</div>
					</a>
					<p>Els variables constants no poden ser modificades després de la seva assignació. </p>
				</ul>
				<br>
				<p>Ara,fem una barreja:</p>
				<a href="../compilador_codi.html" target="_blank">
				<div class="exemple">
					<p>const preu1 = 5;</p>
					<p>const preu2 = 6;</p>
					<p>let total = preu1 + preu2;</p>
				</div>
				</a>
				<p>En aquest exemple, preu1 i preu2 són constants i total és una variable que pot ser modificada.</p>
				<br>
				<p><strong>Quan hauríem d'utilitzar var, let o const?</strong></p>
				<ul>
					<li>Utilitza const sempre que el valor no hagi de canviar.</li>
					<li>Utilitza const sempre que el tipus de variable no hagi de canviar (per exemple, arrays i objectes).</li>
					<li>Utilitza let només si no pots utilitzar const.</li>
					<li>Utilitza var només si has de donar suport a navegadors antics.</li>
				</ul>


                <br>

                <h3>Variables dins de funcions:</h3>
                <p>Quan declares una variable dins d'una funció en JavaScript, aquesta variable només és accessible dins d'aquella funció.</p>
                <p>Pots assignar el valor 1 a la variable x com segueix:</p>
				<a href="../compilador_codi.html" target="_blank">
                <div class="exemple">
<pre>
function funcio() {
    let variable = "Valor";
}
</pre>
				</div>
				</a>

				<br>

                <h2>Exercicis</h2>
				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 18 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>
				<input type="text" id="respostaInput18"> <br>
				<input type="hidden" id="respostaCorrecta18" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(18)">Enviar Resposta</button>

				<div id="resposta18"></div>

				<br>

				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 19 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>
				<input type="text" id="respostaInput19"> <br>
				<input type="hidden" id="respostaCorrecta19" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(19)">Enviar Resposta</button>

				<div id="resposta19"></div>

				<br>

				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 20 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>
				<input type="text" id="respostaInput20"> <br>
				<input type="hidden" id="respostaCorrecta20" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(20)">Enviar Resposta</button>

				<div id="resposta20"></div>
	</section>
	<script src="../Logica/verificacio.js"></script>
</body>
</html>