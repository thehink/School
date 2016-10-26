<?php

function listFiles($folder){
  $path = './resources/' . $folder;
  $dirs = scandir($path);
  foreach ($dirs as $file) {
    if($file == '..' || $file == '.'){
      continue;
    }
    printf('%s - %s <br>', $file, file_get_contents($path . $file));
  }
}


listFiles("files/");
