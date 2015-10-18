<?php
header('Content-Type: text/html; charset=UTF-8'); 
?>
<?PHP
   session_start ();
?>
<HTML LANG="es">
<HEAD>
<TITLE>Ayuda Course Planning</TITLE>
<LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">

</HEAD>
<BODY>

<?PHP
   if (isset($_SESSION["usuario_valido"]))
   {
      session_destroy ();
      print ("<BR><BR><P ALIGN='CENTER'>Para obtener ayuda contactese con el administrador del sitio para
         solucion personalizada.</P>\n");
      print ("<BR><<P ALIGN='CENTER'>Escriba al correo xxxxx@gmail.com al administrador NOMBRE.</P>\n");
      print ("<BR><P ALIGN='CENTER'>Contestara lo mas pronto posible!!! </P>\n");
      print ("<BR><P ALIGN='CENTER'>Gracias por ingresar a nuestro Sistema, Vuelva Pronto!</P>\n");
      print ("<P ALIGN='CENTER'>[ <A HREF='login.php'>Volver Pagina de Inicio</A> ]</P>\n");
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