<?php


$folder = "./stuff";
$files = [
  "test" => "Test things",
  "qa" => "Quality assurance things",
  "production" => "Production things"
];

$dirExists = file_exists($folder);

if(!$dirExists){
  printf('Directory doesnt exist!');
  return;
}

foreach ($files as $name => $content) {
  $path = $folder . '/' . $name . '.txt';
  $fileExists = file_exists($path);
  if($fileExists){
    print 'Deleted file - ' . $path . '<br>';
    unlink($path);
    return;
  }
}

if($dirExists){
  print 'Removed Directory - ' . $folder . '<br>';
  rmdir($folder);
}
