README para proyecto planningcourses.
Proyecto en version estable. Contiene SQL para la Base de Datos. Imagenes y CSS para que no se vea tan plano.

Para ver este proyecto online ingresar a:

http://juanfernandez.freevar.com/login.php

Y crear un usuario o ingresa con:
Usuario: 1010
Contraseña: 1010
Cargo: Docente

Nota: Solo resta la funcionalidad de Dictar Curso e Inscribirse (Botones en la vista de Lista_cursos)

ENUNCIADO DEL PROBLEMA:

El departamento de formación de una empresa desea construir una BD para planificar y gestionar la formación de sus empleados. Los supuestos semánticos que deben recogerse son los siguientes: 

La empresa organiza cursos internos de formación de los que se desea conocer el código de curso, el nombre, una descripción, el número de horas de duración y el coste del curso.

Un curso puede tener como prerrequisito haber realizado otro(s) previamente, y, a su vez, la realización de un curso puede ser prerrequisito de otros. Un curso que es prerrequisito de otro puede serlo de forma obligatoria u opcional.

Un mismo curso tiene diferentes ediciones, es decir, se imparte en distintos lugares, fechas y con diversos horarios (intensivo, mañana o tarde). En una misma fecha de inicio sólo puede impartirse una edición de un curso.

Los cursos se imparten por personal de la propia empresa.

De los empleados se desea almacenar su código de empleado, nombre y apellidos, dirección, teléfono, DNI, fecha de nacimiento, nacionalidad, sexo, firma y salario, así como si está o no capacitado para impartir cursos.

Un mismo empleado puede ser docente en una edición de un curso y alumno en otra edición, pero nunca puede ser ambas cosas a la vez (en una misma edición de un curso o lo imparte o lo recibe).

Juan de Jesús Fernández Graciano