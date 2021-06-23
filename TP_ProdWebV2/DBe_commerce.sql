DROP DATABASE IF EXISTS e_commerce;
CREATE DATABASE IF NOT EXISTS e_commerce;

use e_commerce;

DROP TABLE IF EXISTS categoria;
CREATE TABLE IF NOT EXISTS categoria(
    cateId INT AUTO_INCREMENT PRIMARY KEY,
    cateNombre VARCHAR(45) NOT NULL
);

DROP TABLE IF EXISTS prod;
CREATE TABLE IF NOT EXISTS prod(
    prodId INT NOT NULL,
    prodIndex INT AUTO_INCREMENT PRIMARY KEY,
    prodNombre VARCHAR(45) NOT NULL,
    prodDesc VARCHAR(100) NOT NULL,
    prodPrecio DECIMAL(14,4) NOT NULL,
    cateId INT NOT NULL,
    FOREIGN KEY (cateId) REFERENCES categoria(cateId)
);


DROP TABLE IF EXISTS usuarios;
CREATE TABLE IF NOT EXISTS usuarios(
    userId INT AUTO_INCREMENT PRIMARY KEY,
    userNombre VARCHAR(60) NOT NULL,
    userMail VARCHAR(80) NOT NULL,
    userPwd VARCHAR(20) NOT NULL
);

DROP TABLE IF EXISTS contactos;
CREATE TABLE IF NOT EXISTS contactos(
contactId INT AUTO_INCREMENT PRIMARY KEY,
nombre VARCHAR(60) NOT NULL,
apellido VARCHAR(60) NOT NULL,
mail VARCHAR(60) NOT NULL,
telefono VARCHAR(60) NOT NULL,
consulta VARCHAR(100) NOT NULL
);

INSERT INTO categoria (cateId, cateNombre)
    VALUES  (1, "Remeras"),
            (2, "Pantalones"),
            (3, "Zapatillas"),
            (4, "Buzos");

SELECT * FROM categoria;

INSERT INTO prod (prodID, prodIndex, prodNombre, prodPrecio, prodDesc, cateId)
    VALUES(1, 1, "Remera jaspeada", 600, "Talles del S al XXL
    Material: algodon peinado
    Colores:negro, blanco, azul
    Marca: Puma", 1),

          (2, 2, "Remera deportiva fluor", 800, "Talles del S al XL
          Material:Jersey dep
          Colores:negro, verde y naranja
          Marca:Puma", 1),

          (3, 3, "Remera playera", 700, "Talles del S al XXL
          Material: algodon 
          Colores:negro y gris oscuro
          Marca:Puma", 1),

          (4, 4, "Remera futbolera", 900, "Talles del S al XXXL
          Material: Winfresh
          Colores:negro y blanco
          Marca: Puma", 1),

          (5, 5, "Remera estampa grande", 800, "Talles del M al XL
          Material: algodon peinado 
          Colores:rosa, verde y rojo.
          Marca: Puma", 1),

          (1, 6, "Jogging simple", 900, "Talles del M al XXL
          Material: algodon rustico 
          Colores:negro, melange y gris
          Marca: Puma", 2),

          (2, 7, "Jogging franja entera", 950, "Talles del S al XXL
          Material: algodon rustico 
          Colores:negro y melange 
          Marca: Puma", 2),

          (3, 8, "Jogging media franja", 1000, "Talles del S al XXL
          Material: algodon rustico 
          Colores:negro, azul francia y gris
          Marca: Puma", 2),

          (4, 9, "Pantalon parches", 1200, "Talle unico
          Material:Rompeviento 
          Colores:negro y blanco
          Marca: Puma", 2),

          (5, 10, "Jogging Puma grande", 1100, "Talles del M al XXL
          Material: algodon rustico 
          Colores:negro, blanco y gris
          Marca: Puma", 2),

          (1, 11, "Zapatillas tricolor", 2200, "Talles del 36 al 46
          Colores:negro, blanco y rojo
          Marca: Puma", 3),

          (2, 12, "Ojotas Puma", 1400, "Talles del 36 al 45
          Colores:negro y blanco
          Marca: Puma", 3),

          (3, 13, "Zapatillas deportivas", 2900, "Talles del 37 al 44
          Colores:negro y rojo
          Marca: Puma", 3),

          (4, 14, "Zapatillas deportivas logo", 2950, "Talles del 38 al 44
          Colores:negro, francia y rojo
          Marca: Puma", 3),

          (5, 15, "Zapatillas clásicas", 1800, "Talles del 35 al 44
          Colores:negro y blanco
          Marca: Puma", 3),

          (1, 16, "Buzo con cierre", 1900, "Talles del M al XXL
          Material: algodon rustico 
          Colores:negro, melange y blanco
          Marca: Puma", 4),

          (2, 17, "Buzo clásico", 1600, "Talles del M al XXL
          Material: algodon rustico 
          Colores:rojo y azul
          Marca: Puma", 4),

          (3, 18, "Buzo cuello redondo", 1700, "Talles del M al XXL
          Material: algodon rustico 
          Colores:negro, blanco y mostaza
          Marca: Puma", 4),

          (4, 19, "Buzo tricolor estampado", 2000, "Talles del S al XXL
          Material: algodon rustico 
          Colores:negro y blanco.'
          Marca: Puma", 4),

          (5, 20, "Buzo franja", 1850,"Talles del S al XXXL
          Material: algodon rustico 
          Colores:negro y gris claro
          Marca: Puma", 4);


SELECT * FROM prod;

INSERT INTO usuarios (userId, userNombre, userMail,  userPwd)
    VALUES (1, "admin", "admin@admin.com", "admin");

SELECT * FROM usuarios;

INSERT INTO contactos (contactId, nombre, apellido, mail, telefono, consulta)
VALUES (1, "ignacio", "balastegui", "algo@gmail.com", "123456", "una consulta");

SELECT * FROM contactos;
