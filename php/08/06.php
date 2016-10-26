<?php

$file = 'guestbook.json';

$data = [];

if(file_exists($file)){
  $data = json_decode(file_get_contents($file), true);
  $data = array_reverse($data);
}

if(isset($_POST['name']) && isset($_POST['message'])){
  $name = $_POST['name'];
  $message = $_POST['message'];

  array_unshift($data, [
    'name' => $name,
    'message' => $message
  ]);

  file_put_contents($file, json_encode($data));
}

foreach ($data as $key => $value) {
  printf('Name: %s <br>Message:<br>%s<br><br>', $value['name'], $value['message']);
}

 ?>



 <form action="06.php" method="POST">
   <label>Name</label>
   <input name="name" type="text"/>
   <label>Message</label>
   <textarea name="message"></textarea>
   <input type="submit" value="Send">
 </form>
