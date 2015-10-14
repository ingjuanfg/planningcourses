<?php

//Variables de conexion
$host = "localhost";
$username = "root";
$passwd = "";
$database = "empresa";

//Conexión al servidor
$link = mysqli_connect($host, $username, $passwd);
mysql_query("SET NAMES 'utf8'"); //Para los acentos y ñ

// Conexión a la base de datos
mysqli_select_db($link, $database);

?>
