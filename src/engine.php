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
        $example = $examples[$count][1];
        line("Question: $example");
        $answer = prompt('Your answer: ');
        $correctAnswer = $examples[$count][2];
        if (compareAnswer($correctAnswer, $answer)) {
                $count = $count + 1;
                line('Correct!');
        } else {
                $correct = $examples[$count][2];
                line("'$answer' is wrong answer ;(. Correct answer was '$correct'.");
                line("Let's try again, %s!", $name);
                return;
        }
    }
    line("Congratulations, %s!", $name);
}
