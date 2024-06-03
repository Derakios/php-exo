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

//combine array
$a = ['a', 'b', 'c'];
$b = ['avocado', 'banana', 'cherry'];
$c = array_combine($a, $b);

var_dump($c);

echo $c['b'];

$keys = array_keys($c);

echo '<br><br>';

var_dump($keys);

echo '<br><br>';

$flipped = array_flip($c);
var_dump($flipped);	

echo '<br><br>';

$numbers = range(1, 10);
var_dump($numbers);

echo '<br><br>';

$newNumbers = array_map(function ($number) {
    return "Number $number";
}, $numbers);

var_dump($newNumbers);

echo '<br><br>';

$lessThan10 = array_filter($numbers, fn($number) => $number < 10);

// Array Reduce
// "carry" holds the return value of the previous iteration
$sum = array_reduce($numbers, fn($carry, $number) => $carry + $number);
var_dump($sum);

?>