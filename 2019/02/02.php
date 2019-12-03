<?php

$file = file_get_contents("world2.txt");
//$lines = explode("\n", $file);

preg_match("/#( +)#/m", $line, $match);

print_r($match);

?>