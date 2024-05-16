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

				<h1>Arrays</h1>
                <p>Els "arrays" en JavaScript són estructures de dades que permeten emmagatzemar múltiples elements en una sola variable.</p>
                <p>Pots crear un array especificant els seus elements entre claudàtors i separats per comes.</p>
				<br>
				<ul>
					<li><h3>1. Declaració d'Arrays:</h3> En JavaScript, pots declarar un array assignant-li una llista de valors entre claudàtors [], separats per comes:</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p>let colors = ['red', 'green', 'blue'];</p>
					</div>
					</a>

					<p>També pots declarar un array buit i afegir-li valors posteriorment:</p>
                    <a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p>let numbers = [];</p>
                        <p>numbers.push(1);</p>
                        <p>numbers.push(2);</p>
                        <p>numbers.push(3);</p>
					</div>
					</a>

					<br>

					<li><h3>2. Accés a Elements:</h3> Pots accedir als elements d'un array utilitzant la notació d'índex, on l'índex comença per 0:</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p>let colors = ['red', 'green', 'blue'];</p>
						<p>console.log(colors[0]); // Output: 'red'</p>
						<p>console.log(colors[1]); // Output: 'green'</p>
					</div>
					</a>

					<br>

					<li><h3>3. Propietat length:</h3> La propietat length d'un array retorna el nombre d'elements que conté:</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p>let colors = ['red', 'green', 'blue'];</p>
						<p>console.log(colors.length); // Output: 3</p>
					</div>
					</a>

					<br>

					<li><h3>4. Modificació d'Elements:</h3> Pots modificar els elements d'un array assignant-hi un nou valor:</li>
					<a href="../compilador_codi.html" target="_blank">
					<div class="exemple">
						<p>let colors = ['red', 'green', 'blue'];</p>
						<p>colors[1] = 'yellow';</p>
						<p>console.log(colors); // Output: ['red', 'yellow', 'blue']</p>
					</div>
					</a>

                    <br>

                    <li><h3>5. Mètodes d'Array:</h3> JavaScript proporciona una sèrie de mètodes incorporats per manipular els arrays, com push(), pop(), shift(), unshift(), splice(), slice(), etc. Aquests mètodes permeten afegir, eliminar i modificar elements d'un array de manera eficient.</li>
                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
                        <p>let numbers = [1, 2, 3, 4, 5];</p>
                        <p>numbers.push(6); // Afegir un element al final</p>
                        <p>numbers.pop(); // Treure l'últim element</p>
                        <p>numbers.shift(); // Treure el primer element</p>
                        <p>numbers.unshift(0); // Afegir un element al principi</p>
                        <p>numbers.splice(2, 1); // Eliminar un element a partir d'un índex</p>
                    </div>
                    </a>

                    <br>

                    <li><h3>6. Iteració:</h3> Pots iterar sobre els elements d'un array utilitzant bucles for, forEach(), map(), filter(), etc.</li>
                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
                        <p>let numbers = [1, 2, 3, 4, 5];</p>
                        <p>for (let i = 0; i < numbers.length; i++) {</p>
                        <p>    console.log(numbers[i]);</p>
                        <p>}</p>
                    </div>
                    </a>

                    <br>

                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
                        <p>numbers.forEach(function(number) {</p>
                        <p>    console.log(number);</p>
                        <p>});</p>
                    </div>
                    </a>

                    <br>

                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
                        <p>let doubled = numbers.map(function(number) {</p>
                        <p>    return number * 2;</p>
                        <p>});</p>
                    </div>
                    </a>

                    <br>

                    <li><h3>7. Arrays Multidimensionals:</h3> Els arrays en JavaScript poden contenir altres arrays, creant així arrays multidimensionals.</li>
                    <a href="../compilador_codi.html" target="_blank">
                    <div class="exemple">
                        <p>let matrix = [</p>
                        <p>    [1, 2, 3],</p>
                        <p>    [4, 5, 6],</p>
                        <p>    [7, 8, 9]</p>
                        <p>];</p>
                        <p>console.log(matrix[1][1]); // Output: 5</p>
                    </div>
                    </a>
				</ul>
                <h2>Exercicis</h2>
	
	</section>
	<script src="../Logica/verificacio.js"></script>
</body>
</html>