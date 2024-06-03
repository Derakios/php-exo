<?php 

$fruits = ['apple', 'banana', 'orange', 'pear'];

echo count ($fruits);

echo '<br><br>';

echo in_array('banana', $fruits);

echo '<br><br>';

//add to an array
$fruits[] = 'grape';
array_push($fruits, 'mango', 'raspberry');
array_unshift($fruits, 'kiwi');

//remove from array
array_pop($fruits);
array_shift($fruits);
unset($fruits[0]);

$chunkedArray = array_chunk($fruits, 3);
var_dump($chunkedArray);

?>