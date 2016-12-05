<?php

$users = json_decode(file_get_contents("users.json"), true);

// Return a random user
function randomizeUser ($users)
{
  return $users[array_rand($users)];
}

// Return user info based on username matching
function getUserInfo ($username, $users)
{
  foreach ($users as $user) {
    if ($user["username"] === $username) {
      return $user;
    }
  }
}

// Get user info based on given username, or randomize user if no username was given
$user = (isset($_GET["user"])) ? getUserInfo($_GET["user"], $users):randomizeUser($users);

?>
<html>
  <head>
    <meta charset="utf-8">
    <title><?php print "{$user["name"]} (@{$user["username"]}) / Profile"; ?></title>
  </head>
  <body>

    <img src="https://github.com/<?= $user["username"]; ?>.png" alt="User avatar" style="width: 100px; height: 100px; border-radius: 50px; box-shadow: 0px 2px 5px rgba(0,0,0,0.15); border: 3px solid #fff; float: left;">
    <h2 style="float: left; line-height: 106px; margin: 0 0 0 10px; font-weight: 400;">This is the profile of <b><?= $user["name"]; ?></b></h2>
    <p style="width: 100%; float: left;"><?= $user["bio"]; ?></p>

    <a href="/" style="float: left;">
      <button>Go back home</button>
    </a>

  </body>
</html>
