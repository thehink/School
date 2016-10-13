<?php

function drawGrid($x, $y){
  $output = '<table style="border:1px solid black; border-collapse:collapse">';
  for($i = 0; $i < $y; $i++){
    $output .= '<tr>';
    for($j = 0; $j < $x; $j++){
      $output .= sprintf('<td style="border:1px solid black;font-size:3em;">%s</td>', $j*$y +$i+1);
    }
    $output .= '</tr>';
  }
  $output .= '</table>';
  return $output;
}

$grid = "";

if(isset($_POST["rows"]) && isset($_POST["columns"])){
  $rows = ($_POST["rows"]);
  $columns = ($_POST["columns"]);

  if(!is_numeric($rows) || !is_numeric($columns)){
    die("You submitted a non number!");
  }

  $grid = drawGrid($columns, $rows);

}


 ?>



    <h1>Grid Generator</h1>
  <form action="" method="post">
    <label>Rows</label>
    <input name="rows" type="number"/>
    <label>Columns</label>
    <input name="columns" type="number"/>
    <button type="submit">Draw Grid</button>
  </form>


 <?=$grid?>
