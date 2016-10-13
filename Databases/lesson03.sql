CREATE TABLE socialMedia (
  id INT PRIMARY KEY AUTO_INCREMENT,
  `name` VARCHAR(20),
  `url` VARCHAR(50)
)

INSERT INTO socialMedia (name, url)
VALUES (
  'Twitter',
  'https://twitter.com/'
),
(
  'Facebook',
  'https://facebook.com/'
),
(
  'Google +',
  'https://plus.google.com/'
)


CREATE TABLE accounts (
  `id` INT PRIMARY KEY AUTO_INCREMENT,
  `handle` VARCHAR(50),
  `socialMedia_id` INT UNSIGNED,
  `people_id` INT UNSIGNED,
  `profileUrl` VARCHAR(100)
)


ALTER TABLE people
DROP twitter

INSERT INTO accounts (handle, socialMedia_id, people_id, profileUrl)
VALUES (
  '@Thehink2',
  (SELECT id FROM socialMedia WHERE `name` = "Twitter"),
  (SELECT id FROM people WHERE email = "benja280@gmail.com"),
  "https://twitter.com/thehink2"
)

INSERT INTO accounts (handle, socialMedia_id, people_id, profileUrl)
VALUES (
  '@Benji',
  (SELECT id FROM socialMedia WHERE `name` = "Facebook"),
  (SELECT id FROM people WHERE email = "benja280@gmail.com"),
  "https://facebook.com/asdasd"
)

--EXTRA
--1
SELECT * FROM accounts
INNER JOIN socialMedia
  ON accounts.socialMedia_id = socialMedia.id
WHERE accounts.people_id = 1

--2
SELECT people.firstName, COUNT(accounts.id) as SocialAccounts FROM people
INNER JOIN accounts
  ON accounts.people_id = people.id
GROUP BY accounts.people_id
ORDER BY SocialAccounts DESC

--3
SELECT socialMedia.name as SocialMedia, COUNT(accounts.id) as Accounts FROM socialMedia
INNER JOIN accounts
  ON accounts.socialMedia_id = socialMEdia.id
GROUP BY socialMedia.id
