<?php

/**
 * Актуализировать комментарий перед окончанием проекта
 */

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const COUNT_ROUNDS = 3;

/**
 * Актуализировать комментарий перед окончанием проекта
 */
function run($description, $gameData)
{
    line('Welcome to the Brain Game!');
    line($description);
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);

    for ($roundNumber = 1; $roundNumber <= COUNT_ROUNDS; $roundNumber++) {
        $value = $gameData();
        line('Question: %s', $value[0]);
        $answer = prompt('Your answer');

        $correctAnswer = $value[1];
        if ($answer === (string) $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            break;
        }
    }

    if ($roundNumber === 4) {
        line("Congratulations, %s!", $name);
    }
}
