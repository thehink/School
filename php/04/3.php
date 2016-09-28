<?php

$options = [
  '+' => 'Addition (+)',
  '-' => 'Subtraction (-)',
  '/' => 'Divison (/)',
  '*' => 'Multiplication (*)'
];

if(isset($_POST["firstnumber"]) && isset($_POST["secondnumber"])){
  $firstNumber = ($_POST["firstnumber"]);
  $secondNumber = ($_POST["secondnumber"]);
  $operator = ($_POST["operation"]);



  if(!is_numeric($firstNumber) || !is_numeric($secondNumber)){
    die("You submitted a non number!");
  }
  if(!array_key_exists($operator, $options)){
    die("Not a valid operator");
  }

  switch($operator){
    case '+':
      $result = $firstNumber  + $secondNumber;
      break;
    case '-':
      $result = $firstNumber - $secondNumber;
      break;
    case '/':
      $result = $firstNumber / $secondNumber;
      break;
    case '*':
      $result = $firstNumber * $secondNumber;
      break;
}

}

 ?>

   <h1>Calculator</h1>
 <form action="" method="post">
   <input name="firstnumber" type="number"/>
   <select name="operation">
     <?php foreach($options as $option => $option_value){
       printf('<option value="%s">%s</option>', $option, $option_value);
     }
     ?>

   </select>
   <input name="secondnumber" type="number"/>
   <button type="submit">Calculate</button>
 </form>


<?=isset($result) ? "The result is " . $result : ""?>
