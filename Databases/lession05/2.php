<?php
$db = new PDO("mysql:host=localhost;port=3306;dbname=contacts;charset=utf8", "root", "root");
$statement = $db->query("
  SELECT * FROM people
  INNER JOIN gear ON gear.people_id = people.id
  WHERE gear.maker = 'Apple'
");
$result = $statement->fetchAll();
echo "<pre>";
print_r($result);
echo "</pre>";
