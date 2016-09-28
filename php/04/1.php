<?php

$userdata = [];

array_push($userdata, [
  "username" => "asd",
  "email" => "asd",
  "password" => "asd"
]);

array_push($userdata, [
  "username" => "user2",
  "email" => "email2",
  "password" => "password2"
]);

array_push($userdata, [
  "username" => "user3",
  "email" => "email3",
  "password" => "password3"
]);

array_push($userdata, [
  "username" => "user4",
  "email" => "email4",
  "password" => "password4"
]);


if(isset($_POST["username"]) && isset($_POST["password"])){
  $username =  $_POST["username"];
  $password = $_POST["password"];


  for($i = 0; $i < count($userdata); $i++){
    if(($userdata[$i]["username"] == $username || $userdata[$i]["email"] == $username)
      && $userdata[$i]["password"] == $password){
        printf("Welcome, %s", $username);
       exit;
      }
  }

  echo "Wrong username/password!";


}



 ?>

 <form action="" method="post">
   <h1>Login Form</h1>
   <input name="username" type="text"/>
   <input name="password" type="password"/>
   <button type="submit">asd</button>
 </form>
