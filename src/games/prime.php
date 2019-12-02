<?php

namespace BrainGames\games\Prime;

use function BrainGames\Engine\run as runGame;

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
    $getGameData = function () {
        $question = rand(1, 100);
        $answer = (isPrime($question) ? 'yes' : 'no');

        return [$question, $answer];
    };

    runGame("Answer 'yes' if given number is prime. Otherwise answer 'no'.", $getGameData);
}
