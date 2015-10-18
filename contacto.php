<?php
header('Content-Type: text/html; charset=UTF-8'); 
?>
<?PHP
   session_start ();
?>
<HTML LANG="es">
<HEAD>
<TITLE>Contacto Course Planning</TITLE>
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
      print ("<BR><BR><h1 ALIGN='CENTER'>Contacto con Administrador del Sitio.</h1>\n");
      print ("<BR><P ALIGN='CENTER'>Nombre</P>\n");
      print ("<BR><P ALIGN='CENTER'>Profesion </P>\n");
      print ("<BR><P ALIGN='CENTER'>Lugar</P>\n");
      print ("<BR><P ALIGN='CENTER'>Correo</P>\n");
      print ("<P ALIGN='CENTER'>[ <A HREF='login_confirm.php'>Atras</A> ]</P>\n");
   }
   else
   {
      print ("<BR><BR>\n");
      print ("<P ALIGN='CENTER'>No hay una conexion activa</P>\n");
      print ("<P ALIGN='CENTER'>[ <A HREF='login.php'>Ingresar al Sistema Course Planning</A> ]</P>\n");
   }
?>
</BODY>
</HTML>