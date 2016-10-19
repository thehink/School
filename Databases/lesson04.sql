/*
1. Execute an insert into your contacts database and do a rollback on this transaction.
*/
START TRANSACTION;

INSERT INTO accounts (handle, socialMedia_id, people_id, profileUrl)
VALUES (
  '@FFFF',
  (SELECT id FROM socialMedia WHERE `name` = "Facebook"),
  (SELECT id FROM people WHERE email = "FFFF@gmail.com"),
  "https://facebook.com/FFFFF"
);

ROLLBACK;


/*
2. Do the same insert, but this time commit it.
*/

START TRANSACTION;

INSERT INTO accounts (handle, socialMedia_id, people_id, profileUrl)
VALUES (
  '@FFFF',
  (SELECT id FROM socialMedia WHERE `name` = "Facebook"),
  (SELECT id FROM people WHERE email = "FFFF@gmail.com"),
  "https://facebook.com/FFFFF"
);

COMMIT;

/*
3. Backup your contacts database.
*/

/*
4. Add a real foreign key relationship between people and gear.
*/

ALTER TABLE people
ADD FOREIGN KEY (gear_id)
REFERENCES gear(id)

/*
5. Delete a row from your gear database.
*/
DELETE FROM people WHERE gear_id = 5;
DELETE FROM gear WHERE id = 5;
