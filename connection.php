<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_register";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("Connexió fallida!");
}
