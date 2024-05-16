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
    <title>Condicions</title>
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
					<a href="arrays.php">
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

				<h1>If's i Elses</h1>
                <br>
				<p>Condicions lògiques matemàtiques en Python:</p>
				<div class="exemple">
					Igual: x == y <br>
					No és igual: x!= y <br>
					Menor que: x < y <br>
					Menor o igual que: x <= y <br>
					Major que: x > y <br>
					Major o igual que: x >= y
				</div>

				<p>Aquests tipus de condicions normalment es fan servir en les “declaracions if”.</p>
				<p>Crearem un declaració if de la següent manera:</p>
				<div class="exemple">
<pre>
x = 5
y = 18
if y > x:
	print(“y és més gran que x”)
</pre>
				</div>
				<p>Així li diem a Python, si y és més gran que x mostra al terminal el missatge “y és més gran que x”.</p>
				<br>
				<p>No sempre és podrà complir la nostra condició, aquí és on entra la funció “else”. </p>
				<p>Amb “else” li direm a Python si la condició no es compleix llavors fes això mateix.</p>
				<div class="exemple">
<pre>
x = 5
y = 18
if y > x:
	print(“y és més gran que x”)
else:
	print(“x és més gran que y”)
</pre>
				</div>

				<p>Aquí li diem a Python si y és més gran que x mostra aquest text i si y no és més gran que x mostra aquest altre text.</p>
				<br>
				<p>També podem dir si no es compleix la condició 1 comprova la condició 2 i si no fes això. Per fer això utilitzarem la funció “elif”.</p>
				<p>Exemple:</p>
				<div class="exemple">
<pre>
x = 5
y = 18
if y > x:
	print(“y és més gran que x”)
elif x > y:
	print(“x és més gran que y”)
else:
	print(“son igual de grans”)
</pre>
				</div>

				<video width="500px" controls>
					<source src="../Videos/Python/Ifs_i_elses/AND.mp4" type="video/mp4">
				</video>

				<br>

				<h3>AND</h3>
				<p>Podem fer servir el paràmetre “and” per comprovar més d’una condició a la vegada.</p>
				<p>Exemple:</p>
<div class="exemple">
<pre>
x = 46
y = 94
z = 254
if x < y and z > x:
	print(“Les dues condicions son certes”)
</pre>
</div>

				<video width="500px" controls>
					<source src="../Videos/Python/Ifs_i_elses/AND.mp4" type="video/mp4">
				</video>

				<br>

				<h3>OR</h3>
				<p>Amb “or” comprovem si és compleix una de les condicions.</p>
				<p>Exemple:</p>
<div class="exemple">
<pre>
x = 46
y = 94
z = 254
if x < y or z < x:
	print(“Almenys una de les condicions és compleix”)
</pre>
</div>

				<video width="500px" controls>
					<source src="../Videos/Python/Ifs_i_elses/OR.mp4" type="video/mp4">
				</video>

				<br>
				<h3>NOT</h3>
				<p>Amb “not” diem si la condició no és certa fes això…</p>
				<p>Exemple:</p>
<div class="exemple">
<pre>
x = 46
y = 94
if not x > y:
	print(“x no és més gran que y”)
</pre>
</div>

				<video width="500px" controls>
					<source src="../Videos/Python/Ifs_i_elses/NOT.mp4" type="video/mp4">
				</video>

				<br>

				<h3>Un If dintre d’un altre If</h3>
				<p>Exemple:</p>
<div class="exemple">
<pre>
x = 15

if x > 5:
	print("Més gran que 5,")
	if x > 10:
    	print("y més gran que 10!")
	else:
		print("pero no més gran que 10!")
</pre>
</div>

				<video width="500px" controls>
					<source src="../Videos/Python/Ifs_i_elses/if_dins_if.mp4" type="video/mp4">
				</video>

				<br>
				<h3>Pass</h3>
				<p>Les condicions “If” no poden estar buides per això existeix la declaració “pass”. Això bàsicament li diu a Python que no faci res. D’aquesta manera Python no ens mostrarà ningún error.</p>
				<p>Exemple:</p>
				<div class="exemple">
<pre>
x = 5
y = 18
if y > x:
	pass
</pre>
</div>

				<video width="500px" controls>
					<source src="../Videos/Python/Ifs_i_elses/Pass.mp4" type="video/mp4">
				</video>

				<br>
				<br>

				<h2>Exercicis</h2>
				<?php
				$sql = "SELECT pregunta, resposta FROM preguntes WHERE id = 16 LIMIT 1;";
				$result = mysqli_query($con, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) {
    				$row = mysqli_fetch_assoc($result);
    				$pregunta = $row['pregunta'];
    				$resposta_correcta = $row['resposta'];
    				echo $pregunta . "<br>";
				}
				?>

				<input type="text" id="respostaInput16"> <br>
				<input type="hidden" id="respostaCorrecta16" value="<?php echo $resposta_correcta; ?>">
				<button type="submit" onclick="mostrarResposta(16)">Enviar Resposta</button>

				<div id="resposta16"></div>
	</section>
	<script src="../Logica/verificacio.js"></script>
</body>
</html>