<?php

session_start();

$_SESSION['hello'] = 'Hello World!';

echo '<pre>';
print_r($_SESSION);
