CREATE DATABASE db_login;

USE db_login;

CREATE TABLE USUARIO(
id_user int primary key,
username varchar(100),
contraseña varchar(100)
);
--
CREATE TABLE TAREAS(
id_tarea int primary key,
id_user int,
tarea  varchar(200),
email varchar(100),
fecha date,
foreign key (id_user) references usuario(id_user)
);

--
USE db_login;
-- USERS
INSERT INTO USUARIO VALUES (1,"LimberthStyle","20Limbert");
INSERT INTO USUARIO VALUES (2,"Papita","21Papita");
INSERT INTO USUARIO VALUES (3,"Cristian","mondra");
INSERT INTO USUARIO VALUES (4,"Kevin","leonidas");
INSERT INTO USUARIO VALUES (5,"Romero","bill");
INSERT INTO USUARIO VALUES (6,"Vicent","silva");
INSERT INTO USUARIO VALUES (7,"Elvis","chura12");
INSERT INTO USUARIO VALUES (8,"Ronald","chalinas50");
INSERT INTO USUARIO VALUES (9,"Melany","lstyle08");
INSERT INTO USUARIO VALUES (10,"Sofia","sofi99");
-- TAREAS
INSERT INTO TAREAS VALUES (100,1,"TAREAS","limberthfalcon@gmail.com", "2023/09/20");
-- CONSULTAS
SELECT USERNAME, CONTRASEÑA FROM USUARIO where USERNAME='$usuario' and CONTRASEÑA='$contraseña';

-- TABLAS
SELECT * FROM USUARIO;
SELECT * FROM TAREAS;
