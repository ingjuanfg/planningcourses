<?php
header('Content-Type: text/html; charset=UTF-8'); 
?>
<?php
   session_start();

   if (isset($_POST['usuario']) && isset($_POST['clave']) && isset($_POST['capac_emp'])){
      $usuario = $_POST['usuario'];
      $clave = $_POST['clave'];
      $capac_emp = $_POST['capac_emp'];

         //comprobar que el usuario esta autorizado
         require('config.php');
         //$clave=md5($clave);

         $query = "SELECT cod_usuario, contrasena, puesto FROM usuarios WHERE cod_usuario = '$usuario' AND contrasena = '$clave' AND puesto = '$capac_emp'";

         $resultado = mysqli_query($link, $query)
            or die ("Usuario o Password incorrecto");

         $nfilas = mysqli_num_rows($resultado);

         mysqli_close($link);

         //Los datos introducidos son correctos

         if($nfilas == 1){
            $usuario_valido = $usuario;
            $_SESSION["usuario_valido"] = $usuario_valido;
            header('location:login_confirm.php');
            }else{
               echo "Los datos ingresados no son correctos, Por favor verifique su usuario, password y cargo en la empresa";
               echo"<br>";
               echo "<a href ='login.php'>Regresar</a>";
            }

         }
         else{       
?>
      <HTML LANG="es">
      <HEAD>
      <TITLE>Login al Sistema de la Empresa</TITLE>
      <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
      </HEAD>
      <BODY>

      <h1>Login para Ingreso al Sistema</h1>

      <FORM NAME='login' ACTION='login.php' METHOD='POST'>
      <P><LABEL>Usuario:</LABEL>
      <INPUT TYPE='TEXT' NAME='usuario' SIZE='15'></P>
      <P><LABEL>Clave:</LABEL>
      <INPUT TYPE='PASSWORD' NAME='clave' SIZE='15'></P>
      <P><LABEL>Cargo en la Empresa:</LABEL></P>
      <select name="capac_emp">
        <option value="Docente">Docente</option>
        <option value="Empleado">Empleado</option>
        <option value="Estudiante">Estudiante</option>
      </select>

      <table>
         <tr>
         <td><P><INPUT TYPE='SUBMIT' VALUE='Entrar'></P></td>
         <td><a href ='registro.php'>Registrarse!</a></td>
         </tr>
      </table>
            </FORM>
      <?php
      }
      ?>
      </BODY>
      </HTML>