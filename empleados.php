<HTML LANG="es">

<HEAD>
   <TITLE>Registro de Empleado</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</HEAD>

<BODY>

<?PHP
$errores["cod_emple"] = "";
$errores["nombre"] = "";
$errores["apellido"] = "";
$errores["clave"] = "";
$errores["direccion"] = "";
$errores["telefono"] = "";
$errores["dni"] = "";
$errores["fecha_nac"] = "";
$errores["nacionalidad"] = "";
$errores["sexo"] = "";
$errores["firma"] = "";
$errores["salario"] = "";

$errores["puesto_docente"] = "";
$error = false;

if (isset($_POST['insertar']))
   {
	//Cargar las variable
	 $cod_emp = $_POST['cod_emp'];
    $nom_emp = $_POST['nom_emp'];
    $ape_emp = $_POST['ape_emp'];
    $clave_emp = $_POST['clave_emp'];
    $dir_emp = $_POST['dir_emp'];
    $tel_emp = $_POST['tel_emp'];
    $dni_emp = $_POST['dni_emp'];
    $fech_emp = $_POST['fech_emp'];
    $nac_emp = $_POST['nac_emp'];
    $sexo_emp = $_POST['sexo_emp'];
    $firma_emp = $_POST['firma_emp'];
    $salario_emp = $_POST['salario_emp'];
    $capac_emp = $_POST['capac_emp'];  //Error al dar completar registro sin llenar ningun campo REVISAR


   // Comprobar errores

   // Codigo
      if (empty($cod_emp) || (!is_numeric($cod_emp)))
      {
         $errores["cod_emple"] = "Se requiere codigo del empleado";
         $error = true;
      }
      else
         $errores["cod_emple"] = "";


   // Nombre
      if (empty($nom_emp))
      {
         $errores["nombre"] = "Se requiere el nombre!";
         $error = true;
      }
      else
         $errores["nombre"] = "";

   //apellidos
      if (empty($ape_emp))
      {
         $errores["apellido"] = "Se requiere el apellido!";
         $error = true;
      }
      else
         $errores["apellido"] = "";

   //clave
   if (empty($clave_emp))
      {
         $errores["clave"] = "Se requiere la clave";
         $error = true;
      }
      else
         $errores["clave"] = "";

   //direccion
      if (empty($dir_emp))
      {
         $errores["direccion"] = "Se requiere la direccion!";
         $error = true;
      }
      else
         $errores["direccion"] = "";

   //Telefono
      if (empty($tel_emp) || (!is_numeric($tel_emp)))
      {
         $errores["telefono"] = "Se requiere el telefono";
         $error = true;
      }
      else
         $errores["telefono"] = "";

      //dni
      if (empty($dni_emp) || (!is_numeric($dni_emp)))
      {
         $errores["dni"] = "Se requiere la cedula";
         $error = true;
      }
      else
         $errores["dni"] = "";

      //fecha nacimiento
      if (empty($fech_emp))
      {
         $errores["fcha_nac"] = "Se requiere la fecha de nacimiento!";
         $error = true;
      }
      else
         $errores["fecha_nac"] = "";


      //Nacionalidad
      if (empty($nac_emp))
      {
         $errores["nacionalidad"] = "Se requiere la nacionalidad";
         $error = true;
      }
      else
         $errores["nacionalidad"] = "";
   
      //Genero
      if (empty($sexo_emp))
            {
               $errores["sexo"] = "Se requiere el Genero";
               $error = true;
            }
            else
               $errores["sexo"] = "";
      
      // Firma o Nick
      if (empty($firma_emp))
         {
            $errores["firma"] = "Se requiere la firma o nick";
            $error = true;
         }
         else
            $errores["firma"] = "";
      
      //Salario
      if (empty($salario_emp))
         {
            $errores["salario"] = "Se requiere el salario";
            $error = true;
         }
         else
            $errores["salario"] = "";
      
         }



	// Si los datos son correctos, procesar formulario
	if (isset($_POST['insertar']) && $error==false)
	{
         //Cargar la base de datos para insertar datos para Login
         require('config.php');

         $query = "INSERT INTO usuarios(cod_usuario, contrasena, puesto) VALUES ('$dni_emp','$clave_emp','$capac_emp')";
         echo "Su Usuario y Contraseña ha sido registrado con exito<br><br>";
         
         $result = mysqli_query($link, $query) 
         or die ("<p><center> <b>Se ha encontrado un error</center></b></p>");


         //Cargar la base de datos para insertar datos de registro completo
         require('config.php');

         $query = "INSERT INTO empleados (cod_emple, nombre, apellido, clave, direccion, telefono, dni, fech_nac, nacionalidad, sexo, firma, salario, capacitado) 
         VALUES ('$cod_emp', '$nom_emp','$ape_emp', '$clave_emp','$dir_emp','$tel_emp','$dni_emp','$fech_emp','$nac_emp','$sexo_emp', '$firma_emp', '$salario_emp', '$capac_emp')";

        echo "Su Registro ha sido Exitoso";
         
         $result = mysqli_query($link, $query) 
         or die ("<p><center> <b>No se pudo insertar la informacion</center></b></p><br>
         <A HREF 'empleados.php'>Volver</A>");

         echo ("<P>[ <A HREF='empleados.php'> Registrar otro Empleado</A> ]</P>\n");
    }
else
{
?>

<H1>REGISTRO DE EMPLEADOS</H1>

<P>Introduzca sus datos de registro:</P>

<FORM CLASS="borde" ACTION="empleados.php" METHOD="POST">


<P><LABEL>Codigo de Empleado:</LABEL>
<INPUT TYPE="TEXT" NAME="cod_emp"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$cod_emp'>\n");
   else
      print (">\n");
   if ($errores["cod_emple"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["cod_emple"] . "</SPAN>");
?>
</P>

<P><LABEL>DNI (Cedula):</LABEL>
<INPUT TYPE="TEXT" NAME="dni_emp"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$dni_emp'>\n");
   else
      print (">\n");
   if ($errores["dni"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["dni"] . "</SPAN>");
?>
</P>


<P><LABEL>Nombres:</LABEL>
<INPUT TYPE="TEXT" NAME="nom_emp"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$nom_emp'>\n");
   else
      print (">\n");
   if ($errores["nombre"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["nombre"] . "</SPAN>");
?>
</P>


<P><LABEL>Apellidos:</LABEL>
<INPUT TYPE="TEXT" NAME="ape_emp"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$ape_emp'>\n");
   else
      print (">\n");
   if ($errores["apellido"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["apellido"] . "</SPAN>");
?>
</P>


<P><LABEL>Firma (Nick):</LABEL>
<INPUT TYPE="TEXT" NAME="firma_emp"
<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$firma_emp'>\n");
   else
      print (">\n");
   if ($errores["firma"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["firma"] . "</SPAN>");
?>
</P>

<P><LABEL>Contraseña:</LABEL>
<INPUT TYPE="PASSWORD" NAME="clave_emp"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$clave_emp'>\n");
   else
      print (">\n");
   if ($errores["clave"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["clave"] . "</SPAN>");
?>
</P>

<P><LABEL>Direccion:</LABEL>
<INPUT TYPE="TEXT" NAME="dir_emp"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$dir_emp'>\n");
   else
      print (">\n");
   if ($errores["direccion"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["direccion"] . "</SPAN>");
?>
</P>


<P><LABEL>Telefono:</LABEL>
<INPUT TYPE="TEXT" NAME="tel_emp"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$tel_emp'>\n");
   else
      print (">\n");
   if ($errores["telefono"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["telefono"] . "</SPAN>");
?>
</P>


<P><LABEL>Fecha de Nacimiento:</LABEL>
<INPUT TYPE="TEXT" NAME="fech_emp"

<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$fech_emp'>\n");
   else
      print (">\n");
   if ($errores["fecha_nac"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["fecha_nac"] . "</SPAN>");
?>
</P>

<P><LABEL>Nacionalidad:</LABEL>
<select name="nac_emp">
   
<?php 
require('config.php');

$query="SELECT * FROM paises";
$result=mysqli_query($link, $query);

while($extraido=mysqli_fetch_array($result)){

   echo"<option value ='$extraido[cod_pais]'> $extraido[nom_pais]</option>";
}
?>
</select>
</P>


<P><LABEL>Genero:</LABEL></P>

<select name="sexo_emp">
  <option value="Masculino">Masculino</option>
  <option value="Femenino">Femenino</option>
  <option value="Otro">Otro</option>
</select>


<P><LABEL>Salario:</LABEL>
<INPUT TYPE="TEXT" NAME="salario_emp"
<?PHP
   if (isset($_POST['insertar']))
      print (" VALUE='$salario_emp'>\n");
   else
      print (">\n");
   if ($errores["salario"] != "")
      print ("<BR><SPAN CLASS='error'>" . $errores["salario"] . "</SPAN>");
?>
</P>

<P><LABEL>Capacitado?:</LABEL></P>
<br><br>
<input type="radio" name="capac_emp" id="si" value="Si">
<label for="si">Si</label>
<br> 
<input type="radio" name="capac_emp" id="no" value="No">
<label for="no">No</label>


<P><INPUT TYPE="submit" NAME="insertar" VALUE="Completar Registro"></P>

</FORM>

<?PHP
   }
?>
</BODY>
</HTML>