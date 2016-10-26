<?php
$database = './resources/data.json';

$users = [];

if(file_exists($database)){
  $users = json_decode(file_get_contents($database), true);
}

if(isset($_GET['user'])){
  $userId = $_GET['user'];
  if(!array_key_exists($userId, $users)){
    echo 'User doesnt exist!';
    return;
  }

  $user = $users[$userId];
}


if(isset($user) && isset($_POST['name'])){
  $userId = $_GET['user'];
  $name = filter_var ($_POST['name'], FILTER_SANITIZE_STRING|FILTER_SANITIZE_SPECIAL_CHARS);
  $job = filter_var ($_POST['job'], FILTER_SANITIZE_STRING|FILTER_SANITIZE_SPECIAL_CHARS);
  $location = filter_var ($_POST['location'], FILTER_SANITIZE_STRING|FILTER_SANITIZE_SPECIAL_CHARS);

  $users[$userId]['info'] = [
    'name' => $name,
    'job' => $job,
    'location' => $location
  ];

  $user = $users[$userId];

  file_put_contents($database, json_encode($users));
}



?>

<?php if(isset($user)) : ?>

  <form method="POST">
    <label>Name</label>
    <input name="name" type="text" value="<?=$user['info']['name']?>">
    <label>Job</label>
    <input name="job" type="text" value="<?=$user['info']['job']?>">
    <label>Location</label>
    <input name="location" type="text" value="<?=$user['info']['location']?>">
    <input type="submit" value="Update">
  </form>

<?php endif; ?>

<!-- This is inside the <body> -->

<?php foreach ($users as $id => $user): ?>
  <?php print $user['info']["name"]; ?>
  <a href="?user=<?=$id?>">
     <button>Edit</button>
  </a>
  <br>
<?php endforeach; ?>
