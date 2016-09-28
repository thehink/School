<?php

$students = [
  "Larry Ellison" => 165,
  "Jonathan Ive" => 173,
  "Jamie Zawinski" => 167,
  "Ron Gilbert" => 179,
  "Al Lowe" => 178,
  "Paul Allen" => 163,
  "Larry Page" => 168,
  "Miguel De Icaza" => 169,
  "Larry Wall" => 173,
  "Håkon Wium Lie" => 174,
  "Anders Hejlsberg" => 171,
  "Guido van Rossum" => 167,
  "Michael Z Land" => 178,
  "Julian Gollop" => 172,
  "Michael Widenius" => 173,
  "Alan Cox" => 172
];

function getStudentsByScore($students, $min_score){
  $arr = [];
  foreach ($students as $name => $score) {
    if($score >= $min_score){
      $arr[$name] = $score;
    }
  }
  return $arr;
}

function getTopStudents($students, $num){
  arsort($students);
  $keys = array_keys($students);
  $topStudents = [];
  $i = 0;
  $lastScore = 0;
  while(true){

    if(count($students) < $i-1 || $num <= $i && $lastScore != $students[$keys[$i]])
      break;

    $topStudents[$keys[$i]] = $students[$keys[$i]];
    $lastScore = $students[$keys[$i]];
    ++$i;
  }

  return $topStudents;
}

function studentSearch($students, $string){
  $filteredStudents = [];
  foreach ($students as $name => $score) {
    if(strpos(strtolower($name), $string)){
      $filteredStudents[$name] = $score;
    }
  }
  return $filteredStudents;
}

function countNames($students){
  $nameCounts = [];
  foreach ($students as $name => $score) {
    $firstName = explode(' ', $name)[0];

    if(!array_key_exists($firstName, $nameCounts)){
      $nameCounts[$firstName] = 1;
    }else{
      $nameCounts[$firstName]++;
    }

    /* Shorter way to write the above:
    $nameCounts[$firstname] = array_key_exists($firstname, $nameCounts) ? $nameCounts[$firstname]+1 : 1;
    */
  }
  return $nameCounts;
}

echo "<b>Uppgift 1</b><br>";
$result = getStudentsByScore($students, 170);
print count($result);
echo "<br><br><br>";

echo "<b>Uppgift 2</b><br>";
$result = getTopStudents($students, 3);
print_r($result);
echo "<br><br><br>";

echo "<b>Uppgift 3</b><br>";
$result = studentSearch($students, "z");
print_r($result);
echo "<br><br><br>";

echo "<b>Uppgift 4</b><br>";
$result = countNames($students);
print_r($result);
