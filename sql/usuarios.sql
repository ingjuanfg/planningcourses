CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL auto_increment,
  `cod_usuario` varchar(40) default NULL,
  `contrasena` varchar(40) default NULL,
  `puesto` varchar(40) default NULL,
  PRIMARY KEY  (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=241 ;