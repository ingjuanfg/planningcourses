<html>
<head>
	<title>Borrar Empleados</title>
	<LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</head>


<body>
<?php
//Conexion al servidor y base de datos
require('config.php');
$cod_emple = $_GET['cod_emple'];

$query_uno = "DELETE FROM empleados WHERE cod_emple = $cod_emple";
$resultado=mysqli_query($link, $query_uno);

?>

<h1align="center">El empleado ha sido borrado de la base de datos</h1>
<br>
<a href="lista_empleados.php">Regresar al Listado de Empleados Anterior</a>

<body>
<html>