<?php 

for ($x = 0; $x <= 10; $x++) {
    echo "Number: $x <br>";
}
echo '<br><br>';

$loop = 1;

while ($loop <= 5) {
    echo "Number: $loop <br>";
    $loop++;
}

echo '<br><br>';

$posts = ['Post 1', 'Post 2', 'Post 3', 'Post 4', 'Post 5'];

foreach ($posts as $index => $post) {
    echo "$index - $post <br>";
}

echo '<br><br>';

$person = [
    'first_name' => 'Brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com',
];

foreach ($person as $key => $val) {
    echo "$key - $val <br>";
}
 
?>