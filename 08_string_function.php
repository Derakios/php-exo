<?php 

$string = 'Hello world';

echo strlen($string);

echo '<br><br>';

echo strpos($string, 'o');

echo '<br><br>';

echo strrpos($string, 'o');

echo '<br><br>';

echo strrev($string);

echo '<br><br>';

echo ucwords($string);

echo '<br><br>';

//string replace
echo str_replace('world', 'everyone', $string);

echo '<br><br>';

echo substr($string, 0, 5);
echo substr($string, 5);

//start with
if (str_ends_with($string, 'ld')) {
    echo 'YES';
}

echo '<br><br>';

printf('%s is a %s', ' Brad', ' nice guy');
echo '<br><br>';

printf('1 + 1 = %f', 1 + 1); // float

?>