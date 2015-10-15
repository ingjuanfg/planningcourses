<html>
<head>
	<title>Lista de Empleados</title>
  <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</head>
<script language="JavaScript" type="text/javascript"> 

function confirmBorrar(cod_emple) 
{ 
 if (confirm("Esta seguro que desea ELIMINAR este empleado de la Base de Datos? No podra recuperar la informacion de nuevo.")) 
		window.location.href = "borrar_empleado.php?cod_emple="+cod_emple; 
}

</script>

<body>
<?php
//Conexion al servidor y base de datos
require('config.php');

$query="SELECT * FROM empleados ORDER BY cod_emple";
$resultado=mysqli_query($link, $query);
?>
<h1 align = "center">Lista de Empleados</h1>

<table border=1 align="center">
<tr><td>Codigo del Empleado</td>
	<td>DNI  y/o Cedula del Empleado</td>
	<td>Nombre del Empleado</td>
	<td>Cargo del Empleado</td>
	<td>Opciones</td>
</tr>
<?php

while($extraido= mysqli_fetch_array($resultado))
{
?>
<tr>
	<td><?php echo $extraido['cod_emple']?></td>
	<td><?php echo $extraido['dni']?></td>
	<td><?php echo $extraido['nombre']?></td>
	<td><?php echo $extraido['cargo']?></td>
	<td>
	<input type="button" name="bedit" value="Modificar" Onclick="window.location.href = 'editar_empleados.php?cod_emple=<?php echo $extraido['cod_emple']?>'">
	<input type="button" name="bborrar" value="Borrar" Onclick="confirmBorrar(<?php echo $extraido['cod_emple'] ?>)">
	</td>
</tr>
<?php 
}
?>
</table>
<body>
<html>