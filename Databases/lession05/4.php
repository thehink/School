<?php
$db = new PDO("mysql:host=localhost;port=3306;dbname=contacts;charset=utf8", "root", "root");
$statement = $db->query("
  SELECT * FROM socialmedia
");
$result = $statement->fetchAll();

echo "<table>";
echo "<tr>";
echo "<th>Id</th>";
echo "<th>Name</th>";
echo "<th>Url</th>";
echo "</tr>";

foreach ($result as $key => $value) {
  echo "<tr>";
  echo sprintf("<td>%d</td>", $value['id']);
  echo sprintf("<td>%s</td>", $value['name']);
  echo sprintf("<td>%s</td>", $value['url']);
  echo "</tr>";
}

echo "</table>";
