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
    <title>Arrays</title>
	<link rel="icon" type="image/x-icon" href="../Images/python.png">
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
						<i class='bx bxl-python icon' ></i>
						<span class="text nav-text">Introducció</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="variables.php">
						<i class='bx bxl-python icon' ></i>
						<span class="text nav-text">Variables</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="tipus_de_dades.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Tipus de dades</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="llistes.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Llistes</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="ifs_i_elses.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">If's i Elses</span>
					</a>
				</li>
                <li class="nav-link">
					<a href="diccionaris.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Diccionaris</span>
					</a>
				</li>
                <li class="nav-link">
					<a href="arrays.php.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Arrays</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="funcions.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Funcions</span>
					</a>
				</li>
                <li class="nav-link">
					<a href="loops_while.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Loops while</span>
					</a>
				</li>
				<li class="nav-link">
					<a href="loops_for.php">
						<i class='bx bxl-python icon'></i>
						<span class="text nav-text">Loops for</span>
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

				<h1>Arrays</h1>
                <p>En Python, els "arrays" són típicament implementats com a llistes, que són col·leccions ordenades d'elements. Pots crear una llista especificant els seus elements entre claudàtors i separats per comes.</p>
				<p>Aquí tens un exemple d'una llista de números:</p>
                <div class="exemple">
                    <p>numeros = [1, 2, 3, 4, 5]</p>
				</div>
                <br>
                <p>Pots accedir als elements de la llista utilitzant índexs:</p>
                <div class="exemple">
                    <p>print(numeros[0])  # Imprimeix 1</p>
                    <p>print(numeros[2])  # Imprimeix 3</p>
				</div>
                <br>

                <p>Pots modificar els elements de la llista assignant nous valors als seus índexs:</p>
                <div class="exemple">
                    <p>numeros[1] = 10</p>
                    <p>print(numeros)  # Imprimeix [1, 10, 3, 4, 5]</p>
				</div>

                <br>

                <p>Per afegir nous elements a la llista, pots utilitzar el mètode append():</p>
                <div class="exemple">
                    <p>numeros.append(6)</p>
                    <p>print(numeros)  # Imprimeix [1, 10, 3, 4, 5, 6]</p>
				</div>

                <br>

                <p>Per eliminar elements de la llista, pots utilitzar el mètode pop() proporcionant l'índex de l'element que vols eliminar:</p>
                <div class="exemple">
                    <p>numeros.pop(2)  # Elimina l'element en l'índex 2 (el 3)</p>
                    <p>print(numeros)  # Imprimeix [1, 10, 4, 5, 6]</p>
				</div>

                <br>

                <p>Pots utilitzar bucles per recórrer els elements de la llista:</p>
                <div class="exemple">
<pre>
for numero in numeros:
    print(numero)
</pre>
				</div>
                <p>Això imprimirà cada element de la llista en una línia separada.</p>

                <br>

                <p>Les llistes en Python poden contenir elements de diferents tipus:</p>
                <div class="exemple">
                    <p>miscel·lani = [1, "dos", True, 3.14]</p>
				</div>
                <p>Pots utilitzar les llistes per emmagatzemar qualsevol tipus de dades i manipular-les segons les teves necessitats.</p>

                <h2>Exercicis</h2>
				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 17 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>

				<input type="text" id="respostaInput17"> <br>
				<input type="hidden" id="respostaCorrecta17" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(17)">Enviar Resposta</button>

				<div id="resposta17"></div>
	</section>
	<script src="../Logica/verificacio.js"></script>
</body>
</html>