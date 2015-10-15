<HTML LANG="es">
<HEAD>
   <TITLE>Edicion de Empleados</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</HEAD>
<BODY>

<?PHP

if (isset($_POST['insertar']))
{
	//Cargar las variable
	$cod_emple = $_POST['cod_emple'];
	$nombre = $_POST['nombre'];
   	$apellido=$_POST["apellido"];
	$clave=$_POST["clave"];
	$direccion=$_POST["direccion"];
	$telefono=$_POST["telefono"];
	$dni=$_POST["dni"];
	$fech_nac=$_POST["fech_nac"];
	$nacionalidad=$_POST["nacionalidad"];
	$sexo=$_POST["sexo"];
	$firma=$_POST["firma"];
	$salario=$_POST["salario"];
	$capacitado=$_POST["capacitado"];
	//Cargar Bases de Datos

		require('config.php');
		
         echo ("<P>Estos son los datos Modificados:</P>\n");
         echo ("<UL>\n");
         echo ("   <LI>Codigo del Empleado: $cod_emple\n");
         echo ("   <LI>Nombre: $nombre\n");
         echo ("   <LI>Apellido: $apellido\n");
         echo ("   <LI>Contraseña: $clave\n");
         echo ("   <LI>Direccion: $direccion\n");
         echo ("   <LI>Telefono: $telefono\n");
         echo ("   <LI>DNI o Cedula: $dni\n");
         echo ("   <LI>Fecha de Nacimiento: $fech_nac\n");
         echo ("   <LI>Nacionalidad: $nacionalidad\n");
         echo ("   <LI>Sexo: $sexo\n");
         echo ("   <LI>Firma: $firma\n");
         echo ("   <LI>Salario: $salario\n");
         echo ("   <LI>Capacitado?: $capacitado\n");
         echo ("</UL>\n");

		 
		 //Insertar datos a la Tabla de Empleados
		 
		 $query = "UPDATE empleados SET firma = '$firma', salario = '$salario', clave = '$clave', direccion = '$direccion', telefono = '$telefono', capacitado = '$capacitado' WHERE cod_emple = $cod_emple";
		 mysqli_query($link, $query) or die 
			
			("<P><center><b>No se pudo actualizar información del Empleado</b><br>
			<A HREF='editar_empleados.php'>Volver</A> 		</center></P>");

		 echo ("Los Datos fueron modificados con Exito en la Base de Datos");

         echo ("<P>[ <A HREF='lista_empleados.php'>Regresar a la lista de Empleados</A> ]</P>\n");
}
else
{					
	$cod_emple=$_GET['cod_emple'];
	require('config.php');
	$query="SELECT * FROM empleados WHERE cod_emple = $cod_emple";
	$resultado=mysqli_query($link, $query);
	$extraido= mysqli_fetch_array($resultado)
?>
<H1>Modificar Datos del Empleado</H1>

<P>Modifique los datos que se le permiten correspondientes al Empleado:</P>

<FORM CLASS="borde" ACTION="editar_empleados.php" METHOD="POST">

<P><LABEL>Codigo del Empleado:</LABEL>
<INPUT TYPE="TEXT" NAME="cod_emple" READONLY 
value="<?php echo $extraido['cod_emple'] ?>">
</P>

<P><LABEL>DNI (Cedula):</LABEL>
<INPUT TYPE="TEXT" NAME="dni" READONLY 
value="<?php echo $extraido['dni'] ?>">
</P>

<P><LABEL>Nombres del Empleado:</LABEL>
<INPUT TYPE="TEXT" NAME="nombre" READONLY
value="<?php echo $extraido['nombre'] ?>">
</P>


<P><LABEL>Apellidos del Empleado:</LABEL>
<INPUT TYPE="TEXT" NAME="apellido" READONLY
value="<?php echo $extraido['apellido'] ?>">
</P>

<P><LABEL>Fecha de Nacimiento:</LABEL>
<INPUT TYPE="TEXT" NAME="fech_nac" READONLY
value="<?php echo $extraido['fech_nac'] ?>">
</P>

<P><LABEL>Nacionalidad:</LABEL>
<INPUT TYPE="TEXT" NAME="nacionalidad" READONLY
value="<?php echo $extraido['nacionalidad'] ?>">
</P>

<P><LABEL>Genero:</LABEL>
<INPUT TYPE="TEXT" NAME="sexo" READONLY
value="<?php echo $extraido['sexo'] ?>">
</P>

<P><LABEL>Firma o Nick:</LABEL>
<INPUT TYPE="TEXT" NAME="firma" 
value="<?php echo $extraido['firma'] ?>">
</P>

<P><LABEL>Salario:</LABEL>
<INPUT TYPE="TEXT" NAME="salario" 
value="<?php echo $extraido['salario'] ?>">
</P>

<P><LABEL>Contraseña:</LABEL>
<INPUT TYPE="PASSWORD" NAME="clave" 
value="<?php echo $extraido['clave'] ?>">
</P>

<P><LABEL>Direccion:</LABEL>
<INPUT TYPE="TEXT" NAME="direccion" 
value="<?php echo $extraido['direccion'] ?>">
</P>

<P><LABEL>Telefono:</LABEL>
<INPUT TYPE="TEXT" NAME="telefono" 
value="<?php echo $extraido['telefono'] ?>">
</P>

<P><LABEL>Capacitado?:</LABEL></P>
<br><br>
<input type="radio" name="capacitado" id="si" value="Si">
<label for="si">Si</label>
<br> 
<input type="radio" name="capacitado" id="no" value="No">
<label for="no">No</label>

<P><INPUT TYPE="submit" NAME="insertar" VALUE="Modificar Informacion del Empleado"></P>

</FORM>

<?PHP
}
?>
</BODY>
</HTML>