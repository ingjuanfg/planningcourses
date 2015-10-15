<html>
<head>
	<title>Borrar Cursos</title>
	<LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</head>


<body>
<?php
//Conexion al servidor y base de datos
require('config.php');
$cod_curso = $_GET['cod_curso'];

$query_uno = "DELETE FROM cursos WHERE cod_curso = $cod_curso";
$resultado=mysqli_query($link, $query_uno);

?>

<h1align="center">El Curso ha sido borrado con Exito</h1>
<br>
<a href="lista_cursos.php">Regresar al Listado Anterior</a>

<body>
<html>