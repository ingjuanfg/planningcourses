<?PHP
   session_start ();
?>
<html>
<head>
	<title>Matricula de Cursos</title>
	 <meta name="keywords" content="">
   <meta name="description" content="">
   <link rel="stylesheet" type="text/css" href="css/default.css">
   <script type="text/javascript" src="css/menu.js"></script>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</head>


<body>
<?PHP
if (isset($_SESSION["usuario_valido"]))
{
require('menu.php');
//Conexion al servidor y base de datos
require('config.php');
$cod_curso = $_GET['cod_curso'];

    $query = "INSERT INTO usuarios (puesto) VALUES ('$cod_curso')";
    echo "Se ha registrado en el curso seleccionado con Exito.<br><br>";
         
    $result = mysqli_query($link, $query) 
    or die ("<p><center> <b>Se ha encontrado un error</center></b></p>");


?>

<h1align="center">Este pendiente del inicio del curso.</h1>
<br>
<a href="lista_cursos.php">Regresar al Listado Anterior</a>
<?php
}
else
{
require('pie_pagina.php');
}
?>
<body>
<html>