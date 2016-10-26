<?php

$jsonPath = './resources/data.json';

$jsonText = file_get_contents($jsonPath);

$data = json_decode($jsonText, true);


foreach ($data as $key => $user) {
  $info = $user['info'];
  printf('%s är en %s från %s<br>', $info['name'], $info['job'], $info['location']);
}
