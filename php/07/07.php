<?php
include('resources/messages.php');

$file = 'resources/write.txt';
$current = nl2br(file_get_contents($file));

print '<h2>Before:</h2>';
print $current;

$message = $messages[array_rand($messages)] . "\n";

file_put_contents($file, $message, FILE_APPEND);

$after = nl2br(file_get_contents($file));

print '<h2>After:</h2>';
print $after;
