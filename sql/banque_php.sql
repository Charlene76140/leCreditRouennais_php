DROP DATABASE IF EXISTS banque_php;

CREATE DATABASE banque_php CHARACTER SET 'utf8';

DROP USER IF EXISTS 'banquePHP'@'localhost'; 
CREATE USER 'banquePHP'@'localhost' IDENTIFIED BY 'coucouHibou';
GRANT ALL PRIVILEGES ON banque_php.* TO 'banquePHP'@'localhost';

CREATE TABLE customer (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    email VARCHAR(50) NOT NULL,
    user_password VARCHAR(50) NOT NULL,
    firstname VARCHAR(100) NOT NULL,
    lastname VARCHAR(100) NOT NULL,
    street_number VARCHAR(10) NOT NULL,
    street_address VARCHAR(255) NOT NULL,
    area_code VARCHAR (50) NOT NULL,
    city VARCHAR (100) NOT NULL,
    PRIMARY KEY (id)
);

CREATE TABLE account (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    account_type VARCHAR(50) NOT NULL,
    account_number VARCHAR(50) NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    account_fees DECIMAL(10,2) NOT NULL,
    creation_date DATE NOT NULL,
    customer_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (customer_id) REFERENCES customer(id)
);

CREATE TABLE operation (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    type_of_operation VARCHAR(10) NOT NULL,
    label VARCHAR(255) NOT NULL,
    operation_date DATE NOT NULL,
    amount DECIMAL(10,2) NOT NULL,
    account_id INT UNSIGNED NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (account_id) REFERENCES account(id)
);

INSERT INTO customer (email,user_password, firstname, lastname,street_number,street_address, area_code, city)
 VALUES
 ('charly@hotmail.fr', 'charlyCoco', 'Charly', 'Corint', '25 bis','rue des accacias','76100','Rouen'),
 ('martine.dupont@gmail.com', 'Martine76*', 'Martine', 'Dupont', '475','avenue Victor Hugo, apt 5','76230','Bois-Guillaume');
 

INSERT INTO account (account_type, account_number, amount, account_fees, creation_date, customer_id)
 VALUES
 ('Compte courant', 'FR7548451512 C50', 548.50 , 35, '2018-10-05', 1),
 ('Livret A', 'FR451841 C51', 1985.46 , 19.90, '2018-10-05', 1),
 ('PEL', 'FR151274 C52', 7300 , 22.50, '2019-05-30', 1),
 ('Compte courant', 'FR7554515157 P48', 1435.67 , 35, '2000-04-25', 2),
 ('Livret A', 'FR258413 P49', 11475 , 19.90, '2000-04-25', 2);

INSERT INTO operation (type_of_operation, label, operation_date, amount, account_id)
 VALUES
 ('Debit', 'Amazon commande', '2021-05-19', 42.62 , 1),
 ('Credit', 'epargne programmé','2021-05-05', 150, 2),
 ('Credit', 'epargne programmé','2021-05-05', 75, 3),
 ('Debit', 'Carrefour Rouen', '2021-05-14', 152.28, 4),
 ('Debit', 'métropole eau', '2021-05-6', 35, 4)

 