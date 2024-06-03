<?php

function registerUser() {
    echo "User has been registered!";
}

registerUser();

echo '<br><br>';

function registerUser2($username) {
    echo "User $username has been registered!";
}

registerUser2('Brad');

echo '<br><br>';

function add($num1, $num2) {
    return $num1 + $num2;
}



?>