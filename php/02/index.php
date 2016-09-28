<?php


/*
  Uppgift 1
*/


$weekdays = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];

foreach($weekdays as $weekday){
  if($weekday === 'Sunday')
    echo '<span style="color:red; font-weight:bold">' . $weekday . '</span>';
  elseif($weekday === date("l"))
    echo '<span style="color:black; font-weight:bold">' . $weekday . '</span>';
  else
    echo $weekday;

  if($weekday !== 'Sunday')
    echo ', ';

}

echo '<br><br>';


/*
  Uppgift 2
*/

$inputUsername = "xXSnipezKing1337Xx";
$inputPassword = "Password123!";

$info = [
  'username' => 'xXSnipezKing1337Xx',
  'email' => 'ilovemymom@gmail.com',
  'password' => 'Password123!',
  'firstName' => 'Josef',
  'lastName' => 'Svensson',
  'age' => 34,
  'gender' => 'male',
  'country' => 'Sweden'];

if(($inputUsername === $info['username'] || $inputUsername === $info['email']) && $inputPassword === $info['password']){

     echo 'Welcome ' . $info['username'] . '!<br>';
     echo 'Your name is ' . $info['firstName'] . ' ' . $info['lastName'] . 'and you are a ' . $info['age'] . ' year old ' . ($info['gender'] == 'male' ? 'man' : 'woman') . ' from ' . $info['country'];

   }else {
     echo "Du matchar ingen i databasen!";
   }

echo '<br><br>';

  /*
    Uppgift 3
  */


#input
  $category = "B";
  $age = 16;
  $hotel = false;



$hotel_price = $hotel ? 1000 : 0;

$categories = [
  'A' => [
    'price' => 500],
  'B' => [
    'price' => 400],
  'C' => [
    'price' => 350],
  'VIP' => [
    'price' => 600,
    'age_limit' => 18]
];


if(array_key_exists($category, $categories)){
  if(array_key_exists('age_limit', $categories[$category]) && $categories[$category]['age_limit'] > $age){
    echo 'Du måste vara minst 18 år för detta alternativet!';
  }else{
    printf('Välkommen till Ticnet. Du har köpt en biljett i kategori %s, var god betala %dkr', $category, $categories[$category]['price'] + $hotel_price);
  }
}else{
  echo 'Detta alternativet existerar inte!';
}


echo '<br><br><br>';

/*
  Uppgift 4
*/

$map = [
  ["-", "-", "x", "-", "-", "-", "-", "-", "x", "-", "-"],
  ["-", "-", "-", "x", "-", "-", "-", "x", "-", "-", "-"],
  ["-", "-", "x", "x", "x", "x", "x", "x", "x", "-", "-"],
  ["-", "x", "x", "-", "x", "x", "x", "-", "x", "x", "-"],
  ["x", "x", "x", "x", "x", "x", "x", "x", "x", "x", "x"],
  ["x", "-", "x", "x", "x", "x", "x", "x", "x", "-", "x"],
  ["x", "-", "x", "-", "-", "-", "-", "-", "x", "-", "x"],
  ["-", "-", "-", "x", "x", "-", "x", "x", "-", "-", "-"]
];

  foreach ($map as $row) {
    echo '<br>';
    foreach ($row as $value) {
      echo '<div style="display:inline-block; width:32px; height:32px; background:' . ($value == 'x' ? 'black' : 'white') . ';"></div>';
    }
  }
