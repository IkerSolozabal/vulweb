--  Create DATABASE
CREATE DATABASE web_app;

USE web_app;

-- Create TABLE 
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(50),
    correo_electronico VARCHAR(50),
    contrasena VARCHAR(255)
);

INSERT INTO usuarios (nombre, correo_electronico, contrasena) VALUES ('admin', 'admin@example.com', 'admin');


-- Create TABLE 
CREATE TABLE comentarios (
  id INT AUTO_INCREMENT PRIMARY KEY,
  comentario TEXT
);

INSERT INTO comentarios (comentario) VALUES ('Primer comentario');
INSERT INTO comentarios (comentario) VALUES ('Segundo comentario');
INSERT INTO comentarios (comentario) VALUES ('Tercer comentario');

-- Create USER to permit remote access
CREATE USER 'mysql_manager'@'%' IDENTIFIED BY 'TrAgreaS';

GRANT ALL PRIVILEGES ON *.* TO 'mysql_manager'@'%';

FLUSH PRIVILEGES;
