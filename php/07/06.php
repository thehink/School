<?php

if($_SERVER['REQUEST_METHOD'] === 'GET'){
  if(isset($_GET['file']) && strlen($_GET['file']) > 0){
    $filename = $_GET['file'];
    if(file_exists('files/' . $filename)){
      $fileContents = file_get_contents('files/' . $filename);
      print nl2br($fileContents);
    }else{
      print 'File doesnt exist';
    }
  }else{
    print 'You need to supply a file query key and value';
  }
}else{
  print 'Unsupported request method';
}
