<?php
$db = new PDO("mysql:host=localhost;port=3306;dbname=contacts;charset=utf8", "root", "root");

function getPeopleAndGear(){
  global $db;
  $statement = $db->query("
    SELECT
      people.id,
      people.firstName,
      people.lastName,
      people.email,
      gear.maker,
      gear.model
    FROM people
    LEFT JOIN gear
      ON gear.people_id = people.id
  ");

  if(!$statement){
    die('Invalid query!');
  }

  return $statement->fetchAll();
}


function getSocialMediaAccounts($peopleId){
  global $db;
  $sth = $db->prepare("
    SELECT
      accounts.handle,
      accounts.profileUrl,
      socialmedia.name,
      socialmedia.url
    FROM accounts
    INNER JOIN socialmedia
      ON socialmedia.id = accounts.socialMedia_id
    WHERE
      accounts.people_id = :people_id
  ");
  $sth->execute([
    'people_id' => $peopleId
  ]);
  return $sth->fetchAll();
}


echo '<table border="1">';
echo '<tr>';
echo '<th>Id</th>';
echo '<th>Name</th>';
echo '<th>Gear</th>';
echo '<th>socialmedia</th>';
echo '</tr>';

$people = getPeopleAndGear();

foreach ($people as $key => $value) {
  $accounts = getSocialMediaAccounts($value['id']);

  $socialmedia = '';
  foreach ($accounts as $account) {
    $socialmedia .= sprintf('(<a href=""%s">%s</a>) ', $account['profileUrl'], $account['handle']);
  }

  echo "<tr>";
  echo sprintf("<td>%d</td>", $value['id']);
  echo sprintf("<td>%s</td>", $value['firstName']);
  echo sprintf("<td>%s %s</td>", $value['maker'], $value['model']);
  echo sprintf("<td>%s</td>", $socialmedia);
  echo "</tr>";
}

echo "</table>";
