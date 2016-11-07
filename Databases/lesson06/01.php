<?php

$db = new PDO("mysql:host=localhost;port=3306;dbname=contacts;charset=utf8", "root", "root");

if(!empty($_POST)){

  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];

  $query = "
    INSERT INTO people (firstName, lastName, email, phone)
    VALUES (:firstname, :lastname, :email, :phone)
  ";

  $stmt = $db->prepare($query);

  $stmt->execute([
    'firstname' => $firstname,
    'lastname' => $lastname,
    'email' => $email,
    'phone' => $phone
  ]);

  $result = $stmt->fetch();

  print_r($result);

}

?>
<form method="POST">
  <label>Firstname</label>
<input type="text" name="firstname"/>
<label>Lastname</label>
<input type="text" name="lastname"/>
<label>Email</label>
<input type="text" name="email"/>
<label>Phone</label>
<input type="text" name="phone"/>
<input type="submit" value="Add people"/>
</form>
