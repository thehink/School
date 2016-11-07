<?php
session_start();

$arr = ['string1', 'string2', 'string3'];

echo count($_SESSION);

$_SESSION["asd_" . count($_SESSION)] = $arr[rand(0,count($arr)-1)];


if(count($_SESSION) >= 5){
  session_destroy();
}

echo '<pre>';
print_r($_SESSION);
