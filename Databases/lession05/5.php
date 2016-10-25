<?php
$db = new PDO("mysql:host=localhost;port=3306;dbname=contacts;charset=utf8", "root", "root");

/*$statement = $db->query("
SELECT
  id,
  name,
  (SELECT GROUP_CONCAT(people.firstName SEPARATOR ', ') FROM people
      INNER JOIN accounts
      ON people.id = accounts.people_id
      WHERE socialmedia.id = accounts.socialMedia_id) as peopleUsingService
FROM socialmedia
");*/

$statement = $db->query("
SELECT
  socialmedia.id,
  socialmedia.name,
  GROUP_CONCAT(people.firstName SEPARATOR ', ') as peopleUsingService
FROM people
INNER JOIN accounts
  ON accounts.people_id = people.id
INNER JOIN socialmedia
  ON accounts.socialMedia_id = socialmedia.id
GROUP BY socialmedia.id
");


$result = $statement->fetchAll();

echo "<table>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Name</th>";
echo "<th>People using this socialmedia</th>";
echo "</tr>";

foreach ($result as $key => $value) {
  echo "<tr>";
  echo sprintf("<td>%d</td>", $value['id']);
  echo sprintf("<td>%s</td>", $value['name']);
  echo sprintf("<td>%s</td>", $value['peopleUsingService']);
  echo "</tr>";
}

echo "</table>";
