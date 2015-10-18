<?PHP
   session_start ();
?>
<HTML LANG="es">
<HEAD>
   <TITLE>Edicion de Cursos</TITLE>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <link rel="stylesheet" type="text/css" href="css/default.css">
   <script type="text/javascript" src="css/menu.js"></script>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</HEAD>
<BODY>

<?PHP
if (isset($_SESSION["usuario_valido"]))
{
require('menu.php');

if (isset($_POST['insertar']))
{
	//Cargar las variable
	$cod_curso = $_POST['cod_curso'];
	$nom_curso = $_POST['nom_curso'];
   	$desc_curso=$_POST["desc_curso"];
	$num_horas=$_POST["num_horas"];
	$costo_curso=$_POST["costo_curso"];
	$prerequisito=$_POST["prerequisito"];

	//Cargar Bases de Datos
		require('config.php');
		
         echo ("<P>Estos son los datos Modificados:</P>\n");
         echo ("<UL>\n");
         echo ("   <LI>Codigo del Curso: $cod_curso\n");
         echo ("   <LI>Nombre del Curso: $nom_curso\n");
         echo ("   <LI>Descripción del Curso: $desc_curso\n");
         echo ("   <LI>Numero de Horas: $num_horas\n");
         echo ("   <LI>Costo del Curso: $costo_curso\n");
         echo ("   <LI>Prerequisito: $prerequisito\n");
         echo ("</UL>\n");
		 
		 //Insertar datos a la Tabla de Cursos
		 
		 $query = "UPDATE cursos SET nom_curso = '$nom_curso', desc_curso = '$desc_curso', num_horas = '$num_horas', costo_curso = '$costo_curso', prerequisito = '$prerequisito' WHERE cod_curso = $cod_curso";
		 mysqli_query($link, $query) or die 
			
			("<P><center><b>No se pudo actualizar información correspondiente al curso</b><br>
			<A HREF='editar_cursos.php'>Volver</A> 		</center></P>");
		 
         echo ("<P>[ <A HREF='lista_cursos.php'>Regresar a la lista de Cursos</A> ]</P>\n");
}
else
{					
	$cod_curso=$_GET['cod_curso'];
	require('config.php');
	$query="SELECT * FROM cursos WHERE cod_curso = $cod_curso";
	$resultado=mysqli_query($link, $query);
	$extraido= mysqli_fetch_array($resultado)
?>
<H1>Modificación de datos de los Cursos</H1>

<P>Introduzca los datos que desea modificar del Curso:</P>

<FORM CLASS="borde" ACTION="editar_cursos.php" METHOD="POST">

<P><LABEL>Codigo del Curso:</LABEL>
<INPUT TYPE="TEXT" NAME="cod_curso" READONLY 
value="<?php echo $extraido['cod_curso'] ?>">
</P>

<P><LABEL>Nombre del Curso:</LABEL>
<INPUT TYPE="TEXT" NAME="nom_curso" 
value="<?php echo $extraido['nom_curso'] ?>">
</P>


<P><LABEL>Descripción del Curso:</LABEL>
<TEXTAREA NAME="desc_curso" rows = "10" cols="40"
value="<?php echo $extraido['desc_curso'] ?>">
</TEXTAREA>
</P>


<P><LABEL>Intensidad Horaria:</LABEL>
<INPUT TYPE="TEXT" NAME="num_horas"
value="<?php echo $extraido['num_horas'] ?>">
</P>

<P><LABEL>Costo del Curso:</LABEL>
<INPUT TYPE="TEXT" NAME="costo_curso"
value="<?php echo $extraido['costo_curso'] ?>">
</P>


<P><LABEL>Prerequisito:</LABEL>
<select name="prerequisito">
   
<?php 
require('config.php');

$query="SELECT * FROM asignaturas";
$result=mysqli_query($link, $query);

while($extraido=mysqli_fetch_array($result)){

   echo"<option value ='$extraido[cod_asig]'> $extraido[nom_asig]</option>";
}
?>
</select>
</P>

<P><INPUT TYPE="submit" NAME="insertar" VALUE="Modificar Informacion del Curso"></P>

</FORM>

<?PHP
}
?>
<?php
}
else
{
require('pie_pagina.php');
}
?>
</BODY>
</HTML>