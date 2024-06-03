<?php

$numbers = [1, 2, 3, 4, 5];

$colors = ['red', 'green', 'blue'];

echo $numbers[2];
echo '<br>';
echo $numbers[2] + $numbers[3];
echo '<br>';
echo $colors[1];

var_dump($numbers);

var_dump($colors);

$colorsDeux = [
    1 => 'red',
    2 => 'green',
    3 => 'red',
];
echo $colorsDeux[1];

echo '<br><br>';

$user1 = [
    'first_name' => 'antoine',
    'last_name' => 'cadero',
    'email' => 'antoine@gmail.com'
];

$people = [
    $user1,
    [
        'first_name' => 'John',
        'last_name' => 'Doe',
        'email' => 'john@gmail.com'
    ],
    [
        'first_name' => 'Jane',
        'last_name' => 'Doe',
        'email' => 'jane@gmail.com'
    ]
];



var_dump($people);

?>