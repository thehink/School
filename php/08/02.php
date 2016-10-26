<?php


$folder = "./stuff";
$files = [
  "test" => "Test things",
  "qa" => "Quality assurance things",
  "production" => "Production things"
];

$dirExists = file_exists($folder);

if(!$dirExists){
  print 'Created dir' . $folder . '<br>';
  mkdir($folder);
}

foreach ($files as $name => $content) {
  $path = $folder . '/' . $name . '.txt';
  $fileExists = file_exists($path);
  if(!$fileExists){
    print 'Created file - ' . $path . '<br>';
    file_put_contents($path, $content);
  }
}
