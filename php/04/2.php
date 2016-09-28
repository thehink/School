<?php

if(isset($_POST["firstname"]) && isset($_POST["lastname"])){
  $firstName = strtolower($_POST["firstname"]);
  $lastName = strtolower($_POST["lastname"]);

  $generatedEmail = $firstName . '.' . $lastName . '@tveitanklaiber.com';
}

 ?>

   <h1>Email Address Generator</h1>
 <form action="" method="post">
   <input name="firstname" type="text"/>
   <input name="lastname" type="text"/>
   <button type="submit">Generate Email</button>
 </form>


<?=isset($generatedEmail) ? "Your new email is " . $generatedEmail : ""?>
