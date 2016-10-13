CREATE DATABASE contacts

CREATE TABLE people (
  id INT PRIMARY KEY AUTO_INCREMENT,
  name VARCHAR(80) NOT NULL,
  email VARCHAR(100) NOT NULL,
  phone VARCHAR(15))

INSERT INTO people (name, email, phone)
VALUES ("Benjamin Rizk", "asd@asd.asd", "0760516676")

ALTER TABLE  people
ADD COLUMN twitter VARCHAR(30) NULL

UPDATE people
SET twitter = "thehink"
WHERE id = 1

ALTER TABLE people
DROP name

ALTER TABLE people
ADD COLUMN firstName VARCHAR(80) NOT NULL AFTER id,
ADD COLUMN lastName VARCHAR(80) NOT NULL AFTER firstName

UPDATE people
SET firstName = "Benjamin",
    lastName = "Rizk"
WHERE id = 1

INSERT INTO `people` (`email`, `phone`, `firstName`, `lastName`, `twitter`) VALUES
('kristjan@kristjan.se', '12345678', 'Kristjan', 'Frederiksen', NULL),
('joakim@idrottskoll.se', '0733093086', 'Joakim', 'Remler', NULL),
('lars@kajes.se', '0739-68 80 41', 'Lars', 'Karlsson', '@mintlars'),
('katarina.chernyavskaya@gmail.com', '0760830390', 'Katarina', 'Chernyavskaya', NULL),
('eriksson.km@gmail.com', '0736222424', 'Marie', 'Eriksson', '@frkMimmi'),
('staffan.mowitz@gmail.com', '0706805101', 'Staffan', 'Mowitz', NULL),
('signe.bjelke@gmail.com', '076 241 31 58', 'Signe', 'Bjelkenäs', NULL);


ALTER TABLE people
ADD COLUMN gear_id INT UNSIGNED

CREATE TABLE gear (
  id INT PRIMARY KEY AUTO_INCREMENT,
  people_id INT UNSIGNED,
  maker VARCHAR(50),
  model VARCHAR(50),
  type VARCHAR(50)
)

INSERT INTO gear (people_id, maker, model, type)
VALUES (
  (SELECT id FROM people WHERE email = "benja280@gmail.com"),
  "Clevo",
  "P651RP6-G",
  "laptop"
)

INSERT INTO gear (people_id, maker, model, type)
VALUES (
  (SELECT id FROM people WHERE email = "kristjan@kristjan.se"),
  "Apple",
  "Macbook Pro",
  "laptop"
),
(
  (SELECT id FROM people WHERE email = "jerdan0711@skola.goteborg.se"),
  "Apple",
  "MacBook Pro (Retina, 15-inch, Mid 2015)",
  "laptop"
),
(
  (SELECT id FROM people WHERE email = "signe.bjelke@gmail.com"),
  "Apple",
  "MacBook Pro (Retina, 15-inch, Mid 2015)",
  "laptop"
)

UPDATE people
SET gear_id = (SELECT gear.id FROM gear WHERE people.id = gear.people_id)
