<table>
<tr>
<td><img src='course.png' width=285 height=177></td>
</tr>
<tr><td><h1>Course Planning - Empresa</h1></td></tr>
</table>

<ul id="sddm">
	<li><a href="login_confirm.php" onmouseover="mopen('m1')" onmouseout="mclosetime()">Home</a>
	</li>

	<li><a href="#" onmouseover="mopen('m2')" onmouseout="mclosetime()">Empleados</a>
		<div id="m2" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="empleados.php">Registrar un Nuevo Empleado</a>
		<a href="lista_empleados.php">Ver Empleados Actuales</a>
		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m3')" onmouseout="mclosetime()">Cursos</a>
		<div id="m3" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="cursos.php">Crear un Nuevo Curso</a>
		<a href="lista_cursos.php">Lista de Cursos Disponibles</a>
		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m4')" onmouseout="mclosetime()">Horarios y Lugares</a>
		<div id="m4" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="ediciones.php">Crear Disponibilidad de Lugares</a>
		</div>
	</li>
	<li><a href="#" onmouseover="mopen('m5')" onmouseout="mclosetime()">Ayuda y Contacto</a>
		<div id="m5" onmouseover="mcancelclosetime()" onmouseout="mclosetime()">
		<a href="contacto.php">Informacion de Contacto</a>
		<a href="ayuda.php">Ayuda</a>
		</div>
	</li>
	<li><a href="logout.php" onmouseover="mopen('m6')" onmouseout="mclosetime()">Logout</a>
	</li>
</ul>