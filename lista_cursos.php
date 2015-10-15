<html>
<head>
	<title>Lista de  Cursos</title>
  <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</head>
<script language="JavaScript" type="text/javascript"> 

function confirmBorrar(cod_curso) 
{ 
 if (confirm("Esta seguro que desea eliminar toda la informacion de este curso?, No podra recuperarlo luego.")) 
		window.location.href = "borrar_cursos.php?cod_curso="+cod_curso; 
}

function confirmMatricular(cod_curso) 
{ 
 if (confirm("Esta seguro que desea Matricularse en el curso? ")) 
		window.location.href = "matricula_curso.php?cod_curso="+cod_curso; 
}

</script>

<body>
<?php
//Conexion al servidor y base de datos
require('config.php');

$query="SELECT * FROM cursos ORDER BY cod_curso";
$resultado=mysqli_query($link, $query);
?>
<h1 align = "center">Lista de Cursos</h1>

<table border=1 align="center">
<tr><td>Codigo del Curso</td>
	<td>Nombre del Curso</td>
	<td>Opciones</td>
</tr>
<?php

while($extraido= mysqli_fetch_array($resultado))
{
?>
<tr>
	<td><?php echo $extraido['cod_curso']?></td>
	<td><?php echo $extraido['nom_curso']?></td>
	<td>
	<input type="button" name="bedit" value="Modificar" Onclick="window.location.href = 'editar_cursos.php?cod_curso=<?php echo $extraido['cod_curso']?>'">
	<input type="button" name="bborrar" value="Borrar" Onclick="confirmBorrar(<?php echo $extraido['cod_curso'] ?>)">
	<input type="button" name="bmatricular" value="Matricular" Onclick="confirmMatricular(<?php echo $extraido['cod_curso'] ?>)">
	<input type="button" name="benseñar" value="Dictar Curso" Onclick="confirmDictar(<?php echo $extraido['cod_curso'] ?>)">
	</td>
</tr>
<?php 
}
?>
</table>
<body>
<html>