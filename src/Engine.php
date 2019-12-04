<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const COUNT_ROUNDS = 3;

function run($description, $getGameData)
{
    line('Welcome to the Brain Game!');
    line($description);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    for ($roundNumber = 1; $roundNumber <= COUNT_ROUNDS; $roundNumber++) {
        [$question, $correctAnswer] = $getGameData();
        line('Question: %s', $question);
        $answer = prompt('Your answer');

        if ($answer === (string) $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            break;
        }
    }

    line("Congratulations, %s!", $name);
}
