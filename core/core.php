<?php
 //configuramos timezone vease http://php.net/manual/en/timezones.php
 date_default_timezone_set('America/Caracas');
  
 //definimos ruta y titulo del sitio
 define('URL_VIEW','http://localhost/prueba/login-mvc/view/');
 define('TITLE_WEB','Examen PHP MVC POO');
 define('URL_WEB','http://localhost/prueba/login-mvc/');
 define('NOMBRE_WEB','Examen PHP MVC');
 
 //definimos url de inicios
 $Extencion = substr(strrchr(__FILE__, '.'), 1);
 //Conexion a la bases de datos
 require_once('classConexion/conexion.' . $Extencion);
 require_once('funciones/usuario.' . $Extencion);
 //instaciamos User() para utilizarlo en el sitio
 $_usuario = User();
?>