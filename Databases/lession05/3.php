<?php
$db = new PDO("mysql:host=localhost;port=3306;dbname=contacts;charset=utf8", "root", "root");
$statement = $db->query("
  SELECT * FROM people
  INNER JOIN gear ON gear.people_id = people.id
  WHERE gear.maker = 'Apple'
");
$result = $statement->fetchAll();

echo "<table>";
echo "<tr>";
echo "<th>Name</th>";
echo "<th>Maker</th>";
echo "<th>Model</th>";
echo "</tr>";

foreach ($result as $key => $value) {
  echo "<tr>";
  echo sprintf("<td>%s %s</td>", $value['firstName'], $value['lastName']);
  echo sprintf("<td>%s</td>", $value['maker']);
  echo sprintf("<td>%s</td>", $value['model']);
  echo "</tr>";
}

echo "</table>";
