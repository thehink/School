<?php
$text = 'I am Benjamin, the master of PHP!\n';

file_put_contents('resources/master.txt', $text);
print file_get_contents('resources/master.txt');
