<?php

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

$age = 25;

if ($age >= "18") {
    echo "je peux voter";
} else {
    echo "Je ne peux pas voter";
}

echo '<br><br>';

$t = date('H');

if($t < 12) {
    echo "Bonne matinée";
} elseif($t < 17) {
    echo "Bon après-midi";
} else {
    echo "Bonne soirée";
}

$today = date('F j, Y, g:i a');

echo '<br><br>';
echo $today;


echo '<br><br>';
$posts = [];

if(!empty($posts[0])) {
    echo $posts[0];
} else {
echo "There are no posts";
}

echo '<br><br>';

$favcolor = 'red';
switch ($favcolor) {
    case'red':
        echo "Je préfère le rouge";
        break;
    case 'blue':
        echo "Je préfère le bleu";
        break;
    case 'green':
        echo "Je préfère le vert";
        break;
    default:
        echo "Je préfère rien";
}

?>