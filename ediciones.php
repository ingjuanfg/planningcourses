<HTML LANG="es">

<HEAD>
   <TITLE>Registro de Lugares para Cursos</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</HEAD>

<BODY>

<?PHP
$errores["lugar"] = "";
$errores["fecha"] = "";
$errores["horario"] = "";
$error = false;

if (isset($_POST['insertar']))
   {

	//Cargar las variable
	 $lugar = $_POST['lugar'];
    $fecha = $_POST['fecha'];
    $horario = $_POST['horario'];
   // Comprobar errores

   // Lugar
      if (empty($lugar))
      {
         $errores["lugar"] = "Se requiere el lugar donde se dictara el curso";
         $error = true;
      }
      else
         $errores["lugar"] = "";


   // Fecha
      if (empty($fecha))
      {
         $errores["fecha"] = "Se requiere la fecha en la que se dictara el curso";
         $error = true;
      }
      else
         $errores["fecha"] = "";

   //Horario
      if (empty($horario))
      {
         $errores["horario"] = "Se requiere el horario del curso";
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

         $query = "INSERT INTO ediciones (lugar, fecha, horario) VALUES ('$lugar', '$fecha', '$horario')";

        echo "El Registro del horario ha sido creado";
         
         $result = mysqli_query($link, $query) 
         or die ("<p><center> <b>No se pudo insertar la informacion del curso a la base de datos, intentelo de nuevo.</center></b></p><br>
         <A HREF 'ediciones.php'>Volver</A>");

         echo ("<P>[ <A HREF='ediciones.php'> Registrar otro Curso</A> ]</P>\n");
    }
else
{
?>

<H1>REGISTRO DE HORARIOS DISPOBLES  PARA CURSOS</H1>

<P>Introduzca la Informacion del horario:</P>

<FORM CLASS="borde" ACTION="ediciones.php" METHOD="POST">

<P><LABEL>Lugar donde se dictara el curso:</LABEL>
<INPUT TYPE="TEXT" NAME="lugar"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$lugar'>\n");
   else
      print (">\n");
   if ($errores["lugar"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["lugar"] . "</SPAN>");
?>
</P>


<P><LABEL>Fecha de Inicio (Formato DD/MM/YYYY):</LABEL>
<INPUT TYPE="TEXT" NAME="fecha"

<?PHP
   if (isset($_POST['fecha']))
      print (" VALUE='$fecha'>\n");
   else
      print (">\n");
   if ($errores["fecha"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["fecha"] . "</SPAN>");
?>
</P>


<P><LABEL>Horario del Curso:</LABEL>
<select name="horario">
  <option value="mañana"> Mañana (8:00 - 12:00)</option>
  <option value="tarde"> Tarde (2:00 - 6:00)</option>
  <option value="noche"> Noche (6:00 - 10:00)</option>
</select>
</P>

<P><INPUT TYPE="submit" NAME="insertar" VALUE="Guardar Edicion de Horario"></P>

</FORM>

<?PHP
   }
?>
</BODY>
</HTML>