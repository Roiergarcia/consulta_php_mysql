<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Consulta de registros</title>
<!--Autor:Rogelio Garcia
	Web:desarrollo-sistemas.com.mx
-->
</head>
<body>
<h1>Consulta de registros</h1>
			<?php
			include('conector.php');
			
					$sql = "SELECT * FROM empleados";
					$result = mysql_query ($sql);
					// verificamos la conexion
					if (! $result){
					   echo "Consulta SQL con errores.".mysql_error();
					   exit();
					}else {
					    echo "<table border='1'><tr><td>ID_empleado</td><td>Nombre</td><td>Apellido</td>
					         </tr><tr>";
					//obtenemos los registros de la consulta y mostrar en una tabla
					    while ($row = mysql_fetch_row($result)){
					                echo "<td>".$row[0]."</td>
					                      <td>".$row[1]."</td>
					                      <td>".$row[2]."</td>
					                      ";
					   }
					   echo "</tr></table>";
					 }


			?>
</body>
</html>
