<?php

namespace BrainGames\Games\calc;

require_once(__DIR__ . '/../engine.php');

use function BrainGames\engine\compareAnswer;
use function BrainGames\engine\engineGame; 

function generate()
{
    $num1 = rand(100);
    $num2 = rand(100);
    $operatiom = ["*", "+", "-"];
    return [$num1, $operation[rand(2)], $num2];
}
function calculate($array)
{
    if ($array[1] === "+") {
        return $nam1 + $naum2;
    }elseif ($array[1] === "-") {
        return $nam1 - $naum2;
    }elseif ($array[1] === "*") {
        return $nam1 * $naum2;
    }
}
$question = 'What is the result of the expression?';
engineGame($question);
