<?php
namespace TheApp;

function date($who, $where, $when){
  return sprintf("You are going on a wonderful date with %s at %s on %s", $who, $where, \date('l jS \of F Y h:i:s A', $when));
}

echo date("Anna", "Gramercy Tavern", 1488303000);

?>
