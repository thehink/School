<?php

$data = [
  [ "games" => "WWDWWW", "team" => "Frölunda Indians" ],
  [ "games" => "DDDWLW", "team" => "Skellefteå AIK" ],
  [ "games" => "WWDLWW", "team" => "HV71" ],
  [ "games" => "WLLWLD", "team" => "Modo" ]
];



function compileResults($data){
  $points = [
    "W" => 3,
    "D" => 1,
    "L" => 0
  ];

  $results = [];
  for($i = 0; $i < count($data); $i++){

    if(!isset($results[$data[$i]["team"]]))
      $results[$data[$i]["team"]] = 0;

    for($j = 0; $j < strlen($data[$i]["games"]); $j++){
      $results[$data[$i]["team"]] += $points[$data[$i]["games"][$j]];
    }
  }
  arsort($results);
  return $results;
}

// Your magic code here

$result = compileResults($data);
print_r($result);

/*
  Output:
  Array (
     [Frölunda Indians] => 16
     [HV71 FC] => 13
     [Skellefteå AIK] => 9
     [Modo] => 7
  )
*/
