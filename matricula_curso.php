<html>
<head>
	<title>Matricula de Cursos</title>
	<LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</head>


<body>
<?php
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

<body>
<html>