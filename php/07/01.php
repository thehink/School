<?php
$contents = file_get_contents("resources/hello.txt");
print nl2br($contents);
