<?php
namespace BrainGames\engine;

function compareAnswer($correctAnswer, $answer)
{
    if ($correctAnswer === $answer) {
        return true;
    } else {
        return false;
    }
}

function engineGame($question)
{
    line('Welcome to the Brain Game!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($question);
    $count = 0;
    while ($count < 3) {
        $question = generate();
        line("Question: $question"); 
        $answer = prompt('Your answer: ');
        $correctAnswer = caclulate($question);
        if (compareAnswer($correctAnswer, $answer) {
                $count = $count + 1;
                line('Correct!');
            } else {
                line("'$answer' is wrong answer ;(. Correct answer was '$correctAnswer'.");
                line("Let's try again,", $name, "!");
                return;
            }
        }
    }
    line("Congratulations,", $name, "!");
}
}

