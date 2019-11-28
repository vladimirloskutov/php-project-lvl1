<?php

namespace BrainGames\games\Prime;

use function BrainGames\Engine\run as runGame;

define("DESCRIPTION", 'Answer "yes" if given number is prime. Otherwise answer "no".');

function isPrime($number)
{
    for ($i = 2; $i <= sqrt($number); $i++) {
        if (!($number % $i)) {
            return false;
        }
    }
    return true;
}

function run()
{
    $getGameDataFunction = function () {
        $question = rand(1, 100);
        $answer = (isPrime($question) ? 'yes' : 'no');

        return [$question, $answer];
    };

    runGame(DESCRIPTION, $getGameDataFunction);
}
