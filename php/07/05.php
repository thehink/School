<?php

$filename = 'resources/counter.txt';

function counterAdd(){
  global $filename;

  $counter = 0;
  if(file_exists($filename))
    $counter = (int)file_get_contents($filename);
  $counter++;
  file_put_contents($filename, $counter);
}

function counterGet(){
  global $filename;
  return (int)file_get_contents($filename);
}

counterAdd();  // Add another visitor to the counter
printf("Number of visitors on this website: %d", counterGet());
