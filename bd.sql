create database if not exists bd_personal;
use bd_personal;

CREATE TABLE EMPLEADOS
(
ID_empleado INT NOT NULL AUTO_INCREMENT,
Nombre varchar(100) NOT NULL,
Apellidos varchar(250) NOT NULL,
PRIMARY KEY (ID_empleado)
)ENGINE=InnoDB;

INSERT INTO EMPLEADOS
(
`ID_empleado`,
`Nombre`, 
`Apellidos`
) 
VALUES 
( 
NULL,
'Juan', 
'Perez'
);

