CREATE TABLE `asignaturas` (
  `cod_asig` int(11) NOT NULL auto_increment,
  `nom_asig` varchar(80) default NULL,
  PRIMARY KEY  (`cod_asig`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=241 ;

INSERT INTO `asignaturas` VALUES (1, 'Bases de Datos');
INSERT INTO `asignaturas` VALUES (2, 'Contabilidad de Costos');
INSERT INTO `asignaturas` VALUES (3, 'Programacion Orientada a Objetos');
INSERT INTO `asignaturas` VALUES (4, 'Emprendimiento');
INSERT INTO `asignaturas` VALUES (5, 'Matematicas');
INSERT INTO `asignaturas` VALUES (6, 'Fisica');
INSERT INTO `asignaturas` VALUES (7, 'Compiladores');
INSERT INTO `asignaturas` VALUES (8, 'Investigacion de Operaciones');
INSERT INTO `asignaturas` VALUES (9, 'Comunicaciones');
INSERT INTO `asignaturas` VALUES (10, 'Electronica');
INSERT INTO `asignaturas` VALUES (11, 'Cliente Servidor');
