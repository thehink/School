<?php
if(isset($_GET['file'])){
  $filename = $_GET['file'];
  $filext = substr($_GET['file'], -3, 3);

  if(file_exists($filename) && $filext == 'png'){
    header("Content-type: image/png");
    print file_get_contents($filename);
  }else{
    echo "File doesnt exists!";
  }

}
 ?>
