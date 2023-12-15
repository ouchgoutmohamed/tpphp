-- Q1. Création de la base de données et de la table

CREATE DATABASE IF NOT EXISTS MyDataBase;

USE MyDataBase;
CREATE TABLE IF NOT EXISTS PRODUIT (
    Id INT(6) PRIMARY KEY,
    PNOM VARCHAR(50),
    COULEUR VARCHAR(50),
    POIDS VARCHAR(20),
    PRIX INT(5)
);

-- Q2. Insertion de données dans la table
INSERT INTO PRODUIT (Id, PNOM, COULEUR, POIDS, PRIX) VALUES
(1, 'Produit1', 'Rouge', '3 Kg', 250),
(2, 'Produit2', 'Vert', '6 Kg', 400),
(3, 'Produit3', 'Bleu', '4 Kg', 350),
(4, 'Produit4', 'Jaune', '2 Kg', 200),
(5, 'Produit5', 'Noir', '5 Kg', 450),
(6, 'Produit6', 'Blanc', '1 Kg', 150);

-- Q3 Sélection de tous les produits de la table
SELECT * FROM PRODUIT;

-- Q4 Sélection des produits dont le prix est supérieur à 300DH, triés par prix
SELECT * FROM PRODUIT WHERE PRIX > 300 ORDER BY PRIX;

-- Q5 Affichage du nom et de la couleur des produits dont le poids est inférieur à 5 Kg, triés par prix
SELECT PNOM, COULEUR FROM PRODUIT WHERE CAST(SUBSTRING(POIDS, 1, LENGTH(POIDS) - 2) AS DECIMAL) < 5 ORDER BY PRIX;


-- Q6. Modification du prix du produit dont l'ID est 3
UPDATE PRODUIT SET PRIX = 320 WHERE Id = 3;

-- Q7 Suppression du dernier produit de la table
DELETE FROM PRODUIT ORDER BY Id DESC LIMIT 1;

-- Q8. Suppression de la table PRODUIT
DROP TABLE IF EXISTS PRODUIT;




