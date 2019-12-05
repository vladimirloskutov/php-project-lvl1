<?php

namespace BrainGames\games\Prime;

use function BrainGames\Engine\run as runGame;

const PRIME_GAME_DESCRIPTION = "Answer 'yes' if given number is prime. Otherwise answer 'no'.";

function isPrime($number)
{
    if ($number <= 1) {
        return false;
    }

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

    runGame(PRIME_GAME_DESCRIPTION, $getGameData);
}
