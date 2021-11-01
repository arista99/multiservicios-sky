<?php
//Conexion
$server = 'localhost';
$username = 'root';
$password = '';
$database = 'tienda_sky';
$db = mysqli_connect($server, $username, $password, $database);

mysqli_query($db, "SET NAMES 'utf8'");

?>
