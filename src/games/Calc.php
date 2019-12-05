<?php

namespace BrainGames\games\Calc;

use function BrainGames\Engine\run as runGame;

const CALC_GAME_DESCRIPTION = "What is the result of the expression?";
const OPERATIONS = ['*','+','-'];

function run()
{
    $getGameData = function () {
        $number1 = rand(1, 100);
        $number2 = rand(1, 100);
        $operation = array_rand(OPERATIONS, 1);

        $question = "{$number1} {$operation} {$number2}";
        switch ($operation) {
            case '+':
                $answer = $number1 + $number2;
                break;
            case '-':
                $answer = $number1 - $number2;
                break;
            case '*':
                $answer = $number1 * $number2;
                break;
        }

        return [$question, $answer];
    };

    runGame(CALC_GAME_DESCRIPTION, $getGameData);
}
