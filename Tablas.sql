create database archivos;
 use archivos;
CREATE TABLE usuarios (
    PersID int auto_increment primary key,
    Nombre varchar(255),
    Correo varchar(255),
    Contra varchar(255) 
);

CREATE TABLE archivos (
    ArchID int auto_increment primary key,
    PerID int,
    Nombre varchar(255),
    Ubicacion varchar(255),
    Conteo int 
);


ALTER TABLE `archivos` ADD CONSTRAINT `llave1` FOREIGN KEY (`PerID`) REFERENCES `usuarios`(`PersID`) ON DELETE CASCADE;

INSERT INTO usuarios VALUES (NULL, "Daniel", "danielcornejo1994@gmail.com", "1234");
