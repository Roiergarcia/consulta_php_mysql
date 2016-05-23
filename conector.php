<?php
/******** Autor: Rogelio Garcia ********************* */
/******** Web: desarrollo-sistemas.com.mx *********** */
/******** CONECTAR CON BASE DE DATOS **************** */
/******** Recuerda cambiar por tus datos (host, usuario, password) ***********/ 
   $con = mysql_connect('localhost','root','');
   if (!$con){die('ERROR DE CONEXION CON MYSQL: '. mysql_error());}
/* ****************************************************** */
/* ******** CONECTA CON LA BASE DE DATOS  *************** */
   $database = mysql_select_db('bd_personal',$con);
   if (!$database){die('ERROR CONEXION CON BD: '.mysql_error());}
/* ********************************************** */
/* Seactualizará contenido, estar al pendiente */
?>
