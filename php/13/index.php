<?php

$users = json_decode(file_get_contents("users.json"), true);

?>
<html>
  <head>
    <meta charset="utf-8">
    <title>An amazingly useless application</title>
  </head>
  <body>
    
    <h1>View user profiles</h1>
    
    <h3>Available users</h3>
    <ul>
        <?php foreach ($users as $user): ?>
          <li>
            <?= $user["name"]; ?>
            <a href="profile.php?user=<?= $user["username"]; ?>">
              <button>View profile</button>
            </a>
          </li>
        <?php endforeach; ?>
    </ul>
    
  </body>
</html>