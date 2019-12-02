<?php

namespace BrainGames\games\Gcd;

use function BrainGames\Engine\run as runGame;

function calcGcd($number1, $number2)
{
    if ($number2 == 0) {
        return $number1;
    }
    return calcGcd($number2, $number1 % $number2);
}

function run()
{
    $getGameData = function () {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);

        $question = "{$number1} {$number2}";
        $answer = calcGcd($number1, $number2);

        return [$question, $answer];
    };

    runGame("Find the greatest common divisor of given numbers.", $getGameData);
}
