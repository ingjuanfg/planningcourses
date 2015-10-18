<?PHP
   session_start ();
?>
<HTML LANG="es">

<HEAD>
   <TITLE>Registro de Cursos</TITLE>
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
$errores["cod_curso"] = "";
$errores["nom_curso"] = "";
$errores["desc_curso"] = "";
$errores["num_horas"] = "";
$errores["costo_curso"] = "";
$errores["prerequisito"] = "";
$errores["horario"] = "";
$error = false;

if (isset($_POST['insertar']))
   {
	//Cargar las variable
	 $cod_curso = $_POST['cod_curso'];
    $nom_curso = $_POST['nom_curso'];
    $desc_curso = $_POST['desc_curso'];
    $num_horas = $_POST['num_horas'];
    $costo_curso = $_POST['costo_curso'];
    $prerequisito = $_POST['prerequisito'];
    $horario = $_POST['horario'];

   // Comprobar errores

   // Codigo del Curso
      if (empty($cod_curso) || (!is_numeric($cod_curso)))
      {
         $errores["cod_curso"] = "Se requiere codigo del curso";
         $error = true;
      }
      else
         $errores["cod_curso"] = "";


   // Nombredel curso
      if (empty($nom_curso))
      {
         $errores["nom_curso"] = "Se requiere el nombre del curso";
         $error = true;
      }
      else
         $errores["nom_curso"] = "";

   //Descripcion del curso
      if (empty($desc_curso))
      {
         $errores["desc_curso"] = "Se requiere la descripcion del curso";
         $error = true;
      }
      else
         $errores["desc_curso"] = "";

   //numero de horas
   if (empty($num_horas) || (!is_numeric($num_horas)))
      {
         $errores["num_horas"] = "Se requiere el numero de horas";
         $error = true;
      }
      else
         $errores["num_horas"] = "";

   //Costo del curso
      if (empty($costo_curso))
      {
         $errores["costo_curso"] = "Se requiere el costo del curso!";
         $error = true;
      }
      else
         $errores["costo_curso"] = "";

   //Prerequisito
      if (empty($prerequisito))
      {
         $errores["prerequisito"] = "Se requiere el Prerequisito";
         $error = true;
      }
      else
         $errores["prerequisito"] = "";

      //horario
      if (empty($horario))
      {
         $errores["horario"] = "Se requiere el Horario";
         $error = true;
      }
      else
         $errores["horario"] = "";

         }



	// Si los datos son correctos, procesar formulario
	if (isset($_POST['insertar']) && $error==false)
	{
         //Cargar la base de datos
         require('config.php');

         //Insertar datos a la tabla cursos

         $query = "INSERT INTO cursos (cod_curso, nom_curso, desc_curso, num_horas, costo_curso, prerequisito, hora_curso) VALUES ('$cod_curso', '$nom_curso','$desc_curso', '$num_horas','$costo_curso','$prerequisito', '$horario')";

        echo "El Registro del Curso ha sido Exitoso";
         
         $result = mysqli_query($link, $query) 
         or die ("<p><center> <b>No se pudo insertar la informacion del curso a la base de datos, intentelo de nuevo.</center></b></p><br>
         <A HREF 'cursos.php'>Volver</A>");

         echo ("<P>[ <A HREF='cursos.php'> Registrar otro Curso</A> ]</P>\n");
    }
else
{
?>

<H1>REGISTRO DE CURSOS</H1>

<P>Introduzca la Informacion del curso a agregar:</P>

<FORM CLASS="borde" ACTION="cursos.php" METHOD="POST">


<P><LABEL>Codigo del Curso:</LABEL>
<INPUT TYPE="TEXT" NAME="cod_curso"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$cod_curso'>\n");
   else
      print (">\n");
   if ($errores["cod_curso"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["cod_curso"] . "</SPAN>");
?>
</P>


<P><LABEL>Nombre del Curso:</LABEL>
<INPUT TYPE="TEXT" NAME="nom_curso"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$nom_curso'>\n");
   else
      print (">\n");
   if ($errores["nom_curso"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["nom_curso"] . "</SPAN>");
?>
</P>

<P><LABEL>Descripción del Curso:</LABEL>
<TEXTAREA NAME="desc_curso" rows = "10" cols="40"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$desc_curso'>\n");
   else
      print (">\n");
   if ($errores["desc_curso"] != "")
      print ( $errores["desc_curso"] );
?>
</TEXTAREA>
</P>


<P><LABEL>Intensidad Horaria:</LABEL>
<INPUT TYPE="TEXT" NAME="num_horas"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$num_horas'>\n");
   else
      print (">\n");
   if ($errores["num_horas"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["num_horas"] . "</SPAN>");
?>
</P>

<P><LABEL>Costo del Curso:</LABEL>
<INPUT TYPE="TEXT" NAME="costo_curso"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$costo_curso'>\n");
   else
      print (">\n");
   if ($errores["costo_curso"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["costo_curso"] . "</SPAN>");
?>
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

<P><LABEL>Horario a Asignar el Curso:</LABEL>
<select name="horario">
   
<?php 
require('config.php');

$query="SELECT * FROM ediciones";
$result=mysqli_query($link, $query);

while($extraido=mysqli_fetch_array($result)){

   echo"<option value ='$extraido[id_lugar]'> $extraido[lugar] - $extraido[horario] - $extraido[fecha] </option>";
}
?>
</select>
</P>


<P><INPUT TYPE="submit" NAME="insertar" VALUE="Registrar Curso"></P>

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