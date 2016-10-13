<?php

$output = '';
if(isset($_POST['name1']) && isset($_POST['name2']) && isset($_POST['hp1']) && isset($_POST['hp2'])){


  $player1 =  [
    "name" => filter_input(INPUT_POST, 'name1', FILTER_SANITIZE_SPECIAL_CHARS),
    "hp" => is_numeric($_POST['hp1']) ? $_POST['hp1'] : 10,
    "max_hp" => is_numeric($_POST['hp1']) ? $_POST['hp1'] : 10
  ];

  $player2 =  [
    "name" => filter_input(INPUT_POST, 'name2', FILTER_SANITIZE_SPECIAL_CHARS),
    "hp" => is_numeric($_POST['hp2']) ? $_POST['hp2'] : 10,
    "max_hp" => is_numeric($_POST['hp2']) ? $_POST['hp2'] : 10
  ];

  $output = sprintf('<h1>%s vs %s</h1><p>May the best fighter win!</p>', $player1['name'], $player2['name']);

$round = 1;
  while($player1['hp'] > 0 && $player2['hp'] > 0){
    $output .= sprintf('<div class="round">Round %d - Fight!<br>', $round++);
    $player1_roll =  rand(1,6);
    $player2_roll = rand(1,6);
    $damage = $player1_roll - $player2_roll;
    $output .= sprintf('[HP: %d] <b>%s</b> throws a %d<br>', $player1['hp'], $player1['name'], $player1_roll);
    $output .= sprintf('[HP: %d] <b>%s</b> throws a %d<br>', $player2['hp'], $player2['name'], $player2_roll);

//if $damage is negative then player 2 did damage, if positive player 1 did damage. If 0 no players did damage
    if($damage < 0){
        $player1['hp'] -= abs($damage);
        $output .= sprintf('%s lost %dHP', $player1['name'], abs($damage));
        if($player1['hp'] <= 0)
          $output .= ' and got knocked out';
    }else if($damage > 0){
        $player2['hp'] -= abs($damage);
        $output .= sprintf('%s lost %dHP', $player2['name'], abs($damage));
        if($player2['hp'] <= 0)
          $output .= ' and got knocked out';
    }else{
        $output .= sprintf('Both players choked!');
    }

    $output .= '</div>';
  }

  $output .= '<div class="finish">';
  if($player1['hp'] > $player2['hp']){
    $output .= sprintf('%s with %sHP left has won over %s!', $player1['name'], $player1['hp'], $player2['name']);
  }else{
    $output .= sprintf('%s with %sHP left has won over %s!', $player2['name'], $player2['hp'], $player1['name']);
  }
    $output .= '</div>';

}

?>

<!DOCTYPE HTML>
<html>
<head>
  <title>Fight</title>
  <style type="text/css">
  body,main{
    width: 100%;
  }
  form{
    display: flex;
    width: 100%;
    padding: 10px 20px;
    background: #EEE;
  }
  fieldset{
    width:40%;
    border: 1px solid #999;
  }

  input{
    margin-right:10px;
    width: 40%;
  }

  input[type=number]{
    width:30px;
  }

  button{
    background: rgba(255,0,0,0.9);
    border: none;
    width: 70px;
    margin-top: 9px;
    height: 50px;
  }

.results{
  display: block;
  position: relative;
  margin: 0 auto;
  width:300px;
}

.round{
  margin: 20px 0;
  border: 1px solid #DDD;
  padding: 10px;
}

  </style>
</head>
<body>
  <main>
<form method="POST">
  <fieldset>
   <legend>Player 1:</legend>
   Name: <input name="name1" type="text" value="<?=isset($player1)?$player1['name'] : 'Masterchief'?>">
   HP: <input name="hp1" type="number" value="<?=isset($player1)?$player1['max_hp'] : '10'?>">
 </fieldset>
 <button type="submit">Fight</button>
 <fieldset>
   <legend>Player 2:</legend>
   Name: <input name="name2" type="text" value="<?=isset($player2)?$player2['name'] : 'Mario'?>">
   HP: <input name="hp2" type="number" value="<?=isset($player2)?$player2['max_hp'] : '10'?>">
 </fieldset>
</form>
<div class="results">
  <?=$output?>
</div>
</main>
</body>
<html>
