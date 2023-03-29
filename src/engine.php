<?php
namespace BrainGames\engine;

$autoloadPath1 = __DIR__ . '/../../../autoload.php';
$autoloadPath2 = __DIR__ . '/../vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use function cli\line;
use function cli\prompt;

function compareAnswer($correctAnswer, $answer)
{
    if ($correctAnswer === $answer) {
        return true;
    } else {
        return false;
    }
}

function engineGame($question, $examples)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($question);
    $count = 0;
    while ($count < 3) {
        line("Question: $examples[$count][0])");
        $answer = prompt('Your answer: ');
        $correctAnswer = $examples[$count][1];
        if (compareAnswer($correctAnswer, $answer)) {
                $count = $count + 1;
                line('Correct!');
            } else {
                line("'$answer' is wrong answer ;(. Correct answer was '$examples[$count][1]'.");
                line("Let's try again,", $name, "!");
                return;
        }
    }
    line("Congratulations,", $name, "!");
}
