<?php
header('Content-Type: text/html; charset=UTF-8'); 
?>
<?PHP
   session_start ();
?>
<HTML LANG="es">
<HEAD>
<TITLE>Salida Planning Course</TITLE>
<LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">

</HEAD>
<BODY>

<?PHP
   if (isset($_SESSION["usuario_valido"]))
   {
      session_destroy ();
      print ("<BR><BR><P ALIGN='CENTER'>Su Conexión ha finalizado</P>\n");
      print ("<BR><BR><P ALIGN='CENTER'>VUELVE PRONTO!!! </P>\n");
      print ("<P ALIGN='CENTER'>[ <A HREF='login.php'>Ingresar al Sistema Course Planning</A> ]</P>\n");
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
