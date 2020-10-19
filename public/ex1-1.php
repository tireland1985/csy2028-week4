<?php
//building from last weeks dice roll excercise, create a function to roll a dice 
function diceRoll() {
    $number = rand(1, 6);
    echo '<p>You rolled a ' . $number . '</p>';
}
// now roll 5 times
diceRoll();
diceRoll();
diceRoll();
diceRoll();
diceRoll();