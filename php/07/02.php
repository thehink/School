<?php
$contents = file_get_contents("resources/quotes.txt");
$arr = explode('<br>', preg_replace('/\R/u', "<br>", $contents));

print '<pre>';

print_r($arr);

echo '<ul>';
foreach ($arr as $key => $value) {
  echo '<li>“' . $value . '”</li>';
}
echo '</ul>';
