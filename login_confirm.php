<?PHP
   session_start ();
?>
<HTML LANG="es">
<head>
<title>Sistema Course Planning </title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="stylesheet" type="text/css" href="css/default.css">
	<script type="text/javascript" src="css/menu.js"></script>
</head>
<body>

<?PHP
if (isset($_SESSION["usuario_valido"]))
{
?>
<?PHP
require('menu.php');
?>
<?php
}
else
{
?>
<BR><BR>
<P ALIGN='CENTER'>Acceso no autorizado</P>
<P ALIGN='CENTER'>[ <A HREF='login.php' TARGET='_top'>Ingresar al Sistema Planning Course</A> ]</P>
<?php
}
?>
<div style="clear:both"></div>
</body>
</html>